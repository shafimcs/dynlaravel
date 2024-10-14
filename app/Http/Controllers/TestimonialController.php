<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TestimonialController extends Controller
{


    /********************************************ADMIN************************************************************************/
    public  function testimonial()
    {
        return view('admin.testimonial.testimonial');
    }
    public  function  addTestimonial(Request $request)
    {

        $images = array();
        $values=$request->all();
        $file=$request->file('image');
        if(!empty($file))
        {
            $path=$file->storeAs('image/category',str_slug('slide').mt_rand(). '.' . $file->extension(),'uploads');
            //  dd($path);
            $values['image']=$path;
        }
        Testimonial::create(['body'=>$request->body,
            'user_image'=>$path,
            'user_name'=>$request->user_name,
        ]);
        flash('Added Successfully')->important()->success();
        return redirect()->route('testimonial.show');

    }

    public function viewTestimonial()
    {

        $viewTestimonial = Testimonial::orderby('id', 'desc')->get(); //show only 5 items at a time in descending order

        return view('admin.testimonial.viewTestimonial', compact('viewTestimonial'));
    }
    public function editTestimonial($id)
    {

        $testimonial=Testimonial::where('id',$id)->first();

        return view('admin.testimonial.editTestimonial',compact('testimonial'));
    }

    public function updateTestimonial(Request $request)
    {
        $images = array();
        $values=$request->all();
        $file=$request->file('image');
        if(!empty($file))
        {
            $path=$file->storeAs('image/category',str_slug('slide').mt_rand(). '.' . $file->extension(),'uploads');
            //  dd($path);
            $values['image']=$path;
            $testimonial= Testimonial::where('id',$request->id)->update(['body'=>$request->body,

                'user_image' =>$path,
                'user_name' =>$request->user_name,
            ]) ;
        }
		else
			
			{
				$testimonial= Testimonial::where('id',$request->id)->update(['body'=>$request->body,
            'user_name' =>$request->user_name,
              ]) ;

			}
        
        flash('Updated Successfully')->important()->success();
        return redirect()->route('testimonial.show');


    }

    public function destroyTestimonial($id) {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();
        flash('Deleted Successfully')->important()->success();
        return Redirect::back();
    }

    /*********************************************END ADMIN************************************************************************/


    /*********************************************USER************************************************************************/


   /* public function showTestimonials()
    {
        dd("jguyguyg");
        $testimonial=Testimonial::orderby('id')->get();
        dd($testimonial);
        return view('user.footer',compact('testimonial'));
    }*/

    /***********************************************END USER************************************************************************/


}
