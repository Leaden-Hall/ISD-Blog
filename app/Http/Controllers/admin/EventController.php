<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $events = Event::paginate(10);
        $count = $events->count();
        return view('admin/events', compact('events','count'));
    }

    
    public function create()
    {
        return view('admin/addEvent');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'min:6|max:100',
            'summary' => 'min:6|max:200',
            'banner' => 'image|nullable|max:1999'
        ]);

        Event::create([
            'title' => $request->title,
            'summary' => $request->summary,
            'banner' => $this->saveImage($request, 'banner', 'events'),
            'content' => $request->content
          ]);

        return redirect('admin/events');

    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $event = Event::find($id);
        return view('admin/editEvent', compact('event'));
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'min:6|max:100',
            'summary' => 'min:6|max:200',
            'banner' => 'image|nullable|max:1999'
        ]);
        
        $input = $request->all();
        $event = Event::find($id);
        $event->title = $input["title"];
        $event->summary = $input["summary"];
        $event->content = $input["content"];
        if ($this->saveImage($request, 'banner', 'events') != 'noimage.jpg') {
            $event->banner = $this->saveImage($request, 'banner', 'events');
        }
        $event->save();

        return redirect('admin/events');
    }

    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();

        return response()->json(true);
    }
}
