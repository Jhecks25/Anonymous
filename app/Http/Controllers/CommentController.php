<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function saveComment(Request $request){

        $comment =new Comment();
        $comment->user_id =$request->user_id;
        $comment->comment = $request->comment;
        $comment->save();

        return redirect()->route('dashboard');
    }

   
}