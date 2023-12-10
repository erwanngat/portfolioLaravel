<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css">
    @vite('resources/css/app.css')
    <title>Portfolio</title>
    <x-navBar />
    @if (isset($header))
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white text-5xl py-12">
                {{ $header }}
            </div>
        </header>
    @endif
</head>

<body class='mt-16'>
    {{ $slot }}
</body>
<footer class='mt-16 absolute bottom-0 w-full'>
    <x-footer />
</footer>

</html>
