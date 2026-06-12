<x-layouts.app title="Babybit">
    <x-navbar title="Babybit"/>

    <main class="grid grid-cols-12 grid-rows-4 gap-8 p-8">
        <x-panel class="col-span-4 row-span-4">
            <x-events.create-form/>
        </x-panel>

        <x-panel class="col-span-8 row-span-1" >
            <h1>Section two</h1>
        </x-panel>

        <x-panel class="col-span-8 row-span-3" >
            Section three
        </x-panel>

    </main>

</x-layouts.app>
