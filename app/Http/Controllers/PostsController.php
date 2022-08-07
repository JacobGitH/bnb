<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Images;
use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    //shows home page
    public function index(Posts $posts){
        return view('posts.index', ['posts' => $posts->latest('id')->filter(request(['search']))->get()]);
    }

    //shows single post listing with comments
    public function show(Posts $posts){
        $comments = Comments::where('post_id', $posts->id)->get();
        return view('posts.show', ['post' => $posts, 'comments' => $comments]);
    }

    //shows post form 
    public function create(){
        return view('posts.create');
    }

    //stores post
    public function store(Request $request){
        $form = $request->validate([
            'title' => 'required',
            'location' =>'required',
            'contact' => 'required',
            'price_for_day' => 'required',
            'price_for_servis' => 'nullable',
            'rules' => 'nullable',
            'description' => 'nullable',
            'user_id' => 'required',
        ]);

        $postForID = Posts::create($form);
        
        //checks if request has files and then stores them in public 
        //images are linked through post_id
        if($request->hasFile('images')){
            //goes through all images in array
            foreach($request->file('images') as $image){
                //stores images path in storage into variable and saves post id into var
                $path = $image->store('postImages', 'public');
                $post_id = $postForID->id;

                Images::create([
                    'path' => $path,
                    'post_id' => $post_id,
                ]);
            } 
        }

        return redirect('/');
    }

    
    public function showUserPosts(Posts $posts){
        $id = Auth::id();
        return view('posts.showUserPosts', ['posts' => $posts->where('user_id', $id)->get()]);
    }

    public function createUsersPosts(Posts $posts){
        return view('posts.editUsersPosts', ['post' => $posts]);
    }

    public function updateUsersPosts(Request $request, Posts $posts){
        $form = $request->validate([
            'title' => 'required',
            'location' =>'required',
            'contact' => 'required',
            'price_for_day' => 'required',
            'price_for_servis' => 'nullable',
            'rules' => 'nullable',
            'description' => 'nullable',
        ]);

        $posts->update($form);
        
        //checks if request has files and then stores them in public 
        //images are linked through post_id
        if($request->hasFile('images')){
            //goes through all images in array
            foreach($request->file('images') as $image){
                //stores images path in storage into variable and saves post id into var
                $path = $image->store('postImages', 'public');
                $post_id = $posts->id;

                Images::create([
                    'path' => $path,
                    'post_id' => $post_id,
                ]);
            } 
        }

        return back();
    }
    
    
}
