<div id="top-content">
    <section class="home-top-content relative box-sizing overflow">
        <div class="fill-dimensions z-1 scale-out js-scale-in js-scale-in--sm in-view op-0" data-emit-events
             data-bottom-top="" data-cubic="custom" data-trans="1.8">
            <img src="{{asset('site/images/red-asian-web-ready-wide.png')}}" class="home-top__img abs-bc z-1">
            <div class="block-100 h-50 grad-black abs-bl"></div>
        </div>
        <div class="grid max-12cols-g over mobile-hor-100">
            <div class="max-6cols-g">
                <header class="color--white gutter mb-t op-0 js-fade-in in-view" data-emit-events
                        data-bottom-top="" data-delay="0.15">
                    <h1 class="font-thin title-80 title-80-bg disp-inline bg-highlight">
                        A NEW ERA
                    </h1>
                </header>

                <div class="max-4cols gutter font title-20 columns-3 ls-30 js-st-fade-up in-view" data-emit-events data-bottom-top="" data-velocity="0.02">
                    @foreach($categories as $category)
                        <a href="#" class="color--grey display--block mb-8 hover-white-underline">
                                    <span class="display--block overflow relative">
                                        <span itemprop="name" class="display--block js-st-fade-up__el">{{$category->name}}</span>
                                    </span>
                        </a>
                    @endforeach

                </div>
            </div>
        </div>
        <div
            class="block-100 abs-bl a-center ls-180 color--white home-top-content__scrolldown tablet-hor-rel op-0 js-fade-up in-view "
            data-emit-events data-bottom-top="" data-trans="1.8">
                    <span class="circle-btn relative cursor display--inline circle-link scroll-to "
                          data-target="#section-2">
                        <svg class="circle-btn__wrapper-circle"
                             xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 151.689 148.568">
            <path class="js-svg-circle path" fill="none" stroke="#fff" stroke-width="1" stroke-miterlimit="10" d="M75.845,145.15
		c-39.139,0-70.867-31.728-70.867-70.866S36.706,3.418,75.845,3.418c39.138,0,70.866,31.728,70.866,70.866
		S114.983,145.15,75.845,145.15"/>
            <path class="js-stretched path" fill="none" opacity="0" stroke="#fff" stroke-width="1"
                  stroke-miterlimit="10"
                  d="M113.228 5.526a10.122 10.122 0 0 0-.672-.479c-10.217-6.64-24.534-3.415-35.743-2.101-7.854.92-15.701 2.125-23.366 4.098-13.122 3.376-25.936 9.011-35.57 18.785C.454 43.503-2.653 70.782 4.779 93.701c12.587 38.817 65.455 69.188 104.126 47.793 18.448-10.207 31.242-31.346 37.575-50.686 3.17-9.681 6.398-20.775 4.775-31.049-1.498-9.484-7.574-16.885-13.6-23.975-6.826-8.031-12.545-16.946-19.49-24.863-1.588-1.81-3.064-3.941-4.937-5.395z"/>
            <path class="js-stretched-2 path" fill="none" stroke="#ffffff" opacity="0" stroke-miterlimit="10" d="M107.309,4.917c-0.223-0.148-0.452-0.288-0.686-0.417
		C96.241-1.223,82.575,2.916,71.792,4.98c-7.556,1.447-15.087,3.17-22.385,5.624C36.912,14.805,24.875,21.176,16.215,31.34
		C0.555,49.718-0.537,76.407,8.292,98.124c3.569,8.781,8.526,22.413,15.723,29.416c13.605,13.24,33.127,13.928,51.836,15.442
		c12.843,1.04,25.689,1.455,36.85-5.824c17.182-11.205,28.106-32.619,32.887-51.832c2.394-9.617,4.744-20.611,2.446-30.465
		c-2.123-9.098-8.54-15.85-14.888-22.307c-7.189-7.311-13.368-15.558-20.665-22.752C110.812,8.158,109.23,6.196,107.309,4.917z"/>
        </svg>
                        <span class="abs-center a-center z--1 title-12 font-bold block-80 ls-180">
                            <span class="circle-btn__txt">DISCOVER <BR/>OUR PRODUCTS</span>
                            <svg class="icon icon--arrow-small-down display--block m-auto btn-icon">
                                <use xlink:href="#arrow-small-down"></use>
                            </svg>
                        </span>
                    </span>
        </div>
    </section>

    <section class="grid max-5cols-g pt-b uppercase ls-80 style-headings a-center mobile-hor-100 tablet-pt-120">
        <div class="gutter mobile-hor-gutter js-skew in-view" data-emit-events data-bottom-top=""
             data-trans="1.8" id="section-2">
            <h2>Designed and curated by Minas</h2>
            <p>DISCOVER THE DESIGNS AND DIVE IN TO THE WORLD OF MINAS AND HIS CREATIONS. </p></div>
    </section>
</div>
