
<!-------------------------------------------------------------------------------------------------------------------------->

<!-------------------------------------------------------------------------------------------------------------------------->

@extends('layouts.app')

<style>

tr.spaceUnder>td {
      padding-bottom: 1em;
  }
.specific
{
	    margin-top: 10px;
}
.kolorPicker
{
	width: 100% !important;
    height: 30px !important;
}
#kolorPicker {
    margin-left: 100px;
    margin-top: 40px;
	z-index : 999;
}
div.kolorpicker-palette ul li
{
	padding-bottom: 14px !important;
}
div.x-close-box
{
padding-bottom: 15px !important;
}
label
{
	float: left;
	margin-left: 5px;
}
</style>

@section('content')
    <br><br>
    <div class="row">

        <div class="register-box">
            {{ csrf_field()}}

            @include('flash::message')

            <center> <div class="container" >

                    <div class="row" style="margin-left:-343px;">

                        <div class="col-md-8">

                            <div class="panel panel-default">

                                <div class="panel-heading">
                                    <h3>Theme Colors</h3>
                                </div>
                                <div class="panel-body">
                                    <form action="{{route('themecolors.store')}}" method="post" enctype="multipart/form-data">
                                            {{ csrf_field()}}
                                        <table>

                                            <tr>

                                              <br>

                                                    <div class="row">
                                                   
                                                    <div class="col-md-12"> 
													<label>Header Color</label>
													<input type="text" class=" kolorPicker" name="header_color" id="header_color" required>
                                                        @if ($errors->has('title'))
                                                            <span class="help-block">
                                                    <strong>{{ $errors->first('title') }}</strong>
                                                    </span>
                                                        @endif
                                                    </div>
													</div>
													<br>
													<div class="row">
                                                   
                                                    <div class="col-md-12"> 
													<label>Footer Color</label>
													<input type="text" class="form-control kolorPicker" name="footer_color" id="footer_color" required>
                                                        @if ($errors->has('title'))
                                                            <span class="help-block">
                                                    <strong>{{ $errors->first('title') }}</strong>
                                                    </span>
                                                        @endif
                                                    </div>
													</div>
													
                                                  <br>
                                                  <div class="row">
													
                                                    <div class="col-md-12">
													<label>Body Color</label>
													<input type="text" id="body_color" class="form-control kolorPicker" name="body_color"  required>
                                                        @if ($errors->has('limit'))
                                                            <span class="help-block">
                                                    <strong>{{ $errors->first('limit') }}</strong>
                                                    </span>
                                                        @endif
                                                    </div>
                                                   </div>
												   <br>
												   <div class="row">
													
                                                    <div class="col-md-12">
													<label>Sticky Header</label>
													<input type="text" id="sticky_header" class="form-control kolorPicker" name="sticky_header"  required>
                                                        @if ($errors->has('limit'))
                                                            <span class="help-block">
                                                    <strong>{{ $errors->first('limit') }}</strong>
                                                    </span>
                                                        @endif
                                                    </div>
                                                   </div>
												   <br>
												    <div class="row ">
													
                                                    <div class="col-md-12">
													<label>Header Text Color</label>
													<input type="text" id="header_text_color" class="form-control kolorPicker" name="header_text_color"  required>
                                                        @if ($errors->has('limit'))
                                                            <span class="help-block">
                                                    <strong>{{ $errors->first('limit') }}</strong>
                                                    </span>
                                                        @endif
                                                    </div>
                                                   </div>
												  
												 
												    <br><br>
                                                 <div class="row">
                                       
                                        <div class="col-md-12"><button type="submit" class="btn btn-primary btn-block btn-flat">Save</button>
                                        </div>
                                    </div>


                                            </tr>

                                        </table>
                                    </form><br><br>
                                   

                                </div>



                            </div>

                        </div>
                    </div>
                </div>
            </center>

        </div>
    </div>


        @stop
        @section('javascript')
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script>
                $(document).ready(function() {
                    $( "#name" ).keypress(function(e) {
                        var key = e.keyCode;
                        if (key >= 48 && key <= 57) {
                            e.preventDefault();
                        }
                    });
					
					function setLimit() 
	{
		 $("#limitdiv").toggle();
	}
                });
				
				
$(document).on('click', '.specification_click', function (event) {
	event.preventDefault();
    $(".append_specification").append('<div class="row specific"><div class="col-md-6"> <input placeholder="Specification Name :" type="text"  class="form-control" name="specification_name[]"  required></div><div class="col-md-6"> <input type="text" placeholder="Specification Value :"  class="form-control" name="specification_value[]"  required></div> </div>');
});
				
				
            </script>

            @endsection