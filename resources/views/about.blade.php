<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title> About </title>
</head>

<body class="mg-0 pd-0">

    <x-nav-bar about="text-blue-800" ></x-nav-bar>

    <div class="mt-16 px-20 w-full">
        <h1 class="text-4xl font-bold text-black inline-block pr-2"> About </h1>
        <h1 class="text-4xl font-bold text-amber-400 inline-block"> Me! </h1>
    </div>
    <div class="items-center flex flex-wrap sm:flex justify-center w-full mt-10 py-5 px-12 sm:px-40">
        <x-about-card title="Who am I?"
                      content="Hey I am Seth, currently studying a Bachelor of Computer Science.">
        </x-about-card>

        <x-image-card image="car"></x-image-card>

        <x-about-card title="My hobbies?"
                      content="">
        </x-about-card>

        <x-image-card image="maheno"></x-image-card>

        <x-about-card title="My Goals?"
                      content="">
        </x-about-card>

        <x-image-card image="forest"></x-image-card>
    </div>

</body>
</html>
