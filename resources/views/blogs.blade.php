@extends('Layout/MainLayout')

@section('maincontent')
    {{-- HERO SECTION --}}

    <section class="bg-lime-700/5 overflow-hidden">
        <div class="relative max-w-screen-2xl mx-auto">
            <div class="flex flex-col py-28 px-6 gap-4 justify-center items-center">
                <div class="max-w-2xl text-center">
                    <h1 class="text-3xl sm:text-5xl font-semibold tracking-tight leading-[1.20]">
                        Blogs
                    </h1>
                </div>

                <div class="max-w-xl text-center">
                    <p class="lg:text-lg text-md leading-relaxed text-gray-700">
                        Discover a wealth of insightful materials meticulously crafted to
                        provide you with a comprehensive understanding of the latest
                        trends.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- END HERO SECTION --}}

    {{-- BLOG POSTS AND SIDEBAR --}}

    <section class="bg-white">
        <div class="relative max-w-screen-2xl mx-auto py-24 px-6 lg:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 max-lg:gap-12">
                {{-- BLOG LIST --}}
                <div class="lg:col-span-9">
                    <div class="flex flex-col gap-12 sm:pe-16">
                        <x-large-blog-card imgURL="./images/blogs/blog-1.jpg" tags="Marketing, Technology"
                            title="A quick guide to picking the right branding agency for your rebrand"
                            date="August 21, 2023" author="william" readtime={3} />
                        <x-large-blog-card imgURL="./images/blogs/blog-2.jpg" tags='Insights, Marketing'
                            title="Challenges of creating and structuring a multi-brand system" date="August 21, 2023"
                            author="Jhon" readtime={3} />
                        <x-large-blog-card imgURL="./images/blogs/blog-3.jpg" tags='Guides, Insights'
                            title="The five-step process for running effective brainstorming sessions"
                            date="August 21, 2023" author="Jimmy" readtime={3} />
                        <x-large-blog-card imgURL="./images/blogs/blog-4.jpg" tags='Business, Technology'
                            title="Tech and digital skills to build a future education system" date="August 21, 2023"
                            author="Jack" readtime={3} />
                    </div>
                </div>
                {{-- END BLOG LIST --}}

                {{-- SIDEBAR --}}
                <div class="lg:col-span-3 sticky">
                    <div class="flex flex-col gap-12 sticky top-12">
                        <div class="flex flex-col gap-4">
                            <h1 class="text-xl font-semibold">Search</h1>
                            <div class="relative">
                                <input type="text" placeholder="Search..."
                                    class="w-full py-3 px-4 border rounded-xl outline-none border-gray-200 focus:border-gray-400" />
                                <span class="absolute top-0 right-0 py-3 px-4 cursor-pointer text-gray-500">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </span>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h1 class="text-xl font-semibold">Categories</h1>
                            <ul class="flex flex-col gap-2 text-sm lg:text-base">
                                <li>
                                    <a href="#">Business (2)</a>
                                </li>
                                <li>
                                    <a href="#">Guides (2)</a>
                                </li>
                                <li>
                                    <a href="#">Insights (2)</a>
                                </li>
                                <li>
                                    <a href="#">Marketing (2)</a>
                                </li>
                                <li>
                                    <a href="#">Software (2)</a>
                                </li>
                                <li>
                                    <a href="#">Technology (2)</a>
                                </li>
                                <li>
                                    <a href="#">Uncategorized (1)</a>
                                </li>
                            </ul>
                        </div>
                        <div class="flex flex-col gap-6">
                            <h1 class="text-xl font-semibold">Recent posts</h1>
                            <div class="flex flex-col gap-4">
                                <x-recent-blog-card imgURL="./images/blogs/blog-1.jpg"
                                    title="A quick guide to picking the right branding agency for your rebrand" />
                                <x-recent-blog-card imgURL="./images/blogs/blog-2.jpg"
                                    title="Challenges of creating and structuring a multi-brand system" />
                            </div>
                        </div>
                        <div class="flex flex-col gap-6">
                            <h1 class="text-xl font-semibold">Tags</h1>
                            <div class="flex flex-wrap gap-2">
                                <button class="p-3 text-xs uppercase font-semibold border rounded-xl border-gray-200 hover:bg-[#034737] hover:text-white transition-all ease-in-out duration-300">
                                    Creative
                                </button>
                                <button class="p-3 text-xs uppercase font-semibold border rounded-xl border-gray-200 hover:bg-[#034737] hover:text-white transition-all ease-in-out duration-300">
                                    Enterprise
                                </button>
                                <button class="p-3 text-xs uppercase font-semibold border rounded-xl border-gray-200 hover:bg-[#034737] hover:text-white transition-all ease-in-out duration-300">
                                    Internet
                                </button>
                                <button class="p-3 text-xs uppercase font-semibold border rounded-xl border-gray-200 hover:bg-[#034737] hover:text-white transition-all ease-in-out duration-300">
                                    Mobile
                                </button>
                                <button class="p-3 text-xs uppercase font-semibold border rounded-xl border-gray-200 hover:bg-[#034737] hover:text-white transition-all ease-in-out duration-300">
                                    Popular
                                </button>
                                <button class="p-3 text-xs uppercase font-semibold border rounded-xl border-gray-200 hover:bg-[#034737] hover:text-white transition-all ease-in-out duration-300">
                                    Startup
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- END SIDEBAR --}}
            </div>
        </div>
    </section>

    {{-- END BLOG POSTS AND SIDEBAR --}}
@endsection
