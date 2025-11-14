@extends('AdminDashboard.master')

@section('title', 'Project')

@section('content')
<style>
    .table-responsive-fix {
        width: 100%;
        overflow-x: auto !important;
        -webkit-overflow-scrolling: touch;
    }

    /* Fix for admin themes that force table wrapping */
    .table-responsive-fix table {
        min-width: 1200px; /* adjust if needed */
    }
</style>

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

         
      <div class="table-responsive-fix">
          <table class="table" id="blog-list">
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
                      <th>Action</th>
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

                          <td>
                              <form action="{{ route('payments.destroy', $payment->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this payment?');">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-danger btn-sm p-2">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              </form>
                          </td>
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
