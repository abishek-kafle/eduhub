@extends('layouts.index')

@section('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Register</h2>
      </div>
    </div><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

              <div class="row mt-5">

                <div class="col-lg-6 mt-5 mt-lg-0">

                  <form action="{{url('reg')}}" method="post" role="form">
                    @csrf
                    <div class="form-group">
                      <input type="text" class="form-control" name="name" id="subject" placeholder="Full Name"/>
                      <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="subject" placeholder="Email"/>
                        <div class="validate"></div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary" type="submit">Register</button>
                    </div>
                  </form>

                </div>

              </div>

            </div>
          </section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection
