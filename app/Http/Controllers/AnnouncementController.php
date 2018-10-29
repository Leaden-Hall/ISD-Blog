<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;

class AnnouncementController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
        date_default_timezone_set('Asia/Ho_Chi_Minh');
    }

    public function index() {
        $recentAnnouncements = $this->bigAnnouncements();
        $announcements = Announcement::orderBy('created_at', 'DESC')->skip(2)->take(10)->get();

        $Events = new EventController();
        $recentEvents = $Events->bigEvents();

        return view('announcement/index', compact(['recentAnnouncements', 'announcements', 'recentEvents']));
    }

    public function bigAnnouncements() {
        $announcements = Announcement::orderBy('created_at', 'DESC')->take(2)->get();
        return $announcements;
    }

    public function show($id) {
        $announcement = Announcement::find($id);

        $Events = new EventController();
        $recentEvents = $Events->bigEvents();

        $recentAnnouncements = $this->bigAnnouncements();

        return view('announcement/announcement', compact(['announcement', 'recentEvents', 'recentAnnouncements']));
    }
}
