
@include('layouts.header')
@include('layouts.css')
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('doorman.ico') }}" type="image/x-icon">
    <title>{{__('messages.nav.about')}}</title>
</head>

<body>

{{--<header>--}}
{{--    <nav>--}}
{{--        <div class="logo">--}}
{{--            GeeksforGeeks--}}
{{--        </div>--}}
{{--        <ul class="nav-links">--}}
{{--            <li><a href="#">--}}
{{--                    Home</a>--}}
{{--            </li>--}}
{{--            <li><a href="#">--}}
{{--                    About</a>--}}
{{--            </li>--}}
{{--            <li><a href="#">--}}
{{--                    Services</a>--}}
{{--            </li>--}}
{{--            <li><a href="#">--}}
{{--                    Contact</a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </nav>--}}
{{--</header>--}}

<section class="about">
    <h1>{{__('messages.nav.about')}}</h1>
    <p style="font-weight: bold">
{{--        GeeksforGeeks is a leading platform...--}}
    </p>
    <div class="about-info">
{{--        <div class="about-img">--}}
{{--            <img src=--}}
{{--                 "https://media.geeksforgeeks.org/wp-content/uploads/20230824153359/--}}
{{--371ba38b-8a03-4bff-916c-c3fa5396ceda.jfif" alt="Geeksforgeeks">--}}
{{--        </div>--}}
        <div>
            <span> "ԴՈՌՄԵՆ" ՍՊԸ-ն հիմնադրվել է 2023 թվականին:<br> Մեր նպատակն է հնարավորություն տալ գնորդին ունենալ որակյալ ապրանք խելամիտ գնով։<br>
                    "ԴՈՌՄԵՆ" ընկերությունը հանդիսանում է հայկական շուկայում առաջատարներից, ունի  լայն արտադրական սեգմենտ ինչն էլ ապահովում է որակի և գնի ճշգրիտ հավասարակշռություն։<br>
                Մեր առաջնային առավելություններից է արդյունաբերական մեծածավալ օբյեկտների տեխնիկական կահավորումը։<br>
                        "ԴՈՌՄԵՆ" ընկերությունը համագործակցում է համաշխարհային առջատար արտադրողների հետ։<br>
                            "Դոռմեն" ընկերությունը արտադրում, ներմուծում և վաճառում է՝<br><br>

          <li>Ավտոտնակի սեկցիոնալ դարպասներ</li>
            <li>Արդյունաբերական սեկցիոնալ դարպասներ և տեխնիկական դռներ</li>
            <li>Ռոլետային դարպասներ</li>
            <li>Արգելափակոցներ</li>
            <li>Հակահրդեհային դարպասներ, դռներ և վարագույրներ</li>
            <li>Պարիսպների համար գլորվող և անկյունային բացվող դարպասներ և դռներ</li>
            <li>Արագաբաց գալարաձև դարպասներ</li>
            <li>Հարթեցման հարթակներ և հերմետիզատորներ</li>
            <li>Սառնարանային դռներ</li>
            <li>Դարպասների և դռների ավտոմատիկա</li><br>
                                "ԴՈՌՄԵՆ" ընկերությունը իրականացնում է՝<br><br>
            <li>Չափագրում</li>
            <li>Խորհրդատվություն</li>
            <li>Տեղադրում</li>
            <li>Երաշխիքային և ետերաշխիքային սպասարկում:</li>

            </span>
{{--            <button>Read More...</button>--}}
        </div>
    </div>
</section>

<section class="team">
    <h2>{{__('messages.fromourworks')}}</h2>
    <div class="team-cards">

        <!-- Cards here -->
        <!-- Card 1 -->

        <div class="card">
            <div class="card-img">
                <a href="{{ asset('images/rt4.jpg') }}" class="img-gal"><img class="img-fluid" src="{{ asset('images/rt4.jpg') }}" alt=""></a>
            </div>
{{--            <div class="card-info">--}}
{{--                <h2 class="card-name">Jane</h2>--}}
{{--                <p class="card-role">CEO and Founder</p>--}}
{{--                <p class="card-email">jane@example.com</p>--}}

{{--                <p><button class="button">Contact</button></p>--}}
{{--            </div>--}}
        </div>

        <!-- Card 2 -->

        <div class="card">
            <div class="card-img">
                <a href="{{ asset('images/rtf.jpg') }}" class="img-gal"><img class="img-fluid" src="{{ asset('images/rtf.jpg') }}" alt=""></a>
            </div>
{{--            <div class="card-info">--}}
{{--                <h2 class="card-name">Miller</h2>--}}
{{--                <p class="card-role">Co-Founder</p>--}}
{{--                <p class="card-email">Miller@example.com</p>--}}
{{--                <p><button class="button">Contact</button></p>--}}
{{--            </div>--}}
        </div>

        <!-- Card 3 -->

        <div class="card">
            <div class="card-img">
                <a href="{{ asset('images/դեֆռե.jpg') }}" class="img-gal"><img class="img-fluid" src="{{ asset('images/դեֆռե.jpg') }}" alt=""></a>
            </div>
{{--            <div class="card-info">--}}
{{--                <h2 class="card-name">Joe</h2>--}}
{{--                <p class="card-role">Co-Founder</p>--}}
{{--                <p class="card-email">Joe@example.com</p>--}}
{{--                <p><button class="button">Contact</button></p>--}}
{{--            </div>--}}
        </div>
    </div>
</section>
@include('layouts.footer')
{{--<footer>--}}
{{--    <p>© 2023 GeeksforGeeks. All Rights Reserved.</p>--}}
{{--</footer>--}}
</body>

</html>

