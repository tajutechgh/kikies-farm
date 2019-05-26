<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\Crop;
use App\Model\admin\Category;

class CropController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $s = $request->input('s');

        $crops = Crop::latest()->search($s)->paginate(10);

        $categories = Category::all();
        
        return view('admin.crop.index',compact('crops','categories','s'));
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
            'planting_date' => 'required',
            'harvesting_date' => 'required',
            'quantity' => 'required',
            'category_id' => 'required',
            'image' => 'required',

        ]);

        if ($request->hasFile('image')) {

            $imageName = $request->image->getClientOriginalName();

            $request->image->storeAs('public',$imageName);

            $crop = new Crop;

            $crop->name = $request->name;
            $crop->cost = $request->cost;
            $crop->description = $request->description;
            $crop->planting_date = $request->planting_date;
            $crop->harvesting_date = $request->harvesting_date;
            $crop->quantity = $request->quantity;
            $crop->category_id = $request->category_id;
            $crop->image = $imageName;

            $crop->save();
        }

        return redirect(route('crop.index'))->with('message','Crop added successfully');
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
            'planting_date' => 'required',
            'harvesting_date' => 'required',
            'quantity' => 'required',
            'category_id' => 'required',

        ]);

        $crop = Crop::find($id);

        $crop->name = $request->name;
        $crop->cost = $request->cost;
        $crop->description = $request->description;
        $crop->planting_date = $request->planting_date;
        $crop->harvesting_date = $request->harvesting_date;
        $crop->quantity = $request->quantity;
        $crop->category_id = $request->category_id;

        $crop->save();

        return redirect(route('crop.index'))->with('message','Crop updated successfully');
    }

    public function destroy($id)
    {
        Crop::where('id',$id)->delete();

        return redirect()->back()->with('message','Crop deleted successfully');
    }
}
