@extends('AdminDashboard.master')

@section('title', 'Edit Testimonial')

@section('content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6 mt-3">
                <h4>Edit Testimonial</h4>
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
            <form method="POST" action="{{ route('testimonial.update', $testimonial->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name', $testimonial->name) }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Designation</label>
                        <input type="text" name="designation" class="form-control" value="{{ old('designation', $testimonial->designation) }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Avatar Image</label>
                        <input type="file" name="avatar" class="form-control" accept="image/*">
                        @if ($testimonial->avatar)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $testimonial->avatar) }}" class="img-thumbnail" width="100">
                            </div>
                        @endif
                        <small class="text-muted">Leave blank if you don’t want to change.</small>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label">Review</label>
                        <textarea name="review" class="form-control" rows="5" required>{{ old('review', $testimonial->review) }}</textarea>
                    </div>

                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-primary">Update Testimonial</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection
