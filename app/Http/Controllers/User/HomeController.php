<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
use \Illuminate\Support\Str;

class HomeController extends Controller
{
    public function blog(){
        $posts = Post::where('status',1)->paginate(3);
        $categoryAll = Category::all();
        $TagAll = Tag::all();
        foreach($posts as $key =>$post){
            $posts[$key]->body = preg_replace("/<[^>]*>/i", "", $post->body);
            $posts[$key]->body = preg_replace("/&.+?;/i", "", $post->body);
        }
        return view('website.blog',compact('posts','categoryAll','TagAll'));
    }

    //  public function get_tag_posts(Request $request){
    //     $tags=Tag::with('posts')->whereName('mock')->get();
    //     // dd($tags);
    //     return view('website.Tags',compact('tags'));
    //  }

}
