<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageImages extends Model
{
    protected $fillable = [
        'package_id','image',
    ];
    protected $table='tbl_package_images';

}
