@extends('layout.dashboard-layout.app')

@section('title')
    Retailer Listing
@endsection

@section('style')
    <style>

        .blockUI {
            z-index: 1060 !important;
        }

    </style>
@endsection

@section('body')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 bh-mb">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Retailer Listing</h1>
                        {{--                        <ol class="breadcrumb float-right">--}}
                        {{--                            <li class="breadcrumb-item">Home</li>--}}
                        {{--                            <li class="breadcrumb-item active">Language Listing</li>--}}
                        {{--                        </ol>--}}
{{--                        <div class="float-right">--}}
{{--                            <a href="{{route('contactUsCreate')}}">--}}
{{--                                <button class="btn btn-primary">Create New</button>--}}
{{--                            </a>--}}
{{--                        </div>--}}
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                    <div class="card mb-3">


                        <div class="card-body">

                            <div class="table-responsive">

                                <table class="table table-bordered" id="data_table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Company</th>
                                        <th>Country</th>
                                        <th>Request Type</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($data as $contactUs)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$contactUs->full_name}}</td>
                                            <td>{{$contactUs->email}}</td>
                                            <td>{{$contactUs->company}}</td>
                                            <td>{{$contactUs->country}}</td>
                                            <td>{{$contactUs->request_type}}</td>
                                            <td>{{$contactUs->status}}</td>
                                            <td>

                                                <a title="change-status" data-id="{{$contactUs->id}}"
                                                   href="javascript:void(0)"
                                                   class="btn btn-primary btn-sm changeStatus">
                                                    <i class="fas fa-retweet"></i></a>



                                                <a title="Edit" href="{{route('contactUsEdit',['id'=>$contactUs->id])}}"
                                                   class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a>

                                                <a title="Delete" data-id="{{$contactUs->id}}"
                                                   href="javascript:void(0)"
                                                   class="btn btn-primary btn-sm deleteRecord">
                                                    <i class="fas fa-trash-alt"></i></a>
                                            </td>

                                        </tr>
                                    @endforeach

                                    </tbody>

                                </table>


                            </div>

                        </div>


                    </div>


                </div>

            </div>
        </div>
    </div>

    @include('admin.contact_us.modal.delete_modal')

@endsection


@section('script')


    <script src="{{asset('admin/js/dataTable.js')}}"></script>



    <script>


        $(document).on('ready', function () {

            $('#data_table').DataTable();

            $(document).on('click', '.deleteRecord', function () {

                var data = $(this).data('id');

                var html = $('#deleteRecordId').val(data);

                $('#delete_form').append(html);

                $('#delete_modal').modal('show');

            });


            $('#deleteRecordBtn').click(function () {

                var data = $('#delete_form').serialize();

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
                    url: '{{route("contactUsDelete")}}',
                    data: data,

                    success: function (response, status) {

                        if (response.result == 'success') {
                            $.unblockUI();
                            successMsg(response.message);

                            setTimeout(function () {
                                window.location.href = '{{route('contactUsListing')}}';
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

        $('.changeStatus').click(function () {

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
                url: '{{route("retailerStatusChange")}}',
                data: {'id':data},

                success: function (response, status) {

                    if (response.result == 'success') {
                        $.unblockUI();
                        successMsg(response.message);

                        setTimeout(function () {
                            window.location.href = '{{route('retailerRequest')}}';
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





    </script>

@endsection
