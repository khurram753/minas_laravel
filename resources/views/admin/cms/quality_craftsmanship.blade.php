@extends('layout.dashboard-layout.app')

@section('title')
    QUALITY AND CRAFTSMANSHIP
@endsection


@section('body')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 bh-mb">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left"> QUALITY AND CRAFTSMANSHIP</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active"> QUALITY AND CRAFTSMANSHIP</li>
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
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" name="title"
                                   placeholder="Enter Page Name" required
                                   maxlength="50" value="{{$data->title}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea class="form-control" name="description">{{$data->description}}</textarea>
                        </div>

                        <div class="custom-dbhome">
                            <div class="form-group ">
                                <div class="db-bannerIMG">
                                    @if($data->header_image)
                                        <img class="image_1" src="{{asset($data->header_image)}}">
                                    @else
                                        <img class="image_1" src="{{asset('admin/images/no_image.jpg')}}">
                                    @endif

                                </div>
                                <label for="exampleInputEmail1">Image </label>
                                <input type="file" class="images_select" name="header_image"
                                       onchange="readURL(this,'image_1');">

                            </div>
                        </div>

                    </div>
                </div>
                <h2>Process Steps</h2>

                <div class="row add_more_button_row">

{{--                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="exampleInputEmail1">Title</label>--}}
{{--                            <input type="text" class="form-control" name="process[0][title]"--}}
{{--                                   placeholder="Enter Page Name" required--}}
{{--                                   maxlength="50">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">--}}

{{--                        <div class="form-group">--}}
{{--                            <label for="exampleInputEmail1">Description</label>--}}
{{--                            <textarea class="form-control" name="process[0][description]"></textarea>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="exampleInputEmail1">Step Number</label>--}}
{{--                            <input type="text" class="form-control" name="process[0][step_number]"--}}
{{--                                   placeholder="Enter Step Number" required--}}
{{--                                   maxlength="2">--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                        <button type="button" class="add_more_process">Add More</button>
                    </div>

                </div>


                @foreach($data->process as $key => $process)
                    <input type="hidden" name="process[{{$key}}][id]" value="{{$process->id}}">
                    <div class="row delete_row">

                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" name="process[{{$key}}][title]"
                                       placeholder="Enter Page Name" required
                                       maxlength="50" value="{{$process->title}}">
                            </div>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea class="form-control" name="process[{{$key}}][description]">{{$process->description}}</textarea>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 col-xl-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Step Number</label>
                                <input type="text" class="form-control" name="process[{{$key}}][step_number]"
                                       placeholder="Enter Step Number" required
                                       maxlength="2" value="{{$process->step_number}}">
                            </div>
                        </div>

                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                            <div class="custom-dbhome">
                            <div class="form-group" style="width: 100%!important">
                                <div class="db-bannerIMG">
                                    @if($process->background_image)
                                        <img class="images_{{$key}}" src="{{asset($process->background_image)}}">
                                    @else
                                        <img class="images_{{$key}}" src="{{asset('admin/images/no_image.jpg')}}">
                                    @endif
                                </div>
                                <label for="exampleInputEmail1">Background Image </label>
                                <input type="file" class="images_select"
                                       name="process[{{$key}}][background_image]"
                                       value="{{$process->background_image}}"
                                       onchange="readURL(this,'images_{{$key}}');">

                            </div>
                        </div>
                        </div>



                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                            <button type="button" data-id="{{$process->id}}" class="delete_process">Delete Row</button>
                        </div>

                    </div>
                @endforeach


                <button class="btn btn-primary" type="button" id="createBtn">Update</button>


            </form>
        </div>

    </div>

@endsection


@section('script')

    <script>

        $(document).ready(function () {

            var number = {{count($data->process)}};


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
                    url: '{{route("qualityUpdate")}}',
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
                            return false;
                        });
                    }


                });

            });

            $('.add_more_process').click(function () {


                var html = "<div class='row delete_row'>";

                html += '<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">';
                html += '<div class="form-group">';
                html += '<label for="exampleInputEmail1">Title</label>';
                html += '<input type="text" class="form-control" name="process['+number+'][title]" placeholder="Enter Page Name" required="" maxlength="50">';
                html += '</div> </div>';

                html += '<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">';
                html += '<div class="form-group">';
                html += '<label for="exampleInputEmail1">Description</label>';
                html += '<textarea class="form-control" name="process['+number+'][description]"></textarea>';
                html += '</div> </div>';


                html += '<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 col-xl-1">';
                html += '<div class="form-group">';
                html += '<label for="exampleInputEmail1">Step Number</label>';
                html += '<input type="text" class="form-control" name="process['+number+'][step_number]" placeholder="Enter Step Number" maxlength="50">';
                html += '</div> </div>';

                html += '<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">';
                html += '<div class="custom-dbhome">';
                html += '<div class="form-group" style="width: 100%!important">';
                html += '<div class="db-bannerIMG">';
                html += '<img class="images_'+number+'" src="{{asset('admin/images/no_image.jpg')}}">';
                html += '</div>';
                html += '<label for="exampleInputEmail1">Background Image </label>';
                html += '<input type="file" class="images_select" name="process['+number+'][background_image]" onchange="readURL(this,`images_'+number+'`);">';
                html += '</div>';
                html += '</div>';
                html += '</div>';

                html += '<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">';
                html += '<button type="button"  class="delete_process">Delete Row</button>';
                html += '</div>';

                html += '</div>';

                $('.add_more_button_row').after(html);

                number ++;
            });

            $(document).on('click','.delete_process',function (){

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
                    url: '{{route("deleteProcess")}}',
                    data: {id:},

                    success: function (response, status) {

                        if (response.result == 'success') {
                            $.unblockUI();
                            $(this).parents('div.delete_row').remove();
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
                            return false;
                        });
                    }


                });

            });

        });

        var fileTypes = ['jpg', 'jpeg', 'png'];


        function readURL(input, className) {


            if (input.files && input.files[0]) {
                var reader = new FileReader();

                var size = input.files[0].size;

                var extension = input.files[0].name.split('.').pop().toLowerCase(),  //file extension from input file
                    isSuccess = fileTypes.indexOf(extension) > -1;
                if (extension != 'jfif') {
                    // if (isSuccess && size <= 1000000) {
                        reader.onload = function (e) {
                            $('.' + className).attr('src', e.target.result);
                        };

                        reader.readAsDataURL(input.files[0]);
                        // $('#image_upload_preview').show();

                    // } else {
                    //     errorMsg('You can only upload png,jpg or jpeg files and size of flag should not greater than 1MB');
                    //     // $("#image").val('');
                    //     $('.' + className).parents('div.form-group').find('input').val('');
                    //     // $('#image_upload_preview').hide();
                    //     $('.' + className).removeAttr('src');
                    //     return false;
                    // }
                } else {
                    errorMsg('You can only upload png,jpg or jpeg files');
                    // $("#image").val('');
                    // $('#image_upload_preview').hide();
                    // $('#image_upload_preview').removeAttr('src');

                    // $("#image").val('');
                    $('.' + className).parents('div.form-group').find('input').val('');
                    // $('#image_upload_preview').hide();
                    $('.' + className).removeAttr('src');
                    return false;
                }
            }
        }

    </script>

@endsection
