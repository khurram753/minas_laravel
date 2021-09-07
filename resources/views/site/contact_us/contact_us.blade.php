@extends('layout.front-layout.app')

@section('title')
    MINAS - Contact Us
@endsection


@section('content')

    <main class="main-content padded bg-grey">
        <section class="contact-page">
            <header class="a-center color-black mobile-hor-gutter">
                <h1 class="mb-37 js-bt overflow relative skrollr-pointer" data-emit-events data-bottom-top=""><span
                        class="js-bt__el display--block"><span class="font-light font-18 bracket-icon">{</span><span
                            class="font-bold font-12 extra-l  bracket-title">CONTACT US</span><span
                            class="font-light font-18 bracket-icon">}</span></span></h1>
                <h2 class="font-70 font-thin maxw-725 m-auto mb-21 js-skew-letter skrollr-pointer" data-emit-events
                    data-trans="1.4" data-bottom-top="" data-delay=".2">
                    <SPAN>MINAS</SPAN> <SPAN>STORES</SPAN>
                </h2>
                <div class="maxw-480 font-light font-17 m-auto overflow js-skew-letter skrollr-pointer" data-delay=".25"
                     data-trans="1.4" data-emit-events data-bottom-top=""><P>DISCOVER OUR STORES AND FIND A LOCATION
                        NEAR YOU.</P></div>
            </header>
            <div class="stores-holder overflow">
                <div class="grid max-12cols-g mobile-hor-100">
                    <div class="display-flex flex-wrap">
                        @foreach($stores as $key => $store)
                            <div class="display-flex--50 display-flex tablet-hor-flex-100 tablet-hor-mb-60 mobile-hor-nomargin">
                                <div class="gutter relative block-100 mobile-hor-nomargin">
                                    <div class="fill-dimensions bg-black scale-y js-curtainY skrollr-pointer"
                                         data-emit-events data-bottom-top=""></div>
                                    <div class="over store-box color-white a-center">
                                        <h3 class="font-bold font-40 mb-5 js-bt overflow relative skrollr-pointer"
                                            data-emit-events data-bottom-top="" data-trans="1.2" data-delay=".3">
                                            <span class="js-bt__el display--block">{{$store->title}}</span>
                                        </h3>
                                        <div class="font-thin font-50 js-bt overflow relative skrollr-pointer"
                                             data-emit-events data-bottom-top="" data-trans="1.2" data-delay=".35">
                                            <div class="js-bt__el">
                                                {{$store->title}}
                                            </div>
                                        </div>
                                        <div class="font-thin font-20 store-box__info store-box__info--white opc-0  js-fade-up skrollr-pointer"
                                            data-delay=".3" data-emit-events data-bottom-top="" data-cubic="custom"
                                            data-trans="1.2">
                                            <p>{{$store->address}}<br/>
                                                {{$store->country}}<br/>
                                                {{$store->phone_number}} <br/>
                                                <a href="{{$store->email}}">
                                                    {{$store->email}}
                                                </a>
                                            </p>
                                        </div>
                                        <a href="{{route('storeDetail',['id'=>$store->id])}}" arial-label="Kifissia flagship store"
                                           class="relative store-box__img display--block" rel="noopener noreferrer">
                                            <span class="fill-dimensions bg-black multiply trans z-10 opc-0 store-box__img-bg display--block"></span>
                                            <span class="cover-img fill-dimensions display--block scale-out js-scale-in js-scale-in--sm skrollr-pointer opc-0"
                                                data-delay=".4" data-emit-events data-bottom-top="" data-trans="1.2"
                                                style="background-image: url({{isset($store->storeDescription) ? asset($store->storeDescription->rotate_image):''}}); "></span>
                                        </a>
                                        <a href="{{route('storeDetail',['id'=>$store->id])}}" arial-label="Kifissia flagship store"
                                           class="font-bold font-17 display--inline text-underline text-underline--red color-red relative store-box__link store-box__link--white overflow"
                                           rel="noopener noreferrer">
                                            <span class="js-bt overflow relative display--inline skrollr-pointer" data-delay=".4" data-emit-events data-bottom-top="">
                                                <span class="js-bt__el display--block link-underline">DISCOVER THE STORE</span>
                                            </span>
                                            <span class="line line--abs abs-bl scale-x origin-l js-scale-lr display--block skrollr-pointer"
                                                data-delay=".4" data-emit-events data-bottom-top="">
                                                <span class="fill-dimensions bg-red trans"></span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{--                        <div class="display-flex--50 display-flex">--}}
                        {{--                            <div class="gutter relative block-100 mobile-hor-gutter mobile-hor-nomargin">--}}
                        {{--                                <div class="fill-dimensions bg-white scale-y js-curtainY skrollr-pointer" data-emit-events  data-bottom-top="" data-delay=".1"></div>--}}
                        {{--                                <div class="over store-box color-black a-center">--}}
                        {{--                                    <h3 class="font-bold font-40 mb-20 js-bt overflow relative skrollr-pointer" data-emit-events  data-bottom-top="" data-trans="1.2" data-delay=".3">--}}
                        {{--                                        <span class="js-bt__el display--block">MYKONOS STORE</span>--}}
                        {{--                                    </h3>--}}
                        {{--                                    <div class="font-thin font-20 store-box__info opc-0 js-fade-up skrollr-pointer"  data-delay=".3" data-emit-events  data-bottom-top="" data-cubic="custom" data-trans="1.2"><p>AGIA KIRIAKI SQUARE <br />--}}
                        {{--                                            84600 MYKONOS TOWN<br />--}}
                        {{--                                            +30 2289027320</p>--}}
                        {{--                                        <p><a href="getintouch@minastudio.com">getintouch@minastudio.com</a></p>--}}
                        {{--                                        <p><strong>OPEN APRIL &#8211; OCTOBER</strong></p>--}}
                        {{--                                    </div>                                <a href="store.html" arial-label="Mykonos store" class="relative store-box__img display--block relative overflow" rel="noopener noreferrer">--}}

                        {{--                                        <span class="fill-dimensions bg-black multiply trans z-10 opc-0 store-box__img-bg display--block"></span>--}}
                        {{--                                        <span class="cover-img fill-dimensions display--block scale-out js-scale-in js-scale-in--sm skrollr-pointer opc-0" data-delay=".4" data-emit-events   data-bottom-top="" data-trans="1.4" style="background-image: url(images/store_mykonos-1040x585.jpg); "></span>--}}


                        {{--                                    </a>--}}
                        {{--                                    <a href="store.html" arial-label="Mykonos store" class="font-bold font-17 display--inline text-underline text-underline--red color-red relative store-box__link overflow" rel="noopener noreferrer">--}}
                        {{--                                    <span class="js-bt overflow relative display--inline skrollr-pointer" data-delay=".45" data-emit-events  data-bottom-top="">--}}
                        {{--                                        <span class="js-bt__el display--block">DISCOVER THE STORE</span>--}}
                        {{--                                </span>--}}
                        {{--                                        <span class="line line--abs abs-bl scale-x origin-l js-scale-lr display--block skrollr-pointer" data-delay=".4" data-emit-events  data-bottom-top="">--}}
                        {{--                                        <span class="fill-dimensions bg-red trans"></span>--}}
                        {{--                                    </span>--}}
                        {{--                                    </a>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="retailers" id="retailers">
                <div class="grid max-12cols-g  mobile-hor-100 overflow">
                    <div class="gutter mobile-hor-gutter">
                        <div class="retailers__header color-black m-auto maxw-777 a-center mobile-hor-nomargin">
                            <h3 class="font-bold font-40 mb-43 js-bt overflow relative skrollr-pointer" data-emit-events
                                data-bottom-top="">
                                <span class="js-bt__el display--block">
                                    LIST OF RETAILERS
                                </span>
                            </h3>
                            <div class="retailers__buttons opc-0 no-visible js-fade-in skrollr-pointer" data-emit-events
                                 data-bottom-top="" data-cubic="custom" data-trans="1.4">
                                <div class="retailers-btn mobile-hor-100 display--inline a-center trans cursor loc"
                                     data-link="#retailers-tab-1">
                                    <div class="font-bold font-25 relative retailers-btn__txt display--inline">GREECE
                                        <div class="abs-tr font-thin">(9)</div>
                                    </div>
                                </div>
                                <div class="retailers-btn mobile-hor-100 display--inline a-center trans cursor "
                                     data-link="#retailers-tab-2">
                                    <div class="font-bold font-25 relative retailers-btn__txt display--inline">
                                        INTERNATIONAL
                                        <div class="abs-tr font-thin">(2)</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="retailers__holder relative mobile-hor-pb-90">
                        <div id="retailers-tab-1" class="retailers-tab trans-slow block-100 display-flex flex-wrap ">
                            <div class="block-50 display-flex tablet-hor-med-100">
                                <div class="gutter block-100 relative">
                                    <div class="retailer-box color-black relative">
                                        <div
                                            class="font-12 extra-ls font-bold mb-20 opc-0 no-visible js-fade-left skrollr-pointer"
                                            data-emit-events data-bottom-top="" data-trans="1.4">KOLONAKI - ATHENS
                                        </div>
                                        <div class="retailer-box__details">
                                            <h4 class="font-bold font-25 mb-5 opc-0 no-visible js-fade-left skrollr-pointer"
                                                data-emit-events data-bottom-top="" data-trans="1.4" data-delay="0.1">ID
                                                CONCEPT STORES</h4>
                                            <div class="font-thin font-17 opc-0 no-visible js-fade-left skrollr-pointer"
                                                 data-emit-events data-bottom-top="" data-trans="1.4" data-delay="0.15">
                                                <P>12 KANARI &amp; SEKERI STR. <BR/>
                                                    KOLONAKI, ATHENS &#8211; GREECE <BR/>
                                                    +30 210 3221801<BR/>
                                                    <BR/>
                                                </P></div>
                                        </div>
                                    </div>
                                    <div class="line line--black line--abs abs-bl js-scale-lr skrollr-pointer"
                                         data-delay=".2" data-emit-events data-bottom-top="" data-trans="1.6"></div>
                                </div>

                            </div>
                            <div class="block-50 display-flex tablet-hor-med-100">
                                <div class="gutter block-100 relative">
                                    <div class="retailer-box color-black relative">
                                        <div
                                            class="font-12 extra-ls font-bold mb-20 opc-0 no-visible js-fade-left skrollr-pointer"
                                            data-emit-events data-bottom-top="" data-trans="1.4">GLYFADA - ATHENS
                                        </div>
                                        <div class="retailer-box__details">
                                            <h4 class="font-bold font-25 mb-5 opc-0 no-visible js-fade-left skrollr-pointer"
                                                data-emit-events data-bottom-top="" data-trans="1.4" data-delay="0.1">
                                                POGONATOS JEWELLERY</h4>
                                            <div class="font-thin font-17 opc-0 no-visible js-fade-left skrollr-pointer"
                                                 data-emit-events data-bottom-top="" data-trans="1.4" data-delay="0.15">
                                                <P>33, AGGELOU METAXA AVE.<BR/>
                                                    GLYFADA, ATHENS, GREECE<BR/>
                                                    +30 2108943116</P></div>
                                        </div>
                                    </div>
                                    <div class="line line--black line--abs abs-bl js-scale-lr skrollr-pointer"
                                         data-delay=".2" data-emit-events data-bottom-top="" data-trans="1.6"></div>
                                </div>

                            </div>
                            <div class="block-50 display-flex tablet-hor-med-100">
                                <div class="gutter block-100 relative">
                                    <div class="retailer-box color-black relative">
                                        <div
                                            class="font-12 extra-ls font-bold mb-20 opc-0 no-visible js-fade-left skrollr-pointer"
                                            data-emit-events data-bottom-top="" data-trans="1.4">NAOUSA - PAROS
                                        </div>
                                        <div class="retailer-box__details">
                                            <h4 class="font-bold font-25 mb-5 opc-0 no-visible js-fade-left skrollr-pointer"
                                                data-emit-events data-bottom-top="" data-trans="1.4" data-delay="0.1">
                                                SERKOS ISLAND</h4>
                                            <div class="font-thin font-17 opc-0 no-visible js-fade-left skrollr-pointer"
                                                 data-emit-events data-bottom-top="" data-trans="1.4" data-delay="0.15">
                                                <P>PAROS, NAOUSA, AGIOS DIMITRIOS</P>
                                                <P>KOIMISEOS THEOTOKOU</P>
                                                <P>+30 2284052349</P></div>
                                        </div>
                                    </div>
                                    <div class="line line--black line--abs abs-bl js-scale-lr skrollr-pointer"
                                         data-delay=".2" data-emit-events data-bottom-top="" data-trans="1.6"></div>
                                </div>

                            </div>
                            <div class="block-50 display-flex tablet-hor-med-100">
                                <div class="gutter block-100 relative">
                                    <div class="retailer-box color-black relative">
                                        <div
                                            class="font-12 extra-ls font-bold mb-20 opc-0 no-visible js-fade-left skrollr-pointer"
                                            data-emit-events data-bottom-top="" data-trans="1.4">SPETSES
                                        </div>
                                        <div class="retailer-box__details">
                                            <h4 class="font-bold font-25 mb-5 opc-0 no-visible js-fade-left skrollr-pointer"
                                                data-emit-events data-bottom-top="" data-trans="1.4" data-delay="0.1">
                                                ARTION GALLERIES</h4>
                                            <div class="font-thin font-17 opc-0 no-visible js-fade-left skrollr-pointer"
                                                 data-emit-events data-bottom-top="" data-trans="1.4" data-delay="0.15">
                                                <DIV CLASS="TEXT-COLUMNS">
                                                    <DIV CLASS="TEXT-COLUMNS">
                                                        <P>POSEIDONION GRAND HOTEL</P>
                                                        <P>DAPIA, SPETSES, GREECE<BR/>
                                                            +30 6940 308741</P>
                                                    </DIV>
                                                </DIV>
                                                <P></P></div>
                                        </div>
                                    </div>
                                    <div class="line line--black line--abs abs-bl js-scale-lr skrollr-pointer"
                                         data-delay=".2" data-emit-events data-bottom-top="" data-trans="1.6"></div>
                                </div>

                            </div>
                            <div class="block-50 display-flex tablet-hor-med-100">
                                <div class="gutter block-100 relative">
                                    <div class="retailer-box color-black relative">
                                        <div
                                            class="font-12 extra-ls font-bold mb-20 opc-0 no-visible js-fade-left skrollr-pointer"
                                            data-emit-events data-bottom-top="" data-trans="1.4">MYKONOS
                                        </div>
                                        <div class="retailer-box__details">
                                            <h4 class="font-bold font-25 mb-5 opc-0 no-visible js-fade-left skrollr-pointer"
                                                data-emit-events data-bottom-top="" data-trans="1.4" data-delay="0.1">
                                                JACKIE O’ BOUTIQUE</h4>
                                            <div class="font-thin font-17 opc-0 no-visible js-fade-left skrollr-pointer"
                                                 data-emit-events data-bottom-top="" data-trans="1.4" data-delay="0.15">
                                                <P>SUPER PARADISE BEACH <BR/>
                                                    MYKONOS, GREECE <BR/>
                                                    +30 22890 77266</P></div>
                                        </div>
                                    </div>
                                    <div class="line line--black line--abs abs-bl js-scale-lr skrollr-pointer"
                                         data-delay=".2" data-emit-events data-bottom-top="" data-trans="1.6"></div>
                                </div>

                            </div>
                            <div class="block-50 display-flex tablet-hor-med-100">
                                <div class="gutter block-100 relative">
                                    <div class="retailer-box color-black relative">
                                        <div
                                            class="font-12 extra-ls font-bold mb-20 opc-0 no-visible js-fade-left skrollr-pointer"
                                            data-emit-events data-bottom-top="" data-trans="1.4">HALKIDIKI
                                        </div>
                                        <div class="retailer-box__details">
                                            <h4 class="font-bold font-25 mb-5 opc-0 no-visible js-fade-left skrollr-pointer"
                                                data-emit-events data-bottom-top="" data-trans="1.4" data-delay="0.1">
                                                GOFAS JEWELLERY &#8211; SANI BEACH</h4>
                                            <div class="font-thin font-17 opc-0 no-visible js-fade-left skrollr-pointer"
                                                 data-emit-events data-bottom-top="" data-trans="1.4" data-delay="0.15">
                                                <P>SANI BEACH RESORT MARINA<BR/>
                                                    KASSANDRA &#8211; HALKIDIKI<BR/>
                                                    +30 2374099501</P></div>
                                        </div>
                                    </div>
                                    <div class="line line--black line--abs abs-bl js-scale-lr skrollr-pointer"
                                         data-delay=".2" data-emit-events data-bottom-top="" data-trans="1.6"></div>
                                </div>

                            </div>
                            <div class="block-50 display-flex tablet-hor-med-100">
                                <div class="gutter block-100 relative">
                                    <div class="retailer-box color-black relative">
                                        <div
                                            class="font-12 extra-ls font-bold mb-20 opc-0 no-visible js-fade-left skrollr-pointer"
                                            data-emit-events data-bottom-top="" data-trans="1.4">THESSALONIKI
                                        </div>
                                        <div class="retailer-box__details">
                                            <h4 class="font-bold font-25 mb-5 opc-0 no-visible js-fade-left skrollr-pointer"
                                                data-emit-events data-bottom-top="" data-trans="1.4" data-delay="0.1">
                                                GOFAS JEWELLERY</h4>
                                            <div class="font-thin font-17 opc-0 no-visible js-fade-left skrollr-pointer"
                                                 data-emit-events data-bottom-top="" data-trans="1.4" data-delay="0.15">
                                                <P>ELECTRA PALACE<BR/>
                                                    ARISTOTELOUS 9 &#8211; THESSALONIKI<BR/>
                                                    +30 2310279703</P></div>
                                        </div>
                                    </div>
                                    <div class="line line--black line--abs abs-bl js-scale-lr skrollr-pointer"
                                         data-delay=".2" data-emit-events data-bottom-top="" data-trans="1.6"></div>
                                </div>

                            </div>
                            <div class="block-50 display-flex tablet-hor-med-100">
                                <div class="gutter block-100 relative">
                                    <div class="retailer-box color-black relative">
                                        <div
                                            class="font-12 extra-ls font-bold mb-20 opc-0 no-visible js-fade-left skrollr-pointer"
                                            data-emit-events data-bottom-top="" data-trans="1.4">HYDRA
                                        </div>
                                        <div class="retailer-box__details">
                                            <h4 class="font-bold font-25 mb-5 opc-0 no-visible js-fade-left skrollr-pointer"
                                                data-emit-events data-bottom-top="" data-trans="1.4" data-delay="0.1">
                                                GRECO GOLD</h4>
                                            <div class="font-thin font-17 opc-0 no-visible js-fade-left skrollr-pointer"
                                                 data-emit-events data-bottom-top="" data-trans="1.4" data-delay="0.15">
                                                <P>Α &amp; Ι KERAMIDAS Ο.Ε.<BR/>
                                                    HYDRA TOWN, GREECE<BR/>
                                                    +30 2298053012</P></div>
                                        </div>
                                    </div>
                                    <div class="line line--black line--abs abs-bl js-scale-lr skrollr-pointer"
                                         data-delay=".2" data-emit-events data-bottom-top="" data-trans="1.6"></div>
                                </div>

                            </div>
                            <div class="block-50 display-flex tablet-hor-med-100">
                                <div class="gutter block-100 relative">
                                    <div class="retailer-box color-black relative">
                                        <div
                                            class="font-12 extra-ls font-bold mb-20 opc-0 no-visible js-fade-left skrollr-pointer"
                                            data-emit-events data-bottom-top="" data-trans="1.4">RHODES
                                        </div>
                                        <div class="retailer-box__details">
                                            <h4 class="font-bold font-25 mb-5 opc-0 no-visible js-fade-left skrollr-pointer"
                                                data-emit-events data-bottom-top="" data-trans="1.4" data-delay="0.1">
                                                KOUNAKIS</h4>
                                            <div class="font-thin font-17 opc-0 no-visible js-fade-left skrollr-pointer"
                                                 data-emit-events data-bottom-top="" data-trans="1.4" data-delay="0.15">
                                                <P>103 SOCRATOUS STR. <BR/>
                                                    OLD TOWN – RHODES, GREECE <BR/>
                                                    +30 22410 35554</P></div>
                                        </div>
                                    </div>
                                    <div class="line line--black line--abs abs-bl js-scale-lr skrollr-pointer"
                                         data-delay=".2" data-emit-events data-bottom-top="" data-trans="1.6"></div>
                                </div>

                            </div>
                        </div>
                        <div id="retailers-tab-2"
                             class="retailers-tab trans-slow block-100 display-flex flex-wrap opc-0 no-visible abs-tl">
                            <div class="block-50 display-flex tablet-hor-med-100">
                                <div class="gutter block-100 relative">
                                    <div class="retailer-box color-black relative">
                                        <div
                                            class="font-12 extra-ls font-bold mb-20 opc-0 no-visible js-fade-left skrollr-pointer"
                                            data-emit-events data-bottom-top="" data-trans="1.4">AZERBAIJAN
                                        </div>
                                        <div class="retailer-box__details">
                                            <h4 class="font-bold font-25 mb-5 opc-0 no-visible js-fade-left skrollr-pointer"
                                                data-emit-events data-bottom-top="" data-trans="1.4" data-delay="0.1">
                                                SOROKA CONCEPT STORE</h4>
                                            <div class="font-thin font-17 opc-0 no-visible js-fade-left skrollr-pointer"
                                                 data-emit-events data-bottom-top="" data-trans="1.4" data-delay="0.15">
                                                <P>93 NIZAMI STREET<BR/>
                                                    BAKU, AZERBAIJAN<BR/>
                                                    +994 77 277 33 16</P></div>
                                        </div>
                                    </div>
                                    <div class="line line--black line--abs abs-bl js-scale-lr skrollr-pointer"
                                         data-delay=".2" data-emit-events data-bottom-top="" data-trans="1.6"></div>
                                </div>

                            </div>
                            <div class="block-50 display-flex tablet-hor-med-100">
                                <div class="gutter block-100 relative">
                                    <div class="retailer-box color-black relative">
                                        <div
                                            class="font-12 extra-ls font-bold mb-20 opc-0 no-visible js-fade-left skrollr-pointer"
                                            data-emit-events data-bottom-top="" data-trans="1.4">GERMANY
                                        </div>
                                        <div class="retailer-box__details">
                                            <h4 class="font-bold font-25 mb-5 opc-0 no-visible js-fade-left skrollr-pointer"
                                                data-emit-events data-bottom-top="" data-trans="1.4" data-delay="0.1">KK
                                                KIEZ KABINETT</h4>
                                            <div class="font-thin font-17 opc-0 no-visible js-fade-left skrollr-pointer"
                                                 data-emit-events data-bottom-top="" data-trans="1.4" data-delay="0.15">
                                                <P>56 WINTERFELDT STR.<BR/>
                                                    BERLIN- SCHONEBERG, GERMANY <BR/>
                                                    +49 1735915084</P></div>
                                        </div>
                                    </div>
                                    <div class="line line--black line--abs abs-bl js-scale-lr skrollr-pointer"
                                         data-delay=".2" data-emit-events data-bottom-top="" data-trans="1.6"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative pt-142 pb-173 tablet-hor-pb-100 mobile-hor-pt-90">
                <div class="fill-dimensions bg-white"></div>
                <div class="grid max-8cols-g over color-black mobile-hor-100">
                    <div class="font-bold font-40 color-black mb-63 a-center js-bt overflow relative skrollr-pointer"
                         data-emit-events data-bottom-top="">
                        <div class="js-bt__el">SUBMIT YOUR REQUEST</div>
                    </div>
                    <div class="opc-0 no-visible js-fade-in skrollr-pointer" data-emit-events data-bottom-top=""
                         data-cubic="custom" data-trans="1.6">
                        <div role="form" class="wpcf7" id="wpcf7-f503-p300-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <form action="/contact-us/#wpcf7-f503-p300-o1" method="post"
                                  class="wpcf7-form wpcf7-acceptance-as-validation" novalidate="novalidate">
                                <div style="display: none;">
                                    <input type="hidden" name="_wpcf7" value="503"/>
                                    <input type="hidden" name="_wpcf7_version" value="5.1.4"/>
                                    <input type="hidden" name="_wpcf7_locale" value="en_US"/>
                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f503-p300-o1"/>
                                    <input type="hidden" name="_wpcf7_container_post" value="300"/>
                                    <input type="hidden" name="g-recaptcha-response" value=""/>
                                </div>
                                <div class="mb-156  a-center form-radio-holder">

                                    <span class="wpcf7-form-control-wrap radio-214"><span
                                            class="wpcf7-form-control wpcf7-radio radio"><span
                                                class="wpcf7-list-item first"><label><span
                                                        class="wpcf7-list-item-label">BECOME A RETAILER</span><input
                                                        type="radio" name="radio-214" value="BECOME A RETAILER"
                                                        checked="checked"/></label></span><span
                                                class="wpcf7-list-item last"><label><span class="wpcf7-list-item-label">GENERAL INQUIRY</span><input
                                                        type="radio" name="radio-214" value="GENERAL INQUIRY"/></label></span></span></span>
                                </div>
                                <div class="form-field block-50 mobile-hor-100 display--inline-top">
                                    <div class="gutter">
                                        <div class="form-field__inner a-left maxw-500 m-auto a-left mb-24">
                                            <label class="font-bold font-17 extra-ls extra-lh display--block"
                                                   for="contact_name">FULL NAME<span
                                                    class="color-red ml-3">*</span></label>

                                            <span class="wpcf7-form-control-wrap full_name"><input type="text"
                                                                                                   name="full_name"
                                                                                                   value="" size="40"
                                                                                                   class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input required pb-50 maxw-500 block-100 m-auto font-25 extra-lh font-light"
                                                                                                   id="contact_name"
                                                                                                   aria-required="true"
                                                                                                   aria-invalid="false"/></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-field block-50 mobile-hor-100 display--inline-top">
                                    <div class="gutter">
                                        <div class="form-field__inner a-left maxw-500 m-auto a-left mb-24">
                                            <label class="font-bold font-17 extra-ls extra-lh display--block"
                                                   for="form-email">EMAIL<span class="color-red">*</span></label>
                                            <span class="wpcf7-form-control-wrap your-email"><input type="email"
                                                                                                    name="your-email"
                                                                                                    value="" size="40"
                                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email input required email font-25 pb-50 extra-lh font-light"
                                                                                                    id="form-email"
                                                                                                    aria-required="true"
                                                                                                    aria-invalid="false"/></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-field block-50 mobile-hor-100 display--inline-top">
                                    <div class="gutter">
                                        <div class="form-field__inner a-left maxw-500 m-auto a-left mb-24">
                                            <label class="font-bold font-17 extra-ls extra-lh display--block"
                                                   for="form-company">COMPANY</label>
                                            <span class="wpcf7-form-control-wrap company"><input type="text"
                                                                                                 name="company" value=""
                                                                                                 size="40"
                                                                                                 class="wpcf7-form-control wpcf7-text input font-25 extra-lh font-light pb-50"
                                                                                                 id="form-company"
                                                                                                 aria-invalid="false"/></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-field block-50 mobile-hor-100 display--inline-top">
                                    <div class="gutter">
                                        <div class="form-field__inner a-left maxw-500 m-auto a-left mb-24">
                                            <label class="font-bold font-17 extra-ls extra-lh display--block"
                                                   for="form-country">COUNTRY</label>
                                            <span class="wpcf7-form-control-wrap country"><input type="text"
                                                                                                 name="country" value=""
                                                                                                 size="40"
                                                                                                 class="wpcf7-form-control wpcf7-text input font-25 extra-lh font-light pb-50"
                                                                                                 id="form-country"
                                                                                                 aria-invalid="false"/></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-field block-50 mobile-hor-100 display--inline-top">
                                    <div class="gutter">
                                        <div class="form-field__inner a-left maxw-500 m-auto a-left mb-24">
                                            <label class="font-bold font-17 extra-ls extra-lh display--block"
                                                   for="form-website">WEBSITE</label>
                                            <span class="wpcf7-form-control-wrap website"><input type="text"
                                                                                                 name="website" value=""
                                                                                                 size="40"
                                                                                                 class="wpcf7-form-control wpcf7-text input font-25 extra-lh font-light pb-50"
                                                                                                 id="form-website"
                                                                                                 aria-invalid="false"/></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-100 pt-45 policy-holder">
                                    <div class="gutter textarea-holder relative">
                                        <label class="font-bold font-17 extra-ls extra-lh abs-tl textarea-label"
                                               for="country">YOUR COMMENTS</label>
                                        <span class="wpcf7-form-control-wrap comments"><textarea name="comments"
                                                                                                 cols="40" rows="10"
                                                                                                 class="wpcf7-form-control wpcf7-textarea textarea"
                                                                                                 aria-invalid="false"></textarea></span>
                                    </div>
                                </div>


                                <div class="block-100 pt-60 policy-holder">
                                    <div class="gutter relative mb-96 a-center">

                                        <div class="font-light font-16 ns-policy pt-17 mb-26">Βy submitting your
                                            request, you agree to the <a
                                                href="https://www.kommigraphics.com/en/privacy-policy/" target="_blank"
                                                rel="noopener">Privacy Policy</a> and <a
                                                href="https://www.kommigraphics.com/privacy-policy/" target="_blank"
                                                rel="noopener">Terms & Conditions</a>
                                        </div>

                                        <span class="relative chk-holder form-chk-holder">
                    <span class="display-block form-acceptance">
                    <label
                        class="chk-label display--inline trans over font-bold font-12 extra-ls extra-lh3 color-black clickable"
                        for="acceptance-322">I AGREE WITH THE ABOVE TERMS</label>
                   <span class="wpcf7-form-control-wrap acceptance-322"><span
                           class="wpcf7-form-control wpcf7-acceptance"><span class="wpcf7-list-item"><input
                                   type="checkbox" name="acceptance-322" value="1" aria-invalid="false"
                                   class="chk-box trans abs-tl icon icon--check display--inline"
                                   id="acceptance-322"/></span></span></span>
</span>
                </span>
                                    </div>
                                </div>

                                <div class="a-center">
<span class="circle-btn relative cursor display--inline circle-link">

   <span class="circle-btn circle-btn--black cursor relative display--inline circle-link">

      <span class="circle-btn circle-btn--black relative cursor display--inline circle-link">
       <svg class="circle-btn__wrapper-circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 151.689 148.568">
           <path class="js-svg-circle" fill="none" stroke="#000" stroke-width="1" stroke-miterlimit="10" d="M75.845,145.15
           c-39.139,0-70.867-31.728-70.867-70.866S36.706,3.418,75.845,3.418c39.138,0,70.866,31.728,70.866,70.866
           S114.983,145.15,75.845,145.15"/>

           <path class="js-stretched" fill="none" opacity="0" stroke="#000" stroke-width="1" stroke-miterlimit="10"
                 d="M113.228 5.526a10.122 10.122 0 0 0-.672-.479c-10.217-6.64-24.534-3.415-35.743-2.101-7.854.92-15.701 2.125-23.366 4.098-13.122 3.376-25.936 9.011-35.57 18.785C.454 43.503-2.653 70.782 4.779 93.701c12.587 38.817 65.455 69.188 104.126 47.793 18.448-10.207 31.242-31.346 37.575-50.686 3.17-9.681 6.398-20.775 4.775-31.049-1.498-9.484-7.574-16.885-13.6-23.975-6.826-8.031-12.545-16.946-19.49-24.863-1.588-1.81-3.064-3.941-4.937-5.395z"/>

           <path class="js-stretched-2" fill="none" stroke="#000" opacity="0" stroke-miterlimit="10" d="M107.309,4.917c-0.223-0.148-0.452-0.288-0.686-0.417
           C96.241-1.223,82.575,2.916,71.792,4.98c-7.556,1.447-15.087,3.17-22.385,5.624C36.912,14.805,24.875,21.176,16.215,31.34
           C0.555,49.718-0.537,76.407,8.292,98.124c3.569,8.781,8.526,22.413,15.723,29.416c13.605,13.24,33.127,13.928,51.836,15.442
           c12.843,1.04,25.689,1.455,36.85-5.824c17.182-11.205,28.106-32.619,32.887-51.832c2.394-9.617,4.744-20.611,2.446-30.465
           c-2.123-9.098-8.54-15.85-14.888-22.307c-7.189-7.311-13.368-15.558-20.665-22.752C110.812,8.158,109.23,6.196,107.309,4.917z"/>
       </svg>
<input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit transparent-button"/>
       <span class="abs-center a-center z--1 block-70 extra-ls font-bold font-12 extra-ls extra-lh">
         SUBMIT YOUR REQUEST
       </span>

       </span>
   </span>
</span></div>
                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </section>
    </main>



@endsection
