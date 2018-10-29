<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Post;
use App\PostImage;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::paginate(10);
        return view('admin/posts', compact('posts'));
    }

    public function changeStatus($id, $status)
    {
        $post = Post::find($id);
        $post->posts_status = $status;
        $post->save();

        return response()->json(true);
    }
    
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return response()->json(true);
    }
}
