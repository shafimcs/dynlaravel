@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('dashboard/bower_components/select2/dist/css/select2.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.0/jquery-ui.css" />

    <style>
    strong {color:red !important}
</style>
    <style>
        textarea {
            resize: none;
        }
        tr.spaceUnder>td {
            padding-bottom: 1em;
        }
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

<div class="register-box" style="margin-top: 33px;">
        <form action="{{route('package.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field()}}

    @include('flash::message')

     <div class="container" >

            <div class="row" style="margin-left:-310px;">

                <div class="col-md-8 ">

                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <h3>ENTER PACKAGE DETAILS</h3>
                        </div>
                        <div class="panel-body">

        <table>
            <tr class="spaceUnder">
                <td><div class="form-group has-feedback">Package ID :</div></td>
                <td><div class="form-group has-feedback">
                        <input type="text" class="form-control" name="gotripz_id" id="gotripz_id" required>
                    </div>
                </td>
            </tr>
                <tr class="spaceUnder"><td>Package Name :</td>
                    <td><div class="form-group has-feedback">
                            <input type="text" class="form-control" name="package_name" id="package_name" required>
                                @if ($errors->has('package_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('package_name') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </td>

                    <td>Image :</td>
                    <td><div class="form-group has-feedback">
                            <input class="form-control" type="file" name="image" accept="image/*" onchange="readURL(this);" id="file" required> </span>
                                    @if ($errors->has('image'))
                                        <span class="help-block">
                                           <strong>{{ $errors->first('image') }}</strong>
                                         </span>
                                    @endif
                        </div>
                       <span style="color: red">[ Image Dimension should be 429x218 ]</span>
                    </td>
                </tr>
<br><br>

                 

                <tr class="spaceUnder"><td>Package Description:</td>
                    <td><textarea type="text" rows="5" name="package_details" class="form-control" cols="40"></textarea>
                        @if ($errors->has('package_details'))
                            <span class="help-block">
                               <strong>{{ $errors->first('package_details') }}</strong>
                            </span>
                        @endif
                     </td>
                    <td></td>
                    <td><div class="lib_image_holder" style="float: right">
                            <div id="pic" class="form-group">
                                <img id="blah" src="" alt=" no image choosen" />
                             </div>
                         </div>
                    </td>
                </tr>

                <tr class="spaceUnder"><td>Country :</td>
                    <td><select class="form-control" name="country_name" id="country_name">
                        <option value=""> -- Choose Country -- </option>
                            @foreach($country as $country_name)
                                <option value="{{$country_name->country_name}}">{{$country_name->country_name}}</option>
                            @endforeach
                         </select>
                             @if ($errors->has('country_name'))
                                 <span class="help-block">
                                   <strong>{{ $errors->first('country_name') }}</strong>
                                 </span>
                             @endif
                    </td>

                </tr>


                <tr class="spaceUnder"><td>Location :</td>
                    <td><select class="form-control" name="location" id="location" >
                            {{--@endforeach--}}
                        </select>
                     </td>
                    <td>Places:</td>
                     <td><input id="places" type="text" name="places" class="form-control" placeholder="Enter Places" required>
                         @if ($errors->has('places'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('places') }}</strong>
                            </span>
                         @endif
                     </td>
                </tr>
            <tr class="spaceUnder">
                <td>Package Type :</td>
                <td><select class="form-control" name="category_id" id="category_id">
                        <option value=""> -- Choose Package Type -- </option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"> {{ $category->category_name }} </option>
                        @endforeach
                    </select>
                    @if ($errors->has('country_name'))
                        <span class="help-block">
                                   <strong>{{ $errors->first('country_name') }}</strong>
                                 </span>
                    @endif
                </td>
                    <td>Destination:</td>
                <td><select class="form-control" name="destination" id="destination" >
                        <option value=""> -- Choose Destination -- </option>
                        @foreach($destinations as $destination)
                            <option value="{{ $destination->id }}"> {{ $destination->destination }} </option>
                        @endforeach

                    </select>
                    @if ($errors->has('country_name'))
                        <span class="help-block">
                                   <strong>{{ $errors->first('country_name') }}</strong>
                                 </span>
                    @endif
                </td>
                </tr>
            <tr class="spaceUnder">
                <td>Package Category :</td>
                <td><select class="form-control" name="package_category" id="package_category">
                        <option value=""> -- Choose Package Category -- </option>
                            <option value="Economy"> Economy </option>
                            <option value="Budget"> Budget </option>
                            <option value="Deluxe"> Deluxe </option>
                            <option value="Premium"> Premium </option>
                            <option value="Luxury"> Luxury </option>
                            <option value="Premium Luxury"> Premium Luxury </option>
                    </select>

                </td>
                </tr>
        </table>
                        </div>

                    </div>

                </div>
            </div>
        </div>


        <div class="container" >

            <div class="row" style="margin-left:-310px;">

                <div class="col-md-8 ">

                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <h3>PACKAGE ITINERARY</h3>
                        </div>
                        <div class="panel-body">

                               <div class="row">
                                   <div class="col-md-4">Total Days :
                                       <input id="number_of_days"  min="0" type="number" name="number_of_days" class="form-control" id="addButton" onchange="myFunction(this.value)" placeholder="Number of Days" required>
                                       @if ($errors->has('number_of_days'))
                                           <span class="help-block">
                                        <strong>{{ $errors->first('number_of_days') }}</strong>
                                    </span>
                                       @endif

                                   </div>
                                   <div class="col-md-4">Total Nights :
                                       <input id="number_of_nights" min="0" type="number" name="number_of_nights" class="form-control"  placeholder="Number of Nights" required>
                                       @if ($errors->has('number_of_nights'))
                                           <span class="help-block">
                                        <strong>{{ $errors->first('number_of_nights') }}</strong>
                                    </span>
                                       @endif
                                   </div>
                                   <div class="col-md-4">Total People :
                                       <input id="number_of_people" min="0" type="number" name="number_of_people" class="form-control"  placeholder="Number of People">
                                       @if ($errors->has('number_of_people'))
                                           <span class="help-block">
                                        <strong>{{ $errors->first('number_of_people') }}</strong>
                                    </span>
                                       @endif
                                   </div>

                               </div>

                        </div>
                        <div id='parent'>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container" >

            <div class="row" style="margin-left:-310px;">

                <div class="col-md-8 ">

                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <h3>PACKAGE TYPE AND DETAILS</h3>
                        </div>
                        <div class="panel-body">

                            <div class="row">
                                <div class="col-md-6">Economy Amount:
                                    <input id="standard" type="text" name="economy" class="form-control numeric"  placeholder="Amount of Economy Type">
                                    @if ($errors->has('economy'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('economy') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-6">Choose Economy Hotel:
                                        <select name="economy_hotel_id"   class="form-control">
                                            <option value=""> -- Choose Economy Hotel --</option>
                                            @foreach($hotels as $hotel)
                                                <option value="{{ $hotel->id }}">{{ $hotel->hotel_name}} ,{{ $hotel->destination }}</option>
                                            @endforeach
                                        </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">Deluxe Amount:
                                    <input id="deluxe" type="text" name="deluxe" class="form-control numeric"  placeholder="Amount of Deluxe Type">
                                    @if ($errors->has('deluxe'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('deluxe') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-6"> Choose Deluxe Hotel:
                                    <select name="deluxe_hotel_id"   class="form-control">
                                        <option value=""> -- Choose Deluxe Hotel --</option>
                                        @foreach($hotels as $hotel)
                                            <option value="{{ $hotel->id }}">{{ $hotel->hotel_name}} ,{{ $hotel->destination }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">Premium Amount:
                                    <input id="premium" type="text" name="premium" class="form-control numeric"  placeholder="Amount of Premium Type">
                                    @if ($errors->has('premium'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('premium') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-6">Choose Premium Hotel:
                                    <select name="premium_hotel_id"   class="form-control">
                                        <option value=""> -- Choose Premium Hotel --</option>
                                        @foreach($hotels as $hotel)
                                            <option value="{{ $hotel->id }}">{{ $hotel->hotel_name}} ,{{ $hotel->destination }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">Luxury Amount:
                                    <input id="luxury" type="text" name="luxury" class="form-control numeric"  placeholder="Amount of Luxury Type">
                                    @if ($errors->has('luxury'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('luxury') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-6">Choose Luxury Hotel:
                                    <select name="luxury_hotel_id"   class="form-control">
                                        <option value=""> -- Choose Luxury Hotel --</option>
                                        @foreach($hotels as $hotel)
                                            <option value="{{ $hotel->id }}">{{ $hotel->hotel_name}} ,{{ $hotel->destination }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">Premium Luxury Amount:
                                    <input id="premium_luxury" type="text" name="premium_luxury" class="form-control numeric"  placeholder="Amount of Premium Luxury Type">
                                    @if ($errors->has('premium_luxury'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('premium_luxury') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-6">Choose Premium Luxury Hotel:
                                    <select name="premium_luxury_hotel_id"   class="form-control">
                                        <option value=""> -- Choose Premium Luxury Hotel --</option>
                                        @foreach($hotels as $hotel)
                                            <option value="{{ $hotel->id }}">{{ $hotel->hotel_name}} ,{{ $hotel->destination }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">Budget:
                                    <input id="budget" type="text" name="budget" class="form-control numeric"  placeholder="Amount of Budget Type">
                                    @if ($errors->has('budget'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('budget') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-6">Choose Budget Hotel:
                                    <select name="budget_hotel_id"   class="form-control">
                                        <option value=""> -- Choose Budget Hotel --</option>
                                        @foreach($hotels as $hotel)
                                            <option value="{{ $hotel->id }}">{{ $hotel->hotel_name}} ,{{ $hotel->destination }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">Start Date

                                   {{-- <input type="date" value="" class="form-control" data-date-format="dd/mm/yyyy"  required>
                                    @if ($errors->has('start_date'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('start_date') }}</strong>
                                    </span>
                                    @endif--}}

                                    <input type="text" id="tbDate" class="form-control" name="start_date" autocomplete="off"/>

                                    @if ($errors->has('start_date'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('start_date') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="col-md-4">End Date<br>
                                    <input type="text" id="endDate" autocomplete="off" class="form-control" name="end_date"/>
                                    @if ($errors->has('end_date'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('end_date') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="container">

            <div class="row" style="margin-left:-310px;">

                <div class="col-md-8 ">

                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <h3>INCLUSION AND EXCLUSION WITHIN THE PACKAGE</h3>
                        </div>
                        <div class="panel-body">
                            <table>

                                 <tr><td>Inclusion :</td><td>
                                        <div class="form-group has-feedback" >
                                            <textarea type="text" rows="6" class="form-control" name="inclusion" cols="40" ></textarea>
                                            @if ($errors->has('inclusion'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('inclusion') }}</strong>
                                    </span>
                                            @endif
                                        </div> </td>

                                    <td>Exclusion :</td> <td>
                                        <div class="form-group has-feedback" >
                                            <textarea type="text" rows="6" class="form-control" name="exclusion" cols="40" ></textarea>
                                            @if ($errors->has('exclusion'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('exclusion') }}</strong>
                                    </span>
                                            @endif
                                        </div></td>
                                </tr>
                                <tr><td>Other Details :</td><td>
                                        <div class="form-group has-feedback" >
                                            <textarea type="text" rows="6" class="form-control" name="other_details" cols="40" ></textarea>
                                            @if ($errors->has('other_details'))
                                                <span class="help-block">
                                                 <strong>{{ $errors->first('other_details') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


{{--

            <div class="container" >

                <div class="row" style="margin-left:-310px;">

                    <div class="col-md-8 ">

                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <h3>HOTELS/ RESORT USED IN THIS PACKAGE</h3>
                            </div>
                            <div class="panel-body">
                             --}}
{{--   <table id="myTable"  border="1px" class="panel panel-default">
                                    <th>DESTINATION</th>
                                    <th>STANDARD</th>
                                    <th>DELUXE</th>
                                    <th>PREMIUM</th>

                                    <th><a id="addrow" class="glyphicon glyphicon-plus-sign" title="Add a new Row" class="btAdd" href="javascript:;"></a></th>                         <th></th>
                                    <tr id="1" class="info">
                                        <td ><input id="destination1"  type="text" name="destination[]" class="form-control"  placeholder="Enter Destination" required></td>
                                        @if ($errors->has('destination'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('destination') }}</strong>
                                    </span>
                                        @endif
                                        <td><input id="standard_hotel1" type="text" name="standard_hotels[]" class="form-control"  placeholder="Enter Standard Hotel" required></td>
                                        @if ($errors->has('standard_hotels'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('standard_hotels') }}</strong>
                                    </span>
                                        @endif
                                        <td><input id="deluxe_hotel1" type="text" name="deluxe_hotels[]" class="form-control"  placeholder="Enter Delux Hotel" required></td>
                                        @if ($errors->has('deluxe_hotels'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('deluxe_hotels') }}</strong>
                                    </span>
                                        @endif
                                        <td><input id="premium_hotel1" type="text" name="premium_hotels[]" class="form-control"  placeholder="Enter Premium Hotel" required></td>
                                        @if ($errors->has('premium_hotels'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('premium_hotels') }}</strong>
                                    </span>
                                        @endif

                                        <td><a  style="text-decoration: none;" class="form-control btn-danger"  onclick="delRow(this)">Delete</a></td>



                                    </tr>
                                    --}}{{--
--}}
{{--<a  id="insert-more">
                                        <span class="glyphicon glyphicon-plus-sign"></span>
                                    </a>--}}{{--
--}}
{{--


                                </table>--}}{{--

                                <div class="row">

                                    <div class="col-md-2"></div>
                                    <div class="col-md-2">Hotels :</div>
                                    <div class="col-md-8">


                                            <select class="form-control select2" multiple="multiple" name="hotels[]" data-placeholder="-- Select Hotels --"
                                                    style="width: 100%;">
                                                @foreach($hotels as $hotel)
                                                <option value="{{ $hotel->id }}">{{ $hotel->hotel_name}} ,{{ $hotel->destination }}</option>
                                                @endforeach
                                            </select>

                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
--}}


            <div class="container" >

                <div class="row" style="margin-left:-310px;">

                    <div class="col-md-8 ">

                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <h3>ADD PACKAGE IMAGES</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-2"> Package Images</div>
                                    <div class="col-md-8">
                                            <input type="file" id="package_image" name="package_image[]" class="form-control" accept="image/*" required multiple />
                                            <span id="image_error" style="display: none;"><br>
                                                <b style="color: red;">Image is required with dimension 850 x 995..!!!</b>
                                            </span>
                                    </div>
                                 </div>
                                <div class="row">
                                    <div class="col-md-12" id="preview_div"></div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            <!--<div class="container" >

                <div class="row" style="margin-left:-310px;">

                    <div class="col-md-8">

                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <h3>SEO SECTION</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-4">Title :
                                        <input id="title"  type="text" name="title" class="form-control"   placeholder="Enter title" >
                                        @if ($errors->has('title'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                        @endif

                                    </div>

                                    <div class="col-md-8">Meta Tag Format :
                                        <input id="format" type="text" class="form-control"  placeholder='<meta name="description" content="Citytours."> ' readonly>

                                    </div>

                                    {{--<div class="col-md-4">Meta Tags :</div>
                                    <div class="col-md-8">
                                        <textarea id="description" type="text" name="description"  rows="8" cols="60" class="form-control"   placeholder="Enter Meta Tags"></textarea>
                                        @if ($errors->has('description'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                        @endif
                                    </div>--}}


                                </div><br>
                                <div class="row">


                                    <div class="col-md-2">Meta Tags :</div>
                                    <div class="col-md-10">
                                        <textarea id="description" type="text" name="description"  rows="8" cols="60" class="form-control"   placeholder="Enter Meta Tags"></textarea>
                                        @if ($errors->has('description'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>-->


                    <button type="submit" class="btn btn-primary btn-block btn-flat">Save</button>
               <br>
               <br>
               <br>


           </form>

    </div>
    </div>
@endsection

@section('javascript')

    <script>
        function myFunction(val) {
            var counter = 0;
            /*  alert("The input value has changed. The new value is: " + val);*/
            $('#parent').html('');
            for(i=0; i<val;i++)
            {
               /* var textBox = document.createElement("textarea");*/
               /* var div = document.createElement('div');
                div.className = 'row';*/


                html='<div class="row"> <div class="col-md-2 col-md-offset-1"> Day '+[i+1]+'  </div> ' +
                    '<div class="col-md-8" ><textarea id="day" class="form-control"  cols="40" rows="4" name="descriptions[]" type="text"></textarea></div> </div><br>';
                /*textBox.name="descriptions[]";
                textBox.id='day';*/

                $('#parent').append(html);
            }
        }



          /*  alert("The input value has changed. The new value is: " + val);*/

    </script>

    <script>
        var j=2;
        $("#addrow").click(function(){

            var a=j-1,
                temp0=$("#destination"+a).val(),
                temp1=$("#standard_hotel"+a).val(),
                temp2=$("#deluxe_hotel"+a).val(),
                temp3=$("#premium_hotel"+a).val();

            //alert(temp0);

            if((temp0 && temp1 && temp2 && temp3)!="")
            {

                $(".info:last").after('<tr id="'+j+'" class="info">'+
                    '<td><input id="destination'+j+'"  type="text" name="destination[]" class="form-control"  placeholder="Enter Destination"></td>'+
                    '<td><input id="standard_hotel'+j+'" type="text" name="standard_hotels[]" class="form-control"  placeholder="Enter Standard Hotel"></td>'+
                    '<td><input id="deluxe_hotel'+j+'" type="text" name="deluxe_hotels[]" class="form-control"  placeholder="Enter Delux Hotel"></td>'+
                    '<td><input id="premium_hotel'+j+'" type="text" name="premium_hotels[]" class="form-control"  placeholder="Enter Premium Hotel"></td>'+
                    '<td><a  style="text-decoration: none;" id="delete'+j+'" class="form-control btn-danger"  onclick="delRow(this)">Delete</a></td></tr>');


            //add_warranty();

                j=j+1;
                totalIndex=j;

            }
            else
            {
                alert("Fill this row");
            }


        });
    </script>

    <script>
        function delRow(currElement) {
            var parentRowIndex = currElement.parentNode.parentNode.rowIndex;
            document.getElementById("myTable").deleteRow(parentRowIndex);
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

                    if ((this.width != 429) && (this.height != 218) ) {
                        alert("Image Dimension should be 429x218");
                        $("#file").val('');
                        $('#pic').hide();
                        //$('#img_err').show();
                    }


                };

                image.src = _URL.createObjectURL(file);

            }

        });
    </script>
    {{--<script src="{{asset('datepicker/js/bootstrap-datepicker.js')}}"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>--}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.0/jquery-ui.js"></script>


    <script>
        $(document).ready(function () {
            $('input[id$=tbDate]').datepicker({});
        });
    </script>
    <script>
        $('input[id$=tbDate]').datepicker({
            dateFormat: 'dd-mm-yy'
        });
    </script>


    <script>
        $(document).ready(function () {
            $('input[id$=endDate]').datepicker({});
        });
    </script>
    <script>
        $('input[id$=endDate]').datepicker({
            dateFormat: 'dd-mm-yy'
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>





    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        var specialKeys = new Array();
        specialKeys.push(8); //Backspace
        $(function () {
            $(".numeric").bind("keypress", function (e) {
                var keyCode = e.which ? e.which : e.keyCode
                var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
                $(".error").css("display", ret ? "none" : "inline");
                return ret;
            });
            $(".numeric").bind("paste", function (e) {
                return false;
            });
            $(".numeric").bind("drop", function (e) {
                return false;
            });
        });
    </script>
    <script>

        $( document ).ready(function() {
            $( "#package_name" ).keypress(function(e) {
                var key = e.keyCode;
                if (key >= 48 && key <= 57) {
                    e.preventDefault();
                }
            });
        });
    </script>
    <script src="{{ asset('dashboard/bower_components/select2/dist/js/select2.full.min.js') }}"></script>

    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()
        });
    </script>



    <script>
        $('#country_name').on('change',function()
        {
            var country=$(this).find('option:selected').val();

            if(country==null)
            {

                $("#location").empty();
            }


            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url:'{{ route('location.list.ajax') }}',
                type:'POST',
                dataType: 'text',
                data: {country :country },
                /*JSON.stringify(selectedProvider)*/
                success: function (res) {
                   // alert(res);
                    var obj = jQuery.parseJSON(res);
                    var limit=obj.length;
                    if(limit!=0)
                    {
                        $("#location").empty();
                        var dest='<option value="">--Choose Location--</option>';
                        $("#location").append(dest);
                        for(var i=0; i<limit;i++)
                        {
                            var location='<option value="' + obj[i].location + '">' + obj[i].location + '</option>';
                            addList(location);
                        }

                    }
                }

            });
        });
        function addList(location) {

                 $("#location").append(location);
 }
    </script>

    <script>
        $("#package_image").on("change",function(e) {

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
                                $("#package_image").val("");
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