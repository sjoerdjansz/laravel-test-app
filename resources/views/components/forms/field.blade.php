@props([
    'label',
    'for'
])

<div {{$attributes->merge([
    'class' => 'flex flex-col gap-1'
])}}>

    <label for="{{$for}}" class="text-xs text-gray-500 flex justify-between">
        {{$label}}
        @error($for)
            <span class="label-text-alt text-error text-red-500">{{ $message }}</span>
        @enderror
    </label>

    {{$slot}}
</div>
