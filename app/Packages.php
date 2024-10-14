<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Packages extends Model
{
    use HasSlug;


    protected $fillable = [
        'gotripz_id','category_id','package_name',
        'package_details','image','country_name','location','places','destination','package_category',
        'days','nights','number_of_people','economy','deluxe','premium','luxury','premium_luxury','budget','economy_hotel_id',
        'deluxe_hotel_id','premium_hotel_id','luxury_hotel_id','premium_luxury_hotel_id','budget_hotel_id','start_date',
        'end_date','inclusion','exclusion','other_details','slug','title','description',
    ];
    protected  $table='tbl_packages';

    public function economy_hotel()
    {
        return $this->hasOne('App\Hotels', 'id', 'economy_hotel_id');
    }
    public function deluxe_hotel()
    {
        return $this->hasOne('App\Hotels', 'id', 'deluxe_hotel_id');
    }
    public function premium_hotel()
    {
        return $this->hasOne('App\Hotels', 'id', 'premium_hotel_id');
    }
    public function luxury_hotel()
    {
        return $this->hasOne('App\Hotels', 'id', 'luxury_hotel_id');
    }
    public function premium_luxury_hotel()
    {
        return $this->hasOne('App\Hotels', 'id', 'premium_luxury_hotel_id');
    }
    public function budget_hotel()
    {
        return $this->hasOne('App\Hotels', 'id', 'budget_hotel_id');
    }

    public function daysDetail()
    {
        return $this->hasMany('App\Days', 'package_id', 'id')->orderBy('day_number','asc');
    }

    public  function category()
    {
        return $this->hasOne('App\Category', 'id', 'category_id');
    }



    public function packagename()
    {
        return $this->hasMany('App\Booking', 'package_id', 'id');
    }
    public function hotelDetail()
    {
        return $this->hasMany('App\Hotels', 'package_id', 'id');
    }
    public function get_hotels()
    {
        return $this->hasMany('App\PackageHotels', 'package_id', 'id');
    }
    public function get_hotel_category()
    {
        return $this->hasOne('App\PackageHotels', 'package_id', 'id');
    }

    public function package_ratings()
    {
        return $this->hasMany('App\PackageRating', 'package_id', 'id');
    }
    public function get_destinations()
    {
        return $this->hasMany('App\Destination', 'id', 'destination');
    }
    public function get_hotel_images()
    {
        return $this->hasMany('App\PackageImages', 'package_id', 'id');
    }



    /*protected $dates = ['start_date','end_date'];*/

   /* public function setStartDateAttribute($value)
    {
        $date = Carbon::createFromFormat('d-m-Y',$value);

        $this->attributes['start_date'] = $date->format('Y-m-d');
    }

    public function setEndDateAttribute($value)
    {
        $date = Carbon::createFromFormat('d-m-Y',$value);

        $this->attributes['end_date'] = $date->format('Y-m-d');
    }*/

  /*public function getStartDateAttribute($value)
    {
        return Carbon::createFromFormat('Y-m-d', $value)->format('d-m-Y');
    }
    public function getEndDateAttribute($value)
    {
        return Carbon::createFromFormat('Y-m-d', $value)->format('d-m-Y');
    }*/








    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('package_name')
            ->saveSlugsTo('slug');
    }
    /*public function setStartDateAttribute($value)
    {

        $this->attributes['start_date'] = Carbon::parse($value);


    }
    public function setEndDateAttribute($value)
    {

        $this->attributes['end_date'] = Carbon::parse($value);

    }

    public function getStartDateAttribute($value)
    {
        return($value);
    }
    public function getEndDateAttribute($value)
    {
        return($value);
    }







    */


}
