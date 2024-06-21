
<footer class="footer-area section-gap">
    <div class="container">
        <div class="row" style="display: flex; justify-content: flex-end;">
            <div class="col-lg-2">
                <div class="single-footer-widget">
                    <ul>
                        <li><a href="/">{{__('messages.nav.main')}}</a></li>
                        {{--                        <li><a href="https://preview.colorlib.com/theme/taxi/index.html#">Brand Assets</a></li>--}}
                        {{--                        <li><a href="https://preview.colorlib.com/theme/taxi/index.html#">Investor Relations</a></li>--}}
                        {{--                        <li><a href="https://preview.colorlib.com/theme/taxi/index.html#">Terms of Service</a></li>--}}
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="single-footer-widget">
                    <ul>
                        <li><a href="{{ route('about') }}">{{__('messages.nav.about')}}</a></li>
                        {{--                        <li><a href="https://preview.colorlib.com/theme/taxi/index.html#">Brand Assets</a></li>--}}
                        {{--                        <li><a href="https://preview.colorlib.com/theme/taxi/index.html#">Investor Relations</a></li>--}}
                        {{--                        <li><a href="https://preview.colorlib.com/theme/taxi/index.html#">Terms of Service</a></li>--}}
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="single-footer-widget">
                     <p><a href="{{ route('service') }}">{{__('messages.nav.service')}}</a></p>

                    <ul class="custom-list">
{{--                        <li><a href="{{ route('service') }}">{{__('messages.Ծառայություններ')}}</a></li>--}}
                        <li><a href="{{ route('measurement') }}">{{__('messages.measurement')}}</a></li>
                        <li><a href="{{ route('consultation') }}">{{__('messages.consultation')}}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="single-footer-widget">
                    {{--                    <h6><a href="">{{__('messages.Ծառայություններ')}}</a></h6>--}}
                    <ul>
                        <li><a href="{{ route('galery') }}">{{__('messages.nav.galery')}}</a></li>
                        {{--                        <li><a href="https://preview.colorlib.com/theme/taxi/index.html#">Research</a></li>--}}
                        {{--                        <li><a href="https://preview.colorlib.com/theme/taxi/index.html#">Experts</a></li>--}}
                        {{--                        <li><a href="https://preview.colorlib.com/theme/taxi/index.html#">Agencies</a></li>--}}
                    </ul>
                </div>
            </div>
            {{--            <div class="col-lg-3">--}}
            {{--                <div class="single-footer-widget">--}}
            {{--                    <h6><a href="{{ route('galery') }}">{{__('messages.Մեր Աշխատանքները')}}</a></h6>--}}
            {{--                    <p>Let us be social</p>--}}
            {{--                    <div class="footer-social d-flex align-items-center">--}}
            {{--                        <a href="https://preview.colorlib.com/theme/taxi/index.html#"><i class="fa fa-facebook"></i></a>--}}
            {{--                        <a href="https://preview.colorlib.com/theme/taxi/index.html#"><i class="fa fa-twitter"></i></a>--}}
            {{--                        <a href="https://preview.colorlib.com/theme/taxi/index.html#"><i class="fa fa-dribbble"></i></a>--}}
            {{--                        <a href="https://preview.colorlib.com/theme/taxi/index.html#"><i class="fa fa-behance"></i></a>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            <div class="col-lg-2">
                <div class="single-footer-widget">
                    <p><a href="{{ route('contactUs') }}">{{__('messages.nav.contactus')}}</a></p>
                    <ul class="custom-list">
                        <li><a href="mailto:{{ config('app.contacts.email') }}">{{ config('app.contacts.email') }}</a>
                        </li>
                        <li>
                            <a href="tel:{{ config('app.contacts.phone_number') }}">{{ config('app.contacts.phone_number') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="mt-40 mx-auto footer-text col-lg-12">

                Copyright © 2024 -
                <script>document.write(new Date().getFullYear() !== 2024 ? new Date().getFullYear() : '');</script>
                All rights reserved | <a href="https://doorman.am/">Doorman</a>

            </p>
        </div>
    </div>
    <img class="footer-bottom" src="{{ asset('images/footer-bottom.png') }}" alt="">
</footer>


