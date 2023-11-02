<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Owner;
use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Client;
use App\Models\Employee;
use App\Models\Photo;

class HomeController extends Controller
{
    public function showDataTable(){

        // $owners = Owner::all();
        $posts = Post::with('category')->get();
        $photos = Client::find(1)->photos;

        return $photos;

        // return $employee;

        $data = compact('posts');
        return view('home.index')->with($data);
    }
}
