@extends('AdminDashboard.master')

@section('title', 'Testimonials')

@section('content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6 mt-3">
                <h4>Testimonials</h4>
            </div>
            <div class="col-6 text-end mt-3">
                <a href="{{ route('testimonial.create') }}" class="btn btn-primary">Add New Testimonial</a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Avatar</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Review</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($testimonials as $index => $testimonial)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        @if ($testimonial->avatar)
                                            <img src="{{ asset('storage/' . $testimonial->avatar) }}" width="60" class="rounded-circle">
                                        @else
                                            <span class="text-muted">No Image</span>
                                        @endif
                                    </td>
                                    <td>{{ $testimonial->name }}</td>
                                    <td>{{ $testimonial->designation }}</td>
                                    <td>{{ Str::limit($testimonial->review, 50) }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('testimonial.edit', $testimonial->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('testimonial.destroy', $testimonial->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure to delete this testimonial?');">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">No testimonials found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
