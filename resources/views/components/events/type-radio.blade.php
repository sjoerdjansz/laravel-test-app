@props([
    'color',
    'type',
    'label' => null
])

@php

    $images = [
    'diaper' => 'images/diaper.svg' ,
    'feed' => 'images/baby-bottle.svg',
    'sleep' => 'images/zzz.svg',
    'temperature' => 'images/temperature.svg',
    ];

    // zonder casting een bijzondere error op line 19 in de imagepath
    $type = (string) $type;
    $imagePath = $images[$type] ?? null;


@endphp

<label
    for="{{ $type }}"
    {{ $attributes->merge([
        'class' => "$color inline-flex items-center gap-2 py-2 px-4 rounded-full cursor-pointer drop-shadow-sm"
    ]) }}
>
    <input
        id="{{ $type }}"
        name="type"
        value="{{ $type }}"
        type="radio"
        class="size-4 cursor-pointer"
        {{ old('type', 'diaper') === $type ? 'checked' : '' }}
    >

    <img
        src="{{ asset($imagePath) }}"
        alt="{{ $label }}"
        class="size-6"
    >
</label>
