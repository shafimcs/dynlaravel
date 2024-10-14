<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\BrandsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
	
	
	
  	$editpost=CategoryPost::where('slug','slider')->first();
		$catid=$editpost->id;
		$slider=Post::where('category_id',$catid)->get();
		
		
        return view('welcome',['slider'=>$slider]);
});*/

Route::get('/', [HomeController::class, 'create'])->name('home.create');

 Route::get('/about', 'HomeController@about')->name('home.about');
 Route::get('/gallery', 'HomeController@gallery')->name('home.gallery');
 Route::get('/video', 'HomeController@video')->name('home.video');
 Route::get('/pricingplan', 'HomeController@pricingplan')->name('home.pricingplan');
 Route::get('/contact', 'HomeController@contact')->name('home.contact');
 Route::get('/product', 'HomeController@product')->name('home.product');
 Route::get('/productbrands/{id}', 'HomeController@productbrands')->name('home.productbrands');
  Route::get('/productbrandsbrochure/{id}', 'HomeController@productbrandsbrochure')->name('home.productbrandsbrochure');
 Route::get('/productdetails/{id}', 'HomeController@productdetails')->name('home.productdetails');
 Route::get('/categoryproduct/{id}', 'HomeController@categoryproduct')->name('home.categoryproduct');
 Route::get('/blog', 'HomeController@blog')->name('home.blog');
 Route::get('/blogdetails/{id}', 'HomeController@blogdetails')->name('home.blogdetails');
 Route::get('/brochure', 'HomeController@brochure')->name('home.brochure');
 Route::get('/branches', 'HomeController@branches')->name('home.branches');
 Route::get('/branchdetails/{id}', 'HomeController@branchdetails')->name('home.branchdetails');
 Route::get('/contactcard', 'HomeController@contactcard')->name('home.contactcard');
 Route::get('/searchproduct', 'HomeController@searchproduct')->name('home.searchproduct');


  Route::get('/html_email', 'HomeController@html_email')->name('home.html_email');


 
Route::group(['middleware' => ['auth'],'prefix'=>'admin'], function () {
	
    Route::get('/slider/image', 'admin\SliderController@create')->name('slider.create');
    Route::post('/slider/image/store', 'admin\SliderController@store')->name('slider.store');
    Route::get('/slider/image/show', 'admin\SliderController@show')->name('slider.show');
    Route::get('/slider/image/{id}', 'admin\SliderController@edit')->name('slider.edit');
    Route::post('/slider/image/update', 'admin\SliderController@update')->name('slider.update');
    Route::post('/slider/image/', 'admin\SliderController@delete')->name('slider.destroy');


    Route::get('/category', 'admin\CategoryController@create')->name('category.create');
    Route::post('/category/store', 'admin\CategoryController@store')->name('category.store');
    Route::get('/category/show', 'admin\CategoryController@show')->name('category.show');
    Route::get('/category/{id}', 'admin\CategoryController@edit')->name('category.edit');
    Route::post('/category/update', 'admin\CategoryController@update')->name('category.update');
    Route::delete('/category/{id}', 'admin\CategoryController@destroy')->name('category.destroy');

    Route::get('/country', 'admin\CountryController@create')->name('country.create');
    Route::post('/country/store', 'admin\CountryController@store')->name('country.store');
    Route::get('/country/show', 'admin\CountryController@show')->name('country.show');
    Route::get('/country/{id}', 'admin\CountryController@edit')->name('country.edit');
    Route::post('/country/update', 'admin\CountryController@update')->name('country.update');
    Route::delete('/country/{id}', 'admin\CountryController@destroy')->name('country.destroy');
	
	Route::get('/brands', 'admin\BrandsController@create')->name('Brands.create');
    Route::post('/brands/store', 'admin\BrandsController@store')->name('Brands.store');
    Route::get('/brands/show', 'admin\BrandsController@show')->name('Brands.show');
    Route::get('/brands/{id}', 'admin\BrandsController@edit')->name('Brands.edit');
    Route::post('/brands/update', 'admin\BrandsController@update')->name('Brands.update');
    Route::delete('/brands/{id}', 'admin\BrandsController@destroy')->name('Brands.destroy');
	 
	Route::get('/productbrands', 'admin\ProductBrandsController@create')->name('productbrands.create');
    Route::post('/productbrands/store', 'admin\ProductBrandsController@store')->name('productbrands.store');
    Route::get('/productbrands/show', 'admin\ProductBrandsController@show')->name('productbrands.show');
    Route::get('/productbrands/{id}', 'admin\ProductBrandsController@edit')->name('productbrands.edit');
    Route::post('/productbrands/update', 'admin\ProductBrandsController@update')->name('productbrands.update');
    Route::delete('/productbrands/{id}', 'admin\ProductBrandsController@destroy')->name('productbrands.destroy');
	
	 
	Route::get('/categorypost', 'admin\CategorypostController@create')->name('categorypost.create');
    Route::post('/categorypost/store', 'admin\CategorypostController@store')->name('categorypost.store');
    Route::get('/categorypost/show', 'admin\CategorypostController@show')->name('categorypost.show');
    Route::get('/categorypost/{id}', 'admin\CategorypostController@edit')->name('categorypost.edit');
    Route::post('/categorypost/update', 'admin\CategorypostController@update')->name('categorypost.update');
    Route::delete('/categorypost/{id}', 'admin\CategorypostController@destroy')->name('categorypost.destroy');
	
	Route::get('/categoryproduct', 'admin\CategoryproductController@create')->name('categoryproduct.create');
    Route::post('/categoryproduct/store', 'admin\CategoryproductController@store')->name('categoryproduct.store');
    Route::get('/categoryproduct/show', 'admin\CategoryproductController@show')->name('categoryproduct.show');
    Route::get('/categoryproduct/{id}', 'admin\CategoryproductController@edit')->name('categoryproduct.edit');
    Route::post('/categoryproduct/update', 'admin\CategoryproductController@update')->name('categoryproduct.update');
    Route::delete('/categoryproduct/{id}', 'admin\CategoryproductController@destroy')->name('categoryproduct.destroy');
	
	Route::get('/product', 'admin\ProductController@create')->name('product.create');
    Route::post('/product/store', 'admin\ProductController@store')->name('product.store');
    Route::get('/product/show', 'admin\ProductController@show')->name('product.show');
    Route::get('/product/{id}', 'admin\ProductController@edit')->name('product.edit');
    Route::post('/product/update', 'admin\ProductController@update')->name('product.update');
    Route::delete('/product/{id}', 'admin\ProductController@destroy')->name('product.destroy');
	Route::post('/imageupload', 'admin\ProductController@imageupload')->name('product.imageupload');
	Route::post('/deleteimg', 'admin\ProductController@deleteimg')->name('product.deleteimg');
	
	Route::get('/themecolors', 'admin\ThemeColorsController@create')->name('themecolors.create');
    Route::post('/themecolors/store', 'admin\ThemeColorsController@store')->name('themecolors.store');
    Route::get('/themecolors/show', 'admin\ThemeColorsController@show')->name('themecolors.show');
    Route::get('/themecolors/{id}', 'admin\ThemeColorsController@edit')->name('themecolors.edit');
    Route::post('/themecolors/update', 'admin\ThemeColorsController@update')->name('themecolors.update');
    Route::delete('/themecolors/{id}', 'admin\ThemeColorsController@destroy')->name('themecolors.destroy');
	
	Route::get('/post','admin\PostController@create')->name('post.create');
    Route::post('/post/store{slug}','admin\PostController@store')->name('post.store');
    Route::get('/post/show', 'admin\PostController@show')->name('post.show');
    Route::get('/post/{id}', 'admin\PostController@edit')->name('post.edit');
    Route::post('/post/update', 'admin\PostController@update')->name('post.update');
    Route::delete('/post/{id}', 'admin\PostController@destroy')->name('post.destroy');



    Route::get('/package', 'admin\PackageController@create')->name('package.create');
    Route::post('/package/store', 'admin\PackageController@store')->name('package.store');
    Route::get('/package/show', 'admin\PackageController@show')->name('package.show');
    Route::get('/package/{id}', 'admin\PackageController@edit')->name('package.edit');
    Route::post('/package/update', 'admin\PackageController@update')->name('package.update');
    Route::delete('/package/delete/{id}', 'admin\PackageController@destroy')->name('package.destroy');
    Route::get('/package', 'admin\PackageController@create')->name('package.create');
    Route::post('/package/image/delete', 'admin\PackageController@deletePackageimage')->name('admin.delete.package_image');

    Route::get('/package/reviews/{id}/{package_name}/', 'admin\PackageController@packageReviews')->name('package.reviews');
    Route::post('/push/package/review', 'admin\PackageController@pushPackagetoHome')->name('push.package.review.to.home');
    Route::post('/push/package/review/back', 'admin\PackageController@pushPackageBack')->name('push.package.review.back');
    Route::post('/package/reviews/delete', 'admin\PackageController@packageReviewdelete')->name('package.review.delete');
    Route::post('/location/list', 'admin\PackageController@locationList')->name('location.list.ajax');


    Route::get('/blog', 'BlogController@blogs')->name('blog.create');
    Route::post('/blog/store', 'BlogController@addBlog')->name('blog.store');
    Route::get('/blog/show', 'BlogController@viewBlogs')->name('blog.show');
    Route::get('/blog/{id}', 'BlogController@editBlog')->name('blog.edit');
    Route::post('/blog/update', 'BlogController@updateBlog')->name('blog.update');
    Route::delete('/blog/destroy/{id}', 'BlogController@destroyBlog')->name('blog.destroy');
    Route::get('/blog/reviews/{id}/{title}', 'BlogController@viewReviews')->name('blog.review');
    Route::delete('/review/{id}/destroy', 'BlogController@destroyReview')->name('blog.review.destroy');


    Route::get('/testimonial', 'TestimonialController@testimonial')->name('testimonial.create');
    Route::post('/testimonial/store', 'TestimonialController@addTestimonial')->name('testimonial.store');
    Route::get('/testimonial/show', 'TestimonialController@viewTestimonial')->name('testimonial.show');
    Route::get('/testimonial/{id}', 'TestimonialController@editTestimonial')->name('testimonial.edit');
    Route::post('/testimonial/update', 'TestimonialController@updateTestimonial')->name('testimonial.update');
    Route::delete('/testimonial/destroy/{id}', 'TestimonialController@destroyTestimonial')->name('testimonial.destroy');

    Route::get('/location/create', 'admin\LocationController@locationCreate')->name('location.create');
    Route::post('/location/store', 'admin\LocationController@storeLocation')->name('location.store');
    Route::get('/location/index', 'admin\LocationController@indexLocation')->name('location.index');
    Route::get('/location/edit/{id}', 'admin\LocationController@editLocation')->name('location.edit');
    Route::post('/location/update', 'admin\LocationController@updateLocation')->name('location.update');
    Route::post('/location/delete', 'admin\LocationController@deleteLocation')->name('location.delete');
    Route::post('destination/location/image', 'admin\DestinationController@showDestinationImage')->name('admin.view.location.image');


    Route::get('/destination/create', 'admin\DestinationController@createDestination')->name('destination.create');
    Route::post('/destination/store', 'admin\DestinationController@storeDestination')->name('destination.store');
    Route::get('/destination/show', 'admin\DestinationController@showDestinations')->name('destination.show');
    Route::get('/destination/edit/{id}', 'admin\DestinationController@editDestination')->name('destination.edit');
    Route::post('/destination/update', 'admin\DestinationController@updateDestination')->name('destination.update');
    Route::post('/destination/delete', 'admin\DestinationController@deleteDestination')->name('destination.delete');
    Route::get('/destination/reviews/{id}', 'admin\DestinationController@destinationReviews')->name('destination.reviews');
    Route::post('/push/destination/review', 'admin\DestinationController@pushPackagetoHome')->name('push.destination.review.to.home');
    Route::post('/push/destination/review/back', 'admin\DestinationController@pushPackageBack')->name('push.destination.review.back');
    Route::post('/destination/review/delete', 'admin\DestinationController@destinationReviewdelete')->name('destination.review.delete');



    Route::get('/hotel/create', 'admin\HotelController@createHotel')->name('hotel.create');
    Route::post('/hotel/store', 'admin\HotelController@storeHotel')->name('hotel.store');
    Route::get('/hotel/show', 'admin\HotelController@showHotel')->name('hotel.show');
    Route::get('/hotel/edit/{id}', 'admin\HotelController@editHotel')->name('hotel.edit');
    Route::post('/hotel/update', 'admin\HotelController@updateHotel')->name('hotel.update');
    Route::post('/hotel/delete', 'admin\HotelController@deleteHotel')->name('hotel.delete');
    Route::get('/hotel/reviews/{id}', 'admin\HotelController@reviews')->name('hotel.reviews');
    Route::post('/push/hotel/review', 'admin\HotelController@pushHoteltoHome')->name('push.hotel.review.to.home');
    Route::post('/push/hotel/review/back', 'admin\HotelController@pushHotelBack')->name('push.hotel.review.back');
    Route::post('/hotel/reviews/delete', 'admin\HotelController@hotelReviewdelete')->name('hotel.review.delete');
    Route::post('/hotel/room/delete', 'admin\HotelController@deleteHotelroom')->name('admin.delete.hotel_room');
    Route::get('/bookings', 'admin\AdminController@viewBookings')->name('view.bookings');
    Route::get('hotel/bookings', 'admin\AdminController@viewhotelBookings')->name('view.hotel.bookings');
    Route::get('/enquiries', 'admin\AdminController@viewEnquiries')->name('view.enquiries');
    Route::get('/trip/requests', 'admin\AdminController@viewTriprequests')->name('view.triprequests');
    Route::get('/changepassword', 'admin\AdminController@changepassword')->name('password.change');
    Route::post('/change/password/store', 'admin\AdminController@passwordchange')->name('changepassword');
	
});


Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/index', 'HomeController@create')->name('home.create');