<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Hotels extends Model
{
    use HasSlug;
    protected $fillable = [
        'destination','hotel_name', 'image','description','ameties','type','economy','deluxe','premium','luxury','premium_luxury','budget',
    ];
    protected $table='tbl_hotels';

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('hotel_name')
            ->saveSlugsTo('slug');
    }

    public function get_hotelrooms()
    {
        return $this->hasMany('App\HotelRoom','hotel_id','id');
    }
    public function hotel_ratings()
    {
        return $this->hasMany('App\HotelRating','hotel_id','id');
    }
}
