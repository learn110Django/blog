<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts(){
        return $this->belongsToMany('App\Post','post_tags');
    }

    // public function posts(){
    //     return $this->belongsToMany('App\Post','post_tags')->select('posts.id','posts.title','posts.body');
    // }
    
    public function getRouteKeyName(){
        return 'slug';
    }
}

// Tag::find(1)->posts
// Tag::where('name','admin')->pluck('id')