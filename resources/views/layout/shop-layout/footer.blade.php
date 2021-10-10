<aside class="home-nav fixed to-tr a-right color--red font-bold title-13 ls-180 tablet-hor-hidden opc-0 no-visible js-fade-in in-view"
    data-emit-events data-bottom-top="" data-trans="1.4" data-cubic="custom">
    Nº<span class="relative">
        <span class="trans" data-anchor-target="#top-content" data-0="@class:trans"
              data-center-bottom="@class:trans faded">1</span>
        <span class="trans abs-tl block-100 display--block a-center faded" data-anchor-target="#section--0"
            data-0="@class:trans abs-tl block-100 display--block a-center faded"
            data-center-top="@class:trans abs-tl block-100 display--block a-center"
            data-center-bottom="@class:trans abs-tl block-100 display--block a-center faded">2</span>
        <span class="trans abs-tl block-100 display--block a-center faded" data-anchor-target="#section--1"
            data-0="@class:trans abs-tl block-100 display--block a-center faded"
            data-center-top="@class:trans abs-tl block-100 display--block a-center"
            data-center-bottom="@class:trans abs-tl block-100 display--block a-center faded">3</span>
        <span class="trans abs-tl block-100 display--block a-center faded" data-anchor-target="#section--2"
            data-0="@class:trans abs-tl block-100 display--block a-center faded"
            data-center-top="@class:trans abs-tl block-100 display--block a-center"
            data-center-bottom="@class:trans abs-tl block-100 display--block a-center faded">4</span>
        <span class="trans abs-tl block-100 display--block a-center faded" data-anchor-target="#section-heritage"
            data-0="@class:trans abs-tl block-100 display--block a-center faded"
            data-center-top="@class:trans abs-tl block-100 display--block a-center"
            data-center-bottom="@class:trans abs-tl block-100 display--block a-center faded">5</span>
    </span>
    <span class="home-nav__sep display--inline"></span> 5
</aside>
<footer class="footer relative" id="colophon">
    <div class="fill-dimensions cover-img bLazy-bg mobile-hor-hidden" data-src="{{$footer->background_image ? asset($footer->background_image):asset('/site/images/footer_bg.jpg')}}"></div>
    <div class="grad-black-top block-100 h-60 abs-tl z-1"></div>
    <div class="grid max-12cols-g over color--footer mobile-hor-100">
        <div class="gutter a-right mobile-hor-gutter mobile-hor-left">
            <div class="max-4cols ml-auto color--white pb-f mobile-pb-50 tablet-maxw-100">
                <div class="font-thin title-70 uppercase mb-med">
                    {{$footer->tag_line}}
                </div>
{{--                <div class="font-bold title-12 uppercase ls-180 cursor hover-red trans" id="open-ns-popup">Subscribe--}}
{{--                    to our newsletter--}}
{{--                    <svg class="icon icon--arrow-long-right ml-arrow no-trans relative t-sm newsletter-arrow">--}}
{{--                        <use xlink:href="#arrow-long-right"></use>--}}
{{--                    </svg>--}}
{{--                </div>--}}
            </div>
        </div>
        <div class="footer__gap-right relative">
            <div class="columns-2-g display--inline-top tablet-hor-40 tablet-33 mobile-hor-100">
                <div class="gutter mobile-hor-gutter">
                    <div class="font-light title-25 color--white uppercase style-bolds mb-g"><b>{{$contactUs->title}}</b>
                    </div>
                    <div class="footer__text style-links-hover-white">
                        <p>{{$contactUs->address}}.<br/>
                            T <a href="tel:{{$contactUs->phone_number}}">{{$contactUs->phone_number}}</a><br/>
                            E <a href="mailto:{{$contactUs->email}}" target="_blank" rel="noopener noreferrer">{{$contactUs->email}}</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="block-60 max-4cols-g display--inline-top tablet-33 mobile-hor-100 mobile-hor-hidden">
                <div class="gutter pb-med mobile-hor-gutter">
                    <div class="font-light title-25 color--white uppercase style-bolds mb-g"><b>The shopping</b><br>experience
                    </div>
                    <div class="footer__menu columns-3 footer__text">
                        @foreach($footerCategories as $footerCategory)
                            <a href="{{route('shopCategory',['category_id'=>$footerCategory->id])}}" class="footer__menu-item">{{$footerCategory->name}}</a>
                        @endforeach
{{--                        <a href="eshop-product-category.html" class="footer__menu-item">Rings</a>--}}
{{--                        <ul id="menu-footermenu_en" class="menu-ul">--}}
{{--                            <li id="menu-item-494"--}}
{{--                                class="menu-item menu-item-type-taxonomy menu-item-object-faq-categories menu-item-494 main-item item--50 mnu-1">--}}
{{--                                <span class="menu-item-inner">--}}
{{--                                    <a href="faqs.html" class="menu-a menu-link item--50">--}}
{{--                                        Shipping &#038; Returns--}}
{{--                                    </a>--}}
{{--                                </span>--}}
{{--                            </li>--}}
{{--                            <li id="menu-item-495"--}}
{{--                                class="menu-item menu-item-type-taxonomy menu-item-object-faq-categories menu-item-495 main-item item--53 mnu-2">--}}
{{--                                <span class="menu-item-inner">--}}
{{--                                    <a href="faqs.html" class="menu-a menu-link item--53">--}}
{{--                                        Care &#038; Repair--}}
{{--                                    </a>--}}
{{--                                </span>--}}
{{--                            </li>--}}
{{--                            <li id="menu-item-496"--}}
{{--                                class="menu-item menu-item-type-taxonomy menu-item-object-faq-categories menu-item-496 main-item item--51 mnu-3">--}}
{{--                                <span class="menu-item-inner">--}}
{{--                                    <a href="faqs.html" class="menu-a menu-link item--51">--}}
{{--                                        Payment--}}
{{--                                    </a>--}}
{{--                                </span>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
                    </div>
                </div>
            </div>
            <div class="footer__socials columns-2-g abs-tr display--inline-top tablet-rel tablet-33 mobile-hor-100">
                <div class="gutter font-light title-12 ls-180 uppercase mobile-hor-gutter">
                    <a href="{{$footer->instagram_link}}" target="_blank" rel="nofollow noopener noreferrer"
                       class="social-link relative display--block color--grey-med hover-white mobile-hor-display-inline">
                            <span class="social-link__icon abs-tl mobile-hor-rel mobile-hor-display-inline"><svg
                                    class="icon icon--instagram abs-center mobile-hor-rel-no-center"><use
                                        xlink:href="#social-instagram"></use></svg></span><span
                            class="mobile-hor-hidden">instagram</span>
                    </a>
                    <a href="{{$footer->vimeo_link}}" target="_blank" rel="nofollow noopener noreferrer"
                           class="social-link relative display--block color--grey-med hover-white mobile-hor-display-inline">
                        <span class="social-link__icon abs-tl mobile-hor-rel mobile-hor-display-inline"><svg
                                class="icon icon--vimeo abs-center mobile-hor-rel-no-center"><use
                                    xlink:href="#social-vimeo"></use></svg></span><span
                            class="mobile-hor-hidden">vimeo</span>
                    </a>
                    <a href="{{$footer->facebook_link}}" target="_blank" rel="nofollow noopener noreferrer"
                           class="social-link relative display--block color--grey-med hover-white mobile-hor-display-inline">
                        <span class="social-link__icon abs-tl mobile-hor-rel mobile-hor-display-inline"><svg
                                class="icon icon--facebook abs-center mobile-hor-rel-no-center"><use
                                    xlink:href="#social-facebook"></use></svg></span><span class="mobile-hor-hidden">facebook</span>
                    </a>
                </div>
            </div>
            <div class="pb-med mobile-hor-mt-25 mobile-hor-nopad--bottom">
                <div class="columns-2-g display--inline-top tablet-33 mobile-hor-100">
                    <div class="gutter pb-25 mobile-hor-gutter">
                        <div class="ls-180 uppercase">
                            <a href="#" class="font-bold title-12 color--white underlined" target="_blank"
                               rel="nofollow noopener noreferrer">
                                View on map
                            </a>
                        </div>
                    </div>
                </div>
                <div class="block-60 tablet-50 max-4cols-g display--inline-top mobile-hor-100">
                    <div class="gutter pb-25 ls-180 uppercase mobile-hor-gutter">
                        <a href="{{route('shop')}}" class="font-bold title-12 color--white underlined">
                            Shop Online
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="gutter font-light title-12 ls-100 color--grey-med uppercase mobile-hor-gutter">
            <div class="display--inline">
                <a href="#" target="_blank" rel="noopener noreferrer"
                   class="color--grey-med hover-white">SEVENTY NINE</a>
                &amp; <a href="https://www.lab21.gr" target="_blank" rel="noopener noreferrer"
                         class="color--grey-med hover-white">SAITH DEG NAW LTD </a> &copy; {{\Carbon\Carbon::now()->format('Y')}}
            </div>
            <nav class="footer__copyright-menu display--inline">
                <ul id="menu-copyrightsmenu_en" class="menu-ul">
                    <li id="menu-item-260"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-260 main-item item--200 mnu-1">
                        <span class="menu-item-inner">
                            <a href="{{route('termsConditions')}}" class="menu-a menu-link item--200">
                                TERMS & CONDITIONS
                            </a>
                        </span>
                    </li>
                    <li id="menu-item-261"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-261 main-item item--3 mnu-2">
                            <span class="menu-item-inner">
                                <a href="{{route('privacyPolicy')}}" class="menu-a menu-link item--3">
                                    PRIVACY POLICY
                                </a>
                            </span>
                    </li>
{{--                    <li id="menu-item-262"--}}
{{--                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-262 main-item item--258 mnu-3">--}}
{{--                        <span class="menu-item-inner">--}}
{{--                            <a href="#" class="menu-a menu-link item--258">--}}
{{--                                SITEMAP--}}
{{--                            </a>--}}
{{--                        </span>--}}
{{--                    </li>--}}
                </ul>
            </nav>
            <div class="footer__logos float-right mobile-hor-hidden">
                <div class="display--inline footer-logo">
                    <img src="{{asset($footer->image_1)}}" alt="Minas Jewelry - Mobile Award"
                         class="footer-logo-0">
                </div>
                <div class="display--inline footer-logo">
                    <img src="{{asset($footer->image_2)}}" alt="Minas Jewelry - Best Innovation"
                         class="footer-logo-1">
                </div>
                <div class="display--inline footer-logo">
                    <img src="{{asset($footer->image_3)}}" alt="Minas Jewelry - Best UI Design" class="footer-logo-2">
                </div>
                <div class="display--inline footer-logo">
                    <img src="{{asset($footer->image_4)}}" alt="Minas Jewelry - Best UX Design" class="footer-logo-3">
                </div>
                <div class="display--inline footer-logo">
                    <img src="{{asset($footer->image_5)}}" alt="Minas Jewelry - Ermis Awards 2019"
                         class="footer-logo-4">
                </div>
            </div>
            <div class="clear"></div>
        </div>

    </div>
</footer>
