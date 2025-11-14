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

        $merchant_id = 'test_company12_1762061686';
        $access_key = '1807058e145b36baa7f615d73578e6b7';
        $profile_id = 'A6331C57-9BBB-490C-B6D2-0E32E7EDC242';
        $secret_key = '4cef0751bbd544fab1f92f111f3db15760b9b75f4d81408ebd6c52e66c589037263a6f1f607741d49d2163158aa86c22ab245ec167c14ebb92d24541925ad51315608a2f8d8243fe8631f85ceaa3ccbd28948525e6e14a67aad4e6bc4bf60322d6e699005ab94f7a89bff19d62511c9ddf29d8d895044c02ae1392e93a18ced9';

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
