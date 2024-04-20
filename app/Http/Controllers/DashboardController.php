<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function  dashboard(){
        $comments = Comment::where('user_id', auth()->user()->id)->get(); 
        return view('dashboard', compact('comments'));
    }
}