@extends('layouts.app')

@section('content')
<div class="container">
  @if ($errors->any())
    <div class="alert alert-danger">
      <a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  @if (session()->get('message'))
    <div class="alert alert-success" role="alert">
      <a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a>
      <strong>SUCCESS:</strong>&nbsp;{{ session()->get('message')}}
    </div>
  @endif
    <div class="row justify-content-center">
      <!-- PROFILE SIDEBAR -->
      @include('includes.profile_sidebar')
<!-- END PROFILE SIDEBAR -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><h4>Upload Profile Picture</h4></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  <form enctype="multipart/form-data" action="{!! route('profileavatar') !!}" method="post">
                    <div class="form-group">
                      <input type="file" name="avatar" class="form-control">
                      <input type="hidden" class="form-control" name="_token" value="{{ csrf_token() }}">
                    </div>
                    <strong>NOTE:</strong>
                <ul>
                  <li>Picture dimensions should be above 250 x 250px</li>
                  <li>File Size Less than 1MB</li>
                  <li>Allowed (Jpeg & Png)</li>
                </ul>
                     <br>
                    <button class="btn btn-success" type="submit">Upload Picture</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
