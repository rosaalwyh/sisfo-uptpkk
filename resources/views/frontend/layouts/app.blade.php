<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from 7oroof.com/demos/datasoft/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Sep 2021 15:34:13 GMT -->
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="DataSoft  IT Solutions &  Services Template">
  <link href="{{asset('frontend/assets/images/favicon/logo-polsri.png')}}" rel="icon">
  <title>UPTPKK</title>

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600;700&amp;family=Roboto:wght@400;700&amp;display=swap">
  <link rel="stylesheet" href="{{asset('frontend/assets/use.fontawesome.com/releases/v5.1.1/css/all.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="{{asset('frontend/assets/css/libraries.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
</head>

<body>
  <div class="wrapper">
    <div class="preloader">
      <div class="loading"><span></span><span></span><span></span><span></span></div>
    </div><!-- /.preloader -->
    @include('frontend.layouts.header')
    @yield('content')
    @include('frontend.layouts.footer')
  </div><!-- /.wrapper -->

<script src="{{asset('frontend/assets/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/plugins.js')}}"></script>
<script src="{{asset('frontend/assets/js/main.js')}}"></script>
</body>


<!-- Mirrored from 7oroof.com/demos/datasoft/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Sep 2021 15:34:37 GMT -->
</html>