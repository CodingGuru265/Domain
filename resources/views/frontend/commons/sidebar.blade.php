

<!-- Sidebar Overlay -->
<div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden transition-opacity duration-300"></div>

<!-- Sidebar -->
<aside id="sidebar" class="bg-[var(--nav-bg-color)] fixed left-0 top-0 h-full w-64 shadow-lg z-50 transform -translate-x-full transition-transform duration-300">
    <div class="p-4 h-full overflow-y-auto">
        <!-- Close Button -->
        <div class="flex justify-end mb-4">
            <button id="close-btn" class="text-white text-xl hover:text-[var(--theme-color)] transition-colors">
                <i class="fas fa-times"></i>
            </button>
        </div>
        
        <!-- Logo -->
        <div class="flex items-center mb-6">
            <img src="{{ asset('assets/images/DPP-1-removebg-preview (2).png') }}" alt="Logo" class="h-12 w-auto mr-2">
            <h2 class="text-lg font-bold text-white">Democratic Progressive Party</h2>
        </div>

        <!-- Navigation Menu -->
        <ul class="space-y-2">
            <!-- Home -->
            <li>
                <a href="{{ route('loading-screen') }}?redirect={{ url('/') }}" class="flex items-center text-white hover:bg-[rgba(230,30,43,0.7)] rounded transition-colors">
                    <i class="fas fa-home "></i>
                    <span>Home</span>
                </a>
            </li>

            <!-- Manifesto -->
            <li>
                <button onclick="toggleSidebarDropdown('manifesto')" class="flex justify-between items-center text-white w-full hover:bg-[rgba(230,30,43,0.7)] rounded transition-colors">
                    <span><i class="fas fa-file-pdf mr-3"></i> Manifesto</span>
                    <i id="manifesto-arrow" class="fas fa-chevron-right transition-transform"></i>
                </button>
                <ul id="manifesto" class="pl-6 hidden space-y-1">
                    
                    <!-- Pillars of Development -->
                    <li>
                        <button onclick="toggleSidebarDropdown('pillars')" class="flex justify-between items-center text-white w-full hover:bg-[rgba(230,30,43,0.5)] rounded transition-colors">
                            <span>Pillars of Development</span>
                            <i id="pillars-arrow" class="fas fa-chevron-right transition-transform"></i>
                        </button>
                        <ul id="pillars" class="pl-4 hidden space-y-1">
                            <li><a href="#" class="block text-white hover:bg-[rgba(230,30,43,0.3)] rounded text-sm">Agricultural productivity</a></li>
                            
                            <!-- Industrialisation -->
                            <li>
                                <button onclick="toggleSidebarDropdown('industrial')" class="flex justify-between items-center text-white w-full hover:bg-[rgba(230,30,43,0.3)] rounded transition-colors">
                                    <span class="text-sm">Industrialisation</span>
                                    <i id="industrial-arrow" class="fas fa-chevron-right transition-transform"></i>
                                </button>
                                <ul id="industrial" class="pl-4 hidden space-y-1">
                                    <li><a href="#" class="block text-white hover:bg-[rgba(230,30,43,0.2)] rounded text-sm">Mining</a></li>
                                    <li><a href="#" class="block text-white hover:bg-[rgba(230,30,43,0.2)] rounded text-sm">Transport infrastructure</a></li>
                                    <li><a href="#" class="block text-white hover:bg-[rgba(230,30,43,0.2)] rounded text-sm">Energy</a></li>
                                    <li><a href="#" class="block text-white hover:bg-[rgba(230,30,43,0.2)] rounded text-sm">ICT and artificial intelligence</a></li>
                                </ul>
                            </li>
                            
                            <!-- Urbanisation -->
                            <li>
                                <button onclick="toggleSidebarDropdown('urban')" class="flex justify-between items-center p-2 text-white w-full hover:bg-[rgba(230,30,43,0.3)] rounded transition-colors">
                                    <span class="text-sm">Urbanisation</span>
                                    <i id="urban-arrow" class="fas fa-chevron-right transition-transform"></i>
                                </button>
                                <ul id="urban" class="pl-4 hidden space-y-1">
                                    <li><a href="#" class="block text-white hover:bg-[rgba(230,30,43,0.2)] rounded text-sm">Tourism</a></li>
                                    <li><a href="#" class="block text-white hover:bg-[rgba(230,30,43,0.2)] rounded text-sm">Creation of secondary cities</a></li>
                                    <li><a href="#" class="block text-white hover:bg-[rgba(230,30,43,0.2)] rounded text-sm">Land, housing and water services</a></li>
                                </ul>
                            </li>
                            
                            <li><a href="#" class="block text-white hover:bg-[rgba(230,30,43,0.3)] rounded text-sm">Decentralisation</a></li>
                        </ul>
                    </li>
                    
                    <!-- Enablers -->
                    <li>
                        <button onclick="toggleSidebarDropdown('enablers')" class="flex justify-between items-center p-2 text-white w-full hover:bg-[rgba(230,30,43,0.5)] rounded transition-colors">
                            <span>Enablers</span>
                            <i id="enablers-arrow" class="fas fa-chevron-right transition-transform"></i>
                        </button>
                        <ul id="enablers" class="pl-4 hidden space-y-1">
                            <li><a href="#" class="block text-white hover:bg-[rgba(230,30,43,0.3)] rounded text-sm">Mindset change</a></li>
                            <li><a href="#" class="block text-white hover:bg-[rgba(230,30,43,0.3)] rounded text-sm">Rule of law, governance and corruption</a></li>
                            <li><a href="#" class="block text-white hover:bg-[rgba(230,30,43,0.3)] rounded text-sm">Public service performance</a></li>
                            <li><a href="#" class="block text-white hover:bg-[rgba(230,30,43,0.3)] rounded text-sm">Private sector, industry and trade</a></li>
                            <li><a href="#" class="block text-white hover:bg-[rgba(230,30,43,0.3)] rounded text-sm">Human capital development</a></li>
                            <li><a href="#" class="block text-white hover:bg-[rgba(230,30,43,0.3)] rounded text-sm">Environmental sustainability and disaster risk management</a></li>
                            <li><a href="#" class="block text-white hover:bg-[rgba(230,30,43,0.3)] rounded text-sm">Non-state actors</a></li>
                            <li><a href="#" class="block text-white hover:bg-[rgba(230,30,43,0.3)] rounded text-sm">Creative arts</a></li>
                        </ul>
                    </li>
                    
                    <!-- 2025 Full Manifesto -->
                    <li class="border-t border-gray-600 pt-2 mt-2">
                        <a href="#" class="block p-2 text-white hover:bg-[rgba(230,30,43,0.5)] rounded font-semibold">
                            2025 Full Manifesto
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Playlist -->
            <li>
                <button onclick="toggleSidebarDropdown('playlist')" class="flex justify-between items-center text-white w-full hover:bg-[rgba(230,30,43,0.7)] rounded transition-colors">
                    <span><i class="fas fa-music mr-3"></i> Playlist</span>
                    <i id="playlist-arrow" class="fas fa-chevron-right transition-transform"></i>
                </button>
                <ul id="playlist" class="pl-6 hidden space-y-1">
                    <li><a href="{{ route('loading-screen') }}?redirect={{ route('music') }}" class="block p-2 text-white hover:bg-[rgba(230,30,43,0.5)] rounded">Songs</a></li>
                    <li><a href="{{ route('loading-screen') }}?redirect={{ route('videos') }}" class="block p-2 text-white hover:bg-[rgba(230,30,43,0.5)] rounded">Videos</a></li>
                </ul>
            </li>

            <!-- Archives -->
            <li>
                <button onclick="toggleSidebarDropdown('archives')" class="flex justify-between items-center text-white w-full hover:bg-[rgba(230,30,43,0.7)] rounded transition-colors">
                    <span><i class="fas fa-archive mr-3"></i> Archives</span>
                    <i id="archives-arrow" class="fas fa-chevron-right transition-transform"></i>
                </button>
                <ul id="archives" class="pl-6 hidden space-y-1">
                    
                    <!-- Previous Manifestos -->
                    <li>
                        <button onclick="toggleSidebarDropdown('previous-manifestos')" class="flex justify-between items-center p-2 text-white w-full hover:bg-[rgba(230,30,43,0.5)] rounded transition-colors">
                            <span>Previous Manifestos</span>
                            <i id="previous-manifestos-arrow" class="fas fa-chevron-right transition-transform"></i>
                        </button>
                        <ul id="previous-manifestos" class="pl-4 hidden space-y-1">
                            <li><a href="{{ route('loading-screen') }}?redirect={{ route('manifesto2019') }}" class="block p-2 text-white hover:bg-[rgba(230,30,43,0.3)] rounded text-sm">2019</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <!-- About -->
            <li>
                <button onclick="toggleSidebarDropdown('about')" class="flex justify-between items-center text-white w-full hover:bg-[rgba(230,30,43,0.7)] rounded transition-colors">
                    <span><i class="fas fa-info-circle mr-3"></i> About</span>
                    <i id="about-arrow" class="fas fa-chevron-right transition-transform"></i>
                </button>
                <ul id="about" class="pl-6 hidden space-y-1">
                    <li><a href="{{ route('loading-screen') }}?redirect={{ route('about') }}" class="block text-white hover:bg-[rgba(230,30,43,0.5)] rounded">About DPP</a></li>
                    <li><a href="{{ route('loading-screen') }}?redirect={{ route('apm') }}" class="block text-white hover:bg-[rgba(230,30,43,0.5)] rounded">Leadership</a></li>
                </ul>
            </li>
        </ul>

        <!-- Donate -->
        <div class="mt-6 pt-4 border-t border-gray-600">
            <a href="{{ route('loading-screen') }}?redirect={{ route('donate') }}" 
               class="block w-full bg-[var(--theme-color)] hover:bg-[var(--hover-theme-color)] text-white font-bold py-3 px-6 rounded-full text-center transition-colors">
               Donate
            </a>
        </div>
    </div>
</aside>

<script>
    function toggleSidebarDropdown(id) {
        const element = document.getElementById(id);
        const arrow = document.getElementById(`${id}-arrow`);

        if (element.classList.contains('hidden')) {
            element.classList.remove('hidden');
            arrow.style.transform = 'rotate(90deg)';
        } else {
            element.classList.add('hidden');
            arrow.style.transform = 'rotate(0deg)';
        }
    }

    // Sidebar open/close functionality
    document.addEventListener('DOMContentLoaded', function() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebar-overlay');
        const closeBtn = document.getElementById('close-btn');
        
        // Function to open sidebar
        window.openSidebar = function() {
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
            document.body.style.overflow = 'hidden'; // Prevent background scrolling
        }
        
        // Function to close sidebar
        window.closeSidebar = function() {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
            document.body.style.overflow = ''; // Restore scrolling
        }
        
        // Close button event
        if (closeBtn) {
            closeBtn.addEventListener('click', closeSidebar);
        }
        
        // Close sidebar when clicking overlay
        if (overlay) {
            overlay.addEventListener('click', closeSidebar);
        }
        
        // Close sidebar with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !sidebar.classList.contains('-translate-x-full')) {
                closeSidebar();
            }
        });
    });
</script>
