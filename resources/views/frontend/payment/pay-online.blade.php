<!DOCTYPE html>
<html>
<head>
    <title>Pay Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f8fafc;
            font-family: 'Poppins', sans-serif;
        }
        .payment-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
            padding: 40px;
            max-width: 600px;
            margin: 60px auto;
            text-align: center;
        }
        .payment-card h3 {
            color: #1a237e;
            font-weight: 600;
            margin-top: 10px;
        }
        .logo {
            width: 180px;
            height: auto;
            margin-bottom: 15px;
        }
        label {
            font-weight: 500;
            color: #374151;
        }
        .form-control {
            padding: 10px;
            border-radius: 8px;
        }
        .btn-primary {
            width: 100%;
            font-weight: 600;
            padding: 12px;
            border-radius: 8px;
            margin-top: 10px;
        }
        .footer-text {
            margin-top: 25px;
            font-size: 13px;
            color: #6c757d;
        }

        /* Mobile Responsive */
        @media (max-width: 576px) {
            .payment-card {
                max-width: 95%;
                padding: 25px;
            }
            .payment-card h3 {
                font-size: 20px;
            }
            .btn-primary {
                padding: 10px;
                font-size: 14px;
            }
            .logo {
                width: 120px;
            }
        }
    </style>

</head>
<body>

<div class="payment-card">

    <!-- Logo -->
 <img src="{{ asset('frontend/assets/lms.png') }}" alt="Logo" class="logo"> 
    <h3>Online Payment</h3>

    <form method="POST" action="{{ route('payonline.submit') }}">
        @csrf

        <div class="mb-3 text-start">
            <label>Payee Name</label>
            <input type="text" name="payee_name" class="form-control" required>
        </div>

        <div class="mb-3 text-start">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3 text-start">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" required>
        </div>

        <div class="mb-3 text-start">
            <label>Address</label>
            <input type="text" name="address" class="form-control">
        </div>

        <div class="mb-3 text-start">
            <label>City</label>
            <input type="text" name="city" class="form-control">
        </div>

        <div class="mb-3 text-start">
            <label>Postal Code</label>
            <input type="text" name="postal_code" class="form-control">
        </div>

        <div class="mb-3 text-start">
            <label>Reason for Payment</label>
            <input type="text" name="reason" class="form-control" required>
        </div>

        <div class="mb-3 text-start">
            <label>Amount (LKR)</label>
            <input type="number" step="0.01" name="amount" class="form-control" required>
        </div>

        <button class="btn btn-primary">Proceed to Pay</button>
    </form>

    <p class="footer-text">
        This payment is processed securely via <strong>Cybersource Gateway</strong>.<br>
        Need help? Contact <a href="mailto:info@iwgc.lk">info@iwgc.lk</a>
    </p>
</div>

</body>
</html>
