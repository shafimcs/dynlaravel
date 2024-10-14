<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Post extends Model
{
    protected $fillable = [
       'category_id', 'gallery_category_id','zip','published',
            'description','description2',
            'title','feature1','feature2',
            'image','pdf','product_brands',
            'slug', 'job_title', 'city', 'state', 'email1', 'email2',
            'address1', 'address2','vendor_id',
            'phone1', 'phone2', 'fax','url','latitude', 'longitude',
			'price',
			'meta_description','meta_key','alt_tag',
    ];
    protected $table='post';



}
