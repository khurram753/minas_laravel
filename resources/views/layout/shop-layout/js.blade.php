{{--<script type='text/javascript' src='{{asset("site/js/eshopjs/jquery-migrate.min.js")}}'></script>--}}
<script type='text/javascript' defer src='{{asset('site/js/eshopjs/jquery.js')}}'></script>


{{--<script type='text/javascript' defer src='{{asset('site/js/eshopjs/jquery.blockUI.min.js')}}'></script>--}}
<script type='text/javascript' defer src='{{asset('site/js/eshopjs/app-dep.min.1.0.1.js')}}'></script>
<script type='text/javascript' defer src='{{asset('site/js/eshopjs/app.min.1.0.1.js')}}'></script>


<script src="{{asset('admin/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('custom/js/toastr.min.js')}}"></script>

<script>

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



    function successMsg(_msg) {
        window.toastr.success(_msg);
    }

    function errorMsg(_msg) {
        window.toastr.error(_msg);
    }

    function warningMsg(_msg) {
        window.toastr.warning(_msg);
    }


    @if(Session::has('success'))
    successMsg('{{Session::get("success")}}');
    @endif

    @if(Session::has('error'))
    errorMsg("{{Session::get('error')}}");
    @endif




    @if(Request()->has('success'))
    successMsg('Payment Successful')
    setTimeout(function () {
            window.location.href = '{{route('shop')}}'
        },
        2000);
    @endif

    @if(Request()->has('error'))
    errorMsg('Payment Cancel')
    setTimeout(function () {
            window.location.href = '{{route('shop')}}'
        },
        2000);
    @endif


</script>


