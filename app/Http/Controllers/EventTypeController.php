<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Input;
use App\Event_type;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class EventTypeController extends Controller
{
    //
    public function show(){
    	$eventType = DB::table('event_type')->get();
    	 return view('Event_type.type_create')
                ->with('eventTypes',$eventType);
    }

    public function store(){
    	$eventType = new Event_Type();
        $eventType->event_type =  Input::get('event_type');
        $eventType->save();
        return redirect()->route('event/type');
    }
}
