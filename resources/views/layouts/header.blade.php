{{--<div class="bg-gray-50" x-data="{toggleMobileMenu: false}">--}}
{{--<!doctype html>--}}
{{--<html lang="{{ app()->getLocale() }}">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}

{{--    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">--}}
{{--    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">--}}
{{--    <link rel="icon" href="{{ asset('doorman.ico') }}" type="image/x-icon">--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>--}}
{{--    <!-- Bootstrap JavaScript and jQuery -->--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>--}}


{{--    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>--}}


{{--    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>--}}

{{--    @stack('head')--}}
{{--    @include('layouts.script')--}}

{{--</head>--}}
{{--<body>--}}
<header id="header">
    <div class="header-top">
    </div>
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <a href="/"><img src="{{ asset('images/doorman4.png') }}" alt=""></a>

            <nav id="nav-menu-container">
                <ul class="nav-menu sf-js-enabled sf-arrows" style="touch-action: pan-y;">
                    <li class="menu-active"><a href="/">{{__('messages.nav.main')}}</a>
                    </li>
                    <li><a href="{{ route('about') }}">{{__('messages.nav.about')}}</a></li>
                    <li><a href="{{ route('service') }}">{{__('messages.nav.service')}}</a></li>
                    <li><a href="{{ route('galery') }}">{{__('messages.nav.galery')}}</a></li>
                    <li><a href="{{ route('contactUs') }}">{{__('messages.nav.contactus')}}</a></li>
                    <li>
{{--                        <div class="dropdown">--}}
{{--                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownLanguage" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                {{ strtoupper(app()->getLocale()) }}--}}
{{--                            </button>--}}
{{--                            <ul class="dropdown-menu" aria-labelledby="dropdownLanguage">--}}
{{--                                @foreach(config('localization.locales') as $locale)--}}
{{--                                    <li><a class="dropdown-item" href="{{ route('localization', $locale) }}">{{ $locale }}</a></li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
{{--</body>--}}
{{--</html>--}}
{{--</div>--}}


