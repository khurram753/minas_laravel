@extends('layout.shop-layout.app')

@section('title')
    MINAS - Cart
@endsection

@section('tags')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
@endsection


@section('content')
    <main id="content" class="site-content relative">
        <div class="woocommerce"></div>
        <div class="fill-dimensions bg--white"></div>
        <div class="cart-line-holder block-100 bg--grey-med abs-tl fixed z-30 mobile-hor-hidden"></div>
        <div class="cart-line-holder block-100 bg--grey-med abs-bl fixed z-30 mobile-hor-hidden"></div>

        <a href="{{route('shop')}}"
           class="cart-close display--inline abs-tr fixed title-12 font-bold color--black hover-red ls-180 uppercase cursor z-30 mobile-hor-rel">
            <svg class="icon icon--x no-icon-trans block-100">
                <use xlink:href="#x-close"></use>
            </svg>
        </a>
        <div class="mh-100vh pr-502 relative z-20 pb-section laptop-nopad--right tablet-hor-nopad--right">
            <div class="grid max-8cols-g tablet-hor-maxw-100 mobile-hor-100">
                <div class="gutter mobile-hor-gutter">
                    <header class="header relative pt-89">
                        <a href="{{route('home')}}" class="logo display--block relative top-0 mb-y">
                            <svg class="block-100" xmlns="http://www.w3.org/2000/svg" width="525.349"
                                 preserveAspectRatio="xMinYMin meet" viewBox="0 0 525.349 133.56">
                                <g fill-rule="evenodd" clip-rule="evenodd">
                                    <path class="path"
                                          d="M508.414 73.081c-11.361-9.835-23.782-11.475-38.45-8.827-11.592 2.093-32.917 5.267-43.792 1.423-7.555-2.671-13.654-1.101-20.923 1.028-7.107 2.081-13.328 3.545-20.925 3.956-11.29.61-12.624-5.133-19.424-5.261-7.3-.137-13.841 3.171-20.692 4.337-5.984 1.018-14.82 4.281-19.55-1.468-2.49-3.026-2.981-4.753-7.354-5.165-3.007-.283-7.311 1.285-9.857 2.471-3.524 1.64-15.355 8.101-18.038 3.378-.941-1.657.061-9.072-5.287-6.612-2.402 1.105-4.94 5.305-4.94 7.706v2.669c0 3.631 3.603 7.525 7.055 8.261 4.113.875 8.878-.399 12.671-2.023 5.085-2.178 17.902-10.489 21.829-5.216 2.559 3.436 2.704 6.183 7.712 7.603 4.087 1.159 8.811-.393 12.821-1.195 6.944-1.39 17.859-6.164 24.607-6.164h2.39c5.035 0 6.21 8.664 18.103 7.296 6.489-.746 15.047-3.12 21.121-5.026 7.828-2.459 14.814-2.389 22.858-.559 7.467 1.698 15.562 2.056 23.132.882 14.971-2.322 29.609-7.735 44.356-.784 5.651 2.664 10.48 6.367 14.674 11.321 2.014 2.379 4.062 5.563 4.636 8.441.715 3.585-1.631 7.232-5.417 7.232h-3.513c-12.189 0-5.362 10.427-.041 11.293 3.315.539 7.404-.818 10.074-2.244 3.337-1.783 4.447-3.226 6.029-6.476 4.929-10.124-8.346-25.77-15.865-32.277zM283.396 31.409v-3.091c0-4.626-4.144-8.736-8.476-9.354-8.201-1.172-9.327 6.211-3.687 6.511 7.602.403 3.841 6.401-.008 8.802-4.905 3.06-1.298-1.948-1.337-3.129-.072-2.217-2.771-4.014-4.8-4.181-8.942-.738-14.166 15.533-1.786 18.915 8.662 2.364 20.094-5.878 20.094-14.473zM213.454 70.856c-8.988-3.834 10.806-15.624-.881-21.459-7.4-3.694-17.684 3.102-24.618 6.427-7.729 3.706-14.925 7.067-22.958 10.624-4.171 1.847-12.742 5.174-19.358 6.881-2.547.657-4.805 1.074-6.41 1.074h-3.231c-4.166 0-9.132-1.866-10.437-6.284-1.033-3.496-.577-3.782 1.802-5.862 1.572-1.373 2.855-2.648 4.426-4.004 4.534-3.913 9.174-7.859 13.849-11.897a877.283 877.283 0 0 0 4.194-3.642c7.004-6.12 31.136-27.639 31.979-35.197.575-5.156-3.99-8.104-8.677-7.419-6.402.936-7.043 1.522-12.281 4.6-6.031 3.542-10.343 7.015-15.214 11.371a381.178 381.178 0 0 0-3.667 3.331c-8.816 8.087-23.861 29.345-26.743 40.419-1.167 4.487-4.202 5.912-7.877 8.843-3.173 2.53-6.543 4.692-9.751 7.109-6.352 4.787-13.104 9.435-19.7 13.881-6.414 4.324-13.475 9.179-20.412 13.171-6.82 3.924-14.419 8.625-21.389 12.192-6.192 3.169-16.667 8.487-23.245 10.337-1.954.55-11.249 3.498-12.229 4.506-2.118 2.181 1.661 3.751 3.696 3.701 2.592-.062 4.974-.452 7.392-1.059 17.488-4.391 31.205-11.328 46.982-20.182 6.943-3.897 13.698-9.559 20.34-13.242 6.573-3.645 13.082-9.892 19.582-14 3.074-1.943 6.901-4.966 9.576-7.145 1.554-1.266 3.009-2.604 4.627-3.805 3.329-2.469 2.139-.555 4.008 1.881 5.74 7.48 17.222 7.083 25.674 6.021a44.567 44.567 0 0 0 3.138-.517c13.929-2.775 33.866-12.519 45.802-17.708 2.709-1.178 11.943-4.866 10.49 1.34-1.192 5.094-3.137 8.213 1.001 12.72 5.113 5.571 20.885 1.966 27.07-.511 4.057-1.625 8.336-2.95 12.457-4.264 3.354-1.07 12.054-4.352 10.484 2.051-2.661 10.859 16.96-2.514 11.451-11.946-7.414-12.686-38.429 13.001-50.942 7.663zm-67.815-43.938c7.108-7.377 14.256-13.123 16.299-11.187 2.262 2.145-13.077 16.42-14.929 18.118-.249.228-.728.682-1.371 1.295-4.108 3.915-14.992 14.35-16.526 14.389.397-3.705 8.436-14.217 16.527-22.615z"></path>
                                </g>
                            </svg>
                        </a>
                        <a href="{{route('shop')}}"
                           class="display--inline title-12 font-bold color--black hover-red ls-180 uppercase pl-70 relative cursor mb-y woo-back-link">
                            <svg class="icon icon--arrow-long-left abs-tl top-4 no-icon-trans">
                                <use xlink:href="#arrow-long-left"></use>
                            </svg>
                            continue shopping
                        </a>
                        {{--                        <div class="mb-24">--}}
                        {{--                            <span class="title-18 color--grey display--inline">{</span>--}}
                        {{--                            <span class="font-bold title-13 uppercase color--black ls-180 display--inline gutter-20">01. cart</span>--}}
                        {{--                            <span class="title-13 display--inline">/</span>--}}
                        {{--                            <span class="font-bold title-13 uppercase ls-180 display--inline gutter-20">02. checkout</span>--}}
                        {{--                            <span class="title-13 display--inline">/</span>--}}
                        {{--                            <span class="font-bold title-13 uppercase ls-180 display--inline gutter-20">03. confirmation</span>--}}
                        {{--                            <span class="title-18 color--grey display--inline">}</span>--}}
                        {{--                        </div>--}}
                        <h1 class="uppercase title-70 ls-30 font-thin color--black mb-title">Cart</h1>
                    </header>
                    <div class="relative z-20">
                        <div class="woocommerce">
                            @include('site.cart.section.cart_produt')
                            <span class="cart-collaterals">
                                @include('site.cart.section.related_products')

                                <div class="cart_totals ">


                                           <!-- <h2 class="title-20 uppercase ls-80"></h2>-->

                                    <div class="shop_table shop_table_responsive">
                                        <div class="line bg--black mt-48"></div>
                                        <div class="maxw-540 m-auto color--black pt-88 mb-70 mobile-hor-maxw-100">
                                            <div class="gutter mobile-hor-nomargin">
                                                <div class="order-total uppercase">
                                                    <div class="title-20 ls-30 display--inline font-bold">Total</div>
                                                    <div class="float-right title-20 a-right total" data-title="Total">
                                                        <strong>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>
                                                                    <span
                                                                        class="totalPriceSpan">{{$totalPrice ? $totalPrice:0}}</span>
                                                            </span>
                                                        </strong>
{{--                                                        <small class="includes_tax">(includes--}}
                                                        {{--                                                            <span--}}
                                                        {{--                                                                class="woocommerce-Price-amount amount">--}}
                                                        {{--                                                                <span class="woocommerce-Price-currencySymbol">$</span>--}}
                                                        {{--                                                                52.26--}}
                                                        {{--                                                            </span>--}}
                                                        {{--                                                            VAT)--}}
                                                        {{--                                                        </small>--}}
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="wc-proceed-to-checkout">

                                        <a
                                            @guest
                                            href="{{route('loginPageUser')}}"
                                            @else
                                            href="javascript:void(0)"
                                            @endguest
                                            class="checkout-button button color--black relative alt wc-forward button round-button xl br-50 round-button--black right-45 display--block m-auto  trans mb-70 checkout">
                                            <span
                                                class="block-80 abs-center a-center font-bold title-12 uppercase ls-180">
                                                Proceed to checkout
                                            </span>
                                        </a>
                                    </div>


                                </div>
                            </span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('script')
    @include('site.shop.script.cart_script')

    @auth
        <script src="https://js.stripe.com/v3/"></script>

        <script>
            $(document).ready(function () {

                $('.checkout').click(function () {

                    var stripe = Stripe('{{env('STRIPE_KEY')}}');


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

                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        method: 'POST',
                        url: '{{route('createStripeSession')}}',
                        // data: data,
                        success: function (response, status) {
                            if (response.result == 'success') {
                                $.unblockUI();
                                return stripe.redirectToCheckout({sessionId: response.data});

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
    @endauth
@endsection
