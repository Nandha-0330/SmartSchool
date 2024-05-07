<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="Smart Class: coaching classes" />
	<meta property="og:title" content="Smart Class: coaching classes" />
	<meta property="og:description" content="Smart Class: coaching classes" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON -->
    <link rel="icon" href="{{ asset('build/images/favicon.ico') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('build/images/favicon.png') }}" />

    <!-- PAGE TITLE HERE -->
    <title>@yield('pageTitle', 'Default Title')</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
    <script src="{{ asset('build/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('build/js/respond.min.js') }}"></script>
    <![endif]-->

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('build/css/plugins.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('build/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('build/css/templete.css') }}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{ asset('build/css/skin/skin-1.css') }}">
</head>
<body id="bg">
    <div class="page-wraper">
        <div id="loading-area">
            <h1 class="ml4">
                <span class="letters letters-1">Ready</span>
                <span class="letters letters-2">Set</span>
                <span class="letters letters-3">Go</span>
            </h1>
        </div>

        <!-- header -->
        @include('admin.includes.header')
        <!-- header END -->

        @yield('content')

        <!-- Content END-->


    </div>

    <!-- JAVASCRIPT FILES ========================================= -->
    <script src="{{ asset('build/js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->
    <script src="{{ asset('build/plugins/wow/wow.js') }}"></script><!-- WOW JS -->
    <script src="{{ asset('build/plugins/bootstrap/js/popper.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{ asset('build/plugins/bootstrap/js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{ asset('build/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script><!-- FORM JS -->
    <script src="{{ asset('build/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
    <script src="{{ asset('build/plugins/lightgallery/js/lightgallery-all.min.js') }}"></script><!-- LIGHTGALLERY JS -->
    <script src="{{ asset('build/plugins/magnific-popup/magnific-popup.js') }}"></script><!-- LIGHTGALLERY JS -->
    <script src="{{ asset('build/plugins/counter/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
    <script src="{{ asset('build/plugins/counter/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
    <script src="{{ asset('build/plugins/imagesloaded/imagesloaded.js') }}"></script><!-- IMAGESLOADED -->
    <script src="{{ asset('build/plugins/masonry/masonry-3.1.4.js') }}"></script><!-- MASONRY -->
    <script src="{{ asset('build/plugins/masonry/masonry.filter.js') }}"></script><!-- MASONRY -->
    <script src="{{ asset('build/plugins/owl-carousel/owl.carousel.js') }}"></script><!-- OWL SLIDER -->
    <script src="{{ asset('build/plugins/scroll/scrollbar.min.js') }}"></script><!-- OWL SLIDER -->
    <script src="{{ asset('build/js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
    <script src="{{ asset('build/js/dz.carousel.js') }}"></script><!-- SORTCODE FUCTIONS -->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyBjirg3UoMD5oUiFuZt3P9sErZD-2Rxc68&sensor=false"></script><!-- GOOGLE MAP -->
    <script src='https://www.google.com/recaptcha/api.js'></script> <!-- Google API For Recaptcha  -->
    <script src="{{ asset('build/js/dz.ajax.js') }}"></script><!-- CONTACT JS  -->
    <script src="{{ asset('build/plugins/loading/anime.js') }}"></script><!-- LOADING JS -->
    <script src="{{ asset('build/plugins/loading/anime-app.js') }}"></script><!-- LOADING JS -->
    <script src="{{ asset('build/js/jquery.marquee.js') }}"></script><!-- LOADING JS -->
<script>
	$(function(){
		$('.marquee').marquee({
			speed: 100,
			gap: 0,
			delayBeforeStart: 0,
			direction: 'left',
			duplicated: true,
			pauseOnHover: true
		});
		$('.marquee1').marquee({
			speed: 50,
			gap: 0,
			delayBeforeStart: 0,
			direction: 'up',
			duplicated: true,
			pauseOnHover: true
		});
	});
</script>
</body>
</html>
