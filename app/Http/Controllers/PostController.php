<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::get();
        return view('blog', ['posts' => $posts]);
    }
    public function show($post){
        return Post::find($post);
    }
}
