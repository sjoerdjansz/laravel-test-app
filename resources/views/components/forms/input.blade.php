@props([
    'type' => 'text',
])

<input
    type="{{$type}}"
    {{$attributes->merge([
    'class' => 'border-2 border-neutral-200 rounded-sm px-2 py-1 text-neutral-600'
])}}
>
