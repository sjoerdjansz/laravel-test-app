<div class="flex flex-col gap-4">
    <div class="flex gap-4 flex-col px-2">
        <h2 class="text-pink-500 font-bold text-2xl">Add new event</h2>
        <p>Log diapers, feeding moments, sleep and temperature.</p>
        <hr class="text-gray-300">
    </div>

    <div class="w-full">
        <form method="POST" action="{{route('events.store') }}" class="flex flex-wrap gap-2 w-full">
            @csrf

            <ul class="flex flex-row gap-2 flex-wrap">
                <li>
                    <x-events.type-radio color="bg-amber-300" type="diaper" label="Diaper"/>
                </li>
                <li>
                    <x-events.type-radio color="bg-green-300" type="feed" label="Feed"/>
                </li>
                <li>
                    <x-events.type-radio color="bg-purple-300" type="sleep" label="Sleep" />

                </li>
                <li>
                    <x-events.type-radio color="bg-red-300" type="temperature" label="Temperature"/>
                </li>
            </ul>
            <x-forms.field label="Date" for="date" class="basis-full min-w-0 w-full">
                <x-forms.input
                    type="date"
                    name="date"
                    id="date"
                    value="{{ old('date', now()->format('Y-m-d')) }}"
                />

            </x-forms.field>
            @error('date')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <x-forms.field label="Time" for="start_time" class="basis-full min-w-0 w-full">
                <x-forms.input
                    type="time"
                    name="start_time"
                    id="start_time"
                    value="{{ old('start_time', now()->format('H:i')) }}"
                />
            </x-forms.field>
            @error('start_time')
            <p class="text-red-500">{{ $message }}</p>
            @enderror

            <x-forms.field label="Notes" for="notes" class="basis-full min-w-0 w-full">
                <x-forms.textarea
                    placeholder="Add a note"
                    name="notes"
                    id="notes"
                    value="{{old('notes')}}"
                />
            </x-forms.field>
            @error('notes')
            <div class="error">{{ $message }}</div>
            @enderror
            <x-forms.field class="basis-full" label='' for=''>
                <x-forms.button
                    type="submit"
                    class="w-full min-w-auto bg-green-300 text-white"
                >Add a note
                </x-forms.button>
            </x-forms.field>
        </form>
    </div>
</div>
