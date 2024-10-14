<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class CategoryPost extends Model
{
	use HasSlug;
    protected $fillable = [
        'title','slug','limit'
    ];
    protected $table='tbl_categorypost';


public function getSlugOptions() : SlugOptions
    {
		
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
    
	
	 public function getRouteKeyName()
    {
        return 'slug';
    }
}
