<?php

namespace App\Http\Controllers;
use App\Models\OnlinePayment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade\Pdf; 
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class OnlinePaymentController extends Controller
{

    public function showForm()
    {
        return view('frontend.payment.pay-online');
    }


    public function redirectToGateway(Request $request)
    {
        // Store form data including currency
        $payment = OnlinePayment::create($request->all());

        // ----------------------------
        // SELECT CREDENTIALS BY CURRENCY
        // ----------------------------
        $credentialsLKR = [
            'merchant_id' => '48835900',
            'access_key'  => 'ea5460db1280339081d459c01ae57e85',
            'profile_id'  => '3551ABE5-B58F-4CBD-9240-84418C4EF72F',
            'secret_key'  => '465818be32fe42fcacf32fb4b2304cf3e5f3c88dfca74a00a17b8c337f6ccd01fdfe38246b964ddc982e0d6c36fe2b9e348b19080129456db614d5be48f65290afee701a2f394cd780c7ec0b281c421688569835f7bd4ccc8d218c5ca29d2c68422f5456f42642dd983395fd4c98423b5f4ea21e6d5e4724a177bf5e5a57d500',
        ];

        $credentialsUSD = [
            'merchant_id' => '48835901',
            'access_key'  => '4fc633e9b14d329f92e5da7ee81841c4',
            'profile_id'  => 'F08AA716-EA99-4A3D-8233-E199AEC93E',
            'secret_key'  => '28df00e11dad4a75b288385c055d544e5b01afd47a9f43e2a0c64ee99cf71fbfc5a46641084a441bbdcf2c2127150272c400e37fe3aa46c1b29bf64e605ec4c754d75b4000f04f878e2f1c89be5e93272a2eec1131204cf1941d95fe35b20fb133fd200d9aa24254823fc05e3b4849700b141c57565a423f9c31c67ec271b48a',
        ];

        // Pick correct credential set
        $cred = ($payment->currency === 'USD') ? $credentialsUSD : $credentialsLKR;

        $merchant_id = $cred['merchant_id'];
        $access_key  = $cred['access_key'];
        $profile_id  = $cred['profile_id'];
        $secret_key  = $cred['secret_key'];

        // --------------------
        // Build CyberSource fields
        // --------------------
        $uuid = Str::uuid();
        $date = gmdate("Y-m-d\TH:i:s\Z");

        $fields = [
            "access_key" => $access_key,
            "profile_id" => $profile_id,
            "merchant_id" => $merchant_id,
            "transaction_uuid" => $uuid,

            "signed_field_names" =>
                "access_key,profile_id,merchant_id,transaction_uuid,signed_field_names," .
                "unsigned_field_names,signed_date_time,locale,transaction_type,amount,currency," .
                "reference_number,bill_to_forename,bill_to_surname,bill_to_email,bill_to_phone," .
                "bill_to_address_line1,bill_to_address_city,bill_to_address_country," .
                "bill_to_address_postal_code,override_custom_receipt_page,merchant_defined_data1",

            "unsigned_field_names" => "",
            "signed_date_time" => $date,
            "locale" => "en",
            "transaction_type" => "sale",

            // Dynamic amount + currency
            "amount" => number_format($payment->amount, 2, '.', ''),
            "currency" => $payment->currency,  // *** USE SELECTED CURRENCY ***

            "reference_number" => "PAY-" . time(),

            // Billing info
            "bill_to_forename" => $payment->payee_name,
            "bill_to_surname" => $payment->payee_name,
            "bill_to_email" => $payment->email,
            "bill_to_phone" => $payment->phone,
            "bill_to_address_line1" => $payment->address,
            "bill_to_address_city" => $payment->city,
            "bill_to_address_country" => "LK",
            "bill_to_address_postal_code" => $payment->postal_code,

            "override_custom_receipt_page" => route('payonline.success'),

            // store DB payment id
            "merchant_defined_data1" => $payment->id,
        ];

        // Generate signature
        $data_to_sign = collect(explode(',', $fields['signed_field_names']))
            ->map(fn($key) => "$key={$fields[$key]}")
            ->implode(',');

        $signature = base64_encode(
            hash_hmac('sha256', $data_to_sign, $secret_key, true)
        );

        // Go to redirect page
        return view('frontend.payment.pay-online-redirect', compact('fields', 'signature'));
    }

    // -------------------------------
    // SUCCESS CALLBACK
    // -------------------------------
    public function success(Request $request)
    {
        $paymentId = $request->input('req_merchant_defined_data1');
        $payment   = OnlinePayment::find($paymentId);

        if ($payment) {
            $payment->update([
                'transaction_id' => $request->input('transaction_id'),
                'status' => 'success',
            ]);
        }

        return view('frontend.payment.payonline-success', compact('payment'));
    }


    public function fail()
    {
        return view('frontend.payment.payonline-fail');
    }


    //admin
        public function index(Request $request)
    {
        $status = $request->query('status'); 
        if ($status && in_array($status, ['pending', 'approved', 'rejected'])) {
            $payments = OnlinePayment::where('admin_status', $status)->get();
        } else {
            $payments = OnlinePayment::all();
        }

        return view('AdminDashboard.Payment.index', compact('payments', 'status'));
    }


    public function updateStatus(Request $request, $id)
    {
        $payment = OnlinePayment::findOrFail($id);

        $payment->admin_status = $request->admin_status;

        if ($request->admin_status === 'approved') {

            // Generate receipt no
            $receipt_no = 'RCPT-' . strtoupper(Str::random(10));

            // Prepare data for receipt template
            $data = [
                'receipt_no' => $receipt_no,
                'date' => Carbon::now()->format('Y-m-d'),
                'amount_paid' => number_format($payment->amount, 2),
                'student_name' => $payment->payee_name,
                'currency' => $payment->currency,
                'reason' => $payment->reason,  
                'note' => '', 
                'balance_due' => '0.00',
            ];

            // Load the receipt view and pass data
            $pdf = Pdf::loadView('AdminDashboard.Payment.receipt', $data);

            // Define file path (public/uploads/receipt)
            $folder = public_path('uploads/receipt');
            if (!file_exists($folder)) {
                mkdir($folder, 0755, true);
            }

            $file_name = $receipt_no . '.pdf';
            $file_path = $folder . '/' . $file_name;

            // Save PDF to public folder
            $pdf->save($file_path);

            // Update payment record with receipt
            $payment->receipt_no = $receipt_no;
            $payment->receipt_path = 'uploads/receipt/' . $file_name;

            // Send email to payee with raw email
            $payee_email = $payment->email;
            $payee_name = $payment->payee_name;
            $receipt_link = asset($payment->receipt_path);
            $currency = $payment->currency; 

            Mail::raw(
                "Dear $payee_name,\n\nYour payment of $currency {$data['amount_paid']} has been approved.\nYour receipt number is $receipt_no.\n\nThank you,\nImperial Wisdom Graduate Campus",
                function($message) use ($payee_email, $payee_name, $receipt_no, $file_path) {
                    $message->to($payee_email, $payee_name)
                            ->subject("Payment Approved - Receipt $receipt_no")
                            ->attach($file_path);
                }
            );
        }

        $payment->save();

        return redirect()->back()->with('success', 'Status updated successfully!');
    }


        public function destroy($id)
    {
        $payment = OnlinePayment::findOrFail($id);
        $payment->delete();
        return redirect()->back()->with('success', 'Payment Record Deleted Successfully!');
    }

}
