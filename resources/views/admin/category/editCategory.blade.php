{{--


@extends('layouts.app')
<style>
    textarea{
        resize: none;
    }
</style>

@section('content')
    <br><br>
    <div class="row">

        <div class="register-box" style="margin-top: 10px;">

            <div class="register-box-body">

                @include('flash::message')
                <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}



                    <input  type="file" class="form-control" id="file" name="image" accept="image/*" onchange="readURL(this);" required>
                    <div class="lib_image_holder" style="float: right">
                        <div id="pic" class="form-group">
                            <img id="blah" src="" alt=" no image choosen" />
                        </div>
                    </div>


                    <div class="form-group has-feedback">

                        <select class="form-control" name="category_id" id="category_id"  >

                            <option value=""> -- Choose Category -- </option>

                            @foreach($category as $category_name)
                                <option value="{{$category_name->id}}">{{$category_name->category_name}}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="form-group has-feedback">

                        <select class="form-control" name="country_name" id="country_id"required >

                            <option value=""> -- Choose Countrry -- </option>

                            @foreach($country as $countries)
                                <option value="{{$countries->country_name}}">{{$countries->country_name}}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="panel-heading">
                        <h3>SEO SECTION</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group has-feedback" >
                            <input id="title"  type="text" name="title" class="form-control"   placeholder="Enter title">
                            @if ($errors->has('title'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                            @endif

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group has-feedback">
                            <textarea id="description" type="text" name="description" rows="8" class="form-control"   placeholder="Enter Meta Tags"></textarea>
                            @if ($errors->has('description'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                            @endif

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4">Meta Tag Format :

                        </div>
                        <div class="col-md-8">
                            <input id="format" type="text" class="form-control"  placeholder='<meta name="description" content="Citytours."> ' readonly>

                        </div>



                    </div>
                    <br>







                    <!-- /.col -->

                    <button type="submit" class="btn btn-primary btn-block btn-flat">Save</button>

                    <!-- /.col -->

                </form>



            </div>
            <!-- /.form-box -->
        </div>
    </div>

        <br>
        @endsection--}}

<!-------------------------------------------------------------------------------------------------------------------------->

@extends('layouts.app')
@section('content')
    <br><br>
    <div class="row">

        <div class="register-box" style="margin-top: -10px;">
            <form action="{{route('category.update')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field()}}

                @include('flash::message')

                <div class="container" >
                    <div class="row">
                        <div class="col-md-10" style="margin-left:-280px;">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3>EDIT CATEGORY DETAILS</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-6">Enter Package Type :
                                                <input type="hidden"  name="id"  value="{{ $editcategory->id }}">
                                                <input id="name" type="text" name="category_name" class="form-control" placeholder="Enter Category name" value="{{ $editcategory->category_name }}">
                                                @if ($errors->has('name'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                     </span>
                                                @endif

                                            </div>

                                            <div class="col-md-6">
                                                Images :
                                                <div class="form-group has-feedback">
                                                    <input type="file" class="form-control" name="image" id="file" onchange="readURL(this);" multiple >
                                                </div>
                                                <span style="color: red">[ Image Dimension should be 570x321 ]</span>
                                                <br><br>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4"></div>
                                                <div class="col-md-6">
                                                    <div class="lib_image_holder" style="float: right">
                                                        <div id="pic" class="form-group">
                                                            <img id="blah" style="width: 200px" src="{{ asset('storage/'.$editcategory->image) }}" alt=" no image choosen" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <br><br>


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
@stop
@section('javascript')
    <link rel="stylesheet" href="{{ asset('dashboard/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">

    <script src="{{ asset('dashboard/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dashboard/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}} "></script>
    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}
            x[myIndex-1].style.display = "block";
            setTimeout(carousel, 2000); // Change image every 2 seconds
        }
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

                    if ((this.width != 570) && (this.height != 321) ) {
                        alert("Image Dimension should be 570x321");
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

