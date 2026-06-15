{{--Anonymous component dus wel expliciet props declareren --}}
@props([
    'type',
    'events'
])

@php

    $filteredType = $events->where('type', $type);

    $mostRecentEvent = $filteredType->sortByDesc(fn ($event) => $event->date . ' ' . ($event->start_time ?? '00:00'))->first();

    $displayDateTime = function($event): string {

        if(!$event) {
            return 'No events yet';
        }

        $date = $event->date ?? null;
        $time = $event->start_time ?? null;

        if (!$date) {
            return 'No date';
        }

        return date('F jS', strtotime($date)) . ($time ? ' at ' . $time : '');
    }

@endphp

<div class="rounded-md p-4 bg-neutral-50 shadow-xs flex flex-col gap-2">
    <p class="font-bold text-pink-500">Last {{$type}}</p>
    <hr class="text-gray-300">
    <p class="text-gray-500 text-xs">{{$displayDateTime($mostRecentEvent)}}</p>
</div>
