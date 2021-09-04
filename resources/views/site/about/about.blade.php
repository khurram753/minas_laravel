@extends('layout.front-layout.app')

@section('title')
    MINAS - About US
@endsection


@section('style')
    <style>
        .aboutUsSectionClass{
            z-index: 1000;
            position: relative;
        }
    </style>
@endsection


@section('content')



    <main class="bg-grey about-page mobile-hor-pb-90">
        <div class="full-height relative js-scale-mask skrollr-pointer" data-emit-events data-trans="3"
             data-bottom-top="" id="page-intro">
            <div class="fill-dimensions multiply bg-black opc-70 z-10"></div>
            <div class="cover-img fill-dimensions  js-scale-mask__el opc-0"
                 style="background-image: url('{{asset('/site/images/mina-about-main.jpg')}}');"></div>
            <div class="page-intro-bg abs-center z-15">
                <div class="fill-dimensions bg-grey origin-l scale-y view-point" data-emit-events data-bottom-top=""
                     id="page-intro-bg"></div>
            </div>
            <div class="grid max-8cols-g full-height relative z-20">
                <div class="gutter relative full-height     color-black">
                    <div class="page-intro__img width-90 m-auto relative display--block opc-0 no-visible z-20 ">
                        <div class="fill-dimensions fill-dimensions--extra bg-grey origin-l z-50"
                             id="intro-img-bg"></div>
                        <div class="page-intro-img cover-img"
                             style="background-image: url('/site/images/mina-about-main-1040x676.jpg'); "></div>
                    </div>
                    <div class="page-intro abs-center a-center maxw-690 width-90">
                        <h1 class="page-intro__title page-intro__title-post relative overflow">
                            <span class="display--block js-bt__el font-bold font-12 extra-ls page-intro-title"><span
                                    class="font-light font-18 bracket-icon">{</span><span
                                    class="font-bold font-12 extra-l  bracket-title">ABOUT STUDIO MINAS </span><span
                                    class="font-light font-18 bracket-icon">}</span></span>
                        </h1>

                        <div class="abs-bc block-100 page-intro__t-holder">
                            <div class="font-70 font-thin m-auto content-hr mb-21">
                                <span class="display--block js-subtitle page-title__subtitle opc-0">
                                    ESTABLISHED IN ATHENS GREECE IN 1981
                                </span>
                            </div>
                            <h2 class="font-light font-20 m-auto maxw-470 js-txt opc-0">FOLLOWING A DECADE OF CREATIVE
                                EXPLORATION AND ESTABLISHED WORK IN NEW YORK.</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="abs-bc z-20 page-intro__arrow opc-0 no-visible js-intro-fade">
                <div class="icon icon--arrows-long-down color-red font-50 arrow-bounce"
                     data-0="@class: icon icon--arrows-long-down color-red font-50 arrow-bounce"
                     data-90="@class: icon icon--arrows-long-down color-red font-50 arrow-bounce scrolled"></div>
            </div>
        </div>
        <div class="grid max-12cols-g mobile-hor-100 aboutUsSectionClass">
            <div class="gutter mobile-hor-gutter">
                <div class="color-black general-content general-content--pb js-skew-letter skrollr-pointer"
                     data-emit-events data-trans="1.4" data-bottom-top="">
                    <H3>HOW IT ALL STARTED</H3>
                    <p><EM>THROUGH THE HERITAGE TIMELINE DISCOVER MINAS STORY AND EVOLUTION.</EM></p>
                    <p><br/>
                        Studio Minas was established in Athens, Greece in 1981 following a decade of<br/>
                        creative exploration and established work in New York. The studio follows the strict<br/>
                        jewelry manufacturing process dictated by Minas and maintains a high level of<br/>
                        quality control to ensure his vision and philosophy is passed on to the customer.<br/>
                        Every aspect of the Studio was designed and built by Minas himself, from the<br/>
                        ergonomic work benches for the dedicated silversmiths to the centrifugal casting<br/>
                        machine and furnace.</p>
                    <p>Minas personally designed and created every single jewelry<br/>
                        prototype, carving it from a single piece of wax, from which he created the original<br/>
                        mold. A tradition that his sons follow with great attention to detail.</p>
                    <p>Every step of the Minas process is kept in house, allowing the brand to<br/>
                        maintain complete autonomy. As the distinctive Minas style has persisted and<br/>
                        evolved over the years, desire for more complex pieces has arisen and more<br/>
                        sophisticated techniques have been developed to meet these needs. In addition, as<br/>
                        demand for our unique jewelry designs has increased, our studio has grown to<br/>
                        bring more talented staff on board to ensure we never sacrifice the quality of the<br/>
                        craftsmanship and processes that define the living heritage of MINAS.</p>
                    <blockquote>
                        <p>"HARMONY PRE-EXISTS IN EVERYONE OF US, SINCE EACH OF US HIDES WITHIN HIMSELF THE NEED FOR
                            HARMONY"</p>
                    </blockquote>
                    <div class="text-columns">
                        <figure id="attachment_1422" aria-describedby="caption-attachment-1422" style="width: 303px"
                                class="wp-caption alignnone">
                            <div class="post-image"><img class="wp-image-1422 size-full"
                                                         src="/site/images/mina-about-main2.jpg" alt="" width="303"
                                                         height="456"/></div>
                            <figcaption id="caption-attachment-1422" class="wp-caption-text"><span
                                    class="dat">1991</span> MINAS IN THE PROCESS OF MAKING THE MARBLE SUNDIAL
                            </figcaption>
                        </figure>
                    </div>
                    <div class="text-columns"><br/>
                        <figure id="attachment_1423" aria-describedby="caption-attachment-1423" style="width: 303px"
                                class="wp-caption alignnone">
                            <div class="post-image"><img class="wp-image-1423 size-full"
                                                         src="/site/images/mina-about-main1.jpg" alt="" width="303"
                                                         height="456"/></div>
                            <figcaption id="caption-attachment-1423" class="wp-caption-text"><span
                                    class="dat">1994</span> MINAS DESIGNING THE RULLER
                            </figcaption>
                        </figure>
                    </div>
                    <H3>LOOKING FORWARD TO A BRIGHT FUTURE</H3>
                    <p>His mind never stoped and his catalog of creations is immense, filled with creations for decades
                        to come. By his side his two sons, working hard for the future of the brand his lineage is
                        guarantied. With new projects around the corner the future is bright. </p></div>
                <div class="btn-black a-center z-10 relative opc-0 no-visible js-fade-in skrollr-pointer"
                     data-emit-events data-bottom-top="" data-cubic="custom" data-trans="1.6">
                    <a href="project.html" class="circle-btn cursor relative display--inline circle-link">
                        <svg class="circle-btn__wrapper-circle" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 151.689 148.568">
                            <path class="js-svg-circle circle-btn__circle" fill="none" stroke="#fff" stroke-width="1"
                                  stroke-miterlimit="10" d="M75.845,145.15
		c-39.139,0-70.867-31.728-70.867-70.866S36.706,3.418,75.845,3.418c39.138,0,70.866,31.728,70.866,70.866
		S114.983,145.15,75.845,145.15"/>
                            <path class="js-stretched" fill="none" opacity="0" stroke="#fff" stroke-width="1"
                                  stroke-miterlimit="10"
                                  d="M113.228 5.526a10.122 10.122 0 0 0-.672-.479c-10.217-6.64-24.534-3.415-35.743-2.101-7.854.92-15.701 2.125-23.366 4.098-13.122 3.376-25.936 9.011-35.57 18.785C.454 43.503-2.653 70.782 4.779 93.701c12.587 38.817 65.455 69.188 104.126 47.793 18.448-10.207 31.242-31.346 37.575-50.686 3.17-9.681 6.398-20.775 4.775-31.049-1.498-9.484-7.574-16.885-13.6-23.975-6.826-8.031-12.545-16.946-19.49-24.863-1.588-1.81-3.064-3.941-4.937-5.395z"/>
                            <path class="js-stretched-2" fill="none" stroke="#ffffff" opacity="0" stroke-miterlimit="10"
                                  d="M107.309,4.917c-0.223-0.148-0.452-0.288-0.686-0.417
		C96.241-1.223,82.575,2.916,71.792,4.98c-7.556,1.447-15.087,3.17-22.385,5.624C36.912,14.805,24.875,21.176,16.215,31.34
		C0.555,49.718-0.537,76.407,8.292,98.124c3.569,8.781,8.526,22.413,15.723,29.416c13.605,13.24,33.127,13.928,51.836,15.442
		c12.843,1.04,25.689,1.455,36.85-5.824c17.182-11.205,28.106-32.619,32.887-51.832c2.394-9.617,4.744-20.611,2.446-30.465
		c-2.123-9.098-8.54-15.85-14.888-22.307c-7.189-7.311-13.368-15.558-20.665-22.752C110.812,8.158,109.23,6.196,107.309,4.917z"/>
                        </svg>
                        <span class="abs-center a-center z-5 font-12 extra-ls extra-lh2 font-bold block-70">
        DISCOVER MINAS’ PROJECTS    </span>
                    </a></div>


            </div>
        </div>
        <div class="page-links-holder">
            <div class="grid max-12cols-g mobile-hor-100">
                <div class="gutter relative mobile-hor-gutter">
                    <div class="p-link-holder p-link-holder--l">
                        <div class="block-50 p-link-holder__inner mobile-hor-100">
                            <div class="font-thin font-80 display--inline mb-17 display--block opc-0 no-visible  js-fade-left skrollr-pointer"
                                 data-emit-events data-bottom-top="" data-trans="1.4">
                                <a href="quality-ans-craftsmanship.html"
                                   arial-label="Read more about QUALITY AND CRAFTSMANSHIP"
                                   class="p-link color-black p-link--left tablet-hor-nopad--top display--inline link-underline ">

                                            <span class="link-underline-text link-underline-text--big">
                                                QUALITY AND CRAFTSMANSHIP                                            </span>

                                    <span class="icon display--block icon--arrows-long-right display--block opc-0 no-visible js-fade-left skrollr-pointer"
                                          data-emit-events data-delay=".1" data-bottom-top="" data-trans="1.4"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="line line--black js-scale skrollr-pointer" data-emit-events data-bottom-top=""
                         data-cubic="custom" data-trans="1.3"></div>
                    <div class="p-link-holder p-link-holder--r">
                        <div class="block-50 p-link-holder__inner mobile-hor-100">
                            <div class="font-thin font-80 display--inline mb-17 display--block opc-0 no-visible  js-fade-right skrollr-pointer"
                                 data-emit-events data-bottom-top="" data-trans="1.4">
                                <a href="heritage.html" arial-label="Read more about 57 YEAR OF HERITAGE"
                                   class="p-link color-black p-link--right display--inline link-underline ">

                                            <span class="link-underline-text link-underline-text--big">
                                                57 YEAR OF HERITAGE                                            </span>

                                    <span class="icon display--block icon--arrows-long-right display--block opc-0 no-visible js-fade-right skrollr-pointer"
                                          data-emit-events data-delay=".1" data-bottom-top="" data-trans="1.4"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>




@endsection
