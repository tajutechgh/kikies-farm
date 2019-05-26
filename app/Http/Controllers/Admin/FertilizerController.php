<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\Fertilizer;

class FertilizerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $s = $request->input('s');

        $fertilizers = Fertilizer::latest()->search($s)->paginate(10);
        
        return view('admin.fertilizer.index',compact('fertilizers','s'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request,[

            'name' => 'required',
            'cost' => 'required',
            'description' => 'required',
            'image' => 'required',

        ]);

        if ($request->hasFile('image')) {

            $imageName = $request->image->getClientOriginalName();

            $request->image->storeAs('public',$imageName);

            $fertilizer = new Fertilizer;

            $fertilizer->name = $request->name;
            $fertilizer->cost = $request->cost;
            $fertilizer->description = $request->description;
            $fertilizer->image = $imageName;

            $fertilizer->save();
        }

        return redirect(route('fertilizer.index'))->with('message','Fertilizer added successfully');
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
            'cost' => 'required',
            'description' => 'required',

        ]);

        $fertilizer = Fertilizer::find($id);

        $fertilizer->name = $request->name;
        $fertilizer->cost = $request->cost;
        $fertilizer->description = $request->description;

        $fertilizer->save();

        return redirect(route('fertilizer.index'))->with('message','Fertilizer updated successfully');
    }

    public function destroy($id)
    {
        Fertilizer::where('id',$id)->delete();

        return redirect()->back()->with('message','Fertilizer deleted successfully');
    }
}
