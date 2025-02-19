@include('layouts.header')
@include('layouts.css')
@include('layouts.script')
    <!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>{{__('messages.measurement')}}</title>
</head>

<body>

<section class="about">
    <h1>{{__('messages.measurement')}}</h1>
    <p style="font-weight: bold"></p>
    <div class="about-info">
        <div>
            <span>
                Չափագրման ծառայությունը իրականացվում է "ԴՈՌՄԵՆ" ընկերության տեխնիկական մասնագետի կողմից հաճախորդի (գնորդի) ցանկությամբ։<br><br>
                Հաճախորդը (գնորդը) չափագրման ծառայությունից օգտվելու համար պետք է զանգահարի կամ մոտենա խանութ-սրահ ամրագրի ժամանակացույց <br><br>
                չափագրման մասնագետի այցելության համար։ Չափագրումն իրականացվում է գնման առարկայի տեղադրման վայրի ուսումնասիրության ինչպես նաև գնման առարկայի<br><br>
                տեխնիկական պարամետրերի հստակեցման և ճշգրտման նպատակով։<br><br>
                Չափագրումը կարեվորագույն ծառայություններից է, որից օգտվելիս հաճախորդը (գնորդը) ստանում է ամբողջական տեղեկություն գնման առարկա հանդիսացող ապրանքի<br><br>
                տեխնիկական պարամետրերի, ընտրված տարբերակի տեղում աշխատելու օպտիմալության, առկա խոչընդոտների, դրանց վերացման վերաբերյալ։<br><br>
                Չափագրման ծառայությունը վճարովի է։
            </span>
        </div>
    </div>

    <!-- Square Meter Calculation Form -->
    <div class="metrica-style-container">
        <strong><h2 style="font-size: 20px;">Հաշվել Դարպասի Արժեքը</h2></strong>
{{--        <form action="{{ route('calculate.m2') }}" method="POST">--}}
{{--            @csrf--}}
{{--            <label for="width">Լայնություն (մ):</label>--}}
{{--            <input type="number" name="width" id="width" step="0.01" required>--}}

{{--            <label for="height">Բարձրություն (մ):</label>--}}
{{--            <input type="number" name="height" id="height" step="0.01" required>--}}

{{--            <div class="button-container">--}}
{{--                <button type="submit">Հաշվել</button>--}}
{{--            </div>--}}
{{--        </form>--}}

        @if(session('result'))
            <div class="result-box">
                <p>Քառակուսի մետր: <span>{{ session('result') }} մ²</span></p>
                <p>Ընդհանուր արժեքը: <span style="color: green;">{{ session('price') }} դրամ</span></p>
                <p style="color: red;">Ուշադրություն: <span style="color: red; font-size: 14px;">Հաշվարկված գինը հանդիսանում է մոտավոր արժեք։ Ավելի մանրամասն տեղեկուտյուն ստանալու համար զանգահարել <a
                            href="tel:{{ config('app.contacts.phone_number') }}">{{ config('app.contacts.phone_number') }}</a> հեռախոսահամարով</span></p>
            </div>
        @endif
    </div>

</section>

<section class="team">
    <h2>{{__('messages.fromourworks')}}</h2>
    <div class="team-cards">
        <div class="card">
            <div class="card-img">
                <a href="{{ asset('images/door-1.jpg') }}" class="img-gal">
                    <img class="img-fluid" src="{{ asset('images/door-1.jpg') }}" alt="">
                </a>
            </div>
        </div>

        <div class="card">
            <div class="card-img">
                <a href="{{ asset('images/stgerh.jpg') }}" class="img-gal">
                    <img class="img-fluid" src="{{ asset('images/stgerh.jpg') }}" alt="">
                </a>
            </div>
        </div>

        <div class="card">
            <div class="card-img">
                <a href="{{ asset('images/tgf-1.jpg') }}" class="img-gal">
                    <img class="img-fluid" src="{{ asset('images/tgf-1.jpg') }}" alt="">
                </a>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')
</body>

</html>
