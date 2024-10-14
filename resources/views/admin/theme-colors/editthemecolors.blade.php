
@extends('layouts.app')
@section('content')
    <style>

        tr.spaceUnder>td {
            padding-bottom: 1em;
        }
.specific
{
	    margin-top: 10px;
}
label
{
	float: left;
	margin-left: 5px !important;
}
    </style>
    <div class="row">

    <div class="register-box">
        <form action="{{route('themecolors.update')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field()}}

            @include('flash::message')

            <center> <div class="container" >

                    <div class="row" style="margin-left:-343px;">

                        <div class="col-md-8">

                            <div class="panel panel-default">

                                <div class="panel-heading">
                                    <h3>Edit Theme Colors</h3>
                                </div>
                                <div class="panel-body">

                                    <table>
<tr>

                                              <br>

                                                    <div class="row">
                                                    
													<input type="hidden" class="form-control" name="id" id="id" value="{{$edittheme->id}}" required>
                                                    <div class="col-md-12"> 
													<label>Header Color</label>
													<input type="text" class="form-control" name="header_color" id="header_color" value="{{$edittheme->header_color}}" required>
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
													<input type="text" class="form-control" name="footer_color" id="footer_color" value="{{$edittheme->footer_color}}" required>
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
													<input type="text" id="body_color" class="form-control" name="body_color" value="{{$edittheme->body_color}}"  required>
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
													<input type="text" id="sticky_header" class="form-control" name="sticky_header"  value="{{$edittheme->sticky_header}}" required>
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
													<label>Sticky Header</label>
													<input type="text" id="header_text_color" class="form-control" name="header_text_color" value="{{$edittheme->header_text_color}}" required>
                                                        @if ($errors->has('limit'))
                                                            <span class="help-block">
                                                    <strong>{{ $errors->first('limit') }}</strong>
                                                    </span>
                                                        @endif
                                                    </div>
                                                   </div>
												  
												 
				

                                            </tr>

                                    </table><br><br>
                                    <div class="row">
                                       
                                        <div class="col-md-12"><button type="submit" class="btn btn-primary btn-block btn-flat">Save</button>
                                        </div>
                                    </div>

                                </div>



                            </div>

                        </div>
                    </div>
                </div>
            </center>
        </form>
    </div>
    </div>
@stop
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
$(document).on('click', '.specification_click', function (event) {
	event.preventDefault();
    $(".append_specification").append('<div class="row specific"><div class="col-md-6"> <input placeholder="Specification Name :" type="text"  class="form-control" name="specification_name[]"  required></div><div class="col-md-6"> <input type="text" placeholder="Specification Value :"  class="form-control" name="specification_value[]"  required></div> </div>');
});
		
    </script>

@endsection
