@extends('layouts.index')

@section('content')
<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Classes</h2>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">
        <div class="container">
            <h2><br></h2>
        </div>
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
            @foreach ($standards as $standard)
            <div class="col-lg-3 col-md-4">
                <div class="icon-box">
                  <h3><a href="{{url('courses',$standard->name)}}">{{$standard->name}}</a></h3>
                </div>
            </div>
            @endforeach
      </div>
    </section><!-- End Courses Section -->

  </main><!-- End #main -->
@endsection
