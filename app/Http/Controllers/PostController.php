<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class PostController extends Controller
{
    //
    public function create(){
        $category = Category::pluck('name','id')->all();
        return view('pages.create',compact('category'));
    }

    public function store(Request $request){
        if($request->ajax()){
           Post::create($request->all());
        }
    }

    public function show(Request $request){
        if($request->ajax()){
            $posts = Post::all();
            return view('pages.show',compact('posts'));
        }
    }

    public function delete(Request $request){
        if($request->ajax()){
            Post::findOrFail($request->id)->delete();
        }
    }

    public function get_data(Request $request){
        if($request->ajax()){
            return Post::findOrFail($request->id);
        }
    }

    public function update(Request $request){
        if($request->ajax()){
            
            $post = Post::findOrFail($request->id);

            $post['name'] = $request->name;
            $post['body'] = $request->body;
            $post['category_id'] = $request->category_id;
            $post->save();
        }
    }
}
