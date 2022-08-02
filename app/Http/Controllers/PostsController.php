<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(Posts $posts){
        return view('posts.index', ['posts' => $posts->latest('id')->get()]);
    }

    public function show(Posts $posts){
        return view('posts.show', ['posts' => $posts]);
    }

    public function create(){
        return view('posts.create');
    }
}
