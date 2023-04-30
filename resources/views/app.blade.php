@extends("layouts.main")

@section("content")
    <x-nav-bar home="text-black border-black"></x-nav-bar>
    <div class="w-full">
        <div class="pl-3 sm:pl-4 pt-16
                    md:pl-14 rel
                    custom1:flex flex-row">
            <!-- Intro area -->
            <div class="pl-2 pt-32 md:pl-0 sm:pl-14
                        w-full z-10 relative
                        custom1:w-7/12 custom1:flex custom1:flex-col ">
                <!-- Intro text -->
                <div class="w-full">
                    <div class=" w-auto lg:float-right pr-12">
                        <h1 class="text-6xl font-bold"> Hi! </h1>
                        <div class="">
                            <h1 class="text-6xl font-bold inline-block pr-2"> I'm </h1>
                            <h1 class="text-6xl font-bold text-amber-400 inline-block text-opacity-19.5">  Seth Sharp </h1>
                        </div>

                        <div class="pt-6 sm:pt-14">
                            <h1 class="text-gray-400 text-2xl"> Developer by day </h1>
                            <h1 class="text-gray-400 text-2xl"> Pizza Thrower by night</h1>
                        </div>
                        <button id="contact-btn" class="bg-blue-800 text-3xl text-white rounded-3xl w-48 mt-4
                                transition ease-in-out delay-0 p-1.5
                                hover:-translate-y-1 hover:scale-100 duration-50">
                            <a href="#contact"> Hire me! </a>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Profile image -->
            <div class="sm:w-full custom1:w-8/12 w-full custom1:grow z-20 relative">
                <div class="w-full">
                    <img class="z-20 relative w-auto h-full"
                         src="/images/profileTrans.png"
                         alt="profile-picture">
                    </div>
                    <div class="z-20">
                        <div class="w-1/2 h-6 absolute top-1/4">
                            <div class="w-full h-full bg-amber-400 rounded-3xl -rotate-[50deg] opacity-30"></div>
                        </div>
                         <div class="w-1/4 h-6 absolute top-3/4 -ml-52 opacity-30">
                            <div class="w-full h-full bg-amber-400 rounded-3xl -rotate-[50deg] opacity-60"></div>
                        </div>
                        <div class="w-1/2 h-6 absolute top-3/4 -ml-44">
                            <div class="w-full h-full bg-amber-400 rounded-3xl -rotate-[50deg] opacity-60"></div>
                        </div>


                        <div class="w-2/3 h-6 absolute top-full ml-16 ">
                            <div class="w-full h-full bg-blue-800 rounded-3xl -rotate-[50deg] opacity-30"></div>
                        </div>
                        <div class="w-2/3 h-6 absolute top-2/4 ml-72 ">
                            <div class="h-full w-1/2 bg-blue-700 rounded-3xl -rotate-[50deg]"></div>
                        </div>
                        <div class="w-1/2 h-6 absolute top-1/4 right-0">
                            <div class="w-full h-full bg-blue-600 rounded-3xl -rotate-[50deg] opacity-75"></div>
                        </div>
                    </div>
            </div>
        </div>
        <div>
            <div class="text-center mt-8 w-full">
                <h1 class="text-4xl font-bold text-black inline-block pr-2"> About </h1>
                <h1 class="text-4xl font-bold text-amber-400 inline-block"> Me </h1>
            </div>
            <div class=" pt-8 flex justify-center">

                <div class="text-center w-3/4 sm:w-1/3 leading-7">
                    I am a computer science majoring in Software Development. Throughout this degree I have learnt the basics of Computer Science, from programming, through to hardware and software components of a computer. Contributing to my degree I have learnt and successfully implemented new data structures, algorithms as well as design my own data structures and algorithms. On top of this I have learnt about different software development lifecycles and strategies for building projects, applied in both single projects and group projects. My current goals is to keep learning and applying what I have learned from uni into the field. As well as learning and collaborating with experienced developers. My future career goals, which my experience at Coding labs has influenced my thought process on. Is to become a highly experienced and knowledgeable developer at a company. With this knowledge I want to be able to share that with other new developers like my self (in the future). Surrounding myself with other experienced developers I found was highly impactful in how I want to walk down my developer journey.
                </div>
            </div>

            <div class="text-center mt-8 w-full">
                <h1 class="text-4xl font-bold text-black inline-block pr-2"> My </h1>
                <h1 class="text-4xl font-bold text-blue-800 inline-block"> Links </h1>
            </div>

            <div class="pt-4 pb-5 text-center" id="contact">
                <a class="pr-4" href="https://github.com/SethSharp">
                    <img class="w-16 h-16 inline-block
                                transition ease-in-out delay-0
                                hover:-translate-y-1 hover:scale-75 duration-50
                                " src="/images/github_bgremoval.ai.png" alt="git-hub-link">
                </a>
                <a href="https://www.linkedin.com/in/seth-sharp-213bb3211/">
                    <img class="w-11 h-11 inline-block
                                transition ease-in-out delay-0
                                hover:-translate-y-1 hover:scale-75 duration-50"
                                src="/images/linkedInNew.png" alt="git-hub-link">
                </a>
            </div>
        </div>
    </div>
@stop
