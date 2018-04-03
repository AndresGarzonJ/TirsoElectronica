<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Metro | Shop 1 </title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href={{asset("indexMetro/img/favicon.png")}}>
    <!-- Normalize CSS -->
    <link rel="stylesheet" href={{asset("indexMetro/css/normalize.css")}}>
    <!-- Main CSS -->
    <link rel="stylesheet" href={{asset("indexMetro/css/main.css")}}>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href={{asset("indexMetro/css/bootstrap.min.css")}}>
    <!-- Animate CSS -->
    <link rel="stylesheet" href={{asset("indexMetro/css/animate.min.css")}}>
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href={{asset("indexMetro/css/font-awesome.min.css")}}>
    <!-- Flaticon CSS-->
    <link rel="stylesheet" type="text/css" href={{asset("indexMetro/css/font/flaticon.css")}}>
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href={{asset("indexMetro/css/owl.carousel.min.css")}}>
    <link rel="stylesheet" href={{asset("indexMetro/css/owl.theme.default.min.css")}}>
    <!-- Main Menu CSS-->
    <link rel="stylesheet" href={{asset("indexMetro/css/meanmenu.min.css")}}>
    <!-- Select2 CSS -->
    <link rel="stylesheet" href={{asset("indexMetro/css/select2.min.css")}}>
    <!-- Nouislider Style CSS -->
    <link rel="stylesheet" href={{asset("vendor/noUiSlider/nouislider.min.css")}}>
    <!-- Custom CSS -->
    <link rel="stylesheet" href={{asset("indexMetro/style.css")}}>
    <!-- Modernizr Js -->
    <script src={{asset("indexMetro/js/vendor/modernizr-2.8.3.min.js")}}></script>
    <!-- ---------------------------------------------------------- -->
    <!-- Nivo Slider CSS --> <!-- necesario para index -->
    <link rel="stylesheet" href={{asset("indexMetro/lib/custom-slider/css/nivo-slider.css")}} type="text/css" />
    <link rel="stylesheet" href={{asset("indexMetro/lib/custom-slider/css/preview.css")}} type="text/css" media="screen"/>
    
</head>

<body>
    <div class="wrapper-area">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Add your site or application content here -->
        <!-- Header Area Start Here -->
        <header>

            <?php 
                $namePage = "Request::url()";
            ?>



            @if ($namePage == "http://localhost:8000")
                <div class="header-area-style1" id="sticker">
            @else
                <div class="header-area-style3" id="sticker">
            @endif
            
                <div class="header-top">
                    <div class="header-top-inner-top">        
                        @include('layoutIndexM.layoutHeader-top-inner-top')                        
                    </div>
                    
                    <div class="header-top-inner-bottom">
                        @include('layoutIndexM.layoutHeader-top-inner-bottom')
                    </div>
                </div>
                <div class="header-bottom">
                    @include('layoutIndexM.layoutHeader-bottom')
                </div>
            </div>
        </header>
                


        <!-- Header Area End Here -->
        <!-- Inner Page Banner Area Start Here -->
            @yield('page-content-top')

        <!-- Inner Page Banner Area End Here -->
        <!-- Shop Page Area Start Here -->
            @yield('page-content')
        <!-- Shop Page Area End Here -->
        <!-- Footer Area Start Here -->
        <footer>
            @include('layoutIndexM.layoutFooter')
        </footer>
        <!-- Footer Area End Here -->
    </div>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- jquery-->
    <script src={{asset("indexMetro/js/vendor/jquery-2.2.4.min.js")}} type="text/javascript"></script>
    <!-- Bootstrap js -->
    <script src={{asset("indexMetro/js/bootstrap.min.js")}} type="text/javascript"></script>
    <!-- Owl Cauosel JS -->
    <script src={{asset("indexMetro/js/owl.carousel.min.js")}} type="text/javascript"></script>
    <!-- Meanmenu Js -->
    <script src={{asset("indexMetro/js/jquery.meanmenu.min.js")}} type="text/javascript"></script>
    <!-- WOW JS -->
    <script src={{asset("indexMetro/js/wow.min.js")}} type="text/javascript"></script>
    <!-- Plugins js -->
    <script src={{asset("indexMetro/js/plugins.js")}} type="text/javascript"></script>
    <!-- Countdown js -->
    <script src={{asset("indexMetro/js/jquery.countdown.min.js")}} type="text/javascript"></script>
    <!-- Srollup js -->
    <script src={{asset("indexMetro/js/jquery.scrollUp.min.js")}} type="text/javascript"></script>
    <!-- Actual Js -->
    <script src={{asset("indexMetro/js/jquery.actual.min.js")}} type="text/javascript"></script>
    <!-- Nouislider Js -->
    <script src={{asset("vendor/noUiSlider/nouislider.min.js")}} type="text/javascript"></script>
    <!-- wNumb Js -->
    <script src={{asset("indexMetro/js/wNumb.js")}} type="text/javascript"></script>
    <!-- Custom Js -->
    <script src={{asset("indexMetro/js/main.js")}} type="text/javascript"></script>
    <!-- ---------------------------------------------------------- -->
    <!-- necesario para index -->
    <!-- Nivo slider js -->
    <script src={{asset("indexMetro/lib/custom-slider/js/jquery.nivo.slider.js")}} type="text/javascript"></script>
    <script src={{asset("indexMetro/lib/custom-slider/home.js")}} type="text/javascript"></script>
    <!-- Isotope js -->
    <script src={{asset("indexMetro/js/isotope.pkgd.min.js")}} type="text/javascript"></script>
</body>

</html>
