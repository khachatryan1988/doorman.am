

        <div class="row section-title">
            <h1>{{__('messages.nav.galery')}}</h1>
        </div>
    <script src="{{ asset('js/swiper.js') }}"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
<div class="container">
    <div class="slider-wrapper">
        <button id="prev-slide" class="slide-button material-symbols-rounded">
            chevron_left
        </button>
        <ul class="image-list">
            <img class="image-item" src="{{ asset('images/92d99760-14d2-45be-b2d9-8c9a81fa4c11.jpg') }}" alt="img-1" />
            <img class="image-item" src="{{ asset('images/rtf.jpg') }}" alt="img-2" />
            <img class="image-item" src="{{ asset('images/307187165ed45f5bbf2898c4f8f710a3.jpg') }}" alt="img-3" />
            <img class="image-item" src="{{ asset('images/e0e3acc7-f2d5-445b-8077-77ce62151d2f.jpg') }}" alt="img-4" />
            <img class="image-item" src="{{ asset('images/eb7f7b78-53cf-4b38-be9f-b1cd6e0e0527.jpg') }}" alt="img-5" />
            <img class="image-item" src="{{ asset('images/erwt.jpg') }}" alt="img-6" />
            <img class="image-item" src="{{ asset('images/rt4.jpg') }}" alt="img-7" />
            <img class="image-item" src="{{ asset('images/image937.jpg') }}" alt="img-8" />
            <img class="image-item" src="{{ asset('images/IMG_1551.jpg') }}" alt="img-9" />
            <img class="image-item" src="{{ asset('images/Image 2024-03-25 at 15.13.18.jpg') }}" alt="img-10" />
            <img class="image-item" src="{{ asset('images/Image 2023-12-09 at 15.17.19.jpg') }}" alt="img-10" />
            <img class="image-item" src="{{ asset('images/rf.jpg') }}" alt="img-10" />
        </ul>
        <button id="next-slide" class="slide-button material-symbols-rounded">
            chevron_right
        </button>
    </div>
    <div class="slider-scrollbar">
        <div class="scrollbar-track">
            <div class="scrollbar-thumb"></div>
        </div>
    </div>
</div>


