<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use Image;
 use strip_tags; 
use App\Category;
use \Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
      return view('admin.post.show',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags=Tag::all();
        $categories=Category::all();
        return view('admin.post.post',compact('tags','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $this->validate($request ,[
           'title'=>'required',
           'slug'=>'required',
           'body'=>'required',
           'image'=>'required'
       ]);

   

      if($request->hasFile('image')){
            $file=$request->file('image');
             $image_name=rand().'.'.$file->getClientOriginalExtension();
             $thumbnailPath=public_path('images/thumb');
             $resize_image=Image::make($file->getRealPath());
             $resize_image->resize(300,200,function(){
             })->save($thumbnailPath.'/'.$image_name);
            $file->move(public_path('images'), $image_name);
      }


        
      $images = $request->file('files');
      if ($request->hasFile('files')) :
              foreach ($images as $item):
                  $var = date_create();
                  $time = date_format($var, 'YmdHis');
                  $imageName = rand() . '-' . $item->getClientOriginalExtension();
                  $item->move(public_path('gallry') , $imageName);
                  $arr[] = $imageName;
              endforeach;
              $image = implode(",", $arr);
      else:
              $image = '';
      endif;
 
 
      $slug_r = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($request->slug)));

         $post=new Post;
         $post->image=$image_name;
        $post->gallry=$image;
         $post->title=$request->title;
       $post->slug= $slug_r;
       $post->body=html_entity_decode($request->body);
       $post->status=$request->status;
       $post->save();
       $post->tags()->sync($request->tags);
       $post->categories()->sync($request->categories);
       return redirect(route('post.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tags=Tag::all();
        $categories=Category::all();
        $posts=Post::with('tags','categories')->where('id',$id)->first();
        return view('admin.post.edit',compact('posts','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request ,[
            'title'=>'required',
            'slug'=>'required',
            'body'=>'required',
        ]);
        $post=Post::find($id);
        if ($request->hasfile('image'))
        { 
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $new_name);
            $post->image=$new_name;
        } 
        $images = $request->file('files');
        if ($request->hasFile('files')) :
                foreach ($images as $item):
                    $var = date_create();
                    $time = date_format($var, 'YmdHis');
                    $imageName = rand() . '-' . $item->getClientOriginalExtension();
                    $item->move(public_path('gallry') , $imageName);
                    $arr[] = $imageName;
                endforeach;
                $image = implode(",", $arr);
        else:
                $image = '';
        endif;

        $slug_r = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($request->slug)));
        $post->title=$request->title;
        $post->slug=$slug_r;
        $post->gallry=$image;
        $post->body=$request->body;
        $post->status=$request->status;
        $post->save();
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);
        return redirect(route('post.index'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::where('id',$id)->delete();
        return redirect()->back();
    }
}
