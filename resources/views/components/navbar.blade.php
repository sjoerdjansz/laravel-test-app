@auth
    <nav class="bg-white border-b-8 border-pink-200 flex justify-between items-center px-4
py-2 shadow-sm">
        <div class="flex justify-between items-center">
            <img src="{{asset('images/baby_logo.png')}}" alt="baby logo" class="size-20">
            <p class="font-bold text-pink-500 ">{{isset($title) ? $title : 'Test'}}</p>
        </div>
        <div class="flex gap-6">
            <span>Welcome {{auth()->user()->name}} and {{auth()->user()->baby_name}}</span>
            <form action="/logout" method="POST" class="inline">
                @csrf
                <button type="submit" class="text-blue-500">Logout</button>
            </form>
        </div>
    </nav>

@else
    <nav class="bg-white border-b-8 border-pink-200 flex justify-between items-center px-4
py-2 shadow-sm">
        <div class="flex justify-between items-center">
            <img src="{{asset('images/baby_logo.png')}}" alt="baby logo" class="size-20">
            <p class="font-bold text-pink-500 ">{{isset($title) ? $title : 'Test'}}</p>
        </div>
        <ul class="flex justify-between items-center gap-8">
            {{--    deze maakt gebruik van de named (register) routes--}}
            <li><a href="{{route('register')}}">Signup</a></li>
            <li><a href="{{route('login')}}">Login</a></li>
        </ul>
    </nav>

@endauth
