@extends('layouts.master')
@section('PageTitle', 'Quotes Homepage Title')
@section('Description', 'Description for the Homepage,Quotes description')

@section('content')

    <!--  End Site Header -->
     <!-- Main Container  -->
    <main>
      {{-- Recent Quotes --}}
      <section>
        <div class="container">
          <header class="section-header">
            <h2>Recent Jobs</h2>
          </header>

@auth()
  <!-- Start Component  -->
  @component('components.alert')
    @slot('class')
      success
    @endslot
    @slot('alertTitle')
      Welcome to this website
    @endslot
  @endcomponent
  <!--  End Component  -->
@endauth

@guest
  <!--  Start Component 2 -->
  @component('components.alert')
    @slot('class')
      danger
    @endslot
    @slot('alertTitle')
      You're not welcomed on this website
    @endslot
  @endcomponent
  <!-- End Component 2  -->
@endguest
          <div class="row jobs-details">
            <!-- START QUOTES DETAILS -->
            @foreach ($jobs as $key => $job)

              <div class="col-xs-12">
                <div class="jobs-block">
                  <header>
                    <img src="/img/avatar/{{ $job->client->avatar}}" alt="client-avatar" style="width:70px; height:70px;border-radius:50%;">
                    <a href="{{route('jobs.show', $job->slug)}}"></a>
                    <div class="hgroup">
                      <h4>
                        <a href="{{route('jobs.show', $job->slug)}}">{{$job->job_title}}</a>
                      </h4>
                      <div class="spacer-front"></div>
                    </div>
                  </header>
                  <footer>
                    <div class="status"><strong>Posted: &nbsp;<i class="fa fa-clock-o"></i></strong>2 minutes ago &nbsp; By:&nbsp;<a href="{!! route('quotes.show') !!}">{{$job->client->name}}</a></div>

                    <div class="action-btn">
                        <a class="btn btn-xs btn-info btn-outline"><strong>Job Type:</strong>&nbsp;{{$job->job_type}}</a>
                    </div>
                    <div class="action-btn">
                        <a class="btn btn-xs btn-outline btn-warning"><strong>Salary:</strong>&nbsp;{{$job->salary}}</a>
                    </div>
                  </footer>
                </div>
              </div>
            @endforeach
          <!--  End Quote Details  -->
          </div>

          <br><br>
    <p class="text-center">
      <ul class="pagination" role="navigation">
      <li class="page-item disabled" aria-label="&laquo; Previous">
        <span class="page-link" aria-hidden="true">&lsaquo;</span></li>
          <li class="page-item active" aria-current="page">
            <span class="page-link">1</span></li>
         <li class="page-item">
          <a class="page-link" href="#">2</a></li>
            <li class="page-item">
              <a class="page-link" href="#" rel="next" aria-label="Next &raquo;">
              </a>
            </li></ul></p>

        </div>
      </section>
      <!-- END Recent jobs -->
      {{-- @include('includes.categories') --}}
@endsection
