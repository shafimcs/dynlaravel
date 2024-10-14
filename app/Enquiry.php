<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $fillable = [
       'destination', 'email','number','start_date','end_date'
    ];
    protected $table='tbl_enquiry';
   // protected $dates = ['start_date', 'end_date'];
 /* protected $dates = ['start_date','end_date'];

    public function setStartDateAttribute($value)
    {
        $date = Carbon::createFromFormat('d-m-Y',$value);

        $this->attributes['start_date'] = $date->format('Y-m-d');
    }

     public function setEndDateAttribute($value)
    {
        $date = Carbon::createFromFormat('d-m-Y',$value);

        $this->attributes['end_date'] = $date->format('Y-m-d');
    }

    public function getStartDateAttribute($value)
    {
        return Carbon::createFromFormat('Y-m-d', $value)->format('d-m-Y');
      //  return $this->start_date->format('d-m-Y');

    }
   public function getEndDateAttribute($value)
    {
        return Carbon::createFromFormat('Y-m-d', $value)->format('d-m-Y');
        //return $this->start_date->format('d-m-Y');
    }*/






}
