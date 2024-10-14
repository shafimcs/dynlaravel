
<!-------------------------------------------------------------------------------------------------------------------------->

<!-------------------------------------------------------------------------------------------------------------------------->

@extends('layouts.app')

<style>

    tr.spaceUnder>td {
        padding-bottom: 1em;
    }
label{	float: left;	margin-left: 5px;}
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
                                    <h3>CATEGORY POST</h3>
                                </div>
                                <div class="panel-body">
                                    <form action="{{route('categorypost.store')}}" method="post" enctype="multipart/form-data">
                                            {{ csrf_field()}}
                                        <table>

                                            <tr>

                                              <br>

                                                    <div class="row">
                                                  <div class="col-md-12">                                                    <label>Category Name</label>
                                                     <input type="text" class="form-control" name="title" id="title" required>
                                                        @if ($errors->has('title'))
                                                            <span class="help-block">
                                                    <strong>{{ $errors->first('title') }}</strong>
                                                    </span>
                                                        @endif
                                                                                                      </div>
													</div>
													<br>
													<div class="row">
													
													<div class="col-md-12">													                                                    <label>Limit</label>													
                                                    <input type="text" id="limitdiv" class="form-control" name="limit" id="limit" required>
                                                        @if ($errors->has('limit'))
                                                            <span class="help-block">
                                                    <strong>{{ $errors->first('limit') }}</strong>
                                                    </span>
                                                        @endif
                                                    </div>
                                                   </div>
                                                  <br>
                                                 <div class="row">
                                        
                                        <div class="col-md-12"> <button type="submit" class="btn btn-primary btn-block btn-flat">Save</button>  
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
                $( document ).ready(function() {
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
            </script>

            @endsection