@extends('AdminDashboard.master')

@section('title', 'Project')

@section('content')

<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-6 mt-3">
        <h4>Online Payments</h4>
      </div>
      
    </div>
  </div>
</div>

<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">

          <div class="list-project">
            <table class="table" id="project-list">
              <thead>
                <tr>
                  <th>Transaction id</th>
                  <th>Date</th>
                  <th>Amount</th>
                  <th>Payee Name</th>
                  <th>Email</th>
                  <th>Contact</th>
                  <th>Address</th>
                  <th>Reason</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($payments as $payment)
                  <tr>
                    <td>{{ $payment->transaction_id }}</td>
                    <td>{{ $payment->created_at->format('Y-m-d H:i A') }}</td>
                    <td>Rs {{ number_format($payment->amount, 2) }}</td>
                    <td>{{ $payment->payee_name }}</td>
                    <td>{{ $payment->email }}</td>
                    <td>{{ $payment->phone }}</td>
                    <td>{{ $payment->address}}, {{ $payment->city}}, {{ $payment->postal_code}}</td>
                    <td>{{ $payment->reason }}</td>
                  </tr>
                @endforeach
              </tbody>

            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
