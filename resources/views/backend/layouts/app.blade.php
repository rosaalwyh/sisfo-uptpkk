<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from demo.dashboardpack.com/user-management-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Jul 2021 05:01:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>@yield('title')</title>

    <link rel="icon" href="{{ asset('assets/img/logo-polsri.png')}}" type="image/png">
    <!-- Bootstrap CSS --> 
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}" />
    <!-- themefy CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/themefy_icon/themify-icons.css')}}" />
    <!-- select2 CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/niceselect/css/nice-select.css')}}" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl_carousel/css/owl.carousel.css')}}" />
    <!-- gijgo css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/gijgo/gijgo.min.css')}}" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/font_awesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/tagsinput/tagsinput.css')}}" />

    <!-- date picker -->
     <link rel="stylesheet" href="{{ asset('assets/vendors/datepicker/date-picker.css')}}" />

     {{-- <link rel="stylesheet" href="{{ asset('assets/vendors/vectormap-home/vectormap-2.0.2.css')}}" /> --}}
     
     <!-- scrollabe  -->
     <link rel="stylesheet" href="{{ asset('assets/vendors/scroll/scrollable.css')}}" />
    <!-- datatable CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/datatable/css/jquery.dataTables.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/datatable/css/responsive.dataTables.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/datatable/css/buttons.dataTables.min.css')}}" />
    <!-- text editor css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/text_editor/summernote-bs4.css')}}" />
    <!-- morris css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/morris/morris.css')}}">
    <!-- metarial icon css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/material_icon/material-icons.css')}}" />

    <!-- menu css  -->
    <link rel="stylesheet" href="{{ asset('assets/css/metisMenu.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/colors/default.css" id="colorSkinCSS')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body class="crm_body_bg">

    @include('backend.layouts.sidebar')
    @include('backend.layouts.header')
    @yield('content')
    @yield('footer')


    
<div id="back-top" style="display: none;">
    <a title="Go to Top" href="#">
        <i class="ti-angle-up"></i>
    </a>
</div>
<!-- footer  -->
@stack('js')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
{{-- <script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script> --}}
<script src="{{asset('assets/js/script.js')}}"></script>
<!-- popper js -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<!-- bootstarp js -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- sidebar menu  -->
<script src="{{asset('assets/js/metisMenu.js')}}"></script>
<!-- waypoints js -->
<script src="{{asset('assets/vendors/count_up/jquery.waypoints.min.js')}}"></script>
<!-- waypoints js -->
{{-- <script src="{{asset('assets/vendors/chartlist/Chart.min.js')}}"></script> --}}
<!-- counterup js -->
<script src="{{asset('assets/vendors/count_up/jquery.counterup.min.js')}}"></script>

<!-- nice select -->
<script src="{{asset('assets/vendors/niceselect/js/jquery.nice-select.min.js')}}"></script>
<!-- owl carousel -->
<script src="{{asset('assets/vendors/owl_carousel/js/owl.carousel.min.js')}}"></script>

<!-- responsive table -->
<script src="{{asset('assets/vendors/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/vendors/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/vendors/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/vendors/datatable/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('assets/vendors/datatable/js/jszip.min.js')}}"></script>
<script src="{{asset('assets/vendors/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/vendors/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/vendors/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/vendors/datatable/js/buttons.print.min.js')}}"></script>

<!-- datepicker  -->
<script src="{{asset('assets/vendors/datepicker/datepicker.js')}}"></script>
<script src="{{asset('assets/vendors/datepicker/datepicker.en.js')}}"></script>
<script src="{{asset('assets/vendors/datepicker/datepicker.custom.js')}}"></script>

<script src="{{asset('assets/js/chart.min.js')}}"></script>
<script src="{{asset('assets/vendors/chartjs/roundedBar.min.js')}}"></script>

<!-- progressbar js -->
<script src="{{asset('assets/vendors/progressbar/jquery.barfiller.js')}}"></script>
<!-- tag input -->
<script src="{{asset('assets/vendors/tagsinput/tagsinput.js')}}"></script>
<!-- text editor js -->
<script src="{{asset('assets/vendors/text_editor/summernote-bs4.js')}}"></script>
<script src="{{asset('assets/js/ckeditor-classic.js')}}"></script>
<script src="{{asset('assets/vendors/am_chart/amcharts.js')}}"></script>

<!-- scrollabe  -->
<script src="{{asset('assets/vendors/scroll/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/vendors/scroll/scrollable-custom.js')}}"></script>

<!-- vector map  -->
<script src="{{asset('assets/vendors/vectormap-home/vectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('assets/vendors/vectormap-home/vectormap-world-mill-en.js')}}"></script>

<!-- apex chrat  -->
<script src="{{asset('assets/vendors/apex_chart/apex-chart2.js')}}"></script>
<script src="{{asset('assets/vendors/apex_chart/apex_dashboard.js')}}"></script>

<script src="{{asset('assets/vendors/echart/echarts.min.js')}}"></script>


<script src="{{asset('assets/vendors/chart_am/core.js')}}"></script>
<script src="{{asset('assets/vendors/chart_am/charts.js')}}"></script>
<script src="{{asset('assets/vendors/chart_am/animated.js')}}"></script>
{{-- <script src="{{asset('assets/vendors/chart_am/kelly.js')}}"></script> --}}
<script src="{{asset('assets/vendors/chart_am/chart-custom.js')}}"></script>
<!-- custom js -->
<script src="{{asset('assets/js/dashboard_init.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>

<script>
        var Ckeditor = function () {
        // Private functions
        var demos = function () {
            ClassicEditor
                .create( document.querySelector( '#kt-ckeditor-1' ) )
                .then( editor => {
                    console.log( editor );
                } )
                .catch( error => {
                    console.error( error );
                } );

                ClassicEditor
                .create( document.querySelector( '#kt-ckeditor-2' ) )
                .then( editor => {
                    console.log( editor );
                } )
                .catch( error => {
                    console.error( error );
                } );
                ClassicEditor
                .create( document.querySelector( '#kt-ckeditor-3' ) )
                .then( editor => {
                    console.log( editor );
                } )
                .catch( error => {
                    console.error( error );
                } );
        }
    
        return {
            // public functions
            init: function() {
                demos();
            }
        };
    }();
    
    // Initialization
    jQuery(document).ready(function() {
        Ckeditor.init();
    });
</script>
</body>
<!-- Mirrored from demo.dashboardpack.com/user-management-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Jul 2021 05:04:48 GMT -->
</!DOCTYPE>