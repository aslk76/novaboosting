<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nova Boosting Community</title>
    <meta name="description" content="Gold Boosting Community with the highest quality runs and best prices.">
    <meta name="keywords" content="game, gaming, WoW, World of Warcraft, Nova, Boosting, Mounts, Gear">
    <meta name="author" content="Nova Boosting 2021">
    <meta name="robots" content="ALL">
    @if(!$layoutImages->isEmpty())
        @if ($layoutImages[0]->hasImage('favIcon', 'flexible'))
            <link rel="icon" type="image/png" href="{!! $layoutImages[0]->image('favIcon', 'flexible', ['fm' => null]) !!}"> 
        @else
            <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
        @endif
    @else    
        <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
    @endif
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Nova Boosting">
    <meta property="og:description" content="Gold Boosting Community with the highest quality runs and best prices.">
    <meta property="og:image" content="{//www.novaboosting.com/assets/images/favicon.png}">
    <meta property="og:url" content="//www.novaboosting.com/">
    <meta property="og:url" content="//novaboosting.com/">
    <meta property="og:title" content="Nova Boosting Community">

    <!-- Begin styles -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet"
        type="text/css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- FontAwesome -->
    <script defer src="{{ asset('assets/vendor/fontawesome-free/js/all.js') }}"></script>
    <script defer src="{{ asset('assets/vendor/fontawesome-free/js/v4-shims.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <!-- IonIcons -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/ionicons/css/ionicons.min.css') }}">
    <!-- Flickity -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/flickity/dist/flickity.min.css') }}">
    <!-- Photoswipe -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/photoswipe/dist/photoswipe.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/vendor/photoswipe/dist/default-skin/default-skin.css') }}">
    <!-- Seiyria Bootstrap Slider -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css') }}">
    <!-- Summernote -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/summernote/dist/summernote-bs4.css') }}">
    <!-- GoodGames -->
    <link rel="stylesheet" href="{{ asset('css/nova.css') }}">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <!-- END: Styles -->
    <!-- jQuery -->
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    {{-- google recaptcha script --}}
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>

<body>
    @include('home.partials.snowflakes')
    <div class="nk-main">
        <img class="nk-page-background-fixed" src="
        @if(!$layoutImages->isEmpty())
            @if ($layoutImages[0]->hasImage('backgroundImg', 'flexible'))
                {!! $layoutImages[0]->image('backgroundImg', 'flexible', ['fm' => null]) !!}
            @else
                {{ asset('assets/images/shadowlands_bg_gif_cropped.gif') }}
            @endif
        @else
            {{ asset('assets/images/shadowlands_bg_gif_cropped.gif') }}
        @endif
        " alt="">
        @include('home.partials.nav', ['layoutImages' => $layoutImages])
        @include('home.partials.christmasLights')
        <div class="nk-gap-2"></div>
        <div class="container">
            @include('home.partials.imageslider', ['sliderImages' => $sliderImages])
        </div>

        <div class="container">
            <div class="nk-gap-2"></div>
            @include('home.partials.sublinks', ['links' => $links])
            <div class="nk-gap-2"></div>
            @include('home.partials.promobanner', ['promo' => $promo])
            <div class="nk-gap-2"></div>
            <!-- page content inserts here at yield statement -->
            <div class="row vertical-gap">
                <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
                @yield('content')
            </div>
            <div class="nk-gap-3"></div>
        </div>
    </div>

    <div class="nk-main">
        @include('home.partials.footer')
    </div>


    <!-- START: Scripts -->
    <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- Object Fit Polyfill -->
    <script src="{{ asset('assets/vendor/object-fit-images/dist/ofi.min.js') }}"></script>
    <!-- GSAP -->
    <script src="{{ asset('assets/vendor/gsap/src/minified/TweenMax.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js') }}"></script>
    <!-- Popper -->
    <script src="{{ asset('assets/vendor/popper.js/dist/umd/popper.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- Sticky Kit -->
    <script src="{{ asset('assets/vendor/sticky-kit/dist/sticky-kit.min.js') }}"></script>
    <!-- Jarallax -->
    <script src="{{ asset('assets/vendor/jarallax/dist/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jarallax/dist/jarallax-video.min.js') }}"></script>
    <!-- imagesLoaded -->
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <!-- Flickity -->
    <script src="{{ asset('assets/vendor/flickity/dist/flickity.pkgd.min.js') }}"></script>
    <!-- Photoswipe -->
    <script src="{{ asset('assets/vendor/photoswipe/dist/photoswipe.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js') }}"></script>
    <!-- Jquery Validation -->
    <script src="{{ asset('assets/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <!-- Jquery Countdown + Moment -->
    <script src="{{ asset('assets/vendor/jquery-countdown/dist/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js') }}"></script>
    <!-- Hammer.js -->
    <script src="{{ asset('assets/vendor/hammerjs/hammer.min.js') }}"></script>
    <!-- NanoSroller -->
    <script src="{{ asset('assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js') }}"></script>
    <!-- SoundManager2 -->
    <script src="{{ asset('assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js') }}"></script>
    <!-- Seiyria Bootstrap Slider -->
    <script src="{{ asset('assets/vendor/bootstrap-slider/dist/bootstrap-slider.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('assets/vendor/summernote/dist/summernote-bs4.min.js') }}"></script>
    <!-- nK Share -->
    <script src="{{ asset('assets/plugins/nk-share/nk-share.js') }}"></script>
    <!-- GoodGames -->
    <script src="{{ asset('js/goodgames.min.js') }}"></script>
    <script src="{{ asset('js/goodgames-init.js') }}"></script>
    <!-- END: Scripts -->
</body>
