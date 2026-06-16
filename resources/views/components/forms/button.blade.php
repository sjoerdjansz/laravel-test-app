@props([
    'type' => 'button',
])

<button type="{{$type}}"
    {{$attributes->merge([
        'class' => 'cursor-pointer px-4 py-2 rounded-sm font-bold drop-shadow-sm'
    ])}}>
    {{$slot}}
</button>
