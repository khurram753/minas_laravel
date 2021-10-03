@extends('layout.front-layout.app')

@section('title')
    {{env('APP_NAME')}} - Project Detail
@endsection

@section('style')
    <style>
        .gallery-images{
            float: left;
        }
    </style>
@endsection

@section('content')
    <main class="main-content post-project">
        <section class="full-height relative overflow mobile-hor-height-100 mobile-hor-padded">
            <div class="fill-dimensions multiply bg-black opc-70 z-10"></div>
            <div class="cover-img fill-dimensions scale-out js-scale-in js-scale-in--sm opc-0 parallax skrollable skrollable-after loc"
                data-parallax="-0.5" data-emit-events="" data-cubic="custom" data-bottom-top="" data-trans="1.6"
                style="background-image: url({{asset($data->featured_image)}}); opacity: 1; transform-origin: center center 0px; transform: matrix(1, 0, 0, 1, 0, 0);"></div>
            <div class="grid max-6cols-g full-height over mobile-hor-100 mobile-hor-height-100">
                <div class="gutter full-height mobile-hor-gutter mobile-hor-height-100">
                    <header class="a-center store-page__header relative mobile-hor-rel-no-center">
                        <div class="mb-43 js-bt overflow relative skrollr-pointer skrollable skrollable-after loc"
                             data-emit-events="" data-bottom-top="" style="">
                            <div class="js-bt__el" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"><span
                                    class="font-light font-18 bracket-icon">{</span><span
                                    class="font-bold font-12 extra-l  bracket-title">PROJECT</span><span
                                    class="font-light font-18 bracket-icon">}</span></div>
                        </div>
                        <h1 class="font-70 font-thin m-auto desktop-md-maxw-500 content-hr content-hr--white mb-24 js-skew-letter skrollr-pointer skrollable skrollable-after loc"
                            data-emit-events="" data-trans="1.4" data-bottom-top="" data-delay=".2"
                            style="visibility: inherit; opacity: 1; transform: matrix(1.00137, 0, 0, 1, 0, 0);">
                            {{$data->name}} </h1>
{{--                        <h2 class="font-20 font-light maxw-555 m-auto mb-86 js-skew-letter skrollr-pointer skrollable skrollable-after loc"--}}
{{--                            data-emit-events="" data-trans="1.4" data-bottom-top="" data-delay=".15"--}}
{{--                            style="visibility: inherit; opacity: 1; transform: matrix(1.00137, 0, 0, 1, 0, 0);">A--}}
{{--                            MINIMALISTIC DESIGN THAT ENCAPSULATES THE GREEK DESIGN ESTHETIC AND MINAS UNIQUE--}}
{{--                            PERSPECTIVE.</h2>--}}
                        <div class="opc-0 js-fade-up skrollr-pointer mobile-hor-hidden skrollable skrollable-after loc"
                             data-emit-events="" data-bottom-top="" data-cubic="custom" data-trans="1.6" data-delay=".3"
                             style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                            <span class="circle-btn relative cursor display--inline circle-link scroll-to" data-target="#section-2">
                                <svg class="circle-btn__wrapper-circle"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 151.689 148.568">
                <path class="js-svg-circle circle-btn__circle" fill="none" stroke="#fff" stroke-width="1"
                      stroke-miterlimit="10" d="M75.845,145.15
            c-39.139,0-70.867-31.728-70.867-70.866S36.706,3.418,75.845,3.418c39.138,0,70.866,31.728,70.866,70.866
            S114.983,145.15,75.845,145.15" data-original="M75.845,145.15
            c-39.139,0-70.867-31.728-70.867-70.866S36.706,3.418,75.845,3.418c39.138,0,70.866,31.728,70.866,70.866
            S114.983,145.15,75.845,145.15" style="opacity: 1;"></path>
                <path class="js-stretched" fill="none" opacity="0" stroke="#fff" stroke-width="1" stroke-miterlimit="10"
                      d="M113.228 5.526a10.122 10.122 0 0 0-.672-.479c-10.217-6.64-24.534-3.415-35.743-2.101-7.854.92-15.701 2.125-23.366 4.098-13.122 3.376-25.936 9.011-35.57 18.785C.454 43.503-2.653 70.782 4.779 93.701c12.587 38.817 65.455 69.188 104.126 47.793 18.448-10.207 31.242-31.346 37.575-50.686 3.17-9.681 6.398-20.775 4.775-31.049-1.498-9.484-7.574-16.885-13.6-23.975-6.826-8.031-12.545-16.946-19.49-24.863-1.588-1.81-3.064-3.941-4.937-5.395z"></path>
                <path class="js-stretched-2" fill="none" stroke="#ffffff" opacity="0" stroke-miterlimit="10" d="M107.309,4.917c-0.223-0.148-0.452-0.288-0.686-0.417
            C96.241-1.223,82.575,2.916,71.792,4.98c-7.556,1.447-15.087,3.17-22.385,5.624C36.912,14.805,24.875,21.176,16.215,31.34
            C0.555,49.718-0.537,76.407,8.292,98.124c3.569,8.781,8.526,22.413,15.723,29.416c13.605,13.24,33.127,13.928,51.836,15.442
            c12.843,1.04,25.689,1.455,36.85-5.824c17.182-11.205,28.106-32.619,32.887-51.832c2.394-9.617,4.744-20.611,2.446-30.465
            c-2.123-9.098-8.54-15.85-14.888-22.307c-7.189-7.311-13.368-15.558-20.665-22.752C110.812,8.158,109.23,6.196,107.309,4.917z"></path>
            </svg>
                                <span class="abs-center a-center z-5 font-12 extra-ls extra-lh2 font-bold block-70">
                                    DISCOVER THE PROJECT
                                </span>
                            </span>
                        </div>
                    </header>
                </div>
            </div>
            <div class="fill-dimensions abs-bl  height-50-v bg-gradient-bt mobile-hor-hidden"></div>
        </section>

        <div id="section-2" class="relative pt-50 overflow">
            <div class="fill-dimensions bg-black"></div>
            <div class="z-20 relative">
                @if($data->video)
                    @include('site.project.section.video_section')
                @endif
                <section class="grid max-8cols-g over mb-230 mobile-hor-100 mobile-hor-nomargin tablet-hor-mb-125">
                    {!! $data->description !!}
                </section>

                <section class="grid max-12cols-g">

                    @include('site.project.section.gallery_section')


{{--                    <div class="block-100 maxw-1040 mt-80 tablet-nomargin--top display--inline-top a-center mb-144 mobile-hor-mb-90">--}}
{{--                        <div class="gutter">--}}
{{--                            <div data-goto="2" data-id="461"--}}
{{--                                 class="display--inline-top relative mb-22 gallery-image js-open-slider cursor">--}}
{{--                                <div class="relative">--}}
{{--                                    <div--}}
{{--                                        class="display-inline relative js-scale-out overflow skrollable loc skrollable-before"--}}
{{--                                        data-emit-events="" data-bottom-top="" style="">--}}
{{--                                        <div class="block-100 js-scale-out__holder opc-0 no-visible overflow"--}}
{{--                                             style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">--}}
{{--                                            <div class="js-scale-out__img" style="transform: matrix(1, 0, 0, 1, 0, 0);">--}}
{{--                                                <div--}}
{{--                                                    class="fill-dimensions trans multiply bg-grey-med opc-20 z-10"></div>--}}

{{--                                                <img class="resp-image display--block"--}}
{{--                                                     src="https://www.minas-designs.com/wp-content/uploads/cycladi-stool-minas-gallery-2-1020x676.jpg"--}}
{{--                                                     alt="cycladic stool rear view">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="maxw-435 m-auto">--}}
{{--                                <div--}}
{{--                                    class="font-bold font-12 extra-ls extra-lh3 mb-20 opc-0 no-visible js-fade-left skrollr-pointer skrollable skrollable-before"--}}
{{--                                    data-emit-events="" data-bottom-top="" data-trans="1.4" style="">--}}
{{--                                    APR. 1994--}}
{{--                                </div>--}}
{{--                                <div--}}
{{--                                    class="font-bold font-25 mb-9 opc-0 no-visible js-fade-left skrollr-pointer skrollable skrollable-before"--}}
{{--                                    data-emit-events="" data-bottom-top="" data-trans="1.4" data-delay=".1" style="">--}}
{{--                                    CYCLADIC STOOL REAR VIEW--}}
{{--                                </div>--}}
{{--                                <div--}}
{{--                                    class="font-light font-20 extra-ls opc-0 no-visible js-fade-left skrollr-pointer skrollable skrollable-before"--}}
{{--                                    data-emit-events="" data-bottom-top="" data-trans="1.4" data-delay=".15" style="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="a-center mb-134">--}}
{{--                        <span data-id="461" class="js-open-slider display--inline cursor opc-0 no-visible js-fade-in skrollr-pointer skrollable skrollable-before"--}}
{{--                              data-emit-events="" data-bottom-top="" data-cubic="custom" data-trans="1.6" style="">--}}
{{--                            <span class="circle-btn relative cursor display--inline circle-link">--}}
{{--                                <svg class="circle-btn__wrapper-circle" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                        viewBox="0 0 151.689 148.568">--}}
{{--            <path class="js-svg-circle circle-btn__circle" fill="none" stroke="#fff" stroke-width="1"--}}
{{--                  stroke-miterlimit="10" d="M75.845,145.15--}}
{{--		c-39.139,0-70.867-31.728-70.867-70.866S36.706,3.418,75.845,3.418c39.138,0,70.866,31.728,70.866,70.866--}}
{{--		S114.983,145.15,75.845,145.15"></path>--}}
{{--            <path class="js-stretched" fill="none" opacity="0" stroke="#fff" stroke-width="1" stroke-miterlimit="10"--}}
{{--                  d="M113.228 5.526a10.122 10.122 0 0 0-.672-.479c-10.217-6.64-24.534-3.415-35.743-2.101-7.854.92-15.701 2.125-23.366 4.098-13.122 3.376-25.936 9.011-35.57 18.785C.454 43.503-2.653 70.782 4.779 93.701c12.587 38.817 65.455 69.188 104.126 47.793 18.448-10.207 31.242-31.346 37.575-50.686 3.17-9.681 6.398-20.775 4.775-31.049-1.498-9.484-7.574-16.885-13.6-23.975-6.826-8.031-12.545-16.946-19.49-24.863-1.588-1.81-3.064-3.941-4.937-5.395z"></path>--}}
{{--            <path class="js-stretched-2" fill="none" stroke="#ffffff" opacity="0" stroke-miterlimit="10" d="M107.309,4.917c-0.223-0.148-0.452-0.288-0.686-0.417--}}
{{--		C96.241-1.223,82.575,2.916,71.792,4.98c-7.556,1.447-15.087,3.17-22.385,5.624C36.912,14.805,24.875,21.176,16.215,31.34--}}
{{--		C0.555,49.718-0.537,76.407,8.292,98.124c3.569,8.781,8.526,22.413,15.723,29.416c13.605,13.24,33.127,13.928,51.836,15.442--}}
{{--		c12.843,1.04,25.689,1.455,36.85-5.824c17.182-11.205,28.106-32.619,32.887-51.832c2.394-9.617,4.744-20.611,2.446-30.465--}}
{{--		c-2.123-9.098-8.54-15.85-14.888-22.307c-7.189-7.311-13.368-15.558-20.665-22.752C110.812,8.158,109.23,6.196,107.309,4.917z"></path>--}}
{{--        </svg>--}}
{{--                                <span class="abs-center a-center z-5 font-12 extra-ls extra-lh2 font-bold block-70">--}}
{{--                                    VIEW GALLERY--}}
{{--                                    <span class="color-grey display--block">({{sizeof($data->projectGallery)}} PHOTOS)</span>--}}
{{--                                </span>--}}
{{--                            </span>--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="a-center mb-200 mobile-hor-mb-90 opc-0 no-visible js-fade-in skrollr-pointer skrollable skrollable-before"--}}
{{--                        data-emit-events="" data-bottom-top="" data-cubic="custom" data-trans="1.6" style="">--}}
{{--                        <span id="open-form-popup" class="font-light font-25 extra-lh display--inline point-button relative cursor trans">--}}
{{--                            POINT OF INTEREST--}}
{{--                            <span class="icon icon--arrows-thick-right point-icon abs-rc"></span>--}}
{{--                        </span>--}}
{{--                    </div>--}}

                </section>
                <section class="relative">
                    <div class="fill-dimensions bg-grey"></div>
                    <div class="grid max-12cols-g over mobile-hor-100">
                        <div class="color-black a-center pt-57 mb-118 mobile-hor-pt-90 mobile-hor-mb-90 js-bt overflow relative skrollr-pointer skrollable skrollable-before"
                            data-delay=".1" data-emit-events="" data-bottom-top="" style="">
                            <div class="js-bt__el display--block">
                                <span class="font-light font-18 bracket-icon">{</span><span
                                    class="font-bold font-12 extra-l  bracket-title">RELATED PROJECTS</span>
                                <span class="font-light font-18 bracket-icon">}</span></div>
                        </div>

                        <div class="a-center">
                            <div class="line bg-dark-grey scale-x origin-c js-scale-lr skrollr-pointer skrollable skrollable-before"
                                data-emit-events="" data-bottom-top="" data-cubic="custom" data-trans="1.3"
                                style=""></div>
                            <div class="project-block relative pt-30 pb-79 mobile-hor-nopad--bottom">
                                <article class="block-33 tablet-hor-50 tablet-100 mb-118 display--inline-top a-center mobile-hor-mb-90" itemscope="" itemtype="http://schema.org/CreativeWork">
                                    <div class="gutter mobile-hor-gutter">
                                        <a itemprop="url" href="{{route('projectDetail',['id'=>$relatedProject->id])}}"
                                           arial-label="Read more about project Table Mirror"
                                           class="project-link relative link-underline color-white display--inline-top project-link--black">
                                            <span class="display--inline-top relative mb-34 js-scale-out overflow skrollr-pointer skrollable skrollable-before" data-emit-events="" data-bottom-top="" data-delay="0" style="">
                                                <span class="display--block block-100 js-scale-out__holder opc-0 no-visible overflow">
                                                    <span class="display--block js-scale-out__img">
                                                        <span class="fill-dimensions multiply trans bg-grey-med opc-20 z-10"></span>
                                                        <img itemprop="image" class="resp-image relative z-1"
                                                             src="{{asset($relatedProject->featured_image)}}" alt="Minas Designs-Table Mirror">
                                                        <span class="abs-center trans z-20 color-red opc-0 icon icon--arrows-thick-right font-40"></span>
                                                    </span>
                                                </span>
                                            </span>
                                            <header>
                                                <div class="font-bold font-12 extra-ls extra-lh3 mb-7 js-fade-left opc-0 no-visible skrollr-pointer skrollable skrollable-before"
                                                    data-emit-events="" data-bottom-top="" data-trans="1.4"
                                                    data-ease="custom" style="">{{\Carbon\Carbon::parse($relatedProject->created_at)->format('Y')}}
                                                </div>
                                                <h3 class="font-light font-25 extra-lh extra-ls maxw-320 m-auto mb-10 js-fade-left opc-0  skrollr-pointer skrollable skrollable-before"
                                                    data-emit-events="" data-bottom-top="" data-trans="1.4"
                                                    data-delay=".15" style="">
                                                    <span itemprop="name" class="link-underline-text ">
                                                        {{$relatedProject->name}}
                                                    </span>
                                                </h3>
                                                <div class="font-bold font-12 extra-ls extra-lh3 color-dark-light js-fade-left opc-0 no-visible skrollr-pointer skrollable skrollable-before" data-emit-events="" data-bottom-top="" data-trans="1.4" data-ease="custom" data-delay=".15" style="">
                                                    {{$relatedProject->category->name}}
                                                </div>
                                            </header>
                                        </a>
                                    </div>
                                    <span itemprop="author" content="Minas Designs"></span>
                                    <span itemprop="creator" content="Minas Designs"></span>
                                </article>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

{{--        <div id="popup-slider" class="fixed abs-tl full-height abs-tl block-100 no-visible opc-0 z-700 mobile-hor-height-100">--}}
{{--            <div class="cursor close-popup close-popup--white z-30 popup-holder__close opc-0 abs-tr"--}}
{{--                 id="popup-slider__close"></div>--}}
{{--            <div id="popup-slider__bg" class="fill-dimensions abs-tl fixed bg-black-light scale-y origin-l"></div>--}}
{{--            <section id="popup-slider__holder" class="popup-slider slider slider--fullheight overflow do-slide"--}}
{{--                     data-slides=".slider__item" data-images=".slider__img" data-animation="custom" data-speed="1"--}}
{{--                     data-autoplay="false" data-autoplaytime="5" data-progressbar="false" data-totalslides=""--}}
{{--                     data-percentage="false" data-next="#popup-slider__next" data-prev="#popup-slider__prev"--}}
{{--                     data-dots="false" data-pagination="#slider__pagination" data-mousewheel="false" data-loop="true"--}}
{{--                     data-test_swipe="true">--}}
{{--                <div id="popup-slider__contents" class=" slider__holder slider--fullheight overflow opc-0 z-10">--}}

{{--                    @foreach($data->projectGallery as $gallery)--}}
{{--                        <article class="slider__item fill-dimensions a-center  slide--active"                               data-index="0">--}}
{{--                            <div class="maxw-270 abs-tl color-white a-left top-44 left-70 popup-slider__info">--}}
{{--                                <div class="font-bold font-12 extra-lh3 extra-ls">--}}
{{--                                    {{\Carbon\Carbon::parse($gallery->created_at)->format('Y')}}--}}
{{--                                </div>--}}
{{--                                <div class="font-bold font-25">--}}
{{--                                    PRODUCT DISPLAYS--}}
{{--                                </div>--}}
{{--                                <div class="font-light font-17">--}}
{{--                                    THAT ILLUMINATE AND HIGHLIGHT ONLY THE PRODUCTS--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="display--inline m-auto block-100 mt-50 popup-slider__image">--}}
{{--                                <img src="{{asset($gallery->images)}}" alt="Minas Designs-mykonos_store_5" class="popup-slider__img  display--block m-auto">--}}
{{--                            </div>--}}
{{--                        </article>--}}
{{--                    @endforeach--}}

{{--                </div>--}}
{{--            </section>--}}
{{--            <div class="slider__nav abs-center z-20 block-100 popup-slider-nav">--}}
{{--            <span id="popup-slider__prev"--}}
{{--                  class="slider__nav-btn abs-tl slider__nav-btn-prev slider__popup-nav-prev cursor">--}}
{{--                <span class="trans color-grey font-70 font-thin trans">--}}
{{--                    <span class="pagination-arrows__title trans">PREV</span>--}}
{{--                    <span class="icon icon--arrows-long-left abs-lc pagination-arrows__icon opc-0 trans"></span>--}}
{{--                </span>--}}
{{--            </span>--}}
{{--                <span id="popup-slider__next"--}}
{{--                      class="slider__nav-btn abs-tr slider__nav-btn-next slider__popup-nav-next cursor">--}}
{{--                <span class="trans color-grey font-70 font-thin trans">--}}
{{--                    <span class="pagination-arrows__title trans">NEXT</span>--}}
{{--                    <span class="icon icon--arrows-long-right abs-rc pagination-arrows__icon opc-0 trans"></span>--}}
{{--                </span>--}}
{{--            </span>--}}
{{--            </div>--}}
{{--        </div>--}}

    </main>
@endsection

{{--@section('script')--}}
{{--    <script type='text/javascript' defer src='{{asset('site/js/jquery-gsapSlider.js')}}'></script>--}}
{{--@endsection--}}

