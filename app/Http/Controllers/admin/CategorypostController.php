<?php

namespace App\Http\Controllers\admin;

use App\CategoryPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class CategorypostController extends Controller
{
    public function create()
    {
		
        return view('admin.categorypost.addCategorypost');
    }
    public  function store(Request $request)
    {
		
        $request->validate([
            'title' => 'required|max:255']);

        $values=$request->all();
        CategoryPost::create($values);
        flash('Added Successfully')->important()->success();
        return redirect()->route('categorypost.show');

    }
    public  function  show()
    {
        $categorypost = Categorypost::orderBy('id','desc')->get();
        return view('admin.categorypost.viewCategorypost',compact('categorypost'));
    }
	 public  function  edit($id)
    {
        $editcategory=Categorypost::where('id',$id)->first();
        return view('admin.categorypost.editCategorypost',compact('editcategory'));
    }
    public  function  update(Request $request)
    {

        Categorypost::where('id',$request->id)->update(['title'=>$request->title,'limit'=>$request->limit]);
        flash('Updated Successfully')->important()->success();
        return redirect()->route('categorypost.show');
    }
    public function destroy($id)
    {
        $categorypost=Categorypost::where('id',$id)->first();
        $categorypost->delete();
        flash('Deleted Successfully')->important()->success();
        return Redirect::back();


    }
 

}
