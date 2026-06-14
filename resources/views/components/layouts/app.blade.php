@props([
    'title',
    ])

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{isset($title) ?? 'Test'}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-baby-pattern font-sans antialiased h-screen overflow-hidden lg:h-screen lg:overflow-hidden">
<div class="h-screen flex flex-col lg:h-screen">
    {{ $slot }}
</div>
</body>
</html>

