@extends('layouts.front', ['pageTitle' => 'DPP | Videos'])

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
            <div class="text-center mb-6 animate-fade-in-up">
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
                                <div class="relative">
                                    <video controls class="w-full rounded-2xl shadow-2xl bg-black custom-video-player" 
                                           poster="{{ asset('assets/images/videos/thumbnail.png') }}"
                                           preload="metadata"
                                           crossorigin="anonymous">
                                        <source src="{{ asset('assets/images/videos/' . $video) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
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
                                        <div class="text-2xl font-bold text-white video-views" data-filename="{{ $video }}">{{ $videoStats[$video]['views'] ?? 0 }}</div>
                                        <div class="text-xs text-gray-300">Views</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-2xl font-bold text-white video-downloads" data-filename="{{ $video }}">{{ $videoStats[$video]['downloads'] ?? 0 }}</div>
                                        <div class="text-xs text-gray-300">Downloads</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-2xl font-bold text-white">{{ rand(15, 25) }} MB</div>
                                        <div class="text-xs text-gray-300">Size</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-lg font-bold text-yellow-300 video-status" data-filename="{{ $video }}">Ready</div>
                                        <div class="text-xs text-gray-300">Status</div>
                                    </div>
                                </div>
                                
                                <!-- Download Button -->
                                <div class="flex items-center justify-center lg:justify-start space-x-4">
                                    <a href="{{ route('videos.download', ['filename' => $video]) }}" class="download-btn inline-flex items-center px-6 py-2 bg-white/20 backdrop-blur-sm rounded-full text-white font-medium hover:bg-white/30 transition-all duration-300 transform hover:scale-105 border border-white/30" data-filename="{{ $video }}">
                                        <i class="fas fa-download mr-2"></i>
                                        Download
                                    </a>
                                    <button class="share-btn inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-white font-medium hover:bg-white/20 transition-all duration-300 transform hover:scale-105 border border-white/20" data-video-title="{{ pathinfo($video, PATHINFO_FILENAME) }}" data-video-artist="Sendera Sisters">
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
        
        /* Responsive Video Player */
        .custom-video-player {
            width: 100%;
            height: auto;
            max-height: 70vh;
            object-fit: cover;
        }
        
        /* Mobile Video Player */
        @media (max-width: 640px) {
            .custom-video-player {
                max-height: 50vh;
            }
        }
        
        /* Tablet Video Player */
        @media (min-width: 641px) and (max-width: 1024px) {
            .custom-video-player {
                max-height: 60vh;
            }
        }
        
        /* Video Card Responsive */
        @media (max-width: 768px) {
            .video-card {
                margin: 1rem 0;
            }
            
            .video-card .flex-col {
                gap: 1rem;
            }
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
        
        /* Enhanced Video Controls */
        video::-webkit-media-controls {
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 8px;
        }
        
        video::-webkit-media-controls-panel {
            background-color: rgba(0, 0, 0, 0.8);
            border-radius: 8px;
        }
        
        video::-webkit-media-controls-play-button {
            background-color: rgba(5, 116, 247, 0.8);
            border-radius: 50%;
        }
        
        video::-webkit-media-controls-timeline {
            background-color: rgba(255, 255, 255, 0.3);
            border-radius: 4px;
        }
        
        video::-webkit-media-controls-current-time-display,
        video::-webkit-media-controls-time-remaining-display {
            color: white;
            font-weight: bold;
        }
        
        /* Video hover effects */
        .group\/video:hover video {
            transform: scale(1.02);
            transition: transform 0.3s ease;
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
            console.log('DOM loaded, initializing video player...');
            const videos = document.querySelectorAll('video');
            console.log('Found', videos.length, 'videos');
            let currentPlayingVideo = null;
            
            // Play All functionality
            document.getElementById('play-all-videos-btn').addEventListener('click', function() {
                console.log('Play All button clicked');
                const firstVideo = document.querySelector('video');
                if (firstVideo) {
                    console.log('First video details:', {
                        src: firstVideo.querySelector('source')?.src,
                        readyState: firstVideo.readyState,
                        networkState: firstVideo.networkState,
                        paused: firstVideo.paused,
                        ended: firstVideo.ended,
                        error: firstVideo.error
                    });
                    
                    firstVideo.play().then(() => {
                        console.log('First video started playing');
                        currentPlayingVideo = firstVideo;
                    }).catch(error => {
                        console.error('Error playing first video:', error);
                    });
                } else {
                    console.log('No videos found');
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
            
            // Keyboard shortcuts for video control
            document.addEventListener('keydown', function(e) {
                // Spacebar to play/pause current video
                if (e.code === 'Space' && currentPlayingVideo) {
                    e.preventDefault();
                    if (currentPlayingVideo.paused) {
                        currentPlayingVideo.play();
                    } else {
                        currentPlayingVideo.pause();
                    }
                }
                
                // Escape to pause all videos
                if (e.code === 'Escape') {
                    document.querySelectorAll('video').forEach(video => {
                        video.pause();
                    });
                    currentPlayingVideo = null;
                }
            });
            
            // Video event listeners
            videos.forEach((video, index) => {
                console.log(`Initializing video ${index + 1}:`, {
                    src: video.querySelector('source')?.src,
                    readyState: video.readyState,
                    networkState: video.networkState
                });
                
                // Get custom controls elements
                const progressBar = video.parentElement.querySelector('.video-progress-bar');
                const progressInput = video.parentElement.querySelector('input[type="range"]');
                const currentTimeSpan = video.parentElement.querySelector('.video-current-time');
                const durationSpan = video.parentElement.querySelector('.video-duration');
                const statusElement = document.querySelector(`.video-status[data-filename="${video.querySelector('source').src.split('/').pop()}"]`);
                
                // Load metadata
                video.addEventListener('loadedmetadata', function() {
                    console.log(`Video ${index + 1} metadata loaded, duration:`, formatTime(video.duration));
                    if (durationSpan) {
                        durationSpan.textContent = formatTime(video.duration);
                    }
                });
                
                // Play event
                video.addEventListener('play', function() {
                    console.log(`Video ${index + 1} started playing`);
                    
                    // Update status
                    if (statusElement) {
                        statusElement.textContent = 'Playing';
                        statusElement.className = 'text-lg font-bold text-green-400 video-status';
                    }
                    
                    // Update overlay icons
                    const overlay = video.parentElement.querySelector('.video-overlay');
                    if (overlay) {
                        const playIcon = overlay.querySelector('.play-icon');
                        const pauseIcon = overlay.querySelector('.pause-icon');
                        if (playIcon) playIcon.classList.add('hidden');
                        if (pauseIcon) pauseIcon.classList.remove('hidden');
                    }
                    
                    // Update custom controls
                    const customPlayBtn = video.parentElement.querySelector('.custom-play-btn');
                    const customPauseBtn = video.parentElement.querySelector('.custom-pause-btn');
                    if (customPlayBtn) customPlayBtn.classList.add('hidden');
                    if (customPauseBtn) customPauseBtn.classList.remove('hidden');
                    
                    // Pause all other videos
                    videos.forEach(otherVideo => {
                        if (otherVideo !== video) {
                            otherVideo.pause();
                            // Reset other video statuses
                            const otherStatusElement = document.querySelector(`.video-status[data-filename="${otherVideo.querySelector('source').src.split('/').pop()}"]`);
                            if (otherStatusElement) {
                                otherStatusElement.textContent = 'Ready';
                                otherStatusElement.className = 'text-lg font-bold text-yellow-300 video-status';
                            }
                            
                            // Reset other video overlay icons
                            const otherOverlay = otherVideo.parentElement.querySelector('.video-overlay');
                            if (otherOverlay) {
                                const otherPlayIcon = otherOverlay.querySelector('.play-icon');
                                const otherPauseIcon = otherOverlay.querySelector('.pause-icon');
                                if (otherPlayIcon) otherPlayIcon.classList.remove('hidden');
                                if (otherPauseIcon) otherPauseIcon.classList.add('hidden');
                            }
                            
                            // Reset other video custom controls
                            const otherCustomPlayBtn = otherVideo.parentElement.querySelector('.custom-play-btn');
                            const otherCustomPauseBtn = otherVideo.parentElement.querySelector('.custom-pause-btn');
                            if (otherCustomPlayBtn) otherCustomPlayBtn.classList.remove('hidden');
                            if (otherCustomPauseBtn) otherCustomPauseBtn.classList.add('hidden');
                        }
                    });
                    currentPlayingVideo = video;

                    // Track view
                    const source = video.querySelector('source');
                    if (source) {
                        const filename = source.getAttribute('src').split('/').pop();
                        console.log('Tracking view for:', filename);
                        
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
                                console.log('View tracked successfully:', data);
                                // Update view count in UI
                                const viewsElement = document.querySelector(`.video-views[data-filename="${filename}"]`);
                                if (viewsElement) {
                                    viewsElement.textContent = data.views;
                                }
                                const totalViewsElement = document.getElementById('total-views');
                                if (totalViewsElement) {
                                    totalViewsElement.textContent = data.total_views;
                                }
                            }
                        })
                        .catch(error => {
                            console.error('Error tracking view:', error);
                        });
                    }
                });
                
                // Pause event
                video.addEventListener('pause', function() {
                    console.log(`Video ${index + 1} paused`);
                    if (statusElement) {
                        statusElement.textContent = 'Paused';
                        statusElement.className = 'text-lg font-bold text-orange-400 video-status';
                    }
                    
                    // Update overlay icons
                    const overlay = video.parentElement.querySelector('.video-overlay');
                    if (overlay) {
                        const playIcon = overlay.querySelector('.play-icon');
                        const pauseIcon = overlay.querySelector('.pause-icon');
                        if (playIcon) playIcon.classList.remove('hidden');
                        if (pauseIcon) pauseIcon.classList.add('hidden');
                    }
                    
                    // Update custom controls
                    const customPlayBtn = video.parentElement.querySelector('.custom-play-btn');
                    const customPauseBtn = video.parentElement.querySelector('.custom-pause-btn');
                    if (customPlayBtn) customPlayBtn.classList.remove('hidden');
                    if (customPauseBtn) customPauseBtn.classList.add('hidden');
                });
                
                // Error event
                video.addEventListener('error', function(e) {
                    console.error(`Video ${index + 1} error:`, e);
                    console.error('Error details:', {
                        error: video.error,
                        errorCode: video.error ? video.error.code : 'No error code',
                        errorMessage: video.error ? video.error.message : 'No error message'
                    });
                });
                
                // Can play event
                video.addEventListener('canplay', function() {
                    console.log(`Video ${index + 1} can play`);
                });
                
                // Loaded data event
                video.addEventListener('loadeddata', function() {
                    console.log(`Video ${index + 1} data loaded`);
                });
                
                // Load start event
                video.addEventListener('loadstart', function() {
                    console.log(`Video ${index + 1} load started`);
                });
                
                // Progress event
                video.addEventListener('progress', function() {
                    console.log(`Video ${index + 1} loading progress`);
                });
                
                // Time update event for progress bar
                video.addEventListener('timeupdate', function() {
                    if (video.duration && !isNaN(video.duration)) {
                        const progress = (video.currentTime / video.duration) * 100;
                        if (progressBar) {
                            progressBar.style.width = progress + '%';
                        }
                        if (progressInput) {
                            progressInput.value = progress;
                        }
                        if (currentTimeSpan) {
                            currentTimeSpan.textContent = formatTime(video.currentTime);
                        }
                    }
                });
                
                // Progress bar interaction
                if (progressInput) {
                    progressInput.addEventListener('input', function() {
                        if (video.duration && !isNaN(video.duration)) {
                            const time = (this.value / 100) * video.duration;
                            video.currentTime = time;
                        }
                    });
                    
                    progressInput.addEventListener('change', function() {
                        if (video.duration && !isNaN(video.duration)) {
                            const time = (this.value / 100) * video.duration;
                            video.currentTime = time;
                        }
                    });
                }
                
                // Click on progress bar background
                if (progressBar && progressBar.parentElement) {
                    progressBar.parentElement.addEventListener('click', function(e) {
                        if (video.duration && !isNaN(video.duration)) {
                            const rect = this.getBoundingClientRect();
                            const clickX = e.clientX - rect.left;
                            const percentage = (clickX / rect.width) * 100;
                            const time = (percentage / 100) * video.duration;
                            video.currentTime = time;
                            if (progressInput) {
                                progressInput.value = percentage;
                            }
                            if (progressBar) {
                                progressBar.style.width = percentage + '%';
                            }
                        }
                    });
                }
                
                // Ended event
                video.addEventListener('ended', function() {
                    console.log(`Video ${index + 1} ended`);
                    currentPlayingVideo = null;
                    if (statusElement) {
                        statusElement.textContent = 'Completed';
                        statusElement.className = 'text-lg font-bold text-blue-400 video-status';
                    }
                });
                
                // Try to load the video
                video.load();
            });
            
            // Helper function to format time
            function formatTime(seconds) {
                if (isNaN(seconds)) return '0:00';
                const mins = Math.floor(seconds / 60);
                const secs = Math.floor(seconds % 60);
                return `${mins}:${secs.toString().padStart(2, '0')}`;
            }
            
            // Test video file accessibility
            videos.forEach((video, index) => {
                const source = video.querySelector('source');
                if (source) {
                    const testImg = new Image();
                    testImg.onload = function() {
                        console.log(`Video ${index + 1} source is accessible`);
                    };
                    testImg.onerror = function() {
                        console.error(`Video ${index + 1} source is not accessible:`, source.src);
                    };
                    // Try to load the video source as an image to test accessibility
                    testImg.src = source.src;
                }
            });

            // Download tracking
            document.querySelectorAll('.download-btn').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    const filename = this.getAttribute('data-filename');
                    console.log('Download button clicked for:', filename);
                    
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
                            console.log('Download tracked successfully:', data);
                            // Update download count in UI
                            const downloadsElement = document.querySelector(`.video-downloads[data-filename="${filename}"]`);
                            if (downloadsElement) {
                                downloadsElement.textContent = data.downloads;
                            }
                            const totalDownloadsElement = document.getElementById('total-downloads');
                            if (totalDownloadsElement) {
                                totalDownloadsElement.textContent = data.total_downloads;
                            }
                        }
                    })
                    .catch(error => {
                        console.error('Error tracking download:', error);
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
            
            // Video overlay play button functionality
            document.querySelectorAll('.video-overlay').forEach(overlay => {
                overlay.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    
                    const video = this.parentElement.querySelector('video');
                    if (video) {
                        console.log('Overlay play button clicked, attempting to play video');
                        
                        // Pause all other videos first
                        document.querySelectorAll('video').forEach(otherVideo => {
                            if (otherVideo !== video) {
                                otherVideo.pause();
                            }
                        });
                        
                        // Try to play the video
                        video.play().then(() => {
                            console.log('Video played successfully via overlay');
                        }).catch(error => {
                            console.error('Error playing video via overlay:', error);
                        });
                    }
                });
            });
            
            // Custom play button functionality
            document.querySelectorAll('.custom-play-btn').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    
                    const video = this.closest('.group\\/video').querySelector('video');
                    if (video) {
                        console.log('Custom play button clicked, attempting to play video');
                        
                        // Pause all other videos first
                        document.querySelectorAll('video').forEach(otherVideo => {
                            if (otherVideo !== video) {
                                otherVideo.pause();
                            }
                        });
                        
                        // Try to play the video
                        video.play().then(() => {
                            console.log('Video played successfully via custom play button');
                        }).catch(error => {
                            console.error('Error playing video via custom play button:', error);
                        });
                    }
                });
            });
            
            // Custom pause button functionality
            document.querySelectorAll('.custom-pause-btn').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    
                    const video = this.closest('.group\\/video').querySelector('video');
                    if (video) {
                        console.log('Custom pause button clicked, pausing video');
                        video.pause();
                    }
                });
            });
            
            // Share button functionality
            document.querySelectorAll('.share-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const title = this.getAttribute('data-video-title');
                    const artist = this.getAttribute('data-video-artist');
                    const url = window.location.href;
                    
                    console.log('Share button clicked for:', title, 'by', artist);
                    
                    if (navigator.share) {
                        navigator.share({
                            title: title,
                            text: `Watch ${title} by ${artist} on DPP Videos!`,
                            url: url
                        }).then(() => {
                            console.log('Video shared successfully');
                        }).catch(error => {
                            console.error('Error sharing video:', error);
                            // Fallback to clipboard
                            navigator.clipboard.writeText(url).then(() => {
                                alert('Link copied to clipboard!');
                            }).catch(() => {
                                alert('Share not supported. Please copy this URL: ' + url);
                            });
                        });
                    } else {
                        navigator.clipboard.writeText(url).then(() => {
                            console.log('Link copied to clipboard');
                            alert('Link copied to clipboard!');
                        }).catch(() => {
                            console.log('Clipboard not supported, showing URL');
                            alert('Share not supported. Please copy this URL: ' + url);
                        });
                    }
                });
            });
            

        });
    </script>
@endsection