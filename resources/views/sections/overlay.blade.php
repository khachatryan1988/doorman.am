<section class="banner-area relative" id="home">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('{{ asset("images/door-1.jpg") }}');">
                <div class="overlay overlay-bg"></div>
                <div class="container">
                    <div class="row fullscreen d-flex align-items-center justify-content-between">
                        <div class="banner-content col-lg-6 col-md-6">
                            <h6 class="text-white">{{__('messages.forquestions')}}</h6>
                            <h1 class="text-uppercase" style="margin-bottom: 15px;">
                                <a href="tel:{{ config('app.contacts.phone_number') }}">{{ config('app.contacts.phone_number') }}</a>
                            </h1>
                            <a href="/contactUs" class="primary-btn text-uppercase">{{__('messages.writeus')}}</a>
                        </div>
                        <!-- Square Meter Calculation Form -->
                        <div class="metrica-style-container">
                            <strong><h2 style="font-size: 20px; color:#FDBD1D;">Հաշվել Դարպասի Արժեքը</h2></strong>
{{--                            <form action="{{ route('calculate.m2') }}" method="POST">--}}
{{--                                @csrf--}}
{{--                                <label style="color: white;" for="width">Լայնություն (մ):</label>--}}
{{--                                <input  type="number" name="width" id="width" step="0.01" required>--}}
{{--                                <label style="color: white;" for="height">Բարձրություն (մ):</label>--}}
{{--                                <input type="number" name="height" id="height" step="0.01" required>--}}
{{--                                <div class="button-container">--}}
{{--                                    <button type="submit">Հաշվել</button>--}}
{{--                                </div>--}}
{{--                            </form>--}}
                            @if(session('result'))
                                <div class="result-box">
                                    <p>Քառակուսի մետր: <span>{{ session('result') }} մ²</span></p>
                                    <p>Ընդհանուր արժեքը: <span style="color: green;">{{ session('price') }} դրամ</span></p>
                                    <p style="color: red;">Ուշադրություն: <span style="color: red; font-size: 14px;">Հաշվարկված գինը հանդիսանում է մոտավոր արժեք։ Ավելի մանրամասն տեղեկուտյուն ստանալու համար զանգահարել <a href="tel:{{ config('app.contacts.phone_number') }}">{{ config('app.contacts.phone_number') }}</a> հեռախոսահամարով</span></p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url('{{ asset("images/e0e3acc7-f2d5-445b-8077-77ce62151d2f.jpg") }}');">
                <div class="overlay overlay-bg"></div>
                <div class="container">
                    <div class="row fullscreen d-flex align-items-center justify-content-between">
                        <div class="banner-content col-lg-6 col-md-6">
                            <h6 class="text-white">{{__('messages.forquestions')}}</h6>
                            <h1 class="text-uppercase" style="margin-bottom: 15px;">
                                <a href="tel:{{ config('app.contacts.phone_number') }}">{{ config('app.contacts.phone_number') }}</a>
                            </h1>
                            <a href="/contactUs" class="primary-btn text-uppercase">{{__('messages.writeus')}}</a>
                        </div>
                        <!-- Square Meter Calculation Form -->
                        <div class="metrica-style-container">
                            <strong><h2 style="font-size: 20px; color:#FDBD1D;">Հաշվել Դարպասի Արժեքը</h2></strong>
{{--                            <form action="{{ route('calculate.m2') }}" method="POST">--}}
{{--                                @csrf--}}
{{--                                <label style="color: white;" for="width">Լայնություն (մ):</label>--}}
{{--                                <input  type="number" name="width" id="width" step="0.01" required>--}}
{{--                                <label style="color: white;" for="height">Բարձրություն (մ):</label>--}}
{{--                                <input type="number" name="height" id="height" step="0.01" required>--}}
{{--                                <div class="button-container">--}}
{{--                                    <button type="submit">Հաշվել</button>--}}
{{--                                </div>--}}
{{--                            </form>--}}
                            @if(session('result'))
                                <div class="result-box">
                                    <p>Քառակուսի մետր: <span>{{ session('result') }} մ²</span></p>
                                    <p>Ընդհանուր արժեքը: <span style="color: green;">{{ session('price') }} դրամ</span></p>
                                    <p style="color: red;">Ուշադրություն: <span style="color: red; font-size: 14px;">Հաշվարկված գինը հանդիսանում է մոտավոր արժեք։ Ավելի մանրամասն տեղեկուտյուն ստանալու համար զանգահարել <a href="tel:{{ config('app.contacts.phone_number') }}">{{ config('app.contacts.phone_number') }}</a> հեռախոսահամարով</span></p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url('{{ asset("images/daspas-1.jpeg") }}');">
                <div class="overlay overlay-bg"></div>
                <div class="container">
                    <div class="row fullscreen d-flex align-items-center justify-content-between">
                        <div class="banner-content col-lg-6 col-md-6">
                            <h6 class="text-white">{{__('messages.forquestions')}}</h6>
                            <h1 class="text-uppercase" style="margin-bottom: 15px;">
                                <a href="tel:{{ config('app.contacts.phone_number') }}">{{ config('app.contacts.phone_number') }}</a>
                            </h1>
                            <a href="/contactUs" class="primary-btn text-uppercase">{{__('messages.writeus')}}</a>
                        </div>
                        <!-- Square Meter Calculation Form -->
                        <div class="metrica-style-container">
                            <strong><h2 style="font-size: 20px; color:#FDBD1D;">Հաշվել Դարպասի Արժեքը</h2></strong>
                            <form action="{{ route('calculate.m2') }}" method="POST">
                                @csrf
                                <label style="color: white;" for="width">Լայնություն (մ):</label>
                                <input  type="number" name="width" id="width" step="0.01" required>
                                <label style="color: white;" for="height">Բարձրություն (մ):</label>
                                <input type="number" name="height" id="height" step="0.01" required>
                                <div class="button-container">
                                    <button type="submit">Հաշվել</button>
                                </div>
                            </form>
                            @if(session('result'))
                                <div class="result-box">
                                    <p>Քառակուսի մետր: <span>{{ session('result') }} մ²</span></p>
                                    <p>Ընդհանուր արժեքը: <span style="color: green;">{{ session('price') }} դրամ</span></p>
                                    <p style="color: red;">Ուշադրություն: <span style="color: red; font-size: 14px;">Հաշվարկված գինը հանդիսանում է մոտավոր արժեք։ Ավելի մանրամասն տեղեկուտյուն ստանալու համար զանգահարել <a href="tel:{{ config('app.contacts.phone_number') }}">{{ config('app.contacts.phone_number') }}</a> հեռախոսահամարով</span></p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        loop: false,
        autoplay: {
            delay: 10000,
            disableOnInteraction: false,
        },
        // navigation: {
        //     nextEl: '.swiper-button-next',
        //     prevEl: '.swiper-button-prev',
        // },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
</script>

