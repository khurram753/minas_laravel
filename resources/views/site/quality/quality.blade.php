@extends('layout.front-layout.app')

@section('title')
    MINAS - Quality And Craftsmanship
@endsection

@section('content')

    <main class="main-content" id="content">
        <div class="fill-dimensions bg-black"></div>
        <div class="grid max-8cols-g over pt-113 mobile-hor-100 overflow">
            <div class="m-auto maxw-570 a-center mb-100">
                <h3 class="color-white mb-35 js-bt overflow relative skrollr-pointer" data-emit-events data-bottom-top="">
                     <span class="js-bt__el display--block">
                        <span class="font-light font-18 bracket-icon">{</span>
                         <span class="font-bold font-12 extra-l  bracket-title">ABOUT MINAS</span>
                         <span class="font-light font-18 bracket-icon">}</span>
                     </span>
                </h3>
                <h1 class="font-thin font-70 extra-lh color-grey js-skew-letter skrollr-pointer" data-emit-events
                    data-trans="1.4" data-bottom-top="">{{$data->title}}</h1>
            </div>
            <div class="mb-144 mobile-hor-mb-90">
                <div class="block-50 display--inline-top a-center trans tablet-100">
                    <div class="gutter mobile-hor-gutter">
                        <div class="display--inline relative overflow js-img-reveal skrollr-pointer overflow"
                             data-emit-events data-bottom-top="" data-trans="1.3">
                            <div class="js-img-reveal__holder overflow">
                                <div class="js-img-reveal__image">
                                    <div class="fill-dimensions multiply bg-grey-med opc-20 z-10"></div>
                                    <div class="bg-gradient fill-dimensions"></div>
                                    <img class="resp-image" src="{{asset($data->header_image)}}"
                                         alt="Minas Designs-about minas ?>"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-50 display--inline-top trans tablet-100">
                    <div class="gutter mobile-hor-gutter">
                        <div class="maxw-370 pt-42p tablet-m-auto tablet-pt-50 tablet-center">
                            <h2 class="font-bold font-25 color-white mb-43 js-fade-left opc-0 no-visible skrollr-pointer"
                                data-emit-events data-bottom-top="" data-trans="1.4" data-delay=".15" data-ease="custom">
                                {{$data->description}}
                            </h2>
                            <div class="a-left pt-16 opc-0 no-visible js-fade-in skrollr-pointer tablet-center mobile-hor-mt-60"
                                data-emit-events data-bottom-top="" data-cubic="custom" data-trans="1.6">
                                <span class="circle-btn relative cursor display--inline circle-link scroll-to" data-target="#section-gallery">
                                    <svg class="circle-btn__wrapper-circle"
                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 151.689 148.568">
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
                                        DISCOVER THE PROCESS
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        @include('site.quality.section.process')
    </main>

@endsection


@section('script')
    <script type='text/javascript' defer src='{{asset('site/js/hammer.min.js')}}'></script>
    <script type='text/javascript' defer src='{{asset('site/js/jquery-gsapSlider.js')}}'></script>
@endsection
