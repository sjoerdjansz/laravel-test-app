<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class BabyEventController extends Controller
{
//    Alle listings van de resource weergeven
    public function index()
    {

        // haal de events uit de model/database
        $babyEvents = Event::with('user')
            ->get();

        return view('home', ['babyEvents' => $babyEvents]);
    }


}
