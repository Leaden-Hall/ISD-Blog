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

        $posts = Post::where('posts_status', Post::ACTIVE)->orderBy('created_at', 'DESC')->paginate(4);

        return view('blog/index', compact(['recentAnnouncements', 'recentEvents', 'posts']));
    }


    public function postList($user_id) {
        $posts = Post::where('users_id', $user_id)->orderBy('created_at', 'DESC')->paginate(5);

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
        $newPost->posts_status = Post::PENDING;
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
        $updatePost->posts_status = Post::PENDING;
        $updatePost->users_id = $publisher_id;
        $updatePost->title = $title;
        $updatePost->setUpdatedAt(Carbon::now());

        $updatePost->save();

        session()->flash('post_update', 'You have update the post successfully');
        return redirect("posts/$publisher_id");
    }

    public function archive($timestamp) {
        $archivePosts = Post::where('created_at', '>=', $this->archiveStartTime($timestamp))
                            ->where('created_at', '<=', $this->archiveEndTime($timestamp))
                            ->orderBy('created_at', 'DESC')->get();

        $Announcements = new AnnouncementController();
        $recentAnnouncements = $Announcements->bigAnnouncements();

        $Events = new EventController();
        $recentEvents = $Events->bigEvents();

        return view('blog/index', compact(['recentAnnouncements', 'recentEvents', 'archivePosts', 'timestamp']));
    }

    public function search(Request $request) {
        $this->validate($request, [
            'key' => 'required|string'
        ]);

        $key = $request->key;

        $searchPosts = Post::where('title', 'LIKE', '%'.$key.'%')->get();

        $Announcements = new AnnouncementController();
        $recentAnnouncements = $Announcements->bigAnnouncements();

        $Events = new EventController();
        $recentEvents = $Events->bigEvents();

        return view('search/search', compact(['recentAnnouncements', 'recentEvents', 'searchPosts', 'key']));
    }

    public function archiveStartTime($timestamp) {
        switch ($timestamp) {
            case "January":
                return "2018-01-01 00:00:00";
                break;
            case "February":
                return "2018-02-01 00:00:00";
                break;
            case "March":
                return "2018-03-01 00:00:00";
                break;
            case "April":
                return "2018-04-01 00:00:00";
                break;
            case "May":
                return "2018-05-01 00:00:00";
                break;
            case "June":
                return "2018-06-01 00:00:00";
                break;
            case "July":
                return "2018-07-01 00:00:00";
                break;
            case "August":
                return "2018-08-01 00:00:00";
                break;
            case "September":
                return "2018-09-01 00:00:00";
                break;
            case "October":
                return "2018-10-01 00:00:00";
                break;
            case "November":
                return "2018-11-01 00:00:00";
                break;
            case "December":
                return "2018-12-01 00:00:00";
                break;
            default:
                return null;
        }
    }

    public function archiveEndTime($timestamp) {
        switch ($timestamp) {
            case "January":
                return "2018-01-31 23:59:59";
                break;
            case "February":
                return "2018-02-28 23:59:59";
                break;
            case "March":
                return "2018-03-31 23:59:59";
                break;
            case "April":
                return "2018-04-30 23:59:59";
                break;
            case "May":
                return "2018-05-31 23:59:59";
                break;
            case "June":
                return "2018-06-30 23:59:59";
                break;
            case "July":
                return "2018-07-31 23:59:59";
                break;
            case "August":
                return "2018-08-31 23:59:59";
                break;
            case "September":
                return "2018-09-30 23:59:59";
                break;
            case "October":
                return "2018-10-31 23:59:59";
                break;
            case "November":
                return "2018-11-30 23:59:59";
                break;
            case "December":
                return "2018-12-31 23:59:59";
                break;
            default:
                return null;
        }
    }

    public function cancel($id) {
        $cancelPost = Post::find($id);
        $cancelPost->posts_status = Post::CANCELED;

        $publisher_id = $cancelPost->users_id;
        $cancelPost->save();

        session()->flash('post_cancel', 'You have canceled the post successfully');
        return redirect("posts/$publisher_id");

    }

}
