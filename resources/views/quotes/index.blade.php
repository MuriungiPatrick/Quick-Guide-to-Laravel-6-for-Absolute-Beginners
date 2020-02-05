@extends('layouts.master')
@section('PageTitle', 'Quotes Homepage Title')
@section('Description', 'Description for the Homepage,Quotes description')

@section('content')
    <header class="site-header size-lg text-center" style="background-color:#a767d8;">
      <!--  background-image: url(img/bg-banner1.jpg)  -->
  <div class="container">
    <div class="col-xs-12">
      <h2>There are <mark>1,200 +</mark>
   Quotes right now!
   <h5 class="font-alt">Search Quotes in one minute</h5>
   <br>
   <!-- @includeif('includes.message')  -->
  @include('includes.searchform')
 </h2>
    </div>
  </div>
</header>
    <!--  End Site Header -->
     <!-- Main Container  -->
    <main>
      {{-- Recent Quotes --}}
      <section>
        <div class="container">
          <header class="section-header">
            <h2>Recent Quotes</h2>
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
              <div class="col-xs-12">
              <div class="jobs-block">
                <header>
                  <a href="{{route('quotes.show')}}"></a>
                  <div class="hgroup">
                    <h4>
            <a href="{{route('quotes.show')}}">Recusandae magni tempore a voluptas dolorem adipisci id.</a>
                    </h4>
                     <div class="spacer-front"></div>
                  </div>
                </header>

               <footer>
              <div class="status"><strong>Posted: &nbsp;<i class="fa fa-clock-o"></i></strong>2 minutes ago &nbsp; By:&nbsp;<a href="{!! route('quotes.show') !!}">James Mwirigi</a></div>
                  <div class="action-btn">
                    <a class="btn btn-xs btn-info" href="category-details.html">Backend</a>
                  </div>
                </footer>
              </div>
            </div>
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
      @include('includes.categories')
@endsection
