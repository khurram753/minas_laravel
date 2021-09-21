@extends('layout.shop-layout.app')

@section('title')
    MINAS - Shop
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
            @include('site.shop.shop_category_section.banner_description_section')
        </div>

        @include('site.shop.shop_category_section.filter_section')
        <div class="grid max-12cols-g pt-p mobile-hor-100">


            <div class="woof_products_top_panel_content">
            </div>
            <div class="woof_products_top_panel"></div>

            @include('site.shop.shop_category_section.sort_filter')

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
                                               class="tinvwl_add_to_wishlist_button tinvwl-icon-custom no-txt  tinvwl-position-above_thumb add_to_wishlist"
                                               data-tinv-wl-producttype="variable"
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
                                            <span
                                                class="prod-content display--block a-left op-0 no-visible js-fade-up in-view"
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

                    {{--            <div class="storefront-sorting">--}}
                    {{--                <aside class="side-popup fixed js-popup" id="popup-sorting">--}}
                    {{--                    <div class="side-popup__bg to-tr fixed z-1 bg-grey js-popup-bg"></div>--}}
                    {{--                    <span class="x-close trans abs-tr display--block clickable color--black hover-white z-20 js-popup-close"></span>--}}
                    {{--                    <div class="side-popup__inner grid over max-3cols-g">--}}
                    {{--                        <div class="gutter pt-perc color--black mobile-hor-gutter">--}}
                    {{--                            <div class="font-bold title-13 ls-180 uppercase mb-t js-popup-option">82 Products</div>--}}
                    {{--                            <div class="js-popup-option">--}}
                    {{--                                <span class="highlight-underline font-bold title-25 ls-30 uppercase">sort by</span>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="pt-m">--}}
                    {{--                                <form class="woocommerce-ordering" method="get" id="sorting-form">--}}
                    {{--                                    <div class="check-holder relative js-popup-option">--}}
                    {{--                                        <input type="radio" name="orderby" class="input-check abs-tl" value="menu_order"--}}
                    {{--                                               id="radio-sort-menu_order" checked='checked'--}}
                    {{--                                               onchange="this.form.submit()"/>--}}
                    {{--                                        <label class="check-box br-50 trans abs-tl" for="radio-sort-menu_order">--}}
                    {{--                                            <svg class="icon icon--minus abs-center svg-unchecked">--}}
                    {{--                                                <use xlink:href="#minus"></use>--}}
                    {{--                                            </svg>--}}
                    {{--                                            <svg class="icon icon--plus color--white abs-center opacity-0 svg-checked">--}}
                    {{--                                                <use xlink:href="#plus"></use>--}}
                    {{--                                            </svg>--}}
                    {{--                                        </label>--}}
                    {{--                                        <label class="check-label trans font-light title-17 ls-80 uppercase"--}}
                    {{--                                               for="radio-sort-menu_order">Default sorting</label>--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="check-holder relative js-popup-option">--}}
                    {{--                                        <input type="radio" name="orderby" class="input-check abs-tl" value="popularity"--}}
                    {{--                                               id="radio-sort-popularity" onchange="this.form.submit()"/>--}}
                    {{--                                        <label class="check-box br-50 trans abs-tl" for="radio-sort-popularity">--}}
                    {{--                                            <svg class="icon icon--minus abs-center svg-unchecked">--}}
                    {{--                                                <use xlink:href="#minus"></use>--}}
                    {{--                                            </svg>--}}
                    {{--                                            <svg class="icon icon--plus color--white abs-center opacity-0 svg-checked">--}}
                    {{--                                                <use xlink:href="#plus"></use>--}}
                    {{--                                            </svg>--}}
                    {{--                                        </label>--}}
                    {{--                                        <label class="check-label trans font-light title-17 ls-80 uppercase"--}}
                    {{--                                               for="radio-sort-popularity"> popularity</label>--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="check-holder relative js-popup-option">--}}
                    {{--                                        <input type="radio" name="orderby" class="input-check abs-tl" value="date"--}}
                    {{--                                               id="radio-sort-date" onchange="this.form.submit()"/>--}}
                    {{--                                        <label class="check-box br-50 trans abs-tl" for="radio-sort-date">--}}
                    {{--                                            <svg class="icon icon--minus abs-center svg-unchecked">--}}
                    {{--                                                <use xlink:href="#minus"></use>--}}
                    {{--                                            </svg>--}}
                    {{--                                            <svg class="icon icon--plus color--white abs-center opacity-0 svg-checked">--}}
                    {{--                                                <use xlink:href="#plus"></use>--}}
                    {{--                                            </svg>--}}
                    {{--                                        </label>--}}
                    {{--                                        <label class="check-label trans font-light title-17 ls-80 uppercase"--}}
                    {{--                                               for="radio-sort-date"> latest</label>--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="check-holder relative js-popup-option">--}}
                    {{--                                        <input type="radio" name="orderby" class="input-check abs-tl" value="price"--}}
                    {{--                                               id="radio-sort-price" onchange="this.form.submit()"/>--}}
                    {{--                                        <label class="check-box br-50 trans abs-tl" for="radio-sort-price">--}}
                    {{--                                            <svg class="icon icon--minus abs-center svg-unchecked">--}}
                    {{--                                                <use xlink:href="#minus"></use>--}}
                    {{--                                            </svg>--}}
                    {{--                                            <svg class="icon icon--plus color--white abs-center opacity-0 svg-checked">--}}
                    {{--                                                <use xlink:href="#plus"></use>--}}
                    {{--                                            </svg>--}}
                    {{--                                        </label>--}}
                    {{--                                        <label class="check-label trans font-light title-17 ls-80 uppercase"--}}
                    {{--                                               for="radio-sort-price"> price: low to high</label>--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="check-holder relative js-popup-option">--}}
                    {{--                                        <input type="radio" name="orderby" class="input-check abs-tl" value="price-desc"--}}
                    {{--                                               id="radio-sort-price-desc" onchange="this.form.submit()"/>--}}
                    {{--                                        <label class="check-box br-50 trans abs-tl" for="radio-sort-price-desc">--}}
                    {{--                                            <svg class="icon icon--minus abs-center svg-unchecked">--}}
                    {{--                                                <use xlink:href="#minus"></use>--}}
                    {{--                                            </svg>--}}
                    {{--                                            <svg class="icon icon--plus color--white abs-center opacity-0 svg-checked">--}}
                    {{--                                                <use xlink:href="#plus"></use>--}}
                    {{--                                            </svg>--}}
                    {{--                                        </label>--}}
                    {{--                                        <label class="check-label trans font-light title-17 ls-80 uppercase"--}}
                    {{--                                               for="radio-sort-price-desc"> price: high to low</label>--}}
                    {{--                                    </div>--}}
                    {{--                                    <input type="hidden" name="paged" value="1"/>--}}
                    {{--                                </form>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                </aside>--}}
                    {{--                <nav class="pagination gutter relative mobile-hor-gutter">--}}
                    {{--                    <span class="prev page-numbers disabled">PREV.</span>--}}
                    {{--                    <div class="pagination__inner a-right"><span aria-current='page'--}}
                    {{--                                                                 class='page-numbers current'>1</span>--}}
                    {{--                        <a class='page-numbers' href='product-category.html'>2</a>--}}
                    {{--                        <a class='page-numbers' href='product-category.html'>3</a>--}}
                    {{--                        <a class='page-numbers' href='product-category.html'>4</a>--}}
                    {{--                        <a class='page-numbers' href='product-category.html'>5</a>--}}
                    {{--                        <a class='page-numbers' href='product-category.html'>6</a>--}}
                    {{--                        <a class='page-numbers' href='product-category.html'>7</a>--}}
                    {{--                        <a class="next page-numbers" href="eshop-product-category.html/pendants/page/2/"><span--}}
                    {{--                                class="pagination-arrows next-link trans color--grey">--}}
                    {{--                                <span class="title-70 font-thin pagination-arrows__title trans ls-30">NEXT</span>--}}
                    {{--                                 <svg class="icon icon--arrow-long-right abs-rc pagination-arrows__icon op-0 trans tablet-hor-hidden"><use--}}
                    {{--                                         xlink:href="#arrow-long-right"></use></svg>--}}
                    {{--                            </span></a></div>--}}
                    {{--                </nav>--}}
                    {{--            </div>--}}
        </div>
    </main>


@endsection

<script src="{{asset('admin/js/jquery.min.js')}}"></script>

@section('script')
    <script>
        $(document).ready(function () {
            $('.woof_submit_search_form').click(function () {
                $('#sorting-form').submit();
            });

            @auth
            $('.add_to_wishlist').click(function () {
                var data = $(this).data('id');
                $.blockUI({
                    css: {
                        border: 'none',
                        padding: '15px',
                        backgroundColor: '#000',
                        '-webkit-border-radius': '10px',
                        '-moz-border-radius': '10px',
                        opacity: .5,
                        color: '#fff'
                    }
                });

                $.ajax({

                    type: 'GET',
                    url: '{{route("addToWishlist")}}',
                    data: {'id':data},

                    success: function (response, status) {

                        if (response.result == 'success') {
                            $.unblockUI();
                            successMsg(response.message);

                            setTimeout(function () {
                                window.location.reload();
                            }, 1000);

                        } else if (response.result == 'error') {
                            $.unblockUI();
                            errorMsg(response.message);
                        }
                    },
                    error: function (data) {
                        $.each(data.responseJSON.errors, function (key, value) {
                            $.unblockUI();
                            errorMsg(value);
                        });
                    }


                });
            });
            @endauth

        });
    </script>
@endsection
