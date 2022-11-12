<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostsController extends Controller
{
    public function welcome () {
        $posts = DB::table('posts')->limit(5)->where('active', '=' , '1')->orderBy('created_at', 'desc')->get();
        return view('welcome', ['posts' => $posts]);
    }

    public function list () {
        $posts = Post::all();
        return view('posts.list' , ['posts' => $posts]);
    }
    public function post ($id) {
        $post = Post::find($id);
        return view('posts.post', ['post' => $post]);

    }
    public function createorupdate (Request $request,Post $post) {
        if ($request->input("title")) {
            $post->fill($request->all())->save();
            return redirect()->route('posts.list');
    }
    return view('posts.edit', ["post" => $post]);
}

    public function delete (Post $post) {
        $post -> delete();
        return redirect()->route('posts.list');
    }

}
