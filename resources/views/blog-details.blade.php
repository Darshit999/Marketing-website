@extends('Layout/MainLayout')

@section('maincontent')
    {{-- BLOG POSTS AND SIDEBAR --}}

    <section class="bg-white">
        <div class="relative max-w-screen-2xl mx-auto py-24 px-5 lg:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 max-lg:gap-12">
                {{-- BLOG DETAILS --}}
                <div class="lg:col-span-9">
                    <div class="flex flex-col gap-4 lg:pe-12">
                        <div class="uppercase text-xs font-semibold">
                            <a href="#">Marketing, Technology</a>
                        </div>
                        <div class="">
                            <h1 class="text-[2rem] sm:text-[2.8rem] lg:text-[3.2rem] leading-[1.2] font-semibold lg:me-10">
                                A quick guide to picking the right branding agency for your rebrand
                            </h1>
                        </div>
                        <div class="flex mt-2 text-xs uppercase font-semibold">
                            <p class="py-1 px-2">August 21, 2023</p>
                            <a href="#"
                                class="py-1 px-2 rounded-lg hover:bg-teal-600/5 hover:text-teal-900 transition-all ease-in-out duration-300">
                                Author
                            </a>
                            <p class="py-1 px-2">1 min read</p>
                        </div>
                        <div class="w-full mt-8 rounded-xl overflow-hidden bg-lime-900/5">
                            <img src="./images/blogs/blog-1.jpg" alt="Blog"
                                class="h-full w-full object-cover group-hover/blogcard:scale-110 transition-all ease-in-out duration-500" />
                        </div>
                    </div>

                    <div class="space-y-6 mt-12 lg:pe-12 leading-relaxed text-sm lg:text-base text-gray-500">
                        <div class="space-y-6">
                            <p>
                                Embarking on a rebranding journey for your business is an exciting yet challenging endeavor.
                                A successful rebrand can breathe new life into your company, helping you connect with your
                                target audience in a fresh and meaningful way.
                            </p>
                            <p>
                                One of the critical decisions you&apos;ll make during this process is choosing the right
                                branding
                                agency to guide you through the transformation.
                            </p>
                        </div>

                        <div class="space-y-3 p-8 rounded-xl border border-s-4 border-gray-200 border-s-green-900">
                            <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied
                                is to do what you believe is great work. And the only way to do great work is to love what
                                you do.
                            </p>
                            <h1 class="font-semibold text-green-900">- Steve Jobs</h1>
                        </div>

                        <div class="space-y-6">
                            <h1 class="text-xl sm:text-2xl -mb-2 font-semibold text-black">
                                Open communication and shared values
                            </h1>
                            <p>
                                Begin your search by researching branding agencies that have a strong track record in
                                delivering successful rebranding projects. Look for agencies that have experience in your
                                industry and a portfolio that resonates with your brand&apos;s aesthetic and values.
                            </p>
                            <p>
                                When evaluating potential agencies, consider their expertise in various aspects of branding,
                                such as logo design, messaging, visual identity, and market research. Review case studies of
                                their past rebranding projects to gauge the level of creativity and effectiveness they bring
                                to the table.
                            </p>
                        </div>

                        <div class="space-y-6">
                            <h1 class="text-xl sm:text-2xl -mb-2 font-semibold text-black">
                                Realizing your brand&apos;s full potential
                            </h1>
                            <p>
                                A successful partnership with a branding agency depends on more than just their skills -
                                cultural fit is equally important. During initial consultations, assess whether the agency
                                understands your brand&apos;s values and can work collaboratively with your team. Open
                                communication and shared values will contribute to a smoother rebranding process.
                            </p>
                            <p>
                                Discuss the agency&apos;s creative process during your consultations. A great branding
                                agency
                                should be able to articulate its approach to brainstorming, conceptualizing, and executing
                                branding concepts. Their ideas should resonate with your vision while bringing a fresh
                                perspective to the table.
                            </p>
                        </div>

                        <div class="space-y-6">
                            <h1 class="text-xl sm:text-2xl -mb-2 font-semibold text-black">
                                Essential insights on how to pick the perfect agency
                            </h1>
                            <ul class="list-decimal space-y-2 ps-8 sm:ps-10 lg:ps-12">
                                <li>
                                    Request references from past clients who have undergone rebranding projects with the
                                    agencies on your shortlist. Reach out to these clients to gather insights into their
                                    experiences.
                                </li>
                                <li>
                                    Discuss the agency&apos;s creative process during your consultations. A great branding
                                    agency
                                    should be able to articulate their approach to brainstorming, conceptualizing, and
                                    executing branding concepts.
                                </li>
                                <li>
                                    Be upfront about your budget constraints, and ensure that the agency can work within
                                    your financial parameters.
                                </li>
                                <li>
                                    Inquire about the agency&apos;s ability to adapt to these changes and keep your brand
                                    relevant in the long term.
                                </li>
                            </ul>
                        </div>

                        <div class="space-y-6">
                            <h1 class="text-xl sm:text-2xl -mb-2 font-semibold text-black">
                                Conclusion
                            </h1>
                            <p>
                                After considering all the practical factors, trust your instincts when making the final
                                decision. Choose an agency that not only aligns with your goals but also gives you the
                                confidence that they can bring your rebranding vision to life.
                            </p>
                            <p>
                                Picking the right branding agency for your rebranding project is a critical step toward
                                realizing your brand&apos;s full potential. By defining your goals, evaluating experience,
                                checking references, and ensuring a cultural fit, you can make an informed decision that
                                sets your rebrand up for success.
                            </p>
                        </div>
                    </div>
                </div>
                {{-- END BLOG DETAILS --}}

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
                                <button
                                    class="p-3 text-xs uppercase font-semibold border rounded-xl border-gray-200 hover:bg-[#034737] hover:text-white transition-all ease-in-out duration-300">
                                    Creative
                                </button>
                                <button
                                    class="p-3 text-xs uppercase font-semibold border rounded-xl border-gray-200 hover:bg-[#034737] hover:text-white transition-all ease-in-out duration-300">
                                    Enterprise
                                </button>
                                <button
                                    class="p-3 text-xs uppercase font-semibold border rounded-xl border-gray-200 hover:bg-[#034737] hover:text-white transition-all ease-in-out duration-300">
                                    Internet
                                </button>
                                <button
                                    class="p-3 text-xs uppercase font-semibold border rounded-xl border-gray-200 hover:bg-[#034737] hover:text-white transition-all ease-in-out duration-300">
                                    Mobile
                                </button>
                                <button
                                    class="p-3 text-xs uppercase font-semibold border rounded-xl border-gray-200 hover:bg-[#034737] hover:text-white transition-all ease-in-out duration-300">
                                    Popular
                                </button>
                                <button
                                    class="p-3 text-xs uppercase font-semibold border rounded-xl border-gray-200 hover:bg-[#034737] hover:text-white transition-all ease-in-out duration-300">
                                    Startup
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- END SIDEBAR --}}
            </div>

            {{-- RELATED POSTS SECTION --}}
            <div class="mt-16 space-y-8">
                <h1 class="text-xl sm:text-2xl -mb-2 font-semibold text-black">
                    Related posts
                </h1>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 max-w-3xl">
                    <x-related-blog-card imgURL="./images/blogs/blog-2.jpg" tags="Insights, Marketing"
                        title="Challenges of creating and structuring a multi-brand system"
                        description="The concept of a multi-brand system has gained traction, allowing businesses to manage various brands."
                        date="August 21, 2023" author="author" readtime="1" />
                    <x-related-blog-card imgURL="./images/blogs/blog-3.jpg" tags="Guides, Software"
                        title="The complete guide to unlocking your team's power and potential"
                        description="When everyone understands and believes in the shared goal, they are motivated to work cohesively."
                        date="August 21, 2023" author="author" readtime="2" />
                </div>
            </div>
            {{-- END RELATED POSTS SECTION --}}
        </div>
    </section>

    {{-- END BLOG POSTS AND SIDEBAR --}}
@endsection
