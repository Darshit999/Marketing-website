<a href="#" class="flex items-center gap-4 group/recentblog">
    <div class="size-36 lg:size-24 shrink-0 rounded-xl overflow-hidden bg-lime-900/10">
        <img src={{ $imgURL }} alt="Blog"
            class="h-full w-full object-cover group-hover/recentblog:scale-110 transition-all ease-in-out duration-500" />
    </div>
    <div class="font-medium">
        <h1 class="group-hover/recentblog:text-green-900 transition ease-in-out duration-200">
            {{ $title }}
        </h1>
    </div>
</a>
