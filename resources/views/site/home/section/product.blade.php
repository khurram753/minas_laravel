<section id="section-3"
         class="relative pt-178 pb-90 overflow js-section z-30 tablet-hor-pt-150 mobile-hor-pt-90 mobile-hor-pb-90">
    <div class="fill-dimensions bg-black"></div>
    <div class="grid max-12cols-g over trans mobile-hor-100">
        <div class="pb-190" itemscope="" itemtype="http://schema.org/Product">
            <div class="gutter relative full-height mobile-hor-gutter desktop-height-auto">
                <div class="display--inline a-center relative abs-center block-100 desktop-rel-no-center">
                    <div
                        class="maxw-520 abs-tl a-left top--15 desktop-rel-no-center desktop-mauto desktop-acenter desktop-mb-35">
                        <h3 class="color-white mb-19 js-bt overflow relative skrollr-pointer skrollable skrollable-before"
                            data-emit-events="" data-bottom-top="" style="">
                            <span itemprop="name" class="js-bt__el display--block">
                                <span class="font-light font-18 bracket-icon">{</span>
                                <span class="font-bold font-12 extra-l  bracket-title">SIGNATURE PRODUCTS</span>
                                <span class="font-light font-18 bracket-icon">}</span>
                            </span>
                        </h3>
                        <div
                            class="font-70 font-thin color-grey js-skew-letter skrollr-pointer skrollable skrollable-before"
                            data-emit-events="" data-trans="1.4" data-bottom-top="" style="">ICONIC FORMS
                            AND
                            SHAPES
                        </div>
                    </div>
                    <div
                        class="relative display--inline overflow js-scale-out overflow skrollr-pointer skrollable skrollable-before"
                        data-emit-events="" data-bottom-top="" style="">
                        <div class="js-scale-out__holder opc-0 no-visible overflow">
                            {{--product section image--}}
                            <div class="js-scale-out__img">
                                <img itemprop="image" id="product-big-image"
                                     class="product-big-image display--block parallax" data-parallax="-0.2"
                                     src="/site/images/minas-model-mykonos.jpg"
                                     alt="Minas Designs-signature products">
                                <div class="fill-dimensions multiply bg-black opc-20 z-10"></div>
                                <div class="bg-gradient-small fill-dimensions"></div>
                            </div>
                        </div>
                        @foreach($products as $key => $product)
                            <div class="abs-center z-30 width-90 height-90 desktop-disable">
                                <img itemprop="image" id="hover-img-{{$key}}"
                                     class="product-image-hover abs-center  opc-0"
                                     src="{{asset($product->image)}}" alt="">
                            </div>
                        @endforeach
                        {{--                                <div class="abs-center z-30 width-90 height-90 desktop-disable">--}}
                        {{--                                    <img itemprop="image" id="hover-img-1"--}}
                        {{--                                         class="product-image-hover abs-center  opc-0"--}}
                        {{--                                         src="/site/images/product-bracelet-right-hand-cuff-classic.jpg" alt="">--}}
                        {{--                                </div>--}}
                        {{--                                <div class="abs-center z-30 width-90 height-90 desktop-disable">--}}
                        {{--                                    <img itemprop="image" id="hover-img-2"--}}
                        {{--                                         class="product-image-hover abs-center  opc-0"--}}
                        {{--                                         src="/site/images/product-chokers-c183.jpg" alt="">--}}
                        {{--                                </div>--}}
                    </div>
                </div>
                <div class="list-products block-100 maxw-370 abs-br z-20 desktop-rel-no-center desktop-list-products">
                    <div
                        class="font-light font-12 extra-ls-2 mb-49 pr-50 overflow relative desktop-mt-50 desktop-nopad">
                        <div class="js-bt skrollr-pointer skrollable skrollable-before" data-emit-events=""
                             data-bottom-top="" data-trans="1.2" style="">
                            <div class="js-bt__el">FEATURED PRODUCTS</div>
                        </div>
                    </div>
                    <div class="relative">
                        <div id="products-tab-1"
                             class="product-holder trans a-left maxw-370 desktop-product-holder tablet-center tablet-maxw-370">
                            @foreach($products as $key => $product)
                                <div class="main-product-link-holder a-left tablet-100" itemscope="" itemtype="http://schema.org/Product">
                                    {{--                                        <span class="hidden" itemprop="brand">Minas Designs</span>--}}
                                    <img class="hidden" itemprop="image" src="{{asset($product->image)}}" alt="{{$product->name}}">

                                    <a data-image="#hover-img-{{$key}}"
                                       href="{{route('productDetail',['id'=>$product->id])}}"
                                       class="display--block  relative main-product-link color-white">
                                        <span class="display--block relative pl-75 pr-30 js-bt skrollr-pointer skrollable skrollable-before"
                                              data-emit-events="" data-trans="1.6" data-bottom-top=""
                                              data-delay="0.0" style="">
                                            <span itemprop="name"
                                                  class="font-bold font-17 extra-ls display--block  opc-0 no-visible js-fade-left skrollr-pointer skrollable skrollable-before"
                                                  data-emit-events="" data-bottom-top=""
                                                  data-trans="1.4" data-delay="0.0"
                                                  style="">{{ucfirst($product->name)}}</span>

                                            <span class="font-bold font-12 extra-ls display--block abs-tl top--3 overflow">
                                                <span class="js-bt__el display--block">
                                                    {{\Carbon\Carbon::parse($product->created_at)->format('Y')}}
                                                </span>
                                            </span>
                                            <span itemprop="category"
                                                  class="font-light font-14 extra-lh2 display--block opc-0 no-visible js-fade-left skrollr-pointer skrollable skrollable-before"
                                                  data-emit-events="" data-bottom-top=""
                                                  data-trans="1.6" data-delay="0.0"
                                                  style="">
                                                @foreach($product->cord as $category)
                                                    @if($loop->last)
                                                        {{$category->name}}
                                                    @else
                                                        {{$category->name}} ,
                                                    @endif
                                                @endforeach
                                            </span>
                                            <span class="icon icon--arrows-thick-right color-red abs-tr product-icon-right opc-0 trans"></span>
                                        </span>
                                        <span class="line bg-dark-grey display--block mt-12 scale-x origin-l js-scale-lr skrollr-pointer skrollable skrollable-before"
                                            data-delay="0.0" data-emit-events="" data-bottom-top=""
                                            data-trans="1.4" style=""></span>
                                    </a>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
        @foreach($biggerProducts as $key => $bigProduct)
            <div class="block-50 display--inline-top mb-65 trans tablet-100 tablet-mb-150 bigProductClass" itemscope="">
                <div class="gutter a-center mobile-hor-gutter">
                    <a itemprop="url" href="{{route('productDetail',['id'=>$bigProduct->id])}}"
                       class="display--inline a-left product-link link-underline ">
                        <span class="radial-holder relative mb-30 display--block">
                            <span class="fill-dimensions bg-radial display--block"></span>
                            <span class="z-20 relative overflow product-image display--block">
                                <span class="parallax display--block" data-parallax="-0.2">
                                    <span class="display--block js-scale-in--sm scale-out skrollr-pointer skrollable skrollable-before"
                                        data-emit-events="" data-bottom-top="" data-trans="2" data-delay="0.1" style="">
                                        <span class="fill-dimensions multiply trans bg-black opc-20 z-10"></span>
                                        <img itemprop="image" class="bigProductImage resp-image display--block"
                                             src="{{asset($bigProduct->image)}}"
                                             alt="Minas Designs-Calisto earrings">
                                    </span>
                                </span>
                            </span>
                        </span>
                        <span class="ml-40 display--block">
                            <span class="font-12 extra-ls font-bold display--block mb-37 opc-0 no-visible js-fade-left skrollr-pointer skrollable skrollable-before"
                                data-emit-events="" data-bottom-top="" data-trans="1.4" data-delay="0.1"
                                style="">
                                {{\Carbon\Carbon::parse($bigProduct->created_at)->format('Y')}}
                            </span>
                            <span class="display--block font-25 font-bold maxw-210 opc-0 no-visible js-fade-left skrollr-pointer skrollable skrollable-before"
                                data-emit-events="" data-bottom-top="" data-trans="1.6" data-delay="0.1"
                                style="">
                                <span itemprop="name" class="link-underline-text link-underline-white">
                                    {{ucfirst($bigProduct->name)}}
                                </span>
                            </span>
                            <span itemprop="category"
                                  class="font-light font-14 extra-lh2 display--block mb-12 opc-0 no-visible js-fade-left skrollr-pointer skrollable skrollable-before"
                                  data-emit-events="" data-bottom-top="" data-trans="1.8" data-delay="0.1"
                                  style="">
                                        @foreach($bigProduct->cord as $category)
                                    @if($loop->last)
                                        {{$category->name}}
                                    @else
                                        {{$category->name}} ,
                                    @endif
                                @endforeach
                                    </span>
                            <span class="display--block opc-0 no-visible js-fade-left skrollr-pointer skrollable skrollable-before"
                                data-emit-events="" data-bottom-top="" data-trans="2" data-delay="0.1" style="">
                                <span class="display--inline-block font-bold font-12 extra-ls color-dark-light product-line-link trans relative">
                                    SHOP NOW
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
        @endforeach
        {{--                    <div class="block-50 display--inline-top mb-65 trans tablet-100 " itemscope=""--}}
        {{--                     itemtype="http://schema.org/Product">--}}
        {{--                    <div class="gutter a-center mobile-hor-gutter">--}}
        {{--                        <a itemprop="url" href="home.html/shop/pendants/spear-tip/"--}}
        {{--                           class="display--inline a-left product-link link-underline ">--}}
        {{--                             <span class="radial-holder relative mb-30 display--block">--}}
        {{--                                 <span class="fill-dimensions bg-radial display--block"></span>--}}
        {{--                                 <span class="z-20 relative overflow product-image display--block">--}}
        {{--                                     <span class="parallax display--block" data-parallax="-0.2">--}}
        {{--                                         <span--}}
        {{--                                             class="display--block js-scale-in--sm scale-out skrollr-pointer skrollable skrollable-before"--}}
        {{--                                             data-emit-events="" data-bottom-top="" data-trans="2" data-delay="0.2"--}}
        {{--                                             style="">--}}
        {{--                                             <span class="fill-dimensions multiply trans bg-black opc-20 z-10"></span>--}}
        {{--                                             <img itemprop="image" class="resp-image display--block"--}}
        {{--                                                  src="/site/images/minas-model-pool.jpg" alt="Minas Designs-Spear tip">--}}
        {{--                                         </span>--}}
        {{--                                     </span>--}}
        {{--                                 </span>--}}
        {{--                             </span>--}}
        {{--                            <span class="ml-40 display--block">--}}
        {{--                                <span--}}
        {{--                                    class="font-12 extra-ls font-bold display--block mb-37 opc-0 no-visible js-fade-left skrollr-pointer skrollable skrollable-before"--}}
        {{--                                    data-emit-events="" data-bottom-top="" data-trans="1.4" data-delay="0.2" style="">1991</span>--}}
        {{--                                <span--}}
        {{--                                    class="display--block font-25 font-bold maxw-210 opc-0 no-visible js-fade-left skrollr-pointer skrollable skrollable-before"--}}
        {{--                                    data-emit-events="" data-bottom-top="" data-trans="1.6" data-delay="0.2" style="">--}}
        {{--                                    <span itemprop="name"--}}
        {{--                                          class="link-underline-text link-underline-white">SPEAR TIP</span>--}}
        {{--                                </span>--}}
        {{--                                <span itemprop="category"--}}
        {{--                                      class="font-light font-14 extra-lh2 display--block mb-12 opc-0 no-visible js-fade-left skrollr-pointer skrollable skrollable-before"--}}
        {{--                                      data-emit-events="" data-bottom-top="" data-trans="1.8" data-delay="0.2" style="">PENDANTS</span>--}}
        {{--                                <span--}}
        {{--                                    class="display--block opc-0 no-visible js-fade-left skrollr-pointer skrollable skrollable-before"--}}
        {{--                                    data-emit-events="" data-bottom-top="" data-trans="2" data-delay="0.2" style="">--}}
        {{--                                    <span--}}
        {{--                                        class="display--inline-block font-bold font-12 extra-ls color-dark-light product-line-link trans relative">--}}
        {{--                                        SHOP NOW                                    </span>--}}
        {{--                                </span>--}}
        {{--                            </span>--}}
        {{--                        </a>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        <div class="a-center pt-16 opc-0 no-visible js-fade-in skrollr-pointer skrollable skrollable-before"
             data-emit-events="" data-bottom-top="" data-cubic="custom" data-trans="1.6" style="">
            <a href="{{route('shop')}}" class="circle-btn cursor relative display--inline circle-link">

                <svg class="circle-btn__wrapper-circle" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 151.689 148.568">
                    <path class="js-svg-circle circle-btn__circle" fill="none" stroke="#fff"
                          stroke-width="1"
                          stroke-miterlimit="10" d="M75.845,145.15
                                  c-39.139,0-70.867-31.728-70.867-70.866S36.706,3.418,75.845,3.418c39.138,0,70.866,31.728,70.866,70.866
                                  S114.983,145.15,75.845,145.15">
                    </path>
                    <path class="js-stretched" fill="none" opacity="0" stroke="#fff" stroke-width="1"
                          stroke-miterlimit="10"
                          d="M113.228 5.526a10.122 10.122 0 0 0-.672-.479c-10.217-6.64-24.534-3.415-35.743-2.101-7.854.92-15.701 2.125-23.366 4.098-13.122 3.376-25.936 9.011-35.57 18.785C.454 43.503-2.653 70.782 4.779 93.701c12.587 38.817 65.455 69.188 104.126 47.793 18.448-10.207 31.242-31.346 37.575-50.686 3.17-9.681 6.398-20.775 4.775-31.049-1.498-9.484-7.574-16.885-13.6-23.975-6.826-8.031-12.545-16.946-19.49-24.863-1.588-1.81-3.064-3.941-4.937-5.395z">
                    </path>
                    <path class="js-stretched-2" fill="none" stroke="#ffffff" opacity="0"
                          stroke-miterlimit="10"
                          d="M107.309,4.917c-0.223-0.148-0.452-0.288-0.686-0.417
                                  C96.241-1.223,82.575,2.916,71.792,4.98c-7.556,1.447-15.087,3.17-22.385,5.624C36.912,14.805,24.875,21.176,16.215,31.34
                                  C0.555,49.718-0.537,76.407,8.292,98.124c3.569,8.781,8.526,22.413,15.723,29.416c13.605,13.24,33.127,13.928,51.836,15.442
                                  c12.843,1.04,25.689,1.455,36.85-5.824c17.182-11.205,28.106-32.619,32.887-51.832c2.394-9.617,4.744-20.611,2.446-30.465
                                  c-2.123-9.098-8.54-15.85-14.888-22.307c-7.189-7.311-13.368-15.558-20.665-22.752C110.812,8.158,109.23,6.196,107.309,4.917z"></path>
                </svg>

                <span class="abs-center a-center z-5 font-12 extra-ls extra-lh2 font-bold block-70">
                    SHOP ONLINE
                </span>
            </a>
        </div>
    </div>
</section>
