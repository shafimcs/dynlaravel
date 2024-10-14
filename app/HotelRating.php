<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelRating extends Model
{
    protected $fillable = [
        'hotel_id','user_name','email','number', 'rating','review','flag',
    ];
    protected $table='tbl_hotel_rating';
    public function get_hotel()
    {
        return $this->hasOne('App\Hotels','id','hotel_id');
    }
}
