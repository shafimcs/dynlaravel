<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelRoom extends Model
{
    protected $fillable = [
        'hotel_id','image',
    ];
    protected $table='tbl_hotel_rooms';
}
