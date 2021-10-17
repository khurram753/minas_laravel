<div class="retailers" id="retailers">
    <div class="grid max-12cols-g  mobile-hor-100 overflow">
        <div class="gutter mobile-hor-gutter">
            <div class="retailers__header color-black m-auto maxw-777 a-center mobile-hor-nomargin">
                <h3 class="font-bold font-40 mb-43 js-bt overflow relative skrollr-pointer" data-emit-events
                    data-bottom-top="">
                    <span class="js-bt__el display--block">
                        LIST OF PARTNERS
                    </span>
                </h3>
                <div class="retailers__buttons opc-0 no-visible js-fade-in skrollr-pointer" data-emit-events
                     data-bottom-top="" data-cubic="custom" data-trans="1.4">
                    <div class="retailers-btn mobile-hor-100 display--inline a-center trans cursor loc"
                         data-link="#retailers-tab-1">
{{--                         <span class="uk_partner_img">--}}
{{--                                <img src="	http://127.0.0.1:8000/site/store/images/1631197433-.jpg" alt="">--}}
{{--                            </span>--}}
                        <div class="font-bold font-25 relative retailers-btn__txt display--inline">
                            UK
                            <div class="abs-tr font-thin">({{sizeof($greeceRetailers)}})</div>
                        </div>
                    </div>
                    <div class="retailers-btn mobile-hor-100 display--inline a-center trans cursor "
                         data-link="#retailers-tab-2">
                        <div class="font-bold font-25 relative retailers-btn__txt display--inline">
                            INTERNATIONAL
                            <div class="abs-tr font-thin">({{sizeof($internationalRetailers)}})</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="retailers__holder relative mobile-hor-pb-90">
            <div id="retailers-tab-1" class="retailers-tab trans-slow block-100 display-flex flex-wrap ">
                @if(sizeof($greeceRetailers) > 0)
                    @foreach($greeceRetailers as $g_retailer)
                        <div class="block-50 display-flex tablet-hor-med-100">
                            <div class="gutter block-100 relative">
                                <div class="retailer-box color-black relative">
                                    <div
                                        class="font-12 extra-ls font-bold mb-20 opc-0 no-visible js-fade-left skrollr-pointer"
                                        data-emit-events data-bottom-top="" data-trans="1.4">
                                        {{$g_retailer->company}}
                                    </div>
                                    <div class="retailer-box__details">
                                        <h4 class="font-bold font-25 mb-5 opc-0 no-visible js-fade-left skrollr-pointer"
                                            data-emit-events data-bottom-top="" data-trans="1.4" data-delay="0.1">
                                            {{$g_retailer->full_name}}
                                        </h4>
                                        <div class="font-thin font-17 opc-0 no-visible js-fade-left skrollr-pointer"
                                             data-emit-events data-bottom-top="" data-trans="1.4" data-delay="0.15">
                                            <p>{{$g_retailer->website}} <br/>
                                                {{$g_retailer->country}} <br/>
                                                {{$g_retailer->email}}<br/>
                                                <br/>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="line line--black line--abs abs-bl js-scale-lr skrollr-pointer"
                                     data-delay=".2" data-emit-events data-bottom-top="" data-trans="1.6"></div>
                            </div>

                        </div>
                    @endforeach
                @else
                    <h3 class="text-center">No Records Found</h3>
                @endif
            </div>
{{--<<<<<<< HEAD--}}
{{--            <div id="retailers-tab-2" class="retailers-tab trans-slow block-100 display-flex flex-wrap opc-0 no-visible abs-tl">--}}



{{--=======--}}
            <div id="retailers-tab-2" class="retailers-tab trans-slow block-100 display-flex flex-wrap opc-0 no-visible">

                @if(sizeof($internationalRetailers) > 0)
                    @foreach($internationalRetailers as $int_retailer)
                        <div class="block-50 display-flex tablet-hor-med-100">
                            <div class="gutter block-100 relative">
                                <div class="retailer-box color-black relative">

                                    <div class="font-12 extra-ls font-bold mb-20 opc-0 no-visible js-fade-left skrollr-pointer"
                                        data-emit-events data-bottom-top="" data-trans="1.4">
                                        {{$int_retailer->company}}
                                    </div>
                                    <div class="retailer-box__details">
                                        <h4 class="font-bold font-25 mb-5 opc-0 no-visible js-fade-left skrollr-pointer"
                                            data-emit-events data-bottom-top="" data-trans="1.4" data-delay="0.1">
                                            {{$int_retailer->full_name}}
                                        </h4>
                                        <div class="font-thin font-17 opc-0 no-visible js-fade-left skrollr-pointer"
                                             data-emit-events data-bottom-top="" data-trans="1.4" data-delay="0.15">
                                            <p>
                                                {{$int_retailer->website}}
                                                <br/>
                                                {{$int_retailer->country}}
                                                <br/>
                                                {{$int_retailer->email}}
                                                <br/>
                                                <br/>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="line line--black line--abs abs-bl js-scale-lr skrollable loc skrollable-after" data-delay=".2" data-emit-events="" data-bottom-top="" data-trans="1.6" style="transform: matrix(1, 0, 0, 1, 0, 0);"></div>
                            </div>

                        </div>
                    @endforeach
{{--                        <div class="block-50 display-flex tablet-hor-med-100">--}}
{{--                            <div class="gutter block-100 relative">--}}
{{--                                <div class="retailer-box color-black relative">--}}
{{--                                    <div class="font-12 extra-ls font-bold mb-20 opc-0 no-visible js-fade-left skrollable loc skrollable-after" data-emit-events="" data-bottom-top="" data-trans="1.4" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">AZERBAIJAN</div>--}}
{{--                                    <div class="retailer-box__details">--}}
{{--                                        <h4 class="font-bold font-25 mb-5 opc-0 no-visible js-fade-left skrollable loc skrollable-after" data-emit-events="" data-bottom-top="" data-trans="1.4" data-delay="0.1" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">SOROKA CONCEPT STORE</h4>--}}
{{--                                        <div class="font-thin font-17 opc-0 no-visible js-fade-left skrollable loc skrollable-after" data-emit-events="" data-bottom-top="" data-trans="1.4" data-delay="0.15" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"><p>93 NIZAMI STREET<br>--}}
{{--                                                BAKU, AZERBAIJAN<br>--}}
{{--                                                +994 77 277 33 16</p></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="line line--black line--abs abs-bl js-scale-lr skrollable loc skrollable-after" data-delay=".2" data-emit-events="" data-bottom-top="" data-trans="1.6" style="transform: matrix(1, 0, 0, 1, 0, 0);"></div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
                @else
                    <h3 class="text-center">No Records Found</h3>
                @endif

            </div>
        </div>
    </div>
</div>
