<div class="flex flex-col sm:flex-row items-center gap-6 sm:gap-8 group/blogcard">
    <div class="sm:size-48 shrink-0 lg:size-56 rounded-xl overflow-hidden bg-lime-900/5">
        <img src={{ $imgURL }} alt="Blog"
            class="h-full w-full object-cover group-hover/blogcard:scale-110 transition-all ease-in-out duration-500" />
    </div>
    <div class="flex flex-col gap-2">
        <div class="uppercase text-xs font-semibold">
            <a href="#">{{ $tags }} </a>
        </div>
        <div class="text-xl lg:text-2xl font-semibold">
            <a href="#" class="tracking-tight">
            {{ $title }}
            </a>
        </div>
        <div class="flex text-xs uppercase font-semibold">
            <p class="py-1">{{ $date }}</p>
            <a href="#" class="py-1 px-2 rounded-lg hover:bg-teal-600/5 hover:text-teal-900">
                {{ $author }}
            </a>
            <a href="#" class="py-1 px-2 rounded-lg hover:bg-teal-600/5 hover:text-teal-900">
                {{ $readtime }} min read
            </a>
        </div>
    </div>
</div>
