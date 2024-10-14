<?php



namespace App;



use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;



class ProductBrands extends Model

{

    protected $fillable = [

       'name','category_id'

    ];

    protected $table='product_brands';
	
	







}

