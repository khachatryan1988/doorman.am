@include('layouts.css')
@include('layouts.header')

<section class="services-area pb-150">
    <div class="container">
        <div class="row section-title_service">
            <h1>{{__('messages.Ծառայություններ')}}</h1>

        </div>
        <div class="row" style="display: flex; justify-content: space-evenly; margin-right: 1px !important;">
            <div class="col-lg-6 col-md-6 single-service" >

                <a href="{{ route('measurement') }}" target="_blank"><h4>{{__('messages.Չափագրում')}}</h4></a>
                {{--                <p>--}}
                {{--                    Usage of the Internet is becoming more common due to rapid advancement of technology and power.--}}
                {{--                </p>--}}
            </div>
            <div class="col-lg-6 col-md-6 single-service">
                {{--                <span class="lnr lnr-car"></span>--}}
                <a href="{{ route('consultation') }}" target="_blank"><h4>{{__('messages.Խորհրդատվություն')}}</h4></a>
                {{--                <p>--}}
                {{--                    Usage of the Internet is becoming more common due to rapid advancement of technology and power.--}}
                {{--                </p>--}}
            </div>
            <div class="col-lg-6 col-md-6 single-service">
                {{--                <span class="lnr lnr-briefcase"></span>--}}
                <a href="{{ route('gateMaintenance') }}" target="_blank"><h4>{{__('messages.Դարպասի Սպասարկում')}}</h4></a>
                {{--                <p>--}}
                {{--                    Usage of the Internet is becoming more common due to rapid advancement of technology and power.--}}
                {{--                </p>--}}
            </div>
            <div class="col-lg-6 col-md-6 single-service">
                {{--                <span class="lnr lnr-bus"></span>--}}
                <a href="{{ route('gateInstallation') }}" target="_blank"><h4>{{__('messages.Դարպասի Տեղադրում')}}</h4></a>
                {{--                <p>--}}
                {{--                    Usage of the Internet is becoming more common due to rapid advancement of technology and power.--}}
                {{--                </p>--}}
            </div>
        </div>
    </div>
</section>
