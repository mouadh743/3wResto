<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meal ;
class AppController extends Controller
{
    public function welcome()
    {
        $meals = Meal::all();
        return view('welcome',[
            'msg'=>'welcom to 3wacademy',
            'meals' =>$meals,
        ]);
    }
    public function order()
    {
        return view('order.index');
    }
    public function about()
    {
        
        return view('about',[
            'customers' => $customers,
        ]);
    }
}
