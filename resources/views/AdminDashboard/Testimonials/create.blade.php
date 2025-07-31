@extends('AdminDashboard.master')

@section('title', 'Add New Testimonial')

@section('content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6 mt-3">
                <h4>Add New Testimonial</h4>
            </div>
            <div class="col-6 text-end mt-3">
                <a href="{{ route('testimonial.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('testimonial.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Designation</label>
                        <input type="text" name="designation" class="form-control" value="{{ old('designation') }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Avatar Image</label>
                        <input type="file" name="avatar" class="form-control" accept="image/*" required>
                        <small class="text-muted">Upload a square image (eg: 150x150px)</small>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label">Review</label>
                        <textarea name="review" class="form-control" rows="5" required>{{ old('review') }}</textarea>
                    </div>

                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-success">Add Testimonial</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection
