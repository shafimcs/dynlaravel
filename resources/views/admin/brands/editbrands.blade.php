
@extends('layouts.app')
@section('content')
    <style>

        tr.spaceUnder>td {
            padding-bottom: 1em;
        }
.limit_row{	margin-top: 20px;}

label
{
	float: left;
	margin-left: 5px;
}
    </style>
    <div class="row">

    <div class="register-box">
        <form action="{{route('brands.update')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field()}}

            @include('flash::message')

            <center> <div class="container" >

                    <div class="row" style="margin-left:-343px;">

                        <div class="col-md-8">

                            <div class="panel panel-default">

                                <div class="panel-heading">
                                    <h3>EDIT BRANDS</h3>
                                </div>
                                <div class="panel-body">

                                    <table>

                                        <tr>

                                            <div class="row">
                                                <input id="id" type="text" name="id" class="form-control"  value="{{ $editbrands->id}}" style="display: none">
                                                
                                                <div class="col-md-12"> 
												<label>Name</label>
												<input type="text" class="form-control" name="name" id="name" value="{{$editbrands->name}}">
                                                  
                                                </div>


                                            </div>
                                      


                                        </tr>

                                    </table><br><br>
                                    <div class="row">
                                        
                                        <div class="col-md-12"> <button type="submit" class="btn btn-primary btn-block btn-flat">Save</center>
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
    </script>

@endsection
