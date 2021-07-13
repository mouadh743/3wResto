<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Meal;
class MealsListController extends Controller
{
    
    public function index()
    {
        return Meal::all();
    }

    public function show(Meal $meal)
    {
        //
    }
}
