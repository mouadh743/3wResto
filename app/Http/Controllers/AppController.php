<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer ;
class AppController extends Controller
{
    public function welcome()
    {
        return view('welcome',[
            'msg'=>'welcom to 3wacademy',
        ]);
    }
    public function about()
    {
        $customers = Customer::all();
        return view('about',[
            'customers' => $customers,
        ]);
    }
}
