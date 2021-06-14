@extends('layouts.index')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Events</h2>
      </div>
    </div><!-- End Breadcrumbs -->
    <br>
    <br>
    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="row">
            @foreach($events as $event)
            <div class="col-md-6 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><a href="events/{{$event->id}}">{{$event->title}}</a></h5>
                        <p class="font-italic text-center">{{$event->date}}</p>
                        <p class="card-text">{{$event->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

      </div>
    </section><!-- End Events Section -->

  </main><!-- End #main -->
@endsection
