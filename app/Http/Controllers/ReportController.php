<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;

class ReportController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index($user_id) {
        $Announcements = new AnnouncementController();
        $recentAnnouncements = $Announcements->bigAnnouncements();

        $Events = new EventController();
        $recentEvents = $Events->bigEvents();

        $reports = Report::where('reporter_id', $user_id)->get();

        return view('report/index', compact(['recentAnnouncements', 'recentEvents', 'reports']));
    }

    public function show($id) {

    }

    public function create() {

    }
}
