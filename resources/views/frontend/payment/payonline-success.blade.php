<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful - {{ $student->full_name ?? 'Student' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f8fafc;
            font-family: 'Poppins', sans-serif;
        }
        .success-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.08);
            padding: 40px;
            max-width: 600px;
            margin: 80px auto;
            text-align: center;
        }
        .success-icon {
            color: #28a745;
            margin-bottom: 20px;
        }
        .success-icon svg {
            width: 85px;
            height: 85px;
        }
        h3 {
            color: #28a745;
            font-weight: 600;
        }
        p {
            color: #555;
            margin-bottom: 8px;
        }
        .details {
            background: #f1f5f9;
            border-radius: 10px;
            padding: 15px;
            margin: 25px 0;
            font-size: 15px;
        }
        .btn-success {
            border-radius: 8px;
            font-weight: 600;
            padding: 10px 30px;
        }
        .footer-note {
            font-size: 13px;
            color: #6c757d;
            margin-top: 25px;
        }

          @media (max-width: 576px) {
            .success-card {
            max-width: 95%; 
            width: auto; 
        }
        }
    </style>
</head>
<body>

    <div class="success-card">
        <div class="success-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM7.97 11.03a.75.75 0 0 0 1.08.02l3.992-3.992a.75.75 0 1 0-1.06-1.06L8.5 9.44 6.53 7.47a.75.75 0 0 0-1.06 1.06l2.5 2.5z"/>
            </svg>
        </div>

        <h3>Payment Successful!</h3>
        <p class="mb-1">Thank you, <strong>{{ $payment->payee_name }}</strong>.</p>
        <p>Your payment of <strong>Rs {{ number_format($payment->amount, 2) }}</strong> has been received successfully.</p>

        <div class="details text-start">
            <p><strong>Transaction ID:</strong> {{ $payment->transaction_id }}</p>
            <p><strong>Date:</strong> {{ now()->format('Y-m-d H:i A') }}</p>
        </div>

        <div class="footer-note">
            <p>For any assistance, contact <a href="mailto:info@iwgc.lk">info@iwgc.lk</a>
        </div>
    </div>

</body>
</html>
