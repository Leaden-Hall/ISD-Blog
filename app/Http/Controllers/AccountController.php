<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AccountController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        date_default_timezone_set('Asia/Ho_Chi_Minh');
    }

    public function show($id) {
        $Announcements = new AnnouncementController();
        $recentAnnouncements = $Announcements->bigAnnouncements();

        $Events = new EventController();
        $recentEvents = $Events->bigEvents();

        $account = User::find($id);

        return view('account/account', compact(['recentAnnouncements', 'recentEvents', 'account']));
    }

    public function edit() {
        $Announcements = new AnnouncementController();
        $recentAnnouncements = $Announcements->bigAnnouncements();

        $Events = new EventController();
        $recentEvents = $Events->bigEvents();


    }

    public function update(Request $request) {

    }

    public function password() {
        $Announcements = new AnnouncementController();
        $recentAnnouncements = $Announcements->bigAnnouncements();

        $Events = new EventController();
        $recentEvents = $Events->bigEvents();

        return view('account/changePassword', compact(['recentAnnouncements', 'recentEvents']));
    }

    public function changePassword(Request $request) {

    }
}
