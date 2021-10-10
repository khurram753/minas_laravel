@extends('layout.shop-layout.app')

@section('title')
    {{env('APP_NAME')}} - Collection
@endsection

@section('style')
    <style>
        .block-25 {
            width: 24%;
        }
    </style>
@endsection


@section('content')
    <main id="content" class="site-content relative">
        <div class="woocommerce"></div>
        <div class="relative bg-dark_grey">
            @include('site.shop.collection.banner_description_section')
        </div>

        @include('site.shop.collection.filter_section')

        <div class="grid max-10cols-g pt-p mobile-hor-100">

            <div class="woof_products_top_panel_content">
            </div>
            <div class="woof_products_top_panel"></div>

            @include('site.shop.collection.sort_filter')

            @php
                $loopVar = 2;
            @endphp
            @foreach($products as $key => $product)

                @if($key+1 == $loopVar )
                    <article
                        class="block-50 tablet-hor-33 tablet-50 mobile-hor-100 display--inline-top product type-product post-3471 status-publish instock product_cat-pendants has-post-thumbnail taxable shipping-taxable purchasable product-type-variable has-default-attributes"
                        itemscope itemtype="http://schema.org/Product">
                        @php
                            $loopVar = $loopVar+3;
                        @endphp


                        @else
                            <article class="block-25 tablet-hor-33 tablet-50 mobile-hor-100 display--inline-top product type-product post-2496 status-publish first instock product_cat-pendants has-post-thumbnail taxable shipping-taxable purchasable product-type-variable has-default-attributes"
                                     itemscope itemtype="http://schema.org/Product">
                                @endif

                                <div class="gutter mobile-hor-gutter">
                                    <div class=" relative">
                                        <div class="tinv-wraper woocommerce tinv-wishlist tinvwl-above_thumb-add-to-cart tinvwl-loop-button-wrapper">

                                            <a role="button" aria-label="Add to Wishlist"
                                               class="add_to_wishlist"
                                               data-id="{{$product->id}}"
                                               @guest
                                               href="{{route('loginPageUser')}}"
                                                @endguest
                                            >
                                                <img src="{{asset('site/images/wishlist.png')}}" alt="Add to Wishlist"/>
                                            </a>
                                            <div class="tinv-wishlist-clear"></div>
                                            {{--                                    <div class="tinvwl-tooltip">Add to Wishlist</div>--}}
                                        </div>
                                        <a itemprop="url"
                                           href="{{route('productDetail',['id'=>$product->id])}}"
                                           class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <span class="display--block relative overflow"
                                                  style="padding-top: 99.88128772636%">
                                                <span class="hidden" itemprop="image"
                                                      content="images/product-young-hearts-pendant-497x730.jpg"></span>
                                                <img src="{{asset($product->image)}}"
                                                     class="b-lazy block-100 abs-tl z-1"
                                                     alt="Minas Jewelry-YOUNG HEARTS"
                                                     data-src="{{asset($product->image)}}">
                                                <span class="fill-dimensions img-overlay trans-slow"></span>
                                            </span>
                                            <span class="prod-content display--block a-left op-0 no-visible js-fade-up in-view"
                                                  data-emit-events data-bottom-top="" data-trans="1.4"
                                                  style="visibility: inherit;opacity: 1;transform: matrix(1, 0, 0, 1, 0, 0);">
                                                <h2 itemprop="name"
                                                    class="trans woocommerce-loop-product__title">{{ucfirst($product->name)}}</h2>
                                                <span
                                                    class="display--block font-light title-15 mb-xs">{{ucfirst($product->category->name)}}</span>
{{--                                        <span class="display--block font-light title-15 mb-m">{{HEARTS}}</span>--}}
                                                <span class="price">
                                                    <span itemprop="offers" itemscope
                                                          itemtype="http://schema.org/Offer">
                                                        <link itemprop="availability" href="http://schema.org/InStock"/>
                                                        <span class="hidden" itemprop="url"></span>
                                                        <span class="from price">from</span>
                                                        <span class="woocommerce-Price-amount amount">
                                                            <span class="woocommerce-Price-currencySymbol">$</span>
                                                            {{$product->price}}
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </article>
                    @endforeach

        </div>

    </main>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('.woof_submit_search_form').click(function () {
                $('#sorting-form').submit();
            });
        });
    </script>
@endsection

