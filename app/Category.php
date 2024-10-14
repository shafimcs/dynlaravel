<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Category extends Model
{
    use HasSlug;
    protected $fillable = [
        'category_name', 'image','parent_id','country_name','slug','title','description',
    ];
   protected $table='tbl_category';

   public function subcategory()
   {
       return $this->hasMany('App\Category', 'parent_id', 'id');
   }

    public function country_name()
    {
        return $this->hasOne('App\Country', 'id', 'country_id');
    }
    public function parent()
    {
        return $this->belongsTo('App\Category', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Category', 'parent_id');
    }
    public function all_packages()
    {
        return $this->hasMany('App\Packages', 'category_id','id');
    }








    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('category_name')
            ->saveSlugsTo('slug');
    }

}
