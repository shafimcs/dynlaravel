@extends('layouts.app')
@section('content')
<style>

    tr.spaceUnder>td {
        padding-bottom: 1em;
    }

</style>
<style>

    input[type="file"] {

        display:block;
    }
    .imageThumb {
        max-height: 75px;
        border: 2px solid;
        margin: 10px 10px 0 0;
        padding: 1px;
    }

</style>
<div class="row">

    <div class="register-box" style="margin-top: 32px;" >
        <form action="{{route('hotel.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field()}}

            @include('flash::message')

            <div class="container" >

                <div class="row" style="margin-left:-310px;">

                    <div class="col-md-8 ">

                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <h3>ENTER HOTEL DETAILS</h3>
                            </div>
                            <div class="panel-body">

                                <table>
                                    <tr class="spaceUnder"><td>Destination :</td>
                                        <td><select class="form-control" name="destination" id="destination" required >
                                                <option value=""> -- Choose Destination -- </option>
                                                @foreach($destinations as $destination)
                                                <option value="{{ $destination->destination }}">{{ $destination->destination }}</option>
                                                @endforeach
                                            </select>
                                        </td>

                                        <td>Image :</td>
                                        <td><div class="form-group has-feedback">
                                                <input type="file" class="form-control" id="file" name="image" accept="image/*" onchange="readURL(this);" required>

                                            </div>

                                        </td>

                                    </tr>

                                    <tr><td></td><td></td><td></td><td><span style="color: red">[ Image Dimension should be 360x182 ]</span></td></tr>
                                    <tr class="spaceUnder"><td>Hotel Name:</td>
                                        <td><div class="form-group has-feedback">
                                                <input id="hotel_name" type="text" name="hotel_name" class="form-control" placeholder="Enter Hotel Name" required>
                                                @if ($errors->has('hotel_name'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('hotel_name') }}</strong>
                                        </span>
                                                @endif
                                            </div>
                                        </td><td></td>

                                        <td>

                                            <div class="lib_image_holder" style="float: right">
                                                <div id="pic" class="form-group">
                                                    <img id="blah" src="" alt=" no image choosen" />
                                                </div>
                                            </div>


                                        </td>
                                    </tr><br>
                                    <tr class="spaceUnder"><td>Type:</td>
                                        <td><select class="form-control" name="type" id="type" required >
                                                <option value=""> -- Choose Hotel Type -- </option>
                                                <option value="standard">Standard</option>
                                                <option value="deluxe">Deluxe</option>
                                                <option value="luxury">Luxury</option>
                                                <option value="economy">Economy</option>
                                                <option value="premium">Premium</option>
                                                <option value="premium_luxury">Premium Luxury</option>
                                            </select>
                                        </td>
                                        {{--<td>Price:</td>
                                        <td>( Per day )
                                            <div class="form-group has-feedback">
                                                <input id="price" type="text" name="price" class="form-control" placeholder="Enter Hotel Price" required>
                                                @if ($errors->has('price'))
                                                    <span class="help-block">
                                                 <strong>{{ $errors->first('price') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                        </td>--}}
                                    </tr>

                                    <tr class="spaceUnder"><td>Description:</td>
                                        <td><textarea type="text" rows="5" name="description" class="form-control" cols="40"></textarea>
                                            @if ($errors->has('description'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('description') }}</strong>
                                               </span>
                                            @endif
                                        </td>
                                      </tr>
                                    <tr class="spaceUnder"><td>Ameties:</td>
                                        <td><textarea type="text" rows="5" name="ameties" placeholder="Separate each ameties by comma " class="form-control" cols="40"></textarea>
                                            @if ($errors->has('ameties'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('ameties') }}</strong>
                                               </span>
                                            @endif
                                        </td>
                                      </tr>


                                    <tr class="spaceUnder"><td>Hotel Rooms:</td>
                                        <td><input type="file" id="hotel_rooms" name="hotel_rooms[]" class="form-control" accept="image/*" required multiple /></td>
                                        @if($errors->first('hotel_rooms'))
                                            <br><b style="color: red;">{{$errors->first('hotel_rooms')}}</b>
                                        @endif
                                        <span id="image_error" style="display: none;"><br>
                                            <b style="color: red;">Image is required with dimension 850 x 995..!!!</b>
                                        </span>
                                    </tr><br><br>
                                </table><br><br>
                                <div class="row">
                                    <div class="col-md-12" id="preview_div"></div>
                                </div><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


{{-------------------------------------------------------------------------------------------------------------------------------}}
            <div class="container" >

                <div class="row" style="margin-left:-310px;">

                    <div class="col-md-8 ">

                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <h3>ENTER HOTEL RATE DETAILS</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">Economy Amount:
                                        <input id="standard" type="text" name="economy" class="form-control numeric"  placeholder="Amount of Economy Type">
                                    </div>
                                    <div class="col-md-6">Deluxe Amount:
                                        <input id="deluxe" type="text" name="deluxe" class="form-control numeric"  placeholder="Amount of Deluxe Type">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">Premium Amount:
                                        <input id="premium" type="text" name="premium" class="form-control numeric"  placeholder="Amount of Premium Type">
                                    </div>
                                    <div class="col-md-6">Luxury Amount:
                                        <input id="luxury" type="text" name="luxury" class="form-control numeric"  placeholder="Amount of Luxury Type">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">Premium Luxury Amount:
                                        <input id="premium_luxury" type="text" name="premium_luxury" class="form-control numeric"  placeholder="Amount of Premium Luxury Type">
                                    </div>
                                    <div class="col-md-6">Budget:
                                        <input id="budget" type="text" name="budget" class="form-control numeric"  placeholder="Amount of Budget Type">
                                    </div>
                                </div><br><br><br>
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4"> <center> <button type="submit" class="btn btn-primary btn-block btn-flat">Save</button>  </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{{-------------------------------------------------------------------------------------------------------------------------------}}





        </form>
    </div>
</div>

@endsection
@section('javascript')
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

    <script>
        $("#hotel_rooms").on("change",function(e) {

            $(".imageThumb").remove();
            files = e.target.files ,
                filesLength = files.length ;
            var count = filesLength;
            invalid = "";
            for(i = 0; i < filesLength ; i++) {
                f = files[i];
                fileReader = new FileReader();
                fileReader.file = f;
                fileReader.invalid = i;
                fileReader.onload = (function(e) {
                    var image = new Image();
                    image.src = e.target.result;
                    image.name = e.target.file.name;
                    //Validate the File Height and Width.
                    image.onload = function (e) {
                        var height = this.height;
                        var width = this.width;
                        if (width != 360 && height != 182) {
                            alert('Image dimension should be  360x182')
                            invalid += " '"+e.target.name+"' ";
                            $(".imageThumb").remove();
                        }else{
                            $("<img></img>",{
                                class : "imageThumb",
                                src : e.target.src,
                                title : e.target.name,
                                width : 150,
                                height : 450
                            }).appendTo("#preview_div");
                        }
                        if(!--count){
                            if(invalid != ""){
                                alert("Invalid images found : " + invalid);
                                $("#hotel_rooms").val("");
                                $(".imageThumb").remove();
                            }
                        }
                    };
                });
                fileReader.readAsDataURL(f);
            }
        });

    </script>

@endsection