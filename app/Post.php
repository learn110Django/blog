<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{

    

    protected $table = 'posts';
    protected $fillable=[
        'title',
        'body',
        'slug',
    ];
    public function tags(){
        return $this->belongsToMany('App\Tag','post_tags')->withTimestamps();
    }
   


    // public function adminTags(){
    //     return $this->belongsToMany('App\Tag','post_tags')->where('tags.name','mock')->withTimestamps();
    // }

    public function categories(){       
        return $this->belongsToMany('App\Category','category_posts')->withTimestamps();
    }
    
   

    public function getRouteKeyName(){
        return 'slug';
    }
}
