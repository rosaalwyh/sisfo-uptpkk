@extends('frontend.layouts.app')
@section('content')
<!-- ============================
            Slider
============================== -->
<!-- Slider -->
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
                </div><!-- /.slide-content -->
            </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        </div><!-- /.slide-item -->
    </div><!-- /.carousel -->
</section>
<!-- /.slider -->

<!-- Berita terbaru layout 2 -->
<section class="portfolio-layout2" id="berita">
  <div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-40">
            <h2 class="heading__subtitle">Berita Terbaru</h2>
            </div><!-- /.heading -->
        </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
    <div id="filtered-items-wrap" class="row">
    @foreach ($data_berita as $item)
    <!-- portfolio item #1 -->
    <div class="col-sm-6 col-md-6 col-lg-4 mix filter-Support">
        <div class="portfolio-item">
        <div class="portfolio__img">
            @if($item->berita_sampul)
            <a href="{{url('detail-berita/'.$item->berita_id)}}" target="_blank"><img src="{{asset('storage/berita_sampul/'.$item->berita_sampul)}}" alt="portfolio img"></a>
            @else
            <a href="{{url('detail-berita/'.$item->berita_id)}}" target="_blank"><img src="{{asset('frontend/assets/images/berita/news.jpg')}}" alt="portfolio img"></a>
            @endif
        </div><!-- /.portfolio-img -->
        <div class="portfolio__icon">
            <img src="{{asset('frontend/assets/images/icons/news.png')}}" alt="icon">
        </div><!-- ')}}/.portfolio__icon -->
        <div class="portfolio__content">
            <h4 class="portfolio__title"><a href="#"><?= $item->berita_judul ?></a></h4>
            <p>Kategori : <?= $item->kategori_nama ?></p>
            <p class="portfolio__desc"><?= substr_replace($item->berita_konten, "...", 150) ?></p>
            <a href="{{url('detail-berita/'.$item->berita_id)}}" class="btn btn__secondary btn__link" target="_blank">
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
            {{$data_berita->links()}}
        </ul>
        </nav><!-- .pagination-area -->
    </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section>
<!-- /.berita terbaru layout 2 -->

<!-- Pengumuman terbaru Layout 2 -->
<section class="features-layout2" id="pengumuman">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading text-center mb-20">
                <h2 class="heading__subtitle">Pengumuman Terbaru</h2>
                </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
            <!-- Feature item #1 -->
            @foreach ($data_pengumuman as $item)
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="feature-item">
                <div class="feature__icon">
                    <i class="bi bi-megaphone"></i>
                </div>
                <h4 class="feature__title"><?= $item->pengumuman_judul ?></h4>
                <p>Kategori : <?= $item->kategori_nama ?></p>
                <p class="feature__desc"><?= substr_replace($item->pengumuman_konten, "...", 150) ?></p>
                <a href="{{url('detail-pengumuman/'.$item->pengumuman_id)}}" class="btn__link" target="_blank">
                    <i class="icon-arrow-right icon-outlined"></i>
                    <span>Read More</span>
                </a>
                </div><!-- /.feature-item -->
            </div><!-- /.col-lg-3 -->
            @endforeach
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                <nav class="pagination-area">
                <ul class="pagination justify-content-center mb-0">
                    {{$data_pengumuman->links()}}
                </ul>
                </nav><!-- .pagination-area -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- /.Pengumuman terbaru Layout 2 -->

<!-- Seminar Karir-->
<section class="blog-grid pb-50" id="seminar-karir">
    <div class="container">
        <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-40">
            <h2 class="heading__subtitle">Karir</h2>
            <h3 class="heading__title">Seminar, Training dan Workshop</h3>
            </div><!-- /.heading -->
        </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
        <!-- Blog Item #1 -->
        @foreach ($data_seminar as $i)
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
                <div class="post__img">
                    @if($i->seminar_foto)
                    <a href="{{url('detail-seminar-karir/'.$i->id)}}" target="_blank">
                        <img src="{{asset('storage/seminar_karir/'.$i->seminar_foto)}}" alt="portfolio img">
                    </a>
                    @else
                    <a href="{{url('detail-seminar-karir/'.$i->id)}}" target="_blank">
                        <img src="{{asset('frontend/assets/images/blog/grid/1.jpg')}}" alt="blog image">
                    </a>
                    @endif
                </div><!-- /.blog-img -->
                
                <div class="post__body">
                    <h4 class="post__title"><a href="{{url('detail-seminar-karir/'.$i->id)}}"><?= $i->seminar_judul ?></a>
                    </h4>
                    <div class="post__meta">
                        <span class="post__meta-date"><?= $i->seminar_tanggal ?></span>
                    </div><?= substr_replace($i->seminar_konten, "...", 150) ?></p>
                    <a href="{{url('detail-seminar-karir/'.$i->id)}}" class="btn btn__secondary btn__link" target="_blank">
                        <span>Read More</span>
                        <i class="icon-arrow-right"></i>
                    </a>
                </div><!-- /.blog-content -->
            </div><!-- /.post-item -->
        </div><!-- /.col-lg-4 -->
        @endforeach
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                <nav class="pagination-area">
                <ul class="pagination justify-content-center mb-0">
                    {{$data_seminar->links()}}
                </ul>
                </nav><!-- .pagination-area -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- /.Seminar Karir-->

<!-- Konseling Karirr -->
<section class="services-layout1 services-carousel pb-10" id="konseling-karir">
    <div class="bg-img"><img src="{{asset('frontend/assets/images/backgrounds/5.png')}}" alt="backgrounds"></div>
    <div class="container">
        <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
            <h2 class="heading__subtitle">Karir</h2>
            <h3 class="heading__title">Konseling Karir</h3>
            </div><!-- /.heading -->
        </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
        <div class="col-12">
            <div class="slick-carousel"
            data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "arrows": false, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
            <!-- service item #1 -->
            @foreach ($data_konseling as $i)
            <div class="service-item">
                <h4 class="service__title"><?= $i->konseling_judul ?></h4>
                <div class="service__content">
                    <p class="service__desc"><?= substr_replace($i->konseling_konten, "...", 150) ?>
                </p>
                <a href="{{url('detail-konseling-karir/'.$i->id)}}" class="btn btn__primary" target="_blank">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                </a>
                </div><!-- /.service-content -->
            </div><!-- /.service-item -->
            @endforeach
        </div><!-- /.carousel -->
        </div><!-- /.col-12 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                <nav class="pagination-area">
                <ul class="pagination justify-content-center mb-0">
                    {{$data_konseling->links()}}
                </ul>
                </nav><!-- .pagination-area -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- /.Konseling Karirr -->

<!-- Informasi kewirausahaan -->
<section class="blog-grid pb-50" id="informasi-kewirausahaan">
    <div class="container">
        <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-40">
            <h2 class="heading__subtitle">Kewirausahaan</h2>
            <h3 class="heading__title">Informasi Kewirausahaan</h3>
            </div><!-- /.heading -->
        </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
        @foreach ($data_informasi as $i)
        <!-- Blog Item #1 -->
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
                <div class="post__img">
                    @if($i->informasi_foto)
                    <a href="{{url('detail-informasi-kewirausahaan/'.$i->id)}}" target="_blank">
                        <img src="{{asset('storage/informasi_kewirausahaan/'.$i->informasi_foto)}}" alt="portfolio img">
                    </a>
                    @else
                    <a href="{{url('detail-informasi-kewirausahaan/'.$i->id)}}" target="_blank">
                        <img src="{{asset('frontend/assets/images/blog/grid/1.jpg')}}" alt="blog image">
                        </a>
                    @endif
                </div><!-- /.blog-img -->
            <div class="post__body">
                <h4 class="post__title"><a href="#"><?= $i->informasi_judul ?></a>
                </h4>
                <div class="post__meta">
                    <span class="post__meta-date"><?= $i->informasi_tanggal ?></span>
                </div>
                <p class="post__desc"><?= substr_replace($i->informasi_konten, "...", 150) ?></p>
                <a href="{{url('detail-informasi-kewirausahaan/'.$i->id)}}" class="btn btn__secondary btn__link" target="_blank">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                </a>
            </div><!-- /.blog-content -->
            </div><!-- /.post-item -->
        </div><!-- /.col-lg-4 -->
        @endforeach
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                <nav class="pagination-area">
                <ul class="pagination justify-content-center mb-0">
                    {{$data_informasi->links()}}
                </ul>
                </nav><!-- .pagination-area -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog Grid -->
<!-- /.Informasi kewirausahaan -->

<!-- Seminar kewirausahaan -->
<section class="blog-grid pb-50" id="seminar-kewirausahaan">
    <div class="container">
            <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading text-center mb-40">
                <h2 class="heading__subtitle">Kewirausahaan</h2>
                <h3 class="heading__title">Seminar, Training dan Workshop</h3>
                </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
            <!-- Blog Item #1 -->
            @foreach ($data_seminarkew as $i)
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="post-item">
                <div class="post__img">
                @if($i->seminar_foto)
                    <a href="{{url('detail-seminar-kewirausahaan/'.$i->id)}}"  target="_blank">
                        <img src="{{asset('storage/seminar_kewirausahaan/'.$i->seminar_foto)}}" alt="blog image">
                    </a>
                @else
                    <a href="{{url('detail-seminar-kewirausahaan/'.$i->id)}}"  target="_blank">
                        <img src="{{asset('frontend/assets/images/blog/grid/1.jpg')}}" alt="blog image">
                    </a>
                @endif
                </div><!-- /.blog-img -->
                <div class="post__body">
                    <h4 class="post__title"><a href="#"><?= $i->seminar_judul ?></a>
                    </h4>
                    <div class="post__meta">
                        <span class="post__meta-date"><?= $i->seminar_tanggal ?></span>
                    </div>
                    <p class="post__desc"><?= substr_replace($i->seminar_konten, "...", 150) ?></p>
                    <a href="{{url('detail-seminar-kewirausahaan/'.$i->id)}}" class="btn btn__secondary btn__link" target="_blank">
                        <span>Read More</span>
                        <i class="icon-arrow-right"></i>
                    </a>
                </div><!-- /.blog-content -->
            </div><!-- /.post-item -->
            @endforeach
        </div><!-- /.col-lg-4 -->
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                <nav class="pagination-area">
                <ul class="pagination justify-content-center mb-0">
                    {{$data_seminarkew->links()}}
                </ul>
                </nav><!-- .pagination-area -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div>
</section>
<!-- /.Seminar kewirausahaan -->

<!-- Konseling kewirausahaan -->
<section class="services-layout1 services-carousel pb-100" id="konseling-kewirausahaan">
    <div class="bg-img"><img src="{{asset('frontend/assets/images/backgrounds/5.png')}}" alt="backgrounds"></div>
    <div class="container">
        <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
            <h2 class="heading__subtitle">Kewirausahaan</h2>
            <h3 class="heading__title">Konseling Kewirausahaan</h3>
            </div><!-- /.heading -->
        </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
        <div class="col-12">
            <div class="slick-carousel"
            data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "arrows": false, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
            <!-- service item #1 -->
            @foreach ($data_konselingkew as $i)
            <div class="service-item">
                {{-- <div class="service__icon">
                    <i class="icon-server"></i>
                </div><!-- /.service__icon --> --}}
                <h4 class="service__title"><?= $i->konseling_judul ?></h4>
                <div class="service__content">
                    <p class="service__desc"><?= substr_replace($i->konseling_konten, "...", 150) ?>
                    </p>
                    <a href="{{url('detail-konseling-kewirausahaan'.$i->id)}}" class="btn btn__primary" target="_blank">
                        <span>Read More</span>
                        <i class="icon-arrow-right"></i>
                    </a>
                </div><!-- /.service-content -->
            </div><!-- /.service-item -->
            @endforeach
            </div><!-- /.carousel -->
        </div><!-- /.col-12 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                <nav class="pagination-area">
                <ul class="pagination justify-content-center mb-0">
                    {{$data_konselingkew->links()}}
                </ul>
                </nav><!-- .pagination-area -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- /.Konseling kewirausahaan -->

<!-- Profile -->
<section class="profile-perusahaan" id="profile">
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
        <div class="heading text-center mb-50">
        <h2 class="heading__subtitle">Profile UPTPKK</h2>
        <h3 class="heading__title">Latar Belakang</h3>
        </div><!-- /.heading -->
    </div><!-- /.col-lg-6 -->
</div>
<section class="history-timeline pt-50 pb-50 mb-5">
    <div class="bg-img"><img src="{{asset('frontend/assets/images/backgrounds/2.jpg')}}" alt="background"></div>
    <div class="container">
        <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-12">
            <div>
            <!-- timeline Item #1 -->
            @foreach ($data_sejarah as $i)
            <div class="timeline-item d-flex">
                <p class="timeline__desc"><br><?= $i->sejarah_konten?></p>
            </div><!-- /.timeline-item -->
            @endforeach
            </div>
        </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<section class="about-layout2 pt-100 pb-30" >
    
    <div class="row mt-20">
        <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
            <h3 class="heading__title">Visi, Misi dan Tujuan UPTPKK</h3>
            </div><!-- /.heading -->
        </div><!-- /.col-lg-6 -->
    </div>
    <div class="container">
        {{-- @foreach ($data_struktur as $i)
        <img src=""><?= $i->struktur_foto ?>
        @endforeach --}}
    </div>
    <div class="container">
        <div class="row">
            @foreach ($data_visimisi as $i)
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                <div class="heading-layout2 mb-40">
                    <h3 class="heading__title">Visi</h3>
                </div><!-- /heading -->
                <div class="about-text-wrapper">
                    <div class="about__Text">
                        <p class="font-weight-bold mb-30"><?= $i->visi_konten ?></p>
                    </div>
                </div>
                <div class="heading-layout2 mb-40">
                    <h3 class="heading__title">Misi</h3>
                    </div><!-- /heading -->
                    <div class="about-text-wrapper">
                        <div class="about__Text">
                            <p class="font-weight-bold mb-30"><?= $i->misi_konten ?></p>
                        </div>
                    </div>
            </div><!-- /.col-xl-7 -->
            @endforeach
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-5  offset-xl-1">
                <div class="about__img mb-40">
                    <h4 class="blockquote__title">Tujuan Pokok UPTPKK
                    </h4>
                    <span class="blockquote__author"><?= $i->tujuan_konten ?></span>
                </div><!-- /.about-img -->
                </div><!-- /.col-xl-5 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<section class="page-title page-title-layout12 text-center">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
            <h2 class="heading__subtitle">Struktur Organisasi</h2>
            </div><!-- /.heading -->
        </div><!-- /.col-lg-6 -->
    </div>
    @foreach ($data_struktur as $i)
    <img src="{{asset('storage/struktur_organisasi/'. $i->struktur_foto)}}">
    @endforeach  
</section><!-- /.page-title -->
</section>
<!-- /.Profile -->
@endsection