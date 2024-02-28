<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index(){
        $posts = DB::table("posts") -> get();
        return view('posts.index', compact('posts'));
    }

    public function detail($id){
        $post = DB::table("posts") -> where('id', $id) ->get();
        return view('posts.detail', compact('post'));
    }

    public function create(Request $request){
        return view('home');
    }

}
