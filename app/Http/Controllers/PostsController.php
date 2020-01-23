<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function show($slug)
    {
        $post = \DB::table('posts')->where('slug',$slug)->first();
//        $posts = [
//            'my-first-post' => 'Hello, this is my first blog post!',
//            'my-second-post' => 'Now I am getting the hang of blogging thing.'
//        ];

//        if (! array_key_exists($post, $posts)) {
//            abort(404, 'Sorry, that post was not found.');
//        }

        return view('post', [
            'post' => $post
        ]);
    }
}
