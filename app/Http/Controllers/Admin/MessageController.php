<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\Contact;

class MessageController extends Controller
{

    public function index()
    {
        $messages = Contact::latest()->paginate(10);

        return view('admin.contact.message',compact('messages'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $message = Contact::find($id);

        return view('admin.contact.message_details',compact('message'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        Contact::where('id',$id)->delete();

        return redirect()->back()->with('message','Message deleted successfully');
    }
}
