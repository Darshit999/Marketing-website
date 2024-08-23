@extends('Layout/MainLayout')

@section('maincontent')
    {{-- HERO SECTION --}}

    <section class="bg-lime-700/5 overflow-hidden">
        <div class="relative max-w-screen-2xl mx-auto">
            <div class="flex flex-col py-28 px-6 gap-4 justify-center items-center">
                <div class="max-w-2xl text-center">
                    <h1 class="text-3xl sm:text-5xl font-semibold tracking-tight leading-[1.20]">
                        <span>Full-range </span>
                        of services
                    </h1>
                </div>

                <div class="max-w-xl text-center">
                    <p class="lg:text-lg text-md leading-relaxed text-gray-700">
                        Discover how our cutting-edge software can transform your
                        operations and help you achieve unparalleled success.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- END HERO SECTION --}}

    <div class="relative">
        {{-- STICKY MENU --}}
        <section class="bg-white overflow-hidden lg:sticky top-0 z-50">
            <div class="relative max-w-screen-2xl mx-auto">
                <div class="grid grid-cols-1 sm:grid-cols-3 px-6 font-medium border-2 border-gray-200">
                    <div class="">
                        <a href="#marketingSolutions"
                            class="w-full py-4 sm:py-6 flex justify-center items-center gap-2 text-gray-600 border-b-2 border-black">
                            <i class="fa-solid fa-bullseye text-xl"></i>
                            Marketing Solutions
                        </a>
                    </div>
                    <div class="">
                        <a href="#predictiveAnalytics"
                            class="w-full py-4 sm:py-6 flex justify-center items-center gap-2 text-gray-600">
                            <i class="fa-regular fa-clock text-xl"></i>
                            Predictive Analytics
                        </a>
                    </div>
                    <div class="">
                        <a href="#socialMediaManagement"
                            class="w-full py-4 sm:py-6 flex justify-center items-center gap-2 text-gray-600">
                            <i class="fa-solid fa-chart-simple text-xl"></i>
                            Social Media Strategy
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- END STICKY MENU --}}

        {{-- MARKETING SECTION --}}

        <section class="bg-white" id="marketingSolutions">
            <div class="max-w-screen-xl mx-auto lg:px-12 px-6 pt-36">
                <div class="grid grid-cols-1 sm:grid-cols-2 items-center gap-8 sm:gap-0">
                    <div class="">
                        <div class="flex flex-col gap-4 lg:pe-20 pe-2">
                            <div class="w-fit px-3 py-1 rounded-full bg-green-600/5">
                                <p class="font-medium text-[0.925rem]">
                                    Marketing Solutions
                                </p>
                            </div>
                            <div class="max-w-xl">
                                <h1
                                    class="text-[1.5rem] sm:text-[2.25rem] lg:text-[2.75rem] leading-[1.2] font-semibold lg:me-10">
                                    Drive more sales, analyze performance
                                </h1>
                            </div>
                            <div class="max-w-md">
                                <p class="lg:text-lg text-gray-500">
                                    From lead generation to conversion, our app covers every
                                    aspect of your marketing journey.
                                </p>
                            </div>
                            <div class="flex gap-8 lg:gap-12 mt-4 max-sm:text-sm">
                                <ul class="space-y-2 font-medium">
                                    <li class="flex gap-3 items-center">
                                        <i class="fa-solid fa-check"></i>
                                        Data analytics
                                    </li>
                                    <li class="flex gap-3 items-center">
                                        <i class="fa-solid fa-check"></i>
                                        Website design
                                    </li>
                                    <li class="flex gap-3 items-center">
                                        <i class="fa-solid fa-check"></i>
                                        Event marketing
                                    </li>
                                </ul>
                                <ul class="space-y-2 font-medium">
                                    <li class="flex gap-3 items-center">
                                        <i class="fa-solid fa-check"></i>
                                        Brand strategy
                                    </li>
                                    <li class="flex gap-3 items-center">
                                        <i class="fa-solid fa-check"></i>
                                        Content creation
                                    </li>
                                    <li class="flex gap-3 items-center">
                                        <i class="fa-solid fa-check"></i>
                                        PPC advertising
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="relative rounded-lg lg:bg-lime-900/5">
                        <Image src="./images/marketing-1.png" alt="Marketing" width='1000' height='1000'
                            class="lg:relative bottom-12 right-12 rounded-xl border border-gray-200" />
                    </div>
                </div>
            </div>
        </section>

        {{-- END MARKETING SECTION --}}

        {{-- ANALYTICS SECTION --}}

        <section class="bg-white" id="predictiveAnalytics">
            <div class="max-w-screen-xl mx-auto lg:px-12 px-6 pt-36">
                <div class="grid grid-cols-1 sm:grid-cols-2 items-center gap-8 sm:gap-0">
                    <div class="relative order-2 sm:order-1 rounded-lg lg:bg-lime-900/5">
                        <img src="./images/marketing-2.png" alt="Marketing" width='1000' height='1000'
                            class="lg:relative bottom-10 left-10 rounded-xl border border-gray-200" />
                    </div>
                    <div class="order-1 sm:order-2">
                        <div class="flex flex-col gap-4 ps-0 sm:ps-8 lg:ps-32">
                            <div class="w-fit px-3 py-1 rounded-full bg-green-600/5">
                                <p class="font-medium text-[0.925rem]">
                                    Predictive Analytics
                                </p>
                            </div>
                            <div class="max-w-xl">
                                <h1
                                    class="text-[1.5rem] sm:text-[2.25rem] lg:text-[2.75rem] leading-[1.2] font-semibold tracking-tight">
                                    Acquire and retain more customers
                                </h1>
                            </div>
                            <div class="max-w-md">
                                <p class="lg:text-lg text-gray-500">
                                    Understand customer behavior, campaign effectiveness,
                                    empowering data-driven decisions
                                </p>
                            </div>
                            <div class="flex gap-8 lg:gap-12 mt-4 max-sm:text-sm">
                                <ul class="space-y-2 font-medium">
                                    <li class="flex gap-3 items-center">
                                        <i class="fa-solid fa-check"></i>
                                        Brand strategy
                                    </li>
                                    <li class="flex gap-3 items-center">
                                        <i class="fa-solid fa-check"></i>
                                        Content creation
                                    </li>
                                    <li class="flex gap-3 items-center">
                                        <i class="fa-solid fa-check"></i>
                                        PPC advertising
                                    </li>
                                </ul>
                                <ul class="space-y-2 font-medium">
                                    <li class="flex gap-3 items-center">
                                        <i class="fa-solid fa-check"></i>
                                        Data analytics
                                    </li>
                                    <li class="flex gap-3 items-center">
                                        <i class="fa-solid fa-check"></i>
                                        Website design
                                    </li>
                                    <li class="flex gap-3 items-center">
                                        <i class="fa-solid fa-check"></i>
                                        Event marketing
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- END ANALYTICS SECTION --}}

        {{-- SOCIAL MEDIA MANAGEMENT SECTION --}}

        <section class="bg-white" id="socialMediaManagement">
            <div class="max-w-screen-xl mx-auto pt-36 pb-24 lg:px-12 px-6">
                <div class="grid grid-cols-1 sm:grid-cols-2 items-center gap-12 sm:gap-0">
                    <div class="">
                        <div class="flex flex-col gap-4 pe-0 sm:pe-6 lg:pe-20">
                            <div class="w-fit px-3 py-1 rounded-full bg-lime-900/5">
                                <p class="font-medium text-[0.925rem]">
                                    Social Media Management
                                </p>
                            </div>
                            <div class="max-w-md">
                                <h1
                                    class="text-[1.5rem] sm:text-[2.25rem] lg:text-[2.75rem] leading-[1.2] font-semibold tracking-tight">
                                    Engage audiences and save time
                                </h1>
                            </div>
                            <div class="max-w-md">
                                <p class="lg:text-lg text-gray-500">
                                    Manage your social media presence effortlessly with our
                                    integrated scheduler feature.
                                </p>
                            </div>
                            <div class="flex gap-8 lg:gap-12 mt-4 max-sm:text-sm">
                                <ul class="space-y-2 font-medium">
                                    <li class="flex gap-3 items-center">
                                        <i class="fa-solid fa-check"></i>
                                        Data analytics
                                    </li>
                                    <li class="flex gap-3 items-center">
                                        <i class="fa-solid fa-check"></i>
                                        Website design
                                    </li>
                                    <li class="flex gap-3 items-center">
                                        <i class="fa-solid fa-check"></i>
                                        Event marketing
                                    </li>
                                </ul>
                                <ul class="space-y-2 font-medium">
                                    <li class="flex gap-3 items-center">
                                        <i class="fa-solid fa-check"></i>
                                        Brand strategy
                                    </li>
                                    <li class="flex gap-3 items-center">
                                        <i class="fa-solid fa-check"></i>
                                        Content creation
                                    </li>
                                    <li class="flex gap-3 items-center">
                                        <i class="fa-solid fa-check"></i>
                                        PPC advertising
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="relative rounded-lg lg:bg-lime-900/5">
                        <img src="./images/post-schedule-2.png" alt="Marketing" width='1000' height='1000'
                            class="lg:relative bottom-12 right-12 rounded-xl border border-gray-200" />
                    </div>
                </div>
            </div>
        </section>

        {{-- END SOCIAL MEDIA MANAGEMENT SECTION --}}
    </div>

    {{-- KEY BENEFITS SECTION --}}

    <section class="bg-lime-900/5">
        <div class="max-w-screen-xl mx-auto py-24 lg:px-12 px-6">
            <div class="flex flex-col gap-36">
                <div class="grid grid-cols-1 sm:grid-cols-2 items-center gap-12 sm:gap-0">
                    <div class="">
                        <div class="flex flex-col gap-4 pe-0 sm:pe-6 lg:pe-20">
                            <div class="w-fit px-3 py-1 rounded-full bg-white">
                                <p class="font-medium text-[0.925rem]">Key benefits</p>
                            </div>
                            <div class="max-w-xl">
                                <h1
                                    class="text-2xl sm:text-4xl lg:text-[2.75rem] leading-[1.20] font-semibold tracking-tight">
                                    Every feature you need, all in a single system
                                </h1>
                            </div>
                            <div class="max-w-md">
                                <p class="lg:text-lg text-gray-500">
                                    Our software solutions empower businesses across industries,
                                    driving growth, and enhancing efficiency.
                                </p>
                            </div>
                            <div class="flex gap-8 lg:gap-12 mt-4 max-sm:text-sm">
                                <ul class="space-y-2 font-medium">
                                    <li class="flex gap-3 items-center">
                                        <i class="fa-solid fa-check"></i>
                                        Deliver exceptional service
                                    </li>
                                    <li class="flex gap-3 items-center">
                                        <i class="fa-solid fa-check"></i>
                                        Make informed, strategic decisions
                                    </li>
                                    <li class="flex gap-3 items-center">
                                        <i class="fa-solid fa-check"></i>
                                        Streamline your processes and workflows
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                        <div
                            class="flex flex-col px-4 lg:px-10 py-12 lg:py-16 gap-2 justify-center items-center rounded-lg bg-white">
                            <h1 class="font-semibold text-4xl lg:text-[2.5rem]">25M +</h1>
                            <p class="font-semibold text-sm lg:text-base">Monthly Downloads</p>
                        </div>
                        <div
                            class="flex flex-col px-4 lg:px-10 py-12 lg:py-16 gap-2 justify-center items-center rounded-lg bg-white">
                            <h1 class="font-semibold text-4xl lg:text-[2.5rem]">1,000 +</h1>
                            <p class="font-semibold text-sm lg:text-base">Expert-built templates</p>
                        </div>
                        <div
                            class="flex flex-col px-4 lg:px-10 py-12 lg:py-16 gap-2 justify-center items-center rounded-lg bg-white">
                            <h1 class="font-semibold text-4xl lg:text-[2.5rem]">99 %</h1>
                            <p class="font-semibold text-sm lg:text-base">Page Speed</p>
                        </div>
                        <div
                            class="flex flex-col px-4 lg:px-10 py-12 lg:py-16 gap-2 justify-center items-center rounded-lg bg-white">
                            <h1 class="font-semibold text-4xl lg:text-[2.5rem]">250 ms</h1>
                            <p class="font-semibold text-sm lg:text-base">Load Time</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- END KEY BENEFITS SECTION --}}

    {{-- GET STARTED SECTION --}}

    <section class="bg-white">
        <div class="max-w-screen-xl mx-auto py-24 px-6">
            <div class="flex justify-center">
                <div class="flex flex-col sm:items-center gap-4">
                    <div class="w-fit px-3 py-1 rounded-full bg-lime-900/5">
                        <p class="font-medium text-[0.925rem]">Get Started</p>
                    </div>
                    <div class="lg:max-w-lg sm:text-center">
                        <h1 class="text-2xl sm:text-4xl lg:text-[2.75rem] font-semibold tracking-tight">
                            Ready to supercharge your business?
                        </h1>
                    </div>
                    <div class="max-w-xl sm:text-center">
                        <p class="lg:text-lg">
                            Grow sales and stay ahead in the competitive market by being
                            among the first to benefit.
                        </p>
                    </div>
                    <div class="mt-6">
                        <x-primary-button>Start 7-day free trial</x-primary-button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- GET STARTED SECTION --}}
@endsection
