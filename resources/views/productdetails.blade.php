
 @include('includes.header')
 <style>
 @media only screen and (max-width: 600px){
iframe {
    width: 290px !important;
}
}
.whatsapp {
    width: 27% !important;
	
}
.contact_me_whatapp
{
	position: absolute;
}
.mobile_whatsapp
{
	display:none;
}
@media only screen and (max-width: 600px) {
	
.web_whatsapp
{
	display:none !important;
	
}
.mobile_whatsapp
{
	display:inline !important;
	
}
}
.contact_me_whatapp
{
	color:#fff !important;
}
.quickview__cart--btn
{
	width: 175px;
}
.whatsapp_product {
    width: 25% !important;
}
.contact_me_whatapp_product
{
	position: absolute;
}
.mobile_whatsapp_product
{
	display:none;
}
@media only screen and (max-width: 600px) {

.contact_me_whatapps
{
	display:block;
	    margin-top: -41px;
    margin-left: 36px;
}
.mobile_whatsapp .whatsapps {
    width: 41% !important;
	margin-left: -22px;
}
.mobile_whatsapp_product
{
	    padding-top: 8px;
    padding-bottom: 10px;
}
.whatsapp_product {
    width: 63% !important;
}
.contact_me_whatapp_product
{
	display:none !important; 
}
.web_whatsapp_product
{
	display:none !important;
	
}
.mobile_whatsapp_product
{
	display:inline !important;
	
}
}
.contact_me_whatapp_product
{
	color:#000 !important;
	margin-left: 7px;
	
}
</style>
<style>
.product-tab
{
   margin: 0;
    padding: 0;
    border: 0;
   
    font: inherit;
    vertical-align: baseline;
    outline: none;
	}

.tab {
    margin-bottom: 30px;
    margin-top: 20px;
}
.main-ul {
    background: #4c4c4c none repeat scroll 0 0;
    overflow: hidden;
    width: 100%;
}
ul {
    list-style: none;
	 margin: 0;
    padding: 0;
    border: 0;
   
    font: inherit;
    vertical-align: baseline;
    outline: none;
}
.tab ul li {
    color: #999999;
    cursor: pointer;
    float: left;
    font-size: 14px;
    margin-right: 0;
    padding: 13px 20px;
    text-transform: uppercase;
    border-right: 1px solid #555555;
}
li,tbody {
    display: inline-block;
	 list-style: none;
	 margin: 0;
    padding: 0;
    border: 0;
   
    font: inherit;
    vertical-align: baseline;
    outline: none;
}
.tab ul li.active {
    color: #FFF;
}
.tab-container {
    background: #fff none repeat scroll 0 0;
    color: #1f1f1f;
    font-size: 12px;
    line-height: 20px;
    padding: 14px;
    clear: both;
}
.respon {
    background: #fceacb none repeat scroll 0 0;
    border-bottom: 1px solid #f1ce9a;
    box-sizing: border-box;
    display: none;
    padding: 8px;
    position: relative;
}
table {
    border-collapse: collapse;
    border-spacing: 0;
}
.specification-table tr:first-child {
    background: #f5f5f5;
}
.specification-table tr td:first-child {
    text-transform: uppercase;
    color: #000;
}
.specification-table td {
    border: 1px solid #e5e5e5;
    padding: 10px 18px;
   
}
.callnumber{
	width: 32px;
}
.callnumbers{
	width: 70px;
}
.callnumber_span

{
	color: #fff;
    margin-left: 10px;
}
.specif_row
{
	border: 1px solid gray;
}
.specif_td
{
	border: 1px solid gray;
	padding: 8px;
}

.callnumber_call
{
    width: 152%;
}
.fa-arrow-left,.fa-arrow-right
{
	color: white;
    margin-left: 10px;
}
.image_sizeer
{
	width: 315px !important;
}
</style>
@php
$servername= request()->getHttpHost();
$img= 'http://'.$servername.'/public/uploads/whatsapp.png';
$call= 'http://'.$servername.'/public/uploads/dock-phone-pictures-26.png';
$product_single_banner = 'http://'.$servername.'/public/uploads/'.$product_single_banner->image;
$call_number = App\Http\Controllers\HomeController::getcallnumber();
$whatsapp_number = App\Http\Controllers\HomeController::getwhatsappnumber();	
@endphp
 <main class="main__content_wrapper">
        
        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg" style="background: url({{$product_single_banner}});background-repeat: no-repeat;background-size: cover;">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title text-white mb-25">Product Details</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.html">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span class="text-white">Product Details</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- Start product details section -->
        <section class="product__details--section section--padding">
            <div class="container">
                <div class="row row-cols-lg-2 row-cols-md-2">
                    <div class="col">
                        <div class="product__details--media">
                            <div class="product__media--preview  image_sizeer swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="product__media--preview__items ">
										<?php
										$servername= request()->getHttpHost();
									    $single_imgs = 'http://'.$servername.'/public/uploads/'.$single_product->image;
									
										?>
                                            <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="{{$single_imgs}}"><img class="product__media--preview__items--img" src="{{ $single_imgs}}" alt="product-media-img"></a>
                                            <div class="product__media--view__icon">
                                                <a class="product__media--view__icon--link glightbox" href="{{$single_imgs}}" data-gallery="product-media-preview">
                                                    <svg class="product__media--view__icon--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
									<?php
									foreach ($multiple_image as $value){
									
										$multiple_images = 'http://'.$servername.'/public/uploads/'.$value->image;
									
									?>
                                    <div class="swiper-slide">
                                        <div class="product__media--preview__items">
                                            <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="{{$multiple_images}}"><img class="product__media--preview__items--img" src="{{$multiple_images}}" alt="product-media-img"></a>
                                            <div class="product__media--view__icon">
                                                <a class="product__media--view__icon--link glightbox" href="{{$multiple_images}}" data-gallery="product-media-preview">
                                                    <svg class="product__media--view__icon--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                  <?php
									}
								  ?>
                                </div>
                            </div>
                            <div class="product__media--nav swiper">
                                <div class="swiper-wrapper">
								<?php
								foreach ($multiple_image as $values){
									
										$multiple_images = 'http://'.$servername.'/public/uploads/'.$values->image;
									
									?>
                                    <div class="swiper-slide">
                                        <div class="product__media--nav__items">
                                            <img class="product__media--nav__items--img" src="{{$multiple_images}}" alt="product-nav-img">
                                        </div>
                                    </div>
                                 <?php
								}
								 ?>
                                </div>
                                <div class="swiper__nav--btn swiper-button-next"><i class="fa fa-arrow-right" aria-hidden="true"></i></div>
                                <div class="swiper__nav--btn swiper-button-prev"><i class="fa fa-arrow-left" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>   
                    <div class="col">
                        <div class="product__details--info">
                            <form action="#">
                                <h2 class="product__details--info__title mb-15">{{$single_product->title}}</h2>
                                <!--<div class="product__details--info__price mb-10">
								<?php //if(is_numeric($single_product->actual_price) && is_numeric($single_product->price)){ ?>	
	
                                    <span class="current__price">₹{{$single_product->price}}</span>
                                    <span class="price__divided"></span>
                                    <span class="old__price">₹{{$single_product->actual_price}}</span>
									
									<?php
						  //}
						 // else
						 // {
							?>
	                        <span class="current__price">{{$single_product->price}}</span>
                                    <span class="price__divided"></span>
                                     <span class="current__price">{{$single_product->actual_price}}</span>
                                	<?php
						 // }
						  ?>
								</div>-->
                               
                                <p class="product__details--info__desc mb-15">{{$single_product->description}}</p>
                                <div class="product__variant">
                                   
                                   
                                    <div class="product__variant--list quantity d-flex align-items-center mb-20">
									
									 <span class="quickview__cart--btn primary__btn"><a class="variant__wishlist--icon mb-15" href="tel:{{$call_number}}" >
                                            <img class="callnumber" src="{{$call}}"><span class="callnumber_span">Call me</span>
                                                    
                                        </a>
                                    </span>
									
									  <span class="quickview__cart--btn primary__btn"> 
									  <a class="web_whatsapp" href="https://web.whatsapp.com/send?phone={{$common_whatsapp->title}}&text=Hi, I am interested in this product. Please send me the details.&app_absent=0">
                                                        <img class="whatsapp whatsapps" src="{{$img}}"><span class="contact_me_whatapp contact_me_whatapps">Contact me</span>
                                                    </a>
													
													 <a class="mobile_whatsapp" href="https://wa.me/{{$common_whatsapp->title}}?text=Hi, I am interested in this product. Please send me the details.">
                                                        <img class="whatsapp whatsapps" src="{{$img}}"><span class="contact_me_whatapp contact_me_whatapps">Contact me</span>
                                                    </a>
                                    </span>

                                       
                                    </div>
                                    
                                   
                                </div>
                                <div class="quickview__social d-flex align-items-center mb-15">
                                    <label class="quickview__social--title">Social Share:</label>
                                    <ul class="quickview__social--wrapper mt-0 d-flex">
									@foreach ($socialicons as $value)

                                        <li class="quickview__social--list">
                                            <a class="quickview__social--icon" target="_blank" href="{{$value->title}}">
                                               <i class="{{$value->job_title}}"></i>
                                                <span class="visually-hidden">Facebook</span>
                                            </a>
                                        </li>
                                       @endforeach
                                    </ul>
                                </div>
								
								<div class="product-tab">
                    	<div class="tab">

  <ul class="main-ul">
   
    <li class="active">Specifications</li>
    
  </ul>
  <div class="tab-container">
    
     <div class="respon"><span class="span"></span>Specifications  </div><div class="contant s2" style="display: block;">
   <div class="specification-table">
   		

 @foreach ($specifications as $value)
		<div width="100%"  class="row panel">			
 
 <div class="col-md-4 col-6 specif_td"><strong>{{$value->spacification_name}}</strong></div>
 <div class="col-md-8 col-6 specif_td">{{$value->spacification_value}}</div>
 
</div>
 @endforeach
 

        </div>
    
    
    
    
    </div>
    
    
</div>
</div>
                    
                    
                    </div>
                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End product details section -->

        
        
       <!-- Start product section 
        <section class="product__section product__section--style3 section--padding">
            <div class="container product3__section--container">
                <div class="section__heading text-center mb-50">
                    <h2 class="section__heading--maintitle">You may also like</h2>
                </div>
                <div class="product__section--inner product__swiper--column4__activation swiper">
                    <div class="swiper-wrapper">
					<?php
						$count=1;
						?>
					@foreach ($product as $value)
					
									
                        <div class="swiper-slide">
                            <div class="product__items">
                                <div class="product__items--thumbnail">
                                    <a class="product__items--link" href="{{route('home.productdetails', ['id' => $value->id])}}">
									<?php
									$servername= request()->getHttpHost();
									$imgs = 'http://'.$servername.'/public/uploads/'.$value->image;
									?>
                                        <img class="product__items--img product__primary--img" src="{{$imgs}}" alt="product-img">
                                        <img class="product__items--img product__secondary--img" src="{{$imgs}}" alt="product-img">
                                    </a>
                                    <div class="product__badge">
                                        <span class="product__badge--items sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product__items--content">
                                    <span class="product__items--content__subtitle">{{ $value->job_title}}</span>
                                    <h3 class="product__items--content__title h4"><a href="{{route('home.productdetails', ['id' => $value->id])}}">{{ $value->title}}</a></h3>
                                    <div class="product__items--price">
									<?php //if(is_numeric($value->actual_price) && is_numeric($value->price)){ ?>	
	
                                        <span class="current__price">₹{{$value->price}}</span>
                                        <span class="price__divided"></span>
                                        <span class="old__price">₹{{$value->actual_price}}</span>
										<?php
									  //}
									  //else
									 // {
										?>
										 <span class="current__price">{{$value->price}}</span>
                                        <span class="price__divided"></span>
                                        <span class="current__price">{{$value->actual_price}}</span>
										<?php
									  //}
									  ?>
                                    </div>
                  
                                    <ul class="product__items--action d-flex">
                                        <li class="product__items--action__list">
										<?php
										$img_whatsapp ='http://'.$servername.'/public/uploads/whatsapp.png';
										?>
                                            <a class="product__items--action__btn web_whatsapp_product" href="https://web.whatsapp.com/send?phone={{$whatsapp_number}}&text=Hi, I am interested in this product. Please send me the details.&app_absent=0">
                                                        <img class="whatsapp_product" src="{{$img_whatsapp}}"><span class="contact_me_whatapp_product">contact me</span>
                                                    </a>
													
													 <a class="product__items--action__btn mobile_whatsapp_product" href="https://wa.me/{{$whatsapp_number}}?text=Hi, I am interested in this product. Please send me the details.">
                                                        <img class="whatsapp_product" src="{{$img_whatsapp}}"><span class="contact_me_whatapp_product">contact me</span>
                                                    </a>
                                        </li>
                                         <li class="product__items--action__list call_number_li">
                                                    <a class="product__items--action__btn" href="tel:{{$call_number}}">
                                                    <img class="callnumber callnumbers" src="{{$call}}">
                                             
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal{{$count}}" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                        	

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
	 <img class="product__media--preview__items--img" width="350" src="public/uploads/{{ $value->image}}" alt="product-media-img"> 
	                                    
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
	                            
		 <p class="product__details--info__desc mb-15">{{$value->description}}</p>         
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
	   
	      
	   
                                    </ul>
                                </div>
                            </div>
                        </div>
							<?php
						$count++;
						?>
                       @endforeach
                    </div>
                    <div class="swiper__nav--btn swiper-button-next"></div>
                    <div class="swiper__nav--btn swiper-button-prev"></div>
                </div>
            </div>
        </section>
        <!-- End product section -->

       
    </main>

 @include('includes.footer')