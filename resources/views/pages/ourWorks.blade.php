@include('layouts.header')
@include('layouts.css')
@include('layouts.script')
<title>{{__('messages.nav.galery')}}</title>
<section class="image-gallery-area section-gap">
    <div class="container">
        <div class="row section-title">
            <h1>{{__('messages.nav.galery')}}</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 single-gallery">
{{--                <a href="{{ asset('images/92d99760-14d2-45be-b2d9-8c9a81fa4c11.jpg') }}" class="img-gal"><img class="img-fluid" src="{{ asset('images/92d99760-14d2-45be-b2d9-8c9a81fa4c11.jpg') }}" alt=""></a>--}}
                <a href="{{ asset('images/Image 2023-12-29 at 18.02.52 (2).jpg') }}" class="img-gal"><img class="img-fluid" src="{{ asset('images/Image 2023-12-29 at 18.02.52 (2).jpg') }}" alt=""></a>
                <a href="{{ asset('images/erwt.jpg') }}" class="img-gal"><img class="img-fluid" src="{{ asset('images/erwt.jpg') }}" alt=""></a>
            </div>
            <div class="col-lg-4 single-gallery">

                <a href="{{ asset('images/դեֆռե.jpg') }}" class="img-gal"><img class="img-fluid" src="{{ asset('images/դեֆռե.jpg') }}" alt=""></a>
                <a href="{{ asset('images/e0e3acc7-f2d5-445b-8077-77ce62151d2f.jpg') }}" class="img-gal"><img class="img-fluid" src="{{ asset('images/e0e3acc7-f2d5-445b-8077-77ce62151d2f.jpg') }}" alt=""></a>
            </div>
            <div class="col-lg-4 single-gallery">
                <a href="{{ asset('images/eb7f7b78-53cf-4b38-be9f-b1cd6e0e0527.jpg') }}" class="img-gal"><img class="img-fluid" src="{{ asset('images/eb7f7b78-53cf-4b38-be9f-b1cd6e0e0527.jpg') }}" alt=""></a>
                <a href="{{ asset('images/erwt.jpg') }}" class="img-gal"><img class="img-fluid" src="{{ asset('images/erwt.jpg') }}" alt=""></a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 single-gallery">
                <a href="{{ asset('images/mas2.jpg') }}" class="img-gal"><img class="img-fluid" src="{{ asset('images/mas2.jpg') }}" alt=""></a>
                <a href="{{ asset('images/image937.jpg') }}" class="img-gal"><img class="img-fluid" src="{{ asset('images/image937.jpg') }}" alt=""></a>
            </div>
            <div class="col-lg-4 single-gallery">
                <a href="{{ asset('images/IMG_1551.jpg') }}" class="img-gal"><img class="img-fluid" src="{{ asset('images/IMG_1551.jpg') }}" alt=""></a>
                <a href="{{ asset('images/Image 2024-03-25 at 15.13.18.jpg') }}" class="img-gal"><img class="img-fluid" src="{{ asset('images/Image 2024-03-25 at 15.13.18.jpg') }}" alt=""></a>
            </div>
            <div class="col-lg-4 single-gallery">
                <a href="{{ asset('images/Image 2023-12-09 at 15.17.19.jpg') }}" class="img-gal"><img class="img-fluid" src="{{ asset('images/Image 2023-12-09 at 15.17.19.jpg') }}" alt=""></a>
                <a href="{{ asset('images/rf.jpg') }}" class="img-gal"><img class="img-fluid" src="{{ asset('images/rf.jpg') }}" alt=""></a>
            </div>

            <div class="col-lg-4 single-gallery">
                <a href="{{ asset('images/գբգբ.jpg') }}" class="img-gal"><img class="img-fluid" src="{{ asset('images/գբգբ.jpg') }}" alt=""></a>
{{--                <a href="{{ asset('images/mas2.jpg') }}" class="img-gal"><img class="img-fluid" src="{{ asset('images/mas2.jpg') }}" alt=""></a>--}}
            </div>
            <div class="col-lg-4 single-gallery">
                <a href="{{ asset('images/rtf.jpg') }}" class="img-gal"><img class="img-fluid" src="{{ asset('images/rtf.jpg') }}" alt=""></a>
{{--                <a href="{{ asset('images/եֆե.jpg') }}" class="img-gal"><img class="img-fluid" src="{{ asset('images/եֆե.jpg') }}" alt=""></a>--}}
            </div>
            <div class="col-lg-4 single-gallery">
                <a href="{{ asset('images/եֆե.jpg') }}" class="img-gal"><img class="img-fluid" src="{{ asset('images/եֆե.jpg') }}" alt=""></a>
{{--                <a href="{{ asset('images/mas2.jpg') }}" class="img-gal"><img class="img-fluid" src="{{ asset('images/mas2.jpg') }}" alt=""></a>--}}
            </div>

            <div class="col-lg-4 single-gallery">
                <a href="{{ asset('images/daspas-1.jpeg') }}" class="img-gal"><img class="img-fluid" src="{{ asset('images/daspas-1.jpeg') }}" alt=""></a>
               <a href="{{ asset('images/mas.jpg') }}" class="img-gal"><img class="img-fluid" src="{{ asset('images/mas.jpg') }}" alt=""></a>
            </div>
            <div class="col-lg-4 single-gallery">
                <a href="{{ asset('images/door-1.jpg') }}" class="img-gal"><img class="img-fluid" src="{{ asset('images/door-1.jpg') }}" alt=""></a>
                <a href="{{ asset('images/stgerh.jpg') }}" class="img-gal"><img class="img-fluid" src="{{ asset('images/stgerh.jpg') }}" alt=""></a>
            </div>
            <div class="col-lg-4 single-gallery">
                <a href="{{ asset('images/Image 2023-12-16 at 14.46.45.jpeg') }}" class="img-gal"><img class="img-fluid" src="{{ asset('images/Image 2023-12-16 at 14.46.45.jpeg') }}" alt=""></a>
{{--                <a href="{{ asset('images/mas.jpg') }}" class="img-gal"><img class="img-fluid" src="{{ asset('images/mas.jpg') }}" alt=""></a>--}}
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')

