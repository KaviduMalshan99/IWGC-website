@extends('AdminDashboard.master')

@section('title', 'Online Payments')

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

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">

            <div class="card">
                <div class="card-body">
                   <div class="mb-3">
                      <a href="{{ route('payments.index') }}" class="btn btn-outline-primary {{ empty($status) ? 'active' : '' }}">All</a>
                      <a href="{{ route('payments.index', ['status' => 'pending']) }}" class="btn btn-outline-warning {{ $status=='pending' ? 'active' : '' }}">Pending</a>
                      <a href="{{ route('payments.index', ['status' => 'approved']) }}" class="btn btn-outline-success {{ $status=='approved' ? 'active' : '' }}">Approved</a>
                      <a href="{{ route('payments.index', ['status' => 'rejected']) }}" class="btn btn-outline-danger {{ $status=='rejected' ? 'active' : '' }}">Rejected</a>
                  </div>


                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Transaction ID</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Payee Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($payments as $payment)
                                    <tr>
                                        <td>{{ $payment->transaction_id }}</td>
                                        <td>{{ $payment->created_at->format('Y-m-d H:i A') }}</td>
                                        <td>{{ $payment->currency }} {{ number_format($payment->amount,2) }}</td>
                                        <td>{{ $payment->payee_name }}</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <!-- View Button triggers modal -->
                                                <button class="btn btn-info btn-sm p-2"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#viewModal{{ $payment->id }}">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                                
                                                <!-- Delete Button -->
                                                <form action="{{ route('payments.destroy', $payment->id) }}" 
                                                      method="POST" 
                                                      onsubmit="return confirm('Are you sure you want to delete this payment?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm p-2">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- ======================= MODALS ======================= -->
                    @foreach ($payments as $payment)
                        <div class="modal fade" id="viewModal{{ $payment->id }}" tabindex="-1">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title">Payment Details</h5>
                                        <button type="button" class="btn-close"
                                            data-bs-dismiss="modal"></button>
                                    </div>

                                    <div class="modal-body">

                                        <table class="table table-bordered">
                                            <tr><th>Transaction ID</th><td>{{ $payment->transaction_id }}</td></tr>
                                            <tr><th>Receipt No</th><td>{{ $payment->receipt_no ?? 'N/A' }}</td></tr>
                                            <tr><th>Date</th><td>{{ $payment->created_at->format('Y-m-d H:i A') }}</td></tr>
                                            <tr><th>Amount</th><td>{{ $payment->currency }} {{ number_format($payment->amount,2) }}</td></tr>
                                            <tr><th>Payee Name</th><td>{{ $payment->payee_name }}</td></tr>
                                            <tr><th>Email</th><td>{{ $payment->email }}</td></tr>
                                            <tr><th>Phone</th><td>{{ $payment->phone }}</td></tr>
                                            <tr><th>Address</th>
                                                <td>{{ $payment->address }}, {{ $payment->city }}, {{ $payment->postal_code }}</td>
                                            </tr>
                                            <tr><th>Reason</th><td>{{ $payment->reason }}</td></tr>

                                            <tr>
                                                <th>Receipt File</th>
                                                <td>
                                                    @if ($payment->receipt_path)
                                                        <a href="{{ asset($payment->receipt_path) }}" target="_blank">
                                                            View Receipt
                                                        </a>
                                                    @else
                                                        <span class="text-muted">Not Uploaded</span>
                                                    @endif
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>Status</th>
                                                <td>
                                                    <span class="badge 
                                                        @if($payment->admin_status == 'approved') bg-success 
                                                        @elseif($payment->admin_status == 'rejected') bg-danger 
                                                        @else bg-warning @endif">
                                                        {{ ucfirst($payment->admin_status) }}
                                                    </span>
                                                </td>
                                            </tr>
                                        </table>

                                        <hr>

                                        <h6 class="mb-2"><b>Update Status</b></h6>
                                        <form action="{{ route('payments.updateStatus', $payment->id) }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <select name="admin_status" class="form-control" required>
                                                        <option value="pending" {{ $payment->admin_status == 'pending' ? 'selected' : '' }}>Pending</option>
                                                        <option value="approved" {{ $payment->admin_status == 'approved' ? 'selected' : '' }}>Approved</option>
                                                        <option value="rejected" {{ $payment->admin_status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-6">
                                                    <button class="btn btn-success w-100">Update</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- ======================= /MODALS ======================= -->

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
