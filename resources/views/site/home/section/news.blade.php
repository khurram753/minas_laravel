<section id="section-5" class="relative pt-146 overflow js-section z-30 mobile-hor-pt-90 mobile-hor-pb-90">
    <div class="fill-dimensions bg-grey"></div>
    <div class="grid max-12cols-g over color-black relative pb-150 mobile-hor-nopad--bottom mobile-hor-100">
        <div class="discoverNewClass block-33 display--inline-top trans tablet-hor-100 tablet-hor-center">
            <div class="gutter mobile-hor-gutter">
                <h3 class="color-black mb-23 opc-0 js-fade-left skrollr-pointer skrollable skrollable-before"
                    data-emit-events="" data-bottom-top="" data-trans="1.4" style="">
                    <span class="font-light font-18 bracket-icon">{</span>
                    <span class="font-bold font-12 extra-l  bracket-title">LATEST NEWS</span>
                    <span class="font-light font-18 bracket-icon">}</span>
                </h3>
                <div class="font-70 font-thin maxw-410 mb-50 js-fade-left opc-0 no-visible skrollr-pointer tablet-hor-m-auto mobile-hor-nomargin skrollable skrollable-before" data-emit-events="" data-bottom-top="" data-trans="1.4" data-delay=".15" data-ease="custom">
                    DISCOVER OUR LATEST NEWS
                </div>
                <div class="btn-black opc-0 no-visible js-fade-in skrollr-pointer tablet-hor-hidden skrollable skrollable-before" data-emit-events="" data-bottom-top="" data-cubic="custom" data-trans="1.6" style="">
                    <a href="news-and-update.html"
                       class="circle-btn cursor relative display--inline circle-link">
                        <svg class="circle-btn__wrapper-circle" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 151.689 148.568">
                            <path class="js-svg-circle circle-btn__circle" fill="none" stroke="#fff"
                                  stroke-width="1" stroke-miterlimit="10" d="M75.845,145.15
                                  c-39.139,0-70.867-31.728-70.867-70.866S36.706,3.418,75.845,3.418c39.138,0,70.866,31.728,70.866,70.866
                                  S114.983,145.15,75.845,145.15"></path>
                            <path class="js-stretched" fill="none" opacity="0" stroke="#fff"
                                  stroke-width="1"
                                  stroke-miterlimit="10"
                                  d="M113.228 5.526a10.122 10.122 0 0 0-.672-.479c-10.217-6.64-24.534-3.415-35.743-2.101-7.854.92-15.701 2.125-23.366 4.098-13.122 3.376-25.936 9.011-35.57 18.785C.454 43.503-2.653 70.782 4.779 93.701c12.587 38.817 65.455 69.188 104.126 47.793 18.448-10.207 31.242-31.346 37.575-50.686 3.17-9.681 6.398-20.775 4.775-31.049-1.498-9.484-7.574-16.885-13.6-23.975-6.826-8.031-12.545-16.946-19.49-24.863-1.588-1.81-3.064-3.941-4.937-5.395z"></path>
                            <path class="js-stretched-2" fill="none" stroke="#ffffff" opacity="0"
                                  stroke-miterlimit="10" d="M107.309,4.917c-0.223-0.148-0.452-0.288-0.686-0.417
		C96.241-1.223,82.575,2.916,71.792,4.98c-7.556,1.447-15.087,3.17-22.385,5.624C36.912,14.805,24.875,21.176,16.215,31.34
		C0.555,49.718-0.537,76.407,8.292,98.124c3.569,8.781,8.526,22.413,15.723,29.416c13.605,13.24,33.127,13.928,51.836,15.442
		c12.843,1.04,25.689,1.455,36.85-5.824c17.182-11.205,28.106-32.619,32.887-51.832c2.394-9.617,4.744-20.611,2.446-30.465
		c-2.123-9.098-8.54-15.85-14.888-22.307c-7.189-7.311-13.368-15.558-20.665-22.752C110.812,8.158,109.23,6.196,107.309,4.917z"></path>
                        </svg>
                        <span class="abs-center a-center z-5 font-12 extra-ls extra-lh2 font-bold block-70">
                            VIEW ALL NEWS
                        </span>
                    </a>
                </div>
            </div>
        </div>
        @foreach($news as $singleNews)
            <article class="block-33 tablet-hor-50 tablet-100 mb-37 display--inline-top mt-50 mt-50" itemscope="" itemtype="http://schema.org/NewsArticle" style="float: left">
                <div class="gutter tablet-hor-center">
                    <a itemprop="url" href="project.html" aria-label="Read more about Moving on to a new era" class="post-link display--block relative maxw-477 link-underline m-auto">
                        <span class="display--block relative pt-65p  mb-33 js-scale-out overflow skrollr-pointer tablet-nopad--top skrollable skrollable-before" data-emit-events="" data-bottom-top="" data-delay="0" style="">
                            <span class="display--block abs-tl block-100 js-scale-out__holder opc-0 no-visible overflow tablet-rel">
                                <span class="display--block js-scale-out__img">
                                    <span class="fill-dimensions multiply trans bg-grey-med opc-20 z-10"></span>
                                    <img class="resp-image relative z-1" itemprop="image" src="{{asset($singleNews->image)}}"
                                     alt="{{$singleNews->name}}">
                                    <span class="abs-tc top-post font-bold font-12 extra-lh3 extra-ls trans z-20 text-underline text-underline--red color-red opc-0">
                                        READ MORE
                                    </span>
                                </span>
                            </span>
                        </span>
                        <header>
                            <div class="a-left font-bold font-12 mb-2 extra-ls extra-lh3 opc-0 no-visible js-fade-left skrollr-pointer skrollable skrollable-before" data-emit-events="" data-bottom-top="" data-trans="1.4" style="">
                                MILESTONES
                            </div>
                            <span class="a-left display--block  font-bold font-12 mb-22 extra-ls extra-lh3 display--inline-top opc-0 no-visible js-fade-left skrollr-pointer skrollable skrollable-before" data-emit-events="" data-bottom-top="" data-trans="1.4" data-delay=".1" itemprop="datePublished" content="2019-10-21 08:15:21" style="">
                                {{\Carbon\Carbon::parse($singleNews->created_at)->format('M d, Y')}}
                            </span>
                            <h3 class="a-left font-thin font-25 maxw-410 opc-0 no-visible js-fade-left skrollr-pointer skrollable skrollable-before" data-emit-events="" data-bottom-top="" data-trans="1.4" data-delay=".15" itemprop="headline name" style="">
                                <span class="link-underline-text">
                                    {{ucfirst($singleNews->name)}}
                                </span>
                            </h3>
                        </header>
                        <span itemprop="dateModified" content="2019-11-11 11:12:11"></span>
                        <span itemprop="author publisher" itemscope="" itemtype="http://schema.org/Organization">
                            <span itemprop="name" content="Minas Designs"></span>
                            <span class="hidden" itemprop="logo" itemscope="" itemtype="https://schema.org/ImageObject">
                                <img itemprop="url" src="/site/images/logo-black.png" alt="logo">
                                <meta itemprop="width" content="180">
                                <meta itemprop="height" content="60">
                            </span>
                        </span>
                    </a>
                    <span itemprop="mainEntityOfPage" itemscope="" itemtype="http://schema.org/WebPage"></span>
                </div>
            </article>
        @endforeach
{{--        <article class="block-33 tablet-hor-50 tablet-100 mb-37 display--inline-top mt-50 mt-50"--}}
{{--                 itemscope=""--}}
{{--                 itemtype="http://schema.org/NewsArticle">--}}
{{--            <div class="gutter tablet-hor-center">--}}
{{--                <a itemprop="url" href="project.html"--}}
{{--                   aria-label="Read more about Clarity of shapes Exhibition"--}}
{{--                   class="post-link display--block relative maxw-477 link-underline m-auto">--}}
{{--        <span--}}
{{--            class="display--block relative pt-65p  mb-33 js-scale-out overflow skrollr-pointer tablet-nopad--top skrollable skrollable-before"--}}
{{--            data-emit-events="" data-bottom-top="" data-delay="0" style="">--}}
{{--            <span class="display--block abs-tl block-100 js-scale-out__holder opc-0 no-visible overflow tablet-rel">--}}
{{--                <span class="display--block js-scale-out__img">--}}
{{--                    <span class="fill-dimensions multiply trans bg-grey-med opc-20 z-10"></span>--}}
{{--                    <img class="resp-image relative z-1" itemprop="image"--}}
{{--                         src="/site/images/homepage_main_horizontal-477x261.jpg"--}}
{{--                         alt="Minas Designs-Clarity of shapes Exhibition">--}}
{{--                    <span--}}
{{--                        class="abs-tc top-post font-bold font-12 extra-lh3 extra-ls trans z-20 text-underline text-underline--red color-red opc-0">READ MORE</span>--}}
{{--                </span>--}}
{{--            </span>--}}
{{--        </span>--}}
{{--                    <header>--}}
{{--                        <div--}}
{{--                            class="a-left font-bold font-12 mb-2 extra-ls extra-lh3 opc-0 no-visible js-fade-left skrollr-pointer skrollable skrollable-before"--}}
{{--                            data-emit-events="" data-bottom-top="" data-trans="1.4" style="">EXHIBITIONS--}}
{{--                        </div>--}}
{{--                        <span--}}
{{--                            class="a-left display--block  font-bold font-12 mb-22 extra-ls extra-lh3 display--inline-top opc-0 no-visible js-fade-left skrollr-pointer skrollable skrollable-before"--}}
{{--                            data-emit-events="" data-bottom-top="" data-trans="1.4" data-delay=".1"--}}
{{--                            itemprop="datePublished" content="2018-05-21 08:16:24"--}}
{{--                            style="">MAY 21, 2018</span>--}}
{{--                        <h3 class="a-left font-thin font-25 maxw-410 opc-0 no-visible js-fade-left skrollr-pointer skrollable skrollable-before"--}}
{{--                            data-emit-events="" data-bottom-top="" data-trans="1.4" data-delay=".15"--}}
{{--                            itemprop="headline name" style="">--}}
{{--                <span class="link-underline-text">--}}
{{--                    CLARITY OF SHAPES EXHIBITION                </span>--}}
{{--                        </h3>--}}
{{--                    </header>--}}
{{--                    <span itemprop="dateModified" content="2019-11-11 11:27:48"></span>--}}
{{--                    <span itemprop="author publisher" itemscope=""--}}
{{--                          itemtype="http://schema.org/Organization">--}}
{{--                <span itemprop="name" content="Minas Designs"></span>--}}
{{--                <span class="hidden" itemprop="logo" itemscope="" itemtype="https://schema.org/ImageObject">--}}
{{--                    <img itemprop="url" src="/site/images/logo-black.png" alt="logo">--}}
{{--                    <meta itemprop="width" content="180">--}}
{{--                    <meta itemprop="height" content="60">--}}
{{--                </span>--}}
{{--            </span>--}}
{{--                </a>--}}
{{--                <span itemprop="mainEntityOfPage" itemscope="" itemtype="http://schema.org/WebPage"></span>--}}
{{--            </div>--}}
{{--        </article>--}}
        <div class="home-news-line1 home-news-line bg-black abs-bl origin-bl scale-y js-curtainY skrollr-pointer tablet-hor-hidden skrollable skrollable-before"
            data-emit-events="" data-bottom-top="" data-trans="1.4" style=""></div>
        <div class="home-news-line2 home-news-line bg-black abs-bl origin-bl scale-y js-curtainY skrollr-pointer tablet-hor-hidden skrollable skrollable-before"
            data-emit-events="" data-bottom-top="" data-trans="1.4" data-delay=".1" style=""></div>

        <div class="btn-black opc-0 no-visible hidden js-fade-in skrollr-pointer tablet-hor-block mt-80 tablet-hor-center skrollable skrollable-after loc" data-emit-events="" data-bottom-top="" data-cubic="custom" data-trans="1.6" style="visibility: inherit; opacity: 1;">
            <a href="news-and-update.html" class="circle-btn cursor relative display--inline circle-link">
                <svg class="circle-btn__wrapper-circle" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 151.689 148.568">
                    <path class="js-svg-circle circle-btn__circle" fill="none" stroke="#fff"
                          stroke-width="1"
                          stroke-miterlimit="10" d="M75.845,145.15
		c-39.139,0-70.867-31.728-70.867-70.866S36.706,3.418,75.845,3.418c39.138,0,70.866,31.728,70.866,70.866
		S114.983,145.15,75.845,145.15"></path>
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
                    VIEW ALL NEWS
                </span>
            </a>
        </div>
    </div>
</section>
