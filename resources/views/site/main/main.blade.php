@extends('layout.front-layout.app')

@section('title')
    MINAS
@endsection

@section('content')

    <div class="fill-dimensions fixed full-height site-intro bg-black overflow" id="site-intro">

        <div class="fill-dimensions cover-img z--1 opc-0 no-visible js-scale-in--sm js-intro-bg"
             style="background-image: url({{asset('site/images/minas_intro_homepage.jpg')}}); transform-origin: center center 0px; visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"></div>

        <div class="opc-0 no-visible js-intro-fade abs-tc" style="visibility: inherit; opacity: 1;">
            <a aria-label="Minas Designs" href="{{route('home')}}" class="site-intro__logo abs-tc">
            <span class="js-hp-fade mian_logo">
            <img src="{{asset('site/images/minas_logob.jpeg')}}" alt="img">
        </span>
            </a>
        </div>

        <div class="grid max-12cols-g mobile-hor-100 full-height">
            <div class="abs-bc site-intro__holder z-10">
                <div class="block-50 display--inline-top">
                    <div class="site-intro-gutter opc-0 no-visible js-intro-fade mobile-hor-gutter-20 relative"
                         style="visibility: inherit; opacity: 1;">
                        <a id="shop-link" href="{{route('homepage')}}"
                           class="site-intro-link a-center color-grey  display--block site-intro__line"
                           data-url="home.html">
                            <span id="home-link"
                                  class="site-intro-link a-center color-grey display--block trans cursor  site-intro__line">
                                <span class="z--1 display--block relative">
                                    <span class="font-thin font-40 mb-5 display--block">MINAS’ WORLD</span>
                                    <span
                                        class="font-bold font-12 extra-ls site-intro__line-label   relative display--inline mobile-hor-hidden">DISCOVER THE HERITAGE</span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="block-50 display--inline-top">

                    <div class="site-intro-gutter opc-0 no-visible js-intro-fade mobile-hor-gutter-20 relative"
                         style="visibility: inherit; opacity: 1;">
                        <a id="shop-link" href="{{route('shop')}}"
                           class="site-intro-link a-center color-grey  display--block site-intro__line"
                           data-url="home.html">

                        <span class="z--1 display--block relative ">
                            <span class="font-thin font-40 mb-5 display--block">SHOP ONLINE</span>
                            <span
                                class="font-bold font-12 extra-ls  site-intro__line-label relative display--inline mobile-hor-hidden">YOUR FAVOURITE PRODUCTS</span>
                        </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="mouse" class="mouse opc-0 no-visible"
             style="transform: translate3d(-28px, 250px, 0px); visibility: inherit; opacity: 1;">
            <svg class="mouse" width="400" height="400" viewBox="0 0 400 400">
                <path id="loop" fill-opacity="0"
                      d="M194.1 199.9c-.4 3.2 1.2 4.5 4.7 6 3.7 1.6 8.8-4.4 6.9-7.7-1.5-2.5-2.5-4.4-5.4-4.4-4.9.1-5.8 2.8-6.2 6.1z"></path>
                <path id="stretched" fill-opacity="0"
                      d="M255 200c0 3.3-51.7 4-55 4s-6-.7-6-4 2.7-4 6-4 55 .7 55 4z"></path>
                <path id="prestretched" fill-opacity="0"
                      d="M201 193.5c-.3 0-.6.2-1 .5-3 3-6 2.7-6 6 0 2.6 2 3 4.4 5.7.5.6 1.3.8 2.2.8 3.7 0 9.5-4.1 5.5-6.5-2.5-1.5-3.5-6.5-5.1-6.5z"></path>
                <path id="default" fill="none" stroke-width="1"
                      d="M194.00305045,199.99694955 C193.99084865,203.2938991 196.6572937,205.9511928 199.96339460000002,205.99694955 203.275291355,206.04575675 206.0488072,203.2450919 205.99084865,199.9450919 205.9450919,196.66949549999998 203.29694955000002,193.9938991 200.00915135,193.9938991 196.66003910499998,193.99694955 194.014947205,196.69694955 194.00305045,199.99694955 z"
                      data-original="M206 200c0 3.3-2.7 6-6 6s-6-2.7-6-6 2.7-6 6-6 6 2.7 6 6z"
                      data-svg-origin="199.99401 199.99401"
                      transform="matrix(1,0,0,1,0.005991783603181805,0.005991783603181805)"
                      style="transform-origin: 0px 0px 0px; stroke-width: 1px; stroke-opacity: 1; fill-opacity: 1;"></path>
            </svg>
        </div>
    </div>


@endsection
