<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
    <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
    </div>    
    <br>
    <h1>Upload<h1>
            <form method="POST" action="/upload" enctype="multipart/form-data">
                @csrf
                <input type="file" name="photo">
                <input type="submit" name="Upload">
            </form>
            <br>
        <h1>Photos<h1>
            <ul>
                <?php foreach ($photos as $photo): ?>
                <li><?= $photo->name ?> <img src="<?= asset('storage/images/' . $photo->name) ?>" alt="<?= $photo->name ?>"></li>
                <?php endforeach; ?>
            </ul>

    </body>
</html>
