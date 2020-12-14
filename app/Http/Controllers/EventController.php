<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    
    public function index()
    {
        $events= Event::whereIn('category', ['standard', 'both'])->get();
        
        return view('comingEvents', compact('events'));
    }

    public function create()
    {
        return view('createEvents');
    }

    
    public function store(Request $request)
    {
        Event::create([
            'name' => $request->name, 
            'date' => $request->date, 
            'time' => $request->time, 
            'limit' => $request->limit, 
            'description' => $request->description, 
            'requirements' => $request->requirements, 
            'category' => $request->category, 
        ]);
        return redirect(route('comingEvents')); 
    }

   
    public function show(Event $event)
    {
        //
    }

   
    public function edit(Event $event)
    {
        //
    }

   
    public function update(Request $request, Event $event)
    {
        //
    }


    public function destroy(Event $event)
    {
        
    }

    public function highlight()
    {  
         $events= Event::whereIn('category', ['highlight', 'both'])->get();
        return view('welcome', compact('events'));
    }
}

