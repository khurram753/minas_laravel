@extends('layout.shop-layout.app')

@section('title')
    {{env('APP_NAME')}} - Order
@endsection

@section('style')
    <link href="{{asset('site/css/dashboard.css')}}" rel="stylesheet">
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

                    <div class="maxw-xl m-auto color--black pt-p">
                        <div class="gutter mobile-hor-gutter">
                            <table class="woocommerce-orders-table woocommerce-MyAccount-orders shop_table shop_table_responsive my_account_orders account-orders-table block-100">
                                <thead>
                                <tr class="bg--black">
                                    <th class="order-number a-left address-holder vertical--top  address-holder--pad tablet-hidden"><span class="nobr display--block uppercase color--white title-13 extra-lh ls-180 font-bold maxw-130">N<sup>o</sup></span></th>
                                    <th class="order-date a-left address-holder vertical--top  "><span class="nobr display--block uppercase color--white title-13 extra-lh ls-180 font-bold maxw-130">order date / code</span></th>
                                    <th class="order-completion a-left address-holder vertical--top  "><span class="nobr display--block uppercase color--white title-13 extra-lh ls-180 font-bold maxw-130">order <br> completion</span></th>
                                    <th class="order-total a-left address-holder vertical--top  "><span class="nobr display--block uppercase color--white title-13 extra-lh ls-180 font-bold maxw-130">products  <br> included</span></th>
                                    <th class="order-amount a-left address-holder vertical--top  "><span class="nobr display--block uppercase color--white title-13 extra-lh ls-180 font-bold maxw-130">amount</span></th>
                                    <th class="order-status a-left address-holder vertical--top  "><span class="nobr display--block uppercase color--white title-13 extra-lh ls-180 font-bold maxw-130">Status</span></th>
                                    <th class="order-actions a-left address-holder vertical--top  "><span class="nobr display--block uppercase color--white title-13 extra-lh ls-180 font-bold maxw-130">&nbsp;</span></th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($data as $key => $order)
                                    <tr class="woocommerce-orders-table__row woocommerce-orders-table__row--status-processing order bb--black">
                                        <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-number vertical--top td-order-detail address-holder--pad tablet-hidden" data-title="N<sup>o</sup>">

                                            <span class="font-bold title-13 ls-180">{{$loop->iteration}}</span>

                                        </td>

                                        <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-date vertical--top td-order-detail " data-title="order date / code">

                                            <time class="font-bold title-17 ls-30 uppercase display--block" datetime="2021-10-02T10:53:59+00:00">
                                                {{\Carbon\Carbon::parse($order->created_by)->format('Y-m-d')}}
                                            </time>
                                            <a href="{{route('userOrderDetail',['id'=>$order->id])}}" class="display--block font-bold title-25 ls-30 color--black">
                                                N
                                                <sup class="mr-13">o</sup>
                                                {{$order->id}}
                                            </a>

                                        </td>

                                        <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-completion vertical--top td-order-detail " data-title="order <br> completion">
                                            <span class="display--block uppercase ls-80">{{$order->status}}</span>
                                        </td>

                                        <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-total vertical--top td-order-detail " data-title="products  <br> included">

                                            <span class="display--block ls-80">{{count($order->orderDetail)}}</span>

                                        </td>

                                        <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-amount vertical--top td-order-detail " data-title="amount">
                                            <span class="display--block ls-80">
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>
                                                    {{$order->orderDetail->sum('price')}}
                                                </span>
                                            </span>
                                        </td>

                                        <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-status vertical--top td-order-detail " data-title="Status">

                                            <span class="display--block ls-30 uppercase font-bold relative t-order-status ">
                                                {{$order->admin_status ? $order->admin_status:'Pending'}}
                                                <span class="display--block mt-5"></span>
                                                <a href="{{route('userOrderDetail',['id'=>$order->id])}}" class="abs-tr display--block no-trans t-order-view-link">
                                                    <span class="trans">
                                                        <svg class="icon icon--arrow-long-right no-trans" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                             viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">		<path d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068
                                                                       c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557
                                                                       l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104
                                                                       c0.006-0.006,0.011-0.013,0.018-0.019C513.968,262.339,513.943,249.635,506.134,241.843z"/>
                                                            </svg>

                                                    </span>
                                                </a>
                                            </span>

                                        </td>

                                        <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-actions vertical--top td-order-detail " data-title="&nbsp;"></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection

