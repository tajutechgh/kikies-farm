<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\Equipment;

class EquipmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $s = $request->input('s');

        $equipments = Equipment::latest()->search($s)->paginate(10);
        
        return view('admin.equipment.index',compact('equipments','s'));
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

            $equipment = new Equipment;

            $equipment->name = $request->name;
            $equipment->cost = $request->cost;
            $equipment->description = $request->description;
            $equipment->image = $imageName;

            $equipment->save();
        }

        return redirect(route('equipment.index'))->with('message','Equipment added successfully');
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

        $equipment = Equipment::find($id);

        $equipment->name = $request->name;
        $equipment->cost = $request->cost;
        $equipment->description = $request->description;

        $equipment->save();

        return redirect(route('equipment.index'))->with('message','Equipment updated successfully');
    }

    public function destroy($id)
    {
        Equipment::where('id',$id)->delete();

        return redirect()->back()->with('message','Equipment deleted successfully');
    }
}
