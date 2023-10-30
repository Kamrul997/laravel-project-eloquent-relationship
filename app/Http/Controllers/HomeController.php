<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Owner;

class HomeController extends Controller
{
    public function showDataTable(){

        $car = Owner::find(1)->car;

        dd($car);

        return view('home.index');
    }
}
