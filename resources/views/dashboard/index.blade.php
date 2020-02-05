@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <!-- PROFILE SIDEBAR -->
      @include('includes.profile_sidebar')
<!-- END PROFILE SIDEBAR -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><h4>INDEX VIEW</h4></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
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
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">JOB TITLE</th>
                        <th colspan="2">ACTIONS</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($jobs as $key => $job)

                        <tr>
                          <td>{{$job->id}}</td>
                          <td>{{$job->job_title}}</td>
                          <td><a href="{{route('dashboard.edit', $job->id)}}" class="btn btn-primary btn-xs">edit</a></td>
                          <td>
                            <form action="{{route('dashboard.destroy', $job->id)}}" method="post">
                              @method('DELETE')
                              @csrf
                              <button class="btn btn-danger btn-xs">Delete</button>
                            </form>

                            </td>
                        </tr>
                      </tbody>
                      @endforeach
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
