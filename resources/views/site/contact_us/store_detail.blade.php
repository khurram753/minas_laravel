@extends('layout.front-layout.app')

@section('title')
    MINAS - Contact Us Store
@endsection


@section('content')
    <main class="main-content  store-page bg-white mikonos-store" id="mikonos-store">
        <section class="full-height relative overflow mobile-hor-height-100 mobile-hor-padded">
            <div class="fill-dimensions multiply bg-black opc-70 z-10"></div>
            <div class="cover-img fill-dimensions scale-out js-scale-in js-scale-in--sm skrollr-pointer opc-0 parallax"
                 data-parallax="-0.5" data-emit-events data-bottom-top="" data-trans="2"
                 style="background-image: url('/site/images/store_mykonos.jpg');"></div>
            <div class="grid max-6cols-g full-height over mobile-hor-100 mobile-hor-height-100">
                <div class="gutter full-height mobile-hor-gutter mobile-hor-height-100 mobile-hor-mb-40">
                    <header class="a-center store-page__header relative mobile-hor-rel-no-center">
                        <div class="mb-43 js-bt overflow relative skrollr-pointer" data-emit-events data-bottom-top="">
                            <div class="js-bt__el"><span class="font-light font-18 bracket-icon">{</span><span
                                    class="font-bold font-12 extra-l  bracket-title">DISCOVER OUR STORES</span><span
                                    class="font-light font-18 bracket-icon">}</span></div>
                        </div>
                        <h1 class="font-70 font-thin m-auto desktop-md-maxw-500 content-hr content-hr--white mb-24 js-skew-letter skrollr-pointer"
                            data-emit-events data-trans="1.4" data-bottom-top="" data-delay=".2">
                            {{$store->title}}

                            {{--                            STORE EST.1998--}}
                        </h1>
                        {{--                        <h2 class="font-light font-20 m-auto maxw-470 mb-60 store-page__header-txt js-skew-letter skrollr-pointer"--}}
                        {{--                            data-emit-events data-trans="1.4" data-bottom-top="" data-delay=".25">AN ICONIC BUILDING IN--}}
                        {{--                            THE HEART OF MYKONOS.--}}
                        {{--                        </h2>--}}
                        <div class="opc-0 js-fade-up skrollr-pointer mobile-hor-hidden" data-emit-events
                             data-bottom-top="" data-cubic="custom" data-trans="1.6" data-delay=".3">
                            <span class="circle-btn relative cursor display--inline circle-link scroll-to"
                                  data-target="#section-2">
                                <svg class="circle-btn__wrapper-circle"
                                     xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 151.689 148.568">
                <path class="js-svg-circle circle-btn__circle" fill="none" stroke="#fff" stroke-width="1"
                      stroke-miterlimit="10" d="M75.845,145.15
            c-39.139,0-70.867-31.728-70.867-70.866S36.706,3.418,75.845,3.418c39.138,0,70.866,31.728,70.866,70.866
            S114.983,145.15,75.845,145.15"/>
                <path class="js-stretched" fill="none" opacity="0" stroke="#fff" stroke-width="1" stroke-miterlimit="10"
                      d="M113.228 5.526a10.122 10.122 0 0 0-.672-.479c-10.217-6.64-24.534-3.415-35.743-2.101-7.854.92-15.701 2.125-23.366 4.098-13.122 3.376-25.936 9.011-35.57 18.785C.454 43.503-2.653 70.782 4.779 93.701c12.587 38.817 65.455 69.188 104.126 47.793 18.448-10.207 31.242-31.346 37.575-50.686 3.17-9.681 6.398-20.775 4.775-31.049-1.498-9.484-7.574-16.885-13.6-23.975-6.826-8.031-12.545-16.946-19.49-24.863-1.588-1.81-3.064-3.941-4.937-5.395z"/>
                <path class="js-stretched-2" fill="none" stroke="#ffffff" opacity="0" stroke-miterlimit="10" d="M107.309,4.917c-0.223-0.148-0.452-0.288-0.686-0.417
            C96.241-1.223,82.575,2.916,71.792,4.98c-7.556,1.447-15.087,3.17-22.385,5.624C36.912,14.805,24.875,21.176,16.215,31.34
            C0.555,49.718-0.537,76.407,8.292,98.124c3.569,8.781,8.526,22.413,15.723,29.416c13.605,13.24,33.127,13.928,51.836,15.442
            c12.843,1.04,25.689,1.455,36.85-5.824c17.182-11.205,28.106-32.619,32.887-51.832c2.394-9.617,4.744-20.611,2.446-30.465
            c-2.123-9.098-8.54-15.85-14.888-22.307c-7.189-7.311-13.368-15.558-20.665-22.752C110.812,8.158,109.23,6.196,107.309,4.917z"/>
            </svg>
                                <span class="abs-center a-center z-5 font-12 extra-ls extra-lh2 font-bold block-70">
                                    DISCOVER THE STORE
                                </span>
                            </span>
                        </div>
                    </header>
                </div>
            </div>
        </section>
        <div id="section-2" class="js-top tablet-hor-pb-100 overflow mobile-hor-nopad--bottom">
            <div class="grid max-12cols-g mobile-hor-100">
                <div class="gutter mobile-hor-gutter">
                    <div class="a-center store-address store-box__info color-black  opc-0 js-fade-up skrollr-pointer"
                         data-emit-events data-bottom-top="" data-cubic="custom" data-trans="1.6" data-delay=".3">
                        <p>{{$store->address}} <br/>
                            {{$store->country}}<br/>
                            {{$store->phone_number}}</p>
                        <p><a href="{{$store->email}}">{{$store->email}}</a></p>
                        {{--                        <p><strong>OPEN APRIL &#8211; OCTOBER</strong></p>--}}
                    </div>

                    <div class="relative container360 m-auto">
                        <div class="container360__inner relative">
                            <div
                                class="fill-dimensions fill-dimensions--extra js-curtain-tb origin-bl skrollr-pointer z-30 bg-white"
                                data-emit-events data-bottom-top=""></div>
                            @if(isset($store->storeDescription) && $store->storeDescription)
                                <div id="container360" class="fill-dimensions"
                                     data-image="{{asset($store->storeDescription->rotate_image)}}"></div>
                            @endif

                        </div>
                    </div>
                        @if(isset($store->storeDescription) && $store->storeDescription)
                            {!! $store->storeDescription->description !!}
                        @endif

{{--                    </div>--}}
                    {{--                    @if(isset($store->storeDescription) && $store->storeDescription)--}}
                    {{--                        {!! $store->storeDescription->description !!}--}}
                    {{--                    @endif--}}

                    <section class="grid max-12cols-g mobile-hor-100">
                        @foreach($store->storeDescription->storeImage as $store_image)
                            <div
                                class="block-50 tablet-100 display--inline-top a-center mt-80 mb-144 tablet-hor-mb-60  mobile-hor-nomargin--top mobile-hor-mb-90">
                                <div class="gutter mobile-hor-nomargin">
                                    <div data-goto="0" data-id="303"
                                         class="display--inline-top relative mb-22 gallery-image js-open-slider cursor">
                                        <div class="relative">
                                            <div class="display-inline relative js-scale-out skrollr-pointer"
                                                 data-emit-events data-bottom-top="" data-delay="">
                                                <div
                                                    class="display--block js-scale-out__holder opc-0 no-visible overflow">
                                                    <div class="display--block js-scale-out__img">
                                                        <div class="parallax" data-parallax="-0.2">
                                                            <div
                                                                class="fill-dimensions trans multiply bg-grey-med opc-20 z-10"></div>
                                                            <img class="resp-image display--block"
                                                                 src="{{asset($store_image->image)}}"
                                                                 alt="product displays"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="maxw-435 m-auto color-black">
                                        <div
                                            class="font-bold font-12 extra-ls extra-lh3 mb-20 opc-0 no-visible js-fade-left skrollr-pointer"
                                            data-emit-events data-bottom-top="" data-trans="1.4">
                                            {{$store->year}}
                                        </div>
                                        <div
                                            class="font-bold font-25 mb-9 opc-0 no-visible js-fade-left skrollr-pointer"
                                            data-emit-events data-delay=".1" data-bottom-top="" data-trans="1.4">
                                            {{$store->title}}
                                        </div>
                                        <div
                                            class="font-light font-20 extra-ls opc-0 no-visible js-fade-left skrollr-pointer"
                                            data-emit-events data-delay=".15" data-bottom-top="" data-trans="1.4">
                                            {{$store->description}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="a-center mb-43 btn-black mobile-hor-mt-60 opc-0 no-visible js-fade-in skrollr-pointer" data-emit-events data-bottom-top="" data-cubic="custom" data-trans="1.6">
                            <span data-id="303" class="js-open-slider display--inline cursor">
                                <span class="circle-btn relative cursor display--inline circle-link">
                                    <svg
                                        class="circle-btn__wrapper-circle" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 151.689 148.568">
                                        <path class="js-svg-circle circle-btn__circle" fill="none" stroke="#fff" stroke-width="1" stroke-miterlimit="10" d="M75.845,145.15
                                        c-39.139,0-70.867-31.728-70.867-70.866S36.706,3.418,75.845,3.418c39.138,0,70.866,31.728,70.866,70.866
                                        S114.983,145.15,75.845,145.15"/>
                                            <path class="js-stretched" fill="none" opacity="0" stroke="#fff" stroke-width="1" stroke-miterlimit="10" d="M113.228 5.526a10.122 10.122 0 0 0-.672-.479c-10.217-6.64-24.534-3.415-35.743-2.101-7.854.92-15.701 2.125-23.366 4.098-13.122 3.376-25.936 9.011-35.57 18.785C.454 43.503-2.653 70.782 4.779 93.701c12.587 38.817 65.455 69.188 104.126 47.793 18.448-10.207 31.242-31.346 37.575-50.686 3.17-9.681 6.398-20.775 4.775-31.049-1.498-9.484-7.574-16.885-13.6-23.975-6.826-8.031-12.545-16.946-19.49-24.863-1.588-1.81-3.064-3.941-4.937-5.395z"/>
                                            <path class="js-stretched-2" fill="none" stroke="#ffffff" opacity="0" stroke-miterlimit="10" d="M107.309,4.917c-0.223-0.148-0.452-0.288-0.686-0.417
                                        C96.241-1.223,82.575,2.916,71.792,4.98c-7.556,1.447-15.087,3.17-22.385,5.624C36.912,14.805,24.875,21.176,16.215,31.34
                                        C0.555,49.718-0.537,76.407,8.292,98.124c3.569,8.781,8.526,22.413,15.723,29.416c13.605,13.24,33.127,13.928,51.836,15.442
                                        c12.843,1.04,25.689,1.455,36.85-5.824c17.182-11.205,28.106-32.619,32.887-51.832c2.394-9.617,4.744-20.611,2.446-30.465
                                        c-2.123-9.098-8.54-15.85-14.888-22.307c-7.189-7.311-13.368-15.558-20.665-22.752C110.812,8.158,109.23,6.196,107.309,4.917z"/>
                                    </svg>
                                    <span class="abs-center a-center z-5 font-12 extra-ls extra-lh2 font-bold block-70 galleryClass">VIEW GALLERY<span class="color-grey display--block">
                                            ({{sizeof($store->storeDescription->storeImage)}} PHOTOS)
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </div>

                    </section>
                    <div class="a-center back-to-top-holder opc-0 no-visible js-fade-in skrollr-pointer"
                         data-emit-events data-bottom-top="" data-cubic="custom" data-trans="1.6">
                        <div class="display--inline cursor scroll-to back-to-top back-to-top--black" data-position='0'>
                            <div class="icon icon--arrows-long-up back-to-top__icon mb-30 color-red trans"></div>
                            <div class="back-to-top__title relative trans ls-18">GO BACK TO TOP</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--        <div class="a-center color-white relative js-bottom z-30">--}}
        {{--            <a href="store.html" class="display--block store-page-link color-white overflow relative">--}}
        {{--                <div--}}
        {{--                    class="fill-dimensions fill-dimensions--extra bg-white skrollr-pointer js-curtain-tb origin-bl z-30"--}}
        {{--                    data-emit-events data-bottom-top=""></div>--}}
        {{--                <div class="fill-dimensions multiply opc-60 z-10 bg-black store-page-link__mask trans"></div>--}}
        {{--                <div class="fill-dimensions cover-img scale-out js-scale-in js-scale-in--sm skrollr-pointer opc-0"--}}
        {{--                     data-emit-events data-cubic="custom" data-bottom-top="" data-trans="1.6"--}}
        {{--                     style="background-image: url('images/minas-store-kifissia.jpg')"></div>--}}
        {{--                <div class="font-20 font-thin over mb-5 js-bt overflow relative skrollr-pointer" data-emit-events--}}
        {{--                     data-bottom-top="" data-delay=".2">--}}
        {{--                    <div class="js-bt__el">--}}
        {{--                        DISCOVER--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--                <div--}}
        {{--                    class="over font-bold font-40 store-page-link__title relative display--inline js-bt overflow relative skrollr-pointer"--}}
        {{--                    data-emit-events data-bottom-top="" data-delay=".25">--}}
        {{--                    <div class="js-bt__el">--}}
        {{--                        KIFISSIA FLAGSHIP STORE--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </a>--}}
        {{--        </div>--}}


        <div id="popup-slider" class="fixed abs-tl full-height abs-tl block-100 no-visible opc-0 z-700">
            <div class="cursor close-popup close-popup--white z-30 popup-holder__close opc-0 abs-tr" id="popup-slider__close">
            </div>
            <div id="popup-slider__bg" class="fill-dimensions abs-tl fixed bg-black-light scale-y origin-l"></div>
            <section id="popup-slider__holder" class="popup-slider slider slider--fullheight overflow do-slide"
                     data-slides=".slider__item" data-images=".slider__img" data-animation="custom" data-speed="1"
                     data-autoplay="false" data-autoplaytime="5" data-progressbar="false" data-totalslides="{{sizeof($store->storeDescription->storeImage )}}"
                     data-percentage="false" data-next="#popup-slider__next" data-prev="#popup-slider__prev"
                     data-dots="false" data-pagination="#slider__pagination" data-mousewheel="false" data-loop="true"
                     data-test_swipe="true">
                <div id="popup-slider__contents" class="slider__holder slider--fullheight overflow opc-0 z-10">
                    @foreach($store->storeDescription->storeImage as $key => $store_image)
                        <article class="slider__item fill-dimensions a-center  {{$key == 0 ? 'slide--active':''}}" data-index="{{$key}}"
                                 style="{{$key == 0 ? 'visibility: inherit; opacity: 1;':'opacity: 0; z-index: 5; visibility: hidden;'}}">
                            <div class="maxw-270 abs-tl color-white a-left top-44 left-70 popup-slider__info">
                                <div class="font-bold font-12 extra-lh3 extra-ls">
                                    {{$store_image->date}}
                                </div>
                                <div class="font-bold font-25">{{$store_image->title}}
                                </div>
                                <div class="font-light font-17">
                                    {{$store_image->description}}
                                </div>
                            </div>
                            <div class="display--inline m-auto block-100 mt-50 popup-slider__image">
                                <img src="{{asset($store_image->image)}}" alt="Minas Designs-kifisia_store_3" class="popup-slider__img  display--block m-auto">
                            </div>
                        </article>
                    @endforeach

                </div>
            </section>
            <div class="slider__nav abs-center z-20 block-100 popup-slider-nav">
            <span id="popup-slider__prev"
                  class="slider__nav-btn abs-tl slider__nav-btn-prev slider__popup-nav-prev cursor">
                <span class="trans color-grey font-70 font-thin trans">
                    <span class="pagination-arrows__title trans">PREV</span>
                    <span class="icon icon--arrows-long-left abs-lc pagination-arrows__icon opc-0 trans"></span>
                </span>
            </span>
                <span id="popup-slider__next"
                      class="slider__nav-btn abs-tr slider__nav-btn-next slider__popup-nav-next cursor">
                <span class="trans color-grey font-70 font-thin trans">
                    <span class="pagination-arrows__title trans">NEXT</span>
                    <span class="icon icon--arrows-long-right abs-rc pagination-arrows__icon opc-0 trans"></span>
                </span>
            </span>
            </div>
        </div>
    </main>
@endsection

@section('script')
    <script type='text/javascript' defer src='{{asset('site/js/kaleidoscope.min.js')}}'></script>
    <script type='text/javascript' defer src='{{asset('site/js/hammer.min.js')}}'></script>
    <script type='text/javascript' defer src='{{asset('site/js/jquery-gsapSlider.js')}}'></script>
    <script src="{{asset('admin/js/jquery.min.js')}}"></script>

    <script>

        $(document).ready(function(){
           $('.galleryClass').click(function(){
               $('#popup-slider').css({'opacity': 1, 'visibility': 'inherit'});

               $('#popup-slider__close').css({'opacity': 1, 'visibility': 'inherit'});
               $('#popup-slider__bg').css({'transform': 'matrix(1, 0, 0, 1, 0, 0)'});

               $('#popup-slider__holder').css({'opacity': 1, 'visibility': 'inherit'});
               $('#popup-slider__contents').css({'opacity': 1, 'visibility': 'inherit'});
           });

           $('#popup-slider__close').click(function(){
               $('#popup-slider').css({'opacity': 0, 'visibility': 'hidden'});

               $('#popup-slider__close').css({'opacity': 0, 'visibility': 'hidden'});
               // $('#popup-slider__bg').css({'transform': 'matrix(0, 0, 0, 0, 0, 0)'});

               $('#popup-slider__holder').css({'opacity': 0, 'visibility': 'hidden'});
               $('#popup-slider__contents').css({'opacity': 0, 'visibility': 'hidden'});
           });

           $('#popup-slider__next').click(function(){
               var currentArticle = $(this).parents('div#popup-slider').find('section#popup-slider__holder article.slide--active');
               var getNextArticle = $(this).parents('div#popup-slider').find('section#popup-slider__holder article.slide--active').next( "article" );

               if(getNextArticle.length)
               {
                   currentArticle.removeClass('slide--active').css({'opacity':0, 'visibility': 'hidden'});
                   getNextArticle.addClass('slide--active').css({'opacity':1, 'visibility': 'inherit'});
               }
               else{

               }

           });

            $('#popup-slider__prev').click(function(){
                var currentArticle = $(this).parents('div#popup-slider').find('section#popup-slider__holder article.slide--active');
                var getNextArticle = $(this).parents('div#popup-slider').find('section#popup-slider__holder article.slide--active').prev( "article" );

                if(getNextArticle.length)
                {
                    currentArticle.removeClass('slide--active').css({'opacity':0, 'visibility': 'hidden'});
                    getNextArticle.addClass('slide--active').css({'opacity':1, 'visibility': 'inherit'});
                }
                else{

                }

            });
        });

    </script>

@endsection
