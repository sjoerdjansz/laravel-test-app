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

        $events = auth()->user()
            ->events()
            ->orderByDesc('date')->orderByDesc('start_time')
            ->get();

        // oud
//        $babyEvents = Event::with('user')
//            ->get()->sortByDesc(function ($event) {
//                return $event->date;
//            });

        return view('home', ['babyEvents' => $events]);
    }

    public function store(StoreEventRequest $request)
    {
        $request->user()->events()->create($request->validated());
        return redirect()->route('index')->with('success', 'Event created!');
    }

    public function destroy(Event $event)
    {

        if ($event->user_id !== auth()->id()) {
            abort(403);
        }

        $event->delete();

        return redirect()->route('index')->with('deleted', 'Event deleted!');
    }

}
