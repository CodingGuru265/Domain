@extends('layouts.front', ['pageTitle' => 'Dpp | Videos'])

@section('content')
    <!-- Particle Background -->
    <div id="particles-js" class="fixed inset-0 z-0"></div>
    
    <!-- Hero Section with Background Image -->
    <div class="relative min-h-[80vh] flex items-center justify-center overflow-hidden">     <!-- Animated Background -->
        <div class="absolute inset-0">
            <img src="{{ asset('assets/images/music/playerbg.png') }}" 
                 alt="Video Vibes" 
                 class="w-full h-full object-cover animate-pulse-slow">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/80 via-purple-900 to-red-900/80 animate-gradient"></div>
        </div>
        
        <!-- Floating Video Icons -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="floating-icon" style="--delay:0s; --left: 10%">📹</div>
            <div class="floating-icon" style="--delay:2s; --left: 20%">🎬</div>
            <div class="floating-icon" style="--delay:4s; --left: 30%">🎥</div>
            <div class="floating-icon" style="--delay:1s; --left: 70%">📺</div>
            <div class="floating-icon" style="--delay:3s; --left: 80%">🎭</div>
            <div class="floating-icon" style="--delay:5s; --left: 90%">🎪</div>
        </div>
        
        <!-- Hero Content -->
        <div class="relative z-10 text-center text-white px-4">
            <div class="mb-8">
                <h1 class="text-6xl md:text-8xl font-bold mb-4 text-transparent bg-clip-text animate-text-glow" style="background: linear-gradient(to right, #0574F7, #E61E2B); -webkit-background-clip: text; -webkit-text-fill-color: transparent; -webkit-text-stroke: 2px white; text-stroke: 2px white;">
                    Videos Playlist
                </h1>
                <div class="w-64 h-1 bg-white mt-6 animate-pulse" style="background: linear-gradient(to right, #0574F7, #E61E2B);"></div>
            </div>
            
            <!-- <div class="space-y-4 animate-fade-in-up">
                <p class="text-2xl md:text-3xl mb-2 text-white font-light"> Video Playlist</p>
                <p class="text-lg md:text-xl text-gray-200 max-w-3xl mx-auto leading-relaxed">
                    Watch the rhythm, feel the energy, and celebrate with the 
                    <span class="text-yellow-300 font-bold animate-bounce">best </span> videos!
                </p>
            </div> -->
            
            <!-- Animated Stats -->
            <div class="flex justify-center items-center space-x-8 mt-12 animate-fade-in-up" style="animation-delay: 0.5s;">
                <div class="text-center">
                    <div class="text-3xl font-bold text-white">{{ $totalVideos }}</div>
                    <div class="text-sm text-gray-300">Videos</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-white" id="total-downloads">{{ $totalDownloads }}</div>
                    <div class="text-sm text-gray-300">Downloads</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-white" id="total-views">{{ $totalViews }}</div>
                    <div class="text-sm text-gray-300">Views</div>
                </div>
            </div>
            
            <!-- Video Controls -->
            <div class="mt-8 flex justify-center animate-fade-in-up" style="animation-delay: 1s;">
                <div class="flex flex-row gap-16">
                    <button id="play-all-videos-btn" class="px-8 py-3 rounded-full text-white font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg" style="background: linear-gradient(to right, #0574F7, #E61E2B);">
                        <i class="fas fa-play mr-2"></i>Play All
                    </button>
                    <button id="fullscreen-btn" class="px-6 py-2 bg-white/20 backdrop-blur-sm rounded-full text-white font-semibold hover:bg-white/30 transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-expand mr-2"></i>Fullscreen
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1 animate-bounce">
            <div class="w-6 h-10 border-2 border-white rounded-full flex justify-center">
                <div class="w-1 h-3 rounded-full mt-2 animate-scroll"></div>
            </div>
        </div>
    </div>

    <!-- Video List Section with Enhanced Gradient Background -->
    <div class="relative min-h-screen py-20 px-4 overflow-hidden" style="background: linear-gradient(to bottom, #0574F7, #E61E2B);">     <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-20 left-10 w-32 h-32 bg-white/5 rounded-full blur-xl animate-float"></div>
            <div class="absolute top-40 right-20 w-48 h-48 rounded-full blur-lg animate-float" style="animation-delay: 2s;"></div>
            <div class="absolute bottom-40 left-20 w-56 h-56 bg-red-400 rounded-full blur-xl animate-float" style="animation-delay: 4s;"></div>
        </div>
        
        <div class="max-w-7xl mx-auto relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16 animate-fade-in-up">
                <!-- <h2 class="text-4xl md:text-5xl font-bold text-white mb-4 drop-shadow-2xl"> All Videos</h2> -->
                <p class="text-xl text-blue-100 max-w-2xl mx-auto drop-shadow-lg">Watch, Share & download DPP's official music videos & more</p>
            </div>
            
            <div class="grid gap-12">
                @php
                    $videoFiles = [
                        'Sendera Sisters - Tikwasaka.mp4',
                        'Sendera Sisters - Akufuna Ndani.mp4',
                        'Sendera Sisters - Abetcha Lowa.mp4',
                    ];
                @endphp
                @foreach ($videoFiles as $index => $video)
                    <div class="video-card bg-black/30 backdrop-blur-md rounded-3xl shadow-2xl border border-white/30 hover:bg-black/40 transition-all duration-500 transform hover:scale-[1.2] hover:shadow-3xl animate-fade-in-up" 
                         style="animation-delay: {{ $index * 0.2 }}s;">
                        
                        <!-- Glow Effect -->
                        <div class="absolute inset-0 rounded-3xl blur-xl opacity-0 transition-opacity duration-500 group-hover:opacity-100" style="background: linear-gradient(to right, rgba(56, 247, 0.2, 0.5), rgba(230, 30, 43, 0.5));"></div>
                        
                        <!-- Enhanced Video Player -->
                        <div class="flex flex-col lg:flex-row items-center gap-8">
                            <div class="flex-1">
                                <div class="relative group/video">
                                    <video controls class="w-full rounded-2xl shadow-2xl bg-black" 
                                           poster="{{ asset('assets/images/videos/thumbnail.png') }}"
                                           preload="metadata">
                                        <source src="{{ asset('assets/images/videos/' . $video) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    
                                    <!-- Video Overlay -->
                                    <div class="absolute inset-0 bg-black/20 rounded-2xl opacity-0 group-hover/video:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                        <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                                            <i class="fas fa-play text-white text-2xl"></i>
                                        </div>
                                    </div>
                                    
                                    <!-- Video Duration Badge -->
                                    <div class="absolute top-4 right-4 bg-black/70 backdrop-blur-sm rounded-full px-3 py-1">
                                        <span class="text-white text-sm font-medium">HD</span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Enhanced Video Info -->
                            <div class="flex-1 text-center lg:text-left">
                                <h3 class="text-3xl font-bold text-white mb-4 transition-colors drop-shadow-lg">{{ pathinfo($video, PATHINFO_FILENAME) }}</h3>
                                <p class="text-lg text-blue-100 mb-3 drop-shadow-md">By <span class="font-semibold text-yellow-300 drop-shadow-lg">Sendera Sisters</span></p>
                                <p class="text-sm text-white bg-blue-500 rounded-full px-4 py-1 inline-block border border-blue-400 mb-4">Music Video</p>                  
                                <!-- Video Stats -->
                                <div class="flex items-center justify-center lg:justify-start space-x-6 mb-6">
                                    <div class="text-center">
                                        <div class="text-2xl font-bold text-white">{{ $videoStats[$video]['views'] ?? 0 }}</div>
                                        <div class="text-xs text-gray-300">Views</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-2xl font-bold text-white">{{ $videoStats[$video]['downloads'] ?? 0 }}</div>
                                        <div class="text-xs text-gray-300">Downloads</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-2xl font-bold text-white">{{ rand(15, 25) }} MB</div>
                                        <div class="text-xs text-gray-300">Size</div>
                                    </div>
                                </div>
                                
                                <!-- Download Button -->
                                <div class="flex items-center justify-center lg:justify-start space-x-4">
                                    <a href="{{ route('videos.download', ['filename' => $video]) }}" class="download-btn inline-flex items-center px-6 py-2 bg-white/20 backdrop-blur-sm rounded-full text-white font-medium hover:bg-white/30 transition-all duration-300 transform hover:scale-105 border border-white/30" data-filename="{{ $video }}">
                                        <i class="fas fa-download mr-2"></i>
                                        Download
                                    </a>
                                    <button class="share-btn inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-white font-medium hover:bg-white/20 transition-all duration-300 transform hover:scale-105 border border-white/20">
                                        <i class="fas fa-share mr-2"></i>
                                        Share
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <style>
        /* Custom Animations */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        @keyframes text-glow {
            0%, 100% { text-shadow: 0 0 20px rgba(51, 165, 255, 0.8); }
            50% { text-shadow: 0 0 30px rgba(230, 30, 43, 0.8), 0 0 40px rgba(51, 167, 255, 0.6); }
        }
        
        @keyframes gradient {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        
        @keyframes scroll {
            0% { transform: translateY(0px); opacity: 0; }
            100% { transform: translateY(20px); opacity: 1; }
        }
        
        @keyframes pulse-slow {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.8; }
        }
        
        @keyframes fade-in-up {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0px); }
        }
        
        /* Animation Classes */
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        
        .animate-text-glow {
            animation: text-glow 3s ease-in-out infinite;
        }
        
        .animate-gradient {
            background-size: 200% 200%;
            animation: gradient 15s infinite;
        }
        
        .animate-scroll {
            animation: scroll 2s ease-in-out infinite;
        }
        
        .animate-pulse-slow {
            animation: pulse-slow 4s ease-in-out infinite;
        }
        
        .animate-fade-in-up {
            animation: fade-in-up 1s ease-out forwards;
            opacity: 0;
        }
        
        /* Floating Icons */
        .floating-icon {
            position: absolute;
            font-size: 2em;
            color: rgba(255, 255, 255, 0.3);
            animation: float 8s ease-in-out infinite;
            animation-delay: var(--delay);
            left: var(--left);
            top: 20%;
        }
        
        /* Video Card Styles */
        .video-card {
            position: relative;
            overflow: hidden;
            perspective: 1000;
            backdrop-filter: blur(10px);
        }
        
        .video-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1));
            transition: left 0.5s;
        }
        
        .video-card:hover::before {
            left: 100%;
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }
        
        ::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
        }
        
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, #574100, #cc1a26);
            border-radius: 5px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(to bottom, #461, #cc1a26);
        }
        
        /* Shadow effects */
        .shadow-3xl {
            box-shadow: 0 50px -12px rgba(0, 0, 0, 0.5);
        }
    </style>

    <!-- Particles.js -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    
    <script>
        // Initialize Particles
        particlesJS('particles-js', {
            particles: {
                number: { value: 80, density: { enable: true, value_area: 800 } },
                color: { value: '#ffffff' },
                shape: { type: 'circle' },
                opacity: { value: 0.3, random: false },
                size: { value: 3, random: true },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: '#ffffff',
                    opacity: 0.2,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 2,
                    direction: 'none',
                    random: false,
                    straight: false,
                    out_mode: 'out',
                    bounce: false
                }
            },
            interactivity: {
                detect_on: 'canvas',
                events: {
                    onhover: { enable: true, mode: 'repulse' },
                    onclick: { enable: true, mode: 'push' },
                    resize: true
                }
            },
            retina_detect: true
        });

        // Counter Animation
        function animateCounter(element) {
            const target = parseInt(element.getAttribute('data-target'));
            const duration = 2000;
            const step = target / (duration / 16);
            let current = 0;
            
            const timer = setInterval(() => {
                current += step;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                element.textContent = Math.floor(current);
            }, 16);
        }

        // Animate counters when they come into view
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        });

        document.querySelectorAll('.counter').forEach(counter => {
            observer.observe(counter);
        });

        // Enhanced Video Player
        document.addEventListener('DOMContentLoaded', function() {
            const videos = document.querySelectorAll('video');
            let currentPlayingVideo = null;
            
            // Play All functionality
            document.getElementById('play-all-videos-btn').addEventListener('click', function() {
                const firstVideo = document.querySelector('video');
                if (firstVideo) {
                    firstVideo.play();
                    currentPlayingVideo = firstVideo;
                }
            });
            
            // Fullscreen functionality
            document.getElementById('fullscreen-btn').addEventListener('click', function() {
                const firstVideo = document.querySelector('video');
                if (firstVideo) {
                    if (firstVideo.requestFullscreen) {
                        firstVideo.requestFullscreen();
                    } else if (firstVideo.webkitRequestFullscreen) {
                        firstVideo.webkitRequestFullscreen();
                    } else if (firstVideo.msRequestFullscreen) {
                        firstVideo.msRequestFullscreen();
                    }
                }
            });
            
            // Video event listeners
            videos.forEach(video => {
                video.addEventListener('play', function() {
                    // Pause all other videos
                    videos.forEach(otherVideo => {
                        if (otherVideo !== video) {
                            otherVideo.pause();
                        }
                    });
                    currentPlayingVideo = video;

                    // Track view
                    const source = video.querySelector('source');
                    if (source) {
                        const filename = source.getAttribute('src').split('/').pop();
                        fetch("{{ route('videos.trackView') }}", {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({ filename })
                        })
                        .then(res => res.json())
                        .then(data => {
                            if (data.success) {
                                // Update view count in UI
                                const statsDiv = video.closest('.video-card').querySelectorAll('.text-center');
                                if (statsDiv.length > 0) {
                                    statsDiv[0].querySelector('div').textContent = data.views;
                                }
                                document.getElementById('total-views').textContent = data.total_views;
                            }
                        });
                    }
                });
                
                video.addEventListener('ended', function() {
                    currentPlayingVideo = null;
                });
            });

            // Download tracking
            document.querySelectorAll('.download-btn').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    const filename = this.getAttribute('data-filename');
                    fetch("{{ route('videos.trackDownload') }}", {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({ filename })
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.success) {
                            // Update download count in UI
                            const statsDiv = this.closest('.video-card').querySelectorAll('.text-center');
                            if (statsDiv.length > 1) {
                                statsDiv[1].querySelector('div').textContent = data.downloads;
                            }
                            document.getElementById('total-downloads').textContent = data.total_downloads;
                        }
                    });
                });
            });
            
            // 3D Card Effect
            document.querySelectorAll('.video-card').forEach(card => {
                card.addEventListener('mousemove', function(e) {
                    const rect = this.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;
                    
                    const rotateX = (y - centerY) / 20;
                    const rotateY = (centerX - x) / 20;
                    
                    this.style.transform = `perspective(1000) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.02)`;
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = `perspective(1000) rotateX(0deg) rotateY(0deg) scale(1)`;
                });
            });
        });
    </script>
@endsection 