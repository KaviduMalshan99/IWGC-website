<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Payment Receipt</title>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 13px;
        color: #000;
        margin: 20px;
    }

.header {
    display: flex;
    justify-content: space-between; /* pushes logo left, receipt right */
    align-items: center;             /* aligns them vertically in same row */
    margin-bottom: 25px;
}

.logo img {
    width: 130px;
    display: block;
}

.receipt-info {
    text-align: right;
}

.receipt-title h2 {
    margin: 0;
    font-size: 24px;
    font-weight: bold;
    letter-spacing: 1px;
}

.receipt-title p {
    margin: 2px 0 0 0;
    font-size: 13px;
}

    .company-details {
        font-size: 13px;
        line-height: 1.5;
        margin-bottom: 15px;
    }

    .bill-to {
        margin-bottom: 20px;
    }

    .bill-to strong {
        display: block;
        margin-bottom: 5px;
    }

    .details-table {
        width: 100%;
        margin-bottom: 20px;
        border-collapse: collapse;
    }

    .details-table th {
        background-color: #333;
        color: #fff;
        padding: 8px;
        text-align: left;
        font-size: 13px;
    }

    .details-table td {
        border: 1px solid #ccc;
        padding: 8px;
        vertical-align: top;
    }

    .right-info {
        float: right;
        width: 250px;
        margin-bottom: 20px;
    }

    .right-info table {
        width: 100%;
        border-collapse: collapse;
    }

    .right-info td {
        padding: 5px;
        font-size: 13px;
    }

    .right-info tr:nth-child(even) {
        background: #f8f8f8;
    }

    .highlight-box {
        background: #f5f5f5;
        border: 1px solid #ddd;
        padding: 6px 10px;
        margin-top: 5px;
        font-weight: bold;
    }

    .bank-details {
        margin-top: 25px;
        font-size: 13px;
        line-height: 1.6;
    }

    .footer-note {
        font-size: 11px;
        margin-top: 30px;
    }
</style>
</head>
<body>

<div class="header">
    <table style="width:100%; border-collapse:collapse;">
        <tr>
            <td style="width:50%; vertical-align:middle;">
                <img src="{{ public_path('logo1.png') }}" alt="IWGC Logo" style="width:130px;">
            </td>
            <td style="width:50%; text-align:right; vertical-align:middle;">
                <h2 style="margin:0; font-size:22px; font-weight:bold;">RECEIPT</h2>
                <p style="margin:2px 0 0 0; font-size:13px;"># {{ $receipt_no }}</p>
            </td>
        </tr>
    </table>
</div>


 <table class="right-info">
            <tr><td style="text-align:right"><strong>Date:</strong></td><td style="text-align:right">{{ $date }}</td></tr>
           
            <tr class="highlight-box"><td style="text-align:right"><strong> Amount Paid:</strong></td><td style="text-align:right">{{ $currency }} {{ $amount_paid }}</td></tr>
        </table>
<div class="company-details">
    <strong>Imperial Wisdom Graduate Campus Pvt Ltd.,</strong><br>
    No.85-1/3, Galle Road, Dehiwala, Sri Lanka. 10350<br>
    info@iwgc.lk / www.iwgc.lk
</div>

<div class="bill-to">
    <strong>Bill To:</strong>
   {{ $student_name }}
</div>

<table class="details-table" style="margin-top:80px">
    <thead>
        <tr>
            <th>Item</th>
            <th style="text-align:right">Amount</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                {{ $reason }}
            </td>
            <td style="text-align:right">{{ $amount_paid }}</td>
        </tr>
    </tbody>
</table>

<table style="width: 250px; float: right; font-size: 13px;">
    <tr><td style="text-align:right"><strong>Balance Due:</strong></td><td style="text-align:right">{{ $currency }} {{ $balance_due }}</td></tr>
</table>

<div style="clear: both;"></div>


<div class="footer-note">
    <strong>Special Notes:</strong><br><br>
    * This is a computer generated document. No signature is needed for validation.
</div>

</body>
</html>
