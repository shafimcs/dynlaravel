
 @include('includes.header')
<style>
.swiper__nav--btn::after {
    background: url(/uploads/suruchi/left-arrow-angle.png);
}
.swiper__nav--btn.swiper-button-next::after {
    background: url(/uploads/suruchi/right-arrow-angle.png);
}
.whatsapp {
    width: 26% !important;
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
	color:#000 !important;
	margin-left: 7px;
}
.call_number_li
{
    width: 107px;
	margin-right: 10px;
}
.callnumber
{
    width: 152%;
}
.qick_link
{
	color:#fff !important;
}
@media only screen and (max-width: 600px){
iframe {
    width: 290px !important;
}
}
</style>
<?php
$servername= request()->getHttpHost();
$whatsapp_number = App\Http\Controllers\HomeController::getwhatsappnumber();
$call_number = App\Http\Controllers\HomeController::getcallnumber();
$call= 'http://'.$servername.'/uploads/dock-phone-pictures-26.png';
//print_r($bestseller);exit;
?>
    <main class="main__content_wrapper">
        <!-- Start slider section -->
        <section class="hero__slider--section">
            <div class="hero__slider--inner hero__slider--activation swiper">
                <div class="hero__slider--wrapper swiper-wrapper">
				 @foreach ($slider as $value)
                    <div class="swiper-slide ">
                        <div class="hero__slider--items home1__slider--bg" style="background: url(/uploads/{{ $value->image}});">
                            <div class="container-fluid">
                                <div class="hero__slider--items__inner">
                                    <div class="row row-cols-1">
                                        <div class="col">
                                            <div class="slider__content">
                                                <p class="slider__content--desc desc1 mb-15"> {{ $value->feature1}}</p> 
                                                <h2 class="slider__content--maintitle h1">{{ $value->title}} <br>
                                                    {{ $value->job_title}}</h2>
                                                <p class="slider__content--desc desc2 d-sm-2-none mb-40">{{ $value->description}} <br>
                                                   </p>    
                                                <a class="slider__btn primary__btn" href="#">{{ $value->feature2}}
                                                    <svg class="primary__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg" width="20.2" height="12.2" viewBox="0 0 6.2 6.2">
                                                    <path d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z" transform="translate(-4 -4)" fill="currentColor"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
                <div class="swiper__nav--btn swiper-button-next"></div>
                <div class="swiper__nav--btn swiper-button-prev"></div>
            </div>
        </section>
        <!-- End slider section -->

        <!-- Start banner section -->
        <section class="banner__section section--padding">
            <div class="container-fluid">
                <div class="row mb--n28">
                    <div class="col-lg-5 col-md-order mb-28">
                        <div class="banner__items">
                            <a class="banner__items--thumbnail position__relative" href="#"><img class="banner__items--thumbnail__img" src="/uploads/{{ $banner1->image}}" alt="banner-img">
                                <div class="banner__items--content">
                                    <span class="banner__items--content__subtitle text__secondary">{{ $banner1->title}}</span>
                                    <h2 class="banner__items--content__title h3">{{ $banner1->description}}</h2>
                                    <span class="banner__items--content__link">{{ $banner1->job_title}}
                                        <svg class="banner__items--content__arrow--icon" xmlns="http://www.w3.org/2000/svg" width="20.2" height="12.2" viewBox="0 0 6.2 6.2">
                                            <path d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z" transform="translate(-4 -4)" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 mb-28">
                        <div class="row row-cols-lg-2 row-cols-sm-2 row-cols-1">
                            <div class="col mb-28">
                                <div class="banner__items">
                                    <a class="banner__items--thumbnail position__relative" href="#"><img class="banner__items--thumbnail__img" src="/uploads/{{ $banner2->image}}" alt="banner-img"> 
                                        <div class="banner__items--content">
                                            <span class="banner__items--content__subtitle text__secondary">{{ $banner2->title}}</span>
                                            <h2 class="banner__items--content__title h3">{{ $banner2->description}}</h2>
                                            <span class="banner__items--content__link">{{ $banner2->job_title}}
                                                <svg class="banner__items--content__arrow--icon" xmlns="http://www.w3.org/2000/svg" width="20.2" height="12.2" viewBox="0 0 6.2 6.2">
                                                    <path d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z" transform="translate(-4 -4)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col mb-28">
                                <div class="banner__items">
                                    <a class="banner__items--thumbnail position__relative" href="#"><img class="banner__items--thumbnail__img" src="/uploads/{{ $banner3->image}}" alt="banner-img"> 
                                        <div class="banner__items--content">
                                            <span class="banner__items--content__subtitle text__secondary">{{ $banner3->title}}</span>
                                            <h2 class="banner__items--content__title h3">{{ $banner3->description}}</h2>
                                            <span class="banner__items--content__link">{{ $banner3->job_title}}
                                                <svg class="banner__items--content__arrow--icon" xmlns="http://www.w3.org/2000/svg" width="20.2" height="12.2" viewBox="0 0 6.2 6.2">
                                                    <path d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z" transform="translate(-4 -4)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="banner__items">
                            <a class="banner__items--thumbnail position__relative" href="#"><img class="banner__items--thumbnail__img banner__img--max__height" src="/uploads/{{ $banner4->image}}" alt="banner-img"> 
                                <div class="banner__items--content">
                                    <span class="banner__items--content__subtitle text__secondary">{{ $banner4->title}}</span>
                                    <h2 class="banner__items--content__title h3">{{ $banner4->description}}</h2>
                                    <span class="banner__items--content__link">{{ $banner4->job_title}}
                                        <svg class="banner__items--content__arrow--icon" xmlns="http://www.w3.org/2000/svg" width="20.2" height="12.2" viewBox="0 0 6.2 6.2">
                                            <path d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z" transform="translate(-4 -4)" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End banner section -->

        <!-- Start product section -->
        <section class="product__section section--padding pt-0">
            <div class="container-fluid">
                <div class="section__heading text-center mb-35">
                    <h2 class="section__heading--maintitle">New Products</h2>
                </div>
               
                <div class="tab_content">
                    <div id="featured" class="tab_pane active show">
                        <div class="product__section--inner">
                            <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n30">
						<?php
						$count=1;
						?>
						@foreach ($product as $value)
                                <div class="col mb-30">
                                    <div class="product__items ">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="{{route('home.productdetails', ['id' => $value->id])}}">
                                                <img class="product__items--img product__primary--img" src="/uploads/{{ $value->image}}" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="/uploads/{{ $value->image}}" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product__items--content">
                                            <span class="product__items--content__subtitle">{{$value->job_title}}</span>
                                            <h3 class="product__items--content__title h4"><a href="{{route('home.productdetails', ['id' => $value->id])}}">{{$value->title}}</a></h3>
                                           <!-- <div class="product__items--price">
											<?php //if(is_numeric($value->actual_price) && is_numeric($value->price)){ ?>	
	
                                                <span class="current__price">₹{{$value->price}}</span>
                                                <span class="price__divided"></span>
                                                <span class="old__price">₹{{$value->actual_price}}</span>
                                           <?php
										 // }
										 // else
										 // {
											?>
											 <span class="current__price">{{$value->price}}</span>
                                                <span class="price__divided"></span>
                                                 <span class="current__price">{{$value->actual_price}}</span>
                                            <?php
										//  }?>
											
										   </div>-->
                          
                                            <ul class="product__items--action d-flex">
                                                 <li class="product__items--action__list">
                                            <a class="product__items--action__btn web_whatsapp" href="https://web.whatsapp.com/send?phone={{$common_whatsapp->title}} &text=Hi, I am interested in this product. Please send me the details.&app_absent=0">
                                                        <img class="whatsapp" src="/uploads/whatsapp.png"><span class="contact_me_whatapp">contact</span>
                                                    </a>
													
													 <a class="product__items--action__btn mobile_whatsapp" href="https://wa.me/{{$common_whatsapp->title}}?text=Hi, I am interested in this product. Please send me the details.">
                                                        <img class="whatsapp" src="/uploads/whatsapp.png"><span class="contact_me_whatapp">contact</span>
                                                    </a>
                                        </li>
                                                <li class="product__items--action__list call_number_li">
                                                    <a class="product__items--action__btn" href="tel:{{$call_number}}">
                                                    <img class="callnumber" src="{{$call}}">
                                             
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal{{$count}}" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
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
	 <img class="product__media--preview__items--img" width="350" src="/uploads/{{ $value->image}}" alt="product-media-img"> 
	                                    
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
        </section>
        <!-- End product section -->

        <!-- Start deals banner section -->
        <section class="deals__banner--section section--padding pt-0">
            <div class="container-fluid">
                <div class="deals__banner--inner banner__bg"style=" background: url(/uploads/{{$dealsday->image}});>
                    <div class="row row-cols-1 align-items-center">
                        <div class="col">
                            <div class="deals__banner--content position__relative">
                                <span class="deals__banner--content__subtitle text__secondary">{{$dealsday->job_title}}</span>
                                <h2 class="deals__banner--content__maintitle">{{$dealsday->title}}</h2>
                                <p class="deals__banner--content__desc">{{$dealsday->description}}</p>
                               
                                <a class="primary__btn" href="#">Show Collection
                                    <svg class="primary__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg" width="20.2" height="12.2" viewBox="0 0 6.2 6.2">
                                    <path d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z" transform="translate(-4 -4)" fill="currentColor"></path>
                                    </svg>
                                </a>
                                <br>
                                <div class="banner__bideo--play">
                                    <a class="banner__bideo--play__icon glightbox" href="https://www.youtube.com/embed/{{$dealsday->youtubeid}}" data-gallery="video">
                                        <svg id="play" xmlns="http://www.w3.org/2000/svg" width="40.302" height="40.302" viewBox="0 0 46.302 46.302">
                                            <g id="Group_193" data-name="Group 193" transform="translate(0 0)">
                                            <path id="Path_116" data-name="Path 116" d="M39.521,6.781a23.151,23.151,0,0,0-32.74,32.74,23.151,23.151,0,0,0,32.74-32.74ZM23.151,44.457A21.306,21.306,0,1,1,44.457,23.151,21.33,21.33,0,0,1,23.151,44.457Z" fill="currentColor"/>
                                            <g id="Group_188" data-name="Group 188" transform="translate(15.588 11.19)">
                                                <g id="Group_187" data-name="Group 187">
                                                <path id="Path_117" data-name="Path 117" d="M190.3,133.213l-13.256-8.964a3,3,0,0,0-4.674,2.482v17.929a2.994,2.994,0,0,0,4.674,2.481l13.256-8.964a3,3,0,0,0,0-4.963Zm-1.033,3.435-13.256,8.964a1.151,1.151,0,0,1-1.8-.953V126.73a1.134,1.134,0,0,1,.611-1.017,1.134,1.134,0,0,1,1.185.063l13.256,8.964a1.151,1.151,0,0,1,0,1.907Z" transform="translate(-172.366 -123.734)" fill="currentColor"/>
                                                </g>
                                            </g>
                                            <g id="Group_190" data-name="Group 190" transform="translate(28.593 5.401)">
                                                <g id="Group_189" data-name="Group 189">
                                                <path id="Path_118" data-name="Path 118" d="M328.31,70.492a18.965,18.965,0,0,0-10.886-10.708.922.922,0,1,0-.653,1.725,17.117,17.117,0,0,1,9.825,9.664.922.922,0,1,0,1.714-.682Z" transform="translate(-316.174 -59.724)" fill="currentColor"/>
                                                </g>
                                            </g>
                                            <g id="Group_192" data-name="Group 192" transform="translate(22.228 4.243)">
                                                <g id="Group_191" data-name="Group 191">
                                                <path id="Path_119" data-name="Path 119" d="M249.922,47.187a19.08,19.08,0,0,0-3.2-.27.922.922,0,0,0,0,1.845,17.245,17.245,0,0,1,2.889.243.922.922,0,1,0,.31-1.818Z" transform="translate(-245.801 -46.917)" fill="currentColor"/>
                                                </g>
                                            </g>
                                            </g>
                                        </svg>
                                        <span class="visually-hidden">Video Play</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End deals banner section -->

        <!-- Start product section -->
        <section class="product__section section--padding pt-0">
            <div class="container-fluid">
                <div class="section__heading text-center mb-50">
                    <h2 class="section__heading--maintitle">Our Best Seller</h2>
                </div>
                <div class="product__section--inner product__swiper--activation swiper">
                    <div class="swiper-wrapper">
					<?php
						$count=1;
						?>
					@foreach ($bestseller as $value)
                        <div class="swiper-slide">
                            <div class="product__items ">
                                <div class="product__items--thumbnail">
                                    <a class="product__items--link" href="{{route('home.productdetails', ['id' => $value->id])}}">
                                        <img class="product__items--img product__primary--img" src="/uploads/{{ $value->image}}" alt="product-img">
                                        <img class="product__items--img product__secondary--img" src="/uploads/{{ $value->image}}" alt="product-img">
                                    </a>
                                    <div class="product__badge">
                                        <span class="product__badge--items sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product__items--content">
                                    <span class="product__items--content__subtitle">{{ $value->job_title}}</span>
                                    <h3 class="product__items--content__title h4"><a href="{{route('home.productdetails', ['id' => $value->id])}}">{{ $value->title}}</a></h3>
                                    <!--<div class="product__items--price">
									<?php //if(is_numeric($value->actual_price) && is_numeric($value->price)){ ?>	
	
                                        <span class="current__price">₹{{ $value->price}}</span>
                                        <span class="price__divided"></span>
                                        <span class="old__price">₹{{$value->actual_price}}</span>
										<?php
									  //}
									  //else
									  //{
										?>
										<span class="current__price">{{ $value->price}}</span>
                                        <span class="price__divided"></span>
										<span class="current__price">{{ $value->actual_price}}</span>
										<?php
									 // }
									  ?>
                                    </div>-->
                      <ul class="product__items--action d-flex">
                                                 <li class="product__items--action__list">
                                            <a class="product__items--action__btn web_whatsapp" href="https://web.whatsapp.com/send?phone={{$common_whatsapp->title}} &text=Hi, I am interested in this product. Please send me the details.&app_absent=0">
                                                        <img class="whatsapp" src="/uploads/whatsapp.png"><span class="contact_me_whatapp">contact</span>
                                                    </a>
													
													 <a class="product__items--action__btn mobile_whatsapp" href="https://wa.me/{{$common_whatsapp->title}}?text=Hi, I am interested in this product. Please send me the details.">
                                                        <img class="whatsapp" src="/uploads/whatsapp.png"><span class="contact_me_whatapp">contact</span>
                                                    </a>
                                        </li>
                                                <li class="product__items--action__list call_number_li">
                                                    <a class="product__items--action__btn" href="tel:{{$call_number}}">
                                                    <img class="callnumber" src="{{$call}}">
                                             
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal{{$count}}" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
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
	 <img class="product__media--preview__items--img" width="350" src="/uploads/{{ $value->image}}" alt="product-media-img"> 
	                                    
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
	   
	   <!-- Quickview Wrapper End -->                 </div>
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

        <!-- Start banner section -->
        <section class="banner__section section--padding pt-0">
            <div class="container-fluid">
                <div class="row row-cols-md-2 row-cols-1 mb--n28">
				@foreach($special_offer as $value)
                    <div class="col mb-28">
                        <div class="banner__items position__relative">
                            <a class="banner__items--thumbnail " ><img class="banner__items--thumbnail__img banner__img--max__height" src="/uploads/{{$value->image}}" alt="banner-img">
                                <div class="banner__items--content">
                                    <span class="banner__items--content__subtitle d-none d-lg-block">{{$value->title}}</span>
                                    <h2 class="banner__items--content__title h3">{{$value->description}}</h2>
                                    <span class="banner__items--content__link"><u>{{$value->job_title}}</u></span>
                                </div>
                            </a>
                        </div>
                    </div>
                   @endforeach
                </div>
            </div>
        </section>
        <!-- End banner section -->

        <!-- Start testimonial section -->
        <section class="testimonial__section section--padding pt-0">
            <div class="container-fluid">
                <div class="section__heading text-center mb-40">
                    <h2 class="section__heading--maintitle">Our Clients Say</h2>
                </div>
                <div class="testimonial__section--inner testimonial__swiper--activation swiper">
                    <div class="swiper-wrapper">
					@foreach($testimonial as $value)
                        <div class="swiper-slide">
                            <div class="testimonial__items text-center">
                                <div class="testimonial__items--thumbnail">
                                    <img class="testimonial__items--thumbnail__img border-radius-50" width='100' src="/uploads/{{$value->image}}" alt="testimonial-img">
                                </div>
                                <div class="testimonial__items--content">
                                    <h3 class="testimonial__items--title">{{$value->title}}</h3>
                                    <span class="testimonial__items--subtitle">{{$value->job_title}}</span>
                                    <p class="testimonial__items--desc">{{$value->description}}</p>
                                    <ul class="rating testimonial__rating d-flex justify-content-center">
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                     @endforeach
                    </div>
                    <div class="testimonial__pagination swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- End testimonial section -->

        <!-- Start banner section -->
        <section class="banner__section section--padding pt-0">
            <div class="container-fluid">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="banner__section--inner position__relative">
                            <a class="banner__items--thumbnail display-block" href="#"><img   class="banner__items--thumbnail__img banner__img--height__md display-block" src="/uploads/{{$winter_boots->image}}" alt="banner-img">
                                <div class="banner__content--style2">
                                    <h2 class="banner__content--style2__title text-white">{{$winter_boots->title}} </h2>
                                    <p class="banner__content--style2__desc">{{$winter_boots->description}}</p>
                                    <span class="primary__btn">Shop Now
                                        <svg class="primary__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg" width="20.2" height="12.2" viewBox="0 0 6.2 6.2">
                                        <path d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z" transform="translate(-4 -4)" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End banner section -->

        <!-- Start blog section -->
        <section class="blog__section section--padding pt-0">
            <div class="container-fluid">
                <div class="section__heading text-center mb-40">
                    <h2 class="section__heading--maintitle">From The Blog</h2>
                </div>
                <div class="blog__section--inner blog__swiper--activation swiper">
                    <div class="swiper-wrapper">
                    @foreach($blogs as $value) 
                        <div class="swiper-slide">
                            <div class="blog__items">
                                <div class="blog__thumbnail">
                                    <a class="blog__thumbnail--link" href="{{route('home.blogdetails', ['id' => $value->id])}}l"><img class="blog__thumbnail--img" src="/uploads/{{$value->image}}" alt="blog-img"></a>
                                </div>
                                <div class="blog__content">
                                    <span class="blog__content--meta">{{$value->job_title}}</span>
                                    <h3 class="blog__content--title"><a href="{{route('home.blogdetails',['id' => $value->id])}}">{{$value->title}}</a></h3>
                                    <a class="blog__content--btn primary__btn" href="{{route('home.blogdetails',['id' => $value->id])}}">Read more </a>
                                </div>
                            </div>
                        </div>

                        @endforeach 
                     
                    
                    </div>
                    <div class="swiper__nav--btn swiper-button-next"></div>
                    <div class="swiper__nav--btn swiper-button-prev"></div>
                </div>
            </div>
        </section>
        <!-- End blog section -->

    </main>
 @include('includes.footer')