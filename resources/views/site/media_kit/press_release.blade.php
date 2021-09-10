@extends('layout.front-layout.app')

@section('title')
    MINAS - {{ucfirst($collection->name)}}
@endsection



@section('content')
    <main class="pt-113 pb-240 tablet-hor-pb-100 tablet-hor-padded mobile-hor-nopad--bottom">
        <div class="fill-dimensions bg-grey z-20"></div>
        <div class="z-30 relative color-black">
            <div class="grid max-12cols-g pb-82 mobile-hor-100">
                <div class="gutter mobile-hor-gutter">
                    <header class="relative a-center z-30 mb-93">
                        <div class="mb-30 js-bt overflow relative skrollr-pointer skrollable skrollable-after"
                             data-delay=".1" data-emit-events="" data-bottom-top="" style="">
                            <div class="js-bt__el display--block"
                                 style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                                <span class="font-light font-18 bracket-icon">{</span>
                                <span class="font-bold font-12 extra-l  bracket-title">COLLECTION OF PRESS RELEASES</span>
                                <span class="font-light font-18 bracket-icon">}</span></div>
                        </div>
                        <div>
                            <h1 class="font-thin font-70 extra-lh mb-19 "
                                data-emit-events="" data-trans="1.4" data-bottom-top="" data-delay=".1"
                                style="visibility: inherit; opacity: 1;
                                transform: matrix(1.00137, 0, 0, 1, 0, 0);">
                                PRINTED RELEASES
                            </h1>
                            <h2 class="font-light font-17 maxw-480 m-auto "
                                data-emit-events="" data-trans="1.4" data-bottom-top="" data-delay=".15"
                                style="visibility: inherit; opacity: 1; transform: matrix(1.00137, 0, 0, 1, 0, 0);">
                                <p>
                                    AN OFFICIAL STATEMENT ISSUED TO NEWSPAPERS GIVING INFORMATION ON A PARTICULAR
                                    MATTER.
                                </p>
                            </h2>
                        </div>
                    </header>
                    <div class="retailers__buttons a-center mb-53 js-fade-in skrollr-pointer skrollable loc skrollable-before"
                        data-emit-events="" data-bottom-top="" data-delay=".4" data-cubic="custom" data-trans="1"
                        style="visibility: inherit; opacity: 1;">
                        <a href="javascript:void(0)" id="printed"
                           class="retailers-btn display--inline a-center trans mobile-hor-100 cursor loc">
                            <span class="font-bold font-25 relative pr-50 display--inline">PRINTED                            <span
                                    class="abs-rc font-thin">({{sizeof($printedProduct)}})</span>
                            </span>
                        </a>
                        <a href="javascript:void(0)" id="digital"
                               class="retailers-btn display--inline a-center trans mobile-hor-100 cursor ">
                            <span class="font-bold font-25 relative pr-50 display--inline">DIGITAL                            <span
                                    class="abs-rc font-thin">({{sizeof($digitalProduct)}})</span>
                            </span>
                        </a>
                    </div>
{{--                    <div class="a-center mb-34 js-fade-in skrollr-pointer skrollable loc skrollable-before"--}}
{{--                         data-emit-events="" data-bottom-top="" data-delay=".65" data-cubic="custom" data-trans="1"--}}
{{--                         style="visibility: inherit; opacity: 1;">--}}
{{--                        <div class="display--inline-top cursor js-filter-link filter-link" id="js-year-link">--}}
{{--                            <div class="font-light font-25 filters__box-title relative a-left trans">RELEASE YEAR<span--}}
{{--                                    class="icon icon--arrows-thick-down abs-tr"></span></div>--}}
{{--                            <div class="font-bold font-17 extra-ls-2 a-left trans">--}}
{{--                                VIEW ALL--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="line line--black js-scale skrollr-pointer skrollable loc skrollable-before"
                         data-emit-events="" data-bottom-top="" data-cubic="custom" data-trans="1.4"
                         style="opacity: 1; transform-origin: center center 0px; transform: matrix(1, 0, 0, 1, 0, 0);"></div>
                </div>
            </div>

            <div class="grid max-12cols-g printedSection">
                @foreach($printedProduct as $key => $product)
                   @if($key == 0)
                        <div class="relative pt-30">
                   @elseif($key !=0 && $key % 4  == 0)
                        <div class="relative pt-30">
                   @endif


                            <article class="block-25 tablet-hor-50 mobile-hor-100 display--inline-top press-download__date mb-23"
                                itemscope="" itemtype="http://schema.org/DataDownload">
                                <div class="gutter a-center">
                                    <a  arial-label="Download PDF" title="bill &amp; coo mykonos 2021" download=""  class="display--inline mediakit-download cursor mediakit-download--small link-underline"

                                            @if($product->file)
                                                href="{{asset($product->file)}}" target="_blank"
                                            @else
                                                href="{{asset($product->image)}}"
                                            @endif


                                    >
                                        <span class="display--block relative js-scale-out overflow skrollr-pointer skrollable skrollable-before"
                                          data-emit-events="" data-bottom-top="" style="">
                                            <span class="display--block block-100 js-scale-out__holder opc-0 no-visible overflow">
                                                <span class="display--block js-scale-out__img">
                                                    <span
                                                        class="fill-dimensions bg-black mediakit-download__mask multiply opc-20 trans z-10"></span>
                                                    <img class="greyscaled resp-image mb-23"
                                                         src="{{asset($product->image)}}"
                                                         alt="Minas Designs-Bill &amp; Coo Mykonos 2021">
                                                    <span class="abs-tc block-100 color-red z-10 mediakit-download__over opc-0 trans">
                                                        <span class="font-12 font-bold extra-ls mb-24 extra-lh relative mediakit-download__over-title display--inline">DOWNLOAD</span>
                                                        <span class="clear"></span>
                                                        <span class="icon icon--arrows-thick-down font-25 display--inline arrow-bounce-center"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="font-12 extra-ls extra-lh3 font-bold mb-16 mediakit-download__date display--block mb-18 opc-0 no-visible js-fade-left skrollr-pointer skrollable skrollable-before"
                                              data-emit-events="" data-bottom-top="" data-trans="1.4" data-delay="0"
                                              itemprop="datePublished" content="2021-08-03 15:16:53" style="">
                                            <span class="month">{{\Carbon\Carbon::parse($product->date)->format('M')}}.</span>
                                            <span class="date-year">{{\Carbon\Carbon::parse($product->year)->format('Y')}}</span>
                                        </span>
                                        <h3 itemprop="name" class="display--block font-bold font-25 opc-0 no-visible js-fade-left skrollr-pointer skrollable skrollable-before" data-emit-events="" data-bottom-top="" data-trans="1.4" data-delay=".1" style="">
                                            <span class="link-underline-text link-underline-text--sm">{{$product->name}}</span>
                                        </h3>
                                        <span class="display--block font-light font-25 opc-0 no-visible js-fade-left skrollr-pointer skrollable skrollable-before"
                                              data-emit-events="" data-bottom-top="" data-trans="1.4" data-delay=".15" style="">
                                            <span class="link-underline-text link-underline-text--sm">{{$product->name}}</span>
                                        </span>
                                    </a>
                                </div>
                            </article>


                   @if($key == 0)
                        <div class="line line--black js-scale skrollr-pointer tablet-hor-hidden skrollable skrollable-before"
                                     data-emit-events="" data-bottom-top="" data-cubic="custom" data-trans="1.4" style=""></div>
                   </div>
                   @elseif($key !=0 && $key % 4  == 0)
                        <div class="line line--black js-scale skrollr-pointer tablet-hor-hidden skrollable skrollable-before"
                                     data-emit-events="" data-bottom-top="" data-cubic="custom" data-trans="1.4" style=""></div>
                   </div>
                   @endif


                @endforeach

            </div>


            <div class="grid max-12cols-g digitalSection" >
                @foreach($digitalProduct as $key => $product)
                    @if($key == 0)
                        <div class="relative pt-30">
                            @elseif($key !=0 && $key % 4  == 0)
                                <div class="relative pt-30">
                                    @endif


                                    <article class="block-25 tablet-hor-50 mobile-hor-100 display--inline-top press-download__date mb-23"
                                             itemscope="" itemtype="http://schema.org/DataDownload">
                                        <div class="gutter a-center">
                                            <a  arial-label="Download PDF" title="bill &amp; coo mykonos 2021" download=""  class="display--inline mediakit-download cursor mediakit-download--small link-underline"

                                                @if($product->file)
                                                href="{{asset($product->file)}}" target="_blank"
                                                @else
                                                href="{{asset($product->image)}}"
                                                @endif


                                            >
                                        <span class="display--block relative js-scale-out overflow skrollr-pointer skrollable skrollable-before"
                                              data-emit-events="" data-bottom-top="" style="">
                                            <span class="display--block block-100 js-scale-out__holder opc-0 no-visible overflow">
                                                <span class="display--block js-scale-out__img">
                                                    <span
                                                        class="fill-dimensions bg-black mediakit-download__mask multiply opc-20 trans z-10"></span>
                                                    <img class="greyscaled resp-image mb-23"
                                                         src="{{asset($product->image)}}"
                                                         alt="Minas Designs-Bill &amp; Coo Mykonos 2021">
                                                    <span class="abs-tc block-100 color-red z-10 mediakit-download__over opc-0 trans">
                                                        <span class="font-12 font-bold extra-ls mb-24 extra-lh relative mediakit-download__over-title display--inline">DOWNLOAD</span>
                                                        <span class="clear"></span>
                                                        <span class="icon icon--arrows-thick-down font-25 display--inline arrow-bounce-center"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                                <span class="font-12 extra-ls extra-lh3 font-bold mb-16 mediakit-download__date display--block mb-18 opc-0 no-visible js-fade-left skrollr-pointer skrollable skrollable-before"
                                                      data-emit-events="" data-bottom-top="" data-trans="1.4" data-delay="0"
                                                      itemprop="datePublished" content="2021-08-03 15:16:53" style="">
                                            <span class="month">{{\Carbon\Carbon::parse($product->date)->format('M')}}.</span>
                                            <span class="date-year">{{\Carbon\Carbon::parse($product->year)->format('Y')}}</span>
                                        </span>
                                                <h3 itemprop="name" class="display--block font-bold font-25 opc-0 no-visible js-fade-left skrollr-pointer skrollable skrollable-before" data-emit-events="" data-bottom-top="" data-trans="1.4" data-delay=".1" style="">
                                                    <span class="link-underline-text link-underline-text--sm">{{$product->name}}</span>
                                                </h3>
                                                <span class="display--block font-light font-25 opc-0 no-visible js-fade-left skrollr-pointer skrollable skrollable-before"
                                                      data-emit-events="" data-bottom-top="" data-trans="1.4" data-delay=".15" style="">
                                            <span class="link-underline-text link-underline-text--sm">{{$product->name}}</span>
                                        </span>
                                            </a>
                                        </div>
                                    </article>


                                    @if($key == 0)
                                        <div class="line line--black js-scale skrollr-pointer tablet-hor-hidden skrollable skrollable-before"
                                             data-emit-events="" data-bottom-top="" data-cubic="custom" data-trans="1.4" style=""></div>
                                </div>
                            @elseif($key !=0 && $key % 4  == 0)
                                <div class="line line--black js-scale skrollr-pointer tablet-hor-hidden skrollable skrollable-before"
                                     data-emit-events="" data-bottom-top="" data-cubic="custom" data-trans="1.4" style=""></div>
                        </div>
                    @endif


                @endforeach

            </div>


        </div>
    </main>
@endsection


@section('script')


    <script>
        $(document).ready(function(){
            $('#printed').click(function(){
                $('.digitalSection').css('display','none');
                $('.printedSection').css('display','block');
                $('#digital').removeClass('loc');
                $(this).addClass('loc');
           });
            $('#digital').click(function(){
                $('.printedSection').css('display','none');
                $('.digitalSection').css('display','block');
                $('#printed').removeClass('loc');
                $(this).addClass('loc');
            });
        });

    </script>
@endsection
