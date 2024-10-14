<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Brands extends Model
{
	
    protected $fillable = [
        'name'
    ];
    protected $table='brands';


}
