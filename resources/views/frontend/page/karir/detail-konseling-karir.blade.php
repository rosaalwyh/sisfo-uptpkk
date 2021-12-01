@extends('frontend.layouts.app')
@section('content')
<!-- ======================
Page Title
========================= -->
<section class="page-title-detail" style="background-color: #091d3e">
</section><!-- /.page-title -->

<section class="blog blog-single pt-0 pb-80">
<div class="container">
    @foreach ($data as $item)
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 mt-10">
            <div class="post-item mb-0">
            <div class="post__img">
                <a href="#">
                    <img src="{{asset('frontend/assets/images/blog/single/1.jpg')}}" alt="blog image">
                </a>
            </div><!-- /.post-img -->
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 mt-10">
            <div class="post-item mb-0">
            <div class="post__img">
                <a href="#">
                    <img src="{{asset('storage/konseling_karir/'. $item->konseling_foto)}}" style="height:390px" alt="blog image">
                </a>
            </div><!-- /.post-img -->
            </div>
        </div>
    </div><!-- /.row -->

    <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="post-item mb-0">
        <div class="post__meta d-flex align-items-center mb-20">
            <span class="post__meta-date">{{$item->created_at}}</span>
            <div class="post__meta-cat">
                <span class="post__meta-author"><span class="color-secondary">By:</span>
                <a href="#">{{$item->konseling_penulis}}</a>
                </span>
            </div><!-- /.blog-meta-cat -->
            
        </div><!-- /.blog-meta -->
        <h1 class="post__title mb-30">
            {{$item->konseling_judul}}
        </h1>
        <div class="post__desc">
            <p><?= $item->konseling_konten?></p>
        </div><!-- /.blog-desc -->
        </div><!-- /.post-item -->
        <div class="bordered-box mb-40">
        <div class="row row-no-gutter">
            <div class="col-sm-12 col-md-6 col-lg-6 d-flex justify-content-center">
            <div class="blog-tags d-flex flex-wrap">
                <strong class="mr-20 color-heading">Dilaksanakan pada : </strong>
                <ul class="list-unstyled d-flex flex-wrap mb-0">
                <li><a href="#">{{$item->konseling_tanggal}}</a></li>
                </ul>
            </div><!-- /.blog-tags -->
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="blog-share d-flex flex-wrap justify-content-end">
                <strong class="mr-20 color-heading">Share</strong>
                <ul class="list-unstyled social-icons social-icons-primary d-flex mb-0">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div><!-- /.blog-share -->
            </div>
        </div>
        </div>
    </div><!-- /.col-lg-8 -->
</div><!-- /.row -->
    @endforeach
</div><!-- /.container -->
</section><!-- /.blog Single -->
@endsection