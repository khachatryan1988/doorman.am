@extends('pages.service')
@include('layouts.css')

@section('service')
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    <h1>{{__('messages.Ծառայություններ')}}</h1>
                </h1>
                <p class="text-white link-nav"><a href="/">{{__('messages.Գլխավոր էջ')}}</a> <span class="lnr lnr-arrow-right"></span> <a href="{{ route('service') }}"> {{__('messages.Ծառայություններ')}}</a></p>
            </div>
        </div>
    </div>
</section>


<section class="services-area section-gap" style="margin-bottom: 83px;">
    <div class="container">
        <div class="row section-title">
            <h1 style="margin-bottom: 44px;">{{__('messages.Ինչ ծառայություններ ենք մենք առաջարկում մեր հաճախորդներին')}}</h1>
{{--            <p>Who are in extremely love with eco friendly system.</p>--}}
        </div>
        <div class="row">
            <div class="col-lg-4 single-service">
                <span class="lnr lnr-car"></span>
                <a href="{{ route('measurement') }}" target="_blank"><h4>{{__('messages.Չափագրում')}}</h4></a>
                Չափագրման ծառայությունը իրականացվում է "ԴՈՌՄԵՆ" ընկերության տեխնիկական մասնագետի կողմից հաճախորդի (գնորդի) ցանկությամբ։
            </div>
            <div class="col-lg-4 single-service">
                <span class="lnr lnr-briefcase"></span>
                <a href="{{ route('consultation') }}" target="_blank"><h4>{{__('messages.Խորհրդատվություն')}}</h4></a>
                Խորհրդատվությունը ծառայություն է որը գնորդին տալիս է հնարավորություն ստանալ տեխնիկական մասնագետից ամբողջական տեղեկություն իրեն անհրաժեշտ
                ապրանքի վերաբերյալ:
{{--                <p>--}}
{{--                    Usage of the Internet is becoming more common due to rapid advancement of technology and power.--}}
{{--                </p>--}}
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
