@extends('layout.dashboard-layout.app')

@section('title')
    Edit Media Kit Records
@endsection


@section('body')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 bh-mb">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Edit Media Kit Records</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Edit Media Kit Records</li>
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
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" name="name"
                                   placeholder="Enter Name" required value="{{$data->name}}"
                                   maxlength="50">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Collection</label>
                            <select  class="form-control collection_id" name="collection_id">
                                <option value="" selected disabled>Select</option>
                                @foreach($collections as $collection)
                                    <option value="{{$collection->id}}" {{$data->collection_id == $collection->id ? 'selected':''}}>{{$collection->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Date</label>
                            <input type="text" class="form-control" name="date"
                                   placeholder="Enter Date" required id="datepicker" value="{{\Carbon\Carbon::parse($data->date)->format('m/d/Y')}}"
                                   maxlength="50">
                        </div>

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


                        <div class="custom-dbhome">
                            <div class="form-group ">
                                <label for="exampleInputEmail1">File to Download </label>
                                <input type="file" name="file">
                            </div>
                        </div>

                        <div class="video_hide" style="display: {{$data->video ? 'block':'none'}}" >
                            <div class="form-group">
                                <label for="exampleInputEmail1">Video</label>
                                <input type="text" class="form-control" name="video"
                                       placeholder="Enter Iframe Link" required>
                            </div>
                        </div>



                    </div>


                </div>


                <button class="btn btn-primary" type="button" id="createBtn">Update</button>


                <a href="{{route('pressRecordListing')}}">
                    <button class="btn btn-primary" type="button">Cancel</button>
                </a>

            </form>
        </div>

    </div>

@endsection


@section('script')



    <script>

        $(document).ready(function () {

            $( "#datepicker" ).datepicker();

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
                    url: '{{route("pressRecordUpdate")}}',
                    data: data,
                    cache: false,
                    contentType: false,
                    processData: false,

                    success: function (response, status) {

                        if (response.result == 'success') {
                            $.unblockUI();
                            successMsg(response.message);

                            setTimeout(function(){
                                    window.location.href='{{route('pressRecordListing')}}'}
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

                $('.collection_id').change(function(){
                    var selectedOption = $('.collection_id option:selected').text();

                    if(selectedOption == 'Videos' || selectedOption == 'videos')
                    {
                        $('.video_hide').css('display','block');
                    }
                    else{
                        $('.video_hide').css('display','none');
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

        });
    </script>

@endsection
