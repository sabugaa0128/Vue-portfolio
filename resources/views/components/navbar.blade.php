@props(['home' => 'no-underline'])
@props(['about' => 'no-underline'])
@props(['qualifications' => 'no-underline'])
@props(['experience' => 'no-underline'])
@props(['projects' => 'no-underline'])
@props(['wil' => 'no-underline'])

<div class="z-30 h-20 mb-4 w-full float-right sm:pr-10">
    <div class="h-full
                inline-block align-middle
                -z-10 grid
                grid-rows-2 grid-cols-2
                sm:grid-rows-1 sm:grid-flow-col
                sm:float-right
                hidden
                sm:flex">
        <div class="bg-white bg-opacity-75 rounded-3xl w-fit h-fit p-2 my-auto">
            <a class="my-auto mx-auto text-xl font-bold text-center {{ $home }} underline underline-offset-4 p-2.5
                   rounded-3xl hover:-translate-y-1 transition delay-75 duration-400"
               href="/about">
                About
            </a>
            <a class="my-auto mx-auto text-xl font-bold text-center {{ $experience }} underline underline-offset-4 p-2.5
                   rounded-3xl hover:-translate-y-1 transition delay-75 duration-400"
               href="/experience">
                Experiences
            </a>
            <a class="my-auto mx-auto text-xl font-bold text-center {{ $qualifications }} underline underline-offset-4 p-2.5
                   rounded-3xl hover:-translate-y-1 transition delay-75 duration-400"
               href="/capabilities">
                Capabilities
            </a>
            <a class="my-auto mx-auto text-xl font-bold text-center {{ $projects }} underline underline-offset-4 p-2.5
                   rounded-3xl hover:-translate-y-1 transition delay-75 duration-400"
               href="/portfolio">
                Portfolio
            </a>
            <a class="my-auto mx-auto text-xl font-bold text-center {{ $projects }} underline underline-offset-4 p-2.5
                   rounded-3xl hover:-translate-y-1 transition delay-75 duration-400"
               href="/blogs">
                Blogs
            </a>
        </div>
    </div>
    <div class="sm:hidden">
        <div class="mx-8">
            <div class="rounded float-right" id="menu-btn">
                <div class="h-2 my-2 w-12 ml-3 bg-gray-400 opacity-50 rounded-lg"></div>
                <div class="h-2 my-2 w-16 bg-gray-400 opacity-50 rounded-lg"></div>
                <div class="h-2 my-2 w-12 ml-3 bg-gray-400 opacity-50 rounded-lg"></div>
            </div>

            <div class="bg-white relative shadow-2xl w-full hidden
                        flex-col rounded px-6 py-3 font-medium mt-24
                        text-center" id="dropdown">
                <a href="/about"
                   class="border hover:bg-black hover:text-white active:bg-black active:font-white text-2xl px-2 py-1 hover:bg-gray-200 rounded {{$home}}">
                    About
                </a>
                <a href="/experience"
                   class="border hover:bg-black hover:text-white active:bg-black active:font-white text-2xl px-2 py-1 hover:bg-gray-200 rounded {{$experience}}">
                    Experiences
                </a>
                <a href="/capabilities"
                   class="border hover:bg-black hover:text-white active:bg-black active:font-white text-2xl px-2 py-1 hover:bg-gray-200 rounded {{$qualifications}}">
                    Capabilities
                </a>
                <a href="/portfolio"
                   class="border hover:bg-black hover:text-white active:bg-black active:font-white text-2xl px-2 py-1 hover:bg-gray-200 rounded {{$projects}}">
                    Portfolio
                </a>
            </div>
        </div>

        <script>
            window.addEventListener('DOMContentLoaded', () => {
                const menuBtn = document.querySelector('#menu-btn')
                const dropdown = document.querySelector('#dropdown')
                menuBtn.addEventListener('click', () => {
                    dropdown.classList.toggle('hidden')
                    dropdown.classList.toggle('flex')
                });
            });
        </script>
    </div>
</div>
