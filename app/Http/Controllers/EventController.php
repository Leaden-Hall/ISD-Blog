<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::paginate(10);
        return view('admin/events', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'banner' => 'image|nullable|max:1999'
          ]);


        if ($request->hasfile('banner')) {
            $fileNameWithExt = $request->file('banner')->getClientOriginalName();
            $fileName = pathinfo( $fileNameWithExt, PATHINFO_FILENAME);
            if (strlen($fileName) > 10) {
                $fileName = substr($fileName,0,10);
            }
            $extension = $request->file('banner')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'_'.$extension;
            $path = $request->file('banner')->storeAs('public/assets/admin/img/avatars', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        Event::create([
            'title' => $request->title,
            'summary' => $request->summary,
            'banner' => $fileNameToStore,
            'content' => $request->content
          ]);

        return redirect('admin/events');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
