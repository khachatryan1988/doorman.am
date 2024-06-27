@include('layouts.favicon')
<header id="header">
    <div class="header-top">
    </div>
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <img src="{{ asset('images/doorman4.png') }}" alt="">

            <nav id="nav-menu-container">
                <ul class="nav-menu sf-js-enabled sf-arrows" style="touch-action: pan-y;">
                    <li class="{{ request()->routeIs('/') ? 'active' : '' }}">
                    <a href="/">{{__('messages.nav.main')}}</a></li>
                    <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                        <a href="{{ route('about') }}">{{__('messages.nav.about')}}</a></li>
                    <li class="{{ request()->routeIs('service') ? 'active' : '' }}">
                        <a href="{{ route('service') }}">{{__('messages.nav.service')}}</a></li>
                    <li class="{{ request()->routeIs('galery') ? 'active' : '' }}">
                        <a href="{{ route('galery') }}">{{__('messages.nav.galery')}}</a></li>
                    <li class="{{ request()->routeIs('contactUs') ? 'active' : '' }}">
                        <a href="{{ route('contactUs') }}">{{__('messages.nav.contactus')}}</a></li>
                    <li>
 <!--                      <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownLanguage" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ strtoupper(app()->getLocale()) }}
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownLanguage">
                                @foreach(config('localization.locales') as $locale)
                                    <li><a class="dropdown-item" href="{{ route('localization', $locale) }}">{{ $locale }}</a></li>
                                @endforeach
                            </ul>
                        </div>-->
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>



