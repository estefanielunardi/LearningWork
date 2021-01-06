<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    
    public function index()
    {
        $actualDate = date('Y-m-d', time());
        $events= Event::whereIn('category', ['standard', 'both'])
                ->whereDate('date' , '>' , $actualDate)
                ->orderBy('date', 'asc')
                ->get();
        
        return view('comingEvents', compact('events'));
    }

    public function pastEvents()
    {
        $actualDate = date('Y-m-d', time());
        $events = Event::whereDate('date', '<' , $actualDate)
                ->orderBy('date', 'asc')
                ->get();

        return view('pastEvents', compact('events'));
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
        
    }

   
    public function edit($id)
    {
        $event = Event::find($id);
        
        return view('EventEdit',compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        $event->update($request->all());
        
        return redirect()->route('home');
  
    }

    public function destroy($id)
    {
        Event::destroy($id);
        
        return redirect('home');   
    }

    public function highlight()
    {  
        $events= Event::whereIn('category', ['highlight', 'both'])
                ->orderBy('date', 'asc')
                ->get();
        return view('welcome', compact('events'));

    }

}

