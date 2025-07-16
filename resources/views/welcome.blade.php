<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Demos</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        {{-- Dynamic demo navigation based on web.php's "demos." named routes --}}
        <h1 class="text-xl font-semibold">Larabit demos</h1>
        <nav class="mt-4">
            <ul class="flex flex-col gap-1">
                @foreach (Route::getRoutes() as $route)
                @php
                $name = $route->getName();
                @endphp

                @if ($name && Str::startsWith($name, 'demos.'))
                <li>
                    <a class="hover:underline" href="{{ route($name) }}">
                        {{ Str::title(str_replace('-', ' ', Str::after($name, 'demos.'))) }}
                    </a>
                </li>
                @endif
                @endforeach
            </ul>
        </nav>
    </div>
</body>

</html>