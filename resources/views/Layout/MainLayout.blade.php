<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body id="my-scrollbar">
    <header class="relative py-4 px-6 sm:px-12 bg-white">
        <nav class="max-w-screen-xl flex items-center justify-between mx-auto">
            <div class="flex flex-1 text-4xl font-semibold">
                <a href="/" class="h-10 outline-none">
                    <img src="./images/logo.png" alt="Logo" class="h-full w-full object-contain">
                </a>
            </div>
            <div class="lg:flex hidden flex-1 navbarMenu">
                <ul class="flex max-lg:absolute top-16 left-0 z-50 max-lg:px-12 max-lg:pt-4 max-lg:flex-col max-lg:w-full max-lg:h-screen gap-4 lg:gap-1 font-medium text-black max-lg:bg-white">
                    <li
                        class="">
                        <a href="/services" class="px-3 py-2 rounded-lg hover:bg-green-900/[0.08] hover:text-green-900 transition ease-in-out duration-300">
                            Services
                        </a>
                    </li>
                    <li
                        class="">
                        <a href="/pricing" class="px-3 py-2 rounded-lg hover:bg-green-900/[0.08] hover:text-green-900 transition ease-in-out duration-300">
                            Pricing
                        </a>
                    </li>
                    <li
                        class="">
                        <a href="/blogs" class="px-3 py-2 rounded-lg hover:bg-green-900/[0.08] hover:text-green-900 transition ease-in-out duration-300">
                            Solutions
                        </a>
                    </li>
                    <li
                        class="relative group/submenu">
                        <a href="#" class="px-3 py-2 rounded-lg hover:bg-green-900/[0.08] hover:text-green-900 transition ease-in-out duration-300">
                            Resources
                        </a>
                        <div class="relative lg:absolute pt-4 lg:pt-8 z-50 group-hover/submenu:block hidden">
                            <ul class="w-60 max-lg:ps-4 p-0 lg:p-3 rounded-lg lg:shadow-sm bg-white">
                                <li>
                                    <a href="/blogs"
                                        class="flex px-3 py-2 rounded-lg hover:bg-green-900/[0.08] hover:text-green-900">
                                        Blogs
                                    </a>
                                </li>
                                <li>
                                    <a href="/faq"
                                        class="flex px-3 py-2 rounded-lg hover:bg-green-900/[0.08] hover:text-green-900">
                                        Faq
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li
                        class="">
                        <a href="/contact" class="px-3 py-2 rounded-lg hover:bg-green-900/[0.08] hover:text-green-900 transition ease-in-out duration-300">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
            <div class="lg:flex hidden flex-1 items-center gap-2 justify-end">
                <x-secondary-button>Book Demo</x-secondary-button>
                <x-primary-button>
                    Free Trial
                </x-primary-button>
            </div>
            <div class="lg:hidden">
                <button class="flex items-center text-xl toggleBtn">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </nav>
    </header>

    @yield('maincontent')

    <section class="bg-[#034737] text-white">
        <div class="max-w-screen-xl mx-auto lg:px-10 px-6 pt-24">
            <div class="flex flex-col lg:flex-row gap-10 sm:gap-20 pb-24">
                <div class="flex flex-col sm:flex-row w-full justify-between gap-8 sm:gap-0">
                    <div class="flex flex-col justify-center gap-6">
                        <a href="/" class="h-10">
                            <img src="./images/logo.png" alt="Logo"
                                class="h-full object-contain brightness-0 invert">
                        </a>
                        <p class="sm:max-w-56 text-gray-200 text-sm sm:text-base">
                            Craft stunning sites effortlessly while enjoying real-time
                            customer support.
                        </p>
                    </div>
                    <div class="space-y-4">
                        <h1 class="font-semibold text-base sm:text-lg">Features</h1>
                        <ul class="space-y-3">
                            <li>
                                <a href="#"
                                    class="text-gray-200 hover:text-[#A9FF9B] transition ease-in-out duration-300">
                                    Page builder
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-gray-200 hover:text-[#A9FF9B] transition ease-in-out duration-300">
                                    Theme options
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-gray-200 hover:text-[#A9FF9B] transition ease-in-out duration-300">
                                    Theme Builder
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-gray-200 hover:text-[#A9FF9B] transition ease-in-out duration-300">
                                    Template library
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="space-y-4">
                        <h1 class="font-semibold text-base sm:text-lg">Resources</h1>
                        <ul class="space-y-3">
                            <li>
                                <a href="#"
                                    class="text-gray-200 hover:text-[#A9FF9B] transition ease-in-out duration-300">
                                    Support center
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-gray-200 hover:text-[#A9FF9B] transition ease-in-out duration-300">
                                    Documentation
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-gray-200 hover:text-[#A9FF9B] transition ease-in-out duration-300">
                                    Community
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-gray-200 hover:text-[#A9FF9B] transition ease-in-out duration-300">
                                    Hosting
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="space-y-4">
                        <h1 class="font-semibold text-base sm:text-lg">Company</h1>
                        <ul class="space-y-3">
                            <li>
                                <a href="#"
                                    class="text-gray-200 hover:text-[#A9FF9B] transition ease-in-out duration-300">
                                    About us
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-gray-200 hover:text-[#A9FF9B] transition ease-in-out duration-300">
                                    Careers
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-gray-200 hover:text-[#A9FF9B] transition ease-in-out duration-300">
                                    Press
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-gray-200 hover:text-[#A9FF9B] transition ease-in-out duration-300">
                                    Partners
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="flex flex-col gap-4">
                    <h1 class="font-semibold text-base sm:text-lg">
                        Want to receive news and updates?
                    </h1>
                    <div class="flex flex-col lg:flex-row gap-2">
                        <input type="email" placeholder="Email"
                            class="px-4 py-3 rounded-xl outline-none bg-white/10 placeholder:text-white" />
                        <button
                            class="py-3 px-5 font-medium tracking-tight rounded-xl text-nowrap bg-[#A9FF9B] text-green-900">
                            Stay in the loop
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row items-center justify-between py-7 border-t border-white/10">
                <div class="lg:text-base text-sm font-medium">
                    <p class="text-gray-200">© Liliya. All Rights Reserved.</p>
                </div>
                <div class="lg:text-base text-sm font-medium">
                    <a href="/">Terms & Conditions</a>
                    <a href="/">Privacy Policy</a>
                </div>
            </div>
        </div>
    </section>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <script>
        const hamburger = document.querySelector('.toggleBtn');
        const navMenu = document.querySelector('.navbarMenu');

        hamburger.addEventListener('click', () => {
            navMenu.classList.toggle('hidden');
        });

        let elements = document.querySelectorAll("[data-menu]");
        for (let i = 0; i < elements.length; i++) {
            let main = elements[i];

            main.addEventListener("click", function() {
                let element = main.parentElement.parentElement;
                let indicators = main.querySelectorAll("img");
                let child = element.querySelector("#menu");
                let h = element.querySelector("#mainHeading>div>p");

                h.classList.toggle("font-semibold");
                child.classList.toggle("hidden");
                indicators[0].classList.toggle("rotate-180");
            });
        }
    </script>
</body>

</html>
