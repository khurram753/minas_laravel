@extends('layout.dashboard-layout.app')

@section('title')
    Edit Contact Us
@endsection


@section('body')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 bh-mb">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Edit Contact Us</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Edit Contact Us</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <form method="post" id="updateEmployee">
                @csrf
                <input type="hidden" name="id" value="{{$data->id}}">
                <div class="row">

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" name="title"
                                   placeholder="Enter Title" required value="{{$data->title}}"
                                   maxlength="50">
                        </div>

                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" name="email"
                                   placeholder="Enter Email" required value="{{$data->email}}"
                                   maxlength="100">
                        </div>

                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <input type="text" class="form-control" name="address"
                                   placeholder="Enter Address" required value="{{$data->address}}"
                                   maxlength="100">
                        </div>


                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Country</label>
                            <input type="text" class="form-control" name="country"
                                   placeholder="Enter Country" required value="{{$data->country}}"
                                   maxlength="100">
                        </div>


                    </div>


                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone Number</label>
                            <input type="text" class="form-control" name="phone_number"
                                   placeholder="Enter Phone Number" required value="{{$data->phone_number}}"
                                   maxlength="100">
                        </div>


                    </div>



                </div>




                <button class="btn btn-primary" type="button" id="createBtn">Update</button>


                <a href="{{route('contactUsListing')}}">
                    <button class="btn btn-primary" type="button">Cancel</button>
                </a>

            </form>
        </div>

    </div>

@endsection


@section('script')

    {{--<script src="{{asset('site/js/moment.min.js')}}"></script>--}}

    {{--<script src="{{asset('site/js/daterangepicker.js')}}"></script>--}}

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
                    url: '{{route("contactUsUpdate")}}',
                    data: data,
                    cache: false,
                    contentType: false,
                    processData: false,

                    success: function (response, status) {

                        if (response.result == 'success') {
                            $.unblockUI();
                            successMsg(response.message);

                            setTimeout(function(){
                                    window.location.href='{{route('contactUsListing')}}'}
                                ,2000);
                        }
                        else if(response.result == 'error'){
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
