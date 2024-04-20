<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function  index(){
        $comments = Comment::where('user_id', auth()->user()->id)->get(); 
        return view('show.index', compact('comments'));
    }
    
}