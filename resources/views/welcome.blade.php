<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#0a0a0a] min-h-screen flex items-center justify-center">

    <!-- CARD UTAMA -->
    <div class="w-full max-w-5xl border border-white/10 rounded-xl p-10 bg-black/40">

        <!-- NAMA -->
        <h1 class="text-white text-lg font-semibold mb-1">
            Adila Roisa Santosa
        </h1>

        <!-- NIM -->
        <p class="text-gray-400 mb-6 font-bold">
            20231040179
        </p>

        <!-- BUTTON -->
        <button
            class="px-6 py-2 rounded-md bg-white text-black font-medium hover:bg-gray-200 transition"
        >
            Modul Pertemuan 1
        </button>

    </div>
    <!-- END CARD -->

</body>
</html>