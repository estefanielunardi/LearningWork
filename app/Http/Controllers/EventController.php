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
        return view('events.edit',compact('event'));
    }

   
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'time' => 'required',
            'limit' => 'required',
            'description' => 'required',
            'requirements' => 'required', 
            'category' => 'required', 
        ]);
  
        $event->update($request->all());
  
        return redirect()->route('events.index')
                        ->with('success','Event updated successfully');
    }


    public function destroy($id)
    {
        Event::destroy($id);
        
        return redirect('home');   
    }

    public function highlight()
    {  
        $events= Event::whereIn('category', ['highlight', 'both'])->get();
        return view('welcome', compact('events'));

    }
}

