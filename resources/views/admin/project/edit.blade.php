@extends('layout.dashboard-layout.app')

@section('title')
    Edit Project
@endsection


@section('body')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 bh-mb">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Edit Project</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Edit Project</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <form method="post" id="updateEmployee">
                @csrf
                <input type="hidden" name="id" value="{{$data->id}}">
                <div class="row">

                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" name="name"
                                   placeholder="Enter Name" required value="{{$data->name}}"
                                   maxlength="50">
                        </div>

                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Category</label>
                            <select class="form-control" name="category_id">
                                <option value="" selected disabled>Select</option>
                                @foreach($categories as $category)
                                    <option
                                        value="{{$category->id}}" {{$data->category_id == $category->id ? 'selected':''}}>{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Video</label>
                            <input type="text" class="form-control" name="video" value="{{$data->video}}"
                                   placeholder="Enter Embeded Video Link" required>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea name="description" placeholder="Enter Your Description"
                                      class="form-control editor">{{  $data->description }}</textarea>
                        </div>


                        <div class="custom-dbhome">
                            <div class="form-group ">
                                <div class="db-bannerIMG">
                                    @if($data->featured_image)
                                        <img class="image_1" src="{{asset($data->featured_image)}}">
                                    @else
                                        <img class="image_1" src="{{asset('admin/images/no_image.jpg')}}">
                                    @endif
                                </div>
                                <label for="exampleInputEmail1">Image </label>
                                <input type="file" class="images_select" name="featured_image"
                                       onchange="readURL(this,'image_1');">
                            </div>
                        </div>


                    </div>


                </div>

                <h3>Project Gallery</h3>

                <div class="row">
                    <div class="col-2">
                        <div class="form-group">

                            <label for="gallery-upload" class="gallery-uploadd">

                                <img src="{{asset('admin/images/no_image.jpg')}}"
                                     class="img-fluid no-image" alt="">
                            </label>
                            <input style="display:none;" type="file" class="form-control"
                                   id="gallery-upload"
                                   accept="image/png,image/jpeg,image/jpg">
                        </div>
                    </div>

                    <div class="col-10 product-image-preview">
                        <img class="image_upload_preview d-block">
                        @foreach($data->projectGallery as $projectGallery)
                            <span class="pip">
                                <img src="{{asset($projectGallery->images)}}" data-id="{{$projectGallery->id}}"
                                     class="imageThumb" width="100%">
                            </span>
                        @endforeach
                    </div>

                </div>


                <button class="btn btn-primary" type="button" id="createBtn">Update</button>


                <a href="{{route('heritageListing')}}">
                    <button class="btn btn-primary" type="button">Cancel</button>
                </a>

            </form>
        </div>

    </div>

@endsection


@section('script')

    <script>

        $(document).ready(function () {

            $(document).on("click", ".pip", function () {
                // var image_length = $('.pip').length + 1;
                var data = $(this).children('img').data('id');
                var this_data = $(this);

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
                    url: '{{url('delete-project-gallery?id=')}}' + data,
                    data: data,
                    type: 'GET',

                    success: function (response, status) {

                        if (response.result == 'success') {
                            $.unblockUI();
                            this_data.remove();
                            // image_length = image_length - 1;
                            // if (image_length < 6) {
                            //     $('#gallery-upload').prop('disabled', false);
                            // }
                            successMsg(response.message);
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

            $('#gallery-upload').change(function (event) {
                imgToData(this);
            });


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
                    url: '{{route("projectUpdate")}}',
                    data: data,
                    cache: false,
                    contentType: false,
                    processData: false,

                    success: function (response, status) {

                        if (response.result == 'success') {
                            $.unblockUI();
                            successMsg(response.message);

                            setTimeout(function () {
                                    window.location.href = '{{route('projectListing')}}'
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

        function uploadImage(image, showImage) {
            var formData = new FormData();

            var data = image;
            var project_id = {{$data->id}};
            formData.append('_token', '{{ csrf_token() }}');
            formData.append('project_id', project_id);
            formData.append('image', data);


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
                url: '{{route("update-project-gallery")}}',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,


                success: function (response, status) {

                    if (response.result == 'success') {
                        $.unblockUI();

                        var html = '<span class="pip">';
                        html += '<img class="imageThumb" data-id="' + response.data.id + '" src=' + showImage + ' id="' + response.data.id + '"  style="width: 100%" />';
                        html += '</span>';
                        // globalFormData.append('new_gallery[]', input.files[i]);
                        $(html).appendTo('.product-image-preview');

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
        }

        function imgToData(input) {

            if (input.files) {

                $.each(input.files, function (i, v) {


                    var n = i + 1;
                    var File = new FileReader();
                    var size = input.files[0].size;


                        File.onload = function (event) {

                            // var html = '<span class="pip">';
                            // html += '<img class="imageThumb" src=' + event.target.result + '  id=' + image_length + '  style="width: 100%" />';
                            // html += '</span>';
                            // globalFormData.append('new_gallery[]', input.files[i]);
                            // $(html).appendTo('.product-image-preview');

                            uploadImage(input.files[i], event.target.result);


                        };


                        File.readAsDataURL(input.files[i]);


                });

            }
        }


    </script>

@endsection
