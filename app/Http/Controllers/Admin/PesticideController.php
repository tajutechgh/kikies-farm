<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\Pesticide;

class PesticideController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $s = $request->input('s');

        $pesticides = Pesticide::latest()->search($s)->paginate(10);
        
        return view('admin.pesticide.index',compact('pesticides','s'));
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

            $pesticide = new Pesticide;

            $pesticide->name = $request->name;
            $pesticide->cost = $request->cost;
            $pesticide->description = $request->description;
            $pesticide->image = $imageName;

            $pesticide->save();
        }

        return redirect(route('pesticide.index'))->with('message','Pesticide added successfully');
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

        $pesticide = Pesticide::find($id);

        $pesticide->name = $request->name;
        $pesticide->cost = $request->cost;
        $pesticide->description = $request->description;

        $pesticide->save();

        return redirect(route('pesticide.index'))->with('message','Pesticide updated successfully');
    }

    public function destroy($id)
    {
        Pesticide::where('id',$id)->delete();

        return redirect()->back()->with('message','Pesticide deleted successfully');
    }
}
