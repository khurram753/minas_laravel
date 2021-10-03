@extends('layout.shop-layout.app')

@section('title')
    {{env('APP_NAME')}} - Edit Account
@endsection

@section('style')
    <link href="{{asset('site/css/dashboard.css')}}" rel="stylesheet">
@endsection

@section('content')
    <main id="content" class="site-content relative">
        <div class="woocommerce"></div>
        <div class="fill-dimensions bg--white"></div>
        <div class="grid max-12cols-g  pb-200 relative z-20 mobile-hor-100  tablet-nopad--bottom">
            <div class="a-center color--black mb-xl mobile-hor-mb-60">
                <div class="mb-y"><span class="font-light title-17 bracket-icon">{</span><span class="font-bold title-13 ls-180 bracket-title">HELLO ASDSA</span><span class="font-light title-17 bracket-icon">}</span></div>
                <div class="uppercase font-thin title-70 ls-30 mb-9">Wishlist</div>
                <span class="display--block wishlist_products_counter  wishlist-counter-with-products">
                    <span class="font-bold title-25 ls-30 uppercase">
                        <span class="wishlist_products_counter_number">
                            {{count($data)}}
                        </span>
                    </span>
                    <span class="wishlist_products_counter_text font-bold title-25 ls-30 uppercase">Items</span>
                </span>
            </div>

            <div class="tinv-wishlist woocommerce tinv-wishlist-clear">
{{--                <form action="https://eshop.minas-designs.com/wishlist/0F4238/" method="post" autocomplete="off">--}}
                    <div class="tinvwl-table-manage-list a-center">
                        <div>
                            @foreach($data as $key => $wishlist)
                                <div class="block-25 tablet-hor-33 tablet-50 mobile-hor-100 mb-xl2 display--inline-top wishlist_item">
                                    <div class="gutter mobile-hor-gutter">
                                        <div class="maxw-290 m-auto a-left mobile-hor-maxw-100">
                                            <div class="relative mb-c">
                                                <span class="abs-bc wishlist-remove js-wishlist-remove color--white hover-red z-20 cursor" data-trigger="#wishlist-box-545">
                                                    <svg class="icon icon--close-thick" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
                                                        <path d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717    L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859    c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287    l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285    L284.286,256.002z"/>
                                                    </svg>
                                                </span>

                                                <span id="wishlist-box-545" class="wishlist-box bg-grey trans display--block a-center abs-bc">
                                                    <span class="font-italics color--black title-16 display--block maxw-180 m-auto">
                                                        Remove this item from your favourites list?
                                                    </span>
                                                    <span class="font-bold uppercase color--black display--inline title-12 ls-180 gutter-15 js-wishlist-remove cursor hover-white trans" data-trigger="#wishlist-box-545">no</span><span class="font-bold uppercase color--black display--inline title-12 ls-180 gutter-15 cursor relative hover-white trans">yes
                                                        <button type="button" class="fill-dimensions op-0 removeWishlist" data-id="{{$wishlist->id}}" title="Remove">

                                                        </button>
                                                    </span>
                                                </span>
                                                <span class="display--block relative overflow" style="padding-top: 146.88128772636%">
                                                    <img src="{{asset($wishlist->product->image)}}" class="b-lazy block-100 abs-tl z-1 b-loaded" alt="DELOS RING">
                                                    <span class="fill-dimensions img-overlay trans-slow"></span>
                                                </span>
                                            </div>

                                            <div class="product-name pl-30 pt-17">
                                                <a class="hover-red ls-30 color--black title-25 font-bold uppercase" href="https://eshop.minas-designs.com/shop/rings/delos-ring/?attribute_pa_material=silver&amp;tiwp=9724">{{ucfirst($wishlist->product->name)}}</a>
                                                <div class="display--block font-light title-15 mb-m ls-80 color--black">{{ucfirst($wishlist->product->category->name)}}</div>
                                            </div>

                                            <div class="product-price color--black pl-30">
                                                <span itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
{{--                                                    <span class="hidden" itemprop="price" content="370"></span>--}}
{{--                                                    <span class="hidden" itemprop="priceCurrency" content="EURO"></span>--}}
{{--                                                    <link itemprop="availability" href="http://schema.org/InStock">--}}
{{--                                                    <span class="hidden" itemprop="url" content="https://eshop.minas-designs.com/shop/rings/delos-ring/?attribute_pa_material=silver"></span>--}}
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">$</span>
                                                        {{$wishlist->product->price}}
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
{{--                        <div>--}}
{{--                            <div>--}}
{{--                                <div>--}}
{{--                                    <div class="tinvwl-to-left look_in">--}}
{{--                                        <input type="hidden" name="lists_per_page" value="10" id="tinvwl_lists_per_page">--}}
{{--                                    </div>--}}
{{--                                    <div class="tinvwl-to-right look_in"></div>--}}
{{--                                    <input type="hidden" id="wishlist_nonce" name="wishlist_nonce" value="6cc169324d">--}}
{{--                                    <input type="hidden" name="_wp_http_referer" value="/wishlist/">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
{{--                </form>--}}

            </div>
        </div>
    </main>

@endsection


@section('script')
    <script>
        $(document).ready(function(){
            $('.removeWishlist').click(function(){
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
                    url: '{{route("removeWishlist")}}',
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
        });
    </script>
@endsection
