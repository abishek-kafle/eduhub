@extends('layouts.index')

@section('content')
<main id="main">

    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
        </div>
    </div>

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="col-lg-12 col-md-6">
                <div class="box">
                    <h3>{{$event->title}}</h3>
                    <p>{!!$event->description!!}</p>
                    <hr>
                    <p>Date : {{$event->date}}</p>
                </div>
            </div>
        </div>

      </div>
    </section><!-- End About Section -->

</main><!-- End #main -->
@endsection
