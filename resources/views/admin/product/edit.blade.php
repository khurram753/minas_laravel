@extends('layout.dashboard-layout.app')

@section('title')
    Edit Product
@endsection


@section('body')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 bh-mb">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Edit Product</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Edit Product</li>
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
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" name="name"
                                   placeholder="Enter Name" required value="{{$data->name}}"
                                   maxlength="50">
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Price</label>
                            <input type="text" class="form-control" name="price"
                                   placeholder="Enter Price" required value="{{$data->price}}"
                                   maxlength="5">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea type="text" class="form-control editor" name="description"
                                      placeholder="Enter Description">{{$data->description}}</textarea>
                        </div>

                    </div>


                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category</label>
                            <select name="category_id" class="form-control">
                                <option value="" selected disabled>Please Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{$data->category_id == $category->id ? 'selected':''}}>{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Cords</label>
                            <select name="cord_id[]" multiple class="form-control multi">
                                @foreach($cords as $cord)
                                    @if(in_array($cord->id,$selectedCord))
                                        <option value="{{$cord->id}}" selected>{{$cord->name}}</option>
                                    @else
                                        <option value="{{$cord->id}}">{{$cord->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Materials</label>
                            <select name="material_id[]" multiple class="form-control multi">
                                @foreach($materials as $material)
                                    @if(in_array($material->id,$selectedMaterial))
                                        <option value="{{$material->id}}" selected>{{$material->name}}</option>
                                    @else
                                        <option value="{{$material->id}}">{{$material->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                    </div>


                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Size</label>
                            <input type="text" class="form-control" name="size" value="{{$data->size}}"
                                   placeholder="Enter Size" required>
                        </div>

                    </div>


                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Dimension</label>
                            <input type="text" class="form-control" name="dimension" value="{{$data->dimension}}"
                                   placeholder="Enter Dimension" required>
                        </div>

                    </div>



                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="custom-dbhome">
                            <div class="form-group ">
                                <div class="db-bannerIMG">
                                    @if($data->image)
                                        <img class="image_1" src="{{asset($data->image)}}">
                                    @else
                                        <img class="image_1" src="{{asset('admin/images/no_image.jpg')}}">
                                    @endif
                                </div>
                                <label for="exampleInputEmail1">Image </label>
                                <input type="file" class="images_select" name="image"
                                       onchange="readURL(this,'image_1');">
                            </div>
                        </div>
                    </div>


                </div>




                <button class="btn btn-primary" type="button" id="createBtn">Update</button>


                <a href="{{route('productListing')}}">
                    <button class="btn btn-primary" type="button">Cancel</button>
                </a>

            </form>
        </div>

    </div>

@endsection


@section('script')

    <script>

        $(document).ready(function () {

            $('.multi').select2();

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
                    url: '{{route("productUpdate")}}',
                    data: data,
                    cache: false,
                    contentType: false,
                    processData: false,

                    success: function (response, status) {

                        if (response.result == 'success') {
                            $.unblockUI();
                            successMsg(response.message);

                            setTimeout(function(){
                                    window.location.href='{{route('productListing')}}'}
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
