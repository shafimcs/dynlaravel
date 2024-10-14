<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    protected $fillable = [
        'spacification_name', 'spacification_value','product_id'
    ];
    protected $table='specification';
}
