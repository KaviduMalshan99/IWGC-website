<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Failed - {{ $student->full_name ?? 'Student' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f8fafc;
            font-family: 'Poppins', sans-serif;
        }
        .fail-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.08);
            padding: 40px;
            max-width: 600px;
            margin: 80px auto;
            text-align: center;
        }
        .fail-icon {
            color: #dc3545;
            margin-bottom: 20px;
        }
        .fail-icon svg {
            width: 85px;
            height: 85px;
        }
        h3 {
            color: #dc3545;
            font-weight: 600;
        }
        p {
            color: #555;
            margin-bottom: 8px;
        }
        .btn-danger {
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
            .fail-card {
            max-width: 95%; 
            width: auto; 
        }
        }
    </style>
</head>
<body>

    <div class="fail-card">
        <div class="fail-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 0a8 8 0 1 0 8 8A8 8 0 0 0 8 0ZM4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708Z"/>
            </svg>
        </div>

        <h3>Payment Failed</h3>
        <p class="text-muted">Unfortunately, your payment could not be processed.</p>
        <p>Please try again or contact for assistance.</p>
        <a href="{{ route('payonline.form') }}" class="btn btn-danger">Retry Payment</a>

        <div class="footer-note">
                 <p>For any assistance, contact <a href="mailto:info@iwgc.lk">info@iwgc.lk</a>
        </div>
    </div>

</body>
</html>
