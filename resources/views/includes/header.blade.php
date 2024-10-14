<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Web Tech Solutions">
        <meta name="author" content="ThemeEaster">

        <title>Web Tech Solutions</title>

		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{asset('user/css/swiper-bundle.min.css')}}">
        <link rel="stylesheet" href="{{asset('user/css/glightbox.min.css')}}">
        <link rel="stylesheet" href="{{asset('user/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('user/css/style.css')}}">
       
		 @php
    $phone = App\Http\Controllers\HomeController::getphone();
	$email = App\Http\Controllers\HomeController::getemail();
	$socialicons = App\Http\Controllers\HomeController::getsocialicons();
    $call_number = App\Http\Controllers\HomeController::getcallnumber();
	$whatsapp_number = App\Http\Controllers\HomeController::getwhatsappnumber();
	$gettopstore = App\Http\Controllers\HomeController::gettopstore();
	$getproduct_category = App\Http\Controllers\HomeController::getproduct_category();
	$getproduct = App\Http\Controllers\HomeController::getproduct();
	$getheaderemail = App\Http\Controllers\HomeController::getheaderemail();
	$themecolors = App\Http\Controllers\HomeController::getheaderstickey();
	$getheaderoffer = App\Http\Controllers\HomeController::getheaderoffer();
	$getmapaddress = App\Http\Controllers\HomeController::getmapaddress();
	
	
	$servername= request()->getHttpHost();
	$logos = App\Http\Controllers\HomeController::getlogo();
	$logo = 'http://'.$servername.'/uploads/'.$logos;
	

   @endphp
    </head>
<style>
.hide_mobile
{
	display:none !important;
}
@media only screen and (min-width: 600px) {

.mobile_whatsapp
{
	display:block;
}
}

.web_whatsapp,.fa-phone
{
	color:#ffff;
	
}
.web_whatsapp:hover
{
	color:#ffff;
	
}
.fa-newspaper-o
{

    font-size: 24px;
}
.fa-institution
{
	font-size: 24px;
}
.fa-address-card
{

    font-size: 24px;
}

@media only screen and (max-width: 600px) {
.mobile_brochure
{
	display:none !important;
}	
	
	.fa-newspaper-o
{

    font-size: 15px;
}
.fa-institution
{
	font-size: 15px;
}
.fa-address-card
{

    font-size: 15px;
}
.hero__slider--items
{
background-size: cover !important;	
}

.deals__banner--inner
{
background :#7a1b1b !important;
}
.product__badge--items {
    font-size: 1.7rem;
}
.product__items--content__subtitle {
    font-size: 1.7rem;

}
.product__items--content__title {
    font-size: 1.9rem;
}
.current__price {
    font-size: 1.7rem;
}
.old__price {
    font-size: 1.7rem;
}
.breadcrumb__section
{
	background-size: cover !important;
}

.contact_me_whatapp
{
	display:none;
	
}
.product__items--action__btn {
	
		    width: 40px !important;
	}
	
	.mobile_whatsapp
{
	padding-top: 6px;
    padding-bottom: 10px;
	 margin-left: 15px;
}
.mobile_whatsapp .whatsapp {
    width: 50% !important;
	padding: 2px;
	   
}
	
}
.heademail
{
	    margin-left: 10px;
		color:#fff !important;
}
.headoffer
{
	    margin-left: 10px;
}
 
   
</style>
<style>
.offcanvas__menu_ul {
    overflow: initial!important;
}
.bg__secondary,.product__badge--items {
    background:<?php echo $themecolors->header_color; ?> !important;
}
.primary__btn
{
	 background:<?php echo $themecolors->header_color; ?> !important;
}
.swiper__nav--btn
{
	background:<?php echo $themecolors->header_color; ?> !important;
}
.main-ul,.swiper-pagination-bullet.swiper-pagination-bullet-active,.newsletter__popup--close__btn,.newsletter__popup--subscribe__btn,.a_tag,.offcanvas__stikcy--toolbar__icon,.contact__info,.product__media--view__icon--link,.product__media--view__icon--link,.quickview__social--icon,.product__items--action__btn:hover,.banner__bideo--play__icon,.breadcrumb__content--menu__items::before
{
	background:<?php echo $themecolors->header_color; ?> !important;
}

.banner__items--content__arrow--icon,.header__account--btn,.offcanvas__menu_item:hover,.header__account--btn:hover,.header__menu--items:hover .header__menu--link,.header__sub--menu__items a:hover,.text__secondary,.swiper-pagination-bullet,.header__mega--sub__menu--title:hover,.blog__content--title a:hover,.product__items--content__title a:hover,.header__menu--link:hover
{
	color:<?php echo $themecolors->header_color; ?> !important;
}
.main-ul,
{
	background:<?php echo $themecolors->color; ?> !important;
}
body

{
	background:<?php echo $themecolors->body_color; ?> !important;
}
.header__sticky.sticky
{
	background:<?php echo $themecolors->sticky_color; ?> !important;
}
.bg__black {
    background:<?php echo $themecolors->footer_color; ?> !important;
}
.slider__content--maintitle,.banner__items--content__title,.slider__content--desc,.banner__items--content__subtitle.text__secondary,.banner__items--content__title,.banner__items--content__link
{
	  color:<?php echo $themecolors->header_text_color; ?> !important;
}
.fa-2x {
    font-size: 1.4em;
    margin-top: 4px;
}



/************
.hero__slider--items::before {
  position: absolute;
  height: 100%;
  width: 100%;
  content: '';
  top: 0;
  left: 0;
  background: #0d0d0d;
opacity: 0.7;
}
.home1__slider--bg:before{
	position:absolute;
	content:'';
	left:0px;
	top:0px;
	right:0px;
	bottom:0px;
	background: #000000;
	background: -webkit-linear-gradient(to top right, #000000 0%, rgba(255,255,255,0) 100%);
	background: -moz-linear-gradient(to top right, #000000 0%, rgba(255,255,255,0) 100%);
	/*! background: linear-gradient(to top right, #000000 0%, rgba(255,255,255,0) 100%); */
}
*/
.home1__slider--bg::after {
  top: 0;
  left: 0;
  z-index: -5;
  content: "";
  width: 100%;
  height: 100%;
  opacity: 0.75;
  position: absolute;
  background: #1b192a;
}

</style>
    <body class="header-1">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

           <!-- Start preloader 
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>
                    
                    <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>
                    
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    
                    <span data-text-preloader="D" class="letters-loading">
                        D
                    </span>
                    
                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>
                    
                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                    
                    <span data-text-preloader="G" class="letters-loading">
                        G
                    </span>
                </div>
            </div>	
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    </div>
    End preloader -->
	
    <!-- Start header area -->
    <header class="header__section">
        <div class="header__topbar bg__secondary">
            <div class="container-fluid">
                <div class="header__topbar--inner d-flex align-items-center justify-content-between">
                    <div class="header__shipping">
                        <ul class="header__shipping--wrapper d-flex">
                            <li class="header__shipping--text text-white"><?php echo $gettopstore;?></li>
                            <li class="header__shipping--text text-white d-sm-2-none"><i class="<?php echo $getheaderoffer->job_title;?> "></i><span class="headoffer"><?php echo $getheaderoffer->title;?></span></li>
                            <li class="header__shipping--text text-white d-sm-2-none"><i class="<?php echo $getheaderemail->job_title;?> "></i><span class="heademail"><?php echo $getheaderemail->title;?></span></li>
                        </ul>
                    </div>
                    <div class="language__currency d-none d-lg-block">
                        <ul class="d-flex align-items-center">
                            <li class="language__currency--list">
                                <a class="language__switcher text-white" href="#">
                                    
									<a href="tel:<?php echo $call_number; ?>"><span><i class="fa fa-2x fa-phone" aria-hidden="true"></i></span> </a>
                                    
                                </a>
                               
                            </li>
                            <li class="language__currency--list">
                                <a class="account__currency--link text-white" href="#">
                                    
                                    <a class="web_whatsapp" href="https://web.whatsapp.com/send?phone={{$whatsapp_number}}&text=Hi, I am interested in this product. Please send me the details.&app_absent=0"><span><i class="fa fa-2x fa-whatsapp"></i></span> </a>
									<a class="mobile_whatsapp hide_mobile" href="https://wa.me/{{$whatsapp_number}}?text=Hi, I am interested in this product. Please send me the details."><span><i class="fa fa-2x fa-whatsapp"></i></span> </a>
                                   
                                </a>
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main__header header__sticky">
            <div class="container-fluid">
                <div class="main__header--inner position__relative d-flex justify-content-between align-items-center">
                    <div class="offcanvas__header--menu__open ">
                        <a class="offcanvas__header--menu__open--btn" href="javascript:void(0)" data-offcanvas>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon offcanvas__header--menu__open--svg" viewBox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352"/></svg>
                            <span class="visually-hidden">Menu Open</span>
                        </a>
                    </div>
                    <div class="main__logo">
                        <h1 class="main__logo--title"><a class="main__logo--link" href="{{route('home.create')}}"><img class="main__logo--img" src="{{$logo}}" alt="logo-img"></a></h1>
                    </div>
                    <div class="header__search--widget header__sticky--none d-none d-lg-block">
                        <form class="d-flex header__search--form" method="get" action="{{route('home.searchproduct')}}">
                          
                            <div class="header__search--box">
                                <label>
                                    <input class="header__search--input" name="keyword" placeholder="Keyword here..." type="text">
                                </label>
                                <button class="header__search--button bg__secondary text-white" type="submit" aria-label="search button">
                                    <svg class="header__search--button__svg" xmlns="http://www.w3.org/2000/svg" width="27.51" height="26.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="header__account header__sticky--none">
                        <ul class="d-flex">
                            <li class="header__account--items">
                                <a class="header__account--btn" href="{{route('home.branches')}}">
                                    <i class='fa fa-institution'></i>
									<span class="header__account--btn__text">Branches</span>
                                </a>
                            </li>
                            <li class="header__account--items mobile_brochure">
                                <a class="header__account--btn" href="{{route('home.brochure')}}">
                                    <i class="fa fa-newspaper-o"></i>
									<span class="header__account--btn__text">Brochure</span>
                                      </a>
                            </li>
                            <li class="header__account--items">
                                <a class="header__account--btn" href="{{route('home.contactcard')}}">
                                    <i class="fa fa-address-card"></i>
									<span class="header__account--btn__text">Contact Card</span>
                                      </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__menu d-none header__sticky--block d-lg-block">
                        <nav class="header__menu--navigation">
                            <ul class="d-flex">
                                <li class="header__menu--items style2">
                                    <a class="header__menu--link" href="{{route('home.create')}}">Home 
                                        
                                    </a>
                                   
                                </li>
                                <li class="header__menu--items mega__menu--items style2">
                                    <a class="header__menu--link" href="{{route('home.product')}}">Shop 
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path  d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                        </svg>
                                    </a>
                                    <ul class="header__mega--menu d-flex">
									@foreach ($getproduct_category as $value)
									 @php $getproductbrands = App\Http\Controllers\HomeController::getproduct_brands($value->id); @endphp
                                        <li class="header__mega--menu__li">
                                            <span class="header__mega--subtitle">{{$value->title}}</span>
                                            <ul class="header__mega--sub__menu">
                                               @foreach ($getproductbrands as $values)
											   <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="{{route('home.productbrands', ['id' => $value->id])}}">{{$values->name}}</a></li><br>
                                               @endforeach
											   </ul>
                                        </li>
                                      @endforeach
                                    </ul>
                                </li>
                                <li class="header__menu--items style2">
                                    <a class="header__menu--link" href="{{route('home.about')}}">About US </a>  
                                </li>
                                <li class="header__menu--items style2">
                                    <a class="header__menu--link" href="{{route('home.blog')}}">Blog  </a></li>
                                <li class="header__menu--items style2 d-none d-xl-block">
                                    <a class="header__menu--link" href="{{route('home.product')}}">Categories </a></li>
                                
								<li class="header__menu--items style2">
                                    <a class="header__menu--link" href="#">Gallery 
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"></path>
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        <li class="header__sub--menu__items"><a href="{{route('home.gallery')}}" class="header__sub--menu__link">Image Gallery</a></li>
                                        <li class="header__sub--menu__items"><a href="{{route('home.video')}}" class="header__sub--menu__link">Video Gallery</a></li>
                                       </ul>
                                </li>
								
                                <li class="header__menu--items style2">
                                    <a class="header__menu--link " href="{{route('home.contact')}}">Contact </a>  
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header__account header__account2 header__sticky--block">
                        <ul class="d-flex">
                           
                            <li class="header__account--items header__account2--items">
                               <a class="header__account--btn" href="{{route('home.branches')}}">
                                    <i class='fa fa-institution'></i>
									<span class="header__account--btn__text">Branches</span>
                                </a>
                            </li>
                            <li class="header__account--items header__account2--items d-none d-lg-block">
                               <a class="header__account--btn" href="{{route('home.brochure')}}">
                                    <i class="fa fa-newspaper-o"></i>
									<span class="header__account--btn__text">Brochure</span>
                                      </a>
                            </li>
                            <li class="header__account--items header__account2--items">
                                <a class="header__account--btn" href="{{route('home.contactcard')}}">
                                    <i class="fa fa-address-card"></i>
									<span class="header__account--btn__text">Contact Card</span>
                                      </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="container-fluid">
                <div class="header__bottom--inner position__relative d-none d-lg-flex justify-content-between align-items-center">
                    <div class="header__menu">
                       <nav class="header__menu--navigation">
                            <ul class="d-flex">
                                <li class="header__menu--items style2">
                                    <a class="header__menu--link" href="{{route('home.create')}}">Home 
                                        
                                    </a>
                                    
                                </li>
                                <li class="header__menu--items mega__menu--items style2">
                                    <a class="header__menu--link" href="{{route('home.product')}}">Shop 
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path  d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                        </svg>
                                    </a>
                                  <ul class="header__mega--menu d-flex">
									@foreach ($getproduct_category as $value)
									 @php $getproductbrands = App\Http\Controllers\HomeController::getproduct_brands($value->id); @endphp
                                        <li class="header__mega--menu__li">
                                            <span class="header__mega--subtitle">{{$value->title}}</span>
                                            <ul class="header__mega--sub__menu">
                                               @foreach ($getproductbrands as $values)
											   <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="{{route('home.productbrands', ['id' => $value->id])}}">{{$values->name}}</a></li><br>
                                               @endforeach
											   </ul>
                                        </li>
                                      @endforeach
                                    </ul>
                                </li>
                                <li class="header__menu--items style2">
                                    <a class="header__menu--link" href="{{route('home.about')}}">About US </a>  
                                </li>
                                <li class="header__menu--items style2">
                                    <a class="header__menu--link" href="{{route('home.blog')}}">Blog  </a></li>
                                <li class="header__menu--items style2 d-none d-xl-block">
                                    <a class="header__menu--link" href="{{route('home.product')}}">Categories </a></li>
                               <li class="header__menu--items style2">
                                    <a class="header__menu--link" href="#">Gallery 
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"></path>
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        <li class="header__sub--menu__items"><a href="{{route('home.gallery')}}" class="header__sub--menu__link">Image Gallery</a></li>
                                        <li class="header__sub--menu__items"><a href="{{route('home.video')}}" class="header__sub--menu__link">Video Gallery</a></li>
                                       </ul>
                                </li>
                                <li class="header__menu--items style2">
                                    <a class="header__menu--link " href="{{route('home.contact')}}">Contact </a>  
                                </li>
                            </ul>
                        </nav>
                    </div>
					@php
					$servername= request()->getHttpHost();
                    $lamp_img= 'http://'.$servername.'/uploads/suruchi/lamp.png';
					@endphp
                    <p class="header__discount--text"><img class="header__discount--icon__img" src="{{$lamp_img}}" alt="lamp-img"> Special up to 60% Off all item</p>
                </div>
            </div>
        </div>

        <!-- Start Offcanvas header menu -->
        <div class="offcanvas__header">
            <div class="offcanvas__inner">
                <div class="offcanvas__logo">
                    <a class="offcanvas__logo_link" href="{{route('home.create')}}">
                        <img src="{{$logo}}" alt="Grocee Logo" width="158" height="36">
                    </a>
                    <button class="offcanvas__close--btn" data-offcanvas>close</button>
                </div>
                <nav class="offcanvas__menu">
                    <ul class="offcanvas__menu_ul">
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="{{route('home.create')}}">Home</a>
                           
                        </li>
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="#">Shop</a>
                            <ul class="offcanvas__sub_menu">
							@foreach ($getproduct_category as $value)
									@php $getproductbrands = App\Http\Controllers\HomeController::getproduct_brands($value->id); @endphp
                                     
                                <li class="offcanvas__sub_menu_li">
                                    <a href="#" class="offcanvas__sub_menu_item">{{$value->title}}</a>
                                    <ul class="offcanvas__sub_menu">
									@foreach($getproductbrands as $values)
                                        <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item" href="{{route('home.productbrands', ['id' => $value->id])}}">{{$values->name}}</a></li>
                                        @endforeach
										</ul>
                                </li>
                              @endforeach
                            </ul>
                        </li>
						<li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="{{route('home.about')}}">About</a></li>
                        
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="{{route('home.blog')}}">Blog</a>
                            
                        </li>
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="{{route('home.product')}}">Categories</a>
                           
                        </li>
						  <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="#">Gallery</a>
                            <ul class="offcanvas__sub_menu">
							       
									    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item" href="{{route('home.gallery')}}">Image Gallery</a></li>
                                        <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item" href="{{route('home.video')}}">Video Gallery</a></li>
                                       
										
                            </ul>
                        </li>
                        <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="{{route('home.contact')}}">Contact</a></li>
                    </ul>
                   
                </nav>
            </div>
        </div>
        <!-- End Offcanvas header menu -->

       <!-- Start Offcanvas stikcy toolbar -->
        <div class="offcanvas__stikcy--toolbar">
            <ul class="d-flex justify-content-between">
                <li class="offcanvas__stikcy--toolbar__list">
                    <a class="offcanvas__stikcy--toolbar__btn" href="{{route('home.create')}}">
                    <span class="offcanvas__stikcy--toolbar__icon"> 
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="21.51" height="21.443" viewBox="0 0 22 17"><path fill="currentColor" d="M20.9141 7.93359c.1406.11719.2109.26953.2109.45703 0 .14063-.0469.25782-.1406.35157l-.3516.42187c-.1172.14063-.2578.21094-.4219.21094-.1406 0-.2578-.04688-.3515-.14062l-.9844-.77344V15c0 .3047-.1172.5625-.3516.7734-.2109.2344-.4687.3516-.7734.3516h-4.5c-.3047 0-.5742-.1172-.8086-.3516-.2109-.2109-.3164-.4687-.3164-.7734v-3.6562h-2.25V15c0 .3047-.11719.5625-.35156.7734-.21094.2344-.46875.3516-.77344.3516h-4.5c-.30469 0-.57422-.1172-.80859-.3516-.21094-.2109-.31641-.4687-.31641-.7734V8.46094l-.94922.77344c-.11719.09374-.24609.14062-.38672.14062-.16406 0-.30468-.07031-.42187-.21094l-.35157-.42187C.921875 8.625.875 8.50781.875 8.39062c0-.1875.070312-.33984.21094-.45703L9.73438.832031C10.1094.527344 10.5312.375 11 .375s.8906.152344 1.2656.457031l8.6485 7.101559zm-3.7266 6.50391V7.05469L11 1.99219l-6.1875 5.0625v7.38281h3.375v-3.6563c0-.3046.10547-.5624.31641-.7734.23437-.23436.5039-.35155.80859-.35155h3.375c.3047 0 .5625.11719.7734.35155.2344.211.3516.4688.3516.7734v3.6563h3.375z"></path></svg>
                        </span>
                    <span class="offcanvas__stikcy--toolbar__label">Home</span>
                    </a>
                </li>
                <li class="offcanvas__stikcy--toolbar__list">
                    <a class="offcanvas__stikcy--toolbar__btn" href="{{route('home.product')}}">
                    <span class="offcanvas__stikcy--toolbar__icon"> 
                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="18.51" height="17.443" viewBox="0 0 448 512"><path d="M416 32H32A32 32 0 0 0 0 64v384a32 32 0 0 0 32 32h384a32 32 0 0 0 32-32V64a32 32 0 0 0-32-32zm-16 48v152H248V80zm-200 0v152H48V80zM48 432V280h152v152zm200 0V280h152v152z"></path></svg>
                        </span>
                    <span class="offcanvas__stikcy--toolbar__label">Shop</span>
                    </a>
                </li>
                <li class="offcanvas__stikcy--toolbar__list ">
                    <a class="offcanvas__stikcy--toolbar__btn" target="blank" href="tel:<?php echo $call_number; ?>">
                        <span class="offcanvas__stikcy--toolbar__icon"> 
                          <i class="fa fa-2x fa-phone"></i> 
						  </span>
                    <span class="offcanvas__stikcy--toolbar__label">Call</span>
                    </a>
					
					
                </li>
                <li class="offcanvas__stikcy--toolbar__list">
                    <a class="offcanvas__stikcy--toolbar__btn " href="https://wa.me/{{$whatsapp_number}}?text=Hi, I am interested in this product. Please send me the details." data-offcanvas>
                        
						<span class="offcanvas__stikcy--toolbar__icon"> 
                            <i class="fa fa-2x fa-whatsapp"></i>
                        </span>
                        <span class="offcanvas__stikcy--toolbar__label">Whatsapp</span>
                        
                    </a>
					               
                </li>
                <li class="offcanvas__stikcy--toolbar__list">
                    <a class="offcanvas__stikcy--toolbar__btn" href="{{route('home.brochure')}}">
                        <span class="offcanvas__stikcy--toolbar__icon"> 
                            <i class="fa fa-newspaper-o"></i>
                        </span>
                        <span class="offcanvas__stikcy--toolbar__label">Brochure</span>
                        
                    </a>
                </li>
            </ul>
        </div>
        <!-- End Offcanvas stikcy toolbar -->

       

        <!-- Start serch box area -->
        <div class="predictive__search--box ">
            <div class="predictive__search--box__inner">
                <h2 class="predictive__search--title">Search Products</h2>
                <form class="predictive__search--form" action="#">
                    <label>
                        <input class="predictive__search--input" placeholder="Search Here" type="text">
                    </label>
                    <button class="predictive__search--button" aria-label="search button" type="submit"><svg class="header__search--button__svg" xmlns="http://www.w3.org/2000/svg" width="30.51" height="25.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>  </button>
                </form>
            </div>
            <button class="predictive__search--close__btn" aria-label="search close button" data-offcanvas>
                <svg class="predictive__search--close__icon" xmlns="http://www.w3.org/2000/svg" width="40.51" height="30.443"  viewBox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368"/></svg>
            </button>
        </div>
        <!-- End serch box area -->
        <!-- Start offCanvas minicart -->
        <div class="offCanvas__minicart">
            <div class="minicart__header ">
                <div class="minicart__header--top d-flex justify-content-between align-items-center">
                    <h2 class="minicart__title h3">Contact Card</h2>
                    <button class="minicart__close--btn" aria-label="minicart close button" data-offcanvas> 
                        <svg class="minicart__close--icon" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368"/></svg>
                    </button>
                </div>
                
            </div>
            <div class="minicart__product">
              <section class="contact__section section--padding">            
			  <div class="container">                
			  <div class="section__heading text-center mb-40">                   
			  <h2 class="section__heading--maintitle">Get In Touch</h2>               
			  </div>                
			  <div class="main__contact--area position__relative">         
			  <div class="contact__form">                       
			  <h3 class="contact__form--title mb-40">Contact Me</h3>                       
            <?php
$address_map=$getmapaddress->title;
$location_address = str_replace(' ', '%20', $address_map);
?>
<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3503.575022750921!2d77.31301609999998!3d28.58252155000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s{{$location_address}}!5e0!3m2!1sen!2s!4v1391062749471&amp;output=embed&iwloc" style="width:100%; border:0" height="500"></iframe>   

			 </div>                
			 <div class="contact__info border-radius-5">			 
             <div class="contact__info--items">                            
			 <h3 class="contact__info--content__title text-white mb-15">Contact Us</h3>   
			 <div class="contact__info--items__inner d-flex">                               
			 <div class="contact__info--icon icon_font">                                  
			 <i class="fa fa-phone-square"></i>                               
			 </div>                                
			 <div class="contact__info--content">                                   
			 <p class="contact__info--content__desc text-white"><a href="tel:+01234-567890" class="icon_a">Phone: +01234-567890</a><br> <a href="tel:97645678575" class="icon_a">Whatsapp: 97645678575</a>   </p>                                
			 </div>                            
			 </div>                       
			 </div>                                          
             <div class="contact__info--items">                          
			 <h3 class="contact__info--content__title text-white mb-15">Email Address</h3>                            
			 <div class="contact__info--items__inner d-flex">                                
			 <div class="contact__info--icon icon_font">                                   
			 <i class="fa fa-envelope"></i>                                
			 </div>                                
			 <div class="contact__info--content">                                    
			 <p class="contact__info--content__desc text-white"><a href="tel:info@example.com" class="icon_a"> info@example.com</a><br> <a href="tel:info@example.com" class="icon_a"> info@example.com</a>   </p>                                
			 </div>                            
			 </div>                        
			 </div>                                          
   <div class="contact__info--items">                            
   <h3 class="contact__info--content__title text-white mb-15">Office Location</h3>                            
   <div class="contact__info--items__inner d-flex">                                
   <div class="contact__info--icon icon_font">                                   
   <i class="fa fa-university"></i>                                
   </div>                                
   <div class="contact__info--content">                                    
   <p class="contact__info--content__desc text-white"><a href="tel:123 Stree New York City ," class="icon_a"> 123 Stree New York City ,</a><br> <a href="tel:United States Of America NY 750065." class="icon_a"> United States Of America NY 750065.</a>   </p>   
   </div>                            
   </div>                        
   </div>                                           
   <div class="contact__info--items">                            
   <h3 class="contact__info--content__title text-white mb-15">Follow Us</h3>                            
   <ul class="contact__info--social d-flex">																					                                
   <li class="contact__info--social__list">                                    
   <a class="contact__info--social__icon" target="_blank" href="http://facebook.com">                              
   <i class="social_icon_contact fa fa-facebook-square"></i>                                       
   <span class="visually-hidden">Facebook</span>                                    
   </a>                                
   </li>                               							                               
   <li class="contact__info--social__list">                                   
   <a class="contact__info--social__icon" target="_blank" href="twitter">                                       
   <i class="social_icon_contact fa fa-twitter"></i>                                        
   <span class="visually-hidden">Facebook</span>                                    
   </a>                                
   </li>
   <li class="contact__info--social__list">                                   
   <a class="contact__info--social__icon" target="_blank" href="instagram">                                
   <i class="social_icon_contact fa fa-camera-retro"></i>                                       
   <span class="visually-hidden">Facebook</span>                                    
   </a>                                
   </li>                               							                                
   <li class="contact__info--social__list">                                    
   <a class="contact__info--social__icon" target="_blank" href="youtube">                                        
   <i class="social_icon_contact fa fa-youtube-play"></i>                                        
   <span class="visually-hidden">Facebook</span>                                    
   </a>                                
   </li>                                                           
   </ul>                        
   </div>                    
   </div>                
   </div>            
   </div>        
   </section>
            </div>
         
           
        </div>
        <!-- End offCanvas minicart -->

        <!-- Start serch box area -->
        <div class="predictive__search--box ">
            <div class="predictive__search--box__inner">
                <h2 class="predictive__search--title">Search Products</h2>
                <form class="predictive__search--form" action="#">
                    <label>
                        <input class="predictive__search--input" placeholder="Search Here" type="text">
                    </label>
                    <button class="predictive__search--button" aria-label="search button" type="submit"><svg class="header__search--button__svg" xmlns="http://www.w3.org/2000/svg" width="30.51" height="25.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>  </button>
                </form>
            </div>
            <button class="predictive__search--close__btn" aria-label="search close button" data-offcanvas>
                <svg class="predictive__search--close__icon" xmlns="http://www.w3.org/2000/svg" width="40.51" height="30.443"  viewBox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368"/></svg>
            </button>
        </div>
        <!-- End serch box area -->
    </header>
    <!-- End header area -->
