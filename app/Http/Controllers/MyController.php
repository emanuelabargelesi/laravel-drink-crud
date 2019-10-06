<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyModel;

class MyController extends Controller
{
    public function GetBevande(){

        $values = MyModel::all();

        $min = MyModel::min('prezzo');
        $max = MyModel::max('prezzo');
        $avg = MyModel::avg('prezzo');

        return view("bevande",compact('values', 'min', 'max', 'avg')); 


    }
}
