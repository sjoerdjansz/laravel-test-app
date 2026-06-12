<textarea
    {{$attributes->merge([
    'class' => 'min-h-32 border-2 border-neutral-200 rounded-sm px-2 py-1 text-neutral-600'
])}}
>{{$slot}}</textarea>
