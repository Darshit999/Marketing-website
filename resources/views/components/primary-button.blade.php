<button
    {{ $attributes->merge(['class' => 'inline-flex h-12 px-6 items-center justify-center whitespace-nowrap rounded-xl text-md font-medium transition-all ease-in-out duration-300 outline-none disabled:pointer-events-none disabled:opacity-50 bg-[#034737] text-white hover:scale-[1.05]']) }}>
    {{ $slot }}
</button>