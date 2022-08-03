<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{

    //stores comments 
    public function store(Request $request){
        if(!Auth::check()){
            return redirect("/");
        }

        $form = $request->validate([
            'user_name' => 'required',
            'post_id' => 'required',
            'user_id' => 'required',
            'comment' => 'required',
        ]);

        Comments::create($form);

        return back();
    }

}
