<x-layouts.app title="Babybit">
    <x-navbar title="Babybit"/>

    <main class="grid flex-1 grid-cols-1 gap-6 p-4 overflow-y-auto lg:min-h-0 lg:grid-cols-12 lg:grid-rows-4 lg:gap-8 lg:p-8 lg:overflow-hidden">

        <x-panel class="lg:col-span-4 lg:row-span-4 lg:min-h-0">
            <x-events.create-form/>
        </x-panel>

        <x-panel class="lg:col-span-8 lg:row-span-1 lg:min-h-0 lg:overflow-hidden">
            <div class="grid grid-cols-2 gap-4 md:grid-cols-2 lg:grid-cols-4">
                <x-event-summary-card type="diaper" :events="$babyEvents"/>
                <x-event-summary-card type="feed" :events="$babyEvents"/>
                <x-event-summary-card type="sleep" :events="$babyEvents"/>
                <x-event-summary-card type="°C" :events="$babyEvents"/>
            </div>
        </x-panel>

        <x-panel class="lg:col-span-8 lg:row-span-3 lg:min-h-0 lg:overflow-y-auto">
            <ul class="flex flex-col gap-2">
                @forelse($babyEvents as $event)
                    <li>
                        <x-baby-event-card :event="$event">

                        </x-baby-event-card>
                    </li>
                @empty
                    <p class="text-gray-500">No events logged yet.</p>
                @endforelse
            </ul>
        </x-panel>

    </main>
</x-layouts.app>
