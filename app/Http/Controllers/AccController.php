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
use DB;
use App\User;
use Illuminate\Support\Facades\Mail;
use \Validator;

class AccController extends Controller
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







  public function validatePasswordRequest(Request $request)
    {
       
         $user=User::where('email', '=', $request->email)->first();
         
                        //You can add validation login here
               /*
                $user = DB::table('users')->where('email', '=', $request->email)
                    ->first();
                    */
                //Check if the user exists
                if ($user ===  1) {
                    return redirect()->back()->withErrors(['email' => trans('User does not exist')]);
                }
                
                //Create Password Reset Token
                DB::table('password_resets')->insert([
                    'email' => $request->email,
                    'token' => str_random(60),
                    'created_at' => date("Y-m-d H:i:s")
                ]);
                
                //Get the token just created above
                $tokenData = DB::table('password_resets')
                    ->where('email', $request->email)->first();
                
                if ($this->sendResetEmail($request->email, $tokenData->token)) {
                    return redirect()->back()->with('status', trans('A reset link has been sent to your email address.'));
                } else {
                    return redirect()->back()->withErrors(['error' => trans('A Network Error occurred. Please try again.')]);
                }
    }
                private function sendResetEmail($email, $token)
            {
            //Retrieve the user from the database
            $user = DB::table('users')->where('email', $email)->select('name', 'email')->first();
            //Generate, the password reset link. The token generated is embedded in the link
            $link = config('base_url') . 'password/reset/' . $token . '?email=' . urlencode($user->email);
            
                try {
                //Here send the link with CURL with an external email API 
                // Mail::to($email)->send(new \App\Mail\Booking($id,$request->name, $request->email, $request->phone_number,$request->leave_from ,$request->departure_date,$request->package_type,$request->number_of_adult ,$request->number_of_children,$request->notes));
                echo $msg = $link; exit;

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail($email,"My subject",$msg);
                    return true;
                } catch (\Exception $e) {
                    return false;
                }
            }
                            public function resetPassword(Request $request)
                {
                    //Validate input
                    $validator = Validator::make($request->all(), [
                        'email' => 'required|email|exists:users,email',
                        'password' => 'required|confirmed',
                        'token' => 'required' ]);
                
                    //check if payload is valid before moving on
                    if ($validator->fails()) {
                        return redirect()->back()->withErrors(['email' => 'Please complete the form']);
                    }
                
                    $password = $request->password;
                // Validate the token
                    $tokenData = DB::table('password_resets')
                    ->where('token', $request->token)->first();
                // Redirect the user back to the password reset request form if the token is invalid
                    if (!$tokenData) return view('auth.passwords.email');
                
                    $user = User::where('email', $tokenData->email)->first();
                // Redirect the user back if the email is invalid
                    if (!$user) return redirect()->back()->withErrors(['email' => 'Email not found']);
                //Hash and update the new password
                    $user->password = \Hash::make($password);
                    $user->update(); //or $user->save();
                
                    //login the user immediately they change password successfully
                    Auth::login($user);
                
                    //Delete the token
                    DB::table('password_resets')->where('email', $user->email)
                    ->delete();
                
                    //Send Email Reset Success Email
                   
                        return view('index');
                   
                
                }



  public function sendSuccessEmail()
{
    
    
    
}









    /********************************************END USER******************************************************/

}
