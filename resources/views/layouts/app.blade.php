
<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}" class="no-js" style="display: block;">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('doorman.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="https://preview.colorlib.com/theme/taxi/img/fav.png">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">

    <meta name="author" content="colorlib">

    <meta name="description" content="">

    <meta name="keywords" content="">
    <title>{{__('messages.Դոռման')}}</title>
    @stack('head')
    @include('layouts.css')

</head>
<body style="display: block;">
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<button type="button" id="mobile-nav-toggle"><i class="lnr lnr-menu"></i></button>

@include('layouts.header')
@include('components.sections.overlay')
{{--@include('components.sections.getDatails')--}}
@include('components.sections.service')
{{--@yield('service')--}}
@include('components.sections.galery')
{{--@include('components.sections.reviews')--}}
{{--@include('components.sections.support')--}}
@include('components.sections.partners')
{{--@include('components.sections.aboutUs')--}}


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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>
</html>



