@extends('layout.dashboard-layout.app')

@section('title')
    Edit Footer
@endsection


@section('body')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 bh-mb">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left"> Edit Footer</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active"> Edit Footer</li>
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
                            <label for="exampleInputEmail1">Facebook</label>
                            <input type="text" class="form-control" name="facebook_link"
                                   placeholder="Enter Facebook Link" required
                                   maxlength="120" value="{{$data->facebook_link}}">
                        </div>

                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Instagram</label>
                            <input type="text" class="form-control" name="instagram_link"
                                   placeholder="Enter Instagram Link" required
                                   maxlength="120" value="{{$data->instagram_link}}">
                        </div>

                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Vimeo</label>
                            <input type="text" class="form-control" name="vimeo_link"
                                   placeholder="Enter Vimeo Link" required
                                   maxlength="120" value="{{$data->vimeo_link}}">
                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Tag Line</label>
                            <input type="text" class="form-control" name="tag_line"
                                   placeholder="Enter Tag Line" required
                                   maxlength="120" value="{{$data->tag_line}}">
                        </div>


                        <div class="custom-dbhome">
                            <div class="form-group ">
                                <div class="db-bannerIMG">
                                    @if($data->image_1)
                                        <img class="image_1" src="{{asset($data->image_1)}}">
                                    @else
                                        <img class="image_1" src="{{asset('admin/images/no_image.jpg')}}">
                                    @endif

                                </div>
                                <label for="exampleInputEmail1"> Image 1 </label>
                                <input type="file" class="images_select" name="image_1"
                                       onchange="readURL(this,'image_1');">

                            </div>
                        </div>


                        <div class="custom-dbhome">
                            <div class="form-group ">
                                <div class="db-bannerIMG">
                                    @if($data->image_2)
                                        <img class="image_2" src="{{asset($data->image_2)}}">
                                    @else
                                        <img class="image_2" src="{{asset('admin/images/no_image.jpg')}}">
                                    @endif

                                </div>
                                <label for="exampleInputEmail1"> Image 2 </label>
                                <input type="file" class="images_select" name="image_2"
                                       onchange="readURL(this,'image_2');">

                            </div>
                        </div>


                        <div class="custom-dbhome">
                            <div class="form-group ">
                                <div class="db-bannerIMG">
                                    @if($data->image_3)
                                        <img class="image_3" src="{{asset($data->image_3)}}">
                                    @else
                                        <img class="image_3" src="{{asset('admin/images/no_image.jpg')}}">
                                    @endif

                                </div>
                                <label for="exampleInputEmail1"> Image 3</label>
                                <input type="file" class="images_select" name="image_3"
                                       onchange="readURL(this,'image_3');">

                            </div>
                        </div>


                        <div class="custom-dbhome">
                            <div class="form-group ">
                                <div class="db-bannerIMG">
                                    @if($data->image_4)
                                        <img class="image_4" src="{{asset($data->image_4)}}">
                                    @else
                                        <img class="image_4" src="{{asset('admin/images/no_image.jpg')}}">
                                    @endif

                                </div>
                                <label for="exampleInputEmail1"> Image 4 </label>
                                <input type="file" class="images_select" name="image_4"
                                       onchange="readURL(this,'image_4');">

                            </div>
                        </div>

                        <div class="custom-dbhome">
                            <div class="form-group ">
                                <div class="db-bannerIMG">
                                    @if($data->image_5)
                                        <img class="image_5" src="{{asset($data->image_5)}}">
                                    @else
                                        <img class="image_5" src="{{asset('admin/images/no_image.jpg')}}">
                                    @endif

                                </div>
                                <label for="exampleInputEmail1"> Image 5 </label>
                                <input type="file" class="images_select" name="image_5"
                                       onchange="readURL(this,'image_5');">

                            </div>
                        </div>



                    </div>


                    <button class="btn btn-primary" type="button" id="createBtn">Update</button>


                </div>

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
                    url: '{{route("footerUpdate")}}',
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
