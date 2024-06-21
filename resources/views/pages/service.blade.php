@include('layouts.header')
@include('layouts.css')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('public/doorman.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <title>{{__('messages.nav.service')}}</title>
    <style>
        @include('layouts.css')
    </style>
</head>
<body style="height: auto;">
<header>
    @yield('service')
</header>

<footer>
    @include('layouts.footer')
</footer>
</body>
</html>






