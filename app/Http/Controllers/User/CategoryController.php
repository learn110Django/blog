<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;


class CategoryController extends Controller
{
   

   public function category(Category $category=null)
   {
       $posts = $category->posts;

       foreach($posts as $key =>$post){
        $posts[$key]->body = preg_replace("/<[^>]*>/i", "", $post->body);
        $posts[$key]->body = preg_replace("/&.+?;/i", "", $post->body);
    }
       return view('website.categories',compact('posts'));
   }
}
