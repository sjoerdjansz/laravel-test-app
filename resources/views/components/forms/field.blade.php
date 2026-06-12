@props([
    'label',
    'for'
])

<div {{$attributes->merge([
    'class' => 'flex flex-col gap-1'
])}}>

    <label for="{{$for}}" class="text-xs text-gray-500">
        {{$label}}
    </label>

    {{$slot}}
</div>

{{--flex-1 basis-[calc(50%-0.25rem)] voor de date en time in de xpanel--}}
