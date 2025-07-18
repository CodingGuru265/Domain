@extends('layouts.front', ['pageTitle' => 'Dpp | Videos'])

@section('content')
    <!-- Hero Section with Background Image -->
    <div class="relative min-h-[80vh] flex items-center justify-center overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0">
            <img src="{{ asset('assets/images/music/playerbg.png') }}" 
                 alt="Video Vibes" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-900/95 via-purple-900/85 to-red-900/95"></div>
        </div>
        
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-20 left-10 w-32 h-32 bg-white/10 rounded-full blur-xl animate-float"></div>
            <div class="absolute top-40 right-20 w-48 h-48 bg-blue-500/20 rounded-full blur-lg animate-float" style="animation-delay: 2s;"></div>
            <div class="absolute bottom-40 left-20 w-56 h-56 bg-red-500/20 rounded-full blur-xl animate-float" style="animation-delay: 4s;"></div>
            <div class="absolute top-1/2 left-1/4 w-24 h-24 bg-yellow-500/15 rounded-full blur-md animate-float" style="animation-delay: 1s;"></div>
        </div>
        
        <!-- Hero Content -->
        <div class="relative z-10 text-center text-white px-4 max-w-6xl mx-auto">
            <div class="mb-12">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-white/10 backdrop-blur-sm rounded-full mb-8 border border-white/20">
                    <i class="fas fa-play text-3xl text-white"></i>
                </div>
                <h1 class="text-6xl md:text-8xl font-bold mb-8 text-white drop-shadow-2xl">
                    DPP <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-orange-500">Videos</span>
                </h1>
                <p class="text-2xl md:text-3xl text-blue-100 mb-8 max-w-4xl mx-auto leading-relaxed font-light">
                    Watch official music videos, campaign highlights, and party events
                </p>
                <div class="w-48 h-1 bg-gradient-to-r from-blue-500 via-yellow-500 to-red-500 mx-auto rounded-full shadow-lg"></div>
            </div>
            
            <!-- Enhanced Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto mb-16">
                <div class="group bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 hover:bg-white/15 transition-all duration-300 hover:scale-105">
                    <div class="flex items-center justify-center mb-4">
                        <div class="w-12 h-12 bg-blue-500/30 rounded-full flex items-center justify-center">
                            <i class="fas fa-video text-xl text-white"></i>
                </div>
                </div>
                    <div class="text-4xl font-bold text-white mb-2">{{ $totalVideos }}</div>
                    <div class="text-blue-200 font-medium text-lg">Videos</div>
                </div>
                <div class="group bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 hover:bg-white/15 transition-all duration-300 hover:scale-105">
                    <div class="flex items-center justify-center mb-4">
                        <div class="w-12 h-12 bg-green-500/30 rounded-full flex items-center justify-center">
                            <i class="fas fa-eye text-xl text-white"></i>
            </div>
                </div>
                    <div class="text-4xl font-bold text-white mb-2" id="total-views">{{ $totalViews }}</div>
                    <div class="text-blue-200 font-medium text-lg">Total Views</div>
                </div>
                <div class="group bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 hover:bg-white/15 transition-all duration-300 hover:scale-105">
                    <div class="flex items-center justify-center mb-4">
                        <div class="w-12 h-12 bg-yellow-500/30 rounded-full flex items-center justify-center">
                            <i class="fas fa-download text-xl text-white"></i>
                        </div>
                    </div>
                    <div class="text-4xl font-bold text-white mb-2" id="total-downloads">{{ $totalDownloads }}</div>
                    <div class="text-blue-200 font-medium text-lg">Downloads</div>
                </div>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <div class="w-8 h-12 border-2 border-white/50 rounded-full flex justify-center backdrop-blur-sm">
                <div class="w-1 h-4 bg-white rounded-full mt-2 animate-scroll"></div>
            </div>
        </div>
    </div>

    <!-- Video List Section -->
    <div class="relative py-24 px-4 bg-gradient-to-b from-gray-50 via-white to-gray-50">
        <div class="max-w-7xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-20">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-600 to-red-600 rounded-full mb-6">
                    <i class="fas fa-play text-2xl text-white"></i>
                </div>
                <h2 class="text-5xl md:text-6xl font-bold text-gray-900 mb-8">Featured Videos</h2>
                <p class="text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed">Watch official DPP music videos, campaign highlights, and party events</p>
                <div class="w-32 h-1 bg-gradient-to-r from-blue-600 to-red-600 mx-auto mt-8 rounded-full"></div>
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
                    <div class="group bg-white rounded-3xl shadow-xl border border-gray-100 overflow-hidden hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                        <div class="flex flex-col lg:flex-row">
                            <!-- Video Player -->
                            <div class="lg:w-2/3">
                                <div class="relative overflow-hidden">
                                    <video controls class="w-full h-72 lg:h-96 object-cover bg-gray-900 group-hover:scale-105 transition-transform duration-500" 
                                           poster="{{ asset('assets/images/videos/thumbnail.png') }}"
                                           preload="metadata">
                                        <source src="{{ asset('assets/images/videos/' . $video) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    
                                    <!-- Enhanced Badges -->
                                    <div class="absolute top-4 right-4 flex gap-2">
                                        <div class="bg-gradient-to-r from-blue-600 to-red-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                                            HD
                                        </div>
                                        <div class="bg-black/70 text-white text-xs font-medium px-3 py-1 rounded-full backdrop-blur-sm">
                                            <i class="fas fa-play mr-1"></i>Music
                                    </div>
                                    </div>
                                    
                                    <!-- Play Overlay -->
                                    <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                        <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                                            <i class="fas fa-play text-2xl text-white ml-1"></i>
                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                            <!-- Video Info -->
                            <div class="lg:w-1/3 p-8 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center gap-2 mb-4">
                                        <div class="w-8 h-8 bg-gradient-to-r from-blue-600 to-red-600 rounded-full flex items-center justify-center">
                                            <i class="fas fa-video text-white text-sm"></i>
                                        </div>
                                        <span class="text-sm font-medium text-gray-500 uppercase tracking-wide">Music Video</span>
                            </div>
                            
                                    <h3 class="text-3xl font-bold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors duration-300">
                                        {{ pathinfo($video, PATHINFO_FILENAME) }}
                                    </h3>
                                    <p class="text-lg text-gray-600 mb-6">
                                        By <span class="font-semibold text-blue-600">Sendera Sisters</span>
                                    </p>
                                    
                                    <!-- Enhanced Video Stats -->
                                    <div class="grid grid-cols-2 gap-4 mb-8">
                                        <div class="text-center p-4 bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl border border-blue-200">
                                            <div class="text-2xl font-bold text-blue-600 video-views mb-1" data-filename="{{ $video }}">
                                                {{ $videoStats[$video]['views'] ?? 0 }}
                                    </div>
                                            <div class="text-sm text-blue-700 font-medium">Views</div>
                                    </div>
                                        <div class="text-center p-4 bg-gradient-to-br from-green-50 to-green-100 rounded-xl border border-green-200">
                                            <div class="text-2xl font-bold text-green-600 video-downloads mb-1" data-filename="{{ $video }}">
                                                {{ $videoStats[$video]['downloads'] ?? 0 }}
                                    </div>
                                            <div class="text-sm text-green-700 font-medium">Downloads</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Enhanced Action Buttons -->
                                <div class="flex flex-col sm:flex-row gap-4">
                                    <a href="{{ route('videos.download', ['filename' => $video]) }}" 
                                       class="download-btn flex-1 inline-flex items-center justify-center px-6 py-4 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold rounded-xl hover:from-blue-700 hover:to-blue-800 transition-all duration-300 transform hover:scale-105 shadow-lg" 
                                       data-filename="{{ $video }}">
                                        <i class="fas fa-download mr-3 text-lg"></i>
                                        Download
                                    </a>
                                    <button class="share-btn flex-1 inline-flex items-center justify-center px-6 py-4 bg-gradient-to-r from-gray-100 to-gray-200 text-gray-700 font-semibold rounded-xl hover:from-gray-200 hover:to-gray-300 transition-all duration-300 transform hover:scale-105 shadow-lg" 
                                            data-video-title="{{ pathinfo($video, PATHINFO_FILENAME) }}" 
                                            data-video-artist="Sendera Sisters">
                                        <i class="fas fa-share mr-3 text-lg"></i>
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

    <!-- Footer Section -->
    <div class="bg-gradient-to-r from-gray-900 via-blue-900 to-gray-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-600 to-red-600 rounded-full mb-8">
                    <i class="fas fa-play text-2xl text-white"></i>
                </div>
                <h3 class="text-3xl md:text-4xl font-bold mb-6">Stay Connected with DPP</h3>
                <p class="text-xl text-gray-300 mb-8 max-w-3xl mx-auto">
                    Subscribe to our channel for the latest videos, music, and party updates
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <button class="px-8 py-4 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold rounded-xl hover:from-blue-700 hover:to-blue-800 transition-all duration-300 transform hover:scale-105 shadow-lg">
                        <i class="fas fa-bell mr-3"></i>
                        Subscribe
                    </button>
                    <button class="px-8 py-4 bg-gradient-to-r from-red-600 to-red-700 text-white font-semibold rounded-xl hover:from-red-700 hover:to-red-800 transition-all duration-300 transform hover:scale-105 shadow-lg">
                        <i class="fas fa-share mr-3"></i>
                        Share Channel
                    </button>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Custom Animations */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        @keyframes fade-in-up {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0px); }
        }
        
        @keyframes scroll {
            0% { transform: translateY(0); opacity: 1; }
            100% { transform: translateY(20px); opacity: 0; }
        }
        
        @keyframes pulse-glow {
            0%, 100% { box-shadow: 0 0 20px rgba(59, 130, 246, 0.3); }
            50% { box-shadow: 0 0 30px rgba(59, 130, 246, 0.6); }
        }
        
        /* Animation Classes */
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        
        .animate-fade-in-up {
            animation: fade-in-up 1s ease-out forwards;
            opacity: 0;
        }
        
        .animate-scroll {
            animation: scroll 2s ease-in-out infinite;
        }
        
        .animate-pulse-glow {
            animation: pulse-glow 2s ease-in-out infinite;
        }
        
        /* Enhanced Video Player */
        video {
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
        }
        
        video:hover {
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.25);
        }
        
        /* Custom Video Controls */
        video::-webkit-media-controls {
            background-color: rgba(0, 0, 0, 0.9);
            border-radius: 12px;
            backdrop-filter: blur(10px);
        }
        
        video::-webkit-media-controls-panel {
            background-color: rgba(0, 0, 0, 0.95);
            border-radius: 12px;
            backdrop-filter: blur(10px);
        }
        
        video::-webkit-media-controls-play-button {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            border-radius: 50%;
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.4);
        }
        
        video::-webkit-media-controls-timeline {
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.4));
            border-radius: 6px;
            height: 6px;
        }
        
        video::-webkit-media-controls-current-time-display,
        video::-webkit-media-controls-time-remaining-display {
            color: white;
            font-weight: bold;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
        }
        
        video::-webkit-media-controls-volume-slider {
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.4));
            border-radius: 4px;
        }
        
        /* Enhanced Hover Effects */
        .group:hover video {
            transform: scale(1.02);
        }
        
        /* Download Button Animation */
        .download-btn {
            position: relative;
            overflow: hidden;
        }
        
        .download-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }
        
        .download-btn:hover::before {
            left: 100%;
        }
        
        .download-btn:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 8px 25px rgba(59, 130, 246, 0.4);
        }
        
        /* Share Button Animation */
        .share-btn:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }
        
        /* Stats Cards Enhancement */
        .group:hover .bg-gradient-to-br {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }
        
        /* Play Overlay Enhancement */
        .group:hover .absolute.inset-0.bg-black\/20 {
            backdrop-filter: blur(2px);
        }
        
        /* Badge Enhancement */
        .bg-gradient-to-r.from-blue-600.to-red-600 {
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
        }
        
        /* Scrollbar Styling */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.1);
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #2563eb, #1e40af);
        }
        
        /* Loading Animation */
        @keyframes shimmer {
            0% { background-position: -200px 0; }
            100% { background-position: calc(200px + 100%) 0; }
        }
        
        .shimmer {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200px 100%;
            animation: shimmer 1.5s infinite;
        }
    </style>
    
    <script>
        // Video Player Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const videos = document.querySelectorAll('video');
            let currentPlayingVideo = null;
            
            // Handle video play/pause
            videos.forEach(video => {
                video.addEventListener('play', function() {
                    // Pause other videos when one starts playing
                    videos.forEach(otherVideo => {
                        if (otherVideo !== video && !otherVideo.paused) {
                            otherVideo.pause();
                        }
                    });
                    currentPlayingVideo = video;
                });
                
                video.addEventListener('ended', function() {
                    currentPlayingVideo = null;
                });
            });
            
            // Download functionality
            document.querySelectorAll('.download-btn').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    const filename = this.getAttribute('data-filename');
                    console.log('Downloading:', filename);
                    
                    // Update download count
                    const downloadElement = document.querySelector(`[data-filename="${filename}"].video-downloads`);
                    if (downloadElement) {
                        const currentCount = parseInt(downloadElement.textContent) || 0;
                        downloadElement.textContent = currentCount + 1;
                }
            });
        });

            // Share functionality
            document.querySelectorAll('.share-btn').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    const title = this.getAttribute('data-video-title');
                    const artist = this.getAttribute('data-video-artist');
                    const url = window.location.href;
                    
                    if (navigator.share) {
                        navigator.share({
                            title: `${title} by ${artist}`,
                            text: `Check out this DPP video: ${title}`,
                            url: url
                    });
                } else {
                        // Fallback: copy to clipboard
                        const shareText = `${title} by ${artist} - ${url}`;
                        navigator.clipboard.writeText(shareText).then(() => {
                            alert('Link copied to clipboard!');
                        });
                    }
                });
            });
            
            // View count tracking
            videos.forEach(video => {
                video.addEventListener('play', function() {
                    const filename = this.querySelector('source').src.split('/').pop();
                    const viewElement = document.querySelector(`[data-filename="${filename}"].video-views`);
                    if (viewElement) {
                        const currentViews = parseInt(viewElement.textContent) || 0;
                        viewElement.textContent = currentViews + 1;
                    }
                });
            });
        });
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