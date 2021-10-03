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
        <div class="grid max-12cols-g  pb-200 relative z-20 mobile-hor-100 mobile-hor-pb-90">
            <div class="a-center color--black mb-large mobile-hor-gutter">
                <div class="mb-y"><span class="font-light title-17 bracket-icon">{</span><span class="font-bold title-13 ls-180 bracket-title">HELLO {{Auth::user()->name}}</span><span class="font-light title-17 bracket-icon">}</span></div>
                <div class="uppercase font-thin title-70 ls-30 mb-9">Edit your profile</div>
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
                    <div class="woocommerce-notices-wrapper"></div>
                    <div class="grid max-8cols-g pt-96 tablet-100 edit_profile_custom">
                        <form class="woocommerce-EditAccountForm edit-account color--black profileForm" action="" method="post">
                            @csrf

                            <div class="block-50 display--inline-top tablet-100">
                                <p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first mb-24 disable-pad gutter mobile-hor-gutter">
                                        <span class="aside-pad display--block">
                                            <label for="account_first_name" class="font-bold uppercase display--block">
                                                Name&nbsp;<span class="required">*</span>
                                            </label>
                                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text custom-input title-25 block-100 font-light"
                                                   name="name" value="{{Auth::user()->name}}">
                                        </span>
                                    <span class="line-input bg--black display--block"></span>
                                </p>

                                <div class="clear"></div>


                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide mb-24 disable-pad gutter mobile-hor-gutter">
                                        <span class="aside-pad display--block">
                                            <label for="account_email" class="font-bold uppercase display--block">
                                                Email address&nbsp;<span class="required">*</span>
                                            </label>
                                            <input type="email" class="woocommerce-Input woocommerce-Input--email input-text custom-input title-25 block-100 font-light" name="email" value="{{Auth::user()->email}}">
                                        </span>
                                    <span class="line-input bg--black display--block"></span>
                                </p>
                            </div>
                            <div class="block-50 tablet-100 display--inline-top">

                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide mb-24 disable-pad gutter mobile-hor-gutter">
                                        <span class="aside-pad display--block">
                                        <label for="password_current" class="font-bold uppercase display--block">Current password</label>
                                        <input type="password" class="woocommerce-Input woocommerce-Input--password input-text custom-input title-25 block-100 font-light"
                                               name="old_password">
                                    </span>
                                    <span class="line-input bg--black display--block"></span>
                                </p>
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide mb-24 disable-pad gutter mobile-hor-gutter">
                                        <span class="aside-pad display--block">
                                        <label for="password_1" class="font-bold uppercase display--block">New password</label>
                                        <input type="password" class="woocommerce-Input woocommerce-Input--password input-text custom-input title-25 block-100 font-light"
                                               name="password">
                                    </span>
                                    <span class="line-input bg--black display--block"></span>
                                </p>
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide mb-24 disable-pad gutter mobile-hor-gutter">
                                        <span class="aside-pad display--block">
                                        <label for="password_2" class="font-bold uppercase display--block">Confirm new password</label>
                                        <input type="password" class="woocommerce-Input woocommerce-Input--password input-text custom-input title-25 block-100 font-light"
                                               name="password_confirmation">
                                    </span>
                                    <span class="line-input bg--black display--block"></span>
                                </p>
                            </div>
                            <p class="pt-70">
{{--                                <input type="hidden" id="save-account-details-nonce" name="save-account-details-nonce" value="4f266858be">--}}
{{--                                <input type="hidden" name="_wp_http_referer" value="/my-account/edit-account/">--}}
                                <span class="button round-button xl br-50 round-button--black  display--block m-auto relative trans">
                                    <span class="block-80 abs-center a-center font-bold title-12 uppercase ls-180">
                                        save changes
                                    </span>
                                    <button type="button" class="woocommerce-Button button op-0 fill-dimensions"
                                           id="saveProfileBtn">
                                        Save changes
                                    </button>
                                </span>
{{--                                <input type="hidden" name="action" value="save_account_details">--}}
                            </p>

                        </form>
                        <div class="gutter mobile-hor-gutter">
                            <span class="display--block a-center font-bold title-25 ls-30 pt-txt">
                                <p>
                                    <a class="relative font-bold title-25 color--black delete-my-account uppercase" href="/my-account/edit-account/"></a>
                                </p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection


@section('script')
    <script>
        $(document).ready(function(){
            $('#saveProfileBtn').click(function(){
                var data = $('.profileForm').serialize();

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

                    type: 'POST',
                    url: '{{route("saveAccount")}}',
                    data: data,

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
