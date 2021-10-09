<header id="masthead" class="header abs-tl fixed block-100" role="banner"
        data-0="@class: header abs-tl fixed block-100" data-90="@class: header abs-tl fixed block-100 scrolled">
    <div class="fill-dimensions header__bg abs-tl bg--black-light scale-y mobile-hor-visible trans-scale origin-l"></div>
    <div class="header__inner relative a-right color--white mobile-hor-gutter">
        <a href="{{route('shop')}}" class="logo abs-tl">
        <span class="js-hp-fade opc-0">
            <img src="{{asset('site/images/minas_logob.jpeg')}}" alt="img">
        </span>
        </a>
        <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
        <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
        <div class="header__items font-bold title-12 lh-n ls-180 color--white uppercase">
            <a href="{{route('home')}}" class="color--white line-underline hover-red header__item display--inline tablet-hidden">
                Seventy Nine`s world
            </a>
            <svg class="icon icon--user trans header__item display--inline mobile-hor-hidden ">
                <use xlink:href="#user"></use>
            </svg>

            @guest
                <a href="{{route('loginPageUser')}}" class="color--white hover-red header__item display--inline mobile-hor-hidden">
                    Login / Register
                </a>
            @else
                @if(Auth::user()->role_id == 1)
                    <a href="{{route('adminDashboard')}}" class="color--white hover-red header__item display--inline mobile-hor-hidden">
                        Dashboard
                    </a>
                @else
                    <a href="{{route('editAccount')}}" class="color--white hover-red header__item display--inline mobile-hor-hidden">
                        Dashboard
                    </a>
                @endif
            @endguest
            <a href="{{route('cart')}}" class="color--white hover-red header__item display--inline ml-arrow mobile-hor-nopad mobile-hor-nomargin">
                @if(Session::has('cart'))
                    { {{count(Session::get('cart'))}} }
                @else
                    { 0 }
                @endif
            </a>
        </div>
        <div class="header__right abs-tr a-right">
{{--                    <span class="header__item item--search hover-red display--inline clickable trans js-popup-opener"--}}
{{--                          data-target="#popup-search">--}}
{{--                        <svg class="icon icon--search no-trans"><use xlink:href="#search"></use></svg>--}}
{{--                    </span>--}}
            <span class="menu-burger display--inline clickable trans relative overflow" id="menu-burger">
                        <span class="burger__line line--top abs-tl trans delay-1"></span>
                        <span class="burger__line line--mid abs-tl trans"></span>
                        <span class="burger__line line--bottom abs-tl trans delay-1"></span>
                    </span>
        </div>
    </div>
</header>
