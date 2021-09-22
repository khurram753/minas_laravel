@extends('layout.shop-layout.app')

@section('title')
    MINAS - Product Detail
@endsection

@section('style')
    <style>
        .block-60{
            width: 59%;
        }
        .block-25{
            width: 24%;
        }
    </style>
@endsection


@section('content')
    <main id="content" class="site-content relative">

        <!-- cart popup end -->
        <div id="product-2496" class="product type-product post-2496 status-publish first instock product_cat-pendants has-post-thumbnail taxable shipping-taxable purchasable product-type-variable has-default-attributes">
            <div id="main-product-info" itemscope itemtype="http://schema.org/Product">
                <span class="hidden" itemprop="sku" content="young-hearts"></span>
                <div class="grad-black-top-grey-bottom">
                    <section class="product-top-section m-auto relative mobile-hor-padded" id="product-top-section">
                        <div class="product-top-section__img-holder abs-tl overflow tablet-rel">
                            <div class="mobile-hor-gutter">
                                <div class="fill-dimensions z-1" id="js-product-variations-images"></div>
                                <img src="{{asset($data->image)}}" alt="Minas Jewelry-YOUNG HEARTS"
                                     class="product-top-section__img abs-bc tablet-rel" style="z-index: 3"
                                     id="js-main-product-img">
                                <div class="fill-dimensions"></div>
                                <div class="grad-black-top op-07 block-100 h-50 abs-tl"></div>
                                <span class="arrow-scroll abs-bl z-15 scroll-to color--red clickable trans hover-white tablet-hidden" data-target="#product-info">
                                    <span class="op-0 no-visible js-fade-in in-view display--block" data-emit-events data-delay=".15" data-bottom-top="">
                                        <svg class="icon icon--arrow-long-down display--block">
                                            <use xlink:href="#arrow-long-down"></use>
                                        </svg>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="product-top-section__content ml-auto">
                            <div class="mobile-hor-gutter">
                                <div class="woocommerce-notices-wrapper"></div>
                                <header class="product-header abs-tl color--white uppercase tablet-hor-rel js-bt in-view" data-emit-events data-bottom-top="">
                                    <div class="font-bold title-13 ls-180 mb-g overflow">
                                        <div class="js-bt__el">
                                            Designed In {{\Carbon\Carbon::parse($data->created_at)->format('Y')}}
                                        </div>
                                    </div>
                                    <h1 class="font-bold title-35 ls-30 overflow">
                                    <span class="js-bt__el display--block">
                                        <span itemprop="name">{{ucfirst($data->name)}}</span>
                                    </span>
                                    </h1>
                                </header>
                                <div class="product-addtocart op-0 no-visible js-fade-in in-view" data-emit-events
                                     data-delay=".15" data-bottom-top="" id="add-to-cart" style="visibility: inherit; opacity: 1;">
                                    <div class="product__actions a-right mb-y color--grey">
{{--                                        <span class="product__info br-50 display--inline ml-icon relative trans clickable hover-white scroll-to" data-target="#product-info">--}}
{{--                                            <svg class="icon icon--info abs-center">--}}
{{--                                                <use xlink:href="#info"></use>--}}
{{--                                            </svg>--}}
{{--                                        </span>--}}
                                        <div class="tinv-wraper woocommerce tinv-wishlist tinvwl-shortcode-add-to-cart">
                                            <a role="button" aria-label="Add to Wishlist"
                                               class="tinvwl_add_to_wishlist_button tinvwl-icon-custom no-txt wishlist tinvwl-position-shortcode ftinvwl-animated"
                                               data-tinv-wl-list="[]" data-tinv-wl-product="2496"
                                               data-tinv-wl-productvariation="" data-tinv-wl-productvariations="[0]"
                                               data-tinv-wl-producttype="variable" data-tinv-wl-action="add"><img
                                                    src="{{asset('site/images/wishlist.png')}}" alt="Add to Wishlist"/> </a>
                                            <div class="tinv-wishlist-clear"></div>
                                            <div class="tinvwl-tooltip">Add to Wishlist</div>
                                        </div>

                                    </div>
                                    <!--<div class="product-price-from"></div>-->

                                    @include('site.shop.detail_section.form')

                                </div>
                            </div>
                        </div>
                    </section>
                    @include('site.shop.detail_section.product_information')
                </div>
                <div class="bg--black-light">
                    <section class="grid max-12cols-g a-center pt-r mobile-hor-100 mobile-hor-pt-90" id="svg-cursor">
                        <div class="block-50 display--inline-top tablet-100">
                            <div class="gutter js-hover-svg-cursor  mobile-hor-gutter" data-goto="0" data-pid="2496">
                                <div class="relative m-auto mb-162 tablet-mb-90" style="max-width: 633px">
                                    <div class="relative overflow" style="padding-top: 100%">
                                        <img src="{{asset($data->image)}}" class="b-lazy block-100 abs-tl"
                                             data-src="images/cord-clip.jpg"
                                             style="visibility: visible;opacity: 1;">
                                        <div class="fill-dimensions"></div>
                                    </div>
                                    <div
                                        class="prod-image-title font-light title-13 ls-180 uppercase a-left js-bt overflow relative in-view"
                                        data-emit-events data-bottom-top="">
                                        <div class="js-bt__el">
                                            Comes with our signature cord clip
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-page tablet-hor-nopad--top">
                            <div
                                class="gutter  relative color--white z-5 mobile-hor-gutter op-0 no-visible js-fade-up in-view"
                                data-emit-events data-bottom-top="" data-trans="1.4">
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            @include('site.shop.detail_section.related_product')
            <span class="buy-this scroll-to br-50 clickable trans faded tablet-hor-hidden"
                  data-target="#add-to-cart"
                  data-anchor-target="#main-product-info"
                  data-0="@class: buy-this scroll-to br-50 clickable trans faded tablet-hor-hidden"
                  data-60p="@class: buy-this scroll-to br-50 clickable trans tablet-hor-hidden"
                  data-160-bottom="@class: buy-this scroll-to br-50 clickable trans faded tablet-hor-hidden">
                <span class="block-100 abs-lc a-center">Add to cart</span>
            </span>
        </div>
    </main>
@endsection

@section('script')
    @include('site.shop.script.cart_script')
@endsection

