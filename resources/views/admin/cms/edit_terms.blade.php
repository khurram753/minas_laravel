@extends('layout.dashboard-layout.app')

@section('title')
    Edit Terms & Conditions
@endsection


@section('body')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 bh-mb">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left"> Edit Terms & Conditions</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Edit Terms & Conditions</li>
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

@endsection


@section('script')

    <script>

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
                            successMsg(response.message);

                            setTimeout(function () {
                                    window.location.reload();
                                }
                                , 2000);
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
