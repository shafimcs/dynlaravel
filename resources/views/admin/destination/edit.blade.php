@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.0/jquery-ui.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.0/jquery-ui.css" />
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
    <script src="{{ asset('dashboard/bower_components/ckeditor/ckeditor.js') }}"></script>



    {{------------------------------------------------------------------------------------------------------------------------------}}
    <div class="row">

    <div class="register-box" >
        <form action="{{route('destination.update')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field()}}

            @include('flash::message')

            <div class="container" >
                <div class="row">
                    <div class="col-md-10" style="margin-left:-280px;">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3>EDIT DESTINATION DETAILS</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" name="id" value="{{ $destination->id }}" style="display: none">
                                        <div class="col-md-6">Location:
                                            <select class="form-control" name="location" id="location">
                                                  <option value=""> -- Choose Location -- </option>
                                                @foreach($location as $locations)
                                                    @if($locations->location== $destination->location)
                                                    <option value="{{$locations->location}}" selected>{{$locations->location}}</option>
                                                    @else
                                                        <option value="{{$locations->location}}">{{$locations->location}}</option>
                                                    @endif

                                                @endforeach
                                              </select>
                                         </div>



                                        <div class="col-md-6">Destination : <input type="text" class="form-control" name="destination" id="destination" value="{{ $destination->destination }}"></div>
                                    </div>
                                    <br>  <br>  <br>  <br>

                                    <div class="row">
                                        <div class="col-md-6"></div>
                                        <div class="col-md-4">
                                            <div class="lib_image_holder" style="float: right">
                                                <div id="pic" class="form-group">
                                                    <img  id="blah" width ="200px" src="{{ asset('storage/'.$destination->image) }}" class="img-responsive">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6">Choose Destination Image :
                                            <div class="form-group has-feedback">
                                                <input  type="file" class="form-control" id="file" name="image" accept="image/*" onchange="readURL(this);" >
                                            </div>
                                            <span style="color: red"> [ Image dimension should be 360x182 ]</span>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            {{------------------------------------------------------------------------------------------------------------------------------}}


            <div class="container" >

                <div class="row">

                    <div class="col-md-10" style="margin-left:-280px;">

                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <h3>AREA CONDITIONS</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12"> <h4>Best Time</h4>
                                        <div class="col-md-3">Best month(From) :
                                            <select name="best_month_from" id="best_month_from" class="form-control from">
                                                <option value="">-- Choose Month --</option>
                                                <option value="January">January</option>
                                                <option value="February">February</option>
                                                <option value="March">March</option>
                                                <option value="April">April</option>
                                                <option value="May">May</option>
                                                <option value="June">June</option>
                                                <option value="July">July</option>
                                                <option value="August">August</option>
                                                <option value="September">September</option>
                                                <option value="October">October</option>
                                                <option value="November">November</option>
                                                <option value="December">December</option>
                                             {{--   @if($destination->best_month_from=='January')
                                                    <option value="January" selected>January</option>
                                                @else
                                                    <option value="January">January</option>
                                                @endif
                                                @if($destination->best_month_from=='February')
                                                    <option value="February" selected>February</option>
                                                @else
                                                    <option value="February">February</option>
                                                @endif
                                                @if($destination->best_month_from=='March')
                                                    <option value="March" selected>March</option>
                                                @else
                                                    <option value="March">March</option>
                                                @endif
                                                @if($destination->best_month_from=='April')
                                                    <option value="April" selected>April</option>
                                                @else
                                                    <option value="April">April</option>
                                                @endif
                                                @if($destination->best_month_from=='May')
                                                    <option value="May" selected>May</option>
                                                @else
                                                    <option value="April">May</option>
                                                @endif
                                                @if($destination->best_month_from=='June')
                                                    <option value="June" selected>June</option>
                                                @else
                                                    <option value="June">June</option>
                                                @endif
                                                @if($destination->best_month_from=='July')
                                                    <option value="July" selected>July</option>
                                                @else
                                                    <option value="July">July</option>
                                                @endif
                                                @if($destination->best_month_from=='August')
                                                    <option value="August" selected>August</option>
                                                @else
                                                    <option value="August">August</option>
                                                @endif
                                                @if($destination->best_month_from=='September')
                                                    <option value="September" selected>September</option>
                                                @else
                                                    <option value="September">September</option>
                                                @endif
                                                @if($destination->best_month_from=='October')
                                                    <option value="October" selected>October</option>
                                                @else
                                                    <option value="October">October</option>
                                                @endif
                                                @if($destination->best_month_from=='November')
                                                    <option value="November" selected>November</option>
                                                @else
                                                    <option value="November">November</option>
                                                @endif
                                                @if($destination->best_month_from=='December')
                                                    <option value="December" selected>December</option>
                                                @else
                                                    <option value="December">December</option>
                                                @endif--}}

                                            </select>
                                        </div>
                                        <div class="col-md-3">Best month(To) :
                                            <select name="best_month_to" id="best_month_to" class="form-control from"  id="best_month_to" value="{{ $destination->best_month_to }}">
                                                <option value="">-- Choose Month --</option>
                                                <option value="January">January</option>
                                                <option value="February">February</option>
                                                <option value="March">March</option>
                                                <option value="April">April</option>
                                                <option value="May">May</option>
                                                <option value="June">June</option>
                                                <option value="July">July</option>
                                                <option value="August">August</option>
                                                <option value="September">September</option>
                                                <option value="October">October</option>
                                                <option value="November">November</option>
                                                <option value="December">December</option>

                                            </select>
                                        </div>


                                        <div class="col-md-3"> Best day(From) :<input type="number" class="form-control" name="best_day_from" id="best_day_from" value="{{ $destination->best_day_from }}"></div>
                                        <div class="col-md-3"> Best day(To) : <input type="number" class="form-control" name="best_day_to" id="best_day_to" value="{{ $destination->best_day_to }}"></div>

                                        <div class="row">
                                            <div class="col-md-12"><h4>How to Reach</h4>
                                                <div class="col-md-6">Nearest Airport :<input type="text" class="form-control" name="nearest_airport" id="nearest_airport" value="{{ $destination->nearest_airport }}"> </div>
                                                <div class="col-md-6">Nearest Railway Station: <input type="text" class="form-control" name="nearest_railway_station" id="nearest_railwaystation" value="{{ $destination->nearest_railway_station }}"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12"><h4>Description</h4>
                                                <textarea type="text" class="form-control" name="description" rows="6" cols="70">{{ $destination->description }}</textarea>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

 {{----------- --------------------------------------------------------------------------------------------------------------}}
            {{----------- ----------------------------------------------------------------------------}}
            <div class="container" >

                <div class="row">

                    <div class="col-md-10" style="margin-left:-280px;">

                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <h3>ABOUT</h3>
                            </div>
                            <div class="panel-body">
                                <section class="content">
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class="box box-info">
                                                <div class="box-header">
                                                    <h3 class="box-title">List the things to do in the destination</h3><br>
                                                    <small>(Include images if you want - Image dimesion should be 800 * 448 (width * height))</small>
                                                    <div class="pull-right box-tools">
                                                        <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                                                                title="Collapse">
                                                            <i class="fa fa-minus"></i></button>
                                                        <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                                                                title="Remove">
                                                            <i class="fa fa-times"></i></button>
                                                    </div>
                                                </div>
                                                <div class="box-body pad">
                                                    <textarea id="about" name="about" rows="10" cols="80" placeholder="Make changes on the text for fit to the image">
 {{ $destination->about }}
                                                    </textarea>
                                                    <script>
                                                        // instance, using default configuration.
                                                        CKEDITOR.replace('about')
                                                        //bootstrap WYSIHTML5 - text editor
                                                        $('.textarea').wysihtml5()
                                                    </script>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

 {{----------- -----------------------------------------------------------------------------------------------------------------}}

            <div class="container" >

                <div class="row">

                    <div class="col-md-10" style="margin-left:-280px;">

                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <h3>THINGS TO DO</h3>
                            </div>
                            <div class="panel-body">
                                <section class="content">
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class="box box-info">
                                                <div class="box-header">
                                                    <h3 class="box-title">List the things to do in the destination</h3><br>
                                                    <small>(Include images if you want - Image dimesion should be 800 * 448 (width * height))</small>
                                                    <div class="pull-right box-tools">
                                                        <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                                                                title="Collapse">
                                                            <i class="fa fa-minus"></i></button>
                                                        <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                                                                title="Remove">
                                                            <i class="fa fa-times"></i></button>
                                                    </div>
                                                </div>
                                                <div class="box-body pad">
                                                    <textarea id="things_to_do" name="things_to_do" rows="10" cols="80" >
                                                         {{ $destination->things_to_do }}
                                                    </textarea>
                                                    <script>
                                                        // instance, using default configuration.
                                                        CKEDITOR.replace('things_to_do')
                                                        //bootstrap WYSIHTML5 - text editor
                                                        $('.textarea').wysihtml5()
                                                    </script>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{----------- -----------------------------------------------------------------------------------------------------------------}}


            {{----------- -----------------------------------------------------------------------------------------------------------------}}
            <div class="container" >

                <div class="row">

                    <div class="col-md-10" style="margin-left:-280px;">

                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <h3>HOTELS</h3>
                            </div>
                            <div class="panel-body">
                                <section class="content">
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class="box box-info">
                                                <div class="box-header">
                                                    <h3 class="box-title">List the hotels in the destination </h3><br>
                                                    <small>(Include images if you want - Image dimesion should be 800 * 448 (width * height))</small>
                                                    <div class="pull-right box-tools">
                                                        <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                                                                title="Collapse">
                                                            <i class="fa fa-minus"></i></button>
                                                        <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                                                                title="Remove">
                                                            <i class="fa fa-times"></i></button>
                                                    </div>
                                                </div>
                                                <div class="box-body pad">
                                                    <textarea id="hotels" name="hotels" rows="10" cols="80">{{ $destination->hotels }} </textarea>
                                                    <script>
                                                        CKEDITOR.replace('hotels')
                                                        //bootstrap WYSIHTML5 - text editor
                                                        $('.textarea').wysihtml5()
                                                    </script>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{----------- -----------------------------------------------------------------------------------------------------------------}}
            {{----------- -----------------------------------------------------------------------------------------------------------------}}
            <div class="container" >

                <div class="row">

                    <div class="col-md-10" style="margin-left:-280px;">

                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <h3>RESORTS</h3>
                            </div>
                            <div class="panel-body">
                                <section class="content">
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class="box box-info">
                                                <div class="box-header">
                                                    <h3 class="box-title">List the resorts in the destination  </h3><br>
                                                    <small>(Include images if you want - Image dimesion should be 800 * 448 (width * height))</small>
                                                    <div class="pull-right box-tools">
                                                        <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                                                                title="Collapse">
                                                            <i class="fa fa-minus"></i></button>
                                                        <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                                                                title="Remove">
                                                            <i class="fa fa-times"></i></button>
                                                    </div>
                                                </div>
                                                <div class="box-body pad">
                                                    <textarea id="resorts" name="resorts" rows="10" cols="80">{{ $destination->resorts }}</textarea>
                                                    <script>
                                                        CKEDITOR.replace('resorts')
                                                        //bootstrap WYSIHTML5 - text editor
                                                        $('.textarea').wysihtml5()
                                                    </script>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            {{----------- -----------------------------------------------------------------------------------------------------------------}}
            {{----------- -----------------------------------------------------------------------------------------------------------------}}
            <div class="container" >

                <div class="row">

                    <div class="col-md-10" style="margin-left:-280px;">

                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <h3>TOURIST PLACES</h3>
                            </div>
                            <div class="panel-body">
                                <section class="content">
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class="box box-info">
                                                <div class="box-header">
                                                    <h3 class="box-title">List the tourist places in the destination</h3><br>
                                                    <small>(Include images if you want - Image dimesion should be 800 * 448 (width * height))</small>

                                                    <div class="pull-right box-tools">
                                                        <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                                                                title="Collapse">
                                                            <i class="fa fa-minus"></i></button>
                                                        <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                                                                title="Remove">
                                                            <i class="fa fa-times"></i></button>
                                                    </div>
                                                </div>
                                                <div class="box-body pad">
                                                    <textarea id="tourist_places" name="tourist_places" rows="10" cols="80" >{{ $destination->tourist_places }} </textarea>
                                                    <script>
                                                        CKEDITOR.replace('tourist_places')
                                                        //bootstrap WYSIHTML5 - text editor
                                                        $('.textarea').wysihtml5()
                                                    </script>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{----------- -----------------------------------------------------------------------------------------------------------------}}
            {{----------- -----------------------------------------------------------------------------------------------------------------}}
            <div class="container" >

                <div class="row">

                    <div class="col-md-10" style="margin-left:-280px;">

                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <h3>HOW TO REACH</h3>
                            </div>
                            <div class="panel-body">
                                <section class="content">
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class="box box-info">
                                                <div class="box-header">
                                                    <h3 class="box-title">Specify the routes by road,by rail and by air </h3><br>
                                                    <small>(Include images if you want - Image dimesion should be 800 * 448 (width * height))</small>

                                                    <div class="pull-right box-tools">
                                                        <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                                                                title="Collapse">
                                                            <i class="fa fa-minus"></i></button>
                                                        <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                                                                title="Remove">
                                                            <i class="fa fa-times"></i></button>
                                                    </div>
                                                </div>
                                                <div class="box-body pad">
                                                    <textarea id="how_to_reach" name="how_to_reach" rows="10" cols="80">{{ $destination->how_to_reach }} </textarea>
                                                    <script>
                                                        CKEDITOR.replace('how_to_reach')
                                                        //bootstrap WYSIHTML5 - text editor
                                                        $('.textarea').wysihtml5()
                                                    </script>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{----------- -----------------------------------------------------------------------------------------------------------------}}
            {{----------- -----------------------------------------------------------------------------------------------------------------}}
            <div class="container" >

                <div class="row">

                    <div class="col-md-10" style="margin-left:-280px;">

                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <h3>SHOP AT</h3>
                            </div>
                            <div class="panel-body">
                                <section class="content">
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class="box box-info">
                                                <div class="box-header">
                                                    <h3 class="box-title">List the shopping malls or shops in the destination </h3><br>
                                                    <small>(Include images if you want - Image dimesion should be 800 * 448 (width * height))</small>

                                                    <div class="pull-right box-tools">
                                                        <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                                                                title="Collapse">
                                                            <i class="fa fa-minus"></i></button>
                                                        <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                                                                title="Remove">
                                                            <i class="fa fa-times"></i></button>
                                                    </div>
                                                </div>
                                                <div class="box-body pad">
                                                    <textarea id="shop_at" name="shop_at" rows="10" cols="80">{{ $destination->shop_at }}</textarea>
                                                    <script>
                                                        CKEDITOR.replace('shop_at')
                                                        //bootstrap WYSIHTML5 - text editor
                                                        $('.textarea').wysihtml5()
                                                    </script>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{----------- -----------------------------------------------------------------------------------------------------------------}}
            {{----------- -----------------------------------------------------------------------------------------------------------------}}
            <div class="container" >

                <div class="row">

                    <div class="col-md-10" style="margin-left:-280px;">

                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <h3>EAT AT</h3>
                            </div>
                            <div class="panel-body">
                                <section class="content">
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class="box box-info">
                                                <div class="box-header">
                                                    <h3 class="box-title">List the best resturants in the destination </h3><br>
                                                    <small>(Include images if you want - Image dimesion should be 800 * 448 (width * height))</small>

                                                    <div class="pull-right box-tools">
                                                        <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                                                                title="Collapse">
                                                            <i class="fa fa-minus"></i></button>
                                                        <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                                                                title="Remove">
                                                            <i class="fa fa-times"></i></button>
                                                    </div>
                                                </div>
                                                <div class="box-body pad">
                                                    <textarea id="eat_at" name="eat_at" rows="10" cols="80">{{ $destination->eat_at }}</textarea>
                                                    <script>
                                                        CKEDITOR.replace('eat_at')
                                                        //bootstrap WYSIHTML5 - text editor
                                                        $('.textarea').wysihtml5()
                                                    </script>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{----------- -----------------------------------------------------------------------------------------------------------------}}

            {{----------- -----------------------------------------------------------------------------------------------------------------}}
            <div class="container" >

                <div class="row">

                    <div class="col-md-10" style="margin-left:-280px;">

                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <h3>BEST TIME TO VISIT</h3>
                            </div>
                            <div class="panel-body">
                                <section class="content">
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class="box box-info">
                                                <div class="box-header">
                                                    <h3 class="box-title">Specify the best time to visit and specialities in the seasons</h3><br>
                                                    <small>(Include images if you want - Image dimesion should be 800 * 448 (width * height))</small>
                                                    <div class="pull-right box-tools">
                                                        <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                                                                title="Collapse">
                                                            <i class="fa fa-minus"></i></button>
                                                        <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                                                                title="Remove">
                                                            <i class="fa fa-times"></i></button>
                                                    </div>
                                                </div>
                                                <div class="box-body pad">
                                                    <textarea id="best_time" name="best_time" rows="10" cols="80">{{ $destination->best_time }}</textarea>
                                                    <script>
                                                        // instance, using default configuration.
                                                        CKEDITOR.replace('best_time')
                                                        //bootstrap WYSIHTML5 - text editor
                                                        $('.textarea').wysihtml5()
                                                    </script>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <div class="container" >

                <div class="row">

                    <div class="col-md-10" style="margin-left:-280px;">

                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <h3>TOP THINGS TO DO(For next page )</h3>
                            </div>
                            <div class="panel-body">
                                <section class="content">
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class="box box-info">
                                                <div class="box-header">
                                                    <h3 class="box-title">Specify the best time to visit and specialities in the seasons</h3><br>
                                                    <small>(Include images if you want - Image dimesion should be 800 * 448 (width * height))</small>
                                                    <div class="pull-right box-tools">
                                                        <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                                                                title="Collapse">
                                                            <i class="fa fa-minus"></i></button>
                                                        <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                                                                title="Remove">
                                                            <i class="fa fa-times"></i></button>
                                                    </div>
                                                </div>
                                                <div class="box-body pad">
                                                    <textarea id="top_things_to_do" name="top_things_to_do" rows="10" cols="80">
                                                            {{ $destination->top_things_to_do }}
                                                    </textarea>
                                                    <script>
                                                        CKEDITOR.replace('top_things_to_do')
                                                        $('.textarea').wysihtml5()
                                                    </script>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{----------- -----------------------------------------------------------------------------------------------------------------}}

            <button type="submit" class="btn btn-block btn-primary" style="width:150px;">Update</button><br>
        </form>
    </div>

    </div>

@stop
@section('javascript')

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.0/jquery-ui.js"></script>


    <script>
        onload =function(){
            var ele = document.querySelectorAll('#current_temperature')[0];
            ele.onkeypress = function(e) {
                if(isNaN(this.value+""+String.fromCharCode(e.charCode)))
                    return false;
            }
            ele.onpaste = function(e){
                e.preventDefault();
            }
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
