<div class="flex flex-col gap-4">
    <div class="flex gap-4 flex-col px-2">
        <h2 class="text-pink-500 font-bold text-2xl">Add new event</h2>
        <p>Log diapers, feeding moments, sleep and temperature.</p>
        <hr class="text-gray-300">
    </div>
    <ul class="flex flex-row gap-2 flex-wrap">
        <li>
            <x-events.type-button color="bg-amber-300">
                Diaper
            </x-events.type-button>
        </li>
        <li>
            <x-events.type-button color="bg-green-300">
                Feed
            </x-events.type-button>
        </li>
        <li>
            <x-events.type-button color="bg-purple-300">
                Sleep
            </x-events.type-button>
        </li>
        <li>
            <x-events.type-button color="bg-red-300">
                Temp
            </x-events.type-button>
        </li>
    </ul>
    <div class="w-full">
        <form action="POST" class="flex flex-wrap gap-2 w-full">
            @csrf

            <x-forms.field label="Date" for="date" class="flex-1 basis-[calc(50%-0.25rem)]">
                <x-forms.input
                    type="date"
                    name="date"
                    id="date"
                />

            </x-forms.field>

            <x-forms.field label="Time" for="time" class="flex-1 basis-[calc(50%-0.25rem)]">
                <x-forms.input
                    type="time"
                    name="time"
                    id="time"
                />
            </x-forms.field>

            <x-forms.field label="Notes" for="notes" class="basis-full">
                <x-forms.textarea
                    placeholder="Add a note"
                    name="notes"
                    id="notes"
                />
            </x-forms.field>

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
