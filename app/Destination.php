<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Destination extends Model
{
    use HasSlug;
    protected $fillable = [
        'location','destination','image','best_month_from','best_month_to',
        'best_day_from','best_day_to','nearest_airport','nearest_railway_station','description','about','things_to_do',
        'hotels','resorts','tourist_places','how_to_reach','shop_at','eat_at','best_time','top_things_to_do','slug',
    ];
    protected $table='tbl_destination';
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('destination')
            ->saveSlugsTo('slug');
    }
    public function get_locations()
    {
        return $this->hasOne('App\Location','location','location');
    }

    public function get_hotels()
    {
        return $this->hasMany('App\Hotels','destination','destination')->take(5);
    }
    public function get_hotel()
    {
        return $this->hasMany('App\Hotels','destination','destination');
    }
    public function get_packages()
    {
        return $this->hasMany('App\Packages','destination','id');
    }
}
