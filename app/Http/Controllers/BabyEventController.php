<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BabyEventController extends Controller
{
    public function index()
    {

        $babyEvents = [
            [
                'id' => 1,
                'baby_id' => 1,
                'type' => 'diaper',
                'date' => '2026-06-12',
                'time' => [
                    'start' => '07:15',
                    'end' => null,
                    'duration_minutes' => null,
                ],
                'notes' => 'Morning diaper change.',
                'metadata' => [
                    'diaper_type' => 'wet',
                    'amount' => 'normal',
                ],
            ],
            [
                'id' => 2,
                'baby_id' => 1,
                'type' => 'feed',
                'date' => '2026-01-05',
                'time' => [
                    'start' => '08:00',
                    'end' => '08:18',
                    'duration_minutes' => 18,
                ],
                'notes' => 'Finished most of the bottle.',
                'metadata' => [
                    'feed_type' => 'bottle',
                    'contents' => 'formula',
                    'amount_ml' => 120,
                ],
            ],
            [
                'id' => 3,
                'baby_id' => 1,
                'type' => 'sleep',
                'date' => '2026-06-12',
                'time' => [
                    'start' => '09:20',
                    'end' => '10:45',
                    'duration_minutes' => 85,
                ],
                'notes' => 'Fell asleep quickly after feeding.',
                'metadata' => [
                    'quality' => 'calm',
                ],
            ],
            [
                'id' => 4,
                'baby_id' => 1,
                'type' => 'diaper',
                'date' => '2026-06-12',
                'time' => [
                    'start' => '11:05',
                    'end' => null,
                    'duration_minutes' => null,
                ],
                'notes' => null,
                'metadata' => [
                    'diaper_type' => 'dirty',
                    'amount' => 'small',
                ],
            ],
            [
                'id' => 5,
                'baby_id' => 1,
                'type' => 'temperature',
                'date' => '2026-06-12',
                'time' => [
                    'start' => '11:30',
                    'end' => null,
                    'duration_minutes' => null,
                ],
                'notes' => 'Slightly warm, but still normal.',
                'metadata' => [
                    'value' => 37.4,
                    'unit' => 'celsius',
                    'method' => 'ear',
                ],
            ],
            [
                'id' => 6,
                'baby_id' => 1,
                'type' => 'feed',
                'date' => '2026-06-12',
                'time' => [
                    'start' => '12:10',
                    'end' => '12:32',
                    'duration_minutes' => 22,
                ],
                'notes' => 'Breastfeeding on both sides.',
                'metadata' => [
                    'feed_type' => 'breast',
                    'contents' => 'breast milk',
                    'amount_ml' => null,
                    'breast_side' => 'both',
                ],
            ],
            [
                'id' => 7,
                'baby_id' => 1,
                'type' => 'sleep',
                'date' => '2026-06-12',
                'time' => [
                    'start' => '13:15',
                    'end' => '13:55',
                    'duration_minutes' => 40,
                ],
                'notes' => 'Short nap in the stroller.',
                'metadata' => [
                    'quality' => 'restless',
                ],
            ],
            [
                'id' => 8,
                'baby_id' => 1,
                'type' => 'diaper',
                'date' => '2026-06-12',
                'time' => [
                    'start' => '14:20',
                    'end' => null,
                    'duration_minutes' => null,
                ],
                'notes' => 'Changed before going outside.',
                'metadata' => [
                    'diaper_type' => 'wet',
                    'amount' => 'heavy',
                ],
            ],
            [
                'id' => 9,
                'baby_id' => 1,
                'type' => 'feed',
                'date' => '2026-06-12',
                'time' => [
                    'start' => '15:00',
                    'end' => null,
                    'duration_minutes' => null,
                ],
                'notes' => null,
                'metadata' => [
                    'feed_type' => 'bottle',
                    'contents' => 'breast milk',
                    'amount_ml' => 90,
                ],
            ],
            [
                'id' => 10,
                'baby_id' => 1,
                'type' => 'temperature',
                'date' => '2026-06-12',
                'time' => [
                    'start' => '16:30',
                    'end' => null,
                    'duration_minutes' => null,
                ],
                'notes' => 'Temperature back to normal.',
                'metadata' => [
                    'value' => 36.9,
                    'unit' => 'celsius',
                    'method' => 'forehead',
                ],
            ],
            [
                'id' => 11,
                'baby_id' => 1,
                'type' => 'feed',
                'date' => '2026-06-12',
                'time' => [
                    'start' => '17:45',
                    'end' => '18:00',
                    'duration_minutes' => 15,
                ],
                'notes' => 'Drank de fles volledig leeg.',
                'metadata' => [
                    'feed_type' => 'bottle',
                    'contents' => 'formula',
                    'amount_ml' => 150,
                ],
            ],
            [
                'id' => 12,
                'baby_id' => 1,
                'type' => 'feed',
                'date' => '2026-06-12',
                'time' => [
                    'start' => '20:15',
                    'end' => '20:28',
                    'duration_minutes' => 13,
                ],
                'notes' => 'Avondfles voor het slapen.',
                'metadata' => [
                    'feed_type' => 'bottle',
                    'contents' => 'breast milk',
                    'amount_ml' => 120,
                ],
            ],
        ];

        return view('home', ['babyEvents' => $babyEvents]);
    }
}
