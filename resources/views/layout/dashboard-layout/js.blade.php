<script src="{{asset('admin/js/modernizr.min.js')}}"></script>

<script src="{{asset('admin/js/popper.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>

<script src="{{asset('admin/js/detect.js')}}"></script>
<script src="{{asset('admin/js/fastclick.js')}}"></script>
<script src="{{asset('admin/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('admin/js/jquery.nicescroll.js')}}"></script>
<!-- range -->

<!-- App js -->
<script src="{{asset('admin/js/script.js')}}"></script>

<script src="{{asset('custom/js/toastr.min.js')}}"></script>

<script src="{{asset('custom/js/keypress_functions.js')}}"></script>

<script src="{{asset('custom/js/select2(4.0.3).full.js')}}"></script>
<script src="{{asset('custom/js/slick.min.js')}}"></script>

<script src="{{asset('admin/js/trumbowyg.min.js')}}"></script>


<script>


    $(document).ready(function () {
        $('.editor').trumbowyg({
            semantic: {
                'div': 'div' // Editor does nothing on div tags now
            },
            btns: [
                ['viewHTML'],
                ['undo', 'redo'], // Only supported in Blink browsers
                ['formatting'],
                ['strong', 'em', 'del'],
                ['superscript', 'subscript'],
                ['link'],
                ['insertImage'],
                ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
                ['unorderedList', 'orderedList'],
                ['horizontalRule'],
                ['removeformat'],
                ['fullscreen']
            ]
        });
    });



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


