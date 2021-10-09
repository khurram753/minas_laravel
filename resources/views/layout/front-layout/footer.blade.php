<footer id="footer" class="relative footer z-30 overflow">
    <div class="fill-dimensions cover-img bg-attachment-fixed"
         style="background-image: url('{{asset('/site/images/footer_bg.jpg')}}')">
        <div class="multiply bg-black opc-30 fill-dimensions"></div>
    </div>
    <div class="over grid max-12cols-g trans mobile-hor-100">
        <div class="gutter mobile-hor-gutter">
            <div class="font-70 font-thin color-white pt-139 maxw-480  m-left-auto a-right mb-12 opc-0 no-visible mobile-hor-left mobile-hor-ml-0 mobile-pt-48 js-fade-left skrollr-pointer skrollable skrollable-before"
                data-emit-events="" data-bottom-top="" data-trans="1.4" style="">
                {{$footer->tag_line}}
            </div>
            <span class="display--block a-right mb-139 mobile-mb-50">
{{--                <span--}}
{{--                    class="display--block a-right mb-139 opc-0 mobile-hor-left no-visible js-fade-left skrollr-pointer mobile-no-margin skrollable skrollable-before"--}}
{{--                    data-emit-events="" data-bottom-top="" data-delay=".1" data-trans="1.4" style="">--}}
{{--                    <span class="font-bold font-12 extra-ls newsletter-link link-white trans cursor">--}}
{{--                        <span class="display--inline mr-20 cursor" id="open-ns-popup">SUBSCRIBE TO OUR NEWSLETTER</span>--}}
{{--                        <span class="icon icon--arrows-long-right newsletter-icon display--inline"></span>--}}
{{--                    </span>--}}
{{--                </span>--}}
            </span>
            <div class="relative">

                <div class="footer-content color-grey-med display--inline-top maxw-270 block-100 mb-43 mobile-hor-mb-20 trans mobile-100">
                    <div class="mb-24 opc-0 no-visible js-fade-up relative skrollr-pointer skrollable skrollable-before"
                        data-emit-events="" data-bottom-top="" style="">
                        <h3>{{$contactUs->title}}</h3>
{{--                        <p><em>FLAGSHIP STORE</em></p>--}}
                        <p>{{$contactUs->address}}<br>
                            T&nbsp; &nbsp;<a href="tel:{{$contactUs->phone_number}}">{{$contactUs->phone_number}}</a><br>
                            E &nbsp; <a href="mailto:{{$contactUs->email}}" target="_blank" rel="noopener noreferrer">{{$contactUs->email}}</a></p>
                    </div>
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <span class="opc-0 no-visible js-fade-up relative skrollr-pointer display--block skrollable skrollable-before" data-delay=".1" data-emit-events="" data-bottom-top="" style="">
                            VIEW ON MAP
                        </span>
                    </a>
                </div>
                <div class="footer-content color-grey-med display--inline-top maxw-370 block-100 mb-43 opc-0 no-visible js-fade-up relative  mobile-100 skrollr-pointer skrollable skrollable-before"
                    data-emit-events="" data-delay=".1" data-bottom-top="" style="">
                    <h3>DISCOVER</h3>
                    <p><em>Seventeen WORLD</em></p>
                    <nav class="footer-menu mb-24">
                        <ul id="menu-footer-menu_en" class="menu-ul">
                            <li id="menu-item-379"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-379 main-item item--74 mnu-1">

                                <a href="{{route('about')}}" class="menu-a menu-link item--74">About</a>
                            </li>
                            <li id="menu-item-380"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-380 main-item item--111 mnu-2">
                                <a href="{{route('quality')}}" class="menu-a menu-link item--111">Quality
                                    and craftsmanship</a>
                            </li>
                            <li id="menu-item-381"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-381 main-item item--131 mnu-3">
                                <a href="{{route('heritage')}}" class="menu-a menu-link item--131">Heritage</a>
                            </li>
                            <li id="menu-item-382"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-382 main-item item--355 mnu-4">
                                <a href="{{route('project')}}" class="menu-a menu-link item--355">Projects</a>
                            </li>
                            <li id="menu-item-385"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-385 main-item item--383 mnu-5">
                                <a href="{{route('newsUpdatePage')}}" class="menu-a menu-link item--383">
                                    News &amp; Updates
                                </a>
                            </li>
                            <li id="menu-item-387"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-387 main-item item--288 mnu-6">
                                <a href="{{route('contactUs')}}" class="menu-a menu-link item--288">
                                    Contact us
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <a href="{{route('shop')}}" arial-label="Minas studio shop" class="link-line-white font-bold font-12 extra-ls">
                        <span class="opc-0 no-visible js-fade-up relative skrollr-pointer display--block skrollable skrollable-before" data-delay=".15" data-emit-events="" data-bottom-top="" style="">
                            SHOP ONLINE
                        </span>
                    </a>
                </div>
                <div class="social maxw-230 abs-tr block-100">
                    <div
                        class="social-holder opc-0 no-visible js-fade-in skrollr-pointer skrollable skrollable-before"
                        data-emit-events="" data-bottom-top="" data-trans="1.4" style="">
                        <div class="opc-0 no-visible js-fade-left single-social skrollr-pointer skrollable skrollable-before"
                            data-emit-events="" data-bottom-top="" data-trans="1.4" data-delay="0.1" style="">
                            <a href="{{$footer->instagram_link}}" target="_blank" rel="nofollow noopener noreferrer"
                               class="social-link relative display--block font-light font-12 extra-ls color-grey-med">
                                <span class="abs-lc left-7 icon-social-media icon icon--social-media-instagram"></span>
                                <span class="tablet-hidden">INSTAGRAM</span>
                            </a>
                        </div>
                        <div class="opc-0 no-visible js-fade-left single-social skrollr-pointer skrollable skrollable-before"
                            data-emit-events="" data-bottom-top="" data-trans="1.4" data-delay="0.2" style="">
                            <a href="{{$footer->vimeo_link}}" target="_blank" rel="nofollow noopener noreferrer"
                               class="social-link relative display--block font-light font-12 extra-ls color-grey-med">
                                <span class="abs-lc left-7 icon-social-media icon icon--social-media-vimeo"></span>
                                <span class="tablet-hidden">VIMEO</span>
                            </a>
                        </div>
                        <div class="opc-0 no-visible js-fade-left single-social skrollr-pointer skrollable skrollable-before"
                            data-emit-events="" data-bottom-top="" data-trans="1.4" data-delay="0.3" style="">
                            <a href="{{$footer->facebook_link}}" target="_blank" rel="nofollow noopener noreferrer"
                               class="social-link relative display--block font-light font-12 extra-ls color-grey-med">
                                <span class="abs-lc left-7 icon-social-media icon icon--social-media-facebook"></span>
                                <span class="tablet-hidden">FACEBOOK</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__copyrights  relative color-grey-med font-light font-12 opc-0 no-visible js-fade-up skrollr-pointer skrollable skrollable-before"
                data-emit-events="" data-bottom-top="" data-delay=".25" data-trans="1.4" style="">
                <div class="mr-25 display--inline-top mr-20">
                    <a href="#" target="_blank" rel="noopener noreferrer" class="link-line link-to-white">SEVENTY NINE</a>
                    SAITH DEG NAW LTD © {{\Carbon\Carbon::now()->format('Y')}}
                </div>
                <nav class="copyright-menu display--inline-top">
                    <ul id="menu-copyright_menu_en" class="menu-ul">
                        <li id="menu-item-393" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-393 main-item item--390 mnu-1">
                            <a href="{{route('termsConditions')}}" class="menu-a menu-link item--390">TERMS &amp; CONDITIONS</a>
                        </li>
{{--                        <li id="menu-item-394"--}}
{{--                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-394 main-item item--389 mnu-2">--}}
{{--                            <a href="#" class="menu-a menu-link item--389">SITEMAP</a>--}}
{{--                        </li>--}}
                        <li id="menu-item-395" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-395 main-item item--3 mnu-3">
                            <a href="{{route('privacyPolicy')}}" class="menu-a menu-link item--3">PRIVACY POLICY</a>
                        </li>
                    </ul>
                </nav>
                <div class="footer__logos float-right mobile-hor-hidden">
                    <div class="display--inline footer-logo">
                        <img src="{{asset($footer->image_1)}}" alt="Minas Designs - Mobile Award"
                             class="footer-logo-0">
                    </div>
                    <div class="display--inline footer-logo">
                        <img src="{{asset($footer->image_2)}}" alt="Minas Designs - Best Innovation"
                             class="footer-logo-1">
                    </div>
                    <div class="display--inline footer-logo">
                        <img src="{{asset($footer->image_3)}}" alt="Minas Designs - Best UI Design"
                             class="footer-logo-2">
                    </div>
                    <div class="display--inline footer-logo">
                        <img src="{{asset($footer->image_4)}}" alt="Minas Designs - Best UX Design"
                             class="footer-logo-3">
                    </div>
                    <div class="display--inline footer-logo">
                        <img src="{{asset($footer->image_5)}}" alt="Minas Designs - Ermis Awards 2019"
                             class="footer-logo-4">
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</footer>
