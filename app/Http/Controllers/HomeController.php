<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Owner;
use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;

class HomeController extends Controller
{
    public function showDataTable(){

        $owners = Owner::all();
        $posts = Post::with('category')->get();

        return $posts;

        $data = compact('posts');
        return view('home.index')->with($data);
    }
}
