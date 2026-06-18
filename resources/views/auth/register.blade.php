<x-layouts.app>
    <div class="min-h-[calc(100vh-4rem)] flex flex-row justify-center items-center">
        <div class="flex flex-col p-4 border rounded-md bg-white border-neutral-200 shadow-md">
            <h1 class="py-6 text-4xl text-pink-500 font-bold">Register</h1>

            <form action="{{route('register.store')}}" method="POST" class="flex flex-col gap-4">

                @if ($errors->any())
                    <div class="mb-4 rounded-md bg-red-100 p-4 text-red-700">
                        <ul class="list-disc pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @csrf
                <x-forms.field label="Username" for="name" class="basis-full min-w-100 w-full">
                    <x-forms.input
                        type="text"
                        name="name"
                        id="name"
                        value="{{old('name')}}"
                    />
                </x-forms.field>
                <x-forms.field label="Email" for="email" class="basis-full min-w-100 w-full">
                    <x-forms.input
                        type="email"
                        name="email"
                        id="email"
                        value="{{old('email')}}"
                    />
                </x-forms.field>
                <x-forms.field label="Password" for="password" class="basis-full min-w-100 w-full">
                    <x-forms.input
                        type="password"
                        name="password"
                        id="password"
                        value="{{old('password')}}"
                    />
                </x-forms.field>

                <p class="text-pink-500">Baby Details</p>
                <x-forms.field label="Baby Name" for="baby_name" class="basis-full min-w-100 w-full">
                    <x-forms.input
                        type="text"
                        name="baby_name"
                        id="baby_name"
                        value="{{old('baby_name')}}"
                    />
                </x-forms.field>

                <x-forms.field label="Date of Birth" for="birthday" class="basis-full min-w-100 w-full">
                    <x-forms.input
                        type="date"
                        name="birthday"
                        id="birthday"
                        value="{{old('birthday')}}"
                    />
                </x-forms.field>

                <x-forms.field for="" label="">
                    <x-forms.button class="text-green-900" type="submit">Register</x-forms.button>
                </x-forms.field>
                <p class="text-center my-4 text-sm">Already have an account? <a class="text-blue-500 underline"
                                                                                href="/login">Sign in</a></p>
            </form>
        </div>
    </div>
</x-layouts.app>
