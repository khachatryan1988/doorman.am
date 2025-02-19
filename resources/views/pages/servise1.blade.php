@extends('pages.service')
@include('layouts.css')
@include('layouts.script')
@section('service')
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    <h1>{{__('messages.nav.service')}}</h1>
                </h1>
                <p class="text-white link-nav"><a href="/">{{__('messages.nav.main')}}</a> <span class="lnr lnr-arrow-right"></span> <a href="{{ route('service') }}"> {{__('messages.nav.service')}}</a></p>
            </div>
        </div>
    </div>
</section>


<section class="services-area section-gap" style="margin-bottom: 83px;">
    <div class="container">
        <div class="row section-title">
            <h1 style="margin-bottom: 44px;">{{__('messages.ourservices')}}</h1>
{{--            <p>Who are in extremely love with eco friendly system.</p>--}}
        </div>
        <div class="row">
            <div class="col-lg-4 single-service">
                <a href="{{ route('measurement') }}">
                <span class="lnr lnr-pencil"></span>
                <h4>{{__('messages.measurement')}}</h4>
                Չափագրման ծառայությունը իրականացվում է "ԴՈՌՄԵՆ" ընկերության տեխնիկական մասնագետի կողմից հաճախորդի (գնորդի) ցանկությամբ։
                </a>
            </div>
            <div class="col-lg-4 single-service">
                <a href="{{ route('consultation') }}">
                <span class="lnr lnr-briefcase"></span>
                <h4>{{__('messages.consultation')}}</h4>
                Խորհրդատվությունը ծառայություն է որը գնորդին տալիս է հնարավորություն ստանալ տեխնիկական մասնագետից ամբողջական տեղեկություն իրեն անհրաժեշտ
                ապրանքի վերաբերյալ:
{{--                <p>--}}
{{--                    Usage of the Internet is becoming more common due to rapid advancement of technology and power.--}}
{{--                </p>--}}
                </a>
            </div>
{{--            <div class="col-lg-4 single-service">--}}
{{--                <span class="lnr lnr-bus"></span>--}}
{{--                <a href="{{ route('gateMaintenance') }}" target="_blank"><h4>{{__('messages.Դարպասի Սպասարկում')}}</h4></a>--}}
{{--             --}}
{{--            </div>--}}
{{--            <div class="col-lg-4 single-service">--}}
{{--                <span class="lnr lnr-bus"></span>--}}
{{--                <a href="{{ route('gateInstallation') }}" target="_blank"><h4>{{__('messages.Դարպասի Տեղադրում')}}</h4></a>--}}

{{--            </div>--}}
        </div>
    </div>
</section>
@endsection
