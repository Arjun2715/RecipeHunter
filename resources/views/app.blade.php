<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="emerald">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    @inertiaHead
    <title inertia>{{ config('app.name', 'Laravel') }}</title>


    @vite('resources/js/app.js') @inertiaHead
</head>

<body class="font-sans antialiased bg-white dark:bg-gray-800">

    @inertia

</body>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

</html>
