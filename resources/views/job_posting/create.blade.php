@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                        Medvarsity Job Postal
                        </div>
                        <div class="col-md-6">
                            <div class="div float-right">
                            <a href="{{ url()->previous() }}"  class="btn btn-primary btn-sm active"><i class="	fa fa-close"></i></a>
                            </div>
                        </div>
                </div>
                </div>
                <div class="card-body">
                <form method="POST" action="{{ url('/jobPosting/')}}">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Job Title</label>
                            <div class="col-md-6">
                                <input id="job_title" type="text" class="form-control @error('job_title') is-invalid @enderror" name="job_title" value="{{ old('job_title') }}" required>
                                @error('job_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="company_name" class="col-md-4 col-form-label text-md-end">Company Name</label>
                            <div class="col-md-6">
                                <input id="company_name" type="company_name" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ old('company_name') }}" required>
                                @error('company_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="sal_package" class="col-md-4 col-form-label text-md-end">Package</label>
                            <div class="col-md-6">
                                <input id="sal_package" type="sal_package" class="form-control @error('sal_package') is-invalid @enderror" name="sal_package" value="{{ old('sal_package') }}" required>
                                @error('sal_package')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="job_location" class="col-md-4 col-form-label text-md-end">Job Location</label>
                            <div class="col-md-6">
                                <input id="job_location" type="job_location" class="form-control @error('job_location') is-invalid @enderror" name="job_location" value="{{ old('job_location') }}" required>
                                @error('job_location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="skills" class="col-md-4 col-form-label text-md-end">Skills</label>
                            <div class="col-md-6">
                                <input id="skills" type="skills" class="form-control @error('skills') is-invalid @enderror" name="skills" value="{{ old('skills') }}" required>
                                @error('skills')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="job_description" class="col-md-4 col-form-label text-md-end">Job Description</label>
                            <div class="col-md-6">
                                <input id="job_description" type="job_description" class="form-control @error('job_description') is-invalid @enderror" name="job_description" value="{{ old('job_description') }}" required>
                                @error('job_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="education_experiance" class="col-md-4 col-form-label text-md-end">Education Experience</label>
                            <div class="col-md-6">
                                <input id="education_experiance" type="education_experiance" class="form-control @error('education_experiance') is-invalid @enderror" name="education_experiance" value="{{ old('education_experiance') }}" required>
                                @error('education_experiance')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="roles_responsibilities" class="col-md-4 col-form-label text-md-end">Roles & Responsibilities</label>
                            <div class="col-md-6">
                                <input id="roles_responsibilities" type="roles_responsibilities" class="form-control @error('roles_responsibilities') is-invalid @enderror" name="roles_responsibilities" value="{{ old('roles_responsibilities') }}" required>
                                @error('roles_responsibilities')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="job_type" class="col-md-4 col-form-label text-md-end">Job Tag</label>
                            <div class="col-md-6">
                                <input id="job_type" type="job_type" class="form-control @error('job_type') is-invalid @enderror" name="job_type" value="{{ old('job_type') }}" required>
                                @error('job_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="company_logo" class="col-md-4 col-form-label text-md-end">Company Logo</label>
                            <div class="col-md-6">
                                <input id="company_logo" type="company_logo" class="form-control @error('company_logo') is-invalid @enderror" name="company_logo" value="{{ old('company_logo') }}">
                                @error('company_logo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Publish Post') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
