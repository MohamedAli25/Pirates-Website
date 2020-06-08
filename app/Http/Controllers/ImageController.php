<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function show(){
        return view('image');
    }
    public function save(Request $request){
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
       $imageName = time().'.'.$request->image->extension();  
   
       $request->image->move(public_path('images'), $imageName);
    return back()
    ->with('success','You have successfully upload image.')
    ->with('image',$imageName);
    }
}