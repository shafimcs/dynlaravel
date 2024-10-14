<?php

namespace App\Http\Controllers\admin;

use App\ThemeColors;
use App\Specification;
use Illuminate\Http\Request;
use App\CategoryProduct;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class ThemeColorsController extends Controller
{
    public function create()
    {
		
		
        return view('admin.theme-colors.addthemecolors',compact(''));
    }
    public  function store(Request $request)
    {
	
	  $post=new ThemeColors();
	
          $post->header_color=$request->post('header_color');
          $post->footer_color= $request->post('footer_color');
          $post->body_color= $request->post('body_color');
		  $post->sticky_header= $request->post('sticky_header');
		  $post->header_text_color=$request->post('header_text_color');
          $post->save();
		 
		
		
        flash('Added Successfully')->important()->success();
        return redirect()->route('themecolors.show');
			


    }
    public  function  show()
    {
		
        $theme_colors = ThemeColors::orderBy('id','desc')->get();
        return view('admin.theme-colors.viewthemecolors',compact('theme_colors'));
    }
	 public  function  edit($id)
    {
        $edittheme=ThemeColors::where('id',$id)->first();
		
        return view('admin.theme-colors.editthemecolors',compact('edittheme'));
    }
    public  function  update(Request $request)
    {
		
		$themecolor= ThemeColors::where('id',$request->id)->first();
		
       
	
	    $themecolor->header_color=$request->post('header_color');
          $themecolor->footer_color= $request->post('footer_color');
          $themecolor->body_color= $request->post('body_color');
		  $themecolor->sticky_header= $request->post('sticky_header');
		  $themecolor->header_text_color=$request->post('header_text_color');
          $themecolor->save();
		 
        flash('Updated Successfully')->important()->success();
        return redirect()->route('themecolors.show');
    }
    public function destroy($id)
    {
        $ThemeColors=ThemeColors::where('id',$id)->first();
        $ThemeColors->delete();
        flash('Deleted Successfully')->important()->success();
        return Redirect::back();


    }
 

}
