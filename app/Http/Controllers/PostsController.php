<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index(){
        $posts = DB::table("posts") -> get();
        return view('posts.index', compact('posts'));
    }

    public function detail($id){
        // $post = DB::table("posts") -> where('id', $id) ->get();
        $post= Post::find($id);
        $comment= Comment::where('post_id',$id) -> get();
        return view('posts.detail', compact('post','comment'));
    }

    public function create(Request $request){
        $request->validate([
            'title' => 'required|string|min:3',
            'content' => 'required|string'
        ]);

        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();
        return redirect('/posts');
    }

    public function editPage ($id){
        $post = DB::table("posts") -> where('id', $id) ->get();
        return view('posts.edit', compact('post'));
    }

    public function edit($id, Request $request){
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        DB::table('posts')
              ->where('id', $id)
              ->update(['title' => $post->title, 'content' => $post->content]);
        return redirect('/posts');
    }

    public function delete ($id){
        DB::table('posts')->where('id', $id) -> delete();
        return redirect('/posts');
    }
}
