<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function index()
    {
        $events= Event::all(); 

        return view('AdminHome', compact('events'));
    }
}
