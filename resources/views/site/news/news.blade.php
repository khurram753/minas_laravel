@extends('layout.front-layout.app')

@section('title')
    {{env('APP_NAME')}} - News and Update
@endsection

@section('style')
    <style>
        .block-33 {
            width: 33%;
        }
    </style>
@endsection

@section('content')
    <main class="main-content new-page bg-grey tablet-hor-padded tablet-hor-pb-100" id="content">

        <section class="news-page-intro">
            @include('site.news.section.category')
            @include('site.news.section.year')

            <div class="grid max-8cols-g mobile-hor-100">
                <div class="gutter color-black mobile-hor-gutter">
                    <header class="a-center news-page-header color-black">
                        <h2 class="mb-37 js-bt overflow relative skrollr-pointer" data-delay=".1" data-emit-events  data-bottom-top="">
                    <span class="js-bt__el display--block">
                        <span class="font-light font-18 bracket-icon">{</span><span class="font-bold font-12 extra-l  bracket-title">NEWS LIST</span><span class="font-light font-18 bracket-icon">}</span>                    </span>
                        </h2>

                        <h1 class="font-70 font-thin maxw-725 m-auto mb-21 js-skew-letter skrollr-pointer" data-emit-events data-trans="1.4"  data-bottom-top="" data-delay=".1">
                            <SPAN>WHAT’S</SPAN> <SPAN>HAPPENING</SPAN>
                        </h1>
                        <div class="maxw-500 font-light font-17 m-auto js-skew-letter skrollr-pointer" data-emit-events data-trans="1.4"  data-bottom-top="" data-delay=".15">NEW AND NOTEWORTHY EVENTS IN THE WORLD OF MINAS.</div>
                    </header>
                    <div class="filters relative a-right color-black tablet-center">
                        <div class="abs-tl font-light font-25 color-black filters__title opc-0 no-visible js-fade-in skrollr-pointer tablet-hidden" data-emit-events  data-bottom-top="" data-delay=".4" data-cubic="custom" data-trans="1.3">
                            FILTER BY:                </div>
                        <div class="display--inline-top filters__box filters__box--first cursor opc-0 no-visible js-fade-in skrollr-pointer mobile-hor-100 mobile-hor-box-size" data-emit-events  data-bottom-top="" data-delay=".4" data-cubic="custom" data-trans="1.3" id="js-filter-link">
                            <div class="font-light font-25 filters__box-title relative a-left trans">CATEGORY<span class="icon icon--arrows-thick-down abs-tr"></span></div>
                            <div class="font-bold font-17 extra-ls-2 a-left trans">
                                ALL CATEGORIES                    </div>
                        </div><div class="display--inline-top  filters__box cursor opc-0 no-visible js-fade-in skrollr-pointer mobile-hor-100 mobile-hor-box-size" data-emit-events  data-bottom-top="" data-delay=".4" data-cubic="custom" data-trans="1.3" id="js-year-link">
                            <div class="font-light font-25 filters__box-title relative a-left trans">RELEASE YEAR<span class="icon icon--arrows-thick-down abs-tr"></span></div>
                            <div class="font-bold font-17 extra-ls-2 a-left trans">
                                VIEW ALL                    </div>
                        </div>
                        <div class="line line--black opc-0 no-visible js-fade-in skrollr-pointer mobile-hor-hidden" data-emit-events  data-bottom-top="" data-cubic="custom" data-trans="1.3"></div>
                    </div>
                </div>

            </div>
        </section>

        <div class="grid max-8cols-g mobile-hor-100">
            <div class="gutter mobile-hor-gutter">
                <article class="block-100 display--block" itemscope itemtype="http://schema.org/NewsArticle">
                    <a itemprop="url" href="{{route('newsUpdateDetail',['id'=>$singleNews->id])}}" class="post-link-big relative link-underline link-underline-white display--block">
                        <span class="display--block a-center mb-12 opc-0 no-visible js-fade-left skrollr-pointer" data-emit-events  data-bottom-top="" data-trans="1.4">
                            <span class="font-bold font-12 extra-ls extra-lh3">PRODUCTS</span>
                        </span>

                        <span class="post-link-big__image relative display--block js-scale-out overflow skrollr-pointer" data-emit-events  data-bottom-top="" data-delay="">
                            <span class="display--block block-100 js-scale-out__holder opc-0 no-visible overflow">
                                <span class="display--block js-scale-out__img">
                                    <span class="fill-dimensions multiply trans bg-grey-med opc-20 z-10 post-link-big__image-mask"></span>
                                    <img class="block-image relative z-1" itemprop="image" src="{{asset($singleNews->image)}}" alt="Minas Designs-THE PORCELAIN COLLECTION IS BACK">
                                    <span class="fill-dimensions bg-gradient-bt bg-gradient-bt--50-reverse z-20"></span>
                                </span>
                            </span>
                            <span class="abs-tc top-post font-bold font-12 extra-lh3 extra-ls trans z-20 text-underline text-underline--red color-red opc-0 post-link-big-more">READ MORE</span>
                        </span>

                        <header class="post-link-big__header a-center relative z-20">
                            <h2 class="font-thin font-70 post-link-big__title color-white m-auto opc-0 no-visible js-fade-left skrollr-pointer" data-emit-events  data-bottom-top="" data-trans="1.4" itemprop="name headline">
                                <span class="link-underline-text link-underline-text--white">
                                    {{ucfirst($singleNews->name)}}
                                </span>
                            </h2>
                            <span class="font-bold font-12 extra-ls extra-lh3 display--inline-top opc-0 no-visible js-fade-left skrollr-pointer" data-emit-events  data-bottom-top="" data-trans="1.4" itemprop="datePublished" content="2020-12-08 12:13:50">
                                {{ucfirst($singleNews->year)}}
                            </span>

                            <span itemprop="dateModified" content="2020-12-08 12:14:53"></span>
                            <span itemprop="author publisher" itemscope itemtype="http://schema.org/Organization">
                                <span itemprop="name" content="Minas Designs"></span>
                                <span class="hidden" itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                                    <img itemprop="url" src="/site/images/logo-black.png" alt="logo">
                                    <meta itemprop="width" content="180">
                                    <meta itemprop="height" content="60">
                                </span>
                            </span>
                        </header>
                    </a>
                    <span itemprop="mainEntityOfPage" itemscope itemtype="http://schema.org/WebPage"></span>
                </article>
            </div>
        </div>

        <div class="grid max-12cols-g mobile-hor-100">
            <div class="gutter news-list mobile-hor-nomargin">
                @php
                    $loopVar = 3;
                @endphp
                @foreach($news as $key => $simpleNews)

{{--                    @dump($key+1,$loopVar)--}}
                    @if($key+1 == 1)
                        <div class="post-holder relative tablet-hor-center">
                            <div class="line line--black line--abs abs-bl post-holder__line scale-x origin-c js-scale-lr skrollr-pointer skrollable skrollable-after loc" data-emit-events="" data-bottom-top="" data-cubic="custom" data-trans="1.3" style="transform: matrix(1, 0, 0, 1, 0, 0);"></div>
                    @elseif($key+1 == 4)
{{--                        @dump('draw linw 1st else if')--}}
                        </div>
                        <div class="post-holder relative tablet-hor-center">
                            <div class="line line--black line--abs abs-bl post-holder__line scale-x origin-c js-scale-lr skrollr-pointer skrollable skrollable-after loc" data-emit-events="" data-bottom-top="" data-cubic="custom" data-trans="1.3" style="transform: matrix(1, 0, 0, 1, 0, 0);"></div>
                            @php
                                $loopVar = ($key+1)+3;
                            @endphp
                    @elseif( $key+1 == $loopVar && $loopVar != 3 )
{{--                                @dump('draw linw 2nd else if')--}}
                        </div>
                        <div class="post-holder relative tablet-hor-center">
                            <div class="line line--black line--abs abs-bl post-holder__line scale-x origin-c js-scale-lr skrollr-pointer skrollable skrollable-after loc" data-emit-events="" data-bottom-top="" data-cubic="custom" data-trans="1.3" style="transform: matrix(1, 0, 0, 1, 0, 0);"></div>
                            @php
                                $loopVar = $loopVar+3;
                            @endphp
                    @endif

                        <article class="block-33 tablet-hor-50 tablet-100 mb-37 display--inline-top mt-50 " itemscope itemtype="http://schema.org/NewsArticle">
                            <div class="gutter tablet-hor-center">
                                <a itemprop="url" href="{{route('newsUpdateDetail',['id'=>$simpleNews->id])}}" aria-label="Read more about 5 +1 Gifts for him" class="post-link display--block relative maxw-477 link-underline m-auto">
                                    <span class="display--block relative pt-65p  mb-33 js-scale-out overflow skrollr-pointer tablet-nopad--top" data-emit-events  data-bottom-top="" data-delay="0.1">
                                        <span class="display--block abs-tl block-100 js-scale-out__holder opc-0 no-visible overflow tablet-rel">
                                            <span class="display--block js-scale-out__img">
                                                <span class="fill-dimensions multiply trans bg-grey-med opc-20 z-10"></span>
                                                <img class="resp-image relative z-1" itemprop="image" src="{{asset($simpleNews->image)}}" alt="Minas Designs-5 +1 Gifts for him">
                                                <span class="abs-tc top-post font-bold font-12 extra-lh3 extra-ls trans z-20 text-underline text-underline--red color-red opc-0">READ MORE</span>
                                            </span>
                                        </span>
                                    </span>
                                    <header>
                                        <div class="a-left font-bold font-12 mb-2 extra-ls extra-lh3 opc-0 no-visible js-fade-left skrollr-pointer" data-emit-events  data-bottom-top="" data-trans="1.4">PRODUCTS</div>
                                        <span class="a-left display--block  font-bold font-12 mb-22 extra-ls extra-lh3 display--inline-top opc-0 no-visible js-fade-left skrollr-pointer" data-emit-events  data-bottom-top="" data-trans="1.4" data-delay=".1" itemprop="datePublished" content="2019-12-11 15:13:15">
                                            {{$simpleNews->year}}
                                        </span>
                                        <h3 class="a-left font-thin font-25 maxw-410 opc-0 no-visible js-fade-left skrollr-pointer" data-emit-events  data-bottom-top="" data-trans="1.4" data-delay=".15" itemprop="headline name">
                                            <span class="link-underline-text">
                                                {{ucfirst($simpleNews->name)}}
                                            </span>
                                        </h3>
                                    </header>
                                    <span itemprop="dateModified" content="2019-12-13 15:33:10"></span>
                                    <span itemprop="author publisher" itemscope itemtype="http://schema.org/Organization">
                                        <span itemprop="name" content="Minas Designs"></span>
                                        <span class="hidden" itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                                            <img itemprop="url" src="{{asset($simpleNews->image)}}" alt="logo">
                                            <meta itemprop="width" content="180">
                                            <meta itemprop="height" content="60">
                                        </span>
                                    </span>
                                </a>
                                <span itemprop="mainEntityOfPage" itemscope itemtype="http://schema.org/WebPage"></span>
                            </div>
                        </article>

{{--                    @if($key+1 == $loopVar)--}}
{{--                       </div>--}}
{{--                                @php--}}
{{--                                    $loopVar = $loopVar+3;--}}
{{--                                @endphp--}}
{{--                    @endif--}}
                @endforeach
{{--                <div class="page-navigation relative gutter opc-0 no-visible js-fade-in skrollr-pointer" data-emit-events  data-bottom-top="" data-delay=".4" data-cubic="custom" data-trans="0.8">--}}
{{--                    <nav class="navigation pagination" role="navigation">--}}
{{--            <span class="prev page-numbers disabled"><span class="pagination-arrows prev-link trans color-black">--}}
{{--                                                        <span class="font-70 font-thin pagination-arrows__title trans">PREV.</span>--}}
{{--                                                         <span class="icon icon--arrows-long-left abs-lc pagination-arrows__icon opc-0 trans"></span>--}}
{{--                                                    </span></span><span aria-current='page' class='page-numbers current'>1</span><a class='page-numbers' href='news-and-update.html'>2</a><a class="next page-numbers" href="news-and-update.html"><span class="pagination-arrows next-link trans color-black">--}}
{{--                                                        <span class="font-70 font-thin pagination-arrows__title trans">NEXT</span>--}}
{{--                                                        <span class="icon icon--arrows-long-right abs-rc pagination-arrows__icon opc-0 trans"></span>--}}
{{--                                                    </span></a>            <div class="clear"></div>--}}
{{--                    </nav>--}}
{{--                </div>            </div>--}}
        </div>
    </main>

@endsection
