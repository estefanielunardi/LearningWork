<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function home()
    {
        $userId=auth()->id();   
        $user=User::find($userId);
        $events=$user->events()->get();

        return view('home', compact('events'));
    }

    
}
