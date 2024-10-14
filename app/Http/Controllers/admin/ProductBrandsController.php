<?php

namespace App\Http\Controllers\admin;

use App\ProductBrands;
use App\CategoryProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class ProductBrandsController extends Controller
{
    public function create()
    {
		$categoryproduct=CategoryProduct::get();
        return view('admin.productbrands.addproductbrands',compact('categoryproduct'));
    }
    public  function store(Request $request)
    {
		
        $request->validate([
            'name' => 'required|max:255']);

        $values=$request->all();
        ProductBrands::create($values);
        flash('Added Successfully')->important()->success();
        return redirect()->route('productbrands.show');

    }
    public  function  show()
    {
		
        $productbrands = ProductBrands::orderBy('id','desc')->get();
        return view('admin.productbrands.viewproductbrands',compact('productbrands'));
    }
	 public  function  edit($id)
    {
        $productbrands=ProductBrands::where('id',$id)->first();
		$categoryproduct=CategoryProduct::get();
        return view('admin.productbrands.editproductbrands',compact('productbrands','categoryproduct'));
    }
    public  function  update(Request $request)
    {

        ProductBrands::where('id',$request->id)->update(['name'=>$request->name,'category_id'=>$request->category_id]);
        flash('Updated Successfully')->important()->success();
        return redirect()->route('productbrands.show');
    }
    public function destroy($id)
    {
        $productbrands=ProductBrands::where('id',$id)->first();
        $productbrands->delete();
        flash('Deleted Successfully')->important()->success();
        return Redirect::back();


    }
 

}
