<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use App\Post;
use App\User;

class ReportController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        date_default_timezone_set('Asia/Ho_Chi_Minh');
    }

    public function index($status, $user_id) {
        $Announcements = new AnnouncementController();
        $recentAnnouncements = $Announcements->bigAnnouncements();

        $Events = new EventController();
        $recentEvents = $Events->bigEvents();

        switch ($status) {
            case "pending":
                $reports = Report::where('reporter_id', $user_id)->where('report_status', Report::PENDING)->paginate(4);
                break;

            case "approved":
                $reports = Report::where('reporter_id', $user_id)->where('report_status', Report::APPROVED)->paginate(4);
                break;
            case "canceled":
                $reports = Report::where('reporter_id', $user_id)->where('report_status', Report::CANCELED)->paginate(4);
                break;

            default:
                $reports = Report::where('reporter_id', $user_id)->paginate(4);
        }

        return view('report/index', compact(['recentAnnouncements', 'recentEvents', 'reports', 'status']));
    }

    public function show($id) {
        $Announcements = new AnnouncementController();
        $recentAnnouncements = $Announcements->bigAnnouncements();

        $Events = new EventController();
        $recentEvents = $Events->bigEvents();

        $report = Report::find($id);

        if($report->reported_posts_id) {
            $post_id = $report->reported_posts_id;
            $post = Post::find($post_id);

            return view('report/report', compact(['recentAnnouncements', 'recentEvents', 'report', 'post']));
        }elseif($report->reported_users_id) {
            $user_id = $report->reported_users_id;
            $user = User::find($user_id);

            return view('report/report', compact(['recentAnnouncements', 'recentEvents', 'report', 'user']));
        }


    }

    public function create($type, $id) {
        $Announcements = new AnnouncementController();
        $recentAnnouncements = $Announcements->bigAnnouncements();

        $Events = new EventController();
        $recentEvents = $Events->bigEvents();

        if($type == 'post') {
            $post_id = $id;
            $post = Post::find($post_id);

            return view('report/report_add', compact(['post', 'recentAnnouncements', 'recentEvents']));
        }elseif ($type == 'user') {
            $user_id = $id;
            $user = User::find($user_id);

            return view('report/report_add', compact(['user', 'recentAnnouncements', 'recentEvents']));
        }else {
            return redirect()->route('404');
        }
    }

    public function save(Request $request, $type) {
        $this->validate($request, [
            'reason' => 'required|string'
        ]);

        $reporter_id = $request->reporter_id;
        $reason = $request->reason;

        if($request->reported_posts_id) {
            $reported_posts_id = $request->reported_posts_id;

            $newReport = new Report;

            $newReport->reporter_id = $reporter_id;
            $newReport->reported_posts_id = $reported_posts_id;
            $newReport->content = $reason;
            $newReport->report_status = Report::PENDING;
            $newReport->setUpdatedAt(null);

            $newReport->save();

            session()->flash('report_success', 'You have reported this violation successfully');
            return redirect("reports/all/$reporter_id");


        }else if($request->reported_users_id) {
            $reported_users_id = $request->reported_posts_id;

            $newReport = new Report;

            $newReport->reporter_id = $reporter_id;
            $newReport->reported_users_id = $reported_users_id;
            $newReport->content = $reason;
            $newReport->report_status = Report::PENDING;
            $newReport->setUpdatedAt(null);

            $newReport->save();

            session()->flash('report_success', 'You have reported this violation successfully');
            return redirect("reports/all/$reporter_id");
        }

        return redirect("reports/$reporter_id");
    }

    public function update(Request $request, $id) {

        $updateReport = Report::find($id);

        $updateReport->content = $request->update_reason;

        $updateReport->save();

        $reporter_id = $updateReport->reporter_id;
        session()->flash('report_update', 'Your report has been updated successfully');
        return redirect("reports/all/$reporter_id");
    }

    public function cancel($id) {
        $cancelReport = Report::find($id);

        $cancelReport->report_status = Report::CANCELED;

        $cancelReport->save();

        $reporter_id = $cancelReport->reporter_id;
        session()->flash('report_cancel', 'Your report has been canceled successfully');
        return redirect("reports/all/$reporter_id");
    }
}
