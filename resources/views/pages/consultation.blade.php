@include('layouts.header')
@include('layouts.css')
    <!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>{{__('messages.Խորհրդատվություն')}}</title>
</head>

<body>


<section class="about">
    <h1>{{__('messages.Խորհրդատվություն')}}</h1>
    <p style="font-weight: bold">

    </p>
    <div class="about-info">
{{--        <div class="about-img">--}}
{{--        </div>--}}
        <div>
            <span> Խորհրդատվությունը ծառայություն է որը գնորդին տալիս է հնարավորություն ստանալ տեխնիկական մասնագետից ամբողջական տեղեկություն իրեն անհրաժեշտ <br>ապրանքի վերաբերյալ ,
                ունենալ օպտիմալ լուծման մի քանի տարբերակ և մասնագետի օգնությամբ կատարել տեխնիկական և գնային լավագույն տարբերակի ընտրությունը։<br>
                Հաճախորդի (գնորդի) հետ խորհրդատվությունը տեղի է ունենում 2 եղանակով՝<br><br>
                <li>1.	Խորհրդատվություն տեխնիկական մասնագետի հետ տեղադրման վայրում կանչի միջոցով։</li>
                <li>2.	Խորհրդատվություն մասնագետի հետ խանութ-սրահում այցի միջոցով։</li><br>
                Առաջին եղանակով հաճախորդը (գնորդը) զանգի միջոցով կանչ է գրանցում տեխնիկական մասնագետի հետ խորհրդատվության համար, նշելով խորհրդատվությանը <br>
                մասնակցող անձի անունը, հասցե, հեռախոսահամար և այն ժամանակացույցը որի ընթացքում պետք է համապատասխան մասնագետը մոտենա նշված հասցե։<br><br>
                Խորհրդատվության ծառայությունը գործում է երկուշաբթիից շաբաթ օրերին ժամը 10։00-17։00 և հանդիսանում է վճարովի ծառայություն։<br>
                Երկրորդ եղանակով հաճախորդը (գնորդը) ինքն է մոտենում խանութ-սրահ խորհրդատվության համար։<br>
                Խանութ-սրահում խորհրդատվությունը անվճար է։

            </span>
        </div>
    </div>
</section>

<section class="team">
    <h2>{{__('messages.Մեր Աշխատանքներից')}}</h2>
    <div class="team-cards">


        <div class="card">
            <div class="card-img">
                <a href="{{ asset('images/daspas-3.jpeg') }}" class="img-gal">
                    <img class="img-fluid" src="{{ asset('images/daspas-3.jpeg') }}" alt="Daspas Image">
                </a>
            </div>
            <div class="card-info">
            </div>
        </div>

        <div class="card">
            <div class="card-img">
                <a href="{{ asset('images/daspas-4.jpeg') }}" class="img-gal"><img class="img-fluid"
                                                                                   src="{{ asset('images/daspas-4.jpeg') }}"
                                                                                   alt=""></a>
            </div>
            <div class="card-info">
            </div>
        </div>


        <div class="card">
            <div class="card-img">
                <a href="{{ asset('images/daspas-1.jpeg') }}" class="img-gal"><img class="img-fluid"
                                                                                   src="{{ asset('images/daspas-1.jpeg') }}"
                                                                                   alt=""></a>
            </div>
            <div class="card-info">
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')
</body>

</html>

