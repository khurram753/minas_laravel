@extends('layout.shop-layout.app')

@section('title')
    {{env('APP_NAME')}} - FAQ
@endsection

@section('style')
        <style>
            .block-60 {
                width: 59%;
            }
        </style>
@endsection




@section('content')
    <main id="content" class="site-content relative">
        <div class="woocommerce"></div>
        <main class="pt-b bg--grey-med faq-page mobile-hor-padded" itemscope="" itemtype="http://schema.org/FAQPage">
            <div class="grid max-12cols-g mobile-hor-100">
                <div class="gutter mobile-hor-gutter">
                    <h1 class="color--black a-center faq-page__title op-0 no-visible js-fade-up in-view skrollable skrollable-after loc"
                        data-emit-events="" data-bottom-top="" data-trans="1.4"
                        style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                        <span class="font-light title-17 bracket-icon">{</span>
                        <span class="font-bold title-13 ls-180 bracket-title">FREQUENTLY ASKED QUESTIONS</span>
                        <span class="font-light title-17 bracket-icon">}</span>
                    </h1>
                </div>
                <div class="block-40 display--inline-top tablet-hor-100">
                    <div class="gutter mobile-hor-gutter">
                        <div class="font-bold title-25 ls-30 color--black underlined faq-page__cat-title op-0 no-visible js-fade-up in-view skrollable skrollable-after loc"
                            data-emit-events="" data-bottom-top="" data-trans="1.4" data-delay=".15"
                            style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                            CATEGORIES:
                        </div>
                        <div class="faq-categories">
                            @foreach($categories as $key => $category)
                                <div class="display--block op-0 no-visible js-fade-up skrollable loc skrollable-before"
                                 data-emit-events="" data-bottom-top="" data-trans="1.4" data-delay="0.0"
                                 style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">

                                    <a href="{{route('faq',['category_id'=>$category->id])}}"
                                        @if(app('request')->input('category_id') == $category->id )
                                            class="faq-cat font-thin color--black title-50 ls-30 display--inline no-trans relative loc">
                                        @elseif(!app('request')->input('category_id') && $key == 0)
                                            class="faq-cat font-thin color--black title-50 ls-30 display--inline no-trans relative loc">
                                        @else
                                            class="faq-cat font-thin color--black title-50 ls-30 display--inline no-trans relative">
                                        @endif
                                        <svg class="icon icon--arrow-long-right abs-tl med op-0 color--black">
                                            <use xlink:href="#arrow-small-right"></use>
                                        </svg>
                                        <div class="relative faq-cat__title trans color--black">
                                            {{$category->name}}
                                        </div>
                                    </a>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
                <div class="block-60 display--inline-top relative tablet-hor-100">
                    <div class="gutter mobile-hor-gutter">
                        <div class="faq-list relative">
                            <div class="faq-line-vertical abs-tl mobile-hor-hidden origin-l js-scale in-view skrollable skrollable-after loc"
                                data-emit-events="" data-bottom-top="" data-trans="1.4"
                                style="opacity: 1; transform-origin: center center 0px; transform: matrix(1, 0, 0, 1, 0, 0);"></div>
                            @foreach($records as $key => $record)
                                <div itemscope="" itemtype="http://schema.org/Question" itemprop="mainEntity"
                                 class="faq-tab relative color--black op-0 no-visible js-fade-up in-view skrollable skrollable-after loc"
                                 data-emit-events="" data-bottom-top="" data-trans="1.4" data-delay="0.0"
                                 style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                                <div class="faq-tab-link cursor" data-content="#faq-tab__content-{{$key+1}}">
                                    <span class="hidden" itemprop="answerCount" content="{{$key+1}}"></span>
                                    <span class="hidden" itemprop="author" itemscope=""
                                          itemtype="http://schema.org/Person">
                                    <span itemprop="name" content="Minas"></span>
                                </span>
                                    <time itemprop="dateCreated" datetime="2019-12-24 13:13:49"></time>
                                    <div class="abs-tl font-bold title-13 faq-tab__counter mobile-hor-hidden">{{$key+1}}</div>
                                    <div class="abs-tr bg--white faq__icon trans">
                                        <svg class="icon icon--plus trans abs-tl">
                                            <use xlink:href="#plus"></use>
                                        </svg>
                                        <svg class="icon icon--minus trans abs-tl op-0">
                                            <use xlink:href="#minus"></use>
                                        </svg>
                                    </div>
                                    <h3 itemprop="name" class="faq-tab__title overflow font-bold title-25 ls-30">
                                        {{$record->question}}
                                    </h3>
                                </div>
                                <div itemprop="suggestedAnswer acceptedAnswer" itemscope=""
                                     itemtype="http://schema.org/Answer" id="faq-tab__content-{{$key+1}}"
                                     class="display--block faq-tab__content faq-tab__content--{{$key+1}}">
                                <span class="hidden" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                                    <span itemprop="name" content="Minas"></span>
                                </span>
                                    <time itemprop="dateCreated" datetime="2019-12-24 13:13:49"></time>
                                    {!! $record->answer !!}
                                </div>
                                <div class="faq-line abs-br bg--black"></div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </main>
@endsection
