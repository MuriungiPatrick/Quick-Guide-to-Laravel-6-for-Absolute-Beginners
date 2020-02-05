@extends('layouts.master')
@section('PageTitle', 'Quotes Details View Title')
@section('Description', 'Description for the Quotes details,Quotes description')

@section('content')

    <!-- Page header -->
  <header class="site-header size-lg text-center" style="background-color:#a767d8;">
  <div class="container">
    <div class="col-xs-12">
      <h2>Recusandae magni tempore a voluptas dolorem adipisci id.</h2>
    </div>
  </div>
</header>
            <div class="container">
    <!-- END Page header -->
    <!-- Main container -->
    <main>
      <!-- Job detail -->
      <section>
        <div class="container">
          <div class="col-md-11 col-lg-12">
            <header class="section-header">
              <h2>Quote Description</h2>
            </header>
          <article class="post">
            @component('components.alert')
              @slot('class')
                warning
              @endslot
              @slot('alertTitle')
                No quotes to display at this time
              @endslot
            @endcomponent
            {{-- <h2>Job Description</h2> --}}
             <div class="blog-content">
          <p>Animi ex et beatae blanditiis. Ratione accusamus labore quaerat. Et in sunt ut iusto nesciunt odio libero. Quaerat ut impedit molestiae rerum.

Beatae impedit non quo officiis mollitia nobis. Atque officiis consequatur itaque nulla qui velit. Eum nihil excepturi in libero exercitationem quasi aliquid voluptates.

Ad est quas at earum ex enim. In non aut animi saepe ad ratione.

Cum sed accusamus et quisquam deserunt necessitatibus sed beatae. Aperiam ut dolores dolorum illo adipisci eaque velit. Est perferendis consequatur pariatur sed voluptatum odit.

Sint molestias facilis dolorum error exercitationem voluptatibus voluptas ut. Similique libero inventore nulla veritatis possimus dolorem. Quasi temporibus voluptas et aperiam ipsam. Omnis est nisi et ab laboriosam tenetur.

Eaque rerum voluptas libero earum. Placeat nulla inventore fuga sed. Et qui deserunt non architecto corrupti.

Nisi deserunt sed facere eveniet. Quo nihil est delectus. Voluptatem nam aut et repudiandae. </p>
</div>
</div>
</article>
<!-- Sidebar -->

        </div>
      </section>
    </main>
    <!-- END Main container -->
 </div>
    @endsection
