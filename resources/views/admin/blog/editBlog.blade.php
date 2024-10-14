

@extends('layouts.app')
@section('content')
<div class="row">
    <div class="register-box" style="margin-top: 33px;">
        <form action="{{route('blog.update')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field()}}

            @include('flash::message')

            <div class="container" >
                <div class="row">
                    <div class="col-md-10" style="margin-left:-280px;">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3>EDIT BLOG DETAILS</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12"> <input id="name" type="text" style="display: none" name="id" class="form-control" value="{{$blog->id}}">

                                        <div class="col-md-6">Enter Blog Title :
                                            <input id="name" type="text" name="title" class="form-control" value="{{$blog->title}}">
                                            @if ($errors->has('title'))
                                                <span class="help-block">
                                                 <strong>{{ $errors->first('title') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            Images :
                                            <div class="form-group has-feedback">
                                                <input  type="file" class="form-control" accept="image/*" name="images[]" placeholder="address" onchange="readURL(this);" multiple>
                                            </div>
                                            <span style="color: red">[ Image Dimension should be 570x321 ]</span>
                                            <br><br>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">Enter Blog Body :
                                                <textarea type="text" name="body" rows="7" cols="38" class="form-control" >{{$blog->body}}</textarea>
                                                @if ($errors->has('body'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                                @endif

                                            </div>
                                            <div class="col-md-6">
                                                <div class="lib_image_holder" style="float: right">
                                                    <div id="pic" class="form-group">
                                                        <?php $images = explode('|',$blog->image);
                                                        for($i=0;  $i< count($images);$i++)
                                                        {

                                                        ?>
                                                        <img  id="blah" width ="200px" src="{{ asset ('storage/'.$images[0]) }}" alt="no image" />
                                                        <?php  }
                                                        ?>
                                                    </div>
                                                </div>

                                            </div>
                                        </div><br><br>

                                        <div class="row">

                                            <div class="col-md-2"></div>
                                            <div class="col-md-3"></div>
                                            <div class="col-md-3">            <button type="submit" class="btn btn-block btn-primary" style="width:150px;">Update</button><br>
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

    <script>
        var _URL = window.URL || window.webkitURL;

        $("#file").change(function(e) {

            var image, file;

            if ((file = this.files[0])) {

                image = new Image();

                image.onload = function() {

                    if ((this.width != 570) && (this.height != 182) ) {
                        alert("Images Dimension should be 360x182");
                        $("#file").val('');
                        $('#pic').hide();
                        //$('#img_err').show();
                    }


                };

                image.src = _URL.createObjectURL(file);

            }

        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        $( document ).ready(function() {
            $( "#name" ).keypress(function(e) {
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

                    if ((this.width != 360) && (this.height != 182) ) {
                        alert("Image Dimension should be 360x182");
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