<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{

    //stores comments 
    public function store(Request $request, Posts $post){
        if(!Auth::check()){
            return redirect("/");
        }

        $form = $request->validate([
            'comment' => 'required',
        ]);

        Comments::create([            
            'user_name' => auth()->user()->name,
            'post_id' => $post->id,
            'user_id' => auth()->user()->id,
            'comment' => $request->comment,
        ]);

        return back();
    }

}
