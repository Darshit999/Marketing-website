@extends('Layout/MainLayout')

@section('maincontent')
    {{-- HERO SECTION --}}

    <section class="bg-lime-700/5 overflow-hidden" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-offset="0">
        <div class="relative max-w-screen-2xl mx-auto">
            <div class="flex flex-col py-28 px-6 gap-4 justify-center items-center">
                <div class="max-w-2xl text-center">
                    <h1 class="text-3xl sm:text-5xl font-semibold tracking-tight leading-[1.20]">
                        <span>Fair pricing </span>
                        for any business
                    </h1>
                </div>

                <div class="max-w-xl text-center">
                    <p class="lg:text-lg text-md leading-relaxed text-gray-700">
                        Whether youre an individual, a small team, or a growing
                        enterprise, we have a plan that aligns perfectly with your goals.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- END HERO SECTION --}}

    {{-- PRICING CARD SECTION --}}

    <section class="bg-lime-700/5 overflow-hidden">
        <div class="relative max-w-screen-2xl mx-auto">
            <div class="absolute bottom-0 h-1/2 w-full bg-white"></div>
            <div class="relative grid grid-cols-1 sm:grid-cols-3 gap-4 px-6 lg:px-12 z-50">
                <div class="flex flex-col gap-8 px-6 lg:px-8 py-10 border rounded-lg bg-white border-gray-200"
                    data-aos="fade-up" data-aos-delay="100">
                    <div>
                        <h1 class="font-semibold text-xl lg:text-2xl text-black">Personal</h1>
                    </div>
                    <div>
                        <ul class="flex flex-col gap-6 font-medium text-sm lg:text-base">
                            <li>
                                Task management, collaboration tools, and basic reporting
                            </li>
                            <li>Efficient organization and streamlined communication</li>
                            <li>Users can manage up to 5 projects</li>
                        </ul>
                    </div>
                    <div class="flex items-end gap-2">
                        <h1 class="font-semibold text-2xl sm:text-4xl">
                            <sup>$</sup>19
                        </h1>
                        <p class="font-semibold">/month</p>
                    </div>
                    <div>
                        <button
                            class="w-full h-14 rounded-xl font-semibold text-green-900 bg-lime-900/5 hover:bg-black hover:text-white transition-all ease-in-out duration-300">
                            Purchase now
                        </button>
                    </div>
                </div>

                <div class="flex flex-col gap-8 px-6 lg:px-8 py-10 border rounded-lg bg-white border-gray-200"
                    data-aos="fade-up" data-aos-delay="200">
                    <div>
                        <h1 class="font-semibold text-xl lg:text-2xl text-green-900">
                            Professional
                        </h1>
                    </div>
                    <div>
                        <ul class="flex flex-col gap-6 font-medium text-sm lg:text-base">
                            <li>
                                Advanced reporting, priority support, and customization
                                options
                            </li>
                            <li>
                                Better insights, tailored workflows, and enhanced
                                collaboration
                            </li>
                            <li>Users can manage up to 15 projects</li>
                        </ul>
                    </div>
                    <div class="flex items-end gap-2">
                        <h1 class="font-semibold text-2xl sm:text-4xl">
                            <sup>$</sup>49
                        </h1>
                        <p class="font-semibold">/month</p>
                    </div>
                    <div>
                        <button
                            class="w-full h-14 rounded-xl font-semibold bg-[#034737] text-white hover:bg-black transition-all ease-in-out duration-300">
                            Purchase now
                        </button>
                    </div>
                </div>

                <div class="flex flex-col gap-8 px-6 lg:px-8 py-10 border rounded-lg bg-white border-gray-200"
                    data-aos="fade-up" data-aos-delay="300">
                    <div>
                        <h1 class="font-semibold text-xl lg:text-2xl text-black">Enterprise</h1>
                    </div>
                    <div>
                        <ul class="flex flex-col gap-6 font-medium text-sm lg:text-base">
                            <li>
                                Real-time analytics, a dedicated account manager, and API
                                access
                            </li>
                            <li>
                                Project management capabilities and strategic decision-making
                            </li>
                            <li>Users can manage unlimited projects</li>
                        </ul>
                    </div>
                    <div class="flex items-end gap-2">
                        <h1 class="font-semibold text-2xl sm:text-4xl">
                            <sup>$</sup>99
                        </h1>
                        <p class="font-semibold">/month</p>
                    </div>
                    <div>
                        <button
                            class="w-full h-14 rounded-xl font-semibold text-green-900 bg-lime-900/5 hover:bg-black hover:text-white transition-all ease-in-out duration-300">
                            Purchase now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- END PRICING CARD SECTION --}}

    {{-- PRICING TABLE SECTION --}}

    <section class="bg-white overflow-hidden">
        <div class="relative max-w-screen-2xl mx-auto py-28 px-2 sm:px-6 lg:px-12">
            <div class="">
                <div class="grid grid-cols-12 px-2 lg:px-8 py-8 items-center border-b border-t border-gray-200">
                    <div class="col-span-6">
                        <h1 class="text-xl lg:text-2xl font-semibold">Compare plans</h1>
                        <p class="text-sm lg:text-base">Transparent pricing for every stage.</p>
                    </div>
                    <div class="col-span-2 text-center">
                        <h1 class="font-semibold text-base lg:text-lg">Start</h1>
                        <p class="font-semibold text-base lg:text-lg max-sm:hidden">$19 /mo</p>
                    </div>
                    <div class="col-span-2 text-center">
                        <h1 class="font-semibold text-base lg:text-lg">Pro</h1>
                        <p class="font-semibold text-base lg:text-lg max-sm:hidden">$49 /mo</p>
                    </div>
                    <div class="col-span-2 text-center">
                        <h1 class="font-semibold text-base lg:text-lg">Elite</h1>
                        <p class="font-semibold text-base lg:text-lg max-sm:hidden">$99 /mo</p>
                    </div>
                </div>

                <x-pricing-table-row title="Platform fee" description="Amounts being set out in the contract agreement."
                    first="0%" second="5%" third="3%" class="bg-lime-900/5" />
                <x-pricing-table-row title="Selection limit" description="Maximum number of selections the user can make."
                    first="25" second="50" third="75" class="bg-lime-900/5" />
                <x-pricing-table-row title="Monthly users" description="Number of unique users who engage with a product."
                    first="10+" second="20+" third="50+" class="bg-lime-900/5" />
                <x-pricing-table-row title="Time management integration"
                    description="Tackle the right tasks at the right time."
                    first='<i class="fa-regular fa-circle-check"></i>' second='<i class="fa-regular fa-circle-check"></i>'
                    third='<i class="fa-regular fa-circle-check"></i>' />
                <x-pricing-table-row title="Customizable reporting dashboard"
                    description="Analyze and report on business performance."
                    first='<i class="fa-regular fa-circle-check"></i>' second='<i class="fa-regular fa-circle-check"></i>'
                    third='<i class="fa-regular fa-circle-check"></i>' />
                <x-pricing-table-row title="Detailed transaction payloads"
                    description="Report ongoing progress on the given payload." first="-"
                    second='<i class="fa-regular fa-circle-check"></i>'
                    third='<i class="fa-regular fa-circle-check"></i>' />
                <x-pricing-table-row title="Basic registration and ticketing"
                    description="Route requests to increase team productivity." first="-"
                    second='<i class="fa-regular fa-circle-check"></i>'
                    third='<i class="fa-regular fa-circle-check"></i>' />
                <x-pricing-table-row title="Real-time notifications and webhooks"
                    description="Notification service with realtime status tracking." first="-" second="-"
                    third='<i class="fa-regular fa-circle-check"></i>' />
            </div>
            <div class="flex flex-col sm:flex-row justify-end pt-6 gap-4">
                <x-secondary-button variant="secondary" class="px-16">Select Start</x-secondary-button>
                <x-primary-button class="px-16">Select Pro</x-primary-button>
                <x-secondary-button variant="secondary" class="px-16">Select Elite</x-secondary-button>
            </div>
        </div>
    </section>

    {{-- END PRICING TABLE SECTION --}}

    {{-- FAQ SECTION --}}

    <section class="bg-lime-900/5">
        <div class="max-w-screen-xl mx-auto py-24 px-6">
            <div class="flex justify-center">
                <div class="flex flex-col sm:items-center gap-4">
                    <div class="w-fit px-3 py-1 rounded-full bg-white">
                        <p class="font-medium text-[0.925rem]">
                            Frequently Asked Questions
                        </p>
                    </div>
                    <div class="sm:text-center">
                        <h1 class="text-2xl sm:text-4xl lg:text-[2.75rem] leading-[1.20] font-semibold tracking-tight">
                            All the answers youre looking for
                        </h1>
                    </div>
                    <div class="max-w-xl sm:text-center">
                        <p class="lg:text-lg">
                            If youre new or looking for answers to your questions, this
                            guide will help you learn more about our services and their
                            features.
                        </p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 mt-8 gap-6">
                <div class="flex flex-col gap-4">
                    <x-faq-card title="1. Is there a free trial available?"
                        description="Yes, you can try us for free for 30 days. If you want, we'll provide you with a free 30-minute onboarding call to get you up and running." />
                    <x-faq-card title="2. Can I change my plan later?"
                        description="Of course you can! Our pricing scales with your company. Chat to our friendly team to find a solution that works for you as you grow." />
                    <x-faq-card title="3. What is your cancellation policy?"
                        description="understand that things change. You can cancel your plan at any time and we'll refund you the difference already paid." />
                </div>
                <div class="flex flex-col gap-4">
                    <x-faq-card title="4. Can info be added to an invoice?"
                        description="At the moment, the only way to add additional information to invoices is to add the information to the workspace's name manually." />
                    <x-faq-card title="5. How does billing work?"
                        description="Plans are per workspace, not per account. You can upgrade one workspace, and still have any number of free workspaces." />
                    <x-faq-card title="6. How do I change my account email?"
                        description="You can change the email address associated with your account by going to untitled.com/account from a laptop or desktop." />
                </div>
            </div>
        </div>
    </section>

    {{-- END FAQ SECTION --}}

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

    {{-- END GET STARTED SECTION --}}
@endsection
