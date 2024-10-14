<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelBooking extends Model
{
    protected $fillable=['hotel_id','name','number','email','check_in','check_out','no_of_day','no_of_passenger','no_of_room'];

    protected $table='tbl_hotel_booking';

    public function hotel_details()
    {
        return $this->hasOne('App\Hotels', 'id', 'hotel_id');
    }

}
