<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\Event;
use Calendar;
use App\Model\admin\Employee;
use App\Model\admin\Equipment;
use App\Model\admin\Crop;
use Carbon\Carbon;
use App\Model\user\Contact;

class HomeController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
	}
	
    public function index()
    {
        $events = Event::get();

    	$event_list = [];

    	foreach ($events as $key => $event) {
    	    $event_list[] = Calendar::event(
    	        $event->name,
    	        true,
    	        new \DateTime($event->start_date),
    	        new \DateTime($event->end_date.' +1 day')
    	    );
    	}

		$calendar_details = Calendar::addEvents($event_list);
		
		$countEmployees = Employee::count();

		$countEquipments = Equipment::count();

		$countCrops = Crop::count();

		$todayMessages = Contact::whereDate('created_at', Carbon::today())->count();
        
        return view('admin.home',compact('calendar_details','countEmployees','countEquipments','countCrops','todayMessages'));
    }
}
