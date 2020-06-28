<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    public function index(){

        $posts = Post::orderBy('created_at', 'DESC')->get();

        return view('posts.index', compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(StorePostRequest $request, Post $post){
        if (!$request->isValid()) {
            return redirect()->back()->with('error');
        }
        return redirect(route('post.index'))->with('notification', ['type' => 'success', 'message' => "Uw post is succesvol verzonden"]);
    }

    public function show($slug){
        $post = Post::where('slug', $slug)->first();
        if($post)
        return view('posts.show', compact('post'));
        else abort(404);
    }

    public function edit($slug){
        $post = Post::where('slug', $slug)->first();

        if(auth()->user()->id !==$post->user_id){
            return abort(404);
        } 

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post){

        $data = [
            'title' => $request->title,
            'slug' => $request->title,
            'description' => $request->description,
            'body' => $request->body
        ];

        $post->update($data);

        return redirect(route('post.index'))->with('notification', ['type' => 'success', 'message' => "Uw post is succesvol veranderd"]);

    }

    public function delete(Post $post){

        $post->delete();

        return redirect(route('post.index'))->with('notification', ['type' => 'success', 'message' => "Uw post is succesvol verwijderd"]);

    }

}
