@props([
    'title',
    'pageTitle'
    ])

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{isset($title) ? $title : 'Test'}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-baby-pattern font-sans antialiased h-screen overflow-hidden lg:h-screen lg:overflow-hidden">
@if (session('success'))
    <div id="success-toast" class="bg-green-100 text-green-800 p-3 rounded z-50 fixed top-6 left-1/2 -translate-x-1/2">
        {{ session('success') }}
    </div>

    <script>
        setTimeout(() => {
            const toast = document.getElementById('success-toast');

            if (!toast) return;

            toast.classList.add('opacity-0');

            setTimeout(() => {
                toast.remove();
            }, 500);
        }, 3000);

    </script>
@endif

@if (session('deleted'))
    <div id="delete-toast" class="bg-red-100 text-red-800 p-3 rounded z-50 fixed top-6 left-1/2 -translate-x-1/2">
        {{ session('deleted') }}
    </div>

    <script>
        setTimeout(() => {
            const toast = document.getElementById('delete-toast');

            if (!toast) return;

            toast.classList.add('opacity-0');

            setTimeout(() => {
                toast.remove();
            }, 500);
        }, 3000);


    </script>

@endif

<div class="h-screen flex flex-col lg:h-screen">
    {{ $slot }}
</div>
</body>
</html>

