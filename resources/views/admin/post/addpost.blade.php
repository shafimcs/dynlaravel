

@extends('layouts.app')

@section('content')

    <br><br>

	<style>

	.boxcls {

    border: 0px solid #ccc;

}

.col-sm-12 {

    width: 100%;

}

.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {

    position: relative;

    min-height: 1px;

    padding-right: 15px;

    padding-left: 15px;

}

body {

    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;

    font-size: 14px;

    line-height: 1.42857143;

    color: #333;

   

   

}



.font_div {

    margin-left: 3px;

    margin-bottom: 5px;

    margin-left: 14px;

    margin-top: 10px;

    max-width: 68px;

}

.border_font_div {

    border: 1px solid #ccc;

}

	</style>

    <div class="row">



        <div class="register-box" style="margin-top: -10px;">

            <form action="{{route('post.store',$slug)}}" method="post" enctype="multipart/form-data">

                {{ csrf_field()}}



                @include('flash::message')



                <div class="container" >

                    <div class="row">

                        <div class="col-md-11" style="margin-left:-358px;">

                            <div class="panel panel-default">

                                <div class="panel-heading">

                                    <h3>CREATE POST </h3>

                                </div>

                                <div class="panel-body">

								

                              <div class="row">

                                       

                                            <div class="col-md-12">

											<label>Title </label>

                                                <input id="title" type="text" name="title" class="form-control"  required>

                                                @if ($errors->has('name'))

                                                    <span class="help-block">

                                                    <strong>{{ $errors->first('name') }}</strong>

                                                     </span>

                                                @endif



                                            </div>

                             </div>

							
                               <br>
							 

							 

							 @if($slug =='slider'||$slug =='branches'||$slug =='client-testimonial'||$slug =='special-offer'||$slug =='banner1'||$slug =='banner2'||$slug =='banner3'||$slug =='banner4'||$slug =='dealsday'||$slug =='blogs'||$slug =='blog-single'||$slug =='abouts'||$slug =='companydetails')

                              <div class="row">

                                       

                                            <div class="col-md-12">

											<label>Job_title </label>

                                                <input id="job_title" type="text" name="job_title" class="form-control"  required>

                                                @if ($errors->has('name'))

                                                    <span class="help-block">

                                                    <strong>{{ $errors->first('name') }}</strong>

                                                     </span>

                                                @endif



                                            </div>

                             </div>
 <br>
							 @endif

							

							@if($slug =='slider'||$slug =='projects'||$slug =='contact'||$slug =='contactcard'||$slug =='blog-single'||$slug =='companydetails'||$slug =='surroundings-clean-section'||$slug =='expert-services'||$slug =='benifit-subsection'||$slug =='testimonials')

                              <div class="row">

                                       

                                            <div class="col-md-12">

											<label>Feature 1 </label>

                                                <input id="feature1" type="text" name="feature1" class="form-control"  required>

                                                @if ($errors->has('name'))

                                                    <span class="help-block">

                                                    <strong>{{ $errors->first('name') }}</strong>

                                                     </span>

                                                @endif



                                            </div>

                             </div>
 <br>
							 @endif 

							

							 @if($slug =='slider'||$slug =='contact'||$slug =='contactcard'||$slug =='blogs')

                              <div class="row">

                                       

                                            <div class="col-md-12">

											<label>Feature 2</label>

                                                <input id="feature2" type="text" name="feature2" class="form-control" >

                                                @if ($errors->has('name'))

                                                    <span class="help-block">

                                                    <strong>{{ $errors->first('name') }}</strong>

                                                     </span>

                                                @endif



                                            </div>

                             </div>
                               <br>
							 @endif 

							 
                            
							 

							 

							 

							@if($slug =='slider'||$slug =='branches'||$slug =='popup'||$slug =='client-testimonial'||$slug =='specifications'||$slug =='winter-boots'||$slug =='special-offer'||$slug =='banner1'||$slug =='banner2'||$slug =='banner3'||$slug =='banner4'||$slug =='dealsday'||$slug =='abouts'||$slug =='blog-single'||$slug =='project-details-banner'||$slug =='project-description'||$slug =='project-banner'||$slug =='blogs'||$slug =='blog-banner'||$slug =='pricing-plan-banner'||$slug =='contactus'||$slug =='service-banner'||$slug =='amazing-benifits'||$slug =='commercial-cleaning'||$slug =='house-building'||$slug =='expert-services'||$slug =='testimonials'||$slug =='surroundings-clean-section'||$slug =='exploring-clients'||$slug =='surroundings-clean'||$slug =='most-awarded'||$slug =='appoinment'||$slug =='cleaning-services'||$slug =='our-goal'||$slug =='clean-features'||$slug =='cleaning-service-sections'||$slug =='following-work'||$slug =='following-plans')

                               <div class="row">

                        <div class="col-md-12 form-group has-feedback">

						<label>Description</label>

                            <textarea id="description" type="text" name="description" rows="8" class="form-control"   placeholder="Enter Meta Tags"></textarea>

                            @if ($errors->has('description'))

                                <span class="help-block">

                                        <strong>{{ $errors->first('description') }}</strong>

                                    </span>

                            @endif



                        </div>



                    </div>

							 @endif 
                         <br>
							 @if($slug =='blog-single'||$slug =='specifications')

                               <div class="row">

                        <div class="col-md-12 form-group has-feedback">

						<label>Description 2</label>

                            <textarea id="description2" type="text" name="description2" rows="8" class=" form-control"   placeholder="Enter Meta Tags"></textarea>

                            @if ($errors->has('description'))

                                <span class="help-block">

                                        <strong>{{ $errors->first('description') }}</strong>

                                    </span>

                            @endif



                        </div>



                    </div>

					

					
 <br>
					 @endif  
                         
							  @if($slug =='email')

						<div class="row">

                                       

                                            <div class="col-md-12">

											<label>Email 1</label>

                                                <input id="email1" type="text" name="email1" class="form-control"  required>

                                                @if ($errors->has('name'))

                                                    <span class="help-block">

                                                    <strong>{{ $errors->first('name') }}</strong>

                                                     </span>

                                                @endif



                                            </div>

                             </div>

							 
                           <br>
							 

							 

							

							 <div class="row">

                                       

                                            <div class="col-md-12">

											<label>Email 2</label>

                                                <input id="email2" type="text" name="email2" class="form-control"  required>

                                                @if ($errors->has('name'))

                                                    <span class="help-block">

                                                    <strong>{{ $errors->first('name') }}</strong>

                                                     </span>

                                                @endif



                                            </div>

                             </div>
 <br>
							 
							  @endif 
                             

							  @if($slug =='phone'||$slug =='branches'||$slug =='popup')

							 <div class="row">

                                       

                                            <div class="col-md-12">

											<label>Phone 1</label>

                                                <input id="phone1" type="text" name="phone1" class="form-control"  required>

                                                @if ($errors->has('name'))

                                                    <span class="help-block">

                                                    <strong>{{ $errors->first('name') }}</strong>

                                                     </span>

                                                @endif



                                            </div>

                             </div>

							 
                              <br>
							 

							

							 <div class="row">

                                       

                                            <div class="col-md-12">

											<label>Phone2</label>

                                                <input id="phone2" type="text" name="phone2" class="form-control"  required>

                                                @if ($errors->has('name'))

                                                    <span class="help-block">

                                                    <strong>{{ $errors->first('name') }}</strong>

                                                     </span>

                                                @endif



                                            </div>

                             </div>

							   <br>

							  @endif 

							

							  @if($slug =='address')

							 <div class="row">

                                       

                                            <div class="col-md-12">

											<label>Address 1<label>

                                                <input id="address1" type="text" name="address1" class="form-control"  required>

                                                @if ($errors->has('name'))

                                                    <span class="help-block">

                                                    <strong>{{ $errors->first('name') }}</strong>

                                                     </span>

                                                @endif



                                            </div>

                             </div>

							 <br>

							 <div class="row">


                                            <div class="col-md-12">

											<label>Address 2<label>

                                                <input id="address2" type="text" name="address2" class="form-control"  required>

                                                @if ($errors->has('name'))

                                                    <span class="help-block">

                                                    <strong>{{ $errors->first('name') }}</strong>

                                                     </span>

                                                @endif



                                            </div>

                             </div>
 
                             <br>
							  @endif 

							
							 

							 

					 @if($slug =='slider'||$slug =='branches'||$slug =='popup'||$slug =='branches-banner'||$slug =='brochure'||$slug =='brochure-banner'||$slug =='client-testimonial'||$slug =='product-banner'||$slug =='product-single-banner'||$slug =='blogbanner'||$slug =='gallerybanner'||$slug =='gallerys'||$slug =='winter-boots'||$slug =='special-offer'||$slug =='banner1'||$slug =='banner2'||$slug =='banner3'||$slug =='banner4'||$slug =='dealsday'||$slug =='change-image'||$slug =='abouts'||$slug =='contactus'||$slug =='blog-single'||$slug =='blog-details-banner'||$slug =='aboutimage'||$slug =='fashionbrands'||$slug =='contactcardbanner'||$slug =='contactbanner'||$slug =='blogs'||$slug =='blog-banner'||$slug =='projects'||$slug =='project-banner'||$slug =='pricing-plan-banner'||$slug =='about-banner'||$slug =='service-banner'||$slug =='companybackground'||$slug =='contact-background'||$slug =='logo'||$slug =='service-image1'||$slug =='service-image2'||$slug =='testimonials'||$slug =='surroundings-cleansection'||$slug =='amazing-benifits'||$slug =='exploring-clients'||$slug =='surroundings-clean'||$slug =='appoinment-background'||$slug =='cleaning-services'||$slug =='appoinment'||$slug =='our-goal'||$slug =='cleaning-service-sections'||$slug =='following-work')

							       <div class="row">

                                            <div class="col-md-12">

                                               <label> Upload/Change Image</label>

                                                <div class="form-group has-feedback">

                                                    <input type="file"  name="image" id="file"   required>

                                                </div>

                                              

                                                <br><br>

                                            </div>

											

											</div>
 <br>
                                     @endif

									 

									  @if($slug =='brochure')

							       <div class="row">

                                            <div class="col-md-12">

                                               <label> Upload/Change PDF</label>

                                                <div class="form-group has-feedback">

                                                    <input type="file"  name="pdf" id="file"   required>

                                                </div>

                                              

                                                <br><br>

                                            </div>

											

											</div>
  <br>
                                     @endif

									

									@if($slug =='') 

							 <div class="row">

                                       

                                            <div class="col-md-12">

										<label>City</label>

                                                <input id="city" type="text" name="city" class="form-control"  required>

                                                @if ($errors->has('name'))

                                                    <span class="help-block">

                                                    <strong>{{ $errors->first('name') }}</strong>

                                                     </span>

                                                @endif



                                            </div>

                             </div>

							 		 <br>

								 @endif	 

								 
                                   
								 

								 @if($slug =='') 

							 <div class="row">

                                       

                                            <div class="col-md-12">

											<label>	State </label>

                                                <input id="state" type="text" name="state" class="form-control"  required>

                                                @if ($errors->has('name'))

                                                    <span class="help-block">

                                                    <strong>{{ $errors->first('name') }}</strong>

                                                     </span>

                                                @endif



                                            </div>

                             </div>

							 		 
 <br>
								 @endif	 

								 

								  

								  

								 @if($slug =='') 

							 <div class="row">

                                       

                                            <div class="col-md-12">

												<label>	Zip </label>

                                                <input id="zip" type="text" name="zip" class="form-control"  required>

                                                @if ($errors->has('name'))

                                                    <span class="help-block">

                                                    <strong>{{ $errors->first('name') }}</strong>

                                                     </span>

                                                @endif



                                            </div>

                             </div>

							 		 
 <br>
								 @endif	 

								  

								 

								  @if($slug =='') 

							 <div class="row">

                                       

                                            <div class="col-md-12">

												<label>Fax</label>

                                                <input id="fax" type="text" name="fax" class="form-control"  required>

                                                @if ($errors->has('name'))

                                                    <span class="help-block">

                                                    <strong>{{ $errors->first('name') }}</strong>

                                                     </span>

                                                @endif



                                            </div>

                             </div>

							 		 <br> 

								 @endif	 

								   

								  @if($slug =='') 

							 <div class="row">

                                       

                                            <div class="col-md-12">

											<label>	Price </label>

                                                <input id="price" type="text" name="price" class="form-control"  required>

                                                @if ($errors->has('name'))

                                                    <span class="help-block">

                                                    <strong>{{ $errors->first('name') }}</strong>

                                                     </span>

                                                @endif



                                            </div>

                             </div>

							 		 
<br>
								 @endif	 

								    

								  @if($slug =='branches') 

							 <div class="row">

                                       

                                            <div class="col-md-12">

											<label>Url</label>

                                                <input id="url" type="text" name="url" class="form-control"  required>

                                                @if ($errors->has('name'))

                                                    <span class="help-block">

                                                    <strong>{{ $errors->first('name') }}</strong>

                                                     </span>

                                                @endif



                                            </div>

                             </div>

							 		 
<br>
								 @endif	 
                              @if($slug =='brochure') 

								 <div class="row">

                                       

                                            <div class="col-md-12">

											<label>Product Brands</label>

                                               <select name="product_brands" class="form-control" id="product_brands">
											  @foreach ($product_brands as $value)
											  <option value="{{$value->id}}">{{$value->name}}</option>
											  @endforeach
											</select>



                                            </div>

                             </div>
 <br>
								  @endif	           
								  @if($slug =='dealsday') 

								 <div class="row">

                                       

                                            <div class="col-md-12">

											<label>	Youtube Id </label>

                                                <input id="url" type="youtubeid" name="youtubeid" class="form-control"  required>

                                                @if ($errors->has('name'))

                                                    <span class="help-block">

                                                    <strong>{{ $errors->first('name') }}</strong>

                                                     </span>

                                                @endif



                                            </div>

                             </div>
 <br>
								  @endif	 
                                       
								  @if($slug =='') 

							 <div class="row">

                                       

                                            <div class="col-md-12">

											<label>Latitude </label>

                                                <input id="url" type="text" name="url" class="form-control"  required>

                                                @if ($errors->has('name'))

                                                    <span class="help-block">

                                                    <strong>{{ $errors->first('name') }}</strong>

                                                     </span>

                                                @endif



                                            </div>

                             </div>

							 		 
                                 <br>
								 @endif	 
                  
								  @if($slug =='') 

							 <div class="row">

                                       

                                            <div class="col-md-12">

											<label>Longitude</label>

                                                <input id="url" type="text" name="url" class="form-control"  required>

                                                @if ($errors->has('name'))

                                                    <span class="help-block">

                                                    <strong>{{ $errors->first('name') }}</strong>

                                                     </span>

                                                @endif



                                            </div>

                             </div>

							 		 
 <br>
								 @endif	 

									
                                   


                           
           
     <div class="row">

    @if(($slug=='socialicons'||$slug=='cardsocialicons'||$slug=='contact'||$slug=='contactcard'||$slug=='header-email'||$slug=='header-offer'))




		

		<div class="iconview col-sm-12 selected_icon">

			<div class="col-sm-2"> 

				<label>Selected Icon:</label>

			</div>

			<div class="col-sm-2">

     			<div class="row"><i class="icons iconsize"></i></div>

     			<input type="hidden" name="fonticontxt" class="fonticoncls" >

     		</div>

     			

     	</div>

     	

      	

     	

     	<div class="row col-sm-12"></div>

     <div class="boxcls col-sm-12">

     	

		<div class="row cursorcls ">

	

			

		@php

	$fontawesome = array('fa-glass','fa-music','fa-search','fa-envelope-o','fa-heart','fa-star','fa-star-o','fa-user','fa-film','fa-th-large','fa-th','fa-th-list','fa-check','fa-remove','fa-close','fa-times','fa-search-plus','fa-search-minus','fa-power-off','fa-signal','fa-gear','fa-cog','fa-trash-o','fa-home','fa-file-o','fa-clock-o','fa-road','fa-download','fa-arrow-circle-o-down','fa-arrow-circle-o-up','fa-inbox','fa-play-circle-o','fa-rotate-right','fa-repeat','fa-refresh','fa-list-alt','fa-lock','fa-flag','fa-headphones','fa-volume-off','fa-volume-down','fa-volume-up','fa-qrcode','fa-barcode','fa-tag','fa-tags','fa-book','fa-bookmark','fa-print','fa-camera','fa-font','fa-bold','fa-italic','fa-text-height','fa-text-width','fa-align-left','fa-align-center','fa-align-right','fa-align-justify','fa-list','fa-dedent','fa-outdent','fa-indent','fa-video-camera','fa-photo','fa-image','fa-picture-o','fa-pencil','fa-map-marker','fa-adjust','fa-tint','fa-edit','fa-pencil-square-o','fa-share-square-o','fa-check-square-o','fa-arrows','fa-step-backward','fa-fast-backward','fa-backward','fa-play','fa-pause','fa-stop','fa-forward','fa-fast-forward','fa-step-forward','fa-eject','fa-chevron-left','fa-chevron-right','fa-plus-circle','fa-minus-circle','fa-times-circle','fa-check-circle','fa-question-circle','fa-info-circle','fa-crosshairs','fa-times-circle-o','fa-check-circle-o','fa-ban','fa-arrow-left','fa-arrow-right','fa-arrow-up','fa-arrow-down','fa-mail-forward','fa-share','fa-expand','fa-compress','fa-plus','fa-minus','fa-asterisk','fa-exclamation-circle','fa-gift','fa-leaf','fa-fire','fa-eye','fa-eye-slash','fa-warning','fa-exclamation-triangle','fa-plane','fa-calendar','fa-random','fa-comment','fa-magnet','fa-chevron-up','fa-chevron-down','fa-retweet','fa-shopping-cart','fa-folder','fa-folder-open','fa-arrows-v','fa-arrows-h','fa-bar-chart-o','fa-bar-chart','fa-twitter-square','fa-facebook-square','fa-camera-retro','fa-key','fa-gears','fa-cogs','fa-comments','fa-thumbs-o-up','fa-thumbs-o-down','fa-star-half','fa-heart-o','fa-sign-out','fa-linkedin-square','fa-thumb-tack','fa-external-link','fa-sign-in','fa-trophy','fa-github-square','fa-upload','fa-lemon-o','fa-phone','fa-square-o','fa-bookmark-o','fa-phone-square','fa-twitter','fa-facebook-f','fa-facebook','fa-github','fa-unlock','fa-credit-card','fa-rss','fa-hdd-o','fa-bullhorn','fa-bell','fa-certificate','fa-hand-o-right','fa-hand-o-left','fa-hand-o-up','fa-hand-o-down','fa-arrow-circle-left','fa-arrow-circle-right','fa-arrow-circle-up','fa-arrow-circle-down','fa-globe','fa-wrench','fa-tasks','fa-filter','fa-briefcase','fa-arrows-alt','fa-group','fa-users','fa-chain','fa-link','fa-cloud','fa-flask','fa-cut','fa-scissors','fa-copy','fa-files-o','fa-paperclip','fa-save','fa-floppy-o','fa-square','fa-navicon','fa-reorder','fa-bars','fa-list-ul','fa-list-ol','fa-strikethrough','fa-underline','fa-table','fa-magic','fa-truck','fa-pinterest','fa-pinterest-square','fa-google-plus-square','fa-google-plus','fa-money','fa-caret-down','fa-caret-up','fa-caret-left','fa-caret-right','fa-columns','fa-unsorted','fa-sort','fa-sort-down','fa-sort-desc','fa-sort-up','fa-sort-asc','fa-envelope','fa-linkedin','fa-rotate-left','fa-undo','fa-legal','fa-gavel','fa-dashboard','fa-tachometer','fa-comment-o','fa-comments-o','fa-flash','fa-bolt','fa-sitemap','fa-umbrella','fa-paste','fa-clipboard','fa-lightbulb-o','fa-exchange','fa-cloud-download','fa-cloud-upload','fa-user-md','fa-stethoscope','fa-suitcase','fa-bell-o','fa-coffee','fa-cutlery','fa-file-text-o','fa-building-o','fa-hospital-o','fa-ambulance','fa-medkit','fa-fighter-jet','fa-beer','fa-h-square','fa-plus-square','fa-angle-double-left','fa-angle-double-right','fa-angle-double-up','fa-angle-double-down','fa-angle-left','fa-angle-right','fa-angle-up','fa-angle-down','fa-desktop','fa-laptop','fa-tablet','fa-mobile-phone','fa-mobile','fa-circle-o','fa-quote-left','fa-quote-right','fa-spinner','fa-circle','fa-mail-reply','fa-reply','fa-github-alt','fa-folder-o','fa-folder-open-o','fa-smile-o','fa-frown-o','fa-meh-o','fa-gamepad','fa-keyboard-o','fa-flag-o','fa-flag-checkered','fa-terminal','fa-code','fa-mail-reply-all','fa-reply-all','fa-star-half-empty','fa-star-half-full','fa-star-half-o','fa-location-arrow','fa-crop','fa-code-fork','fa-unlink','fa-chain-broken','fa-question','fa-info','fa-exclamation','fa-superscript','fa-subscript','fa-eraser','fa-puzzle-piece','fa-microphone','fa-microphone-slash','fa-shield','fa-calendar-o','fa-fire-extinguisher','fa-rocket','fa-maxcdn','fa-chevron-circle-left','fa-chevron-circle-right','fa-chevron-circle-up','fa-chevron-circle-down','fa-html5','fa-css3','fa-anchor','fa-unlock-alt','fa-bullseye','fa-ellipsis-h','fa-ellipsis-v','fa-rss-square','fa-play-circle','fa-ticket','fa-minus-square','fa-minus-square-o','fa-level-up','fa-level-down','fa-check-square','fa-pencil-square','fa-external-link-square','fa-share-square','fa-compass','fa-toggle-down','fa-caret-square-o-down','fa-toggle-up','fa-caret-square-o-up','fa-toggle-right','fa-caret-square-o-right','fa-euro','fa-eur','fa-gbp','fa-dollar','fa-usd','fa-rupee','fa-inr','fa-cny','fa-rmb','fa-yen','fa-jpy','fa-ruble','fa-rouble','fa-rub','fa-won','fa-krw','fa-bitcoin','fa-btc','fa-file','fa-file-text','fa-sort-alpha-asc','fa-sort-alpha-desc','fa-sort-amount-asc','fa-sort-amount-desc','fa-sort-numeric-asc','fa-sort-numeric-desc','fa-thumbs-up','fa-thumbs-down','fa-youtube-square','fa-youtube','fa-xing','fa-xing-square','fa-youtube-play','fa-dropbox','fa-stack-overflow','fa-instagram','fa-flickr','fa-adn','fa-bitbucket','fa-bitbucket-square','fa-tumblr','fa-tumblr-square','fa-long-arrow-down','fa-long-arrow-up','fa-long-arrow-left','fa-long-arrow-right','fa-apple','fa-windows','fa-android','fa-linux','fa-dribbble','fa-skype','fa-foursquare','fa-trello','fa-female','fa-male','fa-gittip','fa-gratipay','fa-sun-o','fa-moon-o','fa-archive','fa-bug','fa-vk','fa-weibo','fa-renren','fa-pagelines','fa-stack-exchange','fa-arrow-circle-o-right','fa-arrow-circle-o-left','fa-toggle-left','fa-caret-square-o-left','fa-dot-circle-o','fa-wheelchair','fa-vimeo-square','fa-turkish-lira','fa-try','fa-plus-square-o','fa-space-shuttle','fa-slack','fa-envelope-square','fa-wordpress','fa-openid','fa-institution','fa-bank','fa-university','fa-mortar-board','fa-graduation-cap','fa-yahoo','fa-google','fa-reddit','fa-reddit-square','fa-stumbleupon-circle','fa-stumbleupon','fa-delicious','fa-digg','fa-pied-piper','fa-pied-piper-alt','fa-drupal','fa-joomla','fa-language','fa-fax','fa-building','fa-child','fa-paw','fa-spoon','fa-cube','fa-cubes','fa-behance','fa-behance-square','fa-steam','fa-steam-square','fa-recycle','fa-automobile','fa-car','fa-cab','fa-taxi','fa-tree','fa-spotify','fa-deviantart','fa-soundcloud','fa-database','fa-file-pdf-o','fa-file-word-o','fa-file-excel-o','fa-file-powerpoint-o','fa-file-photo-o','fa-file-picture-o','fa-file-image-o','fa-file-zip-o','fa-file-archive-o','fa-file-sound-o','fa-file-audio-o','fa-file-movie-o','fa-file-video-o','fa-file-code-o','fa-vine','fa-codepen','fa-jsfiddle','fa-life-bouy','fa-life-buoy','fa-life-saver','fa-support','fa-life-ring','fa-circle-o-notch','fa-ra','fa-rebel','fa-ge','fa-empire','fa-git-square','fa-git','fa-hacker-news','fa-tencent-weibo','fa-qq','fa-wechat','fa-weixin','fa-send','fa-paper-plane','fa-send-o','fa-paper-plane-o','fa-history','fa-genderless','fa-circle-thin','fa-header','fa-paragraph','fa-sliders','fa-share-alt','fa-share-alt-square','fa-bomb','fa-soccer-ball-o','fa-futbol-o','fa-tty','fa-binoculars','fa-plug','fa-slideshare','fa-twitch','fa-yelp','fa-newspaper-o','fa-wifi','fa-calculator','fa-paypal','fa-google-wallet','fa-cc-visa','fa-cc-mastercard','fa-cc-discover','fa-cc-amex','fa-cc-paypal','fa-cc-stripe','fa-bell-slash','fa-bell-slash-o','fa-trash','fa-copyright','fa-at','fa-eyedropper','fa-paint-brush','fa-birthday-cake','fa-area-chart','fa-pie-chart','fa-line-chart','fa-lastfm','fa-lastfm-square','fa-toggle-off','fa-toggle-on','fa-bicycle','fa-bus','fa-ioxhost','fa-angellist','fa-cc','fa-shekel','fa-sheqel','fa-ils','fa-meanpath','fa-buysellads','fa-connectdevelop','fa-dashcube','fa-forumbee','fa-leanpub','fa-sellsy','fa-shirtsinbulk','fa-simplybuilt','fa-skyatlas','fa-cart-plus','fa-cart-arrow-down','fa-diamond','fa-ship','fa-user-secret','fa-motorcycle','fa-street-view','fa-heartbeat','fa-venus','fa-mars','fa-mercury','fa-transgender','fa-transgender-alt','fa-venus-double','fa-mars-double','fa-venus-mars','fa-mars-stroke','fa-mars-stroke-v','fa-mars-stroke-h','fa-neuter','fa-facebook-official','fa-pinterest-p','fa-whatsapp','fa-server','fa-user-plus','fa-user-times','fa-hotel','fa-bed','fa-viacoin','fa-train','fa-subway','fa-medium')

   @endphp

   

   @php	$total_count=count($fontawesome) @endphp

   

    @php $count=1@endphp

   

				

				

				

				@foreach($fontawesome as $value)

				

					

				

				

					<div class="font_div border_font_div col-md-1 col-xs-3" >

					

							<i class="fa {{ $value}}" ></i>

						

						

						

						 <input type="radio" name="fonticontxt" value="fa{{$value}}" class="radiocls">

						 

					

					</div>

					



	

	         

	

		 @if	($count==$total_count)

					

						

					</div>

						

					

						

					

					 @elseif($count%12==0)

				

					</div><div class="row cursorcls">

					@endif	 

		

		

			@endforeach

		
<br>
		 @endif	 




</div>

  


                    @if(!empty($error)) 	 

									<p style="color: red;">You exceeded the limit</p>	 

								 @endif	  

                                            <br>

                                            <div class="row">
											
                        <div class="col-md-12">
						
						<button type="submit" class="btn btn-block btn-primary" >Save</button><br>

                                                </div>

                                            </div>

                                       

                                </div>

                            </div>

                        </div>

                    </div>



                </div>



            </form>

        </div>











    </div>

@stop

@section('javascript')

    <link rel="stylesheet" href="{{ asset('dashboard/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">



    <script src="{{ asset('dashboard/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>

    <script src="{{ asset('dashboard/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}} "></script>

   

<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

<script type="text/javascript">]

    $(document).ready(function() {

       $('.ckeditor').ckeditor();

	    $(this).hide();

    $("p.ckeditor").show();]]

	 

	   

    });

</script>



   <script>

        var myIndex = 0;

        carousel();



        function carousel() {

            var i;

            var x = document.getElementsByClassName("mySlides");

            for (i = 0; i < x.length; i++) {

                x[i].style.display = "none";

            }

            myIndex++;

            if (myIndex > x.length) {myIndex = 1}

            x[myIndex-1].style.display = "block";

            setTimeout(carousel, 2000); // Change image every 2 seconds

        }

    </script>

	

	

	<script> 

 $(document).ready(function(){

 

 	$('.font_div'). click( function() {

 						

 					var iconname = $(this).find('input:radio').val();

 					

 					

					

					$('.fonticoncls').val(iconname);

 			$('.icons').addClass(iconname);

 			$('.iconview').addClass('showicon');

 			$('.iconupdate').addClass('iconupdateshow');

			

			

 				

 			

 			

 			$('.font_div').find('input.radiocls').prop( 'checked', false );

 	        $(this).find('input.radiocls').prop( 'checked', true );

			$('.font_div').removeClass('border_green');

			$('.font_div').addClass('border_font_div');

			$(this).removeClass('border_font_div');

			$(this).addClass('border_green');

 			

			

 	});

 	

 });

 </script>



@endsection



