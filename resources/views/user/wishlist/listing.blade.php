@extends('layout.dashboard-layout.app')

@section('title')
    Wishlist
@endsection


@section('style')
    <style>

        .blockUI {
            z-index: 1060 !important;
        }

        .list_canl {
            background-color: #000;
            border-color: #000;
            color: #fff;
            cursor: pointer;
            border: 1px solid #000;
            border-radius: 2px;
            padding: 5px 2px;
            font-size: 11px;
            font-weight: 700;
            margin: 2px 0px;
        }

    </style>
@endsection


@section('body')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 bh-mb">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Wishlist</h1>
                        {{--                        <ol class="breadcrumb float-right">--}}
                        {{--                            <li class="breadcrumb-item">Home</li>--}}
                        {{--                            <li class="breadcrumb-item active">Language Listing</li>--}}
                        {{--                        </ol>--}}
{{--                        <div class="float-right">--}}
{{--                            <a href="{{route('newsCreate')}}">--}}
{{--                                <button class="btn btn-primary">Create News</button>--}}
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
                                        <th>Product Name</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($data as $wishlist)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$wishlist->product->name}}</td>

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



@endsection


@section('script')


    <script src="{{asset('admin/js/dataTable.js')}}"></script>



    <script>


        $(document).on('ready', function () {

            $('#data_table').DataTable();


        });


    </script>

@endsection


