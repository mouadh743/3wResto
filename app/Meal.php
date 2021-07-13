<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{

    protected $guarded = [];
    
    public function OrderLines()
    {
        return $this->hasMany('App\OrderLine');    
    }
}
