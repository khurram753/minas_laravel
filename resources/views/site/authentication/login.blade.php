@extends('layout.shop-layout.app')

@section('title')
    {{env('APP_NAME')}} - Authentication
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

                <div class="u-columns col2-set display-flex flex-wrap tablet-block" id="customer_login">

                    @include('site.authentication.section.login')
                    @include('site.authentication.section.register')

                </div>

            </div>
        </div>

    </main>

@endsection

@section('script')
    {{--    <script src="{{asset('admin/js/jquery.min.js')}}"></script>--}}
    {{--    <script type='text/javascript'  src='{{asset('site/js/eshopjs/jquery.blockUI.min.js')}}'></script>--}}


    <script>

        $(document).ready(function () {

            $('.loginBtn').click(function () {

                var data = $('#loginForm').serialize();

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
                    url: '{{route("loginUser")}}',
                    data: data,

                    success: function (response, status) {

                        if (response.result == 'success') {
                            $.unblockUI();
                            successMsg(response.message);

                            setTimeout(function () {
                                window.location.href = response.url;
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


        $('.registerBtn').click(function () {

            if ($('#terms').is(":not(:checked)")) {
                errorMsg('Please Accept our Terms and Condition');
                return false;
            } else {

                var data = $('#registerForm').serialize();

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
                    url: '{{route("registerUser")}}',
                    data: data,

                    success: function (response, status) {

                        if (response.result == 'success') {
                            $.unblockUI();
                            successMsg(response.message);

                            setTimeout(function () {
                                window.location.href = '{{route('adminDashboard')}}';
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
            }
        });

    </script>

@endsection
