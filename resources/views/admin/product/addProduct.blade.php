
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
label
{
	float: left;
	margin-left: 5px;
}
.image_styl{
	float: left;
    margin-left: -90px;
}
.image_styl2{
	float: left;
    margin-left: -145px;
}
#bestseller{
float: left;
    margin-left: 10px;
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
                                    <h3>PRODUCT</h3>
                                </div>
                                <div class="panel-body">
                                    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                                            {{ csrf_field()}}
                                        <table>

                                            <tr>

                                              <br>

                                                    <div class="row">
                                                    
                                                    <div class="col-md-12">
													<label>Title</label>
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
                                                    
                                                    <div class="col-md-12">
													<label>Job Title</label>
													<input type="text" class="form-control" name="job_title" id="title" required>
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
													<label>Description</label>
													<textarea id="limitdiv" rows="3" class="form-control" name="description" id="limit" required></textarea>
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
													<label>Price</label>
													<input type="text" id="limitdiv" class="form-control" name="price" id="limit" required>
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
													<label>Actual Price</label>
													<input type="text" id="limitdiv" class="form-control" name="actual_price" id="limit" required>
                                                        @if ($errors->has('limit'))
                                                            <span class="help-block">
                                                    <strong>{{ $errors->first('limit') }}</strong>
                                                    </span>
                                                        @endif
                                                    </div>
                                                   </div>
												   <br>
												    <!--<div class="row ">
													
                                                    <div class="col-md-12">
                                                    <label>Whatsapp Number</label>
													<input type="text" id="limitdiv" class="form-control" name="whatsapp_number" id="limit" required>
                                                        @if ($errors->has('limit'))
                                                            <span class="help-block">
                                                    <strong>{{ $errors->first('limit') }}</strong>
                                                    </span>
                                                        @endif
                                                    </div>
                                                   </div>-->
												   <br>
												   <div class="panel">
												   <div><button class="btn btn-success specification_click">+</button></div><br>
												    <div class="row">
													
                                                    <div class="col-md-6"> <label>Specification Name </label> </div>
                                                   
                                                    <div class="col-md-6"> <label>Specification Value </label> </div>
                                                   </div>
												   
												   <div class="row specific">
													
													
                                                    <div class="col-md-6"> <input placeholder="Specification Name :" type="text"  class="form-control" name="specification_name[]"  required>
                                                        @if ($errors->has('limit'))
                                                            <span class="help-block">
                                                    <strong>{{ $errors->first('limit') }}</strong>
                                                    </span>
                                                        @endif
                                                    </div>
                                                   
												  
													
													
                                                    <div class="col-md-6"> <input type="text" placeholder="Specification Value :"  class="form-control" name="specification_value[]"  required>
                                                        @if ($errors->has('limit'))
                                                            <span class="help-block">
                                                    <strong>{{ $errors->first('limit') }}</strong>
                                                    </span>
                                                        @endif
                                                    </div>
                                                   </div>
												   
												   <div class="append_specification"></div>
												   
												   
												   
												   </div>
												   
												   <br>
												   
												   
												    <div class="row">
													
                                                    <div class="col-md-12">
                                                    <label>Upload Image</label><br>
													<input type="file"  name="image" id="file" class="image_styl"   required>
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
                                                    <label>Product Category</label>													
													<select name="category_id" id="cars" class="form-control">
													<option value="">Select Category</option>
													@foreach($productcategory as $value)
													  <option value="{{$value->id}}">{{$value->title}}</option>
													  @endforeach
													</select>
                                                        @if($errors->has('limit'))
                                                            <span class="help-block">
                                                    <strong>{{ $errors->first('limit') }}</strong>
                                                    </span>
                                                        @endif
                                                    </div>
                                                   </div>
												    <br>
												    <div class="row">
													
                                                    <div class="col-md-12">
                                                    <label>Product Brands</label>													
													<select name="brand_id" id="cars" class="form-control">
													<option value="">Select Brands</option>
													@foreach($productbrands as $value)
													  <option value="{{$value->id}}">{{$value->name}}</option>
													  @endforeach
													</select>
                                                        @if($errors->has('limit'))
                                                            <span class="help-block">
                                                    <strong>{{ $errors->first('limit') }}</strong>
                                                    </span>
                                                        @endif
                                                    </div>
                                                   </div>
									               <br>
						                           <div class="row">
													
                                                    <div class="col-md-12">
       													<label>Upload Multiple Image</label>	<br>
													<input type="file" name="image_names[]" class="upload_multi_image image_styl2"   >
				                                    @if ($errors->has('limit'))
                                                            <span class="help-block">
                                                    <strong>{{ $errors->first('limit') }}</strong>
                                                    </span>
                                                        @endif
                                                    </div>
													<div class="row appendpanel"></div>
                                                   </div>
															<br>
												     <div class="row">
													
                                                    <div class="col-md-12"> 
													<input type="checkbox" id="bestseller" name="bestseller" value="1">
													<label>Best Seller</label>
													
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
			
			
			
$(document).on("change",".upload_multi_image",function(event){			 
				
              //   event.preventDefault();
			  $(".gif_loader").show();
			  
			  var file, img;
			   $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
  $(".errormultipleimage").html("");
    if ((file = this.files[0])) {
        
           
          
			
			$(".gif_loader").show();
                  $form = $("#w0");  
                  var action="{{ route('product.imageupload') }}";
                        var fd = new FormData();
                      
                       $.each($(".upload_multi_image")[0].files, function(i, file) {
                                fd.append("cv[]", file);
								
							
                                
                            });
							
                    	
                            $.ajax({ 
                                url: action,  
                                type: "POST",
                                data: fd,
                                 dataType: "json",
                                success:function(data){ 
								$("btnshow").show();
								
										$("#spanUploadFile").hide();
                                        $(".gif_loader").hide();
										$.each(data.data, function(index,item) {
                                                        	
															$(".appendpanel").append('<div class="col-md-4 deleted_sec"><img width="250" class="del_img" style="padding: 10px;" src="/public/uploads/'+item+'"><input type="hidden" class="image_name" name="image_name[]" value="'+item+'" /><button class="btn btns btn-danger delete_btn"><i class="fa fa-trash"></i></button> </div>');  
																
												$(".image_name").html(item);
                                    
											});
											    
                                },
								error: function (data) {
											$("btnshow").show();
									},
                                cache: false,
                                contentType: false,
                                processData: false
                            });
			 
			
       
		
		
       
	}

	
	
	
                    });	
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
			
			$(document).on('click', '.delete_btn', function () {
                                                        
          $(this).closest('.deleted_sec').remove();
      });  	
				
            </script>

            @endsection