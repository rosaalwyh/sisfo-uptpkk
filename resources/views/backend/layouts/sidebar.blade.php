<!-- sidebar  -->
<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
        <a class="large_logo" href="#"><img src="{{asset('assets/img/logo_uptpkk.png')}}" alt=""></a>
        <a class="small_logo" href="#"><img src="{{asset('assets/img/mini_logo.png')}}" alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="">
            <a href="{{url('dash')}}" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{asset('assets/img/menu-icon/dashboard.svg')}}" alt="">
                </div>
                <div class="nav_title">
                    <span>Dashboard </span>
                </div>
            </a>
        </li>
        <li class="">
            <a href="{{route('admin')}}" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{asset('assets/img/menu-icon/4.svg')}}" alt="">
                </div>
                <div class="nav_title">
                    <span>Admin</span>
                </div>
            </a>
        </li>
        <li class="">
            <a class="has-arrow" href="#" aria-expanded="false">
              <div class="nav_icon_small">
                <img src="{{('assets/img/menu-icon/promotion.svg')}}" alt="">
            </div>
            <div class="nav_title">
                <span>Pengumuman</span>
            </div>
            </a>
            <ul>
                <li>
                    <a href="{{route('PNKategori')}}">Kategori</a>
                </li>
                <li>
                    <a href="{{route('pengumuman')}}">Konten</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a class="has-arrow" href="#" aria-expanded="false">
              <div class="nav_icon_small">
                <img src="{{('assets/img/menu-icon/newspaper.svg')}}" alt="">
            </div>
            <div class="nav_title">
                <span>Berita</span>
            </div>
            </a>
            <ul>
                <li>
                    <a href="{{route('BRKategori')}}">Kategori</a>
                </li>
                <li>
                    <a href="{{route('berita')}}">Konten</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{asset('assets/img/menu-icon/blogger.svg')}}" alt="">
                </div>
                <div class="nav_title">
                    <span>Karir</span>
                </div>
            </a>
            <ul>
                <li>
                    <a href="{{route('seminar-karir')}}">Seminar dan Training</a>
                </li>
                <li>
                    <a href="{{route('konseling-karir')}}">Konseling</a>
                </li>
            </ul>
        </li>
       <li class="">
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{asset('assets/img/menu-icon/people-trading.svg')}}" alt="">
                </div>
                <div class="nav_title">
                    <span>Kewirausahaan</span>
                </div>
            </a>
            <ul>
                <li>
                    <a href="{{route('informasi-kewirausahaan')}}">Informasi</a>
                </li>
                <li>
                    <a href="{{route('seminar-kewirausahaan')}}">Seminar dan Training</a>
                </li>
                <li>
                    <a href="{{route('konseling-kewirausahaan')}}">Konseling</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a class="has-arrow" href="#" aria-expanded="false">
              <div class="nav_icon_small">
                <img src="{{('assets/img/menu-icon/idea.svg')}}" alt="">
            </div>
            <div class="nav_title">
                <span>Profil</span>
            </div>
            </a>
            <ul>
                <li>
                    <a href="{{route('sejarah')}}">Sejarah</a>
                </li>
                <li>
                <li>
                    <a href="{{route('visimisi')}}">Visi dan Misi</a>
                </li>
                <li>
                    <a href="{{route('struktur-organisasi')}}">Struktur Organisasi</a>
                </li>
            </ul>
        </li>
      </ul>
</nav>
 <!--/ sidebar  -->