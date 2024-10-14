<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TripRequest extends Model
{
    protected $fillable = [
        'name','number', 'email','leave_from','going_to','departure_date','nights','adults','minors','trip_type','budget','services','additional_details',
    ];
    protected $table='tbl_triprequests';

}
