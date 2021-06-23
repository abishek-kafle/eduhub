@extends('layouts.index')

@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Learning Today,Leading Tomorrow</h1>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p>About Us</p>
        </div>

        <div class="row">
          <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <p>
                {!!substr($about->description,0,400)."............"!!}
            </p>
            <a href="{{url('abouts')}}" class="learn-more-btn">Read More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
          <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Classes</h2>
                <p>Recently Added Classes</p>
              </div>

            <div class="row" data-aos="zoom-in" data-aos-delay="100">

              <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                  <h3><a href="{{url('courses',$standards[0]['name'])}}">{{$standards[0]['name']}}</a></h3>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                  <h3><a href="{{url('courses',$standards[0]['name'])}}">{{$standards[0]['name']}}</a></h3>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                  <h3><a href="{{url('courses',$standards[0]['name'])}}">{{$standards[0]['name']}}</a></h3>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                  <h3><a href="{{url('courses',$standards[0]['name'])}}">{{$standards[0]['name']}}</a></h3>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                  <h3><a href="{{url('courses',$standards[0]['name'])}}">{{$standards[0]['name']}}</a></h3>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                  <h3><a href="{{url('courses',$standards[0]['name'])}}">{{$standards[0]['name']}}</a></h3>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                  <h3><a href="{{url('courses',$standards[0]['name'])}}">{{$standards[0]['name']}}</a></h3>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                  <h3><a href="{{url('courses',$standards[0]['name'])}}">{{$standards[0]['name']}}</a></h3>
                </div>
              </div>

            </div>

          </div>
        </section><!-- End Features Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up">{{count($courses)}}</span>
            <p>Courses</p>
          </div>

          <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up">{{count($events)}}</span>
            <p>Events</p>
          </div>

          <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up">{{count($blogs)}}</span>
            <p>Blogs</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Blogs</h2>
            <p>Recent Blogs</p>
        </div>

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>{{$blogs[0]['title']}}</h3>
              <p>
               {!!substr($blogs[0]['description'],0,200)."..........."!!}
              </p>
              <div class="text-center">
                <a href="{{url('blogs',$blogs[0]['id'])}}" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>{{$blogs[1]['title']}}</h3>
              <p>
                {!!substr($blogs[1]['description'],0,200)."..........."!!}
            </p>
              <div class="text-center">
                <a href="{{url('blogs',$blogs[1]['id'])}}" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>{{$blogs[2]['title']}}</h3>
              <p>
                {!!substr($blogs[2]['description'],0,200)."..........."!!}
            </p>
              <div class="text-center">
                <a href="{{url('blogs',$blogs[2]['id'])}}" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Events Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Events</h2>
            <p>Upcoming Events</p>
          </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

            <div class="col-lg-3 col-md-4">
              <div class="icon-box">
                <h3><a href="{{url('events',$events[0]['id'])}}">{{$events[0]['title']}}</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4">
              <div class="icon-box">
                <h3><a href="{{url('events',$events[1]['id'])}}">{{$events[1]['title']}}</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4">
              <div class="icon-box">
                <h3><a href="{{url('events',$events[2]['id'])}}">{{$events[2]['title']}}</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4">
              <div class="icon-box">
                <h3><a href="{{url('events',$events[3]['id'])}}">{{$events[3]['title']}}</a></h3>
              </div>
            </div>


        </div>

      </div>
    </section><!-- End Features Section -->

  </main><!-- End #main -->

@endsection
