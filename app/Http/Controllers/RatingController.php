<?php

namespace App\Http\Controllers;

use App\DestinationRating;
use App\HotelRating;
use App\PackageRating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function  hotelRating(Request $request)
    {
        $rating=$request->rating;
        $user_name=$request->user_name;
        $email=$request->email;
        $number=$request->number;
        $review=$request->review;
        $hotel_id=$request->hotel_id;
        $is_exist=HotelRating::where('hotel_id',$hotel_id)->where('email',$email)->orWhere('number',$number)->first();
        if(!empty($is_exist))
        {
            return response()->json(1);
        }
        else
        {
            $hotel_rating=HotelRating::create(['hotel_id'=>$hotel_id,'user_name'=>$user_name,'email'=>$email,'number'=>$number,'rating'=>$rating,
                'review'=>$review]);
            return response()->json(2);

        }

    }

    public function  packageRating(Request $request)
    {
        $rating=$request->rating;
        $user_name=$request->user_name;
        $email=$request->email;
        $number=$request->number;
        $review=$request->review;
        $package_id=$request->package_id;
        $is_exist=PackageRating::where('package_id',$package_id)->where('email',$email)->orWhere('number',$number)->first();
        if(!empty($is_exist))
        {
         return response()->json(1);
        }
        else
        {
            PackageRating::create(['package_id'=>$package_id,'user_name'=>$user_name,'email'=>$email,'number'=>$number,
                'rating'=>$rating,
                'review'=>$review]);
            return response()->json(2);
        }

    }
    public function  destinationRating(Request $request)
    {
        $rating=$request->rating;
        $user_name=$request->user_name;
        $email=$request->email;
        $number=$request->number;
        $review=$request->review;
        $destination_id=$request->destination_id;
        $is_exist=DestinationRating::where('destination_id',$destination_id)->where('email',$email)->orWhere('number',$number)->first();

        if(!empty($is_exist))
        {
            return response()->json(1);
        }
        else
        {
            $destination_rating=DestinationRating::create(['destination_id'=>$destination_id,'user_name'=>$user_name,'email'=>$email,'number'=>$number,'rating'=>$rating,
                'review'=>$review]);
            $msg='Review Added Successfully';
            return response()->json(2);
        }
       
    }
}
