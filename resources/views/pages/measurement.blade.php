@include('layouts.header')
@include('layouts.css')
    <!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>{{__('messages.Չափագրում')}}</title>
</head>

<body>

<section class="about">
    <h1>{{__('messages.Չափագրում')}}</h1>
    <p style="font-weight: bold">
{{--        GeeksforGeeks is a leading platform...--}}
    </p>
    <div class="about-info">
        <div>
            <span>  Չափագրման ծառայությունը իրականացվում է "ԴՈՌՄԵՆ" ընկերության տեխնիկական մասնագետի կողմից հաճախորդի (գնորդի) ցանկությամբ։<br><br>
                    Հաճախորդը (գնորդը) չափագրման ծառայությունից օգտվելու համար պետք է զանգահարի կամ մոտենա խանութ-սրահ ամրագրի ժամանակացույց <br><br>
                չափագրման մասնագետի այցելության համար։ Չափագրումն իրականացվում է գնման առարկայի տեղադրման վայրի ուսումնասիրության ինչպես նաև գնման առարկայի<br><br>
                տեխնիկական պարամետրերի հստակեցման և ճշգրտման նպատակով։<br><br>
                    Չափագրումը կարեվորագույն ծառայություններից է, որից օգտվելիս հաճախորդը (գնորդը) ստանում է ամբողջական տեղեկություն գնման առարկա հանդիսացող ապրանքի<br><br>
                տեխնիկական պարամետրերի, ընտրված տարբերակի տեղում աշխատելու օպտիմալության, առկա խոչնդոտների, դրանց վերացման վերաբերյալ։<br><br>
                    Չափագրման ծառայությունը վճարովի է։

            </span>

        </div>
    </div>
</section>

<section class="team">
    <h2>{{__('messages.Մեր Աշխատանքներից')}}</h2>
    <div class="team-cards">


        <div class="card">
            <div class="card-img">
                <a href="{{ asset('images/door-1.jpg') }}" class="img-gal"><img class="img-fluid" src="{{ asset('images/door-1.jpg') }}" alt=""></a>
            </div>
            <div class="card-info">
            </div>
        </div>


        <div class="card">
            <div class="card-img">
                <a href="{{ asset('images/stgerh.jpg') }}" class="img-gal"><img class="img-fluid" src="{{ asset('images/stgerh.jpg') }}" alt=""></a>
            </div>
            <div class="card-info">
            </div>
        </div>

        <!-- Card 3 -->

        <div class="card">
            <div class="card-img">
                <a href="{{ asset('images/tgf-1.jpg') }}" class="img-gal"><img class="img-fluid" src="{{ asset('images/tgf-1.jpg') }}" alt=""></a>
            </div>
            <div class="card-info">
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')
</body>

</html>

