@extends('layouts.front',['pageTitle' => 'Dpp | HomePage'])

@section('content')


    <!-- Landing Section -->
    <section id="home" class="relative flex flex-col md:flex-row justify-center items-center text-center" style="background-image: url('{{ asset('assets/images/bg-home.jpeg') }}');
             background-size: cover;
             background-position: center;
             background-repeat: no-repeat;
             min-height: 100vh;">

        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-[var(--custom-black)] opacity-50"></div>

        <!-- Text Content -->
        <div class="text-[var(--custom-white)] p-10 max-w-3xl pt-20 relative z-10" id="heroText">
            <h1 class="text-4xl md:text-6xl font-bold text-[var(--custom-white)]">
                <span class="text-[var(--theme-color)]">Together</span>, We Can Make a Change We Want to See in the
                World
            </h1>
            <p class="mt-4 text-lg text-[var(--custom-white)]">
                At the heart of democracy lies the power of the people.
                By contributing to our mission, you become an essential
                part of driving positive change, shaping policies, and creating a
                brighter future for everyone.
            </p>
            <a href="#about"
                class="mt-6 inline-block bg-[var(--theme-color)] hover:bg-[var(--hover-theme-color)] text-[var(--custom-white)] font-bold py-2 px-6 rounded-full">
                Learn More
            </a>
        </div>

        <!-- Image Content for All Screens -->
        <div class="mt-6 md:mt-0 lg:block relative z-40" id="imageContainer"
            style="width: 100vw; height: 100vh; padding: 0; margin: 0 auto; overflow-x: hidden;">
            <img src="{{ asset('assets/images/peter_home.png') }}" alt="Candidate" class="w-full h-full object-cover">
        </div>
    </section>

    <!-- END LANDING PAGE -->

    <!-- ABOUT SECTION -->

    <div class="main-content">
        <section id="about-section" class="w-full flex items-start py-16 px-10 bg-[var(--custom-white)]">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 w-auto h-auto">
                <!-- Image Section -->
                <div class="relative flex justify-center overflow-hidden">
                    <!-- Updated Image Source -->
                    <img src="{{ asset('assets/images/peter-1.jpeg') }}" alt="Candidate"
                        class="w-full sm:w-[28rem] md:w-[32rem] lg:w-[36rem] rounded-lg transform transition-transform duration-1000 ease-out">

                    <!-- Overlay -->
                    <div
                        class="absolute bottom-0 w-full h-1/4 bg-[var(--custom-orange)] rounded-b-lg flex items-center justify-center px-4">
                        <p class="text-[var(--custom-white)] text-lg font-semibold text-center">
                            "Change begins with <span class="font-bold">YOU</span>. Together, we rise!"
                        </p>
                    </div>
                </div>

                <!-- Goals Section -->
                <div class="text-left">
                    <p class="text-4xl font-semibold text-[var(--custom-black)] mt-2" id="about-statement-animation">
                        Welcome to the Democratic Progressive Party <span class="text-[var(--theme-color)]">(DPP)</span>
                        <br><span class="text-[var(--theme-color)]">DPP Woyeee!!! Malawi Woyeee!!!</span>
                    </p>
                    <p class="text-xl text-[var(--custom-black)] mt-2">
                        <!-- Add content here if needed -->
                    </p>
                    <h3 class="text-2xl font-semibold text-[var(--theme-color)] mt-6">
                        Key Agenda:
                    </h3>
                    <ul class="mt-6 space-y-4 text-lg text-[var(--custom-black)]">
                        <li class="flex items-center" id="agenda-goal-1">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-[var(--custom-black)] font-bold mr-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Quality Education for All
                        </li>
                        <li class="flex items-center" id="agenda-goal-2">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-[var(--custom-black)] font-bold mr-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Economic Justice & Wealth Redistribution
                        </li>
                        <li class="flex items-center" id="agenda-goal-3">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-[var(--custom-black)] font-bold mr-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Nationalization of Key Sectors (Agriculture, Mining, Energy)
                        </li>
                        <li class="flex items-center" id="agenda-goal-4">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-[var(--custom-black)] font-bold mr-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Investing in Infrastructure to Build Stronger Communities
                        </li>
                        <li class="flex items-center" id="agenda-goal-5">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-[var(--custom-black)] font-bold mr-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Closing Economic Disparities
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    <!-- BECOME A VOLUNTEER -->
    <section class="volunteer-section">
        <div class="overlay"></div>
        <div class="content">
            <h2 class="slide-in text-[var(--theme-color)] font-bold"> Become a Member</h2>
            <p class="slide-in highlighted-text">Our party is powered by contributions <span
                    class="text-[var(--theme-color)]">from supporters.</span></p>

            <div class="stats">
                <div class="stat-item slide-in">
                    <i class="icon fas fa-users"></i>
                    <h3><span class="counter" data-target="2500">0</span>+</h3>
                    <p>Active Volunteers</p>
                </div>
                <div class="stat-item slide-in">
                    <i class="icon fas fa-bullhorn"></i>
                    <h3><span class="counter" data-target="120">0</span>+</h3>
                    <p>Campaigns</p>
                </div>
                <div class="stat-item slide-in">
                    <i class="icon fas fa-map-marked-alt"></i>
                    <h3><span class="counter" data-target="50">0</span>+</h3>
                    <p>Area Coverage</p>
                </div>
                <div class="stat-item slide-in">
                    <i class="icon fas fa-tasks"></i>
                    <h3><span class="counter" data-target="300">0</span>+</h3>
                    <p>Projects Done</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOCUS AREA -->
    <section class="focus-areas relative py-24 bg-[var(--theme-color)] text-white text-center">
        <p class="text-sm uppercase">Focus Area</p>
        <h2 class="text-4xl font-bold mt-2">How We Plan to Achieve a Better Country</h2>

        <!-- Focus Area Containers -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-10 px-10">
            <div
                class="group bg-transparent border border-gray p-6 rounded-lg text-center hover:shadow-[0_4px_10px_rgba(0,0,0,0.2)] transition-shadow duration-300 focus-item">
                <i class="fas fa-seedling text-4xl mb-4"></i>
                <h3 class="text-2xl font-semibold">Food Security</h3>
                <p class="mt-2">Most emphasized, symbolized by the four maize cobs, and directly tied to national development and identity.We prioritize food security as a fundamental and most important aspect of economic development.</p>
            </div>
            <div
                class="group bg-transparent border border-white p-6 rounded-lg text-center hover:shadow-[0_4px_10px_rgba(0,0,0,0.2)] transition-shadow duration-300 focus-item">
                <i class="fas fa-chart-line text-4xl mb-4"></i>
                <h3 class="text-2xl font-semibold">Economic Growth & Wealth Creation</h3>
                <p class="mt-2">Discussed under vision, mission, and aims. Focuses on job creation, macroeconomic growth, industrialization, export production, and reducing poverty.</p>
            </div>
            <div
                class="group bg-transparent border border-white p-6 rounded-lg text-center hover:shadow-[0_4px_10px_rgba(0,0,0,0.2)] transition-shadow duration-300 focus-item">
                <i class="fas fa-building text-4xl mb-4"></i>
                <h3 class="text-2xl font-semibold">Infrastructure Development</h3>
                <p class="mt-2">Clearly stated in the opening paragraph as a foundational belief of the party. Emphasized as long-term and necessary for national transformation.</p>
            </div>
            <div
                class="group bg-transparent border border-white p-6 rounded-lg text-center hover:shadow-[0_4px_10px_rgba(0,0,0,0.2)] transition-shadow duration-300 focus-item">
                <i class="fas fa-people-group text-4xl mb-4"></i>
                <h3 class="text-2xl font-semibold">Unity and Peace</h3>
                <p class="mt-2">Strongly emphasized in the pledge, with calls for national unity across tribe, region, and political belief. Seen as a precondition for prosperity.</p>
            </div>
            <div
                class="group bg-transparent border border-white p-6 rounded-lg text-center hover:shadow-[0_4px_10px_rgba(0,0,0,0.2)] transition-shadow duration-300 focus-item">
                <i class="fas fa-scale-balanced text-4xl mb-4"></i>
                <h3 class="text-2xl font-semibold">Human Rights and Rule of Law</h3>
                <p class="mt-2">Directly mentioned under the aims, and reiterated as part of DPP’s mission to ensure dignity, justice, and civil liberties.</p>
            </div>
        </div>
    </section>


    <!-- FLOATING CONTAINER WITH IMAGE AND MOTIVATIONAL TEXT -->
<section class="relative z-10">
    <div class="container mx-auto px-10">
        <!-- Parent div for the entire section with customized width and height -->
        <div class="relative flex flex-col md:flex-row items-center justify-between bg-white text-black rounded-lg shadow-lg mx-auto"
            style="margin-top: -5%; overflow: hidden;">
            <!-- Image on the Top for small screens and Left for medium and large screens -->
            <div class="w-full relative h-full" id="floating-image">
                <img src="{{ asset('assets/images/rally.jpg') }}" alt="DPP Rally"
                    class="rounded-lg shadow-md object-cover w-full h-full md:h-[500px]">
            </div>
            <!-- Motivational Text & Items on the Right -->
            <div class="w-full pl-6 text-black text-center md:text-left mt-4 md:mt-0 py-4 px-4 flex flex-col justify-between"
                id="floating-text">
                <h3 class="text-3xl font-semibold mb-6">Join the <span class="text-[var(--theme-color)]">Movement</span></h3>
                
                <!-- Motivational Items List -->
                <div class="space-y-4">
                    <div class="flex items-center justify-center md:justify-start">
                        <div class="w-2 h-2 bg-[var(--theme-color)] rounded-full mr-3"></div>
                        <span class="text-lg font-medium">Unity in Diversity</span>
                    </div>
                    
                    <div class="flex items-center justify-center md:justify-start">
                        <div class="w-2 h-2 bg-[var(--theme-color)] rounded-full mr-3"></div>
                        <span class="text-lg font-medium">Progress Through Partnership</span>
                    </div>
                    
                    <div class="flex items-center justify-center md:justify-start">
                        <div class="w-2 h-2 bg-[var(--theme-color)] rounded-full mr-3"></div>
                        <span class="text-lg font-medium">Democracy for All</span>
                    </div>
                    
                    <div class="flex items-center justify-center md:justify-start">
                        <div class="w-2 h-2 bg-[var(--theme-color)] rounded-full mr-3"></div>
                        <span class="text-lg font-medium">Empowering Communities</span>
                    </div>
                    
                    <div class="flex items-center justify-center md:justify-start">
                        <div class="w-2 h-2 bg-[var(--theme-color)] rounded-full mr-3"></div>
                        <span class="text-lg font-medium">Building Tomorrow</span>
                    </div>
                    
                    <div class="flex items-center justify-center md:justify-start">
                        <div class="w-2 h-2 bg-[var(--theme-color)] rounded-full mr-3"></div>
                        <span class="text-lg font-medium">Strength in Numbers</span>
                    </div>
                </div>
                
                <!-- Call to Action -->
                <div class="mt-6 pt-4 border-t border-gray-200">
                    <p class="text-base text-gray-600 italic">Together we stand, together we thrive</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- DPP Leaders -->
    <section class="py-10 bg-gray text-center">
        <p class="text-lg text-[var(--theme-color)] mt-2">Meet Our Leaders</p>

        <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-6 md:px-10 max-w-7xl mx-auto">
            @foreach ($leaders as $leader)
                <div class="relative bg-white rounded-lg shadow-md hover:shadow-xl overflow-hidden">
                    <div class="w-full aspect-[3/4] overflow-hidden relative">
                        <img src="{{ asset('storage/' . $leader->path) }}" alt="{{ $leader->title }}"
                            class="absolute inset-0 w-full h-full object-cover">
                    </div>
                    <div class="absolute bottom-0 bg-[var(--custom-orange)] text-white w-full py-4 px-6">
                        <h3 class="text-xl font-semibold">{{ $leader->title }}</h3>
                        <p class="text-sm">{{ $leader->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- music section --}}
    <section class="py-10 bg-white px-10">
        <div class="py-4 flex flex-col items-center justify-center text-center h-full">
            <h2 class="text-md text-[var(--theme-color)] font-bold" id="music-title">DPP Music Vibes</h2>
            <p class="text-lg text-[var(--custom-black)] mt-2" id="music-subtitle">
                Feel the rhythm, enjoy the beats, and celebrate with the
                <span class="text-[var(--theme-color)]">best</span> tunes!
            </p>
        </div>

        <div class="max-w-7xl mx-auto flex flex-col md:flex-row gap-6">
            <!-- Left: Background Image -->
            <div class="relative w-full md:w-1/2 h-[400px] rounded-lg overflow-hidden">
                <img src="{{ asset('assets/images/music/charming-amazing-afro-american-young-woman-sunglasses-dancing.jpg') }}"
                    alt="Person Listening to Music" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                    <h2 class="text-4xl font-bold text-white">Feel the Vibes</h2>
                </div>
            </div>

            <!-- Right: Music Player -->
            <div class="w-full md:w-1/2 h-[400px] overflow-y-auto bg-gray-100 rounded-lg p-6 shadow-lg">
                @forelse ($music as $track)
                    <div class="mb-6 border-b border-gray-300 pb-4">
                        <h3 class="text-lg font-semibold text-[var(--theme-color)]">{{ $track->title }}</h3>
                        <p class="text-sm  mb-2">
                            By <span class="font-medium text-[var(--theme-color)]">{{ $track->artist }}</span>
                            — <span class="italic">{{ $track->category }}</span>
                        </p>
                        <audio controls class="w-full rounded text-blue-600 accent-blue-600">
                            <source src="{{ asset('storage/' . $track->file) }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                @empty
                    <p class="text-blue-500">No music tracks available.</p>
                @endforelse
            </div>
        </div>
    </section>
    <div class="w-full" id="history-container"></div>
@endsection


@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Register GSAP plugins
            gsap.registerPlugin(ScrollTrigger);

            // Music Title Animation
            const musicTitle = document.getElementById('music-title');
            if (musicTitle) {
                gsap.from(musicTitle, {
                    y: 30,
                    opacity: 0,
                    duration: 1,
                    scrollTrigger: {
                        trigger: musicTitle,
                        start: "top 80%",
                        toggleActions: "play none none none"
                    }
                });
            }

            // Music Subtitle Animation
            const musicSubtitle = document.getElementById('music-subtitle');
            if (musicSubtitle) {
                gsap.from(musicSubtitle, {
                    y: 30,
                    opacity: 0,
                    duration: 1,
                    delay: 0.3, 
                    scrollTrigger: {
                        trigger: musicSubtitle,
                        start: "top 80%",
                        toggleActions: "play none none none"
                    }
                });
            }

            // Music Image Animation
            const musicImage = document.getElementById('music-image');
            if (musicImage) {
                gsap.from(musicImage, {
                    x: -100,
                    opacity: 0,
                    duration: 1.5,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: musicImage,
                        start: "top 80%",
                        toggleActions: "play none none none"
                    }
                });
            }

            // Music Player Animation
            const musicPlayer = document.getElementById('music-player');
            if (musicPlayer) {
                gsap.from(musicPlayer, {
                    x: 100, // Slide in from the right
                    opacity: 0,
                    duration: 1.5,
                    delay: 0.3, // Slight delay after the image animation
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: musicPlayer,
                        start: "top 80%",
                        toggleActions: "play none none none"
                    }
                });
            }
        });

        const imageOverlayText = document.querySelector('#music-image h2');
        if (imageOverlayText) {
            gsap.from(imageOverlayText, {
                y: 20,
                opacity: 0,
                duration: 1,
                delay: 0.5, // Delay after the image animation
                scrollTrigger: {
                    trigger: imageOverlayText,
                    start: "top 80%",
                    toggleActions: "play none none none"
                }
            });
        }
    </script>

@endpush