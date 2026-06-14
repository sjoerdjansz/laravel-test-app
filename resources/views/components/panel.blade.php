{{--Met attributes->merge geef je default classes aan je component maar kan je nog steeds extra classes toevoegen bij gebruik in de x-panel--}}

<section {{$attributes->merge([
    'class' => 'bg-white border-8 border-pink-200 rounded-md p-4 shadow-sm'
])}} >
    {{ $slot }}
</section>
