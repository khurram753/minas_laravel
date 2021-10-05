@extends('layout.shop-layout.app')

@section('title')
    {{env('APP_NAME')}} - Order Detail
@endsection

@section('style')
    <link href="{{asset('site/css/dashboard.css')}}" rel="stylesheet">
    <style>
        .uppercase{
            text-transform: capitalize ;
        }
    </style>
@endsection

@section('content')
    <main id="content" class="site-content relative">
        <div class="woocommerce"></div>
        <div class="fill-dimensions bg--white"></div>
        <div class="grid max-12cols-g  pb-200 relative z-20 mobile-hor-100 mobile-hor-pb-90">
            <div class="a-center color--black mb-large mobile-hor-gutter">
                <div class="mb-y"><span class="font-light title-17 bracket-icon">{</span>
                    <span class="font-bold title-13 ls-180 bracket-title">
                        HELLO {{Auth::user()->name}}
                    </span>
                    <span class="font-light title-17 bracket-icon">}</span>
                </div>
                <div class="uppercase font-thin title-70 ls-30 mb-9">Order details</div>
                <a class="font-bold title-13 ls-80 pl-37 uppercase hover-red color--black relative" href="{{route('logout')}}">
                    <svg class="icon icon--sign-out no-icon-trans abs-lc">
                        <use xlink:href="#sign-out"></use>
                    </svg>
                    sign out
                </a>
            </div>
            <div class="woocommerce">
                @include('site.account_pages.section.navigation')

                <div class="woocommerce-MyAccount-content">
                    <div class="grid max-12cols-g color--black">
                        <div class="a-center pt-88">
                            <div class="font-thin title-50 ls-30 mb-9">N<sup>o</sup> {{$order->id}}</div>
                            <div class="font-bold title-25 ls-30 uppercase order-table-date-status">
                                {{\Carbon\Carbon::parse($order->created_at)->format('Y-m-d')}} / {{$order->admin_status}}
                            </div>
                        </div>

                        <section class="woocommerce-order-details">

                            <div class="woocommerce-table woocommerce-table--order-details shop_table order_details">
                                <div class="a-center pb-25">
                                    @foreach($orderDetails as $key => $orderDetail)
                                        <div class="block-25 tablet-hor-50 mobile-hor-100 a-center display--inline-top mb-70 woocommerce-table__line-item order_item">
                                            <div class="gutter mobile-hor-gutter">
                                                <div class="woocommerce-table__product-name product-name">
                                                    <a href="{{route('productDetail',['id'=>$orderDetail->id])}}" class="color--black hover-red display--block relative">
                                                        <span class="display--block relative overflow mb-22" style="padding-top: 146.88128772636%">
                                                            <img src="{{asset($orderDetail->product->image)}}" class="b-lazy block-100 abs-tl z-1 b-loaded" alt="DELOS RING">
                                                            <span class="fill-dimensions img-overlay trans-slow"></span>
                                                        </span>
                                                        <span class="a-left pl-30 display--block">
                                                            <h3 class="font-bold title-25 extra-lh ls-30 uppercase mb-sm">
                                                                {{ucfirst($orderDetail->product->name)}}
                                                            </h3>
                                                            <span class="font-light uppercase ls-30 display--block mb-sm">
                                                                {{isset($orderDetail->category) ? $orderDetail->category->name:''}}
                                                            </span>
                                                            <span class="display--block a-left">QTY x {{$orderDetail->quantity}}</span>
                                                        </span>
                                                        <span class="a-left ls-80 pl-30 display--block title-14 mb-mm">
                                                            <span class="display--inline uppercase mr-9">
                                                                {{isset($orderDetail->material) ? $orderDetail->material->name:''}}
                                                            </span>
                                                            <span class="display--inline uppercase mr-9">
                                                                {{isset($orderDetail->cord) ? $orderDetail->cord->name:''}}
                                                            </span>
{{--                                                            <span class="display--inline uppercase">( 54-mm )</span>                </span>--}}
                                                            <span class="woocommerce-table__product-total product-total a-left ls-80 pl-30 display--block">
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol">$</span>
                                                                    {{$orderDetail->price}}
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="line bg--black"></div>
                                <div class="a-center maxw-540 m-auto order-details-info">
                                    <div class="gutter mobile-hor-gutter">
{{--                                        <div class="display--block uppercase a-left">--}}
{{--                                            <div scope="row" class="title-20 font-light ls-80 display--inline font-bold">Subtotal:</div>--}}
{{--                                            <div class="title-20 font-light ls-80 float-right a-right mobile-hor-nofloat mobile-hor-left">--}}
{{--                                                <span class="woocommerce-Price-amount amount">--}}
{{--                                                    <span class="woocommerce-Price-currencySymbol">$</span>--}}
{{--                                                    {{$order->orderDetail->sum('price')}}--}}
{{--                                                </span>--}}
{{--                                            </div>--}}
{{--                                            <div class="clear"></div>--}}
{{--                                            <div class="bg-dot"></div>--}}
{{--                                        </div>--}}
{{--                                        <div class="display--block uppercase a-left">--}}
{{--                                            <div scope="row" class="title-20 font-light ls-80 display--inline font-bold">Shipping:</div>--}}
{{--                                            <div class="title-20 font-light ls-80 float-right a-right mobile-hor-nofloat mobile-hor-left">--}}
{{--                                                {{Geniki Taxydromiki (FREE SHIPPING)}}--}}
{{--                                            </div>--}}
{{--                                            <div class="clear"></div>--}}
{{--                                            <div class="bg-dot"></div>--}}
{{--                                        </div>--}}
                                        <div class="display--block uppercase a-left">
                                            <div scope="row" class="title-20 font-light ls-80 display--inline font-bold">Payment method:</div>
                                            <div class="title-20 font-light ls-80 float-right a-right mobile-hor-nofloat mobile-hor-left">{{$order->payment_method}}</div>
                                            <div class="clear"></div>
                                            <div class="bg-dot"></div>
                                        </div>
                                        <div class="display--block uppercase a-left">
                                            <div scope="row" class="title-20  ls-30 display--inline font-bold">Total:</div>
                                            <div class="title-20  ls-30 float-right a-right mobile-hor-nofloat mobile-hor-left">
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>
                                                    {{$order->orderDetail->sum('price')}}
                                                </span>
{{--                                                <small class="includes_tax">(includes <span class="woocommerce-Price-amount amount">--}}
{{--                                                        <span class="woocommerce-Price-currencySymbol">€</span>71.61</span> VAT)--}}
{{--                                                </small>--}}
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="line bg--black"></div>
                            </div>

                        </section>

                        <section class="woocommerce-customer-details grid max-8cols-g pt-section relative mobile-hor-100">
                            <div class="a-center gutter mobile-hor-gutter mobile-hor-left">
                                <div class="uppercase font-thin title-70 ls-30 mb-22">customer details</div>
                                <p class="woocommerce-customer-details--email uppercase title-20 ls-80 disable-pad">
                                    {{Auth::user()->email}}
                                </p>
{{--                                <p class="woocommerce-customer-details--phone uppercase title-20 ls-80 disable-pad">--}}
{{--                                    13233432433--}}
{{--                                </p>--}}
                            </div>
                        </section>

                        <section class="woocommerce-customer-details grid max-8cols-g pt-section relative mobile-hor-100">
                            <div class="a-center gutter mobile-hor-gutter mobile-hor-left">
                                <div class="uppercase font-thin title-70 ls-30 mb-22">Shipping Details</div>
{{--                                <p class="woocommerce-customer-details--email uppercase title-20 ls-80 disable-pad">--}}
{{--                                    Country: {{$order->country}}--}}
{{--                                </p>--}}

                                <p class="woocommerce-customer-details--email uppercase title-20 ls-80 disable-pad">
                                    City: {{$order->city}}
                                </p>

                                <p class="woocommerce-customer-details--email uppercase title-20 ls-80 disable-pad">
                                    State: {{$order->state}}
                                </p>

                                <p class="woocommerce-customer-details--email uppercase title-20 ls-80 disable-pad">
                                    Zip/Postal Code: {{$order->postal_code}}
                                </p>

                                <p class="woocommerce-customer-details--email uppercase title-20 ls-80 disable-pad">
                                    Address: {{$order->address1}}
                                </p>

                                {{--                                <p class="woocommerce-customer-details--phone uppercase title-20 ls-80 disable-pad">--}}
                                {{--                                    13233432433--}}
                                {{--                                </p>--}}
                            </div>
                        </section>

{{--                        <p class="order-print">--}}
{{--                            <a href="view-order.html" class="button print">Print</a>--}}
{{--                        </p>--}}

                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection
