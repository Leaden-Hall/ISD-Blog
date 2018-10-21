<?php

namespace App\Http\Controllers;

use App\Announcement;
use Illuminate\Http\Request;

class AnnouncementsController extends Controller
{
    
    public function index()
    {
        $announcements = Announcement::orderBy('created_at','desc')->paginate(10);
        return view('admin/announcements', compact('announcements'));
    }

    public function create()
    {
        return view('admin/addAnnouncement');
    }

    public function store(Request $request)
    {
        Announcement::create([
        'title' => $request->title,
        'content' => $request->content
        ]);

        return redirect('admin/announcements');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $announcement = Announcement::find($id);
        return view('admin/editAnnouncement', compact('announcement'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $announcement = Announcement::find($id);
        $announcement->title = $input["title"];
        $announcement->content = $input["content"];
        $announcement->save();

        return redirect('admin/announcements');
    }

    public function destroy($id)
    {
        $announcement = Announcement::find($id);
        $announcement->delete();

        return redirect()->back();
    }
}
