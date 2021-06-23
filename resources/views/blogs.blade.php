@extends('layouts.index')

@section('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Blogs</h2>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">

            <div class="row">
                @foreach ($blogs as $blog)
                <div class="col-lg-6 col-md-6">
                    <div class="box">
                        <h3>{{$blog->title}}</h3>
                        <p>{!!substr($blog->description,0,300)."............"!!}</p>
                        <div class="btn-wrap">
                            <a href="/blogs/{{$blog->id}}" class="btn-buy">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Pricing Section -->

  </main><!-- End #main -->

@endsection
