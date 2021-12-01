@extends('frontend.layouts.app')
@section('content')
<section class="page-title-detail" style="background-color: #091d3e">
</section><!-- /.page-title -->
      <!-- ======================
       Portfolio Slider
      ========================= -->
      <section class="portfolio-slider pt-5">
        @foreach ($data as $item)
        <div class="container">
          <div class="row">
            <div class="col-9">
              <div class="container">
                <h2 class="text-block__title mb-5"> <?= $item->pengumuman_judul ?></h2>
                <p>&ensp;<i class="bi bi-calendar2-week-fill"></i>&ensp; <?= $item->created_at ?>&ensp;|&ensp;Pengumuman Polsri</p>
                <div class="col-lg-12 col-md-8 col-lg-6">
                    <div class="text-block__content">
                      <?= $item->pengumuman_konten ?>
                    </div>
                  </div><!-- /.col-lg-6 -->
                </div><!-- /.container -->
            </div>
            <div class="col-3">
              <div class="slick-carousel carousel-dots-light"
                data-slick='{"slidesToShow": 1,"slidesToScroll": 1, "arrows": true, "dots": true}'>
                <img src="{{asset('storage/pengumuman_terbaru/'.$item->pengumuman_sampul)}}" alt="slider">
              </div><!-- /.portfolio-slider -->
              <br>
              <div class="slick-carousel carousel-dots-light"
                data-slick='{"slidesToShow": 1,"slidesToScroll": 1, "arrows": true, "dots": true}'>
                <img src="{{asset('frontend/assets/images/portfolio/slider/2.jpg')}}" alt="slider">
              </div><!-- /.portfolio-slider -->
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        @endforeach
      </section><!-- /.Portfolio Slider -->
  
@endsection