<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageHotels extends Model
{
    protected $fillable = [
        'package_id','hotel_id',
    ];
    protected $table='tbl_package_hotels';

    public function  hotels()
    {
        return $this->hasOne('App\Hotels','id','hotel_id');
    }
}
