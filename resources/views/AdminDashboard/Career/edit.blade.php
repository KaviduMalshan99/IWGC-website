@extends('AdminDashboard.master')

@section('title', 'Edit Job Opening')

@section('content')

<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-6 mt-3">
        <h4>Edit Job Opening</h4>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
         <form method="POST" action="{{ route('careers.update', $career->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">

              <!-- Job Title -->
              <div class="col-md-6 mb-3">
                <label class="form-label">Job Title</label>
                <input type="text" name="job_title" class="form-control" value="{{ old('job_title', $career->job_title) }}">
                @error('job_title') <small class="text-danger">{{ $message }}</small> @enderror
              </div>

              <!-- Job Type (Dropdown) -->
              <div class="col-md-6 mb-3">
                <label class="form-label">Job Type</label>
                <select name="job_type" class="form-control">
                  <option value="Full-time" {{ old('job_type', $career->job_type) == 'Full-time' ? 'selected' : '' }}>Full-time</option>
                  <option value="Part-Time" {{ old('job_type', $career->job_type) == 'Part-time' ? 'selected' : '' }}>Part-time</option>
                  <option value="Contract" {{ old('job_type', $career->job_type) == 'Contract' ? 'selected' : '' }}>Contract</option>
                  <option value="Freelance" {{ old('job_type', $career->job_type) == 'Freelance' ? 'selected' : '' }}>Freelance</option>
                </select>
                @error('job_type') <small class="text-danger">{{ $message }}</small> @enderror
              </div>

              <!-- Location -->
              <div class="col-md-6 mb-3">
                <label class="form-label">Location</label>
                <input type="text" name="location" class="form-control" value="{{ old('location', $career->location) }}">
                @error('location') <small class="text-danger">{{ $message }}</small> @enderror
              </div>

              <!-- Experience (Dropdown) -->
              <div class="col-md-6 mb-3">
                <label class="form-label">Experience</label>
                <select name="experience" class="form-control">
                  <option value="Freshers - 0 years" {{ old('experience', $career->experience) == 'Freshers - 0 years' ? 'selected' : '' }}>Freshers - 0 years</option>
                  <option value="1+" {{ old('experience', $career->experience) == '1+' ? 'selected' : '' }}>1+ year</option>
                  <option value="2+" {{ old('experience', $career->experience) == '2+' ? 'selected' : '' }}>2+ years</option>
                  <option value="3+" {{ old('experience', $career->experience) == '3+' ? 'selected' : '' }}>3+ years</option>
                  <option value="5+" {{ old('experience', $career->experience) == '5+' ? 'selected' : '' }}>5+ years</option>
                  <option value="10+" {{ old('experience', $career->experience) == '10+' ? 'selected' : '' }}>10+ years</option>
                </select>
                @error('experience') <small class="text-danger">{{ $message }}</small> @enderror
              </div>

              <!-- Description -->
              <div class="col-md-12 mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control">{{ old('description', $career->description) }}</textarea>
                @error('description') <small class="text-danger">{{ $message }}</small> @enderror
              </div>

              <!-- Deadline Date -->
              <div class="col-md-6 mb-3">
                  <label class="form-label">Deadline Date</label>
                  <input type="date" name="deadline_date" class="form-control" 
                        value="{{ old('deadline_date', $career->deadline_date ? \Carbon\Carbon::parse($career->deadline_date)->format('Y-m-d') : '') }}">
                  @error('deadline_date') <small class="text-danger">{{ $message }}</small> @enderror
              </div>

            </div>

            <div class="card-footer text-end">
              <button type="submit" class="btn btn-primary">Update Job Opening</button>
            </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
