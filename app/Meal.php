<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    public function OrderLines()
    {
        return $this->hasMany('App\OrderLine');    
    }
}
