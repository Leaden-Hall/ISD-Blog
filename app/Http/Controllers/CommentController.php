<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Post;
Use App\Comment;

class CommentController extends Controller
{
    public function __construct() {
        $this->middleware('auth');

        date_default_timezone_set('Asia/Ho_Chi_Minh');
    }

    public function save(Request $request) {
        $this->validate($request, [
            'comment_content' => 'required|string'
        ]);

        $user_id = $request->user_id;
        $post_id = $request->post_id;
        $content = $request->comment_content;

        if($request->parent_id) {
            $parent_id = $request->parent_id;

            $newComment = new Comment;

            $newComment->users_id = $user_id;
            $newComment->posts_id = $post_id;
            $newComment->content = $content;
            $newComment->parent_id = $parent_id;
            $newComment->setCreatedAt(Carbon::now());
            $newComment->setUpdatedAt(null);

            $newComment->save();

            session()->flash("Comment_reply_success_$parent_id", 'Your response has been recorded successfully');
            return redirect("post/$post_id/#comment$parent_id");

        }else {
            $newComment = new Comment;

            $newCommentId = $newComment->insertGetId([
                'users_id' => $user_id,
                'posts_id' => $post_id,
                'content' => $content,
                'created_at' => Carbon::now(),
                'updated_at' => null
            ]);

            session()->flash('Comment_success', 'Your comment has been recorded successfully');
            return redirect("post/$post_id/#comment$newCommentId");
        }
    }

    public function delete($comment_id, $post_id) {
        $deleteComment = Comment::find($comment_id);
        $deleteComment->delete();

        session()->flash("Comment_delete_success", 'Your comment has been deleted successfully');
        return redirect("post/$post_id");
    }

    public function edit($comment_id, $post_id) {
        $editComment = Comment::find($comment_id);

        $post = new PostController();
        return $post->show($post_id, $editComment);
    }

    public function update(Request $request) {
        $this->validate($request, [
            'comment_content' => 'required|string'
        ]);

        $user_id = $request->user_id;
        $post_id = $request->post_id;
        $content = $request->comment_content;
    }

}
