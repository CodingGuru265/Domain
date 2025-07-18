<!-- Navbar -->
<nav class="bg-[var(--nav-bg-color)] text-white px-5 py-3 flex justify-between items-center relative">
    <!-- Logo -->
    <a href="{{ url('/') }}" class="flex items-center gap-2">
        <img src="{{ asset('assets/images/DPP-1-removebg-preview (2).png') }}" alt="Logo" class="h-14 w-auto md:max-w-3xs ">
    </a>

    <!-- Desktop Menu -->
    <ul class="hidden md:flex space-x-6 items-center ubuntu-regular flex-1 justify-center">

        <li class="relative group">
            <a href="{{ route('loading-screen') }}?redirect={{ route('welcome') }}" class="nav-link">Home</a>
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
                <ul class="absolute left-0 opacity-0 invisible group-hover:opacity-100 group-hover:visible bg-[var(--nav-bg-color)] text-white mt-0 p-2 rounded-md shadow-lg space-y-1 w-[280px] text-sm transition-all duration-200 ease-in-out transform group-hover:translate-y-0 translate-y-[-10px]">
                    
                    <li class="relative group/chapter4">
                        <a href="#" class="block flex items-center justify-between hover:bg-[rgba(230,30,43,0.7)] rounded text-sm">
                            Pillars of Development 
                            <span class="ml-2 transform group-hover/chapter4:rotate-0 transition-all duration-300">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </span>
                        </a>
                        
                        <!-- Enhanced popup for Pillars of Development -->
                        <div class="submenu-right bg-[var(--nav-bg-color)] absolute opacity-0 invisible group-hover/chapter4:opacity-100 group-hover/chapter4:visible popup-content text-white p-2 rounded-md shadow-lg z-60 w-[300px] transition-all duration-200 ease-in-out transform group-hover/chapter4:translate-y-0 translate-y-[-10px]">
                            <div class="space-y-2">
                                <div class="popup-item rounded">
                                    Agricultural productivity
                                </div>
                                
                                <div class="relative group/industrial">
                                    <div class="popup-item rounded flex items-center justify-between cursor-pointer">
                                        Industrialisation
                                        <svg class="w-3 h-3 transform group-hover/industrial:rotate-90 transition-all duration-300" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <!-- Nested submenu for Industrialisation -->
                                    <div class="submenu-right absolute opacity-0 invisible group-hover/industrial:opacity-100 group-hover/industrial:visible popup-content text-white p-3 rounded-md shadow-lg z-80 w-[320px] transition-all duration-200 ease-in-out transform group-hover/industrial:translate-y-0 translate-y-[-10px]">
                                        <div class="space-y-1">
                                            <div class="popup-item rounded">Mining</div>
                                            <div class="popup-item rounded">Transport infrastructure</div>
                                            <div class="popup-item rounded">Energy</div>
                                            <div class="popup-item rounded">ICT and artificial intelligence</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="relative group/urban">
                                    <div class="popup-item rounded flex items-center justify-between cursor-pointer">
                                        Urbanisation
                                        <svg class="w-3 h-3 transform group-hover/urban:rotate-90 transition-all duration-300" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <!-- Nested submenu for Urbanisation -->
                                    <div class="submenu-right absolute opacity-0 invisible group-hover/urban:opacity-100 group-hover/urban:visible popup-content text-white p-3 rounded-md shadow-lg z-80 w-[280px] transition-all duration-200 ease-in-out transform group-hover/urban:translate-y-0 translate-y-[-10px]">
                                        <div class="space-y-1">
                                            <div class="popup-item rounded">Tourism</div>
                                            <div class="popup-item rounded">Creation of secondary cities</div>
                                            <div class="popup-item rounded">Land, housing and water services</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="popup-item rounded">
                                    Decentralisation
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <li class="relative group/chapter5">
                        <a href="#" class="block flex items-center justify-between hover:bg-[rgba(230,30,43,0.7)] rounded text-sm">
                            Enablers 
                            <span class="ml-2 transform group-hover/chapter5:rotate-0 transition-all duration-300">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </span>
                        </a>
                        
                        <!-- Enhanced popup for Enablers -->
                        <div class="submenu-right bg-[var(--nav-bg-color)] absolute opacity-0 invisible group-hover/chapter5:opacity-100 group-hover/chapter5:visible popup-content text-white p-2 rounded-md shadow-lg z-60 w-[300px] transition-all duration-200 ease-in-out transform group-hover/chapter5:translate-y-0 translate-y-[-10px]">
                            <div class="space-y-2">
                                <div class="popup-item rounded">
                                    Mindset change
                                </div>
                                
                                <div class="popup-item rounded">
                                    Rule of law, governance and corruption
                                </div>
                                
                                <div class="popup-item rounded">
                                    Public service performance
                                </div>
                                
                                <div class="popup-item rounded">
                                    Private sector, industry and trade
                                </div>
                                
                                <div class="popup-item rounded">
                                    Human capital development
                                </div>
                                
                                <div class="popup-item rounded">
                                    Environmental sustainability and disaster risk management
                                </div>
                                
                                <div class="popup-item rounded">
                                    Non-state actors
                                </div>
                                
                                <div class="popup-item rounded">
                                    Creative arts
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <li class="border-t border-gray-600 pt-2 mt-2">
                        <a href="#" class="block hover:bg-[rgba(230,30,43,0.7)] rounded">
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
                    background-color: var(--nav-bg-color);
                    /* border: 1px solid rgba(230, 30, 43, 0.2); */
                    box-shadow: 0 10px 30px rgba(213, 22, 22, 0.3);
                }

                .popup-title {
                    border-bottom: 1px rgba(230, 30, 43, 0.2);
                    
                }

                .popup-item {
                    transition: all 0.2s ease;
                    border-left: 2px solid transparent;
                    font-size: inherit;
                    font-weight: inherit;
                    line-height: inherit;
                }

                .popup-item:hover {
                    background: rgba(230, 30, 43, 0.7);
                    border-left-color: var(--theme-color);
                }
                
                /* Enhanced dropdown positioning for right-side submenus */
                .submenu-right {
                    left: calc(100% + 8px);
                    top: 0;
                }
                
                /* Mobile dropdown animations */
                .mobile-dropdown details[open] > summary svg {
                    transform: rotate(90deg);
                }
                
                .mobile-subdropdown details[open] > summary svg {
                    transform: rotate(90deg);
                }
                
                .mobile-subsubdropdown details[open] > summary svg {
                    transform: rotate(90deg);
                }
                
                /* Mobile menu styling */
                .mobile-dropdown summary,
                .mobile-subdropdown summary,
                .mobile-subsubdropdown summary {
                    transition: all 0.2s ease;
                }
                
                .mobile-dropdown summary:hover,
                .mobile-subdropdown summary:hover,
                .mobile-subsubdropdown summary:hover {
                    background: rgba(230, 30, 43, 0.3);
                    border-radius: 4px;
                }
                
                /* Full screen mobile menu styling */
                #mobile-menu {
                    transition: opacity 0.3s ease-in-out;
                }
                
                #mobile-menu.hidden {
                    opacity: 0;
                    pointer-events: none;
                }
                
                #mobile-menu:not(.hidden) {
                    opacity: 1;
                    pointer-events: auto;
                }
                
                /* Mobile menu scrollbar styling */
                #mobile-menu ul {
                    scrollbar-width: thin;
                    scrollbar-color: var(--theme-color) transparent;
                }
                
                #mobile-menu ul::-webkit-scrollbar {
                    width: 4px;
                }
                
                #mobile-menu ul::-webkit-scrollbar-track {
                    background: transparent;
                }
                
                #mobile-menu ul::-webkit-scrollbar-thumb {
                    background-color: var(--theme-color);
                    border-radius: 2px;
                }
            </style>



            {{-- end manifesto --}}




            <li class="relative group">
                <a href="#" class="nav-link">Playlist</a>
                <ul class="absolute left-0 opacity-0 invisible group-hover:opacity-100 group-hover:visible bg-[var(--nav-bg-color)] text-white mt-0 p-2 rounded-md shadow-lg space-y-1 z-50 w-[200px] text-sm transition-all duration-200 ease-in-out transform group-hover:translate-y-0 translate-y-[-10px]">
                    <li><a href="{{ route('loading-screen') }}?redirect={{ route('music') }}" class="block hover:bg-[rgba(230,30,43,0.7)] rounded text-sm">Songs</a></li>
                    <li><a href="{{ route('loading-screen') }}?redirect={{ route('videos') }}" class="block hover:bg-[rgba(230,30,43,0.7)] rounded text-sm">Videos</a></li>
                </ul>
            </li>

        

        {{-- ARCHIVES --}}
        <li class="relative group">
            <a href="#" class="nav-link">Archives</a>
            <ul class="absolute left-0 opacity-0 invisible group-hover:opacity-100 group-hover:visible bg-[var(--nav-bg-color)] text-white mt-0 p-2 rounded-md shadow-lg space-y-1 z-50 w-[280px] text-sm transition-all duration-200 ease-in-out transform group-hover:translate-y-0 translate-y-[-10px]">
                
                <!-- Previous Manifestos Dropdown -->
                <li class="relative group/manifestos">
                    <a href="#" class="block px-3 py-2 flex items-center justify-between hover:bg-[rgba(230,30,43,0.7)] rounded text-sm">
                        Previous Manifestos
                        <span class="ml-2 transform group-hover/manifestos:rotate-0 transition-all duration-300">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                    </a>
                    
                    <!-- Enhanced popup for Previous Manifestos -->
                    <div class="submenu-right absolute opacity-0 invisible group-hover/manifestos:opacity-100 group-hover/manifestos:visible popup-content text-white p-4 rounded-md shadow-lg z-60 w-[320px] transition-all duration-200 ease-in-out transform group-hover/manifestos:translate-y-0 translate-y-[-10px]">
                        <div class="space-y-2">
                            <div class="popup-item p-2 rounded">
                                <a href="{{ route('loading-screen') }}?redirect={{ route('manifesto2019') }}" class="block">
                                    2019
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
            <ul class="absolute left-0 opacity-0 invisible group-hover:opacity-100 group-hover:visible bg-[var(--nav-bg-color)] text-white mt-0 p-2 rounded-md shadow-lg space-y-1 z-50 w-[200px] text-sm transition-all duration-200 ease-in-out transform group-hover:translate-y-0 translate-y-[-10px]">
                <li><a href="{{ route('loading-screen') }}?redirect={{ route('about') }}" class="block hover:bg-[rgba(230,30,43,0.7)] rounded text-sm">About DPP</a></li>
                <li><a href="{{ route('loading-screen') }}?redirect={{ route('apm') }}" class="block hover:bg-[rgba(230,30,43,0.7)] rounded text-sm">Leadership</a></li>
            </ul>
        </li>

        <!-- <li><a href="{{ route('loading-screen') }}?redirect={{ route('contact') }}" class="nav-link">Contacts</a></li> -->
        <li class="nav-link flex-shrink-0">
            <a href="{{ route('loading-screen') }}?redirect={{ route('donate') }}"
                class="bg-[var(--theme-color)] hover:bg-[var(--hover-theme-color)] text-white font-bold py-2 px-6 rounded-full whitespace-nowrap">
                Donate
            </a>
        </li>
    </ul>

    <!-- Countdown Container (Right Side) -->
    <div class="hidden md:flex items-center">
{{-- COUNT DOWN  Desktop--}}
        <!--li class="nav-link flex-shrink-0 border border-[var(--theme-color)] bg-[#E61E2B] rounded-lg px-4 py-2 text-white text-sm ml-4"-->
        <li class="nav-link flex-shrink-0  rounded-lg px-4 py-2 text-white text-sm ml-4" style="background-color: #0574F7">
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
    </div>
</ul>
   
<!-- HAMBURGER + Countdown (Mobile Only) -->
<div class="flex items-center gap-3 md:hidden">
    <!-- Countdown -->
    <div class="rounded-lg px-4 py-2 text-white text-sm" style="background-color: #0574F7">
        <div class="text-center mb-1">
            <span class="text-xs font-bold uppercase tracking-wider">Count Down to 2025 Elections</span>
        </div>
        <div class="flex gap-2 items-center justify-center">
        
        <!-- Voting Icon -->
        <div>
                <img src="{{ asset('/assets/images/image 2.png') }}" alt="check icon" class="w-8 h-8 inline-block" />
        </div>

        <!-- Days -->
        <div class="flex flex-col items-center">
                <span id="days-mobile" class="text-sm font-bold">00 :</span>
                <div class="w-3 bg-white my-0.5" style="height: 0.5px;"></div>
                <span class="text-xs uppercase tracking-wide">Days</span>
        </div>
        <!-- Hours -->
        <div class="flex flex-col items-center">
                <span id="hours-mobile" class="text-sm font-bold">00 :</span>
                <div class="w-3 bg-white my-0.5" style="height: 0.5px;"></div>
                <span class="text-xs uppercase tracking-wide">Hours</span>
        </div>
            <!-- Minutes -->
        <div class="flex flex-col items-center">
                <span id="minutes-mobile" class="text-sm font-bold">00 :</span>
                <div class="w-3 bg-white my-0.5" style="height: 0.5px;"></div>
                <span class="text-xs uppercase tracking-wide">Min</span>
        </div>
            <!-- Seconds -->
        <div class="flex flex-col items-center">
                <span id="seconds-mobile" class="text-sm font-bold">00</span>
                <div class="w-3 bg-white my-0.5" style="height: 0.5px;"></div>
                <span class="text-xs uppercase tracking-wide">Sec</span>
            </div>
        </div>
    </div>

    <!-- Hamburger -->
    <button id="menu-toggle" class="text-2xl">
        <i class="fas fa-bars"></i>
    </button>
</div>



    <!-- Mobile Menu (full screen with close button) -->
<div id="mobile-menu" class="fixed inset-0 bg-[var(--nav-bg-color)] text-white hidden md:hidden z-50">
    <!-- Close Button -->
    <div class="flex justify-end p-4">
        <button id="mobile-close" class="text-2xl hover:text-[var(--theme-color)] transition-colors">
            <i class="fas fa-times"></i>
        </button>
    </div>
    
    <!-- Menu Content -->
    <ul class="px-5 py-5 space-y-4 ubuntu-regular overflow-y-auto h-full">

    <!-- Home -->
    <li><a href="{{ route('loading-screen') }}?redirect={{ url('/') }}" class="nav-link block py-2">Home</a></li>

    <!-- Manifesto -->
    <li>
        <details class="mobile-dropdown">
            <summary class="cursor-pointer py-2 flex items-center justify-between">
                <span>Manifesto</span>
                <svg class="w-4 h-4 transform transition-transform" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
            </summary>
            <ul class="ml-4 mt-2 space-y-2 border-l-2 border-[var(--theme-color)] pl-4">
                
                <!-- Pillars of Development -->
                <li>
                    <details class="mobile-subdropdown">
                        <summary class="cursor-pointer py-1 flex items-center justify-between">
                            <span>Pillars of Development</span>
                            <svg class="w-3 h-3 transform transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </summary>
                        <ul class="ml-4 mt-1 space-y-1 border-l border-gray-600 pl-3">
                            <li><a href="#" class="block py-1 text-sm">Agricultural productivity</a></li>
                            
                            <!-- Industrialisation -->
                            <li>
                                <details class="mobile-subsubdropdown">
                                    <summary class="cursor-pointer py-1 flex items-center justify-between text-sm">
                                        <span>Industrialisation</span>
                                        <svg class="w-3 h-3 transform transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </summary>
                                    <ul class="ml-4 mt-1 space-y-1 border-l border-gray-500 pl-3">
                                        <li><a href="#" class="block py-1 text-sm">Mining</a></li>
                                        <li><a href="#" class="block py-1 text-sm">Transport infrastructure</a></li>
                                        <li><a href="#" class="block py-1 text-sm">Energy</a></li>
                                        <li><a href="#" class="block py-1 text-sm">ICT and artificial intelligence</a></li>
                                    </ul>
                                </details>
                            </li>
                            
                            <!-- Urbanisation -->
                            <li>
                                <details class="mobile-subsubdropdown">
                                    <summary class="cursor-pointer py-1 flex items-center justify-between text-sm">
                                        <span>Urbanisation</span>
                                        <svg class="w-3 h-3 transform transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </summary>
                                    <ul class="ml-4 mt-1 space-y-1 border-l border-gray-500 pl-3">
                                        <li><a href="#" class="block py-1 text-sm">Tourism</a></li>
                                        <li><a href="#" class="block py-1 text-sm">Creation of secondary cities</a></li>
                                        <li><a href="#" class="block py-1 text-sm">Land, housing and water services</a></li>
                                    </ul>
                                </details>
                            </li>
                            
                            <li><a href="#" class="block py-1 text-sm">Decentralisation</a></li>
                        </ul>
                    </details>
                </li>
                
                <!-- Enablers -->
                <li>
                    <details class="mobile-subdropdown">
                        <summary class="cursor-pointer py-1 flex items-center justify-between">
                            <span>Enablers</span>
                            <svg class="w-3 h-3 transform transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </summary>
                        <ul class="ml-4 mt-1 space-y-1 border-l border-gray-600 pl-3">
                            <li><a href="#" class="block py-1 text-sm">Mindset change</a></li>
                            <li><a href="#" class="block py-1 text-sm">Rule of law, governance and corruption</a></li>
                            <li><a href="#" class="block py-1 text-sm">Public service performance</a></li>
                            <li><a href="#" class="block py-1 text-sm">Private sector, industry and trade</a></li>
                            <li><a href="#" class="block py-1 text-sm">Human capital development</a></li>
                            <li><a href="#" class="block py-1 text-sm">Environmental sustainability and disaster risk management</a></li>
                            <li><a href="#" class="block py-1 text-sm">Non-state actors</a></li>
                            <li><a href="#" class="block py-1 text-sm">Creative arts</a></li>
                        </ul>
                    </details>
                </li>
                
                <!-- 2025 Full Manifesto -->
                <li class="border-t border-gray-600 pt-2 mt-2">
                    <a href="#" class="block py-2 font-semibold">2025 Full Manifesto</a>
                </li>
            </ul>
        </details>
    </li>

    <!-- Playlist -->
    <li>
        <details class="mobile-dropdown">
            <summary class="cursor-pointer py-2 flex items-center justify-between">
                <span>Playlist</span>
                <svg class="w-4 h-4 transform transition-transform" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
            </summary>
            <ul class="ml-4 mt-2 space-y-2 border-l-2 border-[var(--theme-color)] pl-4">
                <li><a href="{{ route('loading-screen') }}?redirect={{ route('music') }}" class="block py-1">Songs</a></li>
                <li><a href="{{ route('loading-screen') }}?redirect={{ route('videos') }}" class="block py-1">Videos</a></li>
            </ul>
        </details>
    </li>

    <!-- Archives -->
    <li>
        <details class="mobile-dropdown">
            <summary class="cursor-pointer py-2 flex items-center justify-between">
                <span>Archives</span>
                <svg class="w-4 h-4 transform transition-transform" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
            </summary>
            <ul class="ml-4 mt-2 space-y-2 border-l-2 border-[var(--theme-color)] pl-4">
                
                <!-- Previous Manifestos -->
                <li>
                    <details class="mobile-subdropdown">
                        <summary class="cursor-pointer py-1 flex items-center justify-between">
                            <span>Previous Manifestos</span>
                            <svg class="w-3 h-3 transform transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </summary>
                        <ul class="ml-4 mt-1 space-y-1 border-l border-gray-600 pl-3">
                            <li><a href="{{ route('loading-screen') }}?redirect={{ route('manifesto2019') }}" class="block py-1 text-sm">2019</a></li>
                        </ul>
                    </details>
                </li>
            </ul>
        </details>
        </li>

    <!-- About -->
    <li>
        <details class="mobile-dropdown">
            <summary class="cursor-pointer py-2 flex items-center justify-between">
                <span>About</span>
                <svg class="w-4 h-4 transform transition-transform" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
            </summary>
            <ul class="ml-4 mt-2 space-y-2 border-l-2 border-[var(--theme-color)] pl-4">
                <li><a href="{{ route('loading-screen') }}?redirect={{ route('about') }}" class="block py-1">About DPP</a></li>
                <li><a href="{{ route('loading-screen') }}?redirect={{ route('apm') }}" class="block py-1">Leadership</a></li>
            </ul>
        </details>
    </li>

    <!-- Donate -->
    <li class="pt-4">
        <a href="{{ route('loading-screen') }}?redirect={{ route('donate') }}"
           class="block bg-[var(--theme-color)] hover:bg-[var(--hover-theme-color)] text-white font-bold py-3 px-6 rounded-full text-center">
           Donate
        </a>
    </li>

</ul>
</div>

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
            
            // Reset desktop countdown
            const daysElement = document.getElementById("days");
            const hoursElement = document.getElementById("hours");
            const minutesElement = document.getElementById("minutes");
            const secondsElement = document.getElementById("seconds");
            
            // Reset mobile countdown
            const daysMobileElement = document.getElementById("days-mobile");
            const hoursMobileElement = document.getElementById("hours-mobile");
            const minutesMobileElement = document.getElementById("minutes-mobile");
            const secondsMobileElement = document.getElementById("seconds-mobile");
            

            
            if (daysElement) daysElement.innerHTML = "00 :";
            if (hoursElement) hoursElement.innerHTML = "00 :";
            if (minutesElement) minutesElement.innerHTML = "00 :";
            if (secondsElement) secondsElement.innerHTML = "00";
            
            if (daysMobileElement) daysMobileElement.innerHTML = "00 :";
            if (hoursMobileElement) hoursMobileElement.innerHTML = "00 :";
            if (minutesMobileElement) minutesMobileElement.innerHTML = "00 :";
            if (secondsMobileElement) secondsMobileElement.innerHTML = "00";
            

            return;
        }

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Update desktop countdown
        const daysElement = document.getElementById("days");
        const hoursElement = document.getElementById("hours");
        const minutesElement = document.getElementById("minutes");
        const secondsElement = document.getElementById("seconds");
        
        // Update mobile countdown
        const daysMobileElement = document.getElementById("days-mobile");
        const hoursMobileElement = document.getElementById("hours-mobile");
        const minutesMobileElement = document.getElementById("minutes-mobile");
        const secondsMobileElement = document.getElementById("seconds-mobile");
        

        
        const timeString = (time) => (time < 10 ? "0" + time : time);
        
        if (daysElement) daysElement.innerHTML = timeString(days) + " :";
        if (hoursElement) hoursElement.innerHTML = timeString(hours) + " :";
        if (minutesElement) minutesElement.innerHTML = timeString(minutes) + " :";
        if (secondsElement) secondsElement.innerHTML = timeString(seconds);
        
        if (daysMobileElement) daysMobileElement.innerHTML = timeString(days) + " :";
        if (hoursMobileElement) hoursMobileElement.innerHTML = timeString(hours) + " :";
        if (minutesMobileElement) minutesMobileElement.innerHTML = timeString(minutes) + " :";
        if (secondsMobileElement) secondsMobileElement.innerHTML = timeString(seconds);
        

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
        const toggleBtn = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const closeBtn = document.getElementById('mobile-close');
        
        if (toggleBtn && mobileMenu) {
            // Open menu
            toggleBtn.addEventListener('click', () => {
                mobileMenu.classList.remove('hidden');
                document.body.style.overflow = 'hidden'; // Prevent background scrolling
            });
            
            // Close menu with X button
            if (closeBtn) {
                closeBtn.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    document.body.style.overflow = ''; // Restore scrolling
                });
            }
            
            // Close menu when clicking outside menu content
            mobileMenu.addEventListener('click', (e) => {
                if (e.target === mobileMenu) {
                    mobileMenu.classList.add('hidden');
                    document.body.style.overflow = ''; // Restore scrolling
                }
            });
            
            // Close menu with Escape key
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && !mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                    document.body.style.overflow = ''; // Restore scrolling
                }
            });
        }
    });
</script>