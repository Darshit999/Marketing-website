<div class="flex flex-col gap-6 p-8 rounded-xl bg-white/10">
    <div>
        <h1 class="font-semibold lg:text-xl text-lg tracking-tight">
            {{ $review }}
        </h1>
    </div>
    <div class="flex flex-row sm:flex-col lg:flex-row lg:items-center lg:gap-4 gap-2">
        <div class="size-14 rounded-full overflow-hidden bg-white">
            <img src={{ $imgURL }} alt={{ $customerName }} height='100' width='100' />
        </div>
        <div>
            <h1 class="text-lg font-semibold tracking-tight">
                {{ $customerName }}
            </h1>
            <p>
                {{ $customerRole }}
            </p>
        </div>
    </div>
    <div class="w-full h-[0.060rem] bg-white/20"></div>
    <div class="flex flex-col gap-2">
        <h1 class="text-2xl sm:text-3xl font-semibold">
            {{ $title }}
        </h1>
        <p class="tracking-tight text-base">
            {{ $description }}
        </p>
    </div>
</div>
