@include('layouts.css')
{{--@include('layouts.header')--}}

<section class="services-area pb-120">
    <div class="container">
        <div class="row section-title">
            <h1>{{__('messages.Ինչ ծառայություններ ենք մենք առաջարկում մեր հաճախորդներին')}}</h1>

        </div>
        <div class="row">
            <div class="col-lg-4 single-service">
                <span class="lnr lnr-car"></span>
                <a href="{{ route('measurement') }}" target="_blank"><h4>{{__('messages.Չափագրում')}}</h4></a>
                <p>
                    Չափագրման ծառայությունը իրականացվում է "ԴՈՌՄԵՆ" ընկերության տեխնիկական մասնագետի կողմից հաճախորդի (գնորդի) ցանկությամբ։
                </p>
            </div>
            <div class="col-lg-4 single-service">
                <span class="lnr lnr-briefcase"></span>
                <a href="{{ route('consultation') }}" target="_blank"><h4>{{__('messages.Խորհրդատվություն')}}</h4></a>
                <p>
                   Խորհրդատվությունը ծառայություն է որը գնորդին տալիս է հնարավորություն ստանալ տեխնիկական մասնագետից ամբողջական տեղեկություն իրեն անհրաժեշտ
ապրանքի վերաբերյալ
                </p>
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
