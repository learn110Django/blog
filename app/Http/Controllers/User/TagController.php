<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
   
    public function tag(Tag $tag=null)
    {
       $posts = $tag->posts;
       
       foreach($posts as $key =>$post){
        $posts[$key]->body = preg_replace("/<[^>]*>/i", "", $post->body);
        $posts[$key]->body = preg_replace("/&.+?;/i", "", $post->body);
    }
       return view('website.tags',compact('posts'));
    }
}
