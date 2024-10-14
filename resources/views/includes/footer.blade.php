<style>
a{
color: #8d9aa8;
}
.callnumber_footer{
	width: 32px;
}
.callnumber_span_footer

{
	color: #fff;
    margin-left: 10px;
}
#newsletter__dont--show
{
	margin-left: -240px;
}
.newsletter__popup--dontshow__again--text
{
	margin-top: -29px;
}
</style>
<style>
.whatsapp_footer {
    width: 17% !important;
	margin-left: -80px;
}
.contact_me_whatapp_footer
{
	position: absolute;
}
.mobile_whatsapp_footer
{
	display:none;
}
@media only screen and (max-width: 600px) {
	
.web_whatsapp_footer
{
	display:none !important;
	
}
.mobile_whatsapp_footer
{
	display:inline !important;
	
}
}
.contact_me_whatapp_footer
{
	color:#fff !important;
	margin-top: 7px;
}

.whatsapp_product_footer {
    width: 25% !important;
}
.contact_me_whatapp_product_footer
{
	position: absolute;
}
.mobile_whatsapp_product_footer
{
	display:none;
}
@media only screen and (max-width: 600px) {
	
.web_whatsapp_product_footer
{
	display:none !important;
	
}
.mobile_whatsapp_product_footer
{
	display:inline !important;
	
}

.qick_view
{
margin-left: -55px !important;
}











}
.contact_me_whatapp_product_footer
{
	color:#000 !important;
	
}
.iframe

{
	height: 320px;
}
.footer_links
{
	    margin-left: 55px;
}
@media only screen and (max-width: 600px) {
.iframe_span
{	
	margin-left: 15px;
}
}

</style>
 @php
    $phone = App\Http\Controllers\HomeController::getphone();
	$certified_logo = App\Http\Controllers\HomeController::getcertifiedlogo();
	$address = App\Http\Controllers\HomeController::getaddress();
	$email = App\Http\Controllers\HomeController::getemail();
	$expertservices = App\Http\Controllers\HomeController::getexpertservices();
	$socialicons = App\Http\Controllers\HomeController::getsocialicons();
	$popup = App\Http\Controllers\HomeController::getpopup();
	$copyright = App\Http\Controllers\HomeController::getcopyright();
	$aboutus = App\Http\Controllers\HomeController::getabout();
	$mapaddress = App\Http\Controllers\HomeController::getmapaddress();
   @endphp 

   @php
$servername= request()->getHttpHost();
$img= 'http://'.$servername.'/uploads/whatsapp.png';
$call= 'http://'.$servername.'/uploads/dock-phone-pictures-26.png';
$popup_img='http://'.$servername.'/uploads/'.$popup->image;
$call_number = App\Http\Controllers\HomeController::getcallnumber();
$whatsapp_number = App\Http\Controllers\HomeController::getwhatsappnumber();	
@endphp
   <!-- Start footer section -->  
     <footer class="footer__section bg__black">       
	 <div class="container-fluid">            
	 <div class="main__footer d-flex justify-content-between">       
	 <div class="col-md-4">              
	 <h2 class="footer__widget--title text-ofwhite h3">About Us                
	 <button class="footer__widget--button" aria-label="footer widget button">  
	 <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
	 <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>                         
	 </svg>                      
	 </button>                   
	 </h2>                    
	 <div class="footer__widget--inner">                        
	 <p class="footer__widget--desc text-ofwhite mb-20"><?php echo substr($aboutus, 0, 244);?></p>
	 <div class="footer__social">                         
	 <h3 class="social__title text-ofwhite h4 mb-15">Follow Us</h3>                            
	 <ul class="social__shear d-flex">   
      @foreach($socialicons as $value)	 
	 <li class="social__shear--list">                                    
	 <a class="social__shear--list__icon" target="_blank" href="{{$value->title}}">                                       
	 <i class="{{$value->job_title}}"></i>                                       
	 <span class="visually-hidden">Facebook</span>                                    
	 </a>                                </li>                                
	     @endforeach                      
	 </ul>                        
	 </div>                    
	 </div>                
	 </div>                
	 <div class="col-md-2">                    
	                 
	 <div class="footer__widget footer_links">                        
	 <h2 class="footer__widget--title text-ofwhite qick_view h3">Quick Links                             
	 <button class="footer__widget--button" aria-label="footer widget button">                                
	 <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394" viewBox="0 0 10.355 6.394">                                    
	 <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>                                
	 </svg>                            
	 </button>                        
	 </h2>                        
	 <ul class="footer__widget--menu footer__widget--inner">                            
	 <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="{{route('home.create')}}">Home</a></li> 
	<li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="{{route('home.about')}}">About Us</a></li>
	 <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="{{route('home.contact')}}">Contact Us</a></li>                            
	 <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="{{route('home.product')}}">Shop</a></li>                            
	 <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="{{route('home.blog')}}">Blog</a></li>                           
	  <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="{{route('home.product')}}">Category</a></li>                            
	                     
	 </ul>                    
	 </div>                
	 </div>                               
	 <div class="col-md-6"> 
     <span class="iframe_span"><?php echo $mapaddress->title;?></span> 
     </div>            
	 </div>            
	 <div class="footer__bottom d-flex justify-content-between align-items-center">                
	 <p class="copyright__content text-ofwhite m-0">{{$copyright->title}}</p>               
	         
	 </div>        
	 </div>    
	 </footer>    <!-- End footer section --> 
	 


	
	 
	   <!-- Start News letter popup -->  
	   
	 @if($popup!="")
	   <div class="newsletter__popup" data-animation="slideInUp">        <div id="boxes" class="newsletter__popup--inner">            <button class="newsletter__popup--close__btn" aria-label="search close button">                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368"></path></svg>            </button>            <div class="box newsletter__popup--box d-flex align-items-center">         
	        
		
		
		<div class="newsletter__popup--thumbnail">                   
			 <img class="newsletter__popup--thumbnail__img display-block" src="{{$popup_img}}" alt="newsletter-popup-thumb">                </div>                <div class="newsletter__popup--box__right">       
	              <h2 class="newsletter__popup--title">{{$popup->title}}</h2>                    <div class="newsletter__popup--content">                        <label class="newsletter__popup--content--desc">{{$popup->description}}</label>                        <div class="newsletter__popup--subscribe" id="frm_subscribe">                            <form class="newsletter__popup--subscribe__form">  
	                                                   <button class="newsletter__popup--subscribe__btn">
														
													   <a target="blank" href="tel:{{$popup->phone1}}"> <img class="callnumber_footer" src="{{$call}}"><span class="callnumber_span_footer">Call me</span>
                                             </a>
	 </button>                                
	 
	 <button class="newsletter__popup--subscribe__btn">
	 <a class="web_whatsapp_footer" href="https://web.whatsapp.com/send?phone={{$whatsapp_number}}&text=Hii&app_absent=0">
                                                        <img class="whatsapp_footer" src="{{$img}}"><span class="contact_me_whatapp_footer">Contact me</span>
                                                    </a>
													
													 <a class="mobile_whatsapp_footer" href="https://wa.me/+91-{{$whatsapp_number}}text=I'm%20interested">
                                                        <img class="whatsapp_footer" src="{{$img}}"><span class="contact_me_whatapp_footer">Contact me</span>
                                                    </a>
	
	</button>                            </form>                      
	
	<div class="newsletter__popup--footer">                           
		
	<input type="checkbox" class="dont_show_check" id="newsletter__dont--show">                        
	
	<label class="newsletter__popup--dontshow__again--text" for="newsletter__dont--show">Don't show this popup again</label>     

</div>                        </div>                    </div>                </div>            </div>        </div>    </div>
	
	@endif
	<!-- End News letter popup -->

		<!-- jQuery Lib -->
		 
		 <script src="{{asset('user/js/jquery.js')}}"></script>
		<script src="{{asset('user/js/popper.js')}}"></script>
        <script src="{{asset('user/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('user/js/swiper-bundle.min.js')}}"></script>
        <script src="{{asset('user/js/glightbox.min.js')}}"></script>
		<script src="{{asset('user/js/script.js')}}"></script>
       
    </body>
</html>

<script>
jQuery(document).ready(function() {
jQuery(document).on("change",".dont_show_check",function() {
    //Cookies.set('name', 'value');
	 var visited = jQuery.Cookie("visited");

        if (visited == null) {
            jQuery('.newsletter_layer').show();
            alert($.Cookie("visited"));         
        }

        // set cookie
        jQuery.Cookie('visited', 'yes');
    });

});
</script>