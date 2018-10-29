<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        date_default_timezone_set('Asia/Ho_Chi_Minh');
    }

    public function index() {
        $events = Event::orderBy('created_at', 'DESC')->skip(1)->take(10)->get();
        $recentEvents = $this->bigEvents();

        $Announcements = new AnnouncementController();
        $recentAnnouncements = $Announcements->bigAnnouncements();

        return view('event/index', compact(['events', 'recentEvents', 'recentAnnouncements']));
    }

    public function bigEvents() {
        $events = Event::orderBy('created_at', 'DESC')->take(1)->first();

        return $events;
    }

    public function show($id) {
        $event = Event::find($id);
        $recentEvents = $this->bigEvents();

        $Announcements = new AnnouncementController();
        $recentAnnouncements = $Announcements->bigAnnouncements();
        return view('event/event', compact(['event', 'recentEvents', 'recentAnnouncements']));
    }
}
