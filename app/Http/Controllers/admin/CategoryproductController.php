<?php

namespace App\Http\Controllers\admin;

use App\CategoryProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class CategoryproductController extends Controller
{
    public function create()
    {
		
        return view('admin.categoryproduct.addCategoryproduct');
    }
    public  function store(Request $request)
    {
		
        $request->validate([
            'title' => 'required|max:255']);

        $values=$request->all();
        CategoryProduct::create($values);
        flash('Added Successfully')->important()->success();
        return redirect()->route('categoryproduct.show');

    }
    public  function  show()
    {
		
        $categoryproduct = CategoryProduct::orderBy('id','desc')->get();
        return view('admin.categoryproduct.viewCategoryproduct',compact('categoryproduct'));
    }
	 public  function  edit($id)
    {
        $editcategory=CategoryProduct::where('id',$id)->first();
        return view('admin.categoryproduct.editCategoryproduct',compact('editcategory'));
    }
    public  function  update(Request $request)
    {

        CategoryProduct::where('id',$request->id)->update(['title'=>$request->title]);
        flash('Updated Successfully')->important()->success();
        return redirect()->route('categoryproduct.show');
    }
    public function destroy($id)
    {
        $categorypost=CategoryProduct::where('id',$id)->first();
        $categorypost->delete();
        flash('Deleted Successfully')->important()->success();
        return Redirect::back();


    }
 

}
