<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $s = $request->input('s');

        $categories = Category::latest()->search($s)->paginate(10);
        
        return view('admin.category.index',compact('categories','s'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request,[

            'name' => 'required',

        ]);

        $category = new Category;

        $category->name = $request->name;

        $category->save();
        
        return redirect(route('category.index'))->with('message','Category added successfully');
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

        ]);

        $category = Category::find($id);

        $category->name = $request->name;

        $category->save();
        
        return redirect(route('category.index'))->with('message','Category updated successfully');
    }

    public function destroy($id)
    {
        Category::where('id',$id)->delete();

        return redirect()->back()->with('message','Category deleted successfully');
    }
}
