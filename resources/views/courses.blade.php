@extends('layouts.index')

@section('content')
<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Subjects</h2>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">
        <div class="container">
            <h2><br></h2>
        </div>
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
            @foreach ($courses as $course)
            <div class="col-lg-3 col-md-4">
                <div class="icon-box">
                    <div class="form-group">
                        <h3>{{$course->name}}</h3>
                        <hr>
                        <a href="{{$course->link}}" class="btn btn-primary">Download</a>
                    </div>
                </div>
            </div>
            @endforeach
      </div>
    </section><!-- End Courses Section -->

  </main><!-- End #main -->
@endsection
