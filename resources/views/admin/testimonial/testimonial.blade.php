

@extends('layouts.app')
@section('content')
    <div class="row">

    <div class="register-box" style="margin-top: 33px;">
        <form action="{{route('testimonial.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field()}}

            @include('flash::message')

            <div class="container" >
                <div class="row">
                    <div class="col-md-10" style="margin-left:-280px;">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3>ENTER TESTIMONIAL DETAILS</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6">Enter Username :
                                            <input id="name" type="text" name="user_name" class="form-control" placeholder="Enter Username" required>
                                            @if ($errors->has('user_name'))
                                                <span class="help-block">
                                                 <strong>{{ $errors->first('user_name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            Images :
                                            <div class="form-group has-feedback">
                                                <input  type="file" class="form-control" id="file" name="image" accept="image/*" onchange="readURL(this);" required>
                                            </div>
                                            <span style="color: red">[ Image Dimension should be 70x70 ]</span>
                                            <br><br>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">Enter Testimonial Body :
                                                <textarea type="text" rows="7" name="body" placeholder="Enter Testimonial Body" class="form-control" cols="45" required></textarea>
                                                @if ($errors->has('body'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                                @endif

                                            </div>
                                            <div class="col-md-6">
                                                <div class="lib_image_holder" style="float: right">
                                                    <div id="pic" class="form-group">
                                                        <img id="blah" src="" alt=" no image choosen" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div><br><br>


                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-2"></div>
                                            <div class="col-md-3"><button type="submit" class="btn btn-block btn-primary" style="width:150px;">Save</button><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </form>
    </div>

    </div>


@endsection
@section('javascript')
    <script type="text/javascript">
        Dropzone.options.imageUpload = {
            maxFilesize  : 1,
            acceptedFiles: ".jpeg,.jpg,.png,.gif"
        };
    </script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        $( document ).ready(function() {
            $( "#user_name" ).keypress(function(e) {
                var key = e.keyCode;
                if (key >= 48 && key <= 57) {
                    e.preventDefault();
                }
            });
        });
    </script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(100);
                };
                $('#pic').show();
                reader.readAsDataURL(input.files[0]);
            }
        }


        var _URL = window.URL || window.webkitURL;

        $("#file").change(function(e) {

            var image, file;

            if ((file = this.files[0])) {

                image = new Image();

                image.onload = function() {

                    if ((this.width != 70) && (this.height != 70) ) {
                        alert("Image Dimension should be 70x70");
                        $("#file").val('');
                        $('#pic').hide();
                        $('#img_err').show();
                    }


                };

                image.src = _URL.createObjectURL(file);

            }

        });
    </script>

@endsection










