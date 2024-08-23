@extends('Layout/MainLayout')

@section('maincontent')
    {{-- HERO SECTION --}}

    <section class="bg-lime-700/5 overflow-hidden">
        <div class="relative max-w-screen-2xl mx-auto">
            <div class="flex flex-col py-28 px-6 gap-4 justify-center items-center">
                <div class="max-w-2xl text-center">
                    <h1 class="text-3xl sm:text-5xl font-semibold tracking-tight leading-[1.20]">
                        Got questions? This way.
                    </h1>
                </div>

                <div class="max-w-xl text-center">
                    <p class="lg:text-lg text-md leading-relaxed text-gray-700">
                        FAQs, quick fixes, and official info on every feature. Cant find
                        your question here, try our
                        <a href="#" class="font-semibold"> support forums.</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- END HERO SECTION --}}

    {{-- FAQ SECTION --}}

    <section class="bg-white">
        <div class="max-w-screen-xl mx-auto py-24 px-6">
            <div class="flex flex-col gap-24">
                <div class="flex flex-col sm:items-center gap-4">
                    <div class="sm:text-center">
                        <h1 class="text-2xl sm:text-4xl leading-[1.20] font-semibold tracking-tight">
                            General questions
                        </h1>
                    </div>
                    <div class="max-w-4xl sm:text-center">
                        <p class="lg:text-lg">
                            Discover the basics of WordPress themes, including their
                            importance for creating a unique web presence, compatibility
                            with the latest WordPress version, usage of demo content, and
                            assistance for theme installation.
                        </p>
                    </div>
                    <div class="flex flex-col gap-4 max-w-4xl w-full mt-6">
                        <x-faq-card title="1. What is a WordPress theme, and why do I need one?"
                            description="Cras eget leo in quam euismod viverra et luctus tellus. Nullam porta euismod est sodales cursus. In lacinia, mauris quis volutpat tempor, nulla turpis vulputate magna, ut elementum turpis leo vel libero." />
                        <x-faq-card title="2. Are your themes compatible with the latest version of WordPress?"
                            description="Ut in vestibulum risus, ut tincidunt sem. Morbi molestie egestas felis, consequat mattis magna suscipit non. Proin ex enim, faucibus sit amet odio vestibulum, condimentum egestas libero." />
                        <x-faq-card title="3. Can I use your themes on multiple websites?"
                            description="Cras eget leo in quam euismod viverra et luctus tellus. Nullam porta euismod est sodales cursus. In lacinia, mauris quis volutpat tempor, nulla turpis vulputate magna, ut elementum turpis leo vel libero." />
                        <x-faq-card title="4. Do your themes include demo content like in the previews?"
                            description="Cras eget leo in quam euismod viverra et luctus tellus. Nullam porta euismod est sodales cursus. In lacinia, mauris quis volutpat tempor, nulla turpis vulputate magna, ut elementum turpis leo vel libero.Ut in vestibulum risus, ut tincidunt sem. Morbi molestie egestas felis, consequat mattis magna suscipit non. Proin ex enim, faucibus sit amet odio vestibulum, condimentum egestas libero." />
                        <x-faq-card title="5. What happens if I encounter issues during theme installation or setup?"
                            description="Cras eget leo in quam euismod viverra et luctus tellus. Nullam porta euismod est sodales cursus. In lacinia, mauris quis volutpat tempor, nulla turpis vulputate magna, ut elementum turpis leo vel libero." />
                    </div>
                </div>

                <div class="flex flex-col sm:items-center gap-4">
                    <div class="sm:text-center">
                        <h1 class="text-2xl sm:text-4xl leading-[1.20] font-semibold tracking-tight">
                            License usage
                        </h1>
                    </div>
                    <div class="max-w-4xl sm:text-center">
                        <p class="lg:text-lg">
                            Learn about using our themes on client websites, customizing
                            theme code and design, renewal of theme licenses, restrictions
                            on license transfers, and compatibility with self-hosted
                            sites.
                        </p>
                    </div>
                    <div class="flex flex-col gap-4 max-w-4xl w-full mt-6">
                        <x-faq-card title="1. Can I use your themes on client websites?"
                            description="Cras eget leo in quam euismod viverra et luctus tellus. Nullam porta euismod est sodales cursus. In lacinia, mauris quis volutpat tempor, nulla turpis vulputate magna, ut elementum turpis leo vel libero." />
                        <x-faq-card title="2. Can I modify the theme code and design to suit my needs?"
                            description="Ut in vestibulum risus, ut tincidunt sem. Morbi molestie egestas felis, consequat mattis magna suscipit non. Proin ex enim, faucibus sit amet odio vestibulum, condimentum egestas libero." />
                        <x-faq-card title="3. Do I need to renew my license annually?"
                            description="Cras eget leo in quam euismod viverra et luctus tellus. Nullam porta euismod est sodales cursus. In lacinia, mauris quis volutpat tempor, nulla turpis vulputate magna, ut elementum turpis leo vel libero." />
                        <x-faq-card title="4. Can I transfer my theme license to another person or website?"
                            description="Cras eget leo in quam euismod viverra et luctus tellus. Nullam porta euismod est sodales cursus. In lacinia, mauris quis volutpat tempor, nulla turpis vulputate magna, ut elementum turpis leo vel libero.Ut in vestibulum risus, ut tincidunt sem. Morbi molestie egestas felis, consequat mattis magna suscipit non. Proin ex enim, faucibus sit amet odio vestibulum, condimentum egestas libero." />
                        <x-faq-card title="5. Can I use your themes on a WordPress.com site?"
                            description="Cras eget leo in quam euismod viverra et luctus tellus. Nullam porta euismod est sodales cursus. In lacinia, mauris quis volutpat tempor, nulla turpis vulputate magna, ut elementum turpis leo vel libero." />
                    </div>
                </div>

                <div class="flex flex-col sm:items-center gap-4">
                    <div class="sm:text-center">
                        <h1 class="text-2xl sm:text-4xl leading-[1.20] font-semibold tracking-tight">
                            Support & updates
                        </h1>
                    </div>
                    <div class="max-w-4xl sm:text-center">
                        <p class="lg:text-lg">
                            Explore the support and updates that come with your theme
                            purchase, including the duration of access, the type of
                            support offered, how to seek assistance for theme-related
                            issues.
                        </p>
                    </div>
                    <div class="flex flex-col gap-4 max-w-4xl w-full mt-6">
                        <x-faq-card title="1. How long do I have access to theme updates and support?"
                            description="Cras eget leo in quam euismod viverra et luctus tellus. Nullam porta euismod est sodales cursus. In lacinia, mauris quis volutpat tempor, nulla turpis vulputate magna, ut elementum turpis leo vel libero." />
                        <x-faq-card title="2. What kind of support do you offer?"
                            description="Ut in vestibulum risus, ut tincidunt sem. Morbi molestie egestas felis, consequat mattis magna suscipit non. Proin ex enim, faucibus sit amet odio vestibulum, condimentum egestas libero." />
                        <x-faq-card title="3. How do I get support if I encounter a problem with my theme?"
                            description="Cras eget leo in quam euismod viverra et luctus tellus. Nullam porta euismod est sodales cursus. In lacinia, mauris quis volutpat tempor, nulla turpis vulputate magna, ut elementum turpis leo vel libero." />
                        <x-faq-card title="4. How often do you release theme updates?"
                            description="Cras eget leo in quam euismod viverra et luctus tellus. Nullam porta euismod est sodales cursus. In lacinia, mauris quis volutpat tempor, nulla turpis vulputate magna, ut elementum turpis leo vel libero.Ut in vestibulum risus, ut tincidunt sem. Morbi molestie egestas felis, consequat mattis magna suscipit non. Proin ex enim, faucibus sit amet odio vestibulum, condimentum egestas libero." />
                        <x-faq-card title="5. What happens if my support and updates expire?"
                            description="Cras eget leo in quam euismod viverra et luctus tellus. Nullam porta euismod est sodales cursus. In lacinia, mauris quis volutpat tempor, nulla turpis vulputate magna, ut elementum turpis leo vel libero." />
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- END FAQ SECTION --}}
@endsection
