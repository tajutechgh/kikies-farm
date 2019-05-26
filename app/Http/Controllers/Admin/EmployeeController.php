<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Model\admin\Employee;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $s = $request->input('s');

        $employees = Employee::latest()->search($s)->paginate(10);
        
        return view('admin.employee.index',compact('employees','s'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request,[

            'name'=>'required',
            'phone'=>'required',
            'dob'=>'required',
            'role'=>'required',
            'gender'=>'required',
            'address'=>'required',

        ]);

        $employee = new Employee;

        $employee->name=$request->name;
        $employee->phone=$request->phone;
        $employee->dob=$request->dob;
        $employee->role=$request->role;
        $employee->gender=$request->gender;
        $employee->address=$request->address;

        $employee->save();

        return redirect(route('employee.index'))->with('message','Employee added successfully');
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

            'name'=>'required',
            'phone'=>'required',
            'dob'=>'required',
            'role'=>'required',
            'gender'=>'required',
            'address'=>'required',

        ]);

        $employee = Employee::find($id);

        $employee->name=$request->name;
        $employee->phone=$request->phone;
        $employee->dob=$request->dob;
        $employee->role=$request->role;
        $employee->gender=$request->gender;
        $employee->address=$request->address;

        $employee->save();

        return redirect(route('employee.index'))->with('message','Employee updated successfully');
    }

    public function destroy($id)
    {
        Employee::where('id',$id)->delete();

        return redirect()->back()->with('message','Employee deleted successfully');
    }
}
