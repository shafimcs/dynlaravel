<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\Destination;
use App\Location;
use App\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class BlogController extends Controller
{


    /********************************************ADMIN******************************************************/

    public  function blogs()
    {
        return view('admin.blog.blog');
    }
    public  function  addBlog(Request $request)
    {


        $images = array();
        if ($files = $request->file('images')) {
            foreach ($files as $file) {
                $name = $file->getClientOriginalName();
                /* $file->move('storage/image/slide', $name);*/
                $path=$file->storeAs('image/category',str_slug('slide').mt_rand(). '.' . $file->extension(),'uploads',$name);
                $images[] = $path;
            }
        }

        $post = Blog::create(['title' => $request->title,
            'body' =>$request->body,
            'image' => implode("|",$images),

        ]);

        flash('Added Successfully')->important()->success();
        return redirect()->route('blog.show');


    }


    public function viewBlogs()
    {

        $viewBlogs = Blog::orderby('id', 'desc')->get(); //show only 5 items at a time in descending order

        return view('admin.blog.viewBlogs', compact('viewBlogs'));
    }
    public function editBlog($id)
    {

        $blog=Blog::where('id',$id)->first();

        return view('admin.blog.editBlog',compact('blog'));
    }

    public function updateBlog(Request $request)
    {
        $images = array();
        if ($files = $request->file('images')) {
            foreach ($files as $file) {
                $name = $file->getClientOriginalName();
                /* $file->move('storage/image/slide', $name);*/
                $path=$file->storeAs('image/category',str_slug('slide').mt_rand(). '.' . $file->extension(),'uploads',$name);
                $images[] = $path;
            }
        }
        $post= Blog::where('id',$request->id)->update(['title'=>$request->title,
            'body'=>$request->body,
            'image' => implode("|",$images)]);
        flash('Updated Successfully')->important()->success();
        return redirect()->route('blog.show');


    }

    public function  destroyBlog($id)
    {

        $blog=Blog::where('id',$id)->first();
        $blog->delete();
        flash('Deleted Successfully')->important()->success();
        return Redirect::back();
    }




    public function viewReviews($id,$title)
    {
        $reviews=Review::where('blog_id',$id)->get();
        return view('admin.blog.viewReviews', compact('reviews','title'));
    }
    public function destroyReview($id) {
        $reviews = Review::findOrFail($id);
        $reviews->delete();
        flash('Deleted Successfully')->important()->success();
        return Redirect::back();
    }


    /******************************************** END ADMIN******************************************************/



    /********************************************USER******************************************************/


    public function showBlogs()
    {
        $blogs=Blog::orderby('id')->paginate(5);
        return view('user.blogs',compact('blogs'));
    }

 public function fullBlog($slug)
    {
        $fullblog=Blog::where('slug',$slug)->first();
        $review=Review::where('blog_id',$fullblog->id)->paginate(4);
        $blogs=Blog::get();
        $destinations=Destination::orderby('id','desc')->paginate(12);
        return view('user.fullBlog',compact('fullblog','review','blogs','destinations'));
    }
    public function postReview(Request $request,$id)
    {
       $postReview=Review::create(['blog_id'=>$id,
           'review'=>$request->review,
           ]);
        return Redirect::back();
    }





















    /********************************************END USER******************************************************/

}
