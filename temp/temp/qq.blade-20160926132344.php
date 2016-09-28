 <!DOCTYPE html>
<html dir="ltr" lang="en-US" @yield('htmlschema') >
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>@yield('title', 'The Grace Company')</title>
    <meta name="author" content="The Grace Company" />
    <meta name="google-site-verification" content="KCTPTzqd2ZvRyjrpaoReKAdp6b_b5aN1c_dOzG12uLw" />

    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{!! asset('/frontend/css/bootstrap.css') !!}" type="text/css" />
    <link rel="stylesheet" href="{!! asset('/frontend/style.css') !!}" type="text/css" />
    <link rel="stylesheet" href="{!! asset('/frontend/css/swiper.css') !!}" type="text/css" />
    <link rel="stylesheet" href="{!! asset('/frontend/css/dark.css') !!}" type="text/css" />
    <link rel="stylesheet" href="{!! asset('/frontend/css/font-icons.css') !!}" type="text/css" />
     <link rel="stylesheet" href="{!! asset('/frontend/css/font-awesome.min.css') !!}" type="text/css" />
    <link rel="stylesheet" href="{!! asset('/frontend/css/animate.css') !!}" type="text/css" />
    <link rel="stylesheet" href="{!! asset('/frontend/css/magnific-popup.css') !!}" type="text/css" />

    <link rel="stylesheet" type="text/css" href="{!! asset('/frontend/custom-css/big-table.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('/frontend/custom-css/block.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('/frontend/custom-css/custom.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('/frontend/custom-css/header.css') !!}">



    <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
@yield('header_styles')
    <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
    <link rel="stylesheet" type="text/css" href="{!! asset('/frontend/important.css') !!}">
    <link rel="stylesheet" href="{!! asset('/frontend/css/responsive.css') !!}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->



     <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
          ga('create', '{!! $settings['ga_code']  or 'UA-78414244-1' !!}', 'auto');
          ga('create', 'UA-78414244-2', 'auto', {'name': 'devTracker'});
          ga('require', 'ec');
            ga('require', 'displayfeatures');
            ga('require', 'linkid');
@yield('inline-ga-func')
@yield('inline-ga-pi')
@yield('inline-ga-atc')
@yield('inline-ga-action')
          ga('send', 'pageview');
          ga('devTracker.send', 'pageview');
    </script>
@yield('scripts')
@yield('pp_header_scripts')
</head>
<body class=" @yield('bodytag') stretched" @yield('bodyschema')>
    <div id="wrapper" class="clearfix">
    <!-- Header ============================================= -->
@include('frontend/layout/partials/header/top-bar')
@include('frontend/layout/partials/header/header')
@yield('submenu')
@yield('slider')
@yield('intro')
@yield('page-title')

@yield('sidebar')
        <!-- Content
        ============================================= -->
@yield('content')
        <!-- Footer
        ============================================= -->
        <footer id="footer" class="dark">
            <div class="container">
@include('frontend.layout.partials.footer.footer-widgets')
            </div>
            <!-- Copyrights
            ============================================= -->
            <div id="copyrights">
@include('frontend.layout.partials.footer.copyr')
            </div><!-- #copyrights end -->
        </footer><!-- #footer end -->
    </div><!-- #wrapper end -->
    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>
    <!-- External JavaScripts
    ============================================= -->

@yield('plugins')

   <script type="text/javascript" src="{!! asset('/frontend/js/jquery.js') !!}"></script>


  {{-- <script type="text/javascript" src="{!! asset('/frontend/js/plugins.js') !!}"></script> --}}









@yield('footer_scripts')
    <!-- Footer Scripts ============================================= -->
    <script type="text/javascript" src="{!! asset('/frontend/js/functions.js') !!}"></script>

@yield('pp_footer_scripts')
@yield('inlinejs')
</body>
</html>