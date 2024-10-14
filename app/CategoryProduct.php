<?php



namespace App;



use Illuminate\Database\Eloquent\Model;

use Spatie\Sluggable\HasSlug;

use Spatie\Sluggable\SlugOptions;
use Illuminate\Support\Str;



class CategoryProduct extends Model

{

    protected $fillable = [

       'title', 'slug'

    ];

    protected $table='categoryproduct';
	
	protected static function boot() {
        parent::boot();

        static::creating(function ($question) {
            $question->slug = Str::slug($question->title);
        });
    }







}

