@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.0/jquery-ui.css" />
    <link rel="stylesheet" href="{{ asset('dashboard/bower_components/select2/dist/css/select2.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.0/jquery-ui.css" />

    <style>
    tr.spaceUnder>td {
        padding-bottom: 1em;
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
</style>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>





    <div class="row">

    <div class="register-box" style="margin-top: 20px;">
        <form action="{{route('package.update')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field()}}

            @include('flash::message')
            <div class="container" >

                <div class="row" style="margin-left:-306px;">

                    <div class="col-md-8 ">

                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <h3>EDIT PACKAGE DETAILS</h3>
                            </div>
                            <div class="panel-body">
                                @foreach($editPackages as $editPackage)
                                <table>
                                    <input type="text" class="form-control" style="display: none" name="id" value="{{$editPackage->id}}">

                                    <tr class="spaceUnder">
                                        <td><div class="form-group has-feedback">Package ID :</div></td>
                                        <td><div class="form-group has-feedback">
                                                <input type="text" class="form-control" name="gotripz_id" id="gotripz_id" value="{{ $editPackage->gotripz_id  }}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="spaceUnder"><td>Package Name :</td>  <td><div class="form-group has-feedback">
                                                <input type="text" class="form-control" name="package_name" value="{{$editPackage->package_name}}">
                                            </div></td>
                                        <td>Image :</td>
                                        <td><div class="form-group has-feedback">
                                                <input class="form-control" type="file" name="image" accept="image/*" onchange="readURL(this);" id="file">
                                            </div>
                                            <span style="color: red">[ Image Dimension should be 429x218 ]</span>
                                        </td></tr>

                                    <tr class="spaceUnder"><td>Category:</td><td> <select class="form-control"  name="category_id" id="category_id" >

                                                <option value=""> -- Choose Category -- </option>
                                                @foreach($categories as $category)
                                                    @if($editPackage->category_id==$category->id)
                                                 <option value="{{$category->id}}" selected>{{$category->category_name}}</option>
                                                    @else
                                                 <option value="{{$category->id}}" >{{$category->category_name}}</option>
                                                    @endif
                                                @endforeach
                                            </select></td>
                                        </tr>
                                    <tr></tr><tr></tr>
                                    <tr class="spaceUnder"><td>Package Description:</td><td>

                                            <textarea type="text" rows="7" name="package_details" class="form-control" cols="40">{{$editPackage->package_details}}</textarea>


                                        </td><td></td>
                                        <td><div class="lib_image_holder" style="float: right">
                                                <div id="pic" class="form-group">
                                                    <img id="blah" src="{{ asset ('storage/'.$editPackage->image) }}"  />
                                                    {{--<img width ="200px" src="" alt="featured Scroller" />--}}
                                                 </div>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr></tr>
                                    <tr class="spaceUnder"><td>Country :</td> <td> <select class="form-control" value= "{{$editPackage->country}}" name="country_name" id="country_id" >

                                                <option value=""> -- Choose Country -- </option>
                                                @foreach($country as $country_name)
                                                    @if($editPackage->country_name==$country_name->country_name)
                                                    <option value="{{$country_name->country_name}}" selected>{{$country_name->country_name}}</option>
                                                    @else
                                                    <option value="{{$country_name->country_name}}" >{{$country_name->country_name}}</option>
                                                    @endif
                                                @endforeach
                                            </select></td>

                                    </tr>

                                    <tr class="spaceUnder"><td>Location :</td>
                                        <td><select class="form-control" name="location" id="country_id">
                                                <option value=""> -- Choose Location -- </option>
                                                @foreach($location as $locations)

                                                    @if($editPackage->location==$locations->location)
                                                    <option value="{{$locations->location}}" selected>{{$locations->location}}</option>
                                                    @else
                                                        <option value="{{$locations->location}}">{{$locations->location}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            @if ($errors->has('location'))
                                                <span class="help-block">
                                                     <strong>{{ $errors->first('location') }}</strong>
                                                 </span>
                                            @endif
                                        </td>
                                        <td>Places:</td>
                                        <td> <input id="places" type="text" name="places" class="form-control"  value="{{$editPackage->places}}" ></td>

                                    </tr>

                                    <tr class="spaceUnder">
                                        <td>Package Type :</td>
                                        <td><select class="form-control" name="category_id" id="category_id">
                                                <option value=""> -- Choose Package Type -- </option>
                                                @foreach($categories as $category)
                                                    @if($editPackage->category_id==$category->id)
                                                    <option value="{{ $category->id }}" selected> {{ $category->category_name }} </option>
                                                    @endif
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
                                        <td><select class="form-control" name="destination" id="destination"  >
                                                <option value=""> -- Choose Destination -- </option>
                                                @foreach($destinations as $destination)
                                                    @if($editPackage->destination==$destination->id)

                                                    <option value="{{ $destination->id }}" selected> {{ $destination->destination }} </option>
                                                    @endif
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
                                        <td><select class="form-control" name="package_category" id="package_category" >
                                                <option value=""> -- Choose Package Category -- </option>
                                                <option value="Economy" @if($editPackage->package_category=='Economy') selected @endif> Economy </option>
                                                <option value="Budget" @if($editPackage->package_category=='Budget') selected @endif> Budget </option>
                                                <option value="Delux" @if($editPackage->package_category=='Deluxe') selected @endif> Deluxe </option>
                                                <option value="Premium"  @if($editPackage->package_category=='Premium') selected @endif> Premium </option>
                                                <option value="Luxury"  @if($editPackage->package_category=='Luxury') selected @endif> Luxury </option>
                                                <option value="Premium Luxury"  @if($editPackage->package_category=='Premium Luxury') selected @endif> Premium Luxury </option>
                                            </select>

                                        </td>
                                    </tr>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>
            </div>



<!---------------------------------------------------------------------------------------------------------------------------->
            <div class="container" >

                <div class="row" style="margin-left:-306px;">

                    <div class="col-md-8 ">

                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <h3>PACKAGE ITINERARY</h3>
                            </div>
                            <div class="panel-body">

                                <div class="row">
                                    <div class="col-md-4">Total Days :
                                        <input id="number_of_days"  min="0" type="number" name="number_of_days" class="form-control" onchange="myFunction(this.value)" placeholder="Number of Days" value="{{$editPackage->days}}">
                                        @if ($errors->has('number_of_days'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('number_of_days') }}</strong>
                                    </span>
                                        @endif

                                    </div>
                                    <div class="col-md-4">Total Nights :
                                        <input id="number_of_nights" min="0" type="number" name="number_of_nights" class="form-control"  placeholder="Number of Nights" value="{{$editPackage->nights}}" >
                                        @if ($errors->has('number_of_nights'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('number_of_nights') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">Total People :
                                        <input id="number_of_people" min="0" type="number" name="number_of_people" class="form-control"  placeholder="Number of People" value="{{$editPackage->number_of_people}}">
                                        @if ($errors->has('number_of_people'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('number_of_people') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                </div>





                            </div>
                            <input type="text" value="{{ $editPackage->days }}" name="total_days" id="total_days" style="display: none">

                             @foreach($days as $day)
                                <div class="row">
{{--
                                    <input type="hidden" name="day_number" value="{{ $day->day_number   }}">
--}}
                                    <div class="col-md-2 col-md-offset-1"> Day {{ $day->day_number   }}</div>
                                    <div class="col-md-8" >
                                        <textarea id="day" class="form-control"  cols="40" rows="4" name="descriptions[]" type="text">{{ $day->description }}</textarea>
                                    </div>
                                </div><br>
                            @endforeach




                            <div id='parent'>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!---------------------------------------------------------------------------------------------------------------------------->





            <div class="container" >

                <div class="row" style="margin-left:-306px;">

                    <div class="col-md-8 ">

                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <h3>PACKAGE TYPE AND DETAILS</h3>
                            </div>
                            <div class="panel-body">

                                <div class="row">
                                    <div class="col-md-6">Economy Amount:
                                        <input id="standard" type="text" name="economy" class="form-control numeric"  value="{{ $editPackage->economy }}">
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
                                                @if($editPackage->economy_hotel_id ==$hotel->id )
                                                <option value="{{ $hotel->id }}" selected>{{ $hotel->hotel_name}} ,{{ $hotel->destination }}</option>
                                                @else
                                                <option value="{{ $hotel->id }}" >{{ $hotel->hotel_name}} ,{{ $hotel->destination }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">Deluxe Amount:
                                        <input id="deluxe" type="text" name="deluxe" class="form-control numeric"  value="{{ $editPackage->deluxe }}">
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
                                            @if($editPackage->deluxe_hotel_id ==$hotel->id )
                                                <option value="{{ $hotel->id }}" selected>{{ $hotel->hotel_name}} ,{{ $hotel->destination }}</option>
                                            @else
                                                <option value="{{ $hotel->id }}" >{{ $hotel->hotel_name}} ,{{ $hotel->destination }}</option>
                                            @endif
                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">Premium Amount:
                                        <input id="premium" type="text" name="premium" class="form-control numeric" value="{{ $editPackage->premium  }}">
                                    </div>
                                    <div class="col-md-6">Choose Premium Hotel:
                                        <select name="premium_hotel_id"   class="form-control">
                                            <option value=""> -- Choose Premium Hotel --</option>
                                            @foreach($hotels as $hotel)
                                            @if($editPackage->premium_hotel_id ==$hotel->id )
                                                <option value="{{ $hotel->id }}" selected>{{ $hotel->hotel_name}} ,{{ $hotel->destination }}</option>
                                            @else
                                                <option value="{{ $hotel->id }}" >{{ $hotel->hotel_name}} ,{{ $hotel->destination }}</option>
                                            @endif
                                                @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">Luxury Amount:
                                        <input id="luxury" type="text" name="luxury" class="form-control numeric"  value="{{ $editPackage->luxury  }}">
                                    </div>
                                    <div class="col-md-6">Choose Luxury Hotel:
                                        <select name="luxury_hotel_id"   class="form-control">
                                            <option value=""> -- Choose Luxury Hotel --</option>
                                            @foreach($hotels as $hotel)
                                            @if($editPackage->luxury_hotel_id ==$hotel->id )
                                                <option value="{{ $hotel->id }}" selected>{{ $hotel->hotel_name}} ,{{ $hotel->destination }}</option>
                                            @else
                                                <option value="{{ $hotel->id }}" >{{ $hotel->hotel_name}} ,{{ $hotel->destination }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">Premium Luxury Amount:
                                        <input id="premium_luxury" type="text" name="premium_luxury" class="form-control numeric"  value="{{ $editPackage->premium_luxury  }}">
                                    </div>
                                    <div class="col-md-6">Choose Premium Luxury Hotel:
                                        <select name="premium_luxury_hotel_id"   class="form-control">
                                            <option value=""> -- Choose Premium Luxury Hotel --</option>
                                            @foreach($hotels as $hotel)
                                            @if($editPackage->premium_luxury_hotel_id ==$hotel->id )
                                                <option value="{{ $hotel->id }}" selected>{{ $hotel->hotel_name}} ,{{ $hotel->destination }}</option>
                                            @else
                                                <option value="{{ $hotel->id }}" >{{ $hotel->hotel_name}} ,{{ $hotel->destination }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">Budget:
                                        <input id="budget" type="text" name="budget" class="form-control numeric"  value="{{ $editPackage->budget  }}">
                                    </div>
                                    <div class="col-md-6">Choose Budget Hotel:
                                        <select name="budget_hotel_id"   class="form-control">
                                            <option value=""> -- Choose Budget Hotel --</option>
                                            @foreach($hotels as $hotel)
                                            @if($editPackage->budget_hotel_id ==$hotel->id )
                                                <option value="{{ $hotel->id }}" selected>{{ $hotel->hotel_name}} ,{{ $hotel->destination }}</option>
                                            @else
                                                <option value="{{ $hotel->id }}" >{{ $hotel->hotel_name}} ,{{ $hotel->destination }}</option>
                                            @endif
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

                                        <input type="text" id="tbDate" class="form-control" value="{{$editPackage->start_date  }}" name="start_date" autocomplete="off"/>

                                        @if ($errors->has('start_date'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('start_date') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="col-md-4">End Date<br>
                                        <input type="text" id="endDate" value="{{$editPackage->end_date  }}" autocomplete="off" class="form-control" name="end_date"/>
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



            <div class="container" >

                <div class="row" style="margin-left:-306px;">

                    <div class="col-md-8 ">

                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <h3>INCLUSION AND EXCLUSION WITHIN THE PACKAGE</h3>
                            </div>
                            <div class="panel-body">
                                <table>
                                    <tr><td>Inclusion :</td><td>
                                            <div class="form-group has-feedback" >
                                                <textarea type="text" rows="6" class="form-control" name="inclusion" cols="40">{{$editPackage->inclusion}}</textarea>
                                            </div> </td>

                                        <td>Exclusion :</td> <td>
                                            <div class="form-group has-feedback" >
                                                <textarea type="text" class="form-control" rows="6" name="exclusion"  cols="40">{{$editPackage->exclusion}}</textarea></div>
                                        </td>
                                    </tr>
                                    <tr><td>Other Details :</td><td>
                                            <div class="form-group has-feedback" >
                                                <textarea type="text" rows="6" class="form-control" name="other_details" cols="40" >{{ $editPackage->other_details }}</textarea>
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





            {{--<div class="container" >
                <div class="row" style="margin-left:-306px;">
                    <div class="col-md-8 ">

                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <h3>HOTELS/ RESORT USED IN THIS PACKAGE</h3>
                            </div>
                            <div class="panel-body">
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
            </div>--}}

            @endforeach
            <div class="container" >

                <div class="row" style="margin-left:-310px;">

                    <div class="col-md-8 ">

                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <h3>ADD PACKAGE IMAGES</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">

                                    <div class="col-md-2"></div>
                                    <div class="col-md-2">Package Images</div>
                                    <div class="col-md-8">
                                        <input type="file" id="package_image" name="package_image[]" class="form-control" accept="image/*"  multiple />
                                        <span id="image_error" style="display: none;"><br>
                                                <b style="color: red;">Image is required with dimension 850 x 995..!!!</b>
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12" id="preview_div"></div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12" id="dvPreview">
                                        @foreach($package_images as $package_image)
                                            <div class="col-md-3">
                                                <img src="{{ asset('storage/'.$package_image->image) }}" style="width:80px;height:80px">
                                                <span class="remove_img remove_img_preview"  data-id="{{$package_image->id}}"></span>
                                            </div>
                                        @endforeach
                                    </div>
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
                                        <input id="title"  type="text" name="title" class="form-control" value="{{$editPackage->title}}">
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
                                        <textarea id="description" type="text" name="description"  rows="8" cols="60" class="form-control">{{$editPackage->description}}</textarea>
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








            <!-- /.col -->

                <button type="submit" class="btn btn-primary btn-block btn-flat">Update</button>
          <br>
          <br>
          <br>
            <!-- /.col -->

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
            var total_days=$('#total_days').val();
            var days=total_days;
            for(i=0; i<val;i++)
            {
                days=parseInt(days)+1;
                /* var textBox = document.createElement("textarea");*/
                /* var div = document.createElement('div');
                 div.className = 'row';*/
                html='<div class="row"><div class="col-md-2 col-md-offset-1"> Day '+days+'  </div> ' +
                    '<div class="col-md-8" ><textarea id="day" class="form-control"  cols="40" rows="4" name="descriptions[]" type="text"></textarea></div> </div><br>';
                /*textBox.name="descriptions[]";
                textBox.id='day';*/
                $('#parent').append(html);
               total_days ++;
            }
        }


    </script>

    <script>
        $("#insert-more").click(function () {
            $("#myTable").each(function () {
                var tds = '<tr>';

                jQuery.each($('tr:last td', this), function () {
                    tds += '<td>' + $(this).html() + '</td>';
                });
                tds += '</tr>';


                if ($('tbody', this).length > 0) {
                    $('tbody', this).append(tds);
                } else {
                    $(this).append(tds);
                }
            });
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

    <script src="{{ asset('dashboard/bower_components/select2/dist/js/select2.full.min.js') }}"></script>

    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()
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
                    url: '{{ route('admin.delete.package_image') }}',
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
            $("#package_image").change(function () {
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