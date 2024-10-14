<?php

namespace App\Http\Controllers\admin;

use App\Brands;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class BrandsController extends Controller
{
    public function create()
    {
		
        return view('admin.brands.addbrands');
    }
    public  function store(Request $request)
    {
		
        $request->validate([
            'name' => 'required|max:255']);

        $values=$request->all();
        Brands::create($values);
        flash('Added Successfully')->important()->success();
        return redirect()->route('brands.show');

    }
    public  function  show()
    {
		
        $brands = Brands::orderBy('id','desc')->get();
        return view('admin.brands.viewbrands',compact('brands'));
    }
	 public  function  edit($id)
    {
        $editbrands=Brands::where('id',$id)->first();
        return view('admin.brands.editbrands',compact('editbrands'));
    }
    public  function  update(Request $request)
    {

        Brands::where('id',$request->id)->update(['name'=>$request->name]);
        flash('Updated Successfully')->important()->success();
        return redirect()->route('brands.show');
    }
    public function destroy($id)
    {
        $brands=Brands::where('id',$id)->first();
        $brands->delete();
        flash('Deleted Successfully')->important()->success();
        return Redirect::back();


    }
 

}
