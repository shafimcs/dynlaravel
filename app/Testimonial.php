<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'body', 'user_image', 'user_name',
    ];
    protected $table='tbl_testimonial';

}
