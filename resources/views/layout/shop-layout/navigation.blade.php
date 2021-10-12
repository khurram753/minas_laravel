<nav class="menu-holder fixed" id="menu-holder">
    <div class="fill-dimensions abs-tl fixed bg--grey-light scale-x origin-r z-30" id="secondary-nav-bg"></div>
    <div class="abs-tl secondary-nav__back-icon op-0 no-visible" id="secondary-back">
        <svg class="icon icon--arrows-small-left color--black"><use xlink:href="#arrow-small-left"></use></svg></div>
    <div class="menu-holder__bg fixed z-1 to-tr" id="menu-holder__bg"></div>
    <span class="x-close trans abs-tr display--block clickable color--black hover-white z-20" id="menu-close"></span>
    <div class="menu-holder__inner relative z-40">
        <div class="gutter">
            <div class="main-item main-item menu-item menu-item--home menu-first">
                <span class="menu-item-inner">
                    <a href="{{route('shop')}}" class="menu-a">
                        HOMEPAGE
                    </a>
                </span>
            </div>
            <ul class="menu-primary menu-ul">
                <li class="main-item main-item menu-item menu-item-has-children menu-item--categories">
                    <span class="menu-item-inner display--block relative"><span class="menu-a uppercase">Categories</span><svg class="icon icon--arrow-small-right color--black abs-tr no-visible"><use xlink:href="#arrow-small-right"></use></svg></span>
                    <div class="secondary-nav secondary-nav--products">
                        <div class="secondary-nav__inner">
                            <ul class="submenu-list menu-ul">
                                @foreach($headerAllCategories as $headerCategory)

                                    <li class="submenu-item submnu-1">
                                        <a href="{{route('shopCategory',['category_id'=>$headerCategory->id])}}" class="submenu-a menu-link item--32 uppercase">
                                            {{$headerCategory->name}}
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </li>

                <ul id="menu-burgermenu_en" class="menu-ul menu-primary menu-safari">
{{--                    <li id="menu-item-1432" class="menu-item menu-item-type-taxonomy menu-item-object-collection menu-item-1432 main-item item--41 mnu-1">--}}
{{--                        <span class="menu-item-inner">--}}
{{--                            <a href="collection.html" class="menu-a menu-link item--41">--}}
{{--                                SIGNATURE COLLECTION--}}
{{--                            </a>--}}
{{--                        </span>--}}
{{--                    </li>--}}
                    <li id="menu-item-513" class="menu-item menu-item-type-taxonomy menu-item-object-faq-categories menu-item-513 main-item item--49 mnu-2">
                        <span class="menu-item-inner">
                            <a href="{{route('faq')}}" class="menu-a menu-link item--49">
                                FAFREQUENTLY ASKED QUESTIONSQ
                            </a>
                        </span>
                    </li>
                </ul>
                <li class="main-item main-item menu-item menu-item-has-children menu-item--collections">
                    <span class="menu-item-inner relative display--block">
                        <span class="menu-a uppercase">
                            Collections
                        </span>
                        <svg class="icon icon--arrow-small-right color--black abs-tr no-visible">
                            <use xlink:href="#arrow-small-right"></use>
                        </svg>
                    </span>
                    <div class="secondary-nav secondary-nav--collections">
                        <div class="secondary-nav__inner">
                            <ul class="submenu-list menu-ul">
                                @foreach($headerCollections as $key => $headerCollection)
                                <li class="submenu-item submnu-1">
                                    <a href="{{route('collectionPage',['collection_id'=>$headerCollection->id])}}" class="submenu-a menu-link item--104 uppercase">
                                        {{$headerCollection->name}}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </li>
{{--                <li class="main-item main-item menu-item menu-item-has-children menu-item--lookbooks">--}}
{{--                    <span class="menu-item-inner relative display--block">--}}
{{--                        <span class="menu-a uppercase">--}}
{{--                            Lookbooks--}}
{{--                        </span>--}}
{{--                        <svg class="icon icon--arrow-small-right color--black abs-tr no-visible">--}}
{{--                            <use xlink:href="#arrow-small-right"></use>--}}
{{--                        </svg>--}}
{{--                    </span>--}}
{{--                    <span class="secondary-nav secondary-nav--lookbooks display--block">--}}
{{--                        <span class="secondary-nav__inner display--block">--}}
{{--                            <ul class="submenu-list menu-ul">--}}
{{--                                <li class="submenu-item submnu-lookbook-link"><a href="lost-pssword.html" class="submenu-a menu-link item--0 uppercase">All lookbooks</a></li>--}}
{{--                                <li class="submenu-item submnu-1"><a href="lookbooks.html" class="submenu-a menu-link item--221 uppercase">Authentic Mykonos</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </span>--}}
{{--                    </span>--}}
{{--                </li>--}}
                <li class="main-item main-item menu-item menu-item-has-children menu-item--contact">
                    <span class="menu-item-inner relative display--block">
                        <span class="menu-a uppercase">Contact us</span>
                        <svg class="icon icon--arrow-small-right color--black abs-tr no-visible">
                            <use xlink:href="#arrow-small-right"></use>
                        </svg>
                    </span>
                    <span class="secondary-nav secondary-nav--contact display--block">
                        <span class="secondary-nav__inner display--block">
                            <ul class="submenu-list menu-ul">
                                <li class="submenu-item submnu-">
                                    <a href="{{route('contactUs')}}" class="submenu-a menu-link item-- uppercase">
                                        Find us near you
                                    </a>
                                </li>
                                <li class="submenu-item submnu-">
                                    <a href="{{route('contactUs')}}" class="submenu-a menu-link item-- uppercase">
                                        RETAILERS
                                    </a>
                                </li>
{{--                                    <li class="submenu-item submnu-">--}}
{{--                                        <a href="store.html" class="submenu-a menu-link item-- uppercase">--}}
{{--                                            Mykonos--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
                            </ul>
                        </span>
                    </span>
                </li>
            </ul>

            <ul id="menu-burgersecondarymenu_en" class="menu-ul menu-secondary">
{{--                <li id="menu-item-2358" class="menu-item menu-item-type-taxonomy menu-item-object-collection menu-item-2358 main-item item--41 mnu-1">--}}
{{--                    <span class="menu-item-inner">--}}
{{--                        <a href="collection.html" class="menu-a menu-link item--41">--}}
{{--                            SIGNATURE COLLECTION--}}
{{--                        </a>--}}
{{--                    </span>--}}
{{--                </li>--}}

                <li id="menu-item-515" class="menu-item menu-item-type-taxonomy menu-item-object-faq-categories menu-item-515 main-item item--49 mnu-2">
                    <span class="menu-item-inner">
                        <a href="{{route('faq')}}" class="menu-a menu-link item--49">
                            FREQUENTLY ASKED QUESTIONS
                        </a>
                    </span>
                </li>

                <li id="menu-item-244" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-244 main-item item--3 mnu-3">
                    <span class="menu-item-inner">
                        <a href="{{route('privacyPolicy')}}" class="menu-a menu-link item--3">
                            PRIVACY POLICY
                        </a>
                    </span>
                </li>

                <li id="menu-item-243" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-243 main-item item--200 mnu-4">
                    <span class="menu-item-inner">
                        <a href="{{route('termsConditions')}}" class="menu-a menu-link item--200">
                            TERMS & CONDITIONS
                        </a>
                    </span>
                </li>
            </ul>
        </div>
        <div class="max-6cols-g pt-sm">
            <header class="gutter font-bold title-13 mb-y ls-180 uppercase js-bring-in">
                Featured Categories
            </header>
            @foreach($headerCategories as $key => $headerCategory)
                <div class="block-50 display--inline-top js-bring-in" style="float: left;">
                    <a href="{{route('shopCategory',['category_id'=>$headerCategory->id])}}"
                       class="menu__banner gutter a-center color--black">
                        <span class="menu__banner-img display--block relative cover-img mb-c" style="background-image: url('{{$headerCategory->image ?  asset($headerCategory->image):asset('site/images/pendants-1.jpg')}}')">
                            <span class="grad-bot-grey-light block-100 h-50 abs-bl z-1"></span>
                            <span class="circ current-c abs-bc br-50 mb-med">
                                <span class="block-100 abs-lc font-bold title-13 ls-180">
                                    Nº {{$key+1}}
                                </span>
                            </span>
                        </span>
                        <span class="menu__banner-title trans font-bold title-25 uppercase ls-30">
                            {{$headerCategory->name}}
                        </span>
                        {{--                    <span class="font-light display--block title-15 uppercase ls-80">82 Products</span>--}}
                    </a>
                </div>
            @endforeach

        </div>
    </div>
</nav>



