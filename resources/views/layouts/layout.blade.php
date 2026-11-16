<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>A2 Risk Management | Home</title>
    {{--<link rel="apple-touch-icon" sizes="57x57" href="images/favicon//apple-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon//apple-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon//apple-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon//apple-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon//apple-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon//apple-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon//apple-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon//apple-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon//apple-icon-180x180.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="images/favicon//android-icon-192x192.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon//favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon//favicon-96x96.png" />--}}
    <link rel="icon" type="image/jpg" sizes="16x16" href="images/logo2.jpg" />
    {{--<link rel="manifest" href="images/favicon/manifest.json" />--}}
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffffff" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('toastr/toastr.min.css') }}" />
    <meta name="_token" content="{{  csrf_token() }}" />
</head>

<body>
<div class="preloader"></div><!-- /.preloader -->

<div class="page-wrapper">
    <header class="main-header header-style-one">
        <div class="top-header">
            <div class="container">
                <div class="left-info">
                    <p><i class="cameron-icon-email"></i><a href="mailto:info@a2risk.co.za">info@a2risk.co.za</a></p>
                </div><!-- /.left-info -->
                {{--<div class="right-info">
                    <ul class="info-block">
                        <li><i class="cameron-icon-support"></i><a href="#">(0121) 268 3610</a></li>
                        <li><a href="cart.html" class="cart-btn"><i class="cameron-icon-shopping-bag"></i><span class="count-text">(0)</span></a></li>
                    </ul>
                </div>--}}<!-- /.right-info -->
            </div><!-- /.container -->
        </div><!-- /.top-header -->
        <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
            <div class="container clearfix">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="logo-box clearfix">
                    <a class="navbar-brand" href="/">
                        <img src="images/logo2.jpg" class="main-logo" alt="A2Risk Logo"/>
                        <img src="images/logo-long2.png" class="stricky-logo" alt="A2Risk Logo"/>
                    </a>

                    <button class="menu-toggler" data-target=".header-style-one .main-navigation">
                        <span class="fa fa-bars"></span>
                    </button>
                </div><!-- /.logo-box -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="main-navigation">
                    <ul class=" navigation-box">
                        <li class="current">
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="/about">About</a>
                        </li>
                        <li>
                            <a href="/services">Products & Services</a>
                            <ul class="sub-menu">
                                <li><a href="/cctv">CCTV</a></li>
                                <li><a href="/access_control">Access Control</a></li>
                                <li><a href="/fire_detection">Fire Detection</a></li>
                                <li><a href="/bms">Building Management System</a></li>
                                <li><a href="/csta">Cyber Security</a></li>
                                {{--<li><a href="/physical_intrusion">Physical Intrusion</a></li>--}}
                            </ul><!-- /.sub-menu -->
                        </li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
                <div class="right-side-box">
                    {{--<div class="social">
                        <a href="#"><i class="fa fa-facebook-f"></i></a><!--
                        --><a href="#"><i class="fa fa-twitter"></i></a><!--
                        --><a href="#"><i class="fa fa-vimeo"></i></a><!--
                        --><a href="#"><i class="fa fa-google-plus"></i></a>
                    </div><!-- /.social -->--}}
                </div><!-- /.right-side-box -->
            </div>
            <!-- /.container -->
        </nav>
    </header><!-- /.main-header header-style-one -->

    @yield('content')

    @include('layouts.footer')
</div><!-- /.page-wrapper -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
<!-- /.scroll-to-top -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('js/wow.js') }}"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/theme.js') }}"></script>
<script src="{{ asset('toastr/toastr.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function(){

        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "500",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        $('#submit_btn').click(function(e){
            e.preventDefault();

            let form_data = $('#contact-form').serializeArray();

            $.ajax({
                url: $('#contact-form').attr('action'),
                type:'post',
                data:{form_data:form_data, _token: $('meta[name="_token"]').attr('content')},
                success:function(response){
                    var data = JSON.parse(response);
                    if(data.status=='ok')
                    {
                        $('#name').val('');
                        $('#email').val('');
                        $('#message').val('');
                        toastr.success(data.content);
                    }
                }
            });

            return false;
        });
    });
</script>
</body>

</html>
