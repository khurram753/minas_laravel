@extends('layout.front-layout.app')

@section('title')
    MINAS - Heritage Detail
@endsection


@section('style')

@endsection

@section('content')
    <main class="main-content heritage-post bg-black relative post-nav tablet-hor-padded">
        <div class="fixed full-height z-30 opc-0 no-visible js-fade-in skrollr-pointer tablet-hor-hidden"
             data-emit-events data-bottom-top="" data-trans="1.4">
            @if(isset($previousURL))
                <a href="{{route('getHeritageDetail',['id'=>$previousURL->id])}}" class="page-numbers prev">
                    <span class="pagination-arrows prev-link trans color-dark-med">
                        <span class="font-70 font-thin pagination-arrows__title trans">PREV.</span>
                        <span class="icon icon--arrows-long-left abs-lc pagination-arrows__icon opc-0 trans"></span>
                    </span>
                </a>
            @else
                <span class="prev page-numbers disabled">
                    <span class="pagination-arrows prev-link trans color-dark-med">
                        <span class="font-70 font-thin pagination-arrows__title trans">PREV.</span>
                        <span class="icon icon--arrows-long-left abs-lc pagination-arrows__icon opc-0 trans"></span>
                    </span>
                </span>
            @endif

            @if(isset($nextURL))
                <a href="{{route('getHeritageDetail',['id'=>$nextURL->id])}}" class="page-numbers next">
                    <span class="pagination-arrows next-link trans color-dark-med">
                        <span class="font-70 font-thin pagination-arrows__title trans">NEXT</span>
                        <span class="icon icon--arrows-long-right abs-rc pagination-arrows__icon opc-0 trans"></span>
                    </span>
                </a>
            @else
                <span class="next page-numbers disabled">
                    <span class="pagination-arrows next-link trans color-dark-med">
                        <span class="font-70 font-thin pagination-arrows__title trans">NEXT</span>
                        <span class="icon icon--arrows-long-right abs-rc pagination-arrows__icon opc-0 trans"></span>
                    </span>
                </span>
            @endif
        </div>
        <div class="opc-0 js-fade-in skrollr-pointer abs-tr post-close cursor z-30 tablet-rel mobile-hor-100"
             data-emit-events data-bottom-top="" data-cubic="custom" data-trans="1.4" data-delay=".25">
            <a href="{{route('heritage')}}"
               class="js-post-close post-close post-close__btn mobile-hor-gutter display--inline color-white font-12 extra-ls  link-white trans cursor font-bold"><span
                    class="icon icon--arrows-long-left heritage-back-icon display--inline"></span><span
                    class="ml-20 display--inline"></span>GO BACK TO HERITAGE</a>
        </div>
        <div class="abs-tl fixed full-height block-100 scale-out js-scale-in js-scale-in--sm skrollr-pointer opc-0"
             data-emit-events data-cubic="custom" data-bottom-top="" data-trans="1.6">
            <div class="fill-dimensions multiply bg-black z-10 opc-80"></div>
            <div class="fill-dimensions cover-img"
                 style="background-image: url('{{$data->image}}')"></div>
            <div class="fill-dimensions abs-bl  height-50-v bg-gradient-bt"></div>
        </div>
        <section class="z-20 relative">
            <div class="grid max-8cols-g over mobile-hor-100">
                <div class="gutter mobile-hor-gutter">
                    <header class="color-white heritage-post__header js-decades skrollr-pointer" data-emit-events
                            data-bottom-top="" data-delay=".2">
                        <div class="year heritage-post__title" data-year="{{$data->year}}">
                            <div class="number-digit number-first">
                                <div>&nbsp;</div>
                                <div>1</div>
                                <div>2</div>
                                <div>3</div>
                                <div>4</div>
                                <div>5</div>
                                <div>6</div>
                                <div>7</div>
                                <div>8</div>
                                <div>9</div>
                            </div>
                            <div class="number-digit number-second">
                                <div>0</div>
                                <div>1</div>
                                <div>2</div>
                                <div>3</div>
                                <div>4</div>
                                <div>5</div>
                                <div>6</div>
                                <div>7</div>
                                <div>8</div>
                                <div>9</div>
                            </div>
                            <div class="number-digit number-third">
                                <div>0</div>
                                <div>1</div>
                                <div>2</div>
                                <div>3</div>
                                <div>4</div>
                                <div>5</div>
                                <div>6</div>
                                <div>7</div>
                                <div>8</div>
                                <div>9</div>
                            </div>
                            <div class="number-digit number-fourth">
                                <div>0</div>
                                <div>1</div>
                                <div>2</div>
                                <div>3</div>
                                <div>4</div>
                                <div>5</div>
                                <div>6</div>
                                <div>7</div>
                                <div>8</div>
                                <div>9</div>
                            </div>
                        </div>
                        <h1 class="font-40 font-thin maxw-555 opc-0 js-fade-up skrollr-pointer" data-emit-events
                            data-bottom-top="" data-delay=".25" data-trans="1.4">{{$data->name}}</h1></header>
                    <div class="heritage-post__image  relative js-img-reveal  skrollr-pointer overflow" data-emit-events
                         data-cubic="custom" data-bottom-top="" data-trans="1.6">

                        {{--                        <div class="js-img-reveal__holder overflow">--}}
                        {{--                            <div class="js-img-reveal__image">--}}
                        {{--                                <img class="resp-image relative m-auto  block-image"--}}
                        {{--                                     src="{{$data->image}}"--}}
                        {{--                                     alt="Minas Designs-1938-Minas is born shortly before the start of world war 2">--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}

                    </div>
                    <div class="general-content general-content--extra opc-0 no-visible js-fade-in skrollr-pointer"
                         data-emit-events data-bottom-top="" data-cubic="custom" data-trans="1.6">
                        <p>{{$data->description}}</p>
                        <blockquote>
                            <p>&nbsp;</p>
                        </blockquote>
                        {{--                        <p><img class="alignnone wp-image-816 size-full"--}}
                        {{--                                src="https://www.minas-designs.com/wp-content/uploads/minas-baby.jpg"--}}
                        {{--                                alt="Minas-baby-picture" width="720" height="1072"/></p>--}}
                        {{--                        <p style="text-align: center;">2 year old Minas, 1940.</p></div>--}}
                        <div
                            class="a-center back-to-top-holder opc-0 no-visible js-fade-in skrollr-pointer mobile-nopad--top"
                            data-emit-events data-bottom-top="" data-cubic="custom" data-trans="1.6">
                            <div class="display--inline cursor scroll-to back-to-top" data-position='0'>
                                <div class="icon icon--arrows-long-up back-to-top__icon mb-30 color-red trans"></div>
                                <div class="back-to-top__title relative trans ls-18">GO BACK TO TOP</div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--            <div class="fill-dimensions abs-bl height-50-v bg-gradient-bt bg-gradient-bt--50"></div>--}}
            </div>
        </section>
        @if(isset($nextURL))
            <div class="a-center color-white relative js-bottom z-30">
                <a href="{{$nextURL->id}}"
                   class="display--block heritage-bottom__link relative overflow">
                    <div
                        class="fill-dimensions fill-dimensions--extra bg-black skrollr-pointer js-curtain-tb origin-bl z-30"
                        data-emit-events data-bottom-top=""></div>
                    <div class="fill-dimensions multiply opc-60 z-10 bg-black heritage-bottom__mask trans"></div>
                    <div class="fill-dimensions cover-img  scale-out js-scale-in js-scale-in--sm skrollr-pointer opc-0"
                         data-emit-events data-cubic="custom" data-bottom-top="" data-trans="1.6"
                         style="background-image: url({{$nextURL->image}})"></div>

                    <div class="heritage-bottom__title over mb-12 js-bt overflow relative skrollr-pointer"
                         data-emit-events
                         data-trans="1.3" data-bottom-top="">
                        <div class="js-bt__el">
                            {{$nextURL->year}}
                        </div>
                    </div>
                    <div
                        class="heritage-bottom__subtitle font-light font-20 over color-white js-bt overflow relative skrollr-pointer"
                        data-emit-events data-bottom-top="" data-trans="1.3" data-delay=".25">
                        <div class="js-bt__el">
                            {{$nextURL->name}}
                        </div>

                    </div>
                </a>
            </div>
        @elseif(isset($previousURL))
            <div class="a-center color-white relative js-bottom z-30">
                <a href="{{$previousURL->id}}"
                   class="display--block heritage-bottom__link relative overflow">
                    <div
                        class="fill-dimensions fill-dimensions--extra bg-black skrollr-pointer js-curtain-tb origin-bl z-30"
                        data-emit-events data-bottom-top=""></div>
                    <div class="fill-dimensions multiply opc-60 z-10 bg-black heritage-bottom__mask trans"></div>
                    <div class="fill-dimensions cover-img  scale-out js-scale-in js-scale-in--sm skrollr-pointer opc-0"
                         data-emit-events data-cubic="custom" data-bottom-top="" data-trans="1.6"
                         style="background-image: url({{$previousURL->image}})"></div>

                    <div class="heritage-bottom__title over mb-12 js-bt overflow relative skrollr-pointer"
                         data-emit-events
                         data-trans="1.3" data-bottom-top="">
                        <div class="js-bt__el">
                            {{$previousURL->year}}
                        </div>
                    </div>
                    <div
                        class="heritage-bottom__subtitle font-light font-20 over color-white js-bt overflow relative skrollr-pointer"
                        data-emit-events data-bottom-top="" data-trans="1.3" data-delay=".25">
                        <div class="js-bt__el">
                            {{$previousURL->name}}
                        </div>

                    </div>
                </a>
            </div>
        @endif
    </main>
@endsection
