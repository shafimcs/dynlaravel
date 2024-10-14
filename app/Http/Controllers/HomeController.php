<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Product;
use App\CategoryProduct;
use App\CategoryPost;
use App\Specification;
use App\ThemeColors;
use App\Productmultiimage;
use App\ProductBrands;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
	 
	 
	     public function index()
    {
        return view('home');
    }
	/*public  function  headers()
    {
		$editpost=CategoryPost::where('slug','phone')->first();
		$catid=$editpost->id;
		$phone=Post::where('category_id',$catid)->first();
		
		$editpost=CategoryPost::where('slug','email')->first();
		$catid=$editpost->id;
		$email=Post::where('category_id',$catid)->first();
       
	   return  View::make($this->includes, ['phone' => $phone]);
    }*/
	
	public static function getcallnumber() {
		
		$editpost=CategoryPost::where('slug','call-number')->first();
		$catid=$editpost->id;
		$phone=Post::where('category_id',$catid)->first();
        return $phone->title;
    }
	public static function getabout() {
		
		$editpost=CategoryPost::where('slug','abouts')->first();
		$catid=$editpost->id;
		$aboutus=Post::where('category_id',$catid)->first();
        return $aboutus->description;
    }
	public static function getheaderemail() {
		
		$editpost=CategoryPost::where('slug','header-email')->first();
		$catid=$editpost->id;
		$headeremail=Post::where('category_id',$catid)->first();
        return $headeremail;
    }
	public static function getheaderoffer() {
		
		$editpost=CategoryPost::where('slug','header-offer')->first();
		$catid=$editpost->id;
		$headeroffer=Post::where('category_id',$catid)->first();
        return $headeroffer;
    }
	public static function getlogo() {
		
		$editpost=CategoryPost::where('slug','logo')->first();
		$catid=$editpost->id;
		$logo=Post::where('category_id',$catid)->first();
        return $logo->image;
    }
	public static function getwhatsappnumber() {
		
		$editpost=CategoryPost::where('slug','whatsapp-number')->first();
		$catid=$editpost->id;
		$whatsapp=Post::where('category_id',$catid)->first();
        return $whatsapp->title;
    }
	public static function gettopstore() {
		
		$editpost=CategoryPost::where('slug','topstore')->first();
		$catid=$editpost->id;
		$topstore=Post::where('category_id',$catid)->first();
        return $topstore->title;
    }
	public static function getcopyright() {
		
		$editpost=CategoryPost::where('slug','copyright')->first();
		$catid=$editpost->id;
		$copyright=Post::where('category_id',$catid)->first();
        return $copyright;
    }
	public static function getphone() {
		
		$editpost=CategoryPost::where('slug','phone')->first();
		$catid=$editpost->id;
		$phone=Post::where('category_id',$catid)->first();
        return $phone->phone1;
    }
	
	public static function getemail() {
		
		$editpost=CategoryPost::where('slug','email')->first();
		$catid=$editpost->id;
		$email=Post::where('category_id',$catid)->first();
        return $email->email1;
      }
	public static function getheaderstickey(){
	
	 $themecolors = ThemeColors::first();
	  
	   	 return $themecolors;
     
}
	
    public static function getaddress() {
			
		$editpost=CategoryPost::where('slug','address')->first();
		$catid=$editpost->id;
		$address=Post::where('category_id',$catid)->first();
		 return $address->address1;
		}
		
    public static function getcertifiedlogo() {
		$editpost=CategoryPost::where('slug','certified-logo')->first();
		$catid=$editpost->id;
		$certified_logo=Post::where('category_id',$catid)->get();
		 return $certified_logo;
		
		}
		
	public static function getsocialicons() {
		$editpost=CategoryPost::where('slug','socialicons')->first();
		$catid=$editpost->id;
		$socialicons=Post::where('category_id',$catid)->get();
		 return $socialicons;
	}

    public static function getexpertservices() {
		
		$editpost=CategoryPost::where('slug','expert-services')->first();
		$catid=$editpost->id;
		$expertservices=Post::where('category_id',$catid)->first();
		
		 return $expertservices;
	}	
	
		

	
	public static function getproduct_category() {
		
		$categoryproduct=CategoryProduct::get();
		
		
		 return $categoryproduct;
	}
	public static function getproduct_brands($id=null) {
		
		$productbrands=ProductBrands::where('category_id',$id)->get();
		
		
		 return $productbrands;
	}
	
	public static function getproduct_brands_cat($id=null) {
		
		$productbrands=ProductBrands::where('id',$id)->first();
		$productcategory=CategoryProduct::where('id',$productbrands->category_id)->first();
		
		 return $productcategory;
	}
    public static function getmapaddress() {
		
		$editpost=CategoryPost::where('slug','mapaddress')->first();
		$catid=$editpost->id;
		$mapaddress=Post::where('category_id',$catid)->first();
		
		 return $mapaddress;
	}	
	
	
	
	public static function getproduct($cat_id=null) {
		
		
		$product=Product::where(['category_id'=>$cat_id])->limit(5)->get();
		
		
		 return $product;
	}	

	public static function getpopup() {
		
		
		$editpost=CategoryPost::where('slug','popup')->first();
		$catid=$editpost->id;
		$popup=Post::where('category_id',$catid)->first();
		
		 return $popup;
	}	
		
	public function create()
    {
		
		$editpost=CategoryPost::where('slug','slider')->first();
		$catid=$editpost->id;
		$slider=Post::where('category_id',$catid)->get();
		
		
		$editpost=CategoryPost::where('slug','banner1')->first();
		$catid=$editpost->id;
		$banner1=Post::where('category_id',$catid)->first();
		
		
		$editpost=CategoryPost::where('slug','banner2')->first();
		$catid=$editpost->id;
		$banner2=Post::where('category_id',$catid)->first();
		
		
		$editpost=CategoryPost::where('slug','banner3')->first();
		$catid=$editpost->id;
		$banner3=Post::where('category_id',$catid)->first();
		
		
		$editpost=CategoryPost::where('slug','banner4')->first();
		$catid=$editpost->id;
		$banner4=Post::where('category_id',$catid)->first();
		
		
		$editpost=CategoryPost::where('slug','dealsday')->first();
		$catid=$editpost->id;
		$dealsday=Post::where('category_id',$catid)->first();
		
		
		$editpost=CategoryPost::where('slug','special-offer')->first();
		$catid=$editpost->id;
		$special_offer=Post::where('category_id',$catid)->get();
		
		$editpost=CategoryPost::where('slug','client-testimonial')->first();
		$catid=$editpost->id;
		$testimonial=Post::where('category_id',$catid)->get();
		
		$editpost=CategoryPost::where('slug','winter-boots')->first();
		$catid=$editpost->id;
		$winter_boots=Post::where('category_id',$catid)->first();
		
		
		
		$editpost=CategoryPost::where('slug','blogs')->first();
		$catid=$editpost->id;
		$blogs=Post::where('category_id',$catid)->get();
		
		$product=Product::limit(10)->get();
		$bestseller=Product::where('bestseller',1)->get();
		
       	
		$editpost=CategoryPost::where('slug','blogs')->first();
		$catid=$editpost->id;
		$blogs=Post::where('category_id',$catid)->get();
		
		$editpostcat=CategoryPost::where('slug','commonwhatsapp')->first();
		$catid=$editpostcat->id;
		$common_whatsapp=Post::where('category_id',$catid)->first();
		
		
        return view('welcome',[
		'slider'=>$slider,
		'common_whatsapp'=>$common_whatsapp,
		'blogs'=>$blogs,
		'banner1'=>$banner1,
		'banner2'=>$banner2,
		'banner3'=>$banner3,
		'banner4'=>$banner4,
		'dealsday'=>$dealsday,
		'special_offer'=>$special_offer,
		'product'=>$product,
		'bestseller'=>$bestseller,
		'winter_boots'=>$winter_boots,
		'testimonial'=>$testimonial,
		
		]);
    }
	
	
		public function about()
    {
		$editpost=CategoryPost::where('slug','about-banner')->first();
		$catid=$editpost->id;
		$about_banner=Post::where('category_id',$catid)->first();
		
		
		$editpost=CategoryPost::where('slug','abouts')->first();
		$catid=$editpost->id;
		$abouts=Post::where('category_id',$catid)->first();
		
		
		$editpost=CategoryPost::where('slug','aboutimage')->first();
		$catid=$editpost->id;
		$aboutimage=Post::where('category_id',$catid)->limit(3)->first();
		
		
		$editpost=CategoryPost::where('slug','companydetails')->first();
		$catid=$editpost->id;
		$companydetails=Post::where('category_id',$catid)->get();
		
		
		$editpost=CategoryPost::where('slug','companybackground')->first();
		$catid=$editpost->id;
		$companybackground=Post::where('category_id',$catid)->first();
		
		
		$editpost=CategoryPost::where('slug','client-testimonial')->first();
		$catid=$editpost->id;
		$testimonial=Post::where('category_id',$catid)->get();
		
		$editpost=CategoryPost::where('slug','fashionbrands')->first();
		$catid=$editpost->id;
		$fashionbrands=Post::where('category_id',$catid)->get();
		
		
		
			
		
        return view('about',[
		'about_banner'=>$about_banner,
		
		'abouts'=>$abouts,
		'aboutimage'=>$aboutimage,
		'companydetails'=>$companydetails,
		'companybackground'=>$companybackground,
		'testimonial'=>$testimonial,
		'fashionbrands'=>$fashionbrands,
	
		
		
		
	
		
		
		]);
    }
	
	public function gallery()
    {
		$editpost=CategoryPost::where('slug','gallerys')->first();
		$catid=$editpost->id;
		$gallerys=Post::where('category_id',$catid)->get();
		
		
		$editpost=CategoryPost::where('slug','gallerybanner')->first();
		$catid=$editpost->id;
		$gallerybanner=Post::where('category_id',$catid)->first();
		
		$editpost=CategoryPost::where('slug','fashionbrands')->first();
		$catid=$editpost->id;
		$fashionbrands=Post::where('category_id',$catid)->get();
		
		
        return view('gallery',[
		'gallerys'=>$gallerys,
		'fashionbrands'=>$fashionbrands,
		'gallerybanner'=>$gallerybanner,
	    
		
		
		
		
		]);
    }
	
	public function video()
    {
		$editpost=CategoryPost::where('slug','video')->first();
		$catid=$editpost->id;
		$videos=Post::where('category_id',$catid)->get();
		
		
		$editpost=CategoryPost::where('slug','gallerybanner')->first();
		$catid=$editpost->id;
		$gallerybanner=Post::where('category_id',$catid)->first();
		
		$editpost=CategoryPost::where('slug','fashionbrands')->first();
		$catid=$editpost->id;
		$fashionbrands=Post::where('category_id',$catid)->get();
		
		
        return view('video',[
		'videos'=>$videos,
		'fashionbrands'=>$fashionbrands,
		'gallerybanner'=>$gallerybanner,
	    
		
		
		
		
		]);
    }
	
	public function Contactcard()
     {
		$editpost=CategoryPost::where('slug','contactcardbanner')->first();
		$catid=$editpost->id;
		$contactcardbanner=Post::where('category_id',$catid)->first();
	
    	$editpost=CategoryPost::where('slug','contactcard')->first();
		$catid=$editpost->id;
		$contactcard=Post::where('category_id',$catid)->get();
		
		$editpost=CategoryPost::where('slug','cardsocialicons')->first();
		$catid=$editpost->id;
		$cardsocialicons=Post::where('category_id',$catid)->get();
		
		

		$editpost=CategoryPost::where('slug','cardmapaddress')->first();
		$catid=$editpost->id;
		$cardmapaddress=Post::where('category_id',$catid)->first();
		
		
		
        return view('contactcard',[
		'contactcardbanner'=>$contactcardbanner,
		'contactcard'=>$contactcard,
		'cardsocialicons'=>$cardsocialicons,
		
		'cardmapaddress'=>$cardmapaddress,
		
		]);
    }
	
	
	public function branches()
    {
		$editpost=CategoryPost::where('slug','branches-banner')->first();
		$catid=$editpost->id;
		$branches_banner=Post::where('category_id',$catid)->first();
		
		
		$editpost=CategoryPost::where('slug','branches')->first();
		$catid=$editpost->id;
		$branches=Post::where('category_id',$catid)->get();
		
		
        return view('branches',[
		'branches_banner'=>$branches_banner,
		
		'branches'=>$branches,
	
	
		]);
    }
	
	public function branchdetails()
    {
		$editpost=CategoryPost::where('slug','branchdetails-banner')->first();
		$catid=$editpost->id;
		$branches_banner=Post::where('category_id',$catid)->first();
		
		
		$editpost=CategoryPost::where('slug','branches')->first();
		$catid=$editpost->id;
		$branches=Post::where('category_id',$catid)->get();
		
		
        return view('branchdetails',[
		'branches_banner'=>$branches_banner,
		
		'branches'=>$branches,
	
	
		]);
    }
	public function pricingplan()
    {
		$editpost=CategoryPost::where('slug','pricing-plan-banner')->first();
		$catid=$editpost->id;
		$pricing_plan_banner=Post::where('category_id',$catid)->first();
	
    	$editpost=CategoryPost::where('slug','appoinment')->first();
		$catid=$editpost->id;
		$appoinment=Post::where('category_id',$catid)->first();
		
		$editpost=CategoryPost::where('slug','appoinment-background')->first();
		$catid=$editpost->id;
		$appoinment_background=Post::where('category_id',$catid)->first();
		
		$editpost=CategoryPost::where('slug','logo')->first();
		$catid=$editpost->id;
		$logo=Post::where('category_id',$catid)->first();
		
		$editpost=CategoryPost::where('slug','planing-rate')->first();
		$catid=$editpost->id;
		$planing_rate=Post::where('category_id',$catid)->get();
		
		$editpost=CategoryPost::where('slug','plans')->first();
		$catid=$editpost->id;
		$plans=Post::where('category_id',$catid)->get();
		
			
		
		
        return view('pricingplan',[
		'pricing_plan_banner'=>$pricing_plan_banner,
		'planing_rate'=>$planing_rate,
		'plans'=>$plans,
		'logo'=>$logo,
		'appoinment'=>$appoinment,
		'appoinment_background'=>$appoinment_background,
		
		
		
		
		
		
		]);
    }



	public function Contact()
     {
		$editpost=CategoryPost::where('slug','contactbanner')->first();
		$catid=$editpost->id;
		$contactbanner=Post::where('category_id',$catid)->first();
	
    	$editpost=CategoryPost::where('slug','contact')->first();
		$catid=$editpost->id;
		$contact=Post::where('category_id',$catid)->get();
		
		$editpost=CategoryPost::where('slug','socialicons')->first();
		$catid=$editpost->id;
		$socialicons=Post::where('category_id',$catid)->get();
		
		$editpost=CategoryPost::where('slug','fashionbrands')->first();
		$catid=$editpost->id;
		$fashionbrands=Post::where('category_id',$catid)->get();

		$editpost=CategoryPost::where('slug','mapaddress')->first();
		$catid=$editpost->id;
		$mapaddress=Post::where('category_id',$catid)->first();
		

		
		
        return view('contact',[
		'contactbanner'=>$contactbanner,
		'contact'=>$contact,
		'socialicons'=>$socialicons,
		'fashionbrands'=>$fashionbrands,
		'mapaddress'=>$mapaddress,
		
		]);
    }
	
	public function brochure()
    {
		$editpost=CategoryPost::where('slug','brochure-banner')->first();
		$catid=$editpost->id;
		$brochure_banner=Post::where('category_id',$catid)->first();
		
		
		$editpost=CategoryPost::where('slug','brochure')->first();
		$catid=$editpost->id;
		$brochure=Post::where('category_id',$catid)->get();
		$product_brands=ProductBrands::get();
		
        return view('brochure',[
		'brochure_banner'=>$brochure_banner,
		'product_brands'=>$product_brands,
		'brochure'=>$brochure,
	
	
		]);
    }
	public function productbrandsbrochure($id=null)
    {
		$editpost=CategoryPost::where('slug','brochure-banner')->first();
		$catid=$editpost->id;
		$brochure_banner=Post::where('category_id',$catid)->first();
		
		$editpostcat=CategoryPost::where('slug','commonwhatsapp')->first();
		$catid=$editpostcat->id;
		$common_whatsapp=Post::where('category_id',$catid)->first();
		
		$editpost=CategoryPost::where('slug','brochure')->first();
		$catid=$editpost->id;
		$brochure=Post::where('product_brands',$id)->get();
		$product_brands=ProductBrands::get();
		
        return view('brochure',[
		'brochure_banner'=>$brochure_banner,
		'common_whatsapp'=>$common_whatsapp,
		'product_brands'=>$product_brands,
		'brochure'=>$brochure,
	
	
		]);
    }
	  public function Product()
    
	{
		
		$editpost=CategoryPost::where('slug','appoinment')->first();
		$catid=$editpost->id;
		$appoinment=Post::where('category_id',$catid)->first();
		
		$editpost=CategoryPost::where('slug','appoinment-background')->first();
		$catid=$editpost->id;
		$appoinment_background=Post::where('category_id',$catid)->first();
	
	
		$editpost=CategoryPost::where('slug','product-banner')->first();
		$catid=$editpost->id;
		$product_banner=Post::where('category_id',$catid)->first();
		
		$editpost=CategoryPost::where('slug','projects')->first();
		$catid=$editpost->id;
		$projects=Post::where('category_id',$catid)->get();
		
		$editpostcat=CategoryPost::where('slug','commonwhatsapp')->first();
		$catid=$editpostcat->id;
		$common_whatsapp=Post::where('category_id',$catid)->first();
	
		$categoryproduct=CategoryProduct::get();
		
		
			$product=Product::get();
		
		
		
		
        return view('product',[
		'product_banner'=>$product_banner,
		'product'=>$product,
		'common_whatsapp'=>$common_whatsapp,
		'categoryproduct'=>$categoryproduct,
		
		
		
		
		]);
    }
      public function productbrands($id=null)
    
	{
		
		
		$editpost=CategoryPost::where('slug','appoinment')->first();
		$catid=$editpost->id;
		$appoinment=Post::where('category_id',$catid)->first();
		
		$editpost=CategoryPost::where('slug','appoinment-background')->first();
		$catid=$editpost->id;
		$appoinment_background=Post::where('category_id',$catid)->first();
	
	
		$editpost=CategoryPost::where('slug','product-banner')->first();
		$catid=$editpost->id;
		$product_banner=Post::where('category_id',$catid)->first();
		
		$editpost=CategoryPost::where('slug','projects')->first();
		$catid=$editpost->id;
		$projects=Post::where('category_id',$catid)->get();
		
		$editpost=CategoryPost::where('slug','commonwhatsapp')->first();
		$catid=$editpost->id;
		$common_whatsapp=Post::where('category_id',$catid)->first();
		
	
		$brands=ProductBrands::get();
		
		$product=Product::where('brand_id',$id)->get();
		
		
        return view('product',[
		'product_banner'=>$product_banner,
		'product'=>$product,
		'common_whatsapp'=>$common_whatsapp,
		'brands'=>$brands,
		
		
		
		
		]);
    }

	public function Categoryproduct($id=null)
    
	{
		$editpost=CategoryPost::where('slug','appoinment')->first();
		$catid=$editpost->id;
		$appoinment=Post::where('category_id',$catid)->first();
		
		$editpost=CategoryPost::where('slug','appoinment-background')->first();
		$catid=$editpost->id;
		$appoinment_background=Post::where('category_id',$catid)->first();
	
	
		$editpost=CategoryPost::where('slug','product-banner')->first();
		$catid=$editpost->id;
		$product_banner=Post::where('category_id',$catid)->first();
		
		$editpost=CategoryPost::where('slug','projects')->first();
		$catid=$editpost->id;
		$projects=Post::where('category_id',$catid)->get();
		
		$editpostcat=CategoryPost::where('slug','commonwhatsapp')->first();
		$catid=$editpostcat->id;
		$common_whatsapp=Post::where('category_id',$catid)->first();
	
		$categoryproduct=CategoryProduct::get();
		$product=Product::where('category_id',$id)->get();
		
		
		
		
		
        return view('product',[
		'product_banner'=>$product_banner,
		'product'=>$product,
		'common_whatsapp'=>$common_whatsapp,
		'categoryproduct'=>$categoryproduct,
		
		
		
		
		]);
    }
	public function Searchproduct()
    
	{
		
		$keyword=$_GET['keyword'];
		$editpost=CategoryPost::where('slug','product-banner')->first();
		$catid=$editpost->id;
		$product_banner=Post::where('category_id',$catid)->first();
		
		$categoryproduct=CategoryProduct::get();
		if( isset($_GET['keyword']) && $_GET['keyword']!=""){
		
		
		 $product=Product::Where('title', 'like', '%' . $keyword . '%')->get();
		//$product=Product::where('category_id',$id)->get();
		}
		
		
        return view('product',[
		'product_banner'=>$product_banner,
		'product'=>$product,
		'categoryproduct'=>$categoryproduct,
		
		
		
		
		]);
    }
	public function Productdetails($id=null)
    {
		$editpost=CategoryPost::where('slug','product-single-banner')->first();
		$catid=$editpost->id;
		$product_single_banner=Post::where('category_id',$catid)->first();
		
		
		
		$editpost=CategoryPost::where('slug','socialicons')->first();
		$catid=$editpost->id;
		$socialicons=Post::where('category_id',$catid)->get();
		
		$single_product=Product::where('id',$id)->first();
		
		 $multiple_image=Productmultiimage::where('product_id',$id)->get();
		 
		$product=Product::get();
		
		$specifications=Specification::where('product_id',$id)->get();
		
		$editpostcat=CategoryPost::where('slug','commonwhatsapp')->first();
		$catid=$editpostcat->id;
		$common_whatsapp=Post::where('category_id',$catid)->first();
			
        return view('productdetails',[
		'product_single_banner'=>$product_single_banner,
		'common_whatsapp'=>$common_whatsapp,
		'single_product'=>$single_product,
		'product'=>$product,
		'specifications'=>$specifications,
		'socialicons'=>$socialicons,
		'multiple_image'=>$multiple_image,
		
		
		
		]);
    }
	
	public function Blog()
    {
		$editpost=CategoryPost::where('slug','blogbanner')->first();
		$catid=$editpost->id;
		$blog_banner=Post::where('category_id',$catid)->first();
		
		
		$editpost=CategoryPost::where('slug','blogs')->first();
		$catid=$editpost->id;
		$blogs=Post::where('category_id',$catid)->get();
		
		
		
		
		
			
		
        return view('blog',[
		'blog_banner'=>$blog_banner,
		'blogs'=>$blogs,
		
		
		
		
		]);
    }
	
	
	public function blogdetails($id=null)
    {
		$editpost=CategoryPost::where('slug','blog-details-banner')->first();
		$catid=$editpost->id;
		$blog_details_banner=Post::where('category_id',$catid)->first();
		
		$blog_single=Post::where('id',$id)->first();
		
		$editpost=CategoryPost::where('slug','blogs')->first();
		$catid=$editpost->id;
		$blogs=Post::where('category_id',$catid)->limit(4)->get();
		
		
        return view('blogdetails',[
		'blog_details_banner'=>$blog_details_banner,
		'blogs'=>$blogs,
	
		'blog_single'=>$blog_single,
	
		
		
		
		]);
    }
	
	public function html_email() {
      $data = array('name'=>"Virat Gandhi");
      Mail::send('mail', $data, function($message) {
         $message->to('krishnamctree@gmail.com', 'Tutorials Point')->subject
            ('Laravel HTML Testing Mail');
         $message->from('krishnajayakumar321@gmail.com','Virat Gandhi');
      });
      echo "HTML Email Sent. Check your inbox.";
   }
	
	
	
}
