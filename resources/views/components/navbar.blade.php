<nav class="bg-white border-b-8 border-pink-200 flex justify-between items-center px-4 py-2">
    <div class="flex justify-between items-center">
        <img src="{{asset('images/baby_logo.png')}}" alt="baby logo" class="size-20">
        <p class="font-bold text-pink-500 ">{{isset($title) ? $title : 'Test'}}</p>
    </div>
    <ul class="flex justify-between items-center gap-8">
        <li><a href="">Signup</a></li>
        <li><a href="">Login</a></li>
    </ul>
</nav>
