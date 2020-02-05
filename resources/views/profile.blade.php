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
                <div class="card-header"><h4>Update your Profile</h4></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  <form action="{!! route('profileupdate') !!}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="name"><strong>Name:</strong></label>
                      <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}">
                    </div>
                    <!-- end Name Input -->
                    <div class="form-group">
                      <label for="email"><strong>Email:</strong></label>
                      <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}">
                    </div>
                    <!-- end Email Input -->
                    <button class="btn btn-success" type="submit">Save Profile</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
