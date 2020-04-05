<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="css/main.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white">
    <nav class="border-b border-gray-800 text-white">
        <div class="container mx-auto flex items-center justify-between px-4 py-2">
            <ul class="flex items-center">
                <li class="text-2xl">NetTube</li>
                <li class="ml-12 ">
                    <a href="#" class="hover:text-gray-400">Video</a>
                </li>
                <li class="ml-12">
                    <a href="#" class="hover:text-gray-400">Audio</a>
                </li>
            </ul>
            <div class="flex items-center">
                <div class="relative">
                    <input type="search" placeholder="Search" id="" class="rounded-full w-64 px-6 bg-gray-700 focus:outline-none focus:shadow-outline">
                </div>
                <div class="ml-4">

                </div>
            </div>
        </div>
    </nav>
    <main class="py-4">
        <div id="example">

        </div>
        @yield('content')
    </main>
</body>
</html>
