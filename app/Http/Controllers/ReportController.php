<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;

class ReportController extends Controller
{

    public function index()
    {
        $reports = Report::orderBy('created_at','desc')->paginate(10);
        return view('admin/reports', compact('reports'));
    }

     public function changeStatus($id, $status)
    {
        $report = Report::find($id);
        $report->report_status = $status;
        $report->save();

        return redirect('admin/reports');
    }

}
