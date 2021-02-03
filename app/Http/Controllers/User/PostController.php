<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function post(Post $post){
        return view('website.post',compact('post'));
    }
   public function show(){
       
   }
}
