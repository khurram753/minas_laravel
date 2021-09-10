<script type="text/javascript" defer="" src="{{asset('site/js/jquery-3.4.1.min.js')}}"></script>

{{--<script src="{{asset('admin/js/jquery.min.js')}}"></script>--}}

<script type="text/javascript" defer="" src="{{asset('site/js/jquery-migrate-3.1.0.min.js')}}"></script>
<script type="text/javascript" defer="" src="{{asset('site/js/app.min.1.0.1.js')}}"></script>

{{--<script type="text/javascript" src="{{asset('site/js/jquery-3.4.1.min.js')}}"></script>--}}

<script src="{{asset('admin/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('custom/js/toastr.min.js')}}"></script>



<script>

    $(document).ready(function () {
        getCollection();

    });

    function getCollection() {
        $.ajax({
            type: 'GET',
            url: '{{route("getCollection")}}',

            success: function (response, status) {

                if (response.result == 'success') {
                    var html = '';
                    $.each(response.data, function (index, value) {
                        var url = "{{url('media-kit?collection_id=')}}" + value.id;
                        html += '<li id="menu-item-'+index+'" class="menu-item menu-item-type-taxonomy menu-item-object-publication_category menu-item-1372 submenu-item submnu-1" style="opacity: 1;transform: matrix(1, 0, 0, 1, 0, 0);">';
                        html += '<a href="' + url + '" class="submenu-a menu-link item--28">' + value.name + '</a>';
                        html += '</li>'


                        // console.log(value);
                    })

                    // console.log(html);
                    $('.mediaKitList').prepend(html);

                } else if (response.result == 'error') {
                }
            }


        });
    }


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
