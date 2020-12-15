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
            $event=$user->events()->find($id);

            return view('home');
        }

        return view('home', ['message'=>'ya estás inscrito']);
    }

    public function unsubscribe($id)
    {

        $userId=auth()->id();   
        $user=User::find($userId);
        $userEvents=$user->events()->find($id);

        $user->events()->dettach($id);

        return view('home', ['message'=>'ya has anulado tu subscripción ', 
        'title' => $userEvents->title]); 

    }
}
