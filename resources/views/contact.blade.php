@extends('Layout/MainLayout')

@section('maincontent')
    {{-- CONTACT US SECTION --}}

    <section class="bg-white">
        <div class="max-w-screen-xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-24 lg:gap-4">
                <div class="ps-6 sm:ps-8 lg:ps-10 pe-6 sm:pe-8 lg:pe-24 max-lg:pt-24 space-y-10">
                    <div class="space-y-4">
                        <div class="w-fit px-3 py-1 rounded-full bg-lime-900/5">
                            <p class="font-medium text-[0.925rem]">
                                Contact Us
                            </p>
                        </div>
                        <div class="">
                            <h1
                                class="text-[2rem] sm:text-[2.8rem] lg:text-[3.2rem] leading-[1.2] font-semibold tracking-tight">
                                We're here for you
                            </h1>
                        </div>
                        <div class="">
                            <p class="lg:text-lg text-gray-500">
                                Have a question or feedback? Fill out the form below, and we'll get back to you as soon as
                                possible.
                            </p>
                        </div>
                    </div>
                    <div>
                        <form action="#" method="POST">
                            <div class="flex flex-col gap-4">
                                <input type="text" name="name" id="name" placeholder="Name"
                                    class="p-4 rounded-xl outline-none bg-lime-900/5">
                                <input type="email" name="email" id="email" placeholder="Email address"
                                    class="p-4 rounded-xl outline-none bg-lime-900/5">
                                <textarea name="message" id="message" placeholder="Message" rows="6"
                                    class="p-4 rounded-xl outline-none bg-lime-900/5"></textarea>

                                <button type="submit"
                                    class="py-4 rounded-xl font-medium bg-[#034737] text-white hover:bg-black transition ease-in-out duration-300">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="h-[40rem] lg:h-[58rem] bg-lime-900/10">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.393797064881!2d70.78368670930563!3d22.263067894162294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca5dbb9dce8b%3A0xb806abb2548939fb!2sMavdi%20Chowkdi%2C%20Rajkot%2C%20Gujarat%20360004!5e0!3m2!1sen!2sin!4v1724404944479!5m2!1sen!2sin"
                        style="border:0" allowfullscreen width="100%" height="100%" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </section>

    {{-- END CONTACT US SECTION --}}

    {{-- HELP CENTER SECTION --}}
    <section class="bg-[#034737] text-white">
        <div class="max-w-screen-xl mx-auto pt-24 px-6 lg:px-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 items-center max-sm:gap-6">
                <div class="space-y-4 max-sm:pe-0 lg:pe-12">
                    <div class="w-fit px-3 py-1 rounded-full bg-white/10">
                        <p class="font-medium text-[0.925rem]">
                            Help Center
                        </p>
                    </div>
                    <div class="">
                        <h1
                            class="text-[1.5rem] sm:text-[2.25rem] lg:text-[2.75rem] leading-[1.2] font-semibold tracking-tight">
                            Looking for support?
                        </h1>
                    </div>
                    <div class="">
                        <p class="max-sm:text-base lg:text-lg max-sm:tracking-tight text-gray-200">
                            We understand that sometimes you need a helping hand. Find the assistance you need below.
                        </p>
                    </div>
                </div>
                <div class="ps-4 max-sm:ps-0 lg:ps-16">
                    <p class="text-sm lg:text-base leading-[1.8] max-sm:tracking-tight">
                        We offer a range of comprehensive support options to assist you every step of the way. Whether you
                        have a technical question, need guidance on using our features, or want to connect with fellow
                        users, we've got you covered.
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-3 mt-10 lg:gap-8 gap-4">
                <div class="space-y-4 p-6 lg:p-10 rounded-xl bg-white/5" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-4xl">
                        <i class="fa-regular fa-message"></i>
                    </div>
                    <div class="space-y-2">
                        <h1 class="text-xl lg:text-2xl font-semibold">Support center</h1>
                        <p class="text-sm lg:text-base max-lg:tracking-tight leading-relaxed text-gray-200">
                            Find instant answers to common queries. We've compiled a
                            wealth of resources to guide you.
                        </p>
                    </div>
                    <div class="font-semibold">
                        <a href="#">Check it out</a>
                    </div>
                </div>
                <div class="space-y-4 p-6 lg:p-10 rounded-xl bg-white/5" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-4xl">
                        <i class="fa-solid fa-list"></i>
                    </div>
                    <div class="space-y-2">
                        <h1 class="text-xl lg:text-2xl font-semibold">Developer guides</h1>
                        <p class="text-sm lg:text-base max-lg:tracking-tight leading-relaxed text-gray-200">
                            Detailed documentation, code samples, and best practices to
                            help you enhance your projects.
                        </p>
                    </div>
                    <div class="font-semibold">
                        <a href="#">Check it out</a>
                    </div>
                </div>
                <div class="space-y-4 p-6 lg:p-10 rounded-xl bg-white/5" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-4xl">
                        <i class="fa-solid fa-earth-africa"></i>
                    </div>
                    <div class="space-y-2">
                        <h1 class="text-xl lg:text-2xl font-semibold">Community</h1>
                        <p class="text-sm lg:text-base max-lg:tracking-tight leading-relaxed text-gray-200">
                            Connect with fellow users, share your experiences, and
                            learn from others in our vibrant community forum.
                        </p>
                    </div>
                    <div class="font-semibold">
                        <a href="#">Check it out</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- END HELP CENTER SECTION --}}
@endsection
