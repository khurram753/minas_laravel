@extends('layout.dashboard-layout.app')

@section('title')
    Edit Store
@endsection


@section('body')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 bh-mb">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Edit Store</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Edit Store</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <form method="post" class="updateEmployee" id="updateEmployee">
                @csrf
                <input type="hidden" name="id" value="{{$data->id}}">
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Store Name</label>
                            <select class="form-control" name="store_id">
                                <option value="" selected disabled>Select</option>
                                @foreach($contactUsListing as $contactUs)
                                    <option value="{{$contactUs->id}}" {{$data->store_id == $contactUs->id ? 'selected':''}}>{{$contactUs->title}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea name="description" class="form-control editor">{{$data->description}}</textarea>

                        </div>

                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                        <div class="custom-dbhome">
                            <div class="form-group ">
                                <div class="db-bannerIMG">
                                    @if($data->rotate_image)
                                        <img class="image_1" src="{{asset($data->rotate_image)}}">
                                    @else
                                        <img class="image_1" src="{{asset('admin/images/no_image.jpg')}}">
                                    @endif
                                </div>
                                <label for="exampleInputEmail1">Image </label>
                                <input type="file" class="images_select" name="rotate_image"
                                       onchange="readURL(this,'image_1');">
                            </div>
                        </div>

                    </div>


                </div>

                <h2>Store Image</h2>

                <div class="row add_more_button_row">

                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                        <button type="button" class="add_more_process">Add More</button>
                    </div>

                </div>


                @foreach($data->storeImage as $key => $image)
                    <input type="hidden" name="process[{{$key}}][id]" value="{{$image->id}}">
                    <div class="row delete_row">


                        <div class="col-xs-12 col-sm-12 col-md-12 custom_for_edit">
                            <div class="custom-dbhome">
                                <div class="form-group" style="width: 100%!important">
                                    <div class="db-bannerIMG">
                                        @if($image->image)
                                            <img class="images_{{$key}}" src="{{asset($image->image)}}">
                                        @else
                                            <img class="images_{{$key}}" src="{{asset('admin/images/no_image.jpg')}}">
                                        @endif
                                    </div>
                                    <label for="exampleInputEmail1"> Image </label>
                                    <input type="file" class="images_select"
                                           name="process[{{$key}}][image]"
                                           value="{{$image->image}}"
                                           onchange="readURL(this,'images_{{$key}}');">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" name="process[{{$key}}][title]"
                                       placeholder="Enter Page Name" required
                                       maxlength="50" value="{{$image->title}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea class="form-control" name="process[{{$key}}][description]">{{$image->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Year</label>
                                <input type="text" class="form-control" name="process[{{$key}}][date]"
                                       placeholder="Enter Year" required
                                       value="{{$image->date}}">
                            </div>
                        </div>




                            <button type="button" data-id="{{$image->id}}" class="delete_process delete_process_custm">Delete Row</button>


                    </div>
                @endforeach

<div class="butn_flex">
                <button class="btn btn-primary" type="button" id="createBtn">Update</button>


                <a href="{{route('storeListing')}}">
                    <button class="btn btn-primary" type="button">Cancel</button>
                </a>
                </div>
            </form>
        </div>

    </div>

@endsection


@section('script')


    <script>

        $(document).ready(function () {

            var number = {{count($data->storeImage)}};


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
                    url: '{{route("storeUpdate")}}',
                    data: data,
                    cache: false,
                    contentType: false,
                    processData: false,

                    success: function (response, status) {

                        if (response.result == 'success') {
                            $.unblockUI();
                            successMsg(response.message);

                            setTimeout(function(){
                                    window.location.href='{{route('storeListing')}}'}
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

            $('.add_more_process').click(function () {


                var html = "<div class='row delete_row'>";





                html += '<div class="col-xs-12 col-sm-12 col-md-12 custom_for_edit">';
                html += '<div class="custom-dbhome">';
                html += '<div class="form-group" style="width: 100%!important">';
                html += '<div class="db-bannerIMG">';
                html += '<img class="images_'+number+'" src="{{asset('admin/images/no_image.jpg')}}">';
                html += '</div>';
                html += '<label for="exampleInputEmail1">Background Image </label>';
                html += '<input type="file" class="images_select" name="process['+number+'][image]" onchange="readURL(this,`images_'+number+'`);">';
                html += '</div>';
                html += '</div>';
                html += '<div class="form-group">';
                html += '<label for="exampleInputEmail1">Title</label>';
                html += '<input type="text" class="form-control" name="process['+number+'][title]" placeholder="Enter Page Name" required="" maxlength="50">';
                html += '</div>';
                html += '<div class="form-group">';
                html += '<label for="exampleInputEmail1">Description</label>';
                html += '<textarea class="form-control" name="process['+number+'][description]"></textarea>';
                html += '</div>';
                html += '<div class="form-group">';
                html += '<label for="exampleInputEmail1">Year</label>';
                html += '<input type="text" class="form-control" name="process['+number+'][date]" placeholder="Enter Year" maxlength="50">';
                html += '</div>';


                html += '</div>';


                html += '<button type="button"  class="delete_process delete_process_custm">Delete Row</button>';

                html += '</div>';

                $('.add_more_button_row').after(html);

                number ++;
            });

            $(document).on('click','.delete_process',function (){

                var data = $(this).data('id');
                var this_data = $(this);

                if (data !== undefined)
                {
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
                        url: '{{route("deleteStoreImage")}}',
                        data: {id:data},

                        success: function (response, status) {

                            if (response.result == 'success') {
                                $.unblockUI();
                                this_data.parents('div.delete_row').remove();
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
                }
                else{
                    this_data.parents('div.delete_row').remove();
                }



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
