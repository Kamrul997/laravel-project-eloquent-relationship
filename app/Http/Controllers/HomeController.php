<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Owner;

class HomeController extends Controller
{
    public function showDataTable(){

        $owners = Owner::all();
        $data = compact('owners');
        return view('home.index')->with($data);
    }
}
