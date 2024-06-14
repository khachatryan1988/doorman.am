<section class="banner-area relative" id="home">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="overlay overlay-bg"></div>
                <div class="container">
                    <div class="row fullscreen d-flex align-items-center justify-content-between">
                        <div class="banner-content col-lg-6 col-md-6">
                            <h6 class="text-white">{{__('messages.Հարցերի դեպքում զանգահարեք')}}</h6>
                            <h1 class="text-uppercase" style="margin-bottom: 15px;">
                                <a href="tel:{{ config('app.contacts.phone_number') }}">{{ config('app.contacts.phone_number') }}</a>
                            </h1>
                            <a href="/contactUs" class="primary-btn text-uppercase">{{__('messages.Գրեք Մեզ')}}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="overlay overlay-bg"></div>
                <div class="container">
                    <div class="row fullscreen d-flex align-items-center justify-content-between">
                        <div class="banner-content col-lg-6 col-md-6">
                            <h6 class="text-white">{{__('messages.Հարցերի դեպքում զանգահարեք')}}</h6>
                            <h1 class="text-uppercase" style="margin-bottom: 15px;">
                                <a href="tel:{{ config('app.contacts.phone_number') }}">{{ config('app.contacts.phone_number') }}</a>
                            </h1>
                            <a href="/contactUs" class="primary-btn text-uppercase">{{__('messages.Գրեք Մեզ')}}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="overlay overlay-bg"></div>
                <div class="container">
                    <div class="row fullscreen d-flex align-items-center justify-content-between">
                        <div class="banner-content col-lg-6 col-md-6">
                            <h6 class="text-white">{{__('messages.Հարցերի դեպքում զանգահարեք')}}</h6>
                            <h1 class="text-uppercase" style="margin-bottom: 15px;">
                                <a href="tel:{{ config('app.contacts.phone_number') }}">{{ config('app.contacts.phone_number') }}</a>
                            </h1>
                            <a href="/contactUs" class="primary-btn text-uppercase">{{__('messages.Գրեք Մեզ')}}</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add more slides as needed -->
        </div>
        <!-- Add pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>

<style>


    .swiper-slide:nth-child(3n+1) {
        background-image: url('{{ asset("images/door-1.jpg") }}');
    }

    .swiper-slide:nth-child(3n+2) {
        background-image: url('{{ asset("images/daspas-1.jpeg") }}');
    }

    .swiper-slide:nth-child(3n+3) {
        background-image: url('{{ asset("images/e0e3acc7-f2d5-445b-8077-77ce62151d2f.jpg") }}');
    }
</style>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        loop: false,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
</script>
