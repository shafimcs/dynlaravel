<?php



namespace App;



use Illuminate\Database\Eloquent\Model;

use Spatie\Sluggable\HasSlug;

use Spatie\Sluggable\SlugOptions;



class Product extends Model

{

    protected $fillable = [

       'category_id', 'title','job_title','image',

            'description','whatsapp','price','actual_price',

           

    ];

    protected $table='product';







}

