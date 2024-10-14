@include('includes.header')
<style>.widget__categories--sub__menu--img{	width:50px;}.whatsapp {    width: 27% !important;}.contact_me_whatapp{	position: absolute;}.mobile_whatsapp{	display:none;}@media only screen and (max-width: 600px) {	.web_whatsapp{	display:none !important;	}.mobile_whatsapp{	display:inline !important;	}.call_number_li{width: 107px;margin-right: 10px;}}.contact_me_whatapp{	color:#000 !important;margin-left: 7px;}

.call_number_li
{
    width: 107px;
}
.callnumber
{
    width: 152%;
}
.qick_link
{
	color:#fff !important;
}
.mobile_whatsapp
{
padding-top: 6px !important;
    padding-bottom: 10px !important;
}
@media only screen and (max-width: 600px){
iframe {
    width: 290px !important;
}
}
</style> 
<?php
$servername= request()->getHttpHost();
$call_number = App\Http\Controllers\HomeController::getcallnumber();
$call= 'http://'.$servername.'/public/uploads/dock-phone-pictures-26.png';
$product_banner = 'http://'.$servername.'/public/uploads/'.$product_banner->image;
?>


<main class="main__content_wrapper">            
    <!-- Start breadcrumb section -->      
	<section class="breadcrumb__section breadcrumb__bg" style="background: url({{$product_banner}});background-repeat: no-repeat;background-size: cover;">            
	<div class="container">               
	<div class="row row-cols-1">                   
	<div class="col">                      
	<div class="breadcrumb__content text-center"> 
	<h1 class="breadcrumb__content--title text-white mb-25">Shop Product</h1> 
	
	
                      </div>                
	  </div>             
	 </div>           
	  </div>       
	  </section>      
  <!-- End breadcrumb section -->      
  <!-- Start shop section -->      
<section class="shop__section section--padding">  
<div class="container-fluid">           
   <div class="row">   
   <div class="col-xl-3 col-lg-4">                      
   <div class="shop__sidebar--widget widget__area d-lg-block">                            
   <div class="single__widget widget__bg">  


 
  <?php
  if(isset($categoryproduct) && $categoryproduct!="" ){
  ?>

  <h2 class="widget__title h3">Categories</h2>                              
   
   
					 <ul class="widget__categories--menu">                                                                                  
					 
					 @foreach ($categoryproduct as $values)         

<?php $servername= request()->getHttpHost();
									
	$categoryimage = 'http://'.$servername.'/public/uploads/store.jpg';?>
	
	
    
<li class="widget__categories--menu__list">          
    <a class="widget__categories--sub__menu--link d-flex align-items-center" href="{{route('home.categoryproduct', ['id' => $values->id])}}">   
	<img class="widget__categories--sub__menu--img" src="{{$categoryimage}}" alt="categories-img">  
	<span class="widget__categories--sub__menu--text">{{$values->title}}</span>   
	</a>                                          
	</li>                                       
	@endforeach                                                      
	
</ul>
<?php
  }
  
?>
   
  
  <?php
  if(isset($brands) && $brands!="" ){
  ?>

  <h2 class="widget__title h3">Brands</h2>                              
   
   
					 <ul class="widget__categories--menu">                                                                                  
					 
					 @foreach ($brands as $values)         

<?php $servername= request()->getHttpHost();
									
	$categoryimage = 'http://'.$servername.'/public/uploads/store.jpg';?>
	
   
    
<li class="widget__categories--menu__list">          
    <a class="widget__categories--sub__menu--link d-flex align-items-center" href="{{route('home.productbrands', ['id' => $values->id])}}">   
	<img class="widget__categories--sub__menu--img" src="{{$categoryimage}}" alt="categories-img">  
	<span class="widget__categories--sub__menu--text">{{$values->name}}</span>   
	</a>                                          
	</li>                                       
	@endforeach                                                      
	
</ul>
<?php
  }
  
?>
 </div>  
  </div>                    
  </div>                   
  <div class="col-xl-9 col-lg-8">                        
  <div class="shop__product--wrapper">                            
  <div class="tab_content">                                
  <div id="product_grid" class="tab_pane active show">                                    
  <div class="product__section--inner product__grid--inner">                                        
  <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-md-3 row-cols-2 mb--n30">               
  <?php   
  $whatsapp_number = App\Http\Controllers\HomeController::getwhatsappnumber();  
  ?>	
<?php
						$count=1;
						?>  
  @foreach ($product as $value) 
  
       <?php $servername= request()->getHttpHost();
		$productimage = 'http://'.$servername.'/public/uploads/'.$value->image;
       $whatsapp_img = 'http://'.$servername.'/public/uploads/whatsapp.png';
  ?>
  

<div class="col mb-30">                                           
    <div class="product__items ">                                       
	<div class="product__items--thumbnail">                                            
	<a class="product__items--link" href="{{route('home.productdetails', ['id' => $value->id])}}">
	<img class="product__items--img product__primary--img" src="{{$productimage}}" alt="product-img">  
	<img class="product__items--img product__secondary--img" src="{{$productimage}}" alt="product-img">
	</a>                                            <div class="product__badge">     
	<span class="product__badge--items sale">Sale</span>                                            
	</div>                                       
	</div>                                        
	<div class="product__items--content">                                   
	
	<span class="product__items--content__subtitle">{{$value->job_title}}</span> 
	<h3 class="product__items--content__title h4">
	<a href="{{route('home.productdetails', ['id' => $value->id])}}">{{$value->title}}</a>
	</h3>   
   
	<!--<div class="product__items--price"> 
	<?php //if(is_numeric($value->actual_price) && is_numeric($value->price)){ ?>	
	
	<span class="current__price">₹{{$value->price}}</span>                                               
	<span class="price__divided"></span>                                                
	<span class="old__price">₹{{$value->actual_price}}</span> 
	<?php
  //}
 // else
  //{
	?>
	<span class="current__price">{{$value->price}}</span>                                               
	<span class="price__divided"></span>
    <span class="current__price">{{$value->actual_price}}</span> 
<?php
  //}
?>  
	</div> -->  


	  <ul class="product__items--action d-flex">                                                 
	  <li class="product__items--action__list">                                            
	  <a class="product__items--action__btn web_whatsapp" href="https://web.whatsapp.com/send?phone={{$common_whatsapp->title}} &text=Hi, I am interested in this product. Please send me the details.&app_absent=0">                                                       
	  <img class="whatsapp" src="{{$whatsapp_img}}"><span class="contact_me_whatapp">contact</span>                                                    
	  </a>																										 
	  <a class="product__items--action__btn mobile_whatsapp" href="https://wa.me/{{$common_whatsapp->title}}?text=Hi, I am interested in this product. Please send me the details.">                                                       
	  <img class="whatsapp" src="{{$whatsapp_img}}">
	  <span class="contact_me_whatapp">contact</span>                                                    
	  </a>                                        
	  </li>  
	  
    
    <li class="product__items--action__list call_number_li">
	
  <a class="product__items--action__btn" href="tel:{{$call_number}}">
  <img class="callnumber" src="{{$call}}">
              </a>
	    </li> 
		
    <li class="product__items--action__list">                                                    
	<a class="product__items--action__btn" data-open="modal{{$count}}" href="javascript:void(0)">  
	<svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="25.51" height="23.443" viewBox="0 0 512 512">
	<path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg> 
	<span class="visually-hidden">Quick View</span>
	</a>                                                
	</li>                                                                                            
	</ul> 

 <!-- Quickview Wrapper --> 

	 <div class="modal" id="modal{{$count}}" data-animation="slideInUp">       
	 <div class="modal-dialog quickview__main--wrapper">           
	 <header class="modal-header quickview__header">             
	 <button class="close-modal quickview__close--btn" aria-label="close modal" data-close>✕ </button>         
	 </header>           
	 <div class="quickview__inner">              
	 <div class="row row-cols-lg-2 row-cols-md-2">                 
	 <div class="col">                      
	 <div class="quickview__product--media product__details--media">              
	                                   
	 <div class="product__media--preview__items">                         
	 <img class="product__media--preview__items--img" width="350" src="{{$productimage}}" alt="product-media-img"> 
	                                    
	 </div>                                 
	                              
	                        
	 </div>                    
	 </div>                   
	 <div class="col">                      
	 <div class="quickview__info">                       
     <form action="#">                               
	 <h2 class="product__details--info__title mb-15">{{$value->title}}</h2>      
 
	<div class="product__details--info__price mb-10"> 
  <?php if(is_numeric($value->actual_price) && is_numeric($value->price)){ ?>	
	 <span class="current__price">₹{{$value->price}}</span>                                 
	 
	 <span class="old__price">₹{{$value->actual_price}}</span>                              
	<?php
  }
  else
  {
	?>
	<span class="current__price">{{$value->price}}</span>
    <span class="current__price">{{$value->actual_price}}</span>    	
	<?php
  }
?>	
	</div>                               
                         
		 <p class="product__details--info__desc mb-15"><?//php echo mb_strimwidth($value->description, 0, 20, "...");?>{{$value->description}}</p>         
		 <div class="product__variant">                                   
		                                 
	                  
	  <div class="quickview__variant--list quantity d-flex align-items-center mb-15"> 
	                          
	  <button class="primary__btn quickview__cart--btn" type="submit"><a class="qick_link" target="blank" href="{{route('home.productdetails', ['id' => $value->id])}}">Learn More</a> </button>      
	  </div>                                   
	                     
	  </div>                      
                         
	   </form>                      
	   </div>                    
	   </div>                
	   </div>            
	   </div>       
	   </div>   
	   </div>  
	   
	   <!-- Quickview Wrapper End -->    
	   	
	</div>                                    
	</div>                                            
	</div>   
<?php
	$count++;
	?>	
	@endforeach                                                                                
	</div>                                    
	</div>                                
	</div>                            
	</div>                                                  
	</div>                    
	</div>                
	</div>            
	</div>        
	</section>        
	<!-- End shop section -->       
	<!-- End shipping section -->    
	</main>
    @include('includes.footer')