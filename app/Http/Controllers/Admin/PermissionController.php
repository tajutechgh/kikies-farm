<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\Permission;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $s = $request->input('s');

        $permissions = Permission::latest()->search($s)->paginate(10);
        
        return view('admin.permission.index',compact('permissions','s'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request,[

            'name' => 'required',
            'for' => 'required',

        ]);

        $permission = new Permission;

        $permission->name = $request->name;
        $permission->for = $request->for;

        $permission->save();
        
        return redirect(route('permission.index'))->with('message','Permission added successfully');
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
            'for' => 'required',

        ]);

        $permission = Permission::find($id);

        $permission->name = $request->name;
        $permission->for = $request->for;

        $permission->save();
        
        return redirect(route('permission.index'))->with('message','Permission updated successfully');
    }

    public function destroy($id)
    {
        Permission::where('id',$id)->delete();

        return redirect()->back()->with('message','Permission deleted successfully');
    }
}
