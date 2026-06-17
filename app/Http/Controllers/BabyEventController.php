<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Models\Event;

class BabyEventController extends Controller
{
//    Alle listings van de resource weergeven
    public function index()
    {
        // haal de events uit de model/database
        $babyEvents = Event::with('user')
            ->get()->sortByDesc(function ($event) {
                return $event->date;
            });

        return view('home', ['babyEvents' => $babyEvents]);
    }

    public function store(StoreEventRequest $request) {
        Event::create($request->validated());
        return redirect()->route('index')->with('success', 'Event created!');
    }

    public function destroy(Event $event) {

        $event->delete();

        return redirect()->route('index')->with('deleted', 'Event deleted!');
    }

}
