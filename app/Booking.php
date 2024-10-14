<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'package_id','name','email','phone_number','leave_from','start_date','departure_date','package_type','number_of_adult','number_of_children','notes',
    ];
    protected $table='tbl_booking';
    protected $dates = ['start_date'];
    public function package_details()
    {
        return $this->hasOne('App\Packages', 'id', 'package_id');
    }

    /*public function setStartDateAttribute($value)
    {
        $date = Carbon::createFromFormat('d-m-Y',$value);

        $this->attributes['start_date'] = $date->format('Y-m-d');
    }

    public function getStartDateAttribute($value)
    {
        return Carbon::createFromFormat('Y-m-d', $value)->format('d-m-Y');
    }*/

}
