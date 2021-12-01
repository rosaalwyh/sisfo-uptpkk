<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Management Admin</title>
<link rel="icon" href="{{ asset('assets/img/logo-polsri.png')}}" type="image/png">
    <!-- Bootstrap CSS --> 
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}" />
    <!-- themefy CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/themefy_icon/themify-icons.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/font_awesome/css/all.min.css')}}" />
     <!-- scrollabe  -->
     <link rel="stylesheet" href="{{ asset('assets/vendors/scroll/scrollable.css')}}" />
    <!-- menu css  -->
    <link rel="stylesheet" href="{{ asset('assets/css/metisMenu.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/colors/default.css" id="colorSkinCSS')}}">
</head>
<body class="crm_body_bg">
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="white_box mb_30">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- sign_in  -->
                                <div class="modal-content cs_modal">
                                    <div class="modal-header justify-content-center theme_bg_1">
                                        <h5 class="modal-title text_white">Log in</h5>
                                    </div>
                                    <div class="modal-body">
                                        @if (count($errors) > 0)
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                @foreach ($errors->all() as $err)
                                                    {{$err}} 
                                                    <?= '<br>' ?>                   
                                                @endforeach
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        @endif
                                        @if($message = Session::get('error'))
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <strong>Gagal!</strong> {{$message}}
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                        @endif
                                        <form action="{{route('auth.login')}}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="user_nip" placeholder="Masukan NIP Pegawai" required autofocus>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                                            </div>
                                            <button type="submit" name="submit" class="btn_1 full_width text-center">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- footer part -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="footer_iner text-center">
                <p>2021 © Unit Pelaksana Teknis Pengembangan Karir dan Kewirausahaan</p>
            </div>
        </div>
    </div>
</div>
<!-- main content part end -->
  <!-- footer  -->
  <!-- jquery slim -->
  <script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
  <!-- popper js -->
  <script src="{{asset('assets/js/popper.min.js')}}"></script>
  <!-- bootstarp js -->
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <!-- sidebar menu  -->
  <script src="{{asset('assets/js/metisMenu.js')}}"></script>
  
  <!-- scrollabe  -->
  <script src="{{asset('assets/vendors/scroll/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('assets/vendors/scroll/scrollable-custom.js')}}"></script>
  
  <!-- custom js -->
  <script src="{{asset('assets/js/custom.js')}}"></script>
  </body>
  </html>