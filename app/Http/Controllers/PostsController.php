<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function store(Request $request){
        $form = $request->validate([
            'title' => 'required',
            'location' =>'required',
            'contact' => 'required',
            'price_for_day' => 'required',
            'price_for_servis' => 'nullable',
            'rules' => 'nullable',
            'description' => 'nullable'
        ]);

        $postForID = Posts::create($form);
        
        //checks if request has files and then stores them in public 
        //images are linked through post_id
        if($request->hasFile('images')){
            foreach($request->file('images') as $image){
               $imageModel = new Images;
               $path = $image->store('postImages', 'public');
               $imageModel->path = $path;
               $imageModel->post_id = $postForID->id;
               $imageModel->save();
            } 
        }

        return redirect('/');
        

    }
}
