<x-layouts.app title="Babybit">
    <x-navbar title="Babybit"/>

    <main class="grid flex-1 min-h-0 grid-cols-12 grid-rows-4 gap-8 p-8 overflow-hidden">
        <x-panel class="col-span-4 row-span-4 min-h-0">
            <x-events.create-form/>
        </x-panel>

        <x-panel class="col-span-8 min-h-0 row-span-1">
            <h1>Section two</h1>
        </x-panel>

        <x-panel class="col-span-8 row-span-3 min-h-0 overflow-y-auto">
            <ul class="flex flex-col gap-2">
                @foreach($babyEvents as $event)
                    <li>
                        <x-baby-event-card :event="$event"/>
                    </li>
                @endforeach
            </ul>

        </x-panel>

    </main>

</x-layouts.app>
