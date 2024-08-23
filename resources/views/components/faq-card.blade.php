<details class="select-none">
    <summary class="flex p-5 justify-between items-center font-semibold cursor-pointer rounded-xl outline-none border border-gray-200 bg-white">
        <span>{{ $title }}</span>
        <span class="transition group-open:rotate-180">
            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                <path d="M6 9l6 6 6-6"></path>
            </svg>
        </span>
    </summary>
    <p class="px-6 my-4 text-gray-600">
        {{ $description }}
    </p>
</details>
