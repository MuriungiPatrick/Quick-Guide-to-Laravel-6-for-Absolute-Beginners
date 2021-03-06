@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <!-- PROFILE SIDEBAR -->
      @include('includes.profile_sidebar')
<!-- END PROFILE SIDEBAR -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><h4>EDIT VIEW</h4></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('dashboard.update', $job->id)}}" method="POST">
                      @method('PATCH')
                      @csrf
                      <div class="form-group">
                        <label for="job_title"><strong>JOB TITLE:</strong></label>
                        <input type="text" id="job_title" class="form-control" name="job_title" value="{{$job->job_title}}">
                      </div>
                      <!-- End Job Title -->
                      <div class="form-group">
                        <label for="job_type"><strong>JOB TYPE:</strong></label>
                        <input type="text" class="form-control" name="job_type" value="{{$job->job_type}}">
                      </div>
                      <!-- End Job Type -->
                      <div class="form-group">
                        <label for="salary"><strong>SALARY:</strong></label>
                        <input type="text" class="form-control" name="salary" value="{{$job->salary}}">
                      </div>
                      <!-- End Salary-->
                      <div class="form-group">
                        <label for="slug"><strong>SLUG:</strong></label>
                        <input type="text" id="slug" class="form-control" name="slug" value="{{$job->slug}}">
                      </div>
                      <!-- End Slug -->
                      <div class="form-group">
                        <label for="job_description"><strong>JOB DESCRIPTION:</strong></label>
                        <textarea name="job_description" id="job_description" rows="10" class="form-control">{{$job->job_description}}</textarea>
                      </div>
                      <!-- End Job Description -->
                        <button class="btn btn-success" type="submit">Save</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
