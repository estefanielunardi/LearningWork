<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function home()
    {
        
        if(Auth::user()->isAdmin)
    
        return redirect(route('admin'));


        $userId=auth()->id();   
        $user=User::find($userId);
        $events=$user->events()->get();

        return view('home', compact('events'));
    }

    
}
