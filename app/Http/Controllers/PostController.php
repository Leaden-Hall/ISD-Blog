<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $Announcements = new AnnouncementController();
        $recentAnnouncements = $Announcements->bigAnnouncements();

        $Events = new EventController();
        $recentEvents = $Events->bigEvents();

        $posts = Post::orderBy('created_at', 'DESC')->get();

        return view('blog/index', compact(['recentAnnouncements', 'recentEvents', 'posts']));
    }

    public function postList($user_id) {
        $posts = Post::where('users_id', $user_id)->get();

        $Events = new EventController();
        $recentEvents = $Events->bigEvents();

        $Announcements = new AnnouncementController();
        $recentAnnouncements = $Announcements->bigAnnouncements();
        return view('blog/post_listing', compact(['posts', 'recentEvents', 'recentAnnouncements']));
    }

    public function show($id) {
        $post = Post::find($id);

        $Events = new EventController();
        $recentEvents = $Events->bigEvents();

        $Announcements = new AnnouncementController();
        $recentAnnouncements = $Announcements->bigAnnouncements();

        return view('blog/post', compact(['post', 'recentEvents', 'recentAnnouncements']));
    }


}
