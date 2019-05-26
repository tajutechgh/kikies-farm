<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\Event;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $s = $request->input('s');

        $events = Event::latest()->search($s)->paginate(10);
        
        return view('admin.event.index',compact('events','s'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request,[

            'name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',

        ]);

        $event = new Event;

        $event->name = $request->name;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;

        $event->save();
        
        return redirect(route('event.index'))->with('message','Event added successfully');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[

            'name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',

        ]);

        $event = Event::find($id);

        $event->name = $request->name;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;

        $event->save();
        
        return redirect(route('event.index'))->with('message','Event updated successfully');
    }

    public function destroy($id)
    {
        Event::where('id',$id)->delete();

        return redirect()->back()->with('message','Event deleted successfully');
    }
}
