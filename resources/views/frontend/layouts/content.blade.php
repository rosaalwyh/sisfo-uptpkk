{{-- @extends('layouts.app') --}}
@section('content')
<!-- ============================
            Slider
============================== -->
<section class="slider">
    <div class="slick-carousel carousel-arrows-light carousel-dots-light m-slides-0"
        data-slick='{"slidesToShow": 1, "arrows": true, "dots": true, "speed": 700,"fade": true,"cssEase": "linear"}'>
        <div class="slide-item align-v-h bg-overlay bg-overlay-gradient">
        <div class="bg-img"><img src="{{asset('frontend/assets/images/sliders/polsri.jpeg')}}" alt="slide img"></div>
        <div class="container">
            <div class="row align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                <div class="slide__content">
                <span class="slide__subtitle">Unit Pelaksana Teknis Pengembangan Karir dan Kewirausahaan</span>
                <h2 class="slide__title">Sisfo UPTPKK</h2>
                <p class="slide__desc">Membantu anda mencari informasi mengenai karir dan kewirausahaan</p>
                <div class="d-flex flex-wrap align-items-center">
                    <a href="about-us.html" class="btn btn__primary btn__primary-style2 mr-30">
                    <i class="icon-arrow-right"></i>
                    <span>More About Us</span>
                    </a>
                    <a href="it-solutions.html" class="btn btn__white">Our Services</a>
                </div>
                </div><!-- /.slide-content -->
            </div><!-- /.col-xl-7 -->
            {{-- <div class="col-xl-5 d-none d-xl-flex justify-content-end">
                <div class="cta-banner">
                <div class="slick-carousel" data-slick='{"slidesToShow": 1, "arrows": false, "dots": true}'>
                    <div>
                    <div class="cta__icon">
                        <i class="icon-file"></i>
                    </div>
                    <h4 class="cta__title mb-0">Thinking insights, verified research, and make right decisions!</h4>
                    </div>
                    <div>
                    <div class="cta__icon">
                        <i class="icon-network"></i>
                    </div>
                    <h4 class="cta__title mb-0">Utilising the latest processing solutions & decades of experience.
                    </h4>
                    </div>
                </div>
                </div><!-- /.cta-banner -->
            </div><!-- /.col-xl-5 --> --}}
            </div><!-- /.row -->
        </div><!-- /.container -->
        </div><!-- /.slide-item -->
    </div><!-- /.carousel -->
</section><!-- /.slider -->
<section class="portfolio-layout2">
  <div class="container">
    <nav>
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Berita</li>
        </ol>
    </nav>
    <div id="filtered-items-wrap" class="row">
    @foreach ($data_berita as $item)
    <!-- portfolio item #1 -->
    <div class="col-sm-6 col-md-6 col-lg-4 mix filter-Support">
        <div class="portfolio-item">
        <div class="portfolio__img">
            <a href="case-studies-single.html"><img src="{{asset('frontend/assets/images/berita/news.jpg')}}"
                alt="portfolio img"></a>
        </div><!-- /.portfolio-img -->
        <div class="portfolio__icon">
            <img src="{{asset('frontend/assets/images/icons/news.png')}}" alt="icon">
        </div><!-- ')}}/.portfolio__icon -->
        <div class="portfolio__content">
            <h4 class="portfolio__title"><a href="#"><?= $item->berita_judul ?></a></h4>
            <p class="portfolio__desc"><?= substr_replace($item->berita_konten, "...", 150) ?></p>
            <a href="{{route('detail-berita')}}" class="btn btn__secondary btn__link">
            <span>Read More</span>
            <i class="icon-arrow-right"></i>
            </a>
        </div><!-- /.portfolio-content -->

        </div><!-- /.portfolio-item -->
    </div><!-- /.col-lg-4 -->
    @endforeach
    </div><!-- /.row -->
    <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 text-center">
        <nav class="pagination-area">
        <ul class="pagination justify-content-center mb-0">
            <li><a class="current" href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#"><i class="icon-arrow-right"></i></a></li>
        </ul>
        </nav><!-- .pagination-area -->
    </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.berita terbaru layout 2 -->
<section class="features-layout2">
    <div class="container">
        <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-5">
            <h1 class="heading__subtitle color-primary">Pengumuman Terbaru</h1>
        </div>
        </div><!-- /.row -->
        <div class="row">
            <!-- Feature item #1 -->
            @foreach ($data_pengumuman as $item)
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="feature-item">
                <div class="feature__icon">
                    <i class="icon-statistic"></i>
                </div>
                <h4 class="feature__title"><?= $item->pengumuman_judul ?></h4>
                <p class="feature__desc"><?= substr_replace($item->pengumuman_konten, "...", 150) ?></p>
                <a href="{{route('detail-pengumuman')}}" class="btn__link">
                    <i class="icon-arrow-right icon-outlined"></i>
                    <span>Read More</span>
                </a>
                </div><!-- /.feature-item -->
            </div><!-- /.col-lg-3 -->
            @endforeach
        </div><!-- /.container -->
</section><!-- /.Pengumuman terbaru Layout 2 -->
@endsection