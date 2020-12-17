<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    // public function index(Request $request)
    // {
    //     $request->user()->authorizeRoles('admin');
    //     return view('AdminHome');
    // }

    public function index()
    {
        
        $events = Event::orderBy('event_date', 'ASC')->get();

        return view('AdminHome', ['events' => $events]);
    }
    
}

