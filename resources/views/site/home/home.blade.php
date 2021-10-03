@extends('layout.front-layout.app')

@section('title')
    {{env('APP_NAME')}} - HOMEPAGE
@endsection

@section('style')
    <style>
        .embed-container iframe {
            pointer-events: all !important;
            width: 0% !important;
            height: 0% !important;
        }

        .bigProductClass{
            float: left;
            width: 50%;
        }

        .bigProductImage{
            height: 100% !important;
        }

        .discoverNewClass{
            float: left;
        }


    </style>
@endsection

@section('content')

    <main class="overflow relative">
        <div class="embed-container relative full-height overflow" id="section-1">
            <div class="embed-container__inner overflow">
                {{--                <video class="overflow z-1 video-inner abs-center" muted="muted" loop="" id="home-video"--}}
                {{--                       playsinline="">--}}
                {{--                    <source src="/site/images/video_intro.mp4" type="video/mp4">--}}
                {{--                    Your browser does not support the <code>video</code> element.--}}
                {{--                </video>--}}


                <iframe title="vimeo-player"
                        src="{{$home->video}}" allow="autoplay"
                        allowfullscreen=""
                        frameborder="0"></iframe>

                <div class="intro-text-holder abs-bl font-light font-25 z-30 mobile-hor-hidden">
                    {!! $home->description !!}
                </div>
            </div>
            <div
                class="abs-bc fixed z-20 opc-0 no-visible js-hp-fade-after hp-intro-text-link link-underline a-center cursor font-bold font-12 extra-lh3 scroll-to"
                data-target="#section-2">
                <div class="trans hp-intro-text-link__title relative">
                    UNVEIL MINAS WORLD
                    <div class="line line--abs abs-bl bg-white line trans"></div>
                </div>
            </div>

        </div>

        @include('site.home.section.heritage')
        @include('site.home.section.product')
        @include('site.home.section.project')
        @include('site.home.section.news')





        <aside id="home-aside" class="color-red z-600 trans abs-rc fixed home-aside desktop-disable"
               data-anchor-target="#footer"
               data-0="@class:color-red z-600 trans abs-rc fixed home-aside desktop-disable"
               data-center-top="@class: color-red z-600 trans abs-rc fixed home-aside faded desktop-disable"
               style="">
            <span class="vertical-writing font-bold font-12 extra-ls  opc-0 js-hp-fade">
                <span class="display--inline mb-4">N<sup>o</sup></span>
                <span class="display--inline relative">
                    <span class="aside-num display--inline trans faded loc"
                          data-anchor-target="#section-1"
                          data-0="@class:aside-num display--inline trans faded loc"
                          data-center-bottom="@class:aside-num display--inline trans faded"
                          style="">1</span>
                    <span class="aside-num display--inline trans abs-lc faded" data-anchor-target="#section-2"
                        data-0="@class:aside-num display--inline trans abs-lc faded"
                        data-center-top="@class:aside-num display--inline trans faded  abs-lc loc"
                        data-center-bottom="@class:aside-num  abs-lc display--inline trans faded" style="">
                        2
                    </span>
                    <span class="aside-num display--inline trans abs-lc faded" data-anchor-target="#section-3"
                        data-0="@class:aside-num display--inline trans abs-lc faded"
                        data-center-top="@class:aside-num display--inline trans faded  abs-lc loc"
                        data-center-bottom="@class:aside-num  abs-lc display--inline trans faded" style="">
                        3
                    </span>
                    <span class="aside-num display--inline trans abs-lc faded" data-anchor-target="#section-4"
                        data-0="@class:aside-num display--inline trans abs-lc faded"
                        data-center-top="@class:aside-num display--inline trans faded  abs-lc loc"
                        data-center-bottom="@class:aside-num  abs-lc display--inline trans faded" style="">
                        4
                    </span>
                    <span class="aside-num display--inline trans abs-lc faded" data-anchor-target="#section-5"
                        data-0="@class:aside-num display--inline trans abs-lc faded"
                        data-center-top="@class:aside-num display--inline trans faded  abs-lc loc"
                        data-center-bottom="@class:aside-num  abs-lc display--inline trans faded"
                        style="">
                        5
                    </span>
                </span>
                <span class="display--inline aside-line"></span>
                <span class="display--inline">5</span>
            </span>


        </aside>
    </main>





@endsection
