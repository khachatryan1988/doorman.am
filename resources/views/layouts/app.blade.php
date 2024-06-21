
<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}" class="no-js" style="display: block;">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('doorman.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="shortcut icon" href="https://preview.colorlib.com/theme/taxi/img/fav.png">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap JavaScript and jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>

    <meta name="author" content="colorlib">

    <meta name="description" content="">

    <meta name="keywords" content="">
    <title>{{__('messages.title')}}</title>
    <style>
        @include('layouts.css')
    </style>
    <script>
        @include('layouts.script')
    </script>
</head>
<body style="display: block;">
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<button type="button" id="mobile-nav-toggle"><i class="lnr lnr-menu"></i></button>
<header>
    @include('layouts.header')
{{--    @yield('overlay')--}}
</header>



<main>
    @include('sections.overlay')
    {{--@include('components.sections.getDatails')--}}
    @include('sections.service')
    {{--@yield('service')--}}
    @include('sections.galery')
    {{--@include('components.sections.reviews')--}}
    {{--@include('components.sections.support')--}}
    @include('sections.partners')
    {{--@include('components.sections.aboutUs')--}}
</main>




<div id="mobile-body-overly"></div>
{{--<script>--}}
{{--    // JavaScript to toggle mobile navigation menu--}}
{{--    document.addEventListener('DOMContentLoaded', function() {--}}
{{--        const mobileNavToggle = document.getElementById('mobile-nav-toggle');--}}
{{--        const mobileNav = document.getElementById('mobile-nav');--}}
{{--        const mobileBodyOverlay = document.getElementById('mobile-body-overlay');--}}

{{--        mobileNavToggle.addEventListener('click', function() {--}}
{{--            mobileNav.classList.toggle('active');--}}
{{--            mobileBodyOverlay.classList.toggle('active');--}}
{{--        });--}}

{{--        mobileBodyOverlay.addEventListener('click', function() {--}}
{{--            mobileNav.classList.remove('active');--}}
{{--            mobileBodyOverlay.classList.remove('active');--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}

<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>
@include('layouts.footer')

@include('layouts.script')

<script src="{{ asset('js/main.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>
</html>



