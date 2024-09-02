<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    {{-- Login verification --}}
    @if (Route::has('login'))
        <livewire:welcome.navigation />
    @endif
    {{-- Main content --}}
    <main class="dark:bg-gray-800">
        <section class="px-[10rem] py-[12rem]">
            <h3 class="text-3xl font-bold dark:text-red-600">Welcome to Trabajonautas</h3>
            <p class="text-sm dark:text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima aliquid
                dolore rerum quo nam id. Quae dolorem quo temporibus ut repellat ex sunt omnis consequuntur maxime asperiores, nostrum magni
                ducimus, nemo, commodi est quod fugit quia! Nemo nulla eum vitae, esse nisi expedita. Facilis corporis
                laborum suscipit veniam fuga? Nihil?</p>
        </section>
    </main>
</body>

</html>
