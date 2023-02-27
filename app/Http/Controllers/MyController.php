<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class MyController extends Controller
{
    public function trains(){
        $trains = Train::all();

        return view('welcome' , compact('trains'));
    }
}
