<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;



class UserController extends Controller
{
    public function subscribe($id)
    {
        $userId=auth()->id();   
        $user=User::find($userId);
        $userEvents=$user->events()->find($id);

        if($userEvents==null){
            $user->events()->attach($id);
            $events=$user->events()->get();

            return view('home', compact('events'));
        }

        return view('home', ['message'=>'ya estás inscrito']);
    }

    public function unsubscribe($id)
    {

        $userId=auth()->id();   
        $user=User::find($userId);
        $user->events()->detach($id);

        $events=$user->events()->get();

        return view('home', compact('events')); 

    }
}
