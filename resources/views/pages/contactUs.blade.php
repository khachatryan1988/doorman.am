@include('layouts.header')
@include('layouts.css')
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>{{ __('messages.Հետադարձ կապ') }}</title>

</head>

<body>


<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12" style="margin-bottom: 95px; padding-top: 74px;">
                <!-- Page Title -->
                <h1 style="margin-bottom: 50px; padding-top: 115px;" class="text-white">
                    {{ __('messages.Հետադարձ կապ') }}
                </h1>
                <!-- Navigation Link -->
                <p class="text-white link-nav">
                    <a href="/">{{ __('messages.Գլխավոր էջ') }}</a>
                </p>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row section-title">
        <h3  style="padding-bottom: 15px;">Հարգելի հաճախորդ, հարցերի դեպքում կարող եք կապ հաստատել մեզ հետ հետևյալ կոնտակտներով՝</h3>
        <h4 style="padding-bottom: 15px;">Հեռախոսահամար՝ <a
                href="tel:{{ config('app.contacts.phone_number') }}">{{ config('app.contacts.phone_number') }}</a></h4>
        <h4>էլ․ հասցե՝ <a
                href="mailto:{{ config('app.contacts.email') }}">{{ config('app.contacts.email') }}</a></h4>
    </div>
</div>


@include('layouts.footer')
</body>

</html>
