@props([
   'color',
    ])

<button {{$attributes->merge([
    'type' => 'button',
    'class' => "cursor-pointer {$color} px-3 py-1 rounded-2xl"
])}}>
    {{$slot}}
</button>
