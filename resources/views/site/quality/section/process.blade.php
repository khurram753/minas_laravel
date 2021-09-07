<div id="section-gallery" class="full-height section-gallery relative tablet-hor-nomargin">
    <aside class="loading-slider"></aside>
    <section id="slider-main" class="slider slider--fullheight overflow do-slide init-slider"
             data-slides=".slider__item" data-images=".slider__img" data-animation="custom" data-speed="1.1"
             data-autoplay="false" data-autoplaytime="5" data-progressbar="false" data-totalslides="{{sizeof($data->orderedProcess)}}"
             data-percentage="false" data-next="#slider__next" data-prev="#slider__prev" data-dots="false"
             data-pagination="#slider__pagination" data-mousewheel="false" data-loop="false"
             data-test_swipe="true">
        <div class="slider__holder slider--fullheight overflow">
            @foreach($data->orderedProcess as $key => $process)
                <article class="slider__item fill-dimensions overflow {{$loop->first ? 'slide--active':''}}" data-index="{{$key}}">
                <div class="fill-dimensions opc-0 no-visible js-fade-in skrollr-pointer skrollable-after loc"
                     data-emit-events data-delay=".3" data-bottom-top="" data-cubic="custom" data-trans="1.3">
                    <div class="js-tl fill-dimensions overflow display--block z-1">
                        <div class="slider__img slider__img--0 display--block fill-dimensions cover-img overflow js-tl-img"
                            style="background-image: url({{asset($process->background_image)}});">
                            <div class="fill-dimensions multiply bg-black opc-40 z-10"></div>
                        </div>
                    </div>
                </div>
                <header class="abs-center top-44p a-center maxw-435 tablet-90 tablet-maxw-100 mobile-hor-top-195">
                    <div class="color-black mb-86 color-white js-bt overflow relative tablet-mb-43 skrollr-pointer slider-label-title skrollable skrollable-after loc" data-delay=".5" data-emit-events data-bottom-top="">
                        <span class="js-bt__el display--block">
                            <span class="font-light font-18 bracket-icon">{</span>
                            <span class="font-bold font-12 extra-l  bracket-title">THE PROCESS</span>
                            <span class="font-light font-18 bracket-icon">}</span>
                        </span>
                    </div>
                    <div class="opc-0 no-visible js-fade-in skrollr-pointer skrollable-after loc" data-emit-events data-delay=".6" data-bottom-top="" data-cubic="custom" data-trans="1.6">
                        <div class="js-fade ">
                            <div class="color-black color-white font-bold font-12 extra-lh3 extra-ls mb-57 tablet-mb-28 slide-steps">
                                STEP <span class="font-25">{{$key+1}}</span>
                                OF {{sizeof($data->orderedProcess)}}
                            </div>
                            <h2 class="slider__title font-bold font-25 mb-12">{{$process->title}}</h2>
                            <div class="slider__title font-17 maxw-320 m-auto font-light mobile-hor-hidden">
                                {{$process->description}}
                            </div>
                        </div>
                    </div>
                </header>
            </article>
            @endforeach

        </div>

        <div class="slider__nav abs-center z-20 block-100 opc-0 no-visible js-fade-in skrollr-pointer"
             data-emit-events data-delay="1" data-bottom-top="" data-cubic="custom" data-trans="1.6">
            <span id="slider__prev" class="slider__nav-btn abs-tl slider__nav-btn-prev cursor">
                <span class="trans color-grey font-70 font-thin trans">
                    <span class="pagination-arrows__title trans">PREV</span>
                    <span class="icon icon--arrows-long-left abs-lc pagination-arrows__icon opc-0 trans"></span>
                </span>
            </span>
            <span id="slider__next" class="slider__nav-btn abs-tr slider__nav-btn-next cursor">
                <span class="trans color-grey font-70 font-thin trans">
                    <span class="pagination-arrows__title trans">NEXT</span>
                    <span class="icon icon--arrows-long-right abs-rc pagination-arrows__icon opc-0 trans"></span>
                </span>
            </span>
        </div>
        <div class="block-100 abs-center maxw-700 z-20 tablet-hor-maxw-580 tablet-hor-med-hidden circle-pie-holder">
            <svg class="circle-pie maxw-700 block-100 opc-0 no-visible js-fade-in skrollr-pointer"
                 data-emit-events data-delay="1" data-bottom-top="" data-cubic="custom" data-trans="1.6"
                 preserveAspectRatio="xMinYMin meet" viewBox="0 0 120 120">
                <circle cx="60" cy="60" r="54" fill="none" stroke="#fff" stroke-width="0.3039"
                        stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="0,1.0066"/>

                <circle id="precentage_slider" cx="60" cy="60" r="54" fill="none" stroke="#fff"
                        stroke-width="0.5039" stroke-dasharray="339.292" stroke-dashoffset="301.44"

                        style="stroke-dashoffset: {{$percentage}};"
                />
            </svg>
        </div>
    </section>


</div>
