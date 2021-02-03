<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // public function posts(){
    //     // return $this->belongsToMany('App\Category','category_posts')->paginate(3);
    //     return $this->belongsToMany('App\Category','category_posts');
    // }
    public function posts(){
        return $this->belongsToMany('App\Post','category_posts')->select('posts.id','posts.title','posts.body');
    }
    
    public function getRouteKeyName(){
        return 'slug';
    }
}
