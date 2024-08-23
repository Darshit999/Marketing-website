<div class="space-y-6 rounded-xl group/blog bg-white">
    <a href="#">
        <div class="relative w-full h-60 rounded-xl overflow-hidden">
            <img src={{ $imgURL }} alt={{ $title }}
                class="h-full w-full object-cover group-hover/blog:scale-105 transition-all ease-in-out duration-300" />
        </div>
        <div class="space-y-2">
            <div class="text-green-900">
                <p class="text-xs font-semibold uppercase">{{ $tags }}</p>
            </div>
            <div class="flex flex-col gap-2">
                <h1 class="font-semibold text-base tracking-tight sm:text-lg">{{ $title }}</h1>
                <div class="flex text-xs uppercase font-semibold">
                    <p class="py-1 pe-2">{{ $date }}</p>
                    <a href="#"
                        class="py-1 px-2 rounded-lg hover:bg-teal-600/5 hover:text-teal-900 transition-all ease-in-out duration-300">
                        {{ $author }}
                    </a>
                    <p class="py-1 px-2">{{ $readtime }} min read</p>
                </div>
                <p class="text-sm sm:text-[1.02rem] leading-relaxed text-gray-500">{{ $description }}</p>
            </div>
        </div>
    </a>
</div>
