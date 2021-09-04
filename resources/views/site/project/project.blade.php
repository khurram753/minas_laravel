@extends('layout.front-layout.app')

@section('title')
    MINAS - Project
@endsection

@section('style')
    <style>
        .block-33 {
            width: 33%;
        }
    </style>
@endsection

@section('content')

    @include('site.project.section.project_categories')

    <main class="main-content padd-top">
        <div class="fill-dimensions bg-black z-20"></div>
        <div class="z-30 relative">
            <div class="full-height relative mb-139 mobile-hor-height-100 tablet-height-100">
                <article class="relative" itemscope itemtype="http://schema.org/CreativeWork">
                    <div class="block-50 display--inline full-height relative overflow tablet-hor-fill-dimensions tablet-height-100">
                        <div class="fill-dimensions opc-0 no-visible js-scale-in--sm js-fade-in js-scale skrollr-pointer"
                            data-emit-events data-bottom-top="" data-cubic="custom" data-trans="1.3">
                            <div class="bg-gradient z-30 fill-dimensions"></div>
                            <div class="fill-dimensions z-20 cover-img"
                                 style="background-image:url('/site/images/minasdesignes-cycladic-stool.jpg'); background-position: left;">
                                <div class="fill-dimensions multiply bg-black opc-20 z-10"></div>
                            </div>
                        </div>
                    </div><div class="block-50 display--inline full-height mobile-hor-height-100 relative tablet-hor-100 tablet-height-100">
                        <div class="color-white abs-center tablet-hor-rel-no-center mobile-hor-100 tablet-hor-padded  project-big-texts-holder mobile-hor-padded">
                            <div class="overflow tablet-hor-hidden">
                                <div class="js-scale-out overflow skrollr-pointer" data-emit-events data-bottom-top="">
                                    <div class="block-100 js-scale-out__holder opc-0 no-visible overflow">
                                        <div class="js-scale-out__img">
                                            <img itemprop="image" class="resp-image"
                                                 src="{{asset($singleProject->featured_image)}}" alt="Minas Designs"/>
                                            <div class="fill-dimensions multiply bg-black opc-40 z-10"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="abs-tl z-30 project-big-texts tablet-hor-rel mobile-hor-gutter">
                                <div
                                    class="font-25 extra-lh extra-ls font-light mb-6 opc-0 no-visible js-fade-left skrollr-pointer"
                                    data-emit-events data-bottom-top="" data-trans="1.4" data-delay=".1">{{\Carbon\Carbon::parse($singleProject->created_at)->format('Y')}}
                                </div>
                                <h3 itemprop="name" class="font-bold font-40 extra-lh maxw-270 mb-20 project-big-texts__title opc-0 no-visible js-fade-left skrollr-pointer"
                                    data-emit-events data-bottom-top="" data-trans="1.4" data-delay=".15">
                                    {{$singleProject->name}}
                                </h3>
                                <div
                                    class="font-bold font-12 extra-lh4 extra-ls  z-30 left--84 top-29 opc-0 no-visible js-fade-left skrollr-pointer"
                                    data-emit-events data-bottom-top="" data-trans="1.4" data-delay=".2">
                                    {{$singleProject->category->name}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="abs-bc z-40 bottom-58 opc-0 no-visible js-fade-in skrollr-pointer tablet-rel tablet-center big-project-link"
                        data-emit-events data-bottom-top="" data-cubic="custom" data-trans="1.6" data-delay=".4">
                        <a href="{{route('projectDetail',['id'=>$singleProject->id])}}" class="circle-btn cursor relative display--inline circle-link">
                            <svg class="circle-btn__wrapper-circle" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 151.689 148.568">
                                <path class="js-svg-circle circle-btn__circle" fill="none" stroke="#fff"
                                      stroke-width="1" stroke-miterlimit="10" d="M75.845,145.15
		c-39.139,0-70.867-31.728-70.867-70.866S36.706,3.418,75.845,3.418c39.138,0,70.866,31.728,70.866,70.866
		S114.983,145.15,75.845,145.15"/>
                                <path class="js-stretched" fill="none" opacity="0" stroke="#fff" stroke-width="1"
                                      stroke-miterlimit="10"
                                      d="M113.228 5.526a10.122 10.122 0 0 0-.672-.479c-10.217-6.64-24.534-3.415-35.743-2.101-7.854.92-15.701 2.125-23.366 4.098-13.122 3.376-25.936 9.011-35.57 18.785C.454 43.503-2.653 70.782 4.779 93.701c12.587 38.817 65.455 69.188 104.126 47.793 18.448-10.207 31.242-31.346 37.575-50.686 3.17-9.681 6.398-20.775 4.775-31.049-1.498-9.484-7.574-16.885-13.6-23.975-6.826-8.031-12.545-16.946-19.49-24.863-1.588-1.81-3.064-3.941-4.937-5.395z"/>
                                <path class="js-stretched-2" fill="none" stroke="#ffffff" opacity="0"
                                      stroke-miterlimit="10" d="M107.309,4.917c-0.223-0.148-0.452-0.288-0.686-0.417
		C96.241-1.223,82.575,2.916,71.792,4.98c-7.556,1.447-15.087,3.17-22.385,5.624C36.912,14.805,24.875,21.176,16.215,31.34
		C0.555,49.718-0.537,76.407,8.292,98.124c3.569,8.781,8.526,22.413,15.723,29.416c13.605,13.24,33.127,13.928,51.836,15.442
		c12.843,1.04,25.689,1.455,36.85-5.824c17.182-11.205,28.106-32.619,32.887-51.832c2.394-9.617,4.744-20.611,2.446-30.465
		c-2.123-9.098-8.54-15.85-14.888-22.307c-7.189-7.311-13.368-15.558-20.665-22.752C110.812,8.158,109.23,6.196,107.309,4.917z"/>
                            </svg>
                            <span class="abs-center a-center z-5 font-12 extra-ls extra-lh2 font-bold block-70">
                                EXPLORE THE PROJECT
                            </span>
                        </a>
                    </div>
                    <div class="scroll-to project-icon-down trans abs-br z-30 cursor mobile-hor-hidden" data-target="#section-2">
                        <div class="icon icon--arrows-long-down color-red arrow-bounce"></div>
                    </div>
                    <span itemprop="author" content="Minas Designs"></span>
                    <span itemprop="creator" content="Minas Designs"></span>
                </article>
            </div>


            <div id="section-2" class="grid max-12cols-g mobile-hor-100 over pb-74 mobile-hor-nopad--left">
                <div class="gutter mobile-hor-gutter">
                    <header class="maxw-725 m-auto color-grey a-center mb-69">
                        <h1 class="font-thin disable-m-p mb-32 font-70 js-skew-letter skrollr-pointer" data-emit-events
                            data-trans="1.4" data-bottom-top="">PROJECTS CURATED BY MINAS
                        </h1>
                        <div class="font-17 m-auto font-light maxw-600 js-skew-letter skrollr-pointer" data-emit-events
                             data-trans="1.4" data-delay=".1" data-bottom-top="">QUALITY AND CRAFTSMANSHIP DEFINES OUR
                            WORK, A LEGACY OF CREATION.
                            DISCOVER WHAT HIDES BELLOW.
                        </div>
                    </header>
                    <div class="a-center mb-93 opc-0 no-visible js-fade-in  mobile-hor-nomargin skrollr-pointer"
                         data-emit-events data-bottom-top="" data-delay=".2" data-trans="1.3">
                        <div class="display--inline-top cursor js-filter-link filter-link" id="js-filter-link">
                            <div class="font-light font-25 filters__box-title before-white relative a-left trans">
                                CATEGORY<span class="icon icon--arrows-thick-down abs-tr"></span></div>
                            <div class="font-bold font-17 extra-ls-2 a-left trans">
                                ALL CATEGORIES
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="grid max-12cols-g over pb-74 mobile-hor-100 tablet-hor-center mobile-hor-nopad--bottom">
                @foreach($projects as $key => $project)
                    @if($key == 0)
                        <div class="line bg-dark-grey  js-scale skrollr-pointer tablet-hidden" data-emit-events data-bottom-top="" data-cubic="custom" data-trans="1.3"></div>
                        <div class="project-block relative pt-30">
                    @elseif($key !=0 && $key % 3  == 0)
                        <div class="line bg-dark-grey  js-scale skrollr-pointer tablet-hidden" data-emit-events data-bottom-top="" data-cubic="custom" data-trans="1.3"></div>
                        <div class="project-block relative pt-30">
                    @endif
                        <article class="block-33 tablet-hor-50 tablet-100 mb-118 display--inline-top a-center mobile-hor-mb-90">
                            <div class="gutter mobile-hor-gutter">
                                <a itemprop="url" href="{{route('projectDetail',['id'=>$project->id])}}" arial-label="Read more about project Carbon Black Bar cart" class="project-link relative link-underline color-white display--inline-top ">
                                    <span class=" display--inline-top relative mb-34 js-scale-out overflow skrollr-pointer" data-emit-events data-bottom-top="" data-delay="0">
                                        <span class="display--block block-100 js-scale-out__holder opc-0 no-visible overflow">
                                            <span class="display--block js-scale-out__img">
                                                <span class="fill-dimensions multiply trans bg-grey-med opc-20 z-10"></span>
                                                <img itemprop="image" class="resp-image relative z-1"
                                                     src="{{$project->featured_image}}"
                                                     alt="{{$project->name}}">
                                                <span class="abs-center trans z-20 color-red opc-0 icon icon--arrows-thick-right font-40"></span>
                                            </span>
                                        </span>
                                    </span>
                                    <header>
                                        <div class="font-bold font-12 extra-ls extra-lh3 mb-7 js-fade-left opc-0 no-visible skrollr-pointer" data-emit-events data-bottom-top="" data-trans="1.4" data-ease="custom">
                                            {{\Carbon\Carbon::parse($project->created_at)->format('Y')}}
                                        </div>
                                        <h3 class="font-light font-25 extra-lh extra-ls maxw-320 m-auto mb-10 js-fade-left opc-0  skrollr-pointer"
                                            data-emit-events data-bottom-top="" data-trans="1.4" data-delay=".15">
                                            <span itemprop="name" class="link-underline-text link-underline-text--white">
                                                {{ucfirst($project->name)}}
                                            </span>
                                        </h3>
                                        <div class="font-bold font-12 extra-ls extra-lh3 color-dark-light js-fade-left opc-0 no-visible skrollr-pointer" data-emit-events data-bottom-top="" data-trans="1.4" data-ease="custom" data-delay=".15">
                                            {{ucfirst($project->category->name)}}
                                        </div>
                                    </header>
                                </a>
                            </div>
                            <span itemprop="author" content="Minas Designs"></span>
                            <span itemprop="creator" content="Minas Designs"></span>
                        </article>
                    @if(($key !=0 && $key % 3  == 0))
                        </div>
                    @endif
                @endforeach


            </div>

        </div>
    </main>

@endsection
