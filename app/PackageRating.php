<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageRating extends Model
{
    protected $fillable = [
        'package_id','user_name','email','number', 'rating','review','flag',
    ];
    protected $table='tbl_package_rating';

    public function get_package()
    {
        return $this->hasOne('App\Packages','id','package_id');
    }
}
