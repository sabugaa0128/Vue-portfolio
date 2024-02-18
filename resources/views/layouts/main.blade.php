<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title> @yield('title', config('app.name')) </title>
    <meta name="description"
          content="Hey I am Seth Sharp, a Junior Software developer at Coding Labs on the Gold Coast. I love to build ambitious projects and love the art of programming.">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.5/dist/cdn.min.js"></script>

    @livewireStyles
</head>

<body class="mg-0 pd-0">
@livewireScripts
<main>
    <x-nav-bar/>

    <div class="ml-4 sm:ml-16 w-full">
        <h1 class="text-4xl font-bold text-black inline-block pr-2">
            @yield('partOne')
        </h1>
        <h1 class="text-4xl font-bold text-amber-400 inline-block">
            @yield('partTwo')
        </h1>
    </div>

    <div class="md:flex w-3/4 m-auto mt-8">
        @yield("content")
    </div>
</main>
</body>

