<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    protected $fillable = [
        'name', 'email','number','subject','messege'
    ];
    protected $table='tbl_contactus';
}
