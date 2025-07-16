
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
    <ul class="absolute left-0 opacity-0 invisible group-hover:opacity-100 group-hover:visible bg-[var(--nav-bg-color)] text-white mt-0 p-2 rounded-md shadow-lg space-y-1 z-50 w-[240px] text-xs transition-all duration-200 ease-in-out transform group-hover:translate-y-0 translate-y-[-10px]">
        <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)] text-xs">FOREWORD</a></li>
        <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)] text-xs">OUR COLLECTIVE VISION</a></li>
        <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)] text-xs">OUR MISSION</a></li>
        <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)] text-xs">OUR PLEDGE</a></li>
        <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)] text-xs">OUR CALL FOR UNITY</a></li>
        <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)] text-xs">CHAPTER 1: CONTEXT</a></li>
        <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)] text-xs">CHAPTER 2: GUARANTEES AND SAFEGUARDS</a></li>
        <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)] text-xs">CHAPTER 3: THE MACROECONOMIC FRAMEWORK</a></li>
        
        <li class="relative group/chapter4">
            <a href="#" class="block px-3 py-1.5 flex items-center justify-between hover:bg-[var(--theme-color)] text-xs">
                CHAPTER 4: PILLARS OF DEVELOPMENT 
                <span class="ml-2 transform group-hover/chapter4:rotate-90 transition-all duration-300 text-xs">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </span>
            </a>
            <ul class="absolute left-[calc(100%+8px)] top-0 opacity-0 invisible group-hover/chapter4:opacity-100 group-hover/chapter4:visible bg-[var(--nav-bg-color)] text-white p-2 rounded-md shadow-lg space-y-1 z-50 w-[220px] text-xs transition-all duration-200 ease-in-out transform group-hover/chapter4:translate-x-0 translate-x-[-10px]">
                <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)] text-xs">4.1 AGRICULTURAL PRODUCTIVITY</a></li>
                
                <li class="relative group/industrial">
                    <a href="#" class="block px-3 py-1.5 flex items-center justify-between hover:bg-[var(--theme-color)] text-xs">
                        4.2 INDUSTRIALISATION 
                        <span class="ml-2 transform group-hover/industrial:rotate-90 transition-all duration-300 text-xs">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                    </a>
                    <ul class="absolute left-[calc(100%+8px)] top-0 opacity-0 invisible group-hover/industrial:opacity-100 group-hover/industrial:visible bg-[var(--nav-bg-color)] text-white p-2 rounded-md shadow-lg space-y-1 z-50 w-[180px] text-xs transition-all duration-200 ease-in-out transform group-hover/industrial:translate-x-0 translate-x-[-10px]">
                        <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)] text-xs">4.2.1 MINING</a></li>
                        <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)] text-xs">4.2.2 TRANSPORT INFRASTRUCTURE</a></li>
                        <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)] text-xs">4.2.3 ENERGY</a></li>
                        <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)] text-xs">4.2.4 ICT AND ARTIFICIAL INTELLIGENCE</a></li>
                    </ul>
                </li>
                
                <li class="relative group/urban">
                    <a href="#" class="block px-3 py-1.5 flex items-center justify-between hover:bg-[var(--theme-color)] text-xs">
                        4.3 URBANISATION 
                        <span class="ml-2 transform group-hover/urban:rotate-90 transition-all duration-300 text-xs">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                    </a>
                    <ul class="absolute left-[calc(100%+8px)] top-0 opacity-0 invisible group-hover/urban:opacity-100 group-hover/urban:visible bg-[var(--nav-bg-color)] text-white p-2 rounded-md shadow-lg space-y-1 z-50 w-[200px] text-xs transition-all duration-200 ease-in-out transform group-hover/urban:translate-x-0 translate-x-[-10px]">
                        <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)] text-xs">4.3.1 TOURISM</a></li>
                        <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)] text-xs">4.3.2 CREATION OF SECONDARY CITIES</a></li>
                        <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)] text-xs">4.3.3 LAND, HOUSING AND WATER SERVICES</a></li>
                    </ul>
                </li>
                
                <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)] text-xs">4.4 DECENTRALISATION</a></li>
            </ul>
        </li>
        
        <li class="relative group/chapter5">
            <a href="#" class="block px-3 py-1.5 flex items-center justify-between hover:bg-[var(--theme-color)] text-xs">
                CHAPTER 5: ENABLERS 
                <span class="ml-2 transform group-hover/chapter5:rotate-90 transition-all duration-300 text-xs">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </span>
            </a>
            <ul class="absolute left-[calc(100%+8px)] top-0 opacity-0 invisible group-hover/chapter5:opacity-100 group-hover/chapter5:visible bg-[var(--nav-bg-color)] text-white p-2 rounded-md shadow-lg space-y-1 z-50 w-[240px] text-xs transition-all duration-200 ease-in-out transform group-hover/chapter5:translate-x-0 translate-x-[-10px]">
                <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)] text-xs">5.1 MINDSET CHANGE</a></li>
                
                <li class="relative group/governance">
                    <a href="#" class="block px-3 py-1.5 flex items-center justify-between hover:bg-[var(--theme-color)] text-xs">
                        5.2 RULE OF LAW, GOVERNANCE AND CORRUPTION 
                        <span class="ml-2 transform group-hover/governance:rotate-90 transition-all duration-300 text-xs">
                           
                        </span>
                    </a>
                   
                </li>
                
                <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)] text-xs">5.3 PUBLIC SERVICE PERFORMANCE</a></li>
                <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)] text-xs">5.4 PRIVATE SECTOR, INDUSTRY AND TRADE</a></li>
                
                <li class="relative group/human">
                    <a href="#" class="block px-3 py-1.5 flex items-center justify-between hover:bg-[var(--theme-color)] text-xs">
                        5.5 HUMAN CAPITAL DEVELOPMENT 
                        <span class="ml-2 transform group-hover/human:rotate-90 transition-all duration-300 text-xs">
                           
                        </span>
                    </a>
                 
                </li>
                
                <li class="relative group/environment">
                    <a href="#" class="block px-3 py-1.5 flex items-center justify-between hover:bg-[var(--theme-color)] text-xs">
                        5.6 ENVIRONMENTAL SUSTAINABILITY AND DISASTER RISK MANAGEMENT 
                        <span class="ml-2 transform group-hover/environment:rotate-90 transition-all duration-300 text-xs">
                         
                        </span>
                    </a>
                  
                </li>
                
                <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)] text-xs">5.7 NON-STATE ACTORS: MEDIA, CIVIL SOCIETY & RELIGIOUS ORGANISATIONS</a></li>
                <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)] text-xs">5.8 CREATIVE ARTS</a></li>
            </ul>
        </li>
        
        <li><a href="#" class="block px-3 py-1.5 hover:bg-[var(--theme-color)] text-xs">CHAPTER 6: A CALL TO MALAWIANS AND PARTNERS</a></li>
        
        <!-- Divider -->
        <div class="border-t border-gray-300 my-2"></div>
        
        <!-- Others Section -->
        <li class="relative group/others">
            <div class="px-3 py-1 text-xs font-semibold text-gray-300 uppercase tracking-wider">Others</div>
          
             <li><a href="{{ route('loading-screen') }}?redirect={{ route('manifesto2019') }}" class="block px-3 py-1.5 hover:bg-[var(--theme-color)] text-xs">Manifesto 2019</a></li>
        </li>
    </ul>
</li> 





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

      
        
        <li><a href="{{ route('loading-screen') }}?redirect={{ route('contact') }}" class="nav-link">Contacts</a></li>
        <li class="nav-link flex-shrink-0">
            <a href="{{ route('loading-screen') }}?redirect={{ route('donate') }}"
                class="bg-[var(--theme-color)] hover:bg-[var(--hover-theme-color)] text-white font-bold py-2 px-6 rounded-full whitespace-nowrap">
                Donate  to Party
            </a>
        </li>


{{-- COUNT DOWN  Desktop--}}

        
        <li class="nav-link flex-shrink-0 border border-[var(--theme-color)] bg-[#E61E2B] rounded-lg px-4 py-2 text-white text-sm ml-4">
            <div class="flex gap-4 items-center justify-center">
                <!-- Days -->
                <div class="flex flex-col items-center">
                    <span class="text-xl font-bold">00 :</span>
                    <div class="w-5 bg-white my-1" style="height: 0.5px;"></div>
                    <span class="text-xs uppercase tracking-wide">Days</span>
                </div>
                <!-- Hours -->
                <div class="flex flex-col items-center">
                    <span class="text-xl font-bold">00 :</span>
                    <div class="w-5 bg-white my-1" style="height: 0.5px;"></div>
                    <span class="text-xs uppercase tracking-wide">Hours</span>
                </div>
                <!-- Minutes -->
                <div class="flex flex-col items-center">
                    <span class="text-xl font-bold">00 :</span>
                <div class="w-5 bg-white my-1" style="height: 0.5px;"></div>
                    <span class="text-xs uppercase tracking-wide">Min</span>
                </div>
                <!-- Seconds -->
                <div class="flex flex-col items-center">
                    <span class="text-xl font-bold">00</span>
                <div class="w-5 bg-white my-1" style="height: 0.5px;"></div>
                    <span class="text-xs uppercase tracking-wide">Sec</span>
                </div>
            </div>
        </li>


</ul>
   
<!-- HAMBURGER + Countdown (Mobile Only) -->
<div class="flex items-center gap-3 md:hidden">
    <!-- Countdown -->
    <div class="flex gap-2 items-center border border-[var(--theme-color)] bg-[#E61E2B] rounded-md px-2 py-1 text-white text-[10px]">
        <!-- Days -->
        <div class="flex flex-col items-center">
            <span class="text-xs font-bold leading-none">00 :</span>
            <div class="w-4 bg-white my-0.5" style="height: 0.5px;"></div>
            <span class="uppercase tracking-tight" style="font-size: 0.55rem;">Days</span>
        </div>
        <!-- Hours -->
        <div class="flex flex-col items-center">
            <span class="text-xs font-bold leading-none">00 :</span>
            <div class="w-4 bg-white my-0.5" style="height: 0.5px;"></div>
            <span class="uppercase tracking-tight" style="font-size: 0.55rem;">Hours</span>
        </div>
        <!-- Min -->
        <div class="flex flex-col items-center">
            <span class="text-xs font-bold leading-none">00 :</span>
            <div class="w-4 bg-white my-0.5" style="height: 0.5px;"></div>
            <span class="uppercase tracking-tight" style="font-size: 0.55rem;">Min</span>
        </div>
        <!-- Sec -->
        <div class="flex flex-col items-center">
            <span class="text-xs font-bold leading-none">00</span>
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
