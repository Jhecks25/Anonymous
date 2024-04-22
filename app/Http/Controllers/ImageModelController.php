<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ImageModelController extends Controller
 
    {       
            
    public function imagemodel(Request $request){
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:1028', // Max 2MB
    ]);

    $imageName = time().'.'.$request->image->extension();
    $request->image->move(public_path('images'), $imageName);

    $user = User::find(auth()->user()->id);

    $user->image=$imageName;
    $user->save();

    return redirect()->route('dashboard');

}
}