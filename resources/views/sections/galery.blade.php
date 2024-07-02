<section>

    <div class="swiper-container swiper-full-mobile swiper-container-initialized swiper-container-horizontal">
        <div class="swiper-wrapper" >

            <div class="swiper-slide">
                <img src="{{ asset('images/92d99760-14d2-45be-b2d9-8c9a81fa4c11.jpg') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/rtf.jpg') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/307187165ed45f5bbf2898c4f8f710a3.jpg') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/e0e3acc7-f2d5-445b-8077-77ce62151d2f.jpg') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/eb7f7b78-53cf-4b38-be9f-b1cd6e0e0527.jpg') }}" alt="">
            </div>

            <div class="swiper-slide">
                <img src="{{ asset('images/erwt.jpg') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/rt4.jpg') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/image937.jpg') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/IMG_1551.jpg') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/Image 2024-03-25 at 15.13.18.jpg') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/Image 2023-12-09 at 15.17.19.jpg') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/rf.jpg') }}" alt="">
            </div>

        </div>
    </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
{{--        <div class="swiper-button-next"></div>--}}
{{--        <div class="swiper-button-prev"></div>--}}
</section>

<script>
    var swiperMobile = new Swiper('.swiper-container.swiper-full-mobile', {
        slidesPerView: 4,
        spaceBetween: 0,
        slideToClickedSlide:true,
        centeredSlides:true,
        pagination: {
            // el: '.swiper-pagination',
            clickable: true,

        },
        effect: "coverflow",
        grabCursor: true,

        coverflowEffect: {
            rotate: -10,
            stretch: 10,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },

        loop:true,
          autoplay: {
            delay: 3000,
          },


        keyboard: {
            enabled: true,
            onlyInViewport: true,
        },


        // navigation: {
        //     nextEl: '.swiper-button-next',
        //     prevEl: '.swiper-button-prev',
        // },


        breakpoints: {
            767: {
                freemode:true,
                slidesPerView: 3,
                spaceBetween: 20,
            },
            640: {
                freemode:true,
                slidesPerView: 2,
                spaceBetween: 20,
            },
            320: {
                freemode:true,
                slidesPerView: 1,
                spaceBetween: 20,
            }
        }

    });
</script>



