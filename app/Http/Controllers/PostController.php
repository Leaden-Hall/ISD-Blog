<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\PostImage;

class PostController extends Controller
{

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

        return redirect('admin/posts');
    }


    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->back();
    }
}
