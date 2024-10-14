@extends('layouts.app')
@section('content')
    <style>

        tr.spaceUnder>td {
            padding-bottom: 0em;
        }

    </style>
    <style>
        .thumb {
            width:100px;
            height: 100px;
            margin: 0.2em -0.7em 0 0;
        }
        .remove_img_preview {
            position:relative;
            top:-25px;
            right:5px;
            background:black;
            color:white;
            border-radius:50px;
            font-size:0.9em;
            padding: 0 0.3em 0;
            text-align:center;
            cursor:pointer;
        }
        .remove_img_preview:before {
            content: "×";
        }
        .btn-default{
            display: none;
        }
    </style>
    <div class="row">

    <div class="register-box">
        <form action="{{route('hotel.update')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field()}}

            @include('flash::message')

            <div class="container" >

                <div class="row" style="margin-left:-300px;">

                    <div class="col-md-8">

                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <h3>EDIT HOTEL DETAILS</h3>
                            </div>
                            <div class="panel-body">

                                <table id="mytable">
                                    <input type="text" class="form-control" name="id" style="display: none" value="{{ $hotel->id }}">

                                    <tr class="spaceUnder"><td>Destination :</td>
                                        <td><select class="form-control" name="destination" id="destination" >
                                                <option value=""> -- Choose Destination -- </option>
                                                @foreach($destinations as $destination)
                                                    @if($hotel->destination==$destination->destination)
                                                    <option value="{{ $destination->destination }}" selected>{{ $destination->destination }}</option>
                                                    @else
                                                    <option value="{{ $destination->destination }}">{{ $destination->destination }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </td>

                                        <td>Image :</td>
                                        <td><div class="form-group has-feedback">
                                                <input type="file" class="form-control" id="file" name="image" accept="image/*" onchange="readURL(this);">
                                            </div>

                                        </td>
                                    </tr>
                                    <tr><td></td><td></td><td></td><td><span style="color: red">[ Image Dimension should be 360x182 ]</span></td></tr>


                                    <tr class="spaceUnder"><td>Hotel Name:</td>
                                        <td><div class="form-group has-feedback">
                                                <input id="hotel_name" type="text" name="hotel_name" class="form-control" value="{{ $hotel->hotel_name }}">
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
                                                    <img id="blah" src="{{ asset('storage/'.$hotel->image)  }}" alt=" no image choosen" />
                                                </div>
                                            </div>


                                        </td>
                                    </tr><br>
                                    <tr class="spaceUnder"><td>Type:</td>
                                        <td><select class="form-control" name="type" id="type" ><option value=""> -- Choose Hotel Type -- </option>
                                                <option @if($hotel->type=='standard') selected @endif value="standard">Standard</option>
                                                <option @if($hotel->type=='deluxe') selected @endif  value="deluxe">Deluxe</option>
                                                <option @if($hotel->type=='luxury') selected @endif value="luxury">Luxury</option>
                                                <option @if($hotel->type=='economy') selected @endif value="economy">Economy</option>
                                                <option @if($hotel->type=='premium') selected @endif value="premium">Premium</option>
                                                <option @if($hotel->type=='premium_luxury') selected @endif value="luxury">Premium Luxury</option>
                                            </select>
                                        </td>
                                       {{-- <td>Price:</td>
                                        <td>
                                            <div class="form-group has-feedback">
                                                <input id="price" type="text" name="price" class="form-control" value="{{ $hotel->price }}">
                                                @if ($errors->has('price'))
                                                    <span class="help-block">
                                                 <strong>{{ $errors->first('price') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                        </td>--}}
                                    </tr>
<br>
                                    <tr class="spaceUnder"><td>Description:</td>
                                        <td><textarea type="text" rows="5" name="description" class="form-control" cols="500">{{ $hotel->description }}</textarea>
                                            @if ($errors->has('description'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('description') }}</strong>
                                               </span>
                                            @endif
                                        </td>

                                    </tr><br><br>
                                    <tr class="spaceUnder"></tr>
                                    <tr class="spaceUnder"></tr>
                                    <tr class="spaceUnder"></tr>
                                    <tr class="spaceUnder"><td>Ameties:</td>
                                        <td><textarea type="text" rows="5" name="ameties" placeholder="Separate each ameties by comma " class="form-control" cols="40">{{ $hotel->ameties }}</textarea>
                                        </td>
                                    </tr>
                                    <tr class="spaceUnder"><td>Hotel Rooms:</td>
                                        <td><input type="file" id="hotel_rooms" name="hotel_rooms[]" class="form-control" accept="image/*" multiple /></td>
                                        @if($errors->first('hotel_rooms'))
                                            <br><b style="color: red;">{{$errors->first('hotel_rooms')}}</b>
                                        @endif
                                        <span id="image_error" style="display: none;"><br>
                                            <b style="color: red;">Image is required with dimension 850 x 995..!!!</b>
                                        </span>
                                    </tr>


                                </table><br><br>
                                <div class="row">
                                    <div class="col-md-12" id="preview_div"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12" id="dvPreview">
                                        @foreach($hotel_rooms as $hotel_room)
                                            <div class="col-md-3">
                                                <img src="{{ asset('storage/'.$hotel_room->image) }}" style="width:80px;height:80px">
                                                <span class="remove_img remove_img_preview"  data-id="{{$hotel_room->id}}"></span>
                                            </div>
                                        @endforeach
                                    </div>
                                </div><br>
                                
                            </div>



                        </div>

                    </div>
                </div>
            </div>


  {{-------------------------------------------------------------------------------------------------------------------}}
            <div class="container" >

                <div class="row" style="margin-left:-310px;">

                    <div class="col-md-8 ">

                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <h3>EDIT HOTEL RATE DETAILS</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">Economy Amount:
                                        <input id="standard" type="text" name="economy" value="{{ $hotel->economy }}" class="form-control numeric"  placeholder="Amount of Economy Type">
                                    </div>
                                    <div class="col-md-6">Deluxe Amount:
                                        <input id="deluxe" type="text" name="deluxe" value="{{ $hotel->deluxe }}" class="form-control numeric"  placeholder="Amount of Deluxe Type">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">Premium Amount:
                                        <input id="premium" type="text" name="premium" value="{{ $hotel->premium }}" class="form-control numeric"  placeholder="Amount of Premium Type">
                                    </div>
                                    <div class="col-md-6">Luxury Amount:
                                        <input id="luxury" type="text" name="luxury" value="{{ $hotel->luxury }}" class="form-control numeric"  placeholder="Amount of Luxury Type">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">Premium Luxury Amount:
                                        <input id="premium_luxury" type="text" value="{{ $hotel->premium_luxury }}" name="premium_luxury" class="form-control numeric"  placeholder="Amount of Premium Luxury Type">
                                    </div>
                                    <div class="col-md-6">Budget:
                                        <input id="budget" type="text" name="budget" value="{{ $hotel->budget }}"  class="form-control numeric"  placeholder="Amount of Budget Type">
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
  {{-------------------------------------------------------------------------------------------------------------------}}





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
        $(function () {
            $('.remove_img').on('click', function () {
                var id = $(this).data('id');
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType: 'text',
                    type: 'post',
                    data:{id:id},
                    url: '{{ route('admin.delete.hotel_room') }}',
                    success: function (res) {
                        //alert(res);
                        //$("#mytable").reload();
                        $( "#dvPreview" ).load(window.location.href + " #dvPreview" );
                        location.reload();
                    }
                });
            });
        });

        $(function () {
            $("#hotel_rooms").change(function () {
                if (typeof (FileReader) != "undefined") {
                    var dvPreview = $("#dvPreview");
                    // dvPreview.html("");
                    var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
                    $($(this)[0].files).each(function () {
                        var file = $(this);
                        if (regex.test(file[0].name.toLowerCase())) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                var img = $("<img />");
                                img.attr("style", "height:70px;width: 70px");
                                img.attr("src", e.target.result);
                                dvPreview.append(img);
                            }
                            reader.readAsDataURL(file[0]);
                        } else {
                            alert(file[0].name + " is not a valid image file.");
                            dvPreview.html("");
                            return false;
                        }
                    });
                } else {
                    alert("This browser does not support HTML5 FileReader.");
                }
            });
        });
    </script>
@endsection