<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorypost extends Model
{
    protected $fillable = [
        'title',
    ];
    protected $table='tbl_categorypost';



}
