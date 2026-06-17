@props([
    'type' => 'button',
])

<button type="{{$type}}"
    {{$attributes->merge([
        'class' => 'cursor-pointer px-4 py-2 rounded-sm font-bold drop-shadow-sm "w-full min-w-auto bg-green-300 text-white"'
    ])}}>
    {{$slot}}
</button>
