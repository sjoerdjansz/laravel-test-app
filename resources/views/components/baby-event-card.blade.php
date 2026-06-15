{{--Omdat dit een class based component is hoeven we niet expliciet de props te declareren--}}
@php

    $typeTitle = $getTypeTitle();
    $type = strtolower($typeTitle);
    $details = $details();

    $typeColor = match ($type) {
        'diaper' => 'bg-amber-300',
        'feed' => 'bg-green-300',
        'sleep' => 'bg-purple-300',
        'temperature' => 'bg-red-300',
        default => 'bg-neutral-300'
        };

        $images = [
            'Diaper' => 'images/diaper.svg' ,
            'Feed' => 'images/baby-bottle.svg',
            'Sleep' => 'images/zzz.svg',
            'Temperature' => 'images/temperature.svg',
        ];

        $image = $images[$typeTitle] ?? null;

@endphp


<article class="flex gap-4 items-start bg-gray-50 p-4 rounded-lg shadow-xs">

    <span class="inline-flex shrink-0 items-center justify-center {{$typeColor}} w-10 h-10 rounded-full">
        <img class="size-5"
             src="{{asset($image)}}"
             alt="{{$typeTitle}}">
    </span>

    <div class="ml-4 flex min-w-0 flex-1 flex-col items-start gap-1">
        <span class="{{$typeColor}} px-3 py-2 rounded-full ">{{$typeTitle}}</span>
        <p class="font-bold">{{$formatTime() ?? null}}</p>
        @if($details)
            <span class="text-sm text-gray-500">{{ucfirst($details)}}</span>
        @endif
    </div>

    <div class="ml-auto flex shrink-0 flex-col items-end gap-3">
        <span class="text-sm text-gray-500">{{$formatDate() ?? null}}</span>
        <span class="text-sm text-gray-500">View notes</span>
        <span class="inline-flex shrink-0 items-center justify-center bg-gray-200 w-8 h-8 rounded-full">
        <img class="size-5"
             src="{{ asset('images/trash.svg') }}"
             alt="delete-event">
    </span>
    </div>

</article>
