<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Report;

class ReportController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $reports = Report::orderBy('created_at','desc')->paginate(10);
        $count = $reports->count();
        return view('admin/reports', compact('reports','count'));
    }

     public function changeStatus($id, $status)
    {
        $report = Report::find($id);
        $report->report_status = $status;
        $report->save();

        return response()->json(true);
    }

}
