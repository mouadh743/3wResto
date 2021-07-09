<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{


    protected $dates = ['booking_date'];

    protected $guarded =[];
   
    public function user()
    {
        return $this->belongsTo('App\User');    
    }
    public function scopeComingbookings($query)
    {
        return $query->where('booking_date','>=',now());
    }
    public function scopePassedbookings($query)
    {
        return $query->where('booking_date','<',now());
    }
}
