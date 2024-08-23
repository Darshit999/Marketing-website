<div class="flex flex-col gap-6 p-6 rounded-xl group/blog bg-white">
    <div class="relative w-full h-56 rounded-xl overflow-hidden">
        <img src={{$imgURL}} alt={{$title}}
            class="h-full w-full object-cover group-hover/blog:scale-105 transition-all ease-in-out duration-300" />
    </div>
    <div class="flex flex-col gap-2 px-2">
        <h1 class="font-semibold text-lg">{{$title}}</h1>
        <p class="text-gray-500">{{$description}}</p>
    </div>
    <div class="px-2">
        <x-primary-button>
            <a href={{$url}}>Read more</a>
        </x-primary-button>
    </div>
</div>
