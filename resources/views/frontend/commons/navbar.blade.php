
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
                    class="absolute left-0 hidden group-hover:block bg-[var(--nav-bg-color)] text-white mt-0 p-2 rounded-md shadow-lg space-y-2 z-50 w-[280px]">
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
                <ul class="absolute left-0 opacity-0 invisible group-hover:opacity-100 group-hover:visible bg-[var(--nav-bg-color)] text-white mt-0 p-2 rounded-md shadow-lg space-y-1 z-50 w-[280px] text-[0.8rem] transition-all duration-200 ease-in-out transform group-hover:translate-y-0 translate-y-[-10px]">
                    
                    <li class="relative group/chapter4">
                        <a href="#" class="block px-3 py-2 flex items-center justify-between hover:bg-[var(--theme-color)] rounded">
                            Pillars of Development 
                            <span class="ml-2 transform group-hover/chapter4:rotate-0 transition-all duration-300">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </span>
                        </a>
                        
                        <!-- Enhanced popup for Pillars of Development -->
                        <div class="submenu-right absolute opacity-0 invisible group-hover/chapter4:opacity-100 group-hover/chapter4:visible popup-content text-white p-4 rounded-md shadow-lg z-60 w-[380px] transition-all duration-200 ease-in-out transform group-hover/chapter4:translate-y-0 translate-y-[-10px]">
                            <div class="space-y-2 text-sm">
                                <div class="popup-item p-1 rounded">
                                    <strong>Agricultural productivity</strong>
                                </div>
                                
                                <div class="relative group/industrial">
                                    <div class="popup-item p-1 rounded flex items-center justify-between cursor-pointer">
                                        <strong>Industrialisation</strong>
                                        <svg class="w-3 h-3 transform group-hover/industrial:rotate-90 transition-all duration-300" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <!-- Nested submenu for Industrialisation -->
                                    <div class="submenu-right absolute opacity-0 invisible group-hover/industrial:opacity-100 group-hover/industrial:visible popup-content text-white p-3 rounded-md shadow-lg z-80 w-[320px] transition-all duration-200 ease-in-out transform group-hover/industrial:translate-y-0 translate-y-[-10px]">
                                        <div class="space-y-1 text-xs">
                                            <div class="popup-item p-2 rounded">Mining</div>
                                            <div class="popup-item p-2 rounded">Transport infrastructure</div>
                                            <div class="popup-item p-2 rounded">Energy</div>
                                            <div class="popup-item p-2 rounded">ICT and artificial intelligence</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="relative group/urban">
                                    <div class="popup-item p-1 rounded flex items-center justify-between cursor-pointer">
                                        <strong>Urbanisation</strong>
                                        <svg class="w-3 h-3 transform group-hover/urban:rotate-90 transition-all duration-300" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <!-- Nested submenu for Urbanisation -->
                                    <div class="submenu-right absolute opacity-0 invisible group-hover/urban:opacity-100 group-hover/urban:visible popup-content text-white p-3 rounded-md shadow-lg z-80 w-[280px] transition-all duration-200 ease-in-out transform group-hover/urban:translate-y-0 translate-y-[-10px]">
                                        <div class="space-y-1 text-xs">
                                            <div class="popup-item p-2 rounded">Tourism</div>
                                            <div class="popup-item p-2 rounded">Creation of secondary cities</div>
                                            <div class="popup-item p-2 rounded">Land, housing and water services</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="popup-item p-1 rounded">
                                    <strong>Decentralisation</strong>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <li class="relative group/chapter5">
                        <a href="#" class="block px-3 py-1 flex items-center justify-between hover:bg-[var(--theme-color)] rounded">
                            Enablers 
                            <span class="ml-2 transform group-hover/chapter5:rotate-0 transition-all duration-300">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </span>
                        </a>
                        
                        <!-- Enhanced popup for Enablers -->
                        <div class="submenu-right absolute opacity-0 invisible group-hover/chapter5:opacity-100 group-hover/chapter5:visible popup-content text-white p-1 rounded-md shadow-lg z-60 w-[420px] transition-all duration-200 ease-in-out transform group-hover/chapter5:translate-y-0 translate-y-[-10px]">
                            <div class="space-y-1 text-sm">
                                <div class="popup-item p-1 rounded">
                                    <strong>Mindset change</strong>
                                </div>
                                
                                <div class="popup-item p-1 rounded">
                                    <strong>Rule of law, governance and corruption</strong>
                                </div>
                                
                                <div class="popup-item p-1 rounded">
                                    <strong>Public service performance</strong>
                                </div>
                                
                                <div class="popup-item p-1 rounded">
                                    <strong>Private sector, industry and trade</strong> 
                                </div>
                                
                                <div class="popup-item p-1 rounded">
                                    <strong>Human capital development</strong> 
                                </div>
                                
                                <div class="popup-item p-1 rounded">
                                    <strong>Environmental sustainability and disaster risk management</strong>
                                </div>
                                
                                <div class="popup-item p-1 rounded">
                                    <strong>Non-state actors</strong> 
                                </div>
                                
                                <div class="popup-item p-1 rounded">
                                    <strong>Creative arts</strong>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <li class="border-t border-gray-600 pt-2 mt-2">
                        <a href="#" class="block px-3 py-1 hover:bg-[var(--theme-color)] rounded font-semibold">
                            2025 Full Manifesto
                        </a>
                    </li>
                </ul>
            </li>

            <style>

                
                /* Enhanced dropdown positioning */
                .group\/industrial:hover .group-hover\/industrial\:left-full {
                    left: calc(100% + 5px);
                }
                
                .group\/urban:hover .group-hover\/urban\:left-full {
                    left: calc(100% + 5px);
                }
                
                .group\/chapter5:hover .group-hover\/chapter5\:left-full {
                    left: calc(100% + 5px);
                }
                
                /* Ensure proper z-index stacking */
                .z-\[60\] {
                    z-index: 60;
                }
                
                /* Enhanced popup styling */
                .popup-content {
                    background: linear-gradient(135deg,rgba(118, 73, 145, 0.7) 0%,rgba(118, 73, 145, 0.7) 100%);
                    border: 1px solid rgba(230, 30, 43, 0.2);
                    box-shadow: 0 10px 30px rgba(213, 22, 22, 0.3);
                }

                .popup-title {
                    color: var(--theme-color);
                    border-bottom: 1px solid rgba(230, 30, 43, 0.2);
                    font-weight: 600;
                    font-size: 0.9rem;
                }

                .popup-item {
                    transition: all 0.2s ease;
                    border-left: 2px solid transparent;
                }

                .popup-item:hover {
                    background: rgba(230, 30, 43, 0.1);
                    border-left-color: var(--theme-color);
                }
                
                /* Enhanced dropdown positioning for right-side submenus */
                .submenu-right {
                    left: calc(100% + 8px);
                    top: 0;
                }
            </style>



            {{-- end manifesto --}}




            <li class="relative group">
                <a href="#" class="nav-link">Playlist</a>
                <ul class="absolute left-0 opacity-0 invisible group-hover:opacity-100 group-hover:visible bg-[var(--nav-bg-color)] text-white mt-0 p-2 rounded-md shadow-lg space-y-1 z-50 w-[200px] text-[0.8rem] transition-all duration-200 ease-in-out transform group-hover:translate-y-0 translate-y-[-10px]">
                    <li><a href="{{ route('loading-screen') }}?redirect={{ route('music') }}" class="block px-3 py-2 hover:bg-[var(--theme-color)] rounded">Songs</a></li>
                    <li><a href="{{ route('loading-screen') }}?redirect={{ route('videos') }}" class="block px-3 py-2 hover:bg-[var(--theme-color)] rounded">Videos</a></li>
                </ul>
            </li>

        

        {{-- ARCHIVES --}}
        <li class="relative group">
            <a href="#" class="nav-link">Archives</a>
            <ul class="absolute left-0 opacity-0 invisible group-hover:opacity-100 group-hover:visible bg-[var(--nav-bg-color)] text-white mt-0 p-2 rounded-md shadow-lg space-y-1 z-50 w-[280px] text-[0.8rem] transition-all duration-200 ease-in-out transform group-hover:translate-y-0 translate-y-[-10px]">
                
                <!-- Previous Manifestos Dropdown -->
                <li class="relative group/manifestos">
                    <a href="#" class="block px-3 py-2 flex items-center justify-between hover:bg-[var(--theme-color)] rounded">
                        Previous Manifestos
                        <span class="ml-2 transform group-hover/manifestos:rotate-0 transition-all duration-300">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                    </a>
                    
                    <!-- Enhanced popup for Previous Manifestos -->
                    <div class="submenu-right absolute opacity-0 invisible group-hover/manifestos:opacity-100 group-hover/manifestos:visible popup-content text-white p-4 rounded-md shadow-lg z-60 w-[320px] transition-all duration-200 ease-in-out transform group-hover/manifestos:translate-y-0 translate-y-[-10px]">
                        <h3 class="popup-title pb-2 mb-3">Previous Manifestos</h3>
                        <div class="space-y-2 text-sm">
                            <div class="popup-item p-2 rounded">
                                <a href="{{ route('loading-screen') }}?redirect={{ route('manifesto2019') }}" class="block">
                                    <strong>Manifesto 2019</strong>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </li>

        {{-- ABOUT --}}
        <li class="relative group">
            <a href="#" class="nav-link">About</a>
            <ul class="absolute left-0 opacity-0 invisible group-hover:opacity-100 group-hover:visible bg-[var(--nav-bg-color)] text-white mt-0 p-2 rounded-md shadow-lg space-y-1 z-50 w-[200px] text-[0.8rem] transition-all duration-200 ease-in-out transform group-hover:translate-y-0 translate-y-[-10px]">
                <li><a href="{{ route('loading-screen') }}?redirect={{ route('about') }}" class="block px-3 py-2 hover:bg-[var(--theme-color)] rounded">DPP</a></li>
                <li><a href="{{ route('loading-screen') }}?redirect={{ route('apm') }}" class="block px-3 py-2 hover:bg-[var(--theme-color)] rounded">APM</a></li>
            </ul>
        </li>


      
        
        <!-- <li><a href="{{ route('loading-screen') }}?redirect={{ route('contact') }}" class="nav-link">Contacts</a></li> -->
        <li class="nav-link flex-shrink-0">
            <a href="{{ route('loading-screen') }}?redirect={{ route('donate') }}"
                class="bg-[var(--theme-color)] hover:bg-[var(--hover-theme-color)] text-white font-bold py-2 px-6 rounded-full whitespace-nowrap">
                Donate
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
    const countdownDate = new Date("2025-09-16T23:59:59").getTime();

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
