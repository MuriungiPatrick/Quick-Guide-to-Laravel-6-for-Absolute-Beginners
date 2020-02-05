@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <!-- PROFILE SIDEBAR -->
      @include('includes.profile_sidebar')
<!-- END PROFILE SIDEBAR -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><h4>Dashboard</h4></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   <h2>{{ Auth::user()->name }}&nbsp;You are logged in!</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
