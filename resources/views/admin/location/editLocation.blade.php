


@extends('layouts.app')
<style>
    textarea {
        resize: none;
    }
</style>
@section('content')

    <style>
        textarea {
            resize: none;
        }
        tr.spaceUnder>td {
            padding-bottom: 1em;
        }

    </style>
    <div class="row">

        <div class="register-box">
            <form action="{{route('location.update')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field()}}

                @include('flash::message')

                <div class="container" >

                    <div class="row" style="margin-left:-310px;">

                        <div class="col-md-8 ">

                            <div class="panel panel-default">

                                <div class="panel-heading">
                                    <h3>EDIT LOCATION DETAILS</h3>
                                </div>
                                <div class="panel-body">

                                    <table>
                                        <tr class="spaceUnder"><td>Country:</td>
                                            <td> <div class="form-group has-feedback"><select name="country"  class="form-control">
                                                        <option value="">-- Choose Country --</option>
                                                        @foreach($country as $countries)
                                                            @if($location->country==$countries->country_name)
                                                                <option value="{{ $countries->country_name }}" selected>{{ $countries->country_name }}</option>
                                                            @else
                                                                <option value="{{ $countries->country_name }}">{{ $countries->country_name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('country'))
                                                        <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                                    @endif
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>

                                            <td>Image :</td>
                                            <td><div class="form-group has-feedback">
                                                    <input  type="file" class="form-control" id="file" name="image" accept="image/*" onchange="readURL(this);" >

                                                </div>
                                            </td>
                                        </tr><br>

                                        <tr class="spaceUnder"><td>Location :</td>
                                            <td><div class="form-group has-feedback">
                                                    <input id="id" type="text" name="id" class="form-control" value="{{ $location->id }}" style="display: none">
                                                    <input id="location" type="text" name="location" class="form-control" value="{{ $location->location }}" required>

                                                </div>
                                                <span style="color: red"> [ Image Dimension should be 360x182 ]</span>
                                            </td>
                                            <td></td>

                                        </tr>
                                        <tr class="spaceUnder">
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                            <td></td>
                                            <td><div class="form-group has-feedback"> <div class="lib_image_holder" style="float: right">
                                                        <div id="pic" class="form-group">
                                                            <img  id="blah" width ="200px" src="{{ asset ('storage/'.$location->image) }}" alt="no image" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spaceUnder">
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><div class="form-group has-feedback">
                                                        <button type="submit" class="btn btn-primary btn-block btn-flat">Update</button>
                                                </div>
                                            </td>
                                        </tr>

                                    </table>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    {{--  <script>
          $(function() {

              $('#name').keydown(function (e) {

                  if ( e.ctrlKey) {



                  } else {

                      var key = e.keyCode;

                      if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                          alert("Text only allowed.........!!!!!");
                          e.preventDefault();

                      }

                  }

              });

          });

      </script>--}}
    <script>
        $( document ).ready(function() {
            $( "#location" ).keypress(function(e) {
                var key = e.keyCode;
                if (key >= 48 && key <= 57) {
                    e.preventDefault();
                }
            });
        });
    </script>


@endsection
<!-- ./wrapper -->

<!-- jQuery 3 -->

