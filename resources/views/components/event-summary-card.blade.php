@props([
    'type',
    'events'
])

@php

    $filteredType = array_filter($events , fn($el) => $el['type'] == $type);

    $mostRecentEvent = collect($filteredType)->sortByDesc(fn ($event) => $event['date'] . ' ' . ($event['time']['start'] ?? '00:00'))->first();

    $displayDateTime = function(?array $event): string {

        if(!$event) {
            return 'No events yet';
        }

        $date = $event['date'] ?? null;
        $time = $event['time']['start'] ?? null;

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
