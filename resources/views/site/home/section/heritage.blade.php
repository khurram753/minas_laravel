<section id="section-2" class="relative pt-207 pb-397 overflow js-section z-30 tablet-hor-pt-150 tablet-pb-120 mobile-hor-pt-90 mobile-hor-pb-90 hp-section-2">
    <div class="fill-dimensions bg-grey"></div>
    <div class="grid max-12cols-g over color-black a-center mobile-hor-100">
        <div class="gutter mobile-hor-gutter">
            <h2 class="color-black mb-14 js-bt overflow relative skrollr-pointer skrollable skrollable-before"
                data-emit-events="" data-bottom-top="" style="">
                        <span class="js-bt__el display--block">
                            <span class="font-light font-18 bracket-icon">{</span>
                                <span class="font-bold font-12 extra-l  bracket-title">HERITAGE</span>
                                <span class="font-light font-18 bracket-icon">}</span>
                             </span>
            </h2>
            <div class="font-70 font-thin maxw-725 m-auto content-hr mb-21 js-skew-letter skrollr-pointer skrollable skrollable-before"
                 data-emit-events="" data-trans="1.4" data-bottom-top="" style="">
                <span>57</span> <span>YEARS</span> <span>OF</span> <span>HERITAGE</span>
                <hr>
                <span></span>
                <span>PURITY</span> <span>AND</span> <span>EXCELLENCE</span>
            </div>
            <div class="maxw-480 font-light font-20 m-auto mb-192 js-skew-letter skrollr-pointer tablet-mb-90 skrollable skrollable-before"
                data-emit-events="" data-trans="1.4" data-bottom-top="" data-delay=".1" style="">NEVER
                SACRIFICING OUR QUALITY WITH RESPECT TO THE CRAFTSMANSHIP AND PROCESSES, A QUALITY THAT
                DEFINES
                THE LIVING HERITAGE OF MINAS.
            </div>
            <div class="btn-black opc-0 no-visible js-fade-in skrollr-pointer skrollable skrollable-before"
                 data-emit-events="" data-bottom-top="" data-cubic="custom" data-trans="1.6" style="">
                <a href="{{route('heritage')}}" class="circle-btn cursor relative display--inline circle-link">
                    <svg class="circle-btn__wrapper-circle" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 151.689 148.568">
                        <path class="js-svg-circle circle-btn__circle" fill="none" stroke="#fff"
                              stroke-width="1"
                              stroke-miterlimit="10" d="M75.845,145.15
                              c-39.139,0-70.867-31.728-70.867-70.866S36.706,3.418,75.845,3.418c39.138,0,70.866,31.728,70.866,70.866
                              S114.983,145.15,75.845,145.15">
                        </path>
                        <path class="js-stretched" fill="none" opacity="0" stroke="#fff" stroke-width="1"
                              stroke-miterlimit="10"
                              d="M113.228 5.526a10.122 10.122 0 0 0-.672-.479c-10.217-6.64-24.534-3.415-35.743-2.101-7.854.92-15.701 2.125-23.366 4.098-13.122 3.376-25.936 9.011-35.57 18.785C.454 43.503-2.653 70.782 4.779 93.701c12.587 38.817 65.455 69.188 104.126 47.793 18.448-10.207 31.242-31.346 37.575-50.686 3.17-9.681 6.398-20.775 4.775-31.049-1.498-9.484-7.574-16.885-13.6-23.975-6.826-8.031-12.545-16.946-19.49-24.863-1.588-1.81-3.064-3.941-4.937-5.395z"></path>
                        <path class="js-stretched-2" fill="none" stroke="#ffffff" opacity="0"
                              stroke-miterlimit="10"
                              d="M107.309,4.917c-0.223-0.148-0.452-0.288-0.686-0.417
		C96.241-1.223,82.575,2.916,71.792,4.98c-7.556,1.447-15.087,3.17-22.385,5.624C36.912,14.805,24.875,21.176,16.215,31.34
		C0.555,49.718-0.537,76.407,8.292,98.124c3.569,8.781,8.526,22.413,15.723,29.416c13.605,13.24,33.127,13.928,51.836,15.442
		c12.843,1.04,25.689,1.455,36.85-5.824c17.182-11.205,28.106-32.619,32.887-51.832c2.394-9.617,4.744-20.611,2.446-30.465
		c-2.123-9.098-8.54-15.85-14.888-22.307c-7.189-7.311-13.368-15.558-20.665-22.752C110.812,8.158,109.23,6.196,107.309,4.917z"></path>
                    </svg>
                    <span class="abs-center a-center z-5 font-12 extra-ls extra-lh2 font-bold block-70">
                        DISCOVER THE HERITAGE
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="abs-bl bottom-115 tablet-hidden">
        <div id="marquee" class="marquee-holder relative over opc-0"
             style="width: 5428px; opacity: 1; transform: translate3d(-1468.38px, 0px, 0px);">
            @foreach($heritageImages as $heritageImage)
                <div class="relative display--inline-top js-marquee-element horizontal pr-70">
                    <div
                        class="relative opc-0 no-visible js-fade-in skrollr-pointer skrollable skrollable-before"
                        data-emit-events="" data-bottom-top="" data-trans="1.4" style="">
                        <div class="fill-dimensions multiply bg-dark-med opc-20 z-10"></div>
                        <img class="resp-image opc-20" src="{{asset($heritageImage->image)}}"
                             alt="Minas Designs-1">
                    </div>
                </div>
            @endforeach
            {{--                    <div class="relative display--inline-top js-marquee-element horizontal pt-90 pr-140">--}}
            {{--                        <div--}}
            {{--                            class="relative opc-0 no-visible js-fade-in skrollr-pointer skrollable skrollable-before"--}}
            {{--                            data-emit-events="" data-bottom-top="" data-trans="1.4" style="">--}}
            {{--                            <div class="fill-dimensions multiply bg-dark-med opc-20 z-10"></div>--}}
            {{--                            <img class="resp-image opc-20" src="/site/images/homepage_heritage_carousel4.jpg"--}}
            {{--                                 alt="Minas Designs-2">--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="relative display--inline-top js-marquee-element horizontal pt-60 pr-70">--}}
            {{--                        <div--}}
            {{--                            class="relative opc-0 no-visible js-fade-in skrollr-pointer skrollable skrollable-before"--}}
            {{--                            data-emit-events="" data-bottom-top="" data-trans="1.4" style="">--}}
            {{--                            <div class="fill-dimensions multiply bg-dark-med opc-20 z-10"></div>--}}
            {{--                            <img class="resp-image opc-20" src="/site/images/homepage_heritage_carousel2.jpg"--}}
            {{--                                 alt="Minas Designs-3">--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="relative display--inline-top js-marquee-element horizontal pr-70 pt-30">--}}
            {{--                        <div--}}
            {{--                            class="relative opc-0 no-visible js-fade-in skrollr-pointer skrollable skrollable-before"--}}
            {{--                            data-emit-events="" data-bottom-top="" data-trans="1.4" style="">--}}
            {{--                            <div class="fill-dimensions multiply bg-dark-med opc-20 z-10"></div>--}}
            {{--                            <img class="resp-image opc-20" src="/site/images/homepage_heritage_carousel.jpg"--}}
            {{--                                 alt="Minas Designs-1">--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="relative display--inline-top js-marquee-element horizontal pt-90 pr-140">--}}
            {{--                        <div--}}
            {{--                            class="relative opc-0 no-visible js-fade-in skrollr-pointer skrollable skrollable-before"--}}
            {{--                            data-emit-events="" data-bottom-top="" data-trans="1.4" style="">--}}
            {{--                            <div class="fill-dimensions multiply bg-dark-med opc-20 z-10"></div>--}}
            {{--                            <img class="resp-image opc-20" src="/site/images/home_project_image_small.jpg"--}}
            {{--                                 alt="Minas Designs-2">--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="relative display--inline-top js-marquee-element horizontal pt-60 pr-70">--}}
            {{--                        <div--}}
            {{--                            class="relative opc-0 no-visible js-fade-in skrollr-pointer skrollable skrollable-before"--}}
            {{--                            data-emit-events="" data-bottom-top="" data-trans="1.4" style="">--}}
            {{--                            <div class="fill-dimensions multiply bg-dark-med opc-20 z-10"></div>--}}
            {{--                            <img class="resp-image opc-20" src="/site/images/homepage_vertical_project.jpg"--}}
            {{--                                 alt="Minas Designs-3">--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="relative display--inline-top js-marquee-element horizontal pr-70 ">--}}
            {{--                        <div--}}
            {{--                            class="relative opc-0 no-visible js-fade-in skrollr-pointer skrollable skrollable-before"--}}
            {{--                            data-emit-events="" data-bottom-top="" data-trans="1.4" style="">--}}
            {{--                            <div class="fill-dimensions multiply bg-dark-med opc-20 z-10"></div>--}}
            {{--                            <img class="resp-image opc-20" src="/site/images/homepage_heritage_carousel3.jpg"--}}
            {{--                                 alt="Minas Designs-1">--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="relative display--inline-top js-marquee-element horizontal pt-90 pr-140 cloned">--}}
            {{--                        <div--}}
            {{--                            class="relative opc-0 no-visible js-fade-in skrollr-pointer skrollable skrollable-before"--}}
            {{--                            data-emit-events="" data-bottom-top="" data-trans="1.4" style="">--}}
            {{--                            <div class="fill-dimensions multiply bg-dark-med opc-20 z-10"></div>--}}
            {{--                            <img class="resp-image opc-20" src="/site/images/homepage_heritage_carousel4.jpg"--}}
            {{--                                 alt="Minas Designs-2">--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="relative display--inline-top js-marquee-element horizontal pt-60 pr-70 cloned">--}}
            {{--                        <div--}}
            {{--                            class="relative opc-0 no-visible js-fade-in skrollr-pointer skrollable skrollable-before"--}}
            {{--                            data-emit-events="" data-bottom-top="" data-trans="1.4" style="">--}}
            {{--                            <div class="fill-dimensions multiply bg-dark-med opc-20 z-10"></div>--}}
            {{--                            <img class="resp-image opc-20" src="/site/images/homepage_heritage_carousel2.jpg"--}}
            {{--                                 alt="Minas Designs-3">--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="relative display--inline-top js-marquee-element horizontal pr-70 pt-30 cloned">--}}
            {{--                        <div--}}
            {{--                            class="relative opc-0 no-visible js-fade-in skrollr-pointer skrollable skrollable-before"--}}
            {{--                            data-emit-events="" data-bottom-top="" data-trans="1.4" style="">--}}
            {{--                            <div class="fill-dimensions multiply bg-dark-med opc-20 z-10"></div>--}}
            {{--                            <img class="resp-image opc-20" src="/site/images/homepage_heritage_carousel.jpg"--}}
            {{--                                 alt="Minas Designs-1">--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="relative display--inline-top js-marquee-element horizontal pt-90 pr-140 cloned">--}}
            {{--                        <div--}}
            {{--                            class="relative opc-0 no-visible js-fade-in skrollr-pointer skrollable skrollable-before"--}}
            {{--                            data-emit-events="" data-bottom-top="" data-trans="1.4" style="">--}}
            {{--                            <div class="fill-dimensions multiply bg-dark-med opc-20 z-10"></div>--}}
            {{--                            <img class="resp-image opc-20" src="/site/images/home_project_image_small.jpg"--}}
            {{--                                 alt="Minas Designs-2">--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="relative display--inline-top js-marquee-element horizontal pt-60 pr-70 cloned">--}}
            {{--                        <div--}}
            {{--                            class="relative opc-0 no-visible js-fade-in skrollr-pointer skrollable skrollable-before"--}}
            {{--                            data-emit-events="" data-bottom-top="" data-trans="1.4" style="">--}}
            {{--                            <div class="fill-dimensions multiply bg-dark-med opc-20 z-10"></div>--}}
            {{--                            <img class="resp-image opc-20" src="/site/images/homepage_vertical_project.jpg"--}}
            {{--                                 alt="Minas Designs-3">--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
        </div>
    </div>
</section>
