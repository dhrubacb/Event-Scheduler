<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class HomeController extends Controller
{
    // 
     public function show()
     {
     	$top_event = DB::table('event')
     			        ->where('priority','1')
     			        ->get();
     	return view('Event.index')
     			->with('top_events', $top_event);
     }
}
