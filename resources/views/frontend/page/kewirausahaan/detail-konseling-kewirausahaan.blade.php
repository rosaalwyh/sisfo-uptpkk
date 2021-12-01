@extends('frontend.layouts.app')
@section('content')
<!-- ======================
Page Title
========================= -->
<section class="page-title-detail" style="background-color: #091d3e">
</section><!-- /.page-title -->

<section class="blog blog-single pt-0 pb-80">
<div class="container">
    <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-8">
        <div class="post-item mb-0">
        <div class="post__img">
            <a href="#">
            <img src="{{asset('frontend/assets/images/blog/single/1.jpg')}}" alt="blog image">
            </a>
        </div><!-- /.post-img -->
        <div class="post__meta d-flex align-items-center mb-20">
            <span class="post__meta-date">Tanggal Publish</span>
            <div class="post__meta-cat">
            <a href="#">Kategori</a><a href="#">Kategori</a>
            </div><!-- /.blog-meta-cat -->
            <span class="post__meta-author"><span class="color-secondary">By:</span>
            <a href="#">Penulis</a>
            </span>
        </div><!-- /.blog-meta -->
        <h1 class="post__title mb-30">
            Judul Konseling Kewirausahaan
        </h1>
        <div class="post__desc">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, neque iusto quo quis ratione voluptates mollitia, minima omnis repellendus quidem, blanditiis excepturi earum corporis officia necessitatibus ullam odit nostrum rem.</p>
            <p> “Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed corrupti libero ad sequi iste aperiam! Fugiat veniam possimus iste incidunt distinctio ab earum doloremque eos magni expedita, unde nesciunt consequatur,” says Brian Kropp, Distinguished Vice President, Research, Gartner.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates beatae, aspernatur iste laboriosam dolorem eaque temporibus excepturi cumque, facilis recusandae expedita enim architecto dolore tempora, libero repudiandae nostrum odio quam. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem sapiente corrupti iste, delectus odio eveniet recusandae, hic labore accusamus ea eius distinctio deleniti id libero dolor repudiandae atque provident. Similique. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate explicabo consequatur adipisci ipsa aspernatur aliquid? Enim quisquam dolor in dolorem similique repudiandae necessitatibus delectus animi illo quos. Reiciendis, corporis temporibus.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam placeat sapiente fuga, incidunt possimus natus quod. Veritatis, obcaecati alias. Recusandae officiis eum sit quia quas necessitatibus voluptate delectus. Reiciendis, expedita. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam corrupti fugiat reiciendis porro iste itaque ducimus. Deserunt culpa pariatur delectus illo, ex saepe obcaecati, vero distinctio quam voluptate voluptatum aperiam?</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero saepe voluptate soluta animi voluptatum, et doloremque ad dolore, ex explicabo eius dolorum exercitationem, numquam rerum distinctio iusto ipsa? Fuga, voluptates.</p>
        </div><!-- /.blog-desc -->
        </div><!-- /.post-item -->
        <div class="bordered-box mb-40">
        <div class="row row-no-gutter">
            <div class="col-sm-12 col-md-6 col-lg-6 d-flex justify-content-center">
            <div class="blog-tags d-flex flex-wrap">
                <strong class="mr-20 color-heading">Tags</strong>
                <ul class="list-unstyled d-flex flex-wrap mb-0">
                <li><a href="#">Kategori</a></li>
                <li><a href="#">Kategori</a></li>
                <li><a href="#">Kategori</a></li>
                <li><a href="#">Kategori</a></li>
                </ul>
            </div><!-- /.blog-tags -->
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="blog-share d-flex flex-wrap justify-content-end">
                <strong class="mr-20 color-heading">Share</strong>
                <ul class="list-unstyled social-icons social-icons-primary d-flex mb-0">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-google"></i></a></li>
                </ul>
            </div><!-- /.blog-share -->
            </div>
        </div>
        </div>
    </div><!-- /.col-lg-8 -->
    <div class="col-sm-12 col-md-12 col-lg-4">
        <aside class="sidebar">
        <div class="widget widget-search">
            <h5 class="widget__title">Search</h5>
            <div class="widget__content">
            <form class="widget__form-search">
                <input type="text" class="form-control" placeholder="Search...">
                <button class="btn" type="submit"><i class="icon-search"></i></button>
            </form>
            </div><!-- /.widget-content -->
        </div><!-- /.widget-search -->
        <div class="widget widget-posts">
            <h5 class="widget__title">Recent Posts</h5>
            <div class="widget__content">
            <!-- post item #1 -->
            <div class="widget-post-item d-flex align-items-center">
                <div class="widget-post__img">
                <a href="#"><img src="{{asset('frontend/assets/images/blog/grid/2.jpg')}}" alt="thumb"></a>
                </div><!-- /.widget-post-img -->
                <div class="widget-post__content">
                <span class="widget-post__date">Sep 19, 2020</span>
                <h4 class="widget-post__title"><a href="#">Succession Risks That Threaten Your Leadership</a>
                </h4>
                </div><!-- /.widget-post-content -->
            </div><!-- /.widget-post-item -->
            <!-- post item #2 -->
            <div class="widget-post-item d-flex align-items-center">
                <div class="widget-post__img">
                <a href="#"><img src="{{asset('frontend/assets/images/blog/grid/3.jpg')}}" alt="thumb"></a>
                </div><!-- /.widget-post-img -->
                <div class="widget-post__content">
                <span class="widget-post__date">July 7, 2020</span>
                <h4 class="widget-post__title"><a href="#">Do Employee Surveys Tell About Employee?</a>
                </h4>
                </div><!-- /.widget-post-content -->
            </div><!-- /.widget-post-item -->
            <!-- post item #3 -->
            <div class="widget-post-item d-flex align-items-center">
                <div class="widget-post__img">
                <a href="#"><img src="{{asset('frontend/assets/images/blog/grid/6.jpg')}}" alt="thumb"></a>
                </div><!-- /.widget-post-img -->
                <div class="widget-post__content">
                <span class="widget-post__date">March 13, 2020</span>
                <h4 class="widget-post__title"><a href="#">Succession Risks That Threaten Your Leadership</a>
                </h4>
                </div><!-- /.widget-post-content -->
            </div><!-- /.widget-post-item -->
            </div><!-- /.widget-content -->
        </div><!-- /.widget-posts -->
        <div class="widget widget-categories">
            <h5 class="widget__title">Categories</h5>
            <div class="widget-content">
            <ul class="list-unstyled mb-0">
                <li><a href="#"><span>IT Management</span><span class="cat-count">9</span></a></li>
                <li><a href="#"><span>Cyber Security</span><span class="cat-count">2</span></a></li>
                <li><a href="#"><span>Cloud Computing</span><span class="cat-count">5</span></a></li>
                <li><a href="#"><span>IT Consulting</span><span class="cat-count">1</span></a></li>
                <li><a href="#"><span>Software Dev</span><span class="cat-count">7</span></a></li>
            </ul>
            </div><!-- /.widget-content -->
        </div><!-- /.widget-categories -->
        <div class="widget widget-tags">
            <h5 class="widget__title">Tags</h5>
            <div class="widget-content">
            <ul class="list-unstyled mb-0">
                <li><a href="#">Insights</a></li>
                <li><a href="#">Industry</a></li>
                <li><a href="#">Modern</a></li>
                <li><a href="#">Corporate</a></li>
                <li><a href="#">Business</a></li>
            </ul>
            </div><!-- /.widget-content -->
        </div><!-- /.widget-tags -->
        </aside><!-- /.sidebar -->
    </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
</div><!-- /.container -->
</section><!-- /.blog Single -->
@endsection