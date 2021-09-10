@extends('layout.front-layout.app')

@section('title')
    MINAS - {{ucfirst($collection->name)}}
@endsection

@section('style')
    <style>
        .block-33{
            width: 33%;
        }
    </style>
@endsection

@section('content')
    <main class="main-content padded mediakit bg-grey tablet-hor-padded tablet-hor-pb-100 mobile-hor-nopad--bottom">
        <section class="grid max-12cols-g mobile-hor-100">
            <div class="gutter mobile-hor-gutter">
                <header class="mediakit__header m-auto maxw-500 a-center color-black">
                    <h2 class="mb-37 js-bt overflow relative skrollr-pointer" data-emit-events data-bottom-top="">
                        <span class="js-bt__el display--block"><span class="font-light font-18 bracket-icon">{</span>
                            <span class="font-bold font-12 extra-l  bracket-title">COLLECTION OF PRESS RELEASES</span>
                            <span class="font-light font-18 bracket-icon">}</span>
                        </span>
                    </h2>
                    <h1 class="font-thin font-70 mb-23 js-skew-letter skrollr-pointer" data-emit-events data-trans="1.4"
                        data-bottom-top="" data-delay=".2">
                        {{ucfirst($collection->name)}}
                    </h1>

                    <div class="font-thin font-17 mediakit__page-content maxw-470 m-auto js-skew-letter skrollr-pointer"
                         data-emit-events data-trans="1.4" data-delay=".25" data-bottom-top="">
                        <p>A LIST OF USEFUL FILES FOR REPORTERS AND MAGAZINES. WE WOULD LIKE TO NOTIFY YOU THAT BY
                            DOWNLOADING ANY OF THESE FILES,
                            <strong>YOU AGREE TO OUR <a href="#">PRIVACY POLICY</a>.</strong>
                        </p>
                    </div>
                </header>
                <div class="opc-0 no-visible js-fade-in skrollr-pointer" data-emit-events data-bottom-top=""
                     data-delay=".3" data-trans="1.4">
                    <div class="selection-box-holder relative m-auto cursor trans" id="selection-trigger">
                        <div class="selection-box z-10">
                            <div
                                class="display--inline relative font-bold font-20 color-black selection-box__link z-10">
                                {{ucfirst($collection->name)}} <span class="font-thin">({{sizeof($data)}})</span>
                            </div>
                            <div class="abs-tr icon icon--arrows-thick-down color-black selection-box__icon trans"
                                 id="selection-arrow"></div>
                        </div>
                        <div class="selection-box__inner abs-tl block-100 opc-0 no-visible bg-white trans z-40"
                             id="selection-target">
                            <div class="over">
                                @foreach($collections as $collection)
                                    <a href="{{route('mediaKit',['collection_id'=>$collection->id])}}"
                                       class="font-bold font-20 color-black selection-box__link-inner display--block">
                                        <span class="relative overflow display--block">
                                            <span class=" selection-title display--block trans opc-0 delay-1">{{$collection->name}}
                                                <span class="font-thin">({{sizeof($collection->press)}})</span>
                                            </span>
                                        </span>
                                    </a>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="mediakit-list mobile-hor-pb-90">
            <div class="grid max-12cols-g mobile-hor-100">
                <div class="gutter mobile-hor-gutter">
                    <div class="post-holder mediakit-list relative tablet-hor-center">
                        <div
                            class="line line--black line--abs abs-bl post-holder__line js-scale skrollr-pointer tablet-hor-hidden"
                            data-emit-events data-bottom-top="" data-cubic="custom" data-trans="1.3"></div>
                        @foreach($data as $photo)
                            <article class="block-33 tablet-hor-50 tablet-100 display--inline-top" itemscope
                                     itemtype="http://schema.org/DataDownload">
                                <div class="gutter relative a-center mobile-hor-nomargin">
                                    <a itemprop="url" rel="nofollow noreferrer" download="" class="overflow display--inline mediakit-download  trans color-black link-underline {{$photo->collection_id == 3 ? 'play_video':''}}"
                                       @if($photo->collection_id == 3)
                                        href="javascript:void(0)" data-video="{{$photo->video}}"
                                       @else
                                           @if($photo->file)
                                            href="{{asset($photo->file)}}" target="_blank"
                                           @else
                                            href="{{asset($photo->image)}}"
                                           @endif
                                       @endif
                                    >
                                        <span class="relative overflow display--inline mb-23 js-scale-out skrollr-pointer" data-emit-events data-bottom-top="">
                                            <span class="js-scale-out__holder display--block opc-0 no-visible overflow">
                                                <span class="display--block js-scale-out__img">
                                                    <img src="{{asset($photo->image)}}" alt="Minas Designs-Purity of Sunlight" class="block-image">
                                                    <span class="fill-dimensions bg-grey multiply opc-20 trans mediakit-download__mask z-10"></span>
                                                    <span class="abs-tc block-100 color-red z-10 mediakit-download__over opc-0 trans">
                                                        <span class="font-12 font-bold extra-ls mb-24 extra-lh relative mediakit-download__over-title display--inline">
                                                            @if($photo->collection_id == 3)
                                                                Play Video
                                                            @else
                                                                DOWNLOAD
                                                            @endif
                                                        </span>
                                                        <span class="clear"></span>
                                                         @if($photo->collection_id == 3)
                                                            <span class="icon icon--arrows-thick-down font-25 display--inline arrow-bounce-center"></span>
                                                        @else
                                                            <span class="icon icon--arrows-thick-down font-25 display--inline arrow-bounce-center"></span>
                                                        @endif

                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="a-left display--block">
                                            <span class="font-bold font-12 extra-ls extra-lh3 mediakit-download__date display--block mb-18 opc-0 no-visible js-fade-left skrollr-pointer"
                                                data-emit-events data-bottom-top="" data-trans="1.4"
                                                itemprop="datePublished" content="2019-05-07 12:57:55">
                                                <span class="month">{{\Carbon\Carbon::parse($photo->date)->format('M')}}.</span>
                                                <span class="date-year">{{\Carbon\Carbon::parse($photo->date)->format('Y')}}</span>
                                            </span>
                                            <span itemprop="name" class="display--block font-bold font-25 extra-ls relative opc-0 no-visible js-fade-left skrollr-pointer" data-delay=".1" data-emit-events data-bottom-top="" data-trans="1.4">
                                            <span class="link-underline-text link-underline-text--sm">
                                                {{$photo->name}}
                                            </span>
                                        </span>
{{--                                        <span class="display--block font-light font-25 opc-0 no-visible js-fade-left skrollr-pointer"--}}
{{--                                            data-delay=".15" data-emit-events data-bottom-top="" data-trans="1.4">--}}
{{--                                            {{$photo}}--}}
{{--                                        </span>--}}
                                    </span>
                                    </a>
                                </div>
                            </article>
                        @endforeach
                    </div>
{{--                    <div class="page-navigation relative gutter opc-0 js-fade-in skrollr-pointer" data-emit-events--}}
{{--                         data-bottom-top="" data-trans="1.4"></div>--}}
                </div>
            </div>
        </div>
    </main>

    <div class="fixed fill-dimensions z-5000 video-fixed">
        <div class="fill-dimensions bg-black z-5 scale-y origin-t" id="video_section_dim"></div>
        <div class="abs-tr opc-0 video-close js-video-fade cursor close-popup close-popup--white" id="video-close"
             style="visibility: visible; opacity: 1;"></div>
        <div class="video a-center z-20 relative full-height js-video-fade">
            <iframe title="vimeo-player" id="iframe"
                    src="" allow="autoplay"
                    allowfullscreen=""
                    frameborder="0"></iframe>
        </div>
    </div>

@endsection


@section('script')
    <script>
        $(document).ready(function(){
            $('.play_video').click(function(){
                $('.video-fixed').css({'visibility': 'inherit', 'opacity': 1});
                $('#video_section_dim').css({'transform-origin': 'left top 0px', 'transform': 'matrix(1, 0, 0, 1, 0, 0)'});
                var video = $(this).data('video');
                $('#iframe').attr('src',video);
            });
            $('#video-close').click(function(){
                $('.video-fixed').css({'visibility': 'hidden', 'opacity': 0});
            });
        });
    </script>
@endsection
