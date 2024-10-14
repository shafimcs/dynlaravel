@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.0/jquery-ui.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.0/jquery-ui.css" />
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
    <script src="{{ asset('dashboard/bower_components/ckeditor/ckeditor.js') }}"></script>



    {{------------------------------------------------------------------------------------------------------------------------------}}
    <div class="row">
    <div class="register-box">
        <form action="{{route('destination.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field()}}

            @include('flash::message')

          <div class="container" >
            <div class="row">
                <div class="col-md-10" style="margin-left:-280px;">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>DESTINATION</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-6">Location:
                                        <select class="form-control" name="location" id="location">
                                            <option value=""> -- Choose Location -- </option>
                                            @foreach($location as $locations)
                                                <option value="{{$locations->location}}">{{$locations->location}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">Destination : <input type="text" class="form-control" name="destination" id="destination" required></div><br><br>
                                </div>
                          </div>
                            <br><br>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="lib_image_holder" style="float: right">
                                        <div id="pic" class="form-group"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="lib_image_holder" style="float: right">
                                        <div id="destination_image" class="form-group">
                                            <img id="destination_image_id" src="" alt=" no image choosen" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-6">Choose Destination Image :
                                        <div class="form-group has-feedback">
                                            <input  type="file" class="form-control" id="file" name="image" accept="image/*" onchange="readURL(this);" required>
                                        </div>
                                        <span style="color: red">[ Image dimension should be 360x182 ]</span>
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
                                    <div class="col-md-12"><h4>Best Time</h4>
                                       <div class="col-md-3">Best month(From) :
                                           <select name="best_month_from" id="best_month_from" class="form-control from" >
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
                                       <div class="col-md-3">Best month(To) :
                                           <select name="best_month_to"  class="form-control from"  id="best_month_to" >
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


                                           <div class="col-md-3"> Best day(From) :<input type="number" class="form-control" name="best_day_from" id="best_day_from" ></div>
                                           <div class="col-md-3"> Best day(To) : <input type="number" class="form-control" name="best_day_to" id="best_day_to" ></div>

                                <div class="row">
                                    <div class="col-md-12"><h4>How to Reach</h4>
                                       <div class="col-md-6">Nearest Airport :<input type="text" class="form-control" name="nearest_airport" id="nearest_airport" > </div>
                                       <div class="col-md-6">Nearest Railway Station: <input type="text" class="form-control" name="nearest_railway_station" id="nearest_railwaystation" ></div>
                                    </div>
                                </div>
                                <div class="row">
                                   <div class="col-md-12"><h4>Description</h4>
                                       <textarea type="text" class="form-control" name="description" rows="6" cols="70"></textarea>

                                   </div>
                               </div>
                                </div>
                            </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
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




   {{----------- ----------------------------------------------------------------------------}}
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
                                                    <textarea id="things_to_do" name="things_to_do" rows="10" cols="80" placeholder="Make changes on the text for fit to the image">

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
                                                    <textarea id="hotels" name="hotels" rows="10" cols="80">
                                                    </textarea>
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
                                                    <textarea id="resorts" name="resorts" rows="10" cols="80">
                                                    </textarea>
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
                                                    <textarea id="tourist_places" name="tourist_places" rows="10" cols="80">
                                                    </textarea>
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
                                                    <textarea id="how_to_reach" name="how_to_reach" rows="10" cols="80">
                                                    </textarea>
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
                                                    <textarea id="shop_at" name="shop_at" rows="10" cols="80">
                                                    </textarea>
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
                                                    <textarea id="eat_at" name="eat_at" rows="10" cols="80">
                                                    </textarea>
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
                                                    <textarea id="best_time" name="best_time" rows="10" cols="80">

                                                    </textarea>
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

                                                    </textarea>
                                                    <script>
                                                        // instance, using default configuration.
                                                        CKEDITOR.replace('top_things_to_do')
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

<button type="submit" class="btn btn-block btn-primary" style="width:150px;">Save</button><br>
</form>
    </div>

    </div>

@stop
@section('javascript')

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.0/jquery-ui.js"></script>

  <script>
      $("#location").change(function () {

          var loc = this.value;
          $.ajax({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              dataType: 'text',
              type: 'post',
              data:{location:loc},
              url: '{{ route('admin.view.location.image') }}',

              success: function (res) {
                  var obj =jQuery.parseJSON(res);
                  var url = window.location.href;
                  var arr = url.split("/");
                  var result = arr[0] + "//" + arr[2];








                 // alert();
                // var url=window.location.hostname;
                 //alert(url);
                  var img_url =result+"/storage/"+obj[0];
                //  alert(url);
$('.imageThumb1').remove();
                  $("<img></img>", {
                      class: "imageThumb1",
                      src:img_url ,
                       width: 200,
                      height: 150
                  }).insertAfter("#pic");


              }
          });


      });
  </script>

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

        $( document ).ready(function() {
            $( "#destination" ).keypress(function(e) {
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
                  $('#destination_image_id')
                      .attr('src', e.target.result)
                      .width(150)
                      .height(100);
              };
              $('#destination_image').show();
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
                      $('#destination_image').hide();
                      //$('#img_err').show();
                  }


              };

              image.src = _URL.createObjectURL(file);

          }

      });
  </script>
@endsection
