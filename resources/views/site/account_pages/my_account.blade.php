@extends('layout.shop-layout.app')

@section('title')
    {{env('APP_NAME')}} - My Account
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
                <div class="mb-y"><span class="font-light title-17 bracket-icon">{</span><span class="font-bold title-13 ls-180 bracket-title">HELLO {{Auth::user()->name}}</span><span class="font-light title-17 bracket-icon">}</span></div>
                <div class="uppercase font-thin title-70 ls-30 mb-9">My account</div>
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

                    <div class="color--black max-8cols-g m-auto">
                        <div class="pt-96">
                            <div class="pr-xl mb-block relative tablet-nopad--right mobile-hor-mb-60" style="text-align: center;float: left;width: 35%;">
{{--                                <div class="u-columns woocommerce-Addresses col2-set addresses relative">--}}


{{--                                    <div class="u-column1 col-1 woocommerce-Address block-50 mobile-hor-100 display--inline-top mobile-hor-100 tablet-mb-90">--}}
{{--                                        <div class="gutter mobile-hor-gutter">--}}
{{--                                            <div class="">--}}
{{--                                                <header class="woocommerce-Address-title title font-bold title-40 ls-30 uppercase mb-c">--}}
{{--                                                    <h3>Billing address</h3>--}}
{{--                                                </header>--}}
{{--                                                <address class="font-light title-20 extra-lh ls-80 mb-med2">You have not set up this type of address yet.</address>--}}
{{--                                                <a href="billing-address.html" class="edit color--black hover-red uppercase font-bold title-13 underlined">Edit</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="u-column2 col-2 woocommerce-Address block-50 mobile-hor-100 display--inline-top mobile-hor-100 tablet-mb-90">--}}
{{--                                        <div class="gutter mobile-hor-gutter">--}}
{{--                                            <div class="">--}}
{{--                                                <header class="woocommerce-Address-title title font-bold title-40 ls-30 uppercase mb-c">--}}
{{--                                                    <h3>Shipping address</h3>--}}
{{--                                                </header>--}}
{{--                                                <address class="font-light title-20 extra-lh ls-80 mb-med2">You have not set up this type of address yet.</address>--}}
{{--                                                <a href="shipping-address.html" class="edit color--black hover-red uppercase font-bold title-13 underlined">Edit</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <a href="{{route('editAccount')}}" class="button round-button xl br-50 round-button--black right-45 display--block m-auto abs-tr  trans tablet-rel-no-center">
                                    <span class="block-80 abs-center a-center font-bold title-12 uppercase ls-180">edit your profile</span>
                                </a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection
