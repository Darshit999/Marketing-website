@extends('Layout/MainLayout')

@section('maincontent')
    {{-- START HERO SECTION --}}

    <section class="bg-lime-700/5 overflow-hidden">
        <div class="relative max-w-screen-2xl mx-auto">
            <div class="flex flex-col py-24 px-6 gap-4 justify-center items-center">
                <div class="px-4 py-1 rounded-full bg-white">
                    <p class="font-medium text-[0.925rem] text-gray-700">
                        AI Powered Whatsapp Marketing Tool
                    </p>
                </div>

                <div class="max-w-xl text-center">
                    <h1 class="text-3xl sm:text-5xl lg:text-6xl font-semibold tracking-tight leading-[1.20]">
                        <span class="relative">
                            Revolutionize
                            <span class="absolute bottom-0 left-0 w-full h-6 bg-[#A9FF9B] -z-50 transition-all ease-in-out duration-500"></span>
                        </span>
                        the way you connect with your audience
                    </h1>
                </div>

                <div class="max-w-xl text-center">
                    <p class="lg:text-lg text-md leading-relaxed text-gray-700">
                        Elevate sales and stay ahead in the competitive market by being
                        among the first to benefit from our game-changing solutions.
                    </p>
                </div>

                <div class="flex items-center mt-4">
                    <x-primary-button>Start 7-day free trial</x-primary-button>
                    <button class="items-center px-6 font-medium gap-2 group/btn sm:flex hidden" variant="ghost">
                        <span
                            class="flex justify-center items-center text-xs size-12 rounded-full border-2 border-green-900 text-green-900 group-hover/btn:bg-green-900 group-hover/btn:text-white transition">
                            <i class="fa-solid fa-play"></i>
                        </span>
                        How it works
                    </button>
                </div>
            </div>

            <div class="hidden lg:block">
                <img src="./images/user-1.png" alt="User-1" width="250" height="250"
                    class="absolute -bottom-16 right-72" data-aos="fade-up" />
                <img src="./images/user-2.png" alt="User-2" width="280" height="280"
                    class="absolute -bottom-44 left-28" data-aos="fade-up" />
                <img src="./images/user-3.png" alt="User-3" width="80"height="80" class="absolute -bottom-32 left-16"
                    data-aos="fade-up" />
                <img src="./images/user-4.png" alt="User-4" width="150" height="150"
                    class="absolute -bottom-24 right-16" data-aos="fade-up" />
            </div>
        </div>
    </section>

    <section class="relative">
        <div class="relative z-50 max-w-screen-2xl mx-auto px-6" data-aos="fade-up">
            <img src="./images/hero.png" alt="Hero" width={2000} height={2000} class="shadow-md rounded-xl" />
        </div>
        <div class="absolute w-full h-1/2 bg-lime-700/5 top-0"></div>
        <div class="absolute w-full h-1/2 bg-[#034737] bottom-0"></div>
    </section>

    {{-- END HERO SECTION --}}

    {{-- Customer Data Platform --}}

    <section class="bg-[#034737] text-white">
        <div class="max-w-screen-xl mx-auto lg:px-12 px-6 py-24">
            <div class="grid sm:grid-cols-2 grid-cols-1 items-center sm:gap-0 gap-6">
                <div class="flex flex-col gap-4 lg:pe-20">
                    <div class="w-fit px-3 py-1 rounded-full bg-white/10">
                        <p class="font-medium text-[0.925rem]">
                            Customer Data Platform
                        </p>
                    </div>
                    <div class="max-w-xl">
                        <h1
                            class="text-[1.5rem] sm:text-[2.25rem] lg:text-[2.75rem] leading-tight font-semibold tracking-tight">
                            Elevate your brand with our marketing magic
                        </h1>
                    </div>
                    <div class="max-w-md">
                        <p class="text-base lg:text-lg">
                            Explore our diverse industry solutions, meticulously crafted to
                            meet the unique demands.
                        </p>
                    </div>
                </div>

                <div class="ps-0 sm:ps-6 lg:ps-16">

                    <div class="flex items-center justify-center" data-aos="fade-up">
                        <div x-data="{ openTab: 1 }">
                            <div
                                class="mb-6 flex flex-col lg:flex-row font-semibold text-lg rounded-xl overflow-hidden shadow-md bg-white/5">
                                <button x-on:click="openTab = 1" :class="{ 'bg-[#A9FF9B] text-green-900': openTab === 1 }"
                                    class="flex-1 py-3 outline-none transition-all duration-300">
                                    Agency
                                </button>
                                <button x-on:click="openTab = 2" :class="{ 'bg-[#A9FF9B] text-green-900': openTab === 2 }"
                                    class="flex-1 py-3 outline-none transition-all duration-300">
                                    e-Commerce
                                </button>
                                <button x-on:click="openTab = 3" :class="{ 'bg-[#A9FF9B] text-green-900': openTab === 3 }"
                                    class="flex-1 py-3 outline-none transition-all duration-300">
                                    Enterprise
                                </button>
                            </div>

                            <div x-show="openTab === 1" class="leading-relaxed tracking-tight">
                                <p>
                                    A wonderful serenity has taken possession of my entire soul, like these sweet
                                    mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm
                                    of existence in this spot, which was created for the bliss of souls like mine. I am
                                    so happy, my dear friend, so absorbed.
                                </p>
                            </div>

                            <div x-show="openTab === 2" class="leading-relaxed tracking-tight">
                                <p>
                                    His many legs, pitifully thin compared with the size of the rest of him, waved about
                                    helplessly as he looked. “What's happened to me?” he thought. It wasn’t a dream. His
                                    room, a proper human room although a little too small, lay peacefully between its
                                    four familiar walls a collection of textile.
                                </p>
                            </div>

                            <div x-show="openTab === 3" class="leading-relaxed tracking-tight">
                                <p>
                                    It is a paradisematic country, in which roasted parts of sentences fly into your
                                    mouth. Even the all-powerful Pointing has no control about the blind texts it is an
                                    almost unorthographic life One day however a small line of blind text by the name of
                                    decided to leave for the far World of Grammar.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="flex sm:flex-row flex-col mt-20 sm:items-center gap-12">
                <div class="flex flex-1 flex-col gap-2">
                    <h1 class="text-5xl font-semibold">
                        3000 <sup class="text-[#A9FF9B]">+</sup>
                    </h1>
                    <p class="font-medium">Clients Served</p>
                </div>
                <div class="flex flex-1 flex-col gap-2">
                    <h1 class="text-5xl font-semibold">
                        98 <sup class="text-[#A9FF9B]">%</sup>
                    </h1>
                    <p class="font-medium">Customer Satisfaction</p>
                </div>
                <div class="flex flex-1 flex-col gap-2">
                    <h1 class="text-5xl font-semibold">
                        25 <sup class="text-[#A9FF9B]">%</sup>
                    </h1>
                    <p class="font-medium">Engagement Increase</p>
                </div>
                <div class="flex flex-1 flex-col gap-2">
                    <h1 class="text-5xl font-semibold">
                        40 <sup class="text-[#A9FF9B]">%</sup>
                    </h1>
                    <p class="font-medium">Time Saved</p>
                </div>
            </div>
        </div>
    </section>

    {{-- End Customer Data Platform --}}

    {{-- SALES SECTION --}}

    <section>
        <div class="max-w-screen-xl mx-auto lg:px-12 px-6 pt-36 pb-24">
            <div class="flex flex-col gap-36">
                <div class="grid grid-cols-1 sm:grid-cols-2 items-center gap-8 sm:gap-0">
                    <div class="">
                        <div class="flex flex-col gap-4 lg:pe-20 pe-10">
                            <div class="w-fit px-3 py-1 rounded-full bg-green-600/5">
                                <p class="font-medium text-[0.925rem]">
                                    Marketing Solutions
                                </p>
                            </div>
                            <div class="max-w-xl">
                                <h1
                                    class="text-[1.5rem] sm:text-[2.25rem] lg:text-[2.75rem] leading-tight font-semibold tracking-tight">
                                    Drive more sales, analyze performance
                                </h1>
                            </div>
                            <div class="max-w-md">
                                <p class="lg:text-lg">
                                    From lead generation to conversion, our app covers every
                                    aspect of your marketing journey.
                                </p>
                            </div>
                            <div class="mt-8">
                                <x-primary-button>Get started now</x-primary-button>
                            </div>
                        </div>
                    </div>
                    <div class="relative rounded-lg lg:bg-lime-900/5" data-aos="fade-up">
                        <img src="./images/marketing-1.png" alt="Marketing" width='1000' height='1000'
                            class="lg:relative bottom-12 right-12 rounded-xl border border-gray-200" />
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 items-center gap-8 sm:gap-0">
                    <div class="relative order-2 sm:order-1 rounded-lg lg:bg-lime-900/5" data-aos="fade-up">
                        <img src="./images/marketing-2.png" alt="Marketing" width='1000' height='1000'
                            class="lg:relative bottom-10 left-10 rounded-xl border border-gray-200" />
                    </div>
                    <div class="order-1 sm:order-2">
                        <div class="flex flex-col gap-4 ps-0 sm:ps-10 lg:ps-32">
                            <div class="w-fit px-3 py-1 rounded-full bg-green-600/5">
                                <p class="font-medium text-[0.925rem]">
                                    Predictive Analytics
                                </p>
                            </div>
                            <div class="max-w-xl">
                                <h1
                                    class="text-[1.5rem] sm:text-[2.25rem] lg:text-[2.75rem] leading-tight font-semibold tracking-tight">
                                    Acquire and retain more customers
                                </h1>
                            </div>
                            <div class="max-w-md">
                                <p class="lg:text-lg">
                                    Understand customer behavior, campaign effectiveness,
                                    empowering data-driven decisions
                                </p>
                            </div>
                            <div class="mt-8">
                                <x-primary-button>Get started now</x-primary-button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- END SALES SECTION --}}

    {{-- TOOL INTEGRATION SECTION --}}

    <section class="bg-lime-900/5">
        <div class="max-w-screen-xl mx-auto py-24 px-6">
            <div class="flex justify-center">
                <div class="flex flex-col sm:items-center gap-4">
                    <div class="w-fit px-3 py-1 rounded-full bg-white">
                        <p class="font-medium text-[0.925rem]">
                            Seamless Tool Integration
                        </p>
                    </div>
                    <div class="lg:max-w-2xl sm:text-center">
                        <h1
                            class="text-[1.5rem] sm:text-[2.25rem] lg:text-[2.75rem] leading-[1.20] font-semibold tracking-tight">
                            Integrate effortlessly with your favorite tools
                        </h1>
                    </div>
                    <div class="max-w-xl sm:text-center">
                        <p class="lg:text-lg">
                            Elevate sales and stay ahead in the competitive market by being
                            among the first to benefit from our game-changing solutions.
                        </p>
                    </div>
                    <div class="mt-8">
                        <x-primary-button>See all integrations</x-primary-button>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-5  mt-12 gap-6">
                <div class="h-32 flex-1 bg-white" data-aos="fade-up" data-aos-delay="100"></div>
                <div class="h-32 flex-1 bg-white" data-aos="fade-up" data-aos-delay="200"></div>
                <div class="h-32 flex-1 bg-white" data-aos="fade-up" data-aos-delay="300"></div>
                <div class="h-32 flex-1 bg-white" data-aos="fade-up" data-aos-delay="400"></div>
                <div class="h-32 flex-1 bg-white" data-aos="fade-up" data-aos-delay="500"></div>
            </div>
        </div>
    </section>

    {{-- END TOOL INTEGRATION SECTION --}}

    {{-- TESTIMONIALS --}}

    <section class="bg-[#034737] text-white">
        <div class="max-w-screen-xl mx-auto py-24 px-6">
            <div class="flex justify-center">
                <div class="flex flex-col sm:items-center gap-4">
                    <div class="w-fit px-3 py-1 rounded-full bg-white/10">
                        <p class="font-medium text-[0.925rem]">
                            Customer Testimonials
                        </p>
                    </div>
                    <div class="sm:w-full w-2/3 sm:text-center">
                        <h1 class="text-2xl sm:text-4xl lg:text-[2.75rem] leading-[1.20] font-semibold tracking-tight">
                            Hear from our satisfied customers
                        </h1>
                    </div>
                    <div class="max-w-xl sm:text-center">
                        <p class="lg:text-lg text-gray-200">
                            The best way to showcase our commitment is through the
                            experiences and stories of those who have partnered with us.
                        </p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-3 mt-10 lg:gap-8 gap-4">
                <div data-aos="fade-up" data-aos-delay="100">
                    <x-testimonial-card
                        review="The A/B testing helped us refine our email campaigns, resulting in a huge increase in open rates."
                        imgURL="./images/client/client1.jpg" customerName="Frederic Hill" customerRole="Founder & CEO"
                        title="+ 120 %" description="Increase in ad awareness in the first month" />
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <x-testimonial-card
                        review="Our social media engagement soared within the first month of using this software."
                        imgURL="./images/client/client2.jpg" customerName="Safaa Sampson"
                        customerRole="Account Executive" title="+ 10 k"
                        description="New followers in the last 4 months" />
                </div>
                <div data-aos="fade-up" data-aos-delay="300">
                    <x-testimonial-card
                        review="This software allowed us to increase our lead generation, leading to a rise in conversions."
                        imgURL="./images/client/client3.jpg" customerName="Brendan Buck" customerRole="Marketing Manager"
                        title="+ 50 %" description="Increase in paid bookings vs last year" />
                </div>
            </div>
        </div>
    </section>

    {{-- END TESTIMONIALS --}}

    {{-- SOCIAL MEDIA MANAGEMENT SECTION --}}

    <section class="bg-lime-900/5">
        <div class="max-w-screen-xl mx-auto py-24 lg:px-12 px-6">
            <div class="flex flex-col gap-36">
                <div class="grid grid-cols-1 sm:grid-cols-2 items-center gap-12 sm:gap-0">
                    <div class="">
                        <div class="flex flex-col gap-4 pe-0 sm:pe-6 lg:pe-20">
                            <div class="w-fit px-3 py-1 rounded-full bg-white">
                                <p class="font-medium text-[0.925rem]">
                                    Social Media Management
                                </p>
                            </div>
                            <div class="max-w-[30rem]">
                                <h1
                                    class="text-[1.5rem] sm:text-[2.25rem] lg:text-[2.75rem] leading-[1.20] font-semibold tracking-tight">
                                    Stay consistent, engage your audience, and save time
                                </h1>
                            </div>
                            <div class="max-w-md">
                                <p class="lg:text-lg text-gray-500">
                                    Manage your social media presence effortlessly with our
                                    integrated scheduler feature.
                                </p>
                            </div>
                            <div class="flex flex-col gap-4 mt-8" data-aos="fade-up">
                                <x-faq-card title="1. Optimized posting times"
                                    description="Our AI-driven scheduler suggests the best posting times for your audience, maximizing engagement and reach." />
                                <x-faq-card title="2. Content calendar visibility"
                                    description="Visualize your content calendar, making it easy to plan, edit, and collaborate on posts with your team." />
                                <x-faq-card title="3. Scheduling made simple"
                                    description="Plan your posts ahead, ensuring consistent communication with your audience. Schedule weeks of content in just a few clicks." />
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end" data-aos="fade-up">
                        <img src="./images/post-schedule.png" alt="Marketing" width='550' height='550'
                            class="rounded-xl border border-gray-200" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- END SOCIAL MEDIA MANAGEMENT SECTION --}}

    {{-- PRICING SECTION --}}

    <section class="bg-white">
        <div class="max-w-screen-xl mx-auto py-24 px-6">
            <div class="flex justify-center">
                <div class="flex flex-col items-center gap-4">
                    <div class="w-fit px-3 py-1 rounded-full bg-lime-900/5">
                        <p class="font-medium text-[0.925rem]">Flexible Pricing</p>
                    </div>
                    <div class="max-w-2xl text-center">
                        <h1 class="text-2xl sm:text-4xl lg:text-[2.75rem] leading-[1.20] font-semibold tracking-tight">
                            Flexible pricing plans. Any scale.
                        </h1>
                    </div>
                    <div class="max-w-xl text-center">
                        <p class="lg:text-lg text-gray-500">
                            Whether youre an individual, a small team, or a growing
                            enterprise, we have a plan that aligns perfectly with your
                            goals.
                        </p>
                    </div>
                    <div class="mt-8"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- END PRICING SECTION --}}

    {{-- NEWS AND BLOGS SECTION --}}

    <section class="bg-lime-900/5">
        <div class="max-w-screen-xl mx-auto py-24 px-6">
            <div class="flex justify-center">
                <div class="flex flex-col sm:items-center gap-4">
                    <div class="w-fit px-3 py-1 rounded-full bg-white">
                        <p class="font-medium text-[0.925rem]">Latest News</p>
                    </div>
                    <div class="max-w-2xl sm:text-center">
                        <h1 class="text-2xl sm:text-4xl lg:text-[2.75rem] leading-[1.20] font-semibold tracking-tight">
                            News and stories center
                        </h1>
                    </div>
                    <div class="max-w-xl sm:text-center">
                        <p class="lg:text-lg text-gray-500">
                            Explore insightful content that keeps you ahead of the curve to
                            the pulse of whats happening.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
                        <x-small-blog-card imgURL="./images/blogs/blog-1.jpg"
                            title="A quick guide to picking the right branding agency for your rebrand"
                            description="When evaluating potential agencies, consider their expertise in various aspects of branding and design."
                            url="/blog1" />
                        <x-small-blog-card imgURL="./images/blogs/blog-2.jpg"
                            title="Challenges of creating and structuring a multi-brand system"
                            description="The concept of a multi-brand system has gained traction, allowing businesses to manage various brands."
                            url="/blog2" />
                        <x-small-blog-card imgURL="./images/blogs/blog-3.jpg"
                            title="How to build ground-breaking products: a manager's guide"
                            description="Embarking on a rebranding journey for your business is an exciting yet challenging endeavor."
                            url="/blog2" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- END NEWS AND BLOGS SECTION --}}

    {{-- GET STARTED SECTION --}}

    <section class="bg-[#034737]">
        <div class="max-w-screen-xl mx-auto pt-24 px-6 sm:px-10">
            <div class="flex justify-center">
                <div class="w-full py-24 px-6 rounded-xl bg-[#F4F7F3]" data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
                    <div class="flex flex-col sm:items-center gap-4">
                        <div class="w-fit px-3 py-1 rounded-full bg-white">
                            <p class="font-medium text-[0.925rem]">Launch Today</p>
                        </div>
                        <div class="max-w-2xl sm:text-center">
                            <h1
                                class="text-[1.5rem] sm:text-[2.25rem] lg:text-[2.75rem] leading-[1.20] font-semibold tracking-tight">
                                Ready to elevate your game? Start your 7-day free trial today.
                            </h1>
                        </div>
                        <div class="max-w-xl sm:text-center">
                            <p class="lg:text-lg">
                                Experience the ease of automation, the power of analytics, and
                                the impact of seamless integration. Your journey begins now!
                            </p>
                        </div>
                        <div class="mt-8">
                            <x-primary-button>Start 7-day free trial</x-primary-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- END GET STARTED SECTION --}}
@endsection
