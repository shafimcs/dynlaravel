<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DestinationRating extends Model
{
    protected $fillable = [
        'destination_id','user_name', 'email', 'number', 'rating','review','flag',
    ];
    protected $table='tbl_destination_rating';

    public function get_destination()
    {
        return $this->hasOne('App\Destination','id','destination_id');
    }
}
