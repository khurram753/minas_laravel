@extends('layout.front-layout.app')

@section('title')
    MINAS - News Detail
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
    <main class="main-content bg-black">

        {!! $data->description !!}


        <div class="related-posts relative js-bottom mobile-hor-pt-90 mobile-hor-nopad--bottom" data-offset="300">
            <div class="fill-dimensions bg-grey-med"></div>
            <div class="grid max-12cols-g">
                <div class="gutter">
                    <h3 class="over a-center color-black related-posts__title mobile-hor-mb-40 js-bt overflow relative skrollr-pointer"
                        data-emit-events data-bottom-top="">
                            <span class="js-bt__el display--block">
                                <span class="font-light font-18 bracket-icon">{</span>
                                <span class="font-bold font-12 extra-l  bracket-title">
                                    RELATED NEWS
                                </span>
                                <span class="font-light font-18 bracket-icon">}</span>
                            </span>
                    </h3>
                    <div class="post-holder related-posts__holder over a-center">
                        <div class="line line--black line--abs abs-tl post-holder__line js-scale skrollr-pointer"
                             data-emit-events data-bottom-top="" data-cubic="custom" data-trans="1.3"></div>
                        @foreach($relatedProjects as $relatedProduct)
                            <article class="block-33 tablet-hor-50 tablet-100 mb-37 display--inline-top mt-50 "
                                     itemscope
                                     itemtype="http://schema.org/NewsArticle">
                                <div class="gutter tablet-hor-center">
                                    <a itemprop="url" href="{{route('newsUpdateDetail',['id'=>$relatedProduct->id])}}" aria-label="Read more about THE PORCELAIN COLLECTION IS BACK" class="post-link display--block relative maxw-477 link-underline m-auto">
                                        <span
                                            class="display--block relative pt-65p  mb-33 js-scale-out overflow skrollr-pointer tablet-nopad--top"
                                            data-emit-events data-bottom-top="" data-delay="0.1">
                                            <span
                                                class="display--block abs-tl block-100 js-scale-out__holder opc-0 no-visible overflow tablet-rel">
                                                <span class="display--block js-scale-out__img">
                                                    <span
                                                        class="fill-dimensions multiply trans bg-grey-med opc-20 z-10"></span>
                                                    <img class="resp-image relative z-1" itemprop="image"
                                                         src="{{asset($relatedProduct->image)}}"
                                                         alt="Minas Designs-THE PORCELAIN COLLECTION IS BACK">
                                                    <span
                                                        class="abs-tc top-post font-bold font-12 extra-lh3 extra-ls trans z-20 text-underline text-underline--red color-red opc-0">
                                                        READ MORE
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                        <header>
                                            <div class="a-left font-bold font-12 mb-2 extra-ls extra-lh3 opc-0 no-visible js-fade-left skrollr-pointer" data-emit-events data-bottom-top="" data-trans="1.4">
                                                PRODUCTS
                                            </div>
                                            <span class="a-left display--block  font-bold font-12 mb-22 extra-ls extra-lh3 display--inline-top opc-0 no-visible js-fade-left skrollr-pointer"
                                                data-emit-events data-bottom-top="" data-trans="1.4" data-delay=".1" itemprop="datePublished" content="2020-12-08 12:13:50">
                                                {{$relatedProduct->year}}
                                            </span>
                                            <h3 class="a-left font-thin font-25 maxw-410 opc-0 no-visible js-fade-left skrollr-pointer"
                                                data-emit-events data-bottom-top="" data-trans="1.4" data-delay=".15"
                                                itemprop="headline name">
                                                <span class="link-underline-text">
                                                    {{ucfirst($relatedProduct->name)}}
                                                </span>
                                            </h3>
                                        </header>
                                        <span itemprop="dateModified" content="2020-12-08 12:14:53"></span>
                                        <span itemprop="author publisher" itemscope itemtype="http://schema.org/Organization">
                                            <span itemprop="name" content="Minas Designs"></span>
                                            <span class="hidden" itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                                                <img itemprop="url" src="{{asset($relatedProduct->image)}}" alt="logo">
                                                <meta itemprop="width" content="180">
                                                <meta itemprop="height" content="60">
                                            </span>
                                        </span>
                                    </a>
                                    <span itemprop="mainEntityOfPage" itemscope itemtype="http://schema.org/WebPage"></span>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
