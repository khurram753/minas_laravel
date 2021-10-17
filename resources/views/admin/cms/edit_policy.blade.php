@extends('layout.dashboard-layout.app')

@section('title')
    Edit Privacy Policy
@endsection

@section('style')

@endsection


@section('body')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 bh-mb">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left"> Edit Privacy Policy</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active"> Edit Privacy Policy</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <form method="post" id="updateEmployee">
                @csrf
                <input type="hidden" name="id" value="{{$data->id}}">
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Page Name</label>
                            <input type="text" class="form-control" name="page_name"
                                   placeholder="Enter Page Name" required readonly
                                   maxlength="50" value="{{$data->page_name}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea class="form-control editor" name="description">{{$data->description}}</textarea>
                        </div>



                        <button class="btn btn-primary" type="button" id="createBtn">Update</button>


                    </div>


                </div>




                {{--                <a href="{{route('cmsListing')}}">--}}
                {{--                    <button class="btn btn-primary" type="button">Cancel</button>--}}
                {{--                </a>--}}

            </form>
        </div>

    </div>


{{--    <div id="throbber" class="modal" role="dialog" style="display:none; position:relative; opacity:0.6; background-color:white;">--}}
{{--        <img style="margin: 0 auto;--}}
{{--                position: absolute;--}}
{{--                top: 0; bottom: 0; left:0; right:0;--}}
{{--                margin: auto;--}}
{{--                display: block;" src="{{asset('custom/images/oQ0tF.gif')}}" />--}}
{{--    </div>--}}

@endsection


@section('script')

    <script>

        // function block() {
        //     var body = $('#panel-body');
        //     var w = body.css("width");
        //     var h = body.css("height");
        //     var trb = $('#throbber');
        //     var position = body.offset(); // top and left coord, related to document
        //
        //     trb.css({
        //         width: w,
        //         height: h,
        //         opacity: 0.7,
        //         position: 'absolute',
        //         // top:        position.top,
        //         // left:       position.left
        //     });
        //     trb.show();
        // }
        // function unblock() {
        //     var trb = $('#throbber');
        //     trb.hide();
        // }

        $(document).ready(function () {

            $('#createBtn').click(function () {

                var data = new FormData($('#updateEmployee')[0]);

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

                // block();


                $.ajax({

                    type: 'POST',
                    url: '{{route("policyUpdate")}}',
                    data: data,
                    cache: false,
                    contentType: false,
                    processData: false,

                    success: function (response, status) {

                        if (response.result == 'success') {
                            $.unblockUI();
                            // unblock();

                            successMsg(response.message);

                            setTimeout(function () {
                                    window.location.reload();
                                }
                                , 2000);
                        } else if (response.result == 'error') {
                            $.unblockUI();
                            // unblock();

                            errorMsg(response.message);
                        }


                    },
                    error: function (data) {
                        $.each(data.responseJSON.errors, function (key, value) {
                            $.unblockUI();
                            // unblock();

                            errorMsg(value);
                        });
                    }


                });

            });

        });


    </script>

@endsection
