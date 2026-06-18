<x-layouts.app>
    <div class="min-h-[calc(100vh-4rem)] flex flex-row justify-center items-center">
        <div class="flex flex-col p-4 border rounded-md bg-white border-neutral-200 shadow-md">
            <h1 class="py-6 text-4xl text-pink-500 font-bold">Login</h1>

            <form action="{{route('login')}}" method="POST" class="flex flex-col gap-4">

                @csrf
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
                <div class="form-control mt-4">
                    <label class="label cursor-pointer flex items-center">
                        <input type="checkbox"
                               name="remember"
                               class="checkbox">
                        <span class="label-text ml-2">Remember me</span>
                    </label>
                </div>
                <x-forms.field for="" label="">
                    <x-forms.button class="text-green-900" type="submit">Login</x-forms.button>
                </x-forms.field>
                <p class="text-center my-4 text-sm">Don't have an account yet? <a class="text-blue-500 underline"
                                                                                href="/register">Register here</a></p>
            </form>
        </div>
    </div>
</x-layouts.app>
