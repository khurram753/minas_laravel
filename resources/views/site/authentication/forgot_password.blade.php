@extends('layout.shop-layout.app')

@section('title')
    {{env('APP_NAME')}} - Lost Password
@endsection

@section('style')

@endsection

@section('content')

    <main id="content" class="site-content relative">
        <div class="woocommerce"></div>
        <div class="fill-dimensions bg--white"></div>
        <div class="grid max-12cols-g  pb-200 relative z-20 mobile-hor-100 mobile-hor-pb-90">
            <div class="woocommerce">
                <div class="woocommerce-notices-wrapper"></div>
                <div class="grid max-6cols-g mobile-hor-100">
                    <div class="gutter mobile-hor-gutter color--black a-center">
                        <h3 class="font-thin title-50 mb-title uppercase ls-30 uppercase color--black">Lost your
                            password?</h3>
                        <form method="post" class="woocommerce-ResetPassword lost_reset_password" id="forgetPassForm">
                            @csrf

                            <p>Please enter your email address. You will receive a link to create a new
                                password via email.</p>
                            <div class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first mb-85">
                                <div class="aside-pad display--block a-left">
                                    <label for="user_login" class="display--block font-bold uppercase ls-30">
                                        Email</label>
                                    <input
                                        class="woocommerce-Input woocommerce-Input--text input-text custom-input custom-input--lost title-25 block-100 font-light"
                                        type="email" name="email" autocomplete="username">
                                </div>
                                <div class="line-input bg--black display--block"></div>
                            </div>

                            <div class="clear"></div>


                            <span class="woocommerce-form-row form-row button round-button xl br-50 round-button--black  display--block m-auto relative trans color--black">
                                <span class="block-80 abs-center a-center font-bold title-12 uppercase ls-180">Reset password</span>
                                <button type="button" class="woocommerce-Button button alt op-0 fill-dimensions forgetBtn" value="Reset password"></button>
                            </span>

                        </form>
                    </div>
                </div>


            </div>
        </div>

    </main>

@endsection

@section('script')


    <script>

        $(document).ready(function () {

            $('.forgetBtn').click(function () {

                var data = $('#forgetPassForm').serialize();

                $.blockUI({
                    css: {
                        border: 'none',
                        padding: '15px',
                        backgroundColor: '#000',
                        '-webkit-border-radius': '10px',
                        '-moz-border-radius': '10px',
                        opacity: .5,
                        color: '#fff',
                        textTransform:'uppercase',
                        fontFamily:'Arial'
                    }
                });
                $.ajax({

                    type: 'POST',
                    url: '{{route("forgetPasswordUser")}}',
                    data: data,

                    success: function (response, status) {

                        if (response.result == 'success') {
                            $.unblockUI();
                            successMsg(response.message);

                            setTimeout(function(){window.location.href = '{{route('loginPageUser')}}';},1000);

                        }
                        else if (response.result == 'error') {
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
