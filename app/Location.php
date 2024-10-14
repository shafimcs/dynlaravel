<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Location extends Model
{
    use HasSlug;
    protected $fillable = [
       'country', 'location','image','slug',
    ];
    protected $table='tbl_location';
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('location')
            ->saveSlugsTo('slug');
    }
    public function get_destinations()
    {
        return $this->hasMany('App\Destination','location','location')->take(4);
    }
    public function get_all_packages()
    {
        return $this->hasMany('App\Packages','location','location')->take(4);
    }

}
