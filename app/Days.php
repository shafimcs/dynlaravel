<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Days extends Model
{
    protected $fillable = [
        'package_id','day_number','description',
    ];
    protected $table='tbl_days';

}
