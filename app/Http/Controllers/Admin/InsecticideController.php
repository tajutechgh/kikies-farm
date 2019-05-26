<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\Insecticide;

class InsecticideController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $s = $request->input('s');

        $insecticides = Insecticide::latest()->search($s)->paginate(10);
        
        return view('admin.insecticide.index',compact('insecticides','s'));
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

            $insecticide = new Insecticide;

            $insecticide->name = $request->name;
            $insecticide->cost = $request->cost;
            $insecticide->description = $request->description;
            $insecticide->image = $imageName;

            $insecticide->save();
        }

        return redirect(route('insecticide.index'))->with('message','Insecticide added successfully');
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

        $insecticide = Insecticide::find($id);

        $insecticide->name = $request->name;
        $insecticide->cost = $request->cost;
        $insecticide->description = $request->description;

        $insecticide->save();

        return redirect(route('insecticide.index'))->with('message','Insecticide updated successfully');
    }

    public function destroy($id)
    {
        Insecticide::where('id',$id)->delete();

        return redirect()->back()->with('message','Insecticide deleted successfully');
    }
}
