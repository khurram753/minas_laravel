{{--<script type='text/javascript' src='{{asset("site/js/eshopjs/jquery-migrate.min.js")}}'></script>--}}
<script type='text/javascript' defer src='{{asset('site/js/eshopjs/jquery.js')}}'></script>


{{--<script type='text/javascript' defer src='{{asset('site/js/eshopjs/jquery.blockUI.min.js')}}'></script>--}}
<script type='text/javascript' defer src='{{asset('site/js/eshopjs/app-dep.min.1.0.1.js')}}'></script>
<script type='text/javascript' defer src='{{asset('site/js/eshopjs/app.min.1.0.1.js')}}'></script>


<script src="{{asset('admin/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('custom/js/toastr.min.js')}}"></script>

<script>
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


</script>


