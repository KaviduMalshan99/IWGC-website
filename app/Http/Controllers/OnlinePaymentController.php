<?php

namespace App\Http\Controllers;
use App\Models\OnlinePayment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OnlinePaymentController extends Controller
{
    public function showForm()
    {
        return view('frontend.payment.pay-online');
    }

    public function redirectToGateway(Request $request)
    {
        $payment = OnlinePayment::create($request->all());

        $merchant_id = '48835900';
        $access_key = 'ea5460db1280339081d459c01ae57e85';
        $profile_id = '3551ABE5-B58F-4CBD-9240-84418C4EF72F';
        $secret_key = '465818be32fe42fcacf32fb4b2304cf3e5f3c88dfca74a00a17b8c337f6ccd01fdfe38246b964ddc982e0d6c36fe2b9e348b19080129456db614d5be48f65290afee701a2f394cd780c7ec0b281c421688569835f7bd4ccc8d218c5ca29d2c68422f5456f42642dd983395fd4c98423b5f4ea21e6d5e4724a177bf5e5a57d500';

        $uuid = Str::uuid();
        $date = gmdate("Y-m-d\TH:i:s\Z");

        $fields = [
            "access_key" => $access_key,
            "profile_id" => $profile_id,
            "merchant_id" => $merchant_id,
            "transaction_uuid" => $uuid,
            "signed_field_names" =>
                "access_key,profile_id,merchant_id,transaction_uuid,signed_field_names,unsigned_field_names,signed_date_time,locale,transaction_type,amount,currency,reference_number,bill_to_forename,bill_to_surname,bill_to_email,bill_to_phone,bill_to_address_line1,bill_to_address_city,bill_to_address_country,bill_to_address_postal_code,override_custom_receipt_page,merchant_defined_data1",
            "unsigned_field_names" => "",
            "signed_date_time" => $date,
            "locale" => "en",
            "transaction_type" => "sale",
            "amount" => number_format($payment->amount, 2, '.', ''),
            "currency" => "LKR",
            "reference_number" => "PAY-" . time(),
            "bill_to_forename" => $payment->payee_name,
            "bill_to_surname" => $payment->payee_name,
            "bill_to_email" => $payment->email,
            "bill_to_phone" => $payment->phone,
            "bill_to_address_line1" => $payment->address,
            "bill_to_address_city" => $payment->city,
            "bill_to_address_country" => "LK",
            "bill_to_address_postal_code" => $payment->postal_code,
            "override_custom_receipt_page" => route('payonline.success'),
            "merchant_defined_data1" => $payment->id,
        ];

        $data_to_sign = collect(explode(',', $fields['signed_field_names']))
            ->map(fn($key) => "$key={$fields[$key]}")
            ->implode(',');

        $signature = base64_encode(hash_hmac('sha256', $data_to_sign, $secret_key, true));

        return view('frontend.payment.pay-online-redirect', compact('fields', 'signature'));
    }



    public function success(Request $request)
    {
        $paymentId = $request->input('req_merchant_defined_data1');
        $payment = OnlinePayment::find($paymentId);

        if ($payment) {
            $payment->update([
                'transaction_id' => $request->input('transaction_id'),
                'status' => 'success'
            ]);
        }

        return view('frontend.payment.payonline-success', compact('payment'));
    }


    public function fail()
    {
        return view('frontend.payment.payonline-fail');
    }




    //admin
      public function index()
    {
        $payments = OnlinePayment::all();
        return view('AdminDashboard.Payment.index', compact('payments'));
    }

        public function destroy($id)
    {
        $payment = OnlinePayment::findOrFail($id);
        $payment->delete();
        return redirect()->back()->with('success', 'Payment Record Deleted Successfully!');
    }

}
