<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    public function index(){
        return view('posts.index');
    }

    public function create(){
        return view('posts.create');
    }

    public function store(StorePostRequest $request, Post $post){
        if (!$request->isValid()) {
            return redirect()->back()->with('error');
        }
        return redirect(route('post.index'))->with('notification', ['type' => 'success', 'message' => "Uw posts is succesvol verzonden"]);
    }

    public function show($slug){
        $post = Post::where('slug', $slug)->first();
        if($post)
        return view('posts.show', compact('post'));
        else abort(404);
    }

}
