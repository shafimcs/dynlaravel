<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
       'title1','title2', 'image'
    ];
    protected $table='tbl_sliders';

}
