@props(['blog'])

<a class="rounded-xl shadow h-fit overflow-hidden cursor-pointer hover:bg-gray-100 transition"
   href="{{ route('blogs.show', $blog)  }}">
    <div class="bg-gray-50 w-full">
        <div class="p-3 text-lg font-medium text-left"> {{ substr($blog->title, 0, 75) }} </div>

        <p class="px-6 py-4 text-md text-left text-gray-500">
            {{ substr($blog->meta_description, 0, 100) . '...' }}
        </p>
    </div>

    <div class=" w-full">
        <div class="grid grid-cols-2">
            <div class="flex justify-start font-medium text-gray-500">
                <span class="ml-4 my-3"> {{$blog->author->name}} </span>
            </div>

            <div class="flex justify-end font-medium text-gray-400">
                <span class="mr-4 my-3"> {{ Carbon\Carbon::parse($blog->published_at)->diffForHumans() }} </span>
            </div>
        </div>
    </div>
</a>
