@include('layouts.css')
{{--@include('layouts.header')--}}

<section class="services-area pb-120">
    <div class="container">
        <div class="row section-title">
            <h1>{{__('messages.ourservices')}}</h1>

        </div>
        <div class="row">
            <div class="col-lg-4 single-service">
                <a href="{{ route('measurement') }}">
                <span class="lnr lnr-pencil"></span>
                <h4>{{__('messages.measurement')}}</h4>
                <p>
                    Չափագրման ծառայությունը իրականացվում է "ԴՈՌՄԵՆ" ընկերության տեխնիկական մասնագետի կողմից հաճախորդի (գնորդի) ցանկությամբ։
                </p>
                </a>
            </div>

            <div class="col-lg-4 single-service">
                <a href="{{ route('consultation') }}">
                <span class="lnr lnr-briefcase"></span>
                <h4>{{__('messages.consultation')}}</h4>
                <p>
                   Խորհրդատվությունը ծառայություն է որը գնորդին տալիս է հնարավորություն ստանալ տեխնիկական մասնագետից ամբողջական տեղեկություն իրեն անհրաժեշտ
ապրանքի վերաբերյալ
                </p>
            </a>
            </div>

{{--            <div class="col-lg-4 single-service">--}}
{{--                <span class="lnr lnr-bus"></span>--}}
{{--                <a href="#"><h4>Event Transportation</h4></a>--}}
{{--                <p>--}}
{{--                    Usage of the Internet is becoming more common due to rapid advancement of technology and power.--}}
{{--                </p>--}}
{{--            </div>--}}
        </div>
    </div>
</section>
