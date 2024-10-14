
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
.image_show
{
	width:220px;
	padding: 10px;
}
    </style>
    <div class="row">

    <div class="register-box">
        <form action="{{route('product.update')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field()}}

            @include('flash::message')

            <center> <div class="container" >

                    <div class="row" style="margin-left:-343px;">

                        <div class="col-md-8">

                            <div class="panel panel-default">

                                <div class="panel-heading">
                                    <h3>Edit Product</h3>
                                </div>
                                <div class="panel-body">

                                    <table>

                                  <tr>

                                              <br>
											  
  
                                                      
                                                    <div class="row">
                                                   
                                                    <div class="col-md-12"> 
													<label>Title</label>
													     <input type="hidden" class="form-control" name="id" id="id" value="{{$editproduct->id}}" required>
													<input type="text" class="form-control" name="title" id="title" value="{{$editproduct->title}}" required>
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
													<input type="text" class="form-control" value="{{$editproduct->job_title}}" name="job_title" id="title" required>
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
													<textarea id="limitdiv" rows="3" value="{{$editproduct->description}}" class="form-control" name="description" id="limit" required>{{$editproduct->description}}</textarea>
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
													<input type="text" id="limitdiv" class="form-control" value="{{$editproduct->price}}" name="price" id="limit" required>
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
													<input type="text" id="limitdiv" class="form-control" name="actual_price" value="{{$editproduct->actual_price}}" id="limit" required>
                                                        @if ($errors->has('limit'))
                                                            <span class="help-block">
                                                    <strong>{{ $errors->first('limit') }}</strong>
                                                    </span>
                                                        @endif
                                                    </div>
                                                   </div>
												   <br>
												  
												   <div class="panel">
												   <div><button class="btn btn-success specification_click">+</button></div>
												    <div class="row">
													
                                                    <div class="col-md-6"> Specification Name : </div>
                                                   
                                                    <div class="col-md-6">Specification Value : </div>
                                                   </div>
												   @foreach($specification_edit as $value)
												   <div class="row specific">
													
													
                                                    <div class="col-md-6"> <input placeholder="Specification Name :" type="text"  class="form-control" name="specification_name[]" value="{{$value->spacification_name}}" required>
                                                        @if ($errors->has('limit'))
                                                            <span class="help-block">
                                                    <strong>{{ $errors->first('limit') }}</strong>
                                                    </span>
                                                        @endif
                                                    </div>
                                                   
												  
													
													
                                                    <div class="col-md-6"> <input type="text" placeholder="Specification Value :"  class="form-control" name="specification_value[]" value="{{$value->spacification_value}}" required>
                                                        @if ($errors->has('limit'))
                                                            <span class="help-block">
                                                    <strong>{{ $errors->first('limit') }}</strong>
                                                    </span>
                                                        @endif
                                                    </div>
                                                   </div>
												   @endforeach
												   <div class="append_specification"></div>
												   
												   
												   
												   </div>
												   <br>
												    <div class="row">
													
                                                    <div class="col-md-12"> 
													<label>Upload Image</label><br>
													<input type="file"  name="image" class="image_styl"  id="file">
													<input type="hidden"  name="hiddenimage"  value="{{$editproduct->image}}" >
													<?php
													$servername= request()->getHttpHost();
													$img= 'http://'.$servername.'/public/uploads/'.$editproduct->image;
													 $image = trim(str_replace('SRL','',$img));
													 ?>
													<img  src="{{$image}}" alt="produt_image" style="width: 315px;">
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
                                                      <label>Select Category</label>													
													<select name="category_id" id="cars" class="form-control">
													@foreach($productcategory as $value)
													  <option  value="{{$value->id}}" {{ ( $value->id == $editproduct->category_id) ? 'selected' : '' }}>{{$value->title}}</option>
													  @endforeach
													</select>
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
                                                      <label>Select Brands</label>													
													<select name="brand_id" id="cars" class="form-control">
													@foreach($productbrands as $value)
													  <option  value="{{$value->id}}" {{ ( $value->id == $editproduct->brand_id) ? 'selected' : '' }}>{{$value->name}}</option>
													  @endforeach
													</select>
                                                        @if ($errors->has('limit'))
                                                            <span class="help-block">
                                                    <strong>{{ $errors->first('limit') }}</strong>
                                                    </span>
                                                        @endif
                                                    </div>
                                                   </div>
												    <br>
														<div class="">
													<div class="row">
                                                    <div class="col-md-12"> 
													 <label>Upload Multiple Image</label>	<br>
													<input type="file" name="image_names[]" class="upload_multi_image image_styl2"   >
				                                     </div>
													 
					                                 <div class="row appendpanel" >
                                                      <?php
													$servername= request()->getHttpHost();
													foreach( $multi_img as $values){
														$img= 'http://'.$servername.'/public/uploads/'.$values->image;
													 $image = trim(str_replace('SRL','',$img));
													 
													 ?>
													 <div class="col-md-4">
													
													<img  src="{{$image}}" alt="produt_image" class="image_show">
													<input type="hidden" class="image_name" name="image_name[]" value="{{$values->image}}" />
					                                 
													 <button class="btn btns btn-danger delete_btn"><i class="fa fa-trash"></i></button> 
													</div>
													<?php
													
													 }
													 ?>
													 </div>
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
													<input type="checkbox" id="bestseller" name="bestseller" value="1">
													<label>Best Seller</label>
													
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
                                      
                                        <div class="col-md-12"> <button type="submit" class="btn btn-primary btn-block btn-flat">Save</button> 
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
                                                        	
															$(".appendpanel").append('<div class="col-md-4"><img width="250" class="del_img" style="padding: 10px;" src="/public/uploads/'+item+'"><input type="hidden" class="image_name" name="image_name[]" value="'+item+'" /><button class="btn btns btn-danger delete_btn"><i class="fa fa-trash"></i></button> </div>');  
																
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
		
	
$(document).on("click",".delete_btn",function(event){
	event.preventDefault();
	
	 $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
	$(this).parent().remove();
	 
	var image_multi=$(this).closest(".col-md-4").find(".image_name").val();
	
	 var action="{{ route('product.deleteimg') }}";
	   $.ajax({
			type : "POST",
			url : action,
			   dataType: "json",
			data : {
				
				image_multi:image_multi,
				
			},
			success : function(response) {
				
		
			}
		});	
				
	
	
	});	
    </script>

@endsection
