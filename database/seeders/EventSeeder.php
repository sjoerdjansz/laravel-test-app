<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first();

        $events = [
            [
                'type' => 'diaper',
                'date' => '2026-06-09',
                'start_time' => '07:15',
                'end_time' => null,
                'duration_minutes' => null,
                'notes' => 'Morning diaper change.',
                'metadata' => [
                    'diaper_type' => 'wet',
                    'amount' => 'normal',
                ],
            ],
            [
                'type' => 'feed',
                'date' => '2026-06-10',
                'start_time' => '08:00',
                'end_time' => '08:18',
                'duration_minutes' => 18,
                'notes' => 'Finished most of the bottle.',
                'metadata' => [
                    'feed_type' => 'bottle',
                    'contents' => 'formula',
                    'amount_ml' => 120,
                ],
            ],
            [
                'type' => 'sleep',
                'date' => '2026-06-11',
                'start_time' => '09:20',
                'end_time' => '10:45',
                'duration_minutes' => 85,
                'notes' => 'Fell asleep quickly after feeding.',
                'metadata' => [
                    'quality' => 'calm',
                ],
            ],
            [
                'type' => 'diaper',
                'date' => '2026-06-12',
                'start_time' => '11:05',
                'end_time' => null,
                'duration_minutes' => null,
                'notes' => null,
                'metadata' => [
                    'diaper_type' => 'dirty',
                    'amount' => 'small',
                ],
            ],
            [
                'type' => 'temperature',
                'date' => '2026-06-11',
                'start_time' => '11:30',
                'end_time' => null,
                'duration_minutes' => null,
                'notes' => 'Slightly warm, but still normal.',
                'metadata' => [
                    'value' => 37.4,
                    'unit' => 'celsius',
                    'method' => 'ear',
                ],
            ],
            [
                'type' => 'feed',
                'date' => '2026-06-13',
                'start_time' => '12:10',
                'end_time' => '12:32',
                'duration_minutes' => 22,
                'notes' => 'Breastfeeding on both sides.',
                'metadata' => [
                    'feed_type' => 'breast',
                    'contents' => 'breast milk',
                    'amount_ml' => null,
                    'breast_side' => 'both',
                ],
            ],
            [
                'type' => 'sleep',
                'date' => '2026-06-14',
                'start_time' => '13:15',
                'end_time' => '13:55',
                'duration_minutes' => 40,
                'notes' => 'Short nap in the stroller.',
                'metadata' => [
                    'quality' => 'restless',
                ],
            ],
            [
                'type' => 'diaper',
                'date' => '2026-06-08',
                'start_time' => '14:20',
                'end_time' => null,
                'duration_minutes' => null,
                'notes' => 'Changed before going outside.',
                'metadata' => [
                    'diaper_type' => 'wet',
                    'amount' => 'heavy',
                ],
            ],
            [
                'type' => 'feed',
                'date' => '2026-06-08',
                'start_time' => '15:00',
                'end_time' => null,
                'duration_minutes' => null,
                'notes' => null,
                'metadata' => [
                    'feed_type' => 'bottle',
                    'contents' => 'breast milk',
                    'amount_ml' => 90,
                ],
            ],
            [
                'type' => 'temperature',
                'date' => '2026-06-12',
                'start_time' => '16:30',
                'end_time' => null,
                'duration_minutes' => null,
                'notes' => 'Temperature back to normal.',
                'metadata' => [
                    'value' => 36.9,
                    'unit' => 'celsius',
                    'method' => 'forehead',
                ],
            ],
            [
                'type' => 'feed',
                'date' => '2026-06-09',
                'start_time' => '17:45',
                'end_time' => '18:00',
                'duration_minutes' => 15,
                'notes' => 'Drank de fles volledig leeg.',
                'metadata' => [
                    'feed_type' => 'bottle',
                    'contents' => 'formula',
                    'amount_ml' => 150,
                ],
            ],
            [
                'type' => 'feed',
                'date' => '2026-06-09',
                'start_time' => '20:15',
                'end_time' => '20:28',
                'duration_minutes' => 13,
                'notes' => 'Avondfles voor het slapen.',
                'metadata' => [
                    'feed_type' => 'bottle',
                    'contents' => 'breast milk',
                    'amount_ml' => 120,
                ],
            ],
        ];

        foreach ($events as $event) {
            Event::create([
                ...$event,
                'user_id' => $user?->id,
            ]);
        }
    }
}
