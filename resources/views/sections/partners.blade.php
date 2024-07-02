<div class="container">
    <div class="row section-title">
        <h1>{{ __('messages.partners') }}</h1>
    </div>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <div class="slider-wrapper">
        <!-- Swiper Container -->
        <div class="swiper mySwiper" style="max-width: 1294px;">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="{{ asset('images/domus.svg') }}"></div>
                <div class="swiper-slide"><img src="{{ asset('images/decora.svg') }}"></div>
                <div class="swiper-slide"><img src="{{ asset('images/atenk.svg') }}"></div>
                <div class="swiper-slide"><img src="{{ asset('images/sis.svg') }}"></div>
                <div class="swiper-slide"><img src="{{ asset('images/capital.svg') }}"></div>
                <div class="swiper-slide"><img src="{{ asset('images/jermuk.svg') }}"></div>
                <div class="swiper-slide"><img src="{{ asset('images/noyan.svg') }}"></div>
                <div class="swiper-slide"><img src="{{ asset('images/bplan.svg') }}"></div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>

<script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var swiper = new Swiper('.mySwiper', {
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            spaceBetween: 40,
            slidesPerView: 5,
            breakpoints: {
                320: {
                    slidesPerView: 2,
                    spaceBetween: 10
                },
                480: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 40
                },
                1200: {
                    slidesPerView: 5,
                    spaceBetween: 40
                }
            }
        });
    });
</script>
</div>

