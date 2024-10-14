<?php

namespace App\Http\Controllers\admin;

use App\Product;
use App\Specification;
use Illuminate\Http\Request;
use App\CategoryProduct;
use App\ProductBrands;
use App\Productmultiimage;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function create()
    {
		
		$productcategory=CategoryProduct::all();
		$productbrands=ProductBrands::all();
		
        return view('admin.product.addProduct',compact('productcategory','productbrands'));
    }
    public  function store(Request $request)
    {
	

    $requestparamters=$request->all();
	
	
	  $post=new Product();
	 if ($request->hasFile('image')) {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension(); // getting image extension
          $filename = time().'.'.$extension;
          $file->move('public/uploads/', $filename);
         $post->image=$filename;
		
    }
	
	

          $post->title=$request->post('title');
         $post->description= $request->post('description');
         $post->job_title= $request->post('job_title');
		 $post->category_id= $request->post('category_id');
		 $post->brand_id= $request->post('brand_id');
		 $post->price=$request->post('price');
         $post->actual_price= $request->post('actual_price');
        $post->whatsapp= $request->post('whatsapp_number');
		 if($request->post('bestseller')!=""){
		$post->bestseller= $request->post('bestseller');
		 }
		 $post->save();
		 $insertedId = $post->id;
		 $spacification_name=$request->post('spacification_name');
		 
		 foreach($requestparamters['specification_name'] as $key=>$value)
		 {
		 
			 $post1=new Specification();
			 $post1->spacification_name=$value;
         $post1->spacification_value=$requestparamters['specification_value'][$key];
         $post1->product_id=$insertedId;
		 $post1->save();
		 
		 }
		//print_r($requestparamters['image_name']);exit;
		  foreach($requestparamters['image_name'] as $keys=>$values)
		 {
		  
			 $image=new Productmultiimage();
			 $image->product_id=$insertedId;
             $image->image=$values;
             $image->save();
		 
		 }
		
		
        flash('Added Successfully')->important()->success();
        return redirect()->route('product.show');
			


    }
	public function imageupload (Request $request) {

       
        

        if ($request->hasfile('cv')) {
			
            foreach ($request->cv as $image) {
                $name = time().rand(1,100).'.'.$image->extension();
                if ($image->move('public/uploads/', $name)) {
                    $data[] = $name;
                }
            }
         }

         if ($data) {
            return response()->json(['status' => 'success', 'data' => $data, 'message' => 'Success! image(s) uploaded']);
         }

         else {
            return response()->json(['status' => 'failed', 'data' => $data, 'message' => 'Failed! image(s) not uploaded']);
         }
    }
    public  function  show()
    {
		
        $product = Product::orderBy('id','desc')->get();
        return view('admin.product.viewProduct',compact('product'));
    }
	 public  function  edit($id)
    {
        $editproduct=Product::where('id',$id)->first();
		$multi_img=Productmultiimage::where('product_id',$id)->get();
		$specification_edit = Specification::where('product_id',$id)->get();
		$productcategory=CategoryProduct::all();
		$productbrands=ProductBrands::all();
        return view('admin.product.editProduct',compact('editproduct','productbrands','multi_img','productcategory','specification_edit'));
    }
    public  function  update(Request $request)
    {
		$requestparamters=$request->all();
		$product= Product::where('id',$request->id)->first();
		
        if ($request->hasFile('image')) {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension(); // getting image extension
          $filename = time().'.'.$extension;
          $file->move('public/uploads/', $filename);
         $product->image=$filename;
		
    }
	else
	{
		 $product->image=$request->post('hiddenimage');
	}
	
	     $product->title=$request->post('title');
         $product->description= $request->post('description');
         $product->job_title= $request->post('job_title');
		 $product->category_id= $request->post('category_id');
		 $product->brand_id= $request->post('brand_id');
		 $product->price=$request->post('price');
         $product->actual_price= $request->post('actual_price');
         $product->whatsapp= $request->post('whatsapp_number');
		 $product->save();
		 
		 $insertedId = $product->id;
		 
		  Specification::where('product_id',$request->id)->delete();
		 
		 foreach($requestparamters['specification_name'] as $key=>$value)
		 {
		  $specification_edit=new Specification();
		 
		 $specification_edit->spacification_name=$value;
         $specification_edit->spacification_value=$requestparamters['specification_value'][$key];
         $specification_edit->product_id=$insertedId;
		 $specification_edit->save();
		 
		 }
        
		Productmultiimage::where('product_id',$request->id)->delete();
		
		    foreach($requestparamters['image_name'] as $keys=>$values)
		 {
		  
			 $image=new Productmultiimage();
			 $image->product_id=$insertedId;
             $image->image=$values;
             $image->save();
		 
		 }
		
        flash('Updated Successfully')->important()->success();
        return redirect()->route('product.show');
    }
	 public function destroy($id)
    {
        $categorypost=Product::where('id',$id)->first();
        $categorypost->delete();
        flash('Deleted Successfully')->important()->success();
        return Redirect::back();


    }
    public function deleteimg(Request $request)
    {
		
		$image=$request->image_multi;
        $uploadimage=Productmultiimage::where('image',$image)->first();
        $uploadimage->delete();
        


    }
 

}
