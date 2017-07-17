<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post.index')->withPosts($posts);
    }

    public function createPost()
    {
        return view('post.create');
    }

    public function storePost()
    {
        
    }

    public function editPost()
    {

    }

    public function deletePost()
    {

    }

    public function updatePost()
    {
        
    }

}
