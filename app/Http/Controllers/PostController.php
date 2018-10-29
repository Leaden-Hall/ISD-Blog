<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;
use App\Comment;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth');

        date_default_timezone_set('Asia/Ho_Chi_Minh');
    }


    public function index() {
        $Announcements = new AnnouncementController();
        $recentAnnouncements = $Announcements->bigAnnouncements();

        $Events = new EventController();
        $recentEvents = $Events->bigEvents();

        $posts = Post::where('posts_status', 1)->orderBy('created_at', 'DESC')->get();

        return view('blog/index', compact(['recentAnnouncements', 'recentEvents', 'posts']));
    }


    public function postList($user_id) {
        $posts = Post::where('users_id', $user_id)->orderBy('created_at', 'DESC')->get();

        $Events = new EventController();
        $recentEvents = $Events->bigEvents();

        $Announcements = new AnnouncementController();
        $recentAnnouncements = $Announcements->bigAnnouncements();
        return view('blog/post_listing', compact(['posts', 'recentEvents', 'recentAnnouncements']));
    }


    public function create() {
        $Events = new EventController();
        $recentEvents = $Events->bigEvents();

        $Announcements = new AnnouncementController();
        $recentAnnouncements = $Announcements->bigAnnouncements();

        return view('blog/post_add', compact(['recentEvents', 'recentAnnouncements']));
    }


    public function save(Request $request) {
        $this->validate($request, [
            'title' => 'required|unique:posts|string',
            'summary' => 'required|string',
            'content' => 'required|string'
        ]);

        $title = $request['title'];
        $summary = $request['summary'];
        $content = $request['content'];
        $publisher_id = $request['user_id'];

        $newPost = new Post;

        $newPost->title = $title;
        $newPost->summary = $summary;
        $newPost->content = $content;
        $newPost->posts_status = 2;
        $newPost->users_id = $publisher_id;
        $newPost->title = $title;
        $newPost->setUpdatedAt(null);

        $newPost->save();

        session()->flash('post_success', 'You have created a new post successfully');
        return redirect("posts/$publisher_id");
    }


    public function show($id, $editComment = null) {
        $post = Post::find($id);

        $Events = new EventController();
        $recentEvents = $Events->bigEvents();

        $Announcements = new AnnouncementController();
        $recentAnnouncements = $Announcements->bigAnnouncements();

        $allComments = $post->comments;

        return view('blog/post', compact(['post', 'recentEvents', 'recentAnnouncements', 'allComments', 'editComment']));
    }


    public function edit($id) {
        $post = Post::find($id);

        $Events = new EventController();
        $recentEvents = $Events->bigEvents();

        $Announcements = new AnnouncementController();
        $recentAnnouncements = $Announcements->bigAnnouncements();

        return view('blog/post_add', compact(['post', 'recentEvents', 'recentAnnouncements']));
    }


    public function update(Request $request, $id) {
        $this->validate($request, [
            'title' => 'required|string|unique:posts,title,' . $id,
            'summary' => 'required|string',
            'content' => 'required|string'
        ]);

        $title = $request['title'];
        $summary = $request['summary'];
        $content = $request['content'];
        $publisher_id = $request['user_id'];

        $updatePost = Post::find($id);

        $updatePost->title = $title;
        $updatePost->summary = $summary;
        $updatePost->content = $content;
        $updatePost->posts_status = 2;
        $updatePost->users_id = $publisher_id;
        $updatePost->title = $title;
        $updatePost->setUpdatedAt(Carbon::now());

        $updatePost->save();

        session()->flash('post_update', 'You have update the post successfully');
        return redirect("posts/$publisher_id");
    }

}
