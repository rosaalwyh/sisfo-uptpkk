@extends('frontend.layouts.app')
@section('content')
<section class="page-title page-title-layout12 bg-overlay bg-overlay-gradient bg-parallax text-center">
    <div class="bg-img"><img src="{{asset('frontend/assets/images/berita/news.jpg')}}" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="pagetitle__heading">Berita Terbaru</h1>
          <nav>
            <ol class="breadcrumb justify-content-center mb-0">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
              <li class="breadcrumb-item active" aria-current="page">Berita</li>
            </ol>
          </nav>
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.page-title -->
      <!-- ======================
       Portfolio Slider
      ========================= -->
      <section class="portfolio-slider pt-5">
        <div class="container">
          @foreach ($data as $item)
          <div class="row">
            <div class="col-9">
              <div class="container">
                <h2 class="text-block__title mb-5"><?= $item->berita_judul ?></h2>
                <p>&ensp;<i class="bi bi-calendar2-week-fill"></i>&ensp;<?= $item->created_at ?>&ensp;|&ensp;Polsri News</p>
                <div class="col-lg-12 col-md-8 col-lg-6">
                    <div class="text-block__content">
                      <p class="text-block__desc"><?= $item->berita_konten ?></p>
                    </div>
                  </div><!-- /.col-lg-6 -->
                </div><!-- /.container -->
            </div>
            <div class="col-3">
              <div class="slick-carousel carousel-dots-light"
                data-slick='{"slidesToShow": 1,"slidesToScroll": 1, "arrows": true, "dots": true}'>
                <img src="{{asset('storage/berita_sampul/'.$item->berita_sampul)}}" alt="slider">
              </div><!-- /.portfolio-slider -->
              <br>
              <div class="slick-carousel carousel-dots-light"
                data-slick='{"slidesToShow": 1,"slidesToScroll": 1, "arrows": true, "dots": true}'>
                <img src="{{asset('frontend/assets/images/portfolio/slider/2.jpg')}}" alt="slider">
              </div><!-- /.portfolio-slider -->
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
          @endforeach
        </div><!-- /.container-fluid -->
      </section><!-- /.Portfolio Slider -->
      {{-- <!-- ======================
       Text Content
      ========================= -->
      <section class="text-content">
        <div class="container">
          <div class="row text-block">
            <div class="col-sm-12 col-md-4 col-lg-4">
              <h5 class="text-block__title text-center mb-30">Challenge</h5>
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-8 col-lg-6">
              <p class="text-block__desc">The report provided to the client covered all of the topics in our
                standard
                ITA, along with a high-level look at the client’s network and suggestions for strategic direction.
                To
                help implement the plan’s recommendations and carry out further strategic consulting, we provided a
                tailored managed IT.</p>
              <p class="text-block__desc">
                By having a concrete document that both Dataprise and our client’s leadership can reference, both
                sides of the partnership are equally informed and kept up-to-date on current</p>
              <p class="text-block__desc">Thanks to our team, a new solution was quickly scoped and implemented.
                Once the critical situation was resolved, work on the ITA roadmap resumed.</p>
              <ul class="list-items list-items-layout2 list-unstyled">
                <li>Delivered in more than 450,000 client’s interactions</li>
                <li>Provided by experts to help challenge critical activities</li>
                <li>Complemented with peer perspectives and advice</li>
              </ul>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Text Content --> --}}
  
@endsection