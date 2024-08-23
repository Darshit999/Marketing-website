<div class='grid grid-cols-12 px-2 lg:px-8 py-8 items-center'>
    <div class="col-span-6">
        <h1 class="text-base lg:text-lg font-semibold">{{ $title }}</h1>
        <p class="text-sm lg:text-base">{{ $description }}</p>
    </div>
    <div class="flex justify-center col-span-2 font-medium text-sm lg:text-base">
        {!! $first !!}
    </div>
    <div class="flex justify-center col-span-2 font-medium text-sm lg:text-base">
        {!! $second !!}
    </div>
    <div class="flex justify-center col-span-2 font-medium text-sm lg:text-base">
        {!! $third !!}
    </div>
</div>
