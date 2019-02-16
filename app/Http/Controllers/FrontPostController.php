<?php

namespace App\Http\Controllers;

use App\Post;

class FrontPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        if ($posts->isEmpty()) {
            return abort(404);
        }

        return view('fronts.posts.index',compact('posts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        if (is_null($post)) {
            return abort(404);
        }

        return view('fronts.posts.show', compact('post'));
    }
}
