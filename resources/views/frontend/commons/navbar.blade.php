
<!-- Navbar -->
<nav class="bg-[var(--nav-bg-color)] text-white px-5 py-3 flex justify-between items-center relative">
    <!-- Logo -->
    <a href="{{ url('/') }}" class="flex items-center gap-2">
        <img src="{{ asset('assets/images/DPP-1-removebg-preview (2).png') }}" alt="Logo" class="h-14 w-auto md:h-20">
    </a>

    <!-- Desktop Menu -->
    <ul class="hidden md:flex space-x-6 items-center ubuntu-regular">

        <li class="relative group">
            <a href="{{ route('loading-screen') }}?redirect={{ url('/') }}" class="nav-link">Home</a>
        </li>

        
        {{-- <li class="relative group">
             <a href="{{ route('loading-screen') }}?redirect={{ route('news') }}" class="block px-4 py-2">
                        News</a>
            
        </li> --}}


          {{-- <li class="relative group">
                <a href="#" class="nav-link">Manifesto</a>
                <ul
                    class="absolute left-0 hidden group-hover:block bg-[var(--nav-bg-color)] text-white mt-0 p-2 rounded-md shadow-lg space-y-2 z-50 w-[230px]">
                    <li class="relative group/manifesto">
                        <a href="#"
                            class="block px-4 py-2 flex items-center justify-between hover:bg-[var(--theme-color)]"
                            id="manifestoToggle">
                            Manifesto <span
                                class="ml-1 transform group-hover/manifesto:rotate-180 transition-transform">▼</span>
                        </a>
                        <ul
                            class="absolute left-[calc(100%+0px)] top-0 hidden group-hover/manifesto:block bg-[var(--nav-bg-color)] text-white p-2 rounded-md shadow-lg space-y-2 z-50 w-48">
                            <li><a href="{{ route('loading-screen') }}?redirect={{ route('manifesto2019') }}"
                                    class="block px-4 py-2 hover:bg-[var(--theme-color)]">2019 Manifesto</a></li>
                            <li><a href="{{ route('loading-screen') }}?redirect={{ route('manifesto2025') }}"
                                    class="block px-4 py-2 hover:bg-[var(--theme-color)]">2025 Manifesto</a></li>
                        </ul>
                    </li>
                </ul>
            </li> --}}
            


       


            {{-- start manifesto --}}
            <li class="relative group">
                <a href="#" class="nav-link">Manifesto</a>
                <ul class="absolute left-0 opacity-0 invisible group-hover:opacity-100 group-hover:visible bg-[var(--nav-bg-color)] text-white mt-0 p-2 rounded-md shadow-lg space-y-1 z-50 w-[260px] text-[0.8rem] transition-all duration-200 ease-in-out transform group-hover:translate-y-0 translate-y-[-10px] max-h-[80vh] overflow-y-auto scrollbar-transparent">
                    <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)]">Foreword</a></li>
                    <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)]">Our collective vision</a></li>
                    <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)]">Our mission</a></li>
                    <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)]">Our pledge</a></li>
                    <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)]">Our call for unity</a></li>
                    <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)]">Chapter 1: Context</a></li>
                    <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)]">Chapter 2: Guarantees and safeguards</a></li>
                    <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)]">Chapter 3: The macroeconomic framework</a></li>
                    
                    <li class="relative group/chapter4">
                        <a href="#" class="block px-3 py-1.5 flex items-center justify-between hover:bg-[var(--theme-color)]">
                            Chapter 4: Pillars of development 
                            <span class="ml-2 transform group-hover/chapter4:rotate-90 transition-all duration-300">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </span>
                        </a>
                        <ul class="absolute left-0 top-full w-full opacity-0 invisible group-hover/chapter4:opacity-100 group-hover/chapter4:visible bg-[var(--nav-bg-color)] text-white p-2 rounded-md shadow-lg space-y-1 z-50 transition-all duration-200 ease-in-out transform group-hover/chapter4:translate-y-0 translate-y-[-10px] max-h-[50vh] overflow-y-auto scrollbar-transparent">
                            <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)]">4.1 Agricultural productivity</a></li>
                            
                            <li class="relative group/industrial">
                                <a href="#" class="block px-3 py-1.5 flex items-center justify-between hover:bg-[var(--theme-color)]">
                                    4.2 Industrialisation 
                                    <span class="ml-2 transform group-hover/industrial:rotate-90 transition-all duration-300">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                </a>
                                <ul class="absolute left-0 top-full w-full opacity-0 invisible group-hover/industrial:opacity-100 group-hover/industrial:visible bg-[var(--nav-bg-color)] text-white p-2 rounded-md shadow-lg space-y-1 z-50 transition-all duration-200 ease-in-out transform group-hover/industrial:translate-y-0 translate-y-[-10px] max-h-[40vh] overflow-y-auto scrollbar-transparent">
                                    <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)]">4.2.1 Mining</a></li>
                                    <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)]">4.2.2 Transport infrastructure</a></li>
                                    <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)]">4.2.3 Energy</a></li>
                                    <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)]">4.2.4 ICT and artificial intelligence</a></li>
                                </ul>
                            </li>
                            
                            <li class="relative group/urban">
                                <a href="#" class="block px-3 py-1.5 flex items-center justify-between hover:bg-[var(--theme-color)]">
                                    4.3 Urbanisation 
                                    <span class="ml-2 transform group-hover/urban:rotate-90 transition-all duration-300">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                </a>
                                <ul class="absolute left-0 top-full w-full opacity-0 invisible group-hover/urban:opacity-100 group-hover/urban:visible bg-[var(--nav-bg-color)] text-white p-2 rounded-md shadow-lg space-y-1 z-50 transition-all duration-200 ease-in-out transform group-hover/urban:translate-y-0 translate-y-[-10px] max-h-[40vh] overflow-y-auto scrollbar-transparent">
                                    <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)]">4.3.1 Tourism</a></li>
                                    <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)]">4.3.2 Creation of secondary cities</a></li>
                                    <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)]">4.3.3 Land, housing and water services</a></li>
                                </ul>
                            </li>
                            
                            <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)]">4.4 Decentralisation</a></li>
                        </ul>
                    </li>
                    
                    <li class="relative group/chapter5">
                        <a href="#" class="block px-3 py-1.5 flex items-center justify-between hover:bg-[var(--theme-color)]">
                            Chapter 5: Enablers 
                            <span class="ml-2 transform group-hover/chapter5:rotate-90 transition-all duration-300">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </span>
                        </a>
                        <ul class="absolute left-0 top-full w-full opacity-0 invisible group-hover/chapter5:opacity-100 group-hover/chapter5:visible bg-[var(--nav-bg-color)] text-white p-2 rounded-md shadow-lg space-y-1 z-50 transition-all duration-200 ease-in-out transform group-hover/chapter5:translate-y-0 translate-y-[-10px] max-h-[50vh] overflow-y-auto scrollbar-transparent">
                            <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)]">5.1 Mindset change</a></li>
                            
                            <li class="relative group/governance">
                                <a href="#" class="block px-3 py-1.5 flex items-center justify-between hover:bg-[var(--theme-color)]">
                                    5.2 Rule of law, governance and corruption 
                                    <span class="ml-2 transform group-hover/governance:rotate-90 transition-all duration-300">
                                    </span>
                                </a>
                            </li>
                            
                            <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)]">5.3 Public service performance</a></li>
                            <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)]">5.4 Private sector, industry and trade</a></li>
                            
                            <li class="relative group/human">
                                <a href="#" class="block px-3 py-1.5 flex items-center justify-between hover:bg-[var(--theme-color)]">
                                    5.5 Human capital development 
                                    <span class="ml-2 transform group-hover/human:rotate-90 transition-all duration-300">
                                    </span>
                                </a>
                            </li>
                            
                            <li class="relative group/environment">
                                <a href="#" class="block px-3 py-1.5 flex items-center justify-between hover:bg-[var(--theme-color)]">
                                    5.6 Environmental sustainability and disaster risk management 
                                    <span class="ml-2 transform group-hover/environment:rotate-90 transition-all duration-300">
                                    </span>
                                </a>
                            </li>
                            
                            <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)]">5.7 Non-state actors: Media, civil society & religious organisations</a></li>
                            <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)]">5.8 Creative arts</a></li>
                        </ul>
                    </li>
                    
                    <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)]">Chapter 6: A call to Malawians and partners</a></li>
                </ul>
            </li>

            <style>
                /* Custom scrollbar - completely invisible until hover */
                .scrollbar-transparent {
                    scrollbar-width: thin;
                    scrollbar-color: transparent transparent;
                }
                .scrollbar-transparent:hover {
                    scrollbar-color: rgba(255,255,255,0.15) transparent;
                }
                .scrollbar-transparent::-webkit-scrollbar {
                    width: 6px;
                    background: transparent;
                }
                .scrollbar-transparent::-webkit-scrollbar-thumb {
                    background: transparent;
                    border-radius: 3px;
                }
                .scrollbar-transparent:hover::-webkit-scrollbar-thumb {
                    background: rgba(255,255,255,0.15);
                }
            </style>



            {{-- end manifesto --}}




         <li class="relative group">
            <a href="{{ route('loading-screen') }}?redirect={{ route('music') }}" class="block px-4 py-2">Playlist</a>
            
        </li>

        {{-- ABOUT --}}
        <li class="relative group">
            <a href="#" class="nav-link">About</a>
            <ul
                class="absolute left-0 hidden group-hover:block bg-[var(--nav-bg-color)] text-white mt-0 p-2 rounded-md shadow-lg space-y-2 z-50 w-[150px]">
                <li><a href="{{ route('loading-screen') }}?redirect={{ route('about') }}" class="block px-4 py-2">DPP</a></li>
                <li><a href="{{ route('loading-screen') }}?redirect={{ route('apm') }}"class="block px-4 py-2">APM</a></li>
            
            </ul>
        </li>

        {{-- ARCHIVES --}}
        <li class="relative group">
            <a href="#" class="nav-link">Archives</a>
            <ul class="absolute left-0 opacity-0 invisible group-hover:opacity-100 group-hover:visible bg-[var(--nav-bg-color)] text-white mt-0 p-2 rounded-md shadow-lg space-y-1 z-50 w-auto min-w-[240px] text-[0.8rem] transition-all duration-200 ease-in-out transform group-hover:translate-y-0 translate-y-[-10px]">
                
                {{-- <li><a href="{{ route('loading-screen') }}?redirect={{ route('apm') }}" class="block px-3 py-1.5 hover:bg-[var(--theme-color)]">APM</a></li> --}}

                <!-- Previous Manifestos Dropdown -->
                <li class="relative group/manifestos">
                    <a href="#" class="block px-3 py-1.5 flex items-center justify-between hover:bg-[var(--theme-color)] whitespace-nowrap">
                        Previous Manifestos
                        <span class="ml-2 transform group-hover/manifestos:rotate-90 transition-all duration-300">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                    </a>
                    <ul class="absolute left-0 top-full w-full opacity-0 invisible group-hover/manifestos:opacity-100 group-hover/manifestos:visible bg-[var(--nav-bg-color)] text-white p-2 rounded-md shadow-lg space-y-1 z-50 transition-all duration-200 ease-in-out transform group-hover/manifestos:translate-y-0 translate-y-[-10px]">
                        <li><a href="{{ route('loading-screen') }}?redirect={{ route('manifesto2019') }}" class="block px-3 py-1.5 hover:bg-[var(--theme-color)]">Manifesto 2019</a></li>
                    </ul>
                </li>
            </ul>
        </li>


      
        
        <li><a href="{{ route('loading-screen') }}?redirect={{ route('contact') }}" class="nav-link">Contacts</a></li>
        <li class="nav-link flex-shrink-0">
            <a href="{{ route('loading-screen') }}?redirect={{ route('donate') }}"
                class="bg-[var(--theme-color)] hover:bg-[var(--hover-theme-color)] text-white font-bold py-2 px-6 rounded-full whitespace-nowrap">
                Donate  to Party
            </a>
        </li>


{{-- COUNT DOWN  Desktop--}}

        
        <li class="nav-link flex-shrink-0 border border-[var(--theme-color)] bg-[#E61E2B] rounded-lg px-4 py-2 text-white text-sm ml-4">
            <div class="text-center mb-1">
                <span class="text-xs font-bold uppercase tracking-wider">Count Down to 2025 Elections</span>
            </div>
            <div class="flex gap-4 items-center justify-center">
                
                <!-- Voting Icon  -->
                    <div>
                    <img src="{{ asset('/assets/images/image 2.png') }}" alt="check icon" class="w-16 h-16 inline-block" />
                    </div>

                <!-- Days -->
                <div class="flex flex-col items-center">
                    <span id="days" class="text-xl font-bold">00 :</span>
                    <div class="w-5 bg-white my-1" style="height: 0.5px;"></div>
                    <span  class="text-xs uppercase tracking-wide">Days</span>
                </div>
                <!-- Hours -->
                <div class="flex flex-col items-center">
                    <span id="hours"  class="text-xl font-bold">00 :</span>
                    <div class="w-5 bg-white my-1" style="height: 0.5px;"></div>
                    <span class="text-xs uppercase tracking-wide">Hours</span>
                </div>
                <!-- Minutes -->
                <div class="flex flex-col items-center">
                    <span  id="minutes" class="text-xl font-bold">00 :</span>
                <div class="w-5 bg-white my-1" style="height: 0.5px;"></div>
                    <span class="text-xs uppercase tracking-wide">Min</span>
                </div>
                <!-- Seconds -->
                <div class="flex flex-col items-center">
                    <span id="seconds" class="text-xl font-bold">00</span>
                <div class="w-5 bg-white my-1" style="height: 0.5px;"></div>
                    <span  class="text-xs uppercase tracking-wide">Sec</span>
                </div>
            </div>
        </li>


</ul>
   
<!-- HAMBURGER + Countdown (Mobile Only) -->
<div class="flex items-center gap-3 md:hidden">
    <!-- Countdown -->
    <div class="flex gap-2 items-center border border-[var(--theme-color)] bg-[#E61E2B] rounded-md px-2 py-1 text-white text-[10px]">
        
        <!-- Voting Icon -->
        <div>
            <img src="{{ asset('/assets/images/image 2.png') }}" alt="check icon" class="w-16 h-16 inline-block" />
        </div>
        <!-- Days -->
        <div class="flex flex-col items-center">
            <span id="days" class="text-xs font-bold leading-none">00 :</span>
            <div class="w-4 bg-white my-0.5" style="height: 0.5px;"></div>
            <span class="uppercase tracking-tight" style="font-size: 0.55rem;">Days</span>
        </div>
        <!-- Hours -->
        <div class="flex flex-col items-center">
            <span id="hours" class="text-xs font-bold leading-none">00 :</span>
            <div class="w-4 bg-white my-0.5" style="height: 0.5px;"></div>
            <span class="uppercase tracking-tight" style="font-size: 0.55rem;">Hours</span>
        </div>
        <!-- Min -->
        <div class="flex flex-col items-center">
            <span id="minutes" class="text-xs font-bold leading-none">00 :</span>
            <div class="w-4 bg-white my-0.5" style="height: 0.5px;"></div>
            <span class="uppercase tracking-tight" style="font-size: 0.55rem;">Min</span>
        </div>
        <!-- Sec -->
        <div class="flex flex-col items-center">
            <span id="seconds" class="text-xs font-bold leading-none">00</span>
            <div class="w-4 bg-white my-0.5" style="height: 0.5px;"></div>
            <span class="uppercase tracking-tight" style="font-size: 0.55rem;">Sec</span>
        </div>
    </div>

    <!-- Hamburger -->
    <button id="menu-toggle" class="text-2xl">
        <i class="fas fa-bars"></i>
    </button>
</div>



    <!-- Mobile Menu (fixed version) -->
<ul id="mobile-menu"
    class="absolute top-full left-0 w-full bg-[var(--nav-bg-color)] text-white px-5 py-5 space-y-6 hidden md:hidden ubuntu-regular z-50 flex flex-col items-center justify-center min-h-[60vh]">

    <li><a href="{{ url('/') }}" class="nav-link block">Home</a></li>

    <li>
        <details>
            <summary class="cursor-pointer">Documents</summary>
            <ul class="ml-4 mt-2 space-y-2">
                <li><a href="{{ route('loading-screen') }}?redirect={{ route('manifesto2019') }}" class="block">2019 Manifesto</a></li>
                <li><a href="{{ route('loading-screen') }}?redirect={{ route('manifesto2025') }}" class="block">2025 Manifesto</a></li>
                <li><a href="{{ route('loading-screen') }}?redirect={{ route('code_of_conduct') }}" class="block">Code of Conduct & Ethics</a></li>
            </ul>
        </details>
    </li>

    <li>
        <details>
            <summary class="cursor-pointer">Media</summary>
            <ul class="ml-4 mt-2 space-y-2">
                <li><a href="{{ route('loading-screen') }}?redirect={{ route('music') }}" class="block">DPP Music</a></li>
                <li><a href="{{ route('loading-screen') }}?redirect={{ route('events') }}" class="block">Event Gallery</a></li>
                <li><a href="{{ route('loading-screen') }}?redirect={{ route('news') }}" class="block">DPP News</a></li>
            </ul>
        </details>
    </li>

    <li><a href="{{ route('loading-screen') }}?redirect={{ route('contact') }}" class="nav-link block">Contacts</a></li>


         <li class="relative group">
            <a href="#" class="nav-link">About</a>
            <ul
                class="absolute left-0 hidden group-hover:block bg-[var(--nav-bg-color)] text-white mt-0 p-2 rounded-md shadow-lg space-y-2 z-50 w-[150px]">
                <li><a href="{{ route('loading-screen') }}?redirect={{ route('about') }}" class="block px-4 py-2">DPP</a></li>
                <li><a href="{{ route('loading-screen') }}?redirect={{ route('apm') }}"class="block px-4 py-2">APM</a></li>
            
            </ul>
        </li>

    <li>
        <a href="{{ route('loading-screen') }}?redirect={{ route('donate') }}"
           class="block bg-[var(--theme-color)] hover:bg-[var(--hover-theme-color)] text-white font-bold py-2 px-6 rounded-full text-center">
           Donate to Party
        </a>
    </li>

</ul>

</nav>

<script>

// COUNT DOWN SCRIPT

    // Set your countdown target date and time
    const countdownDate = new Date("2025-12-31T23:59:59").getTime();

    const countdownFunction = setInterval(() => {
        const now = new Date().getTime();
        const distance = countdownDate - now;

        if (distance < 0) {
            clearInterval(countdownFunction);
            document.getElementById("days").innerHTML = "00 :";
            document.getElementById("hours").innerHTML = "00 :";
            document.getElementById("minutes").innerHTML = "00 :";
            document.getElementById("seconds").innerHTML = "00";
            return;
        }

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("days").innerHTML = (days < 10 ? "0" + days : days) + " :";
        document.getElementById("hours").innerHTML = (hours < 10 ? "0" + hours : hours) + " :";
        document.getElementById("minutes").innerHTML = (minutes < 10 ? "0" + minutes : minutes) + " :";
        document.getElementById("seconds").innerHTML = (seconds < 10 ? "0" + seconds : seconds);
    }, 1000);
// END COUNT DOWN SCRIPT

    document.addEventListener('DOMContentLoaded', function() {
        const currentPath = window.location.pathname;
        const currentPage = currentPath.split('/').pop();

        function isLinkActive(href) {
            if (!href || href === '#') return false;
            if (href.includes('{{ route('loading-screen') }}?redirect=')) {
                href = href.split('redirect=')[1];
            }
            href = href.replace(/^\//, '');
            return href === currentPage || currentPath.includes(href);
        }

        document.querySelectorAll('.nav-link').forEach(link => {
            const href = link.getAttribute('href');
            if (isLinkActive(href)) {
                link.classList.add('active-page');
                const parentGroup = link.closest('.group');
                if (parentGroup) parentGroup.classList.add('active');
            }
        });




        // Mobile menu toggle
        
        // const toggleBtn = document.getElementById('menu-toggle');
        // const mobileMenu = document.getElementById('mobile-menu');
        // toggleBtn.addEventListener('click', () => {
        //     mobileMenu.classList.toggle('hidden');
        // });
    });
</script>
