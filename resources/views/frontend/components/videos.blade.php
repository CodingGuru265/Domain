@extends('layouts.front', ['pageTitle' => 'DPP Videos'])

@section('content')
    <!-- Modern Hero Section -->
    <div class="relative min-h-screen bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900 overflow-hidden">
        <!-- Animated Background Pattern -->
        <div class="absolute inset-0 opacity-20">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25% 25%, rgba(59, 130, 246, 0.3) 0%, transparent 50%), radial-gradient(circle at 75% 75%, rgba(239, 68, 68, 0.3) 0%, transparent 50%);"></div>
        </div>
        
        <!-- Floating Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-20 left-20 w-2 h-2 bg-blue-400 rounded-full animate-ping"></div>
            <div class="absolute top-40 right-40 w-3 h-3 bg-red-400 rounded-full animate-ping" style="animation-delay: 1s;"></div>
            <div class="absolute bottom-40 left-1/3 w-2 h-2 bg-yellow-400 rounded-full animate-ping" style="animation-delay: 2s;"></div>
        </div>
        
        <!-- Hero Content -->
        <div class="relative z-10 flex items-center justify-center min-h-screen px-4">
            <div class="text-center max-w-5xl mx-auto">
                <!-- Icon Badge -->
                <div class="inline-flex items-center justify-center w-24 h-24 bg-gradient-to-r from-blue-600 to-purple-600 rounded-3xl mb-8 shadow-2xl">
                    <i class="fas fa-play text-4xl text-white"></i>
                </div>
                
                <!-- Main Title -->
                <h1 class="text-7xl md:text-9xl font-black mb-8 text-white leading-none">
                    DPP
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600">
                        VIDEOS
                    </span>
                </h1>
                
                <!-- Subtitle -->
                <p class="text-2xl md:text-3xl text-gray-300 mb-12 max-w-4xl mx-auto leading-relaxed">
                    Experience the energy and passion of DPP through our curated collection of music videos and campaign highlights
                </p>
                
                <!-- Stats Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto mb-16">
                    <div class="bg-white/5 backdrop-blur-md rounded-2xl p-6 border border-white/10 hover:bg-white/10 transition-all duration-300">
                        <div class="flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-500 to-blue-600 rounded-2xl mb-4 mx-auto">
                            <i class="fas fa-video text-2xl text-white"></i>
                        </div>
                        <div class="text-3xl font-bold text-white mb-2">{{ $totalVideos }}</div>
                        <div class="text-gray-400 font-medium">Videos</div>
                    </div>
                    
                    <div class="bg-white/5 backdrop-blur-md rounded-2xl p-6 border border-white/10 hover:bg-white/10 transition-all duration-300">
                        <div class="flex items-center justify-center w-16 h-16 bg-gradient-to-r from-green-500 to-green-600 rounded-2xl mb-4 mx-auto">
                            <i class="fas fa-eye text-2xl text-white"></i>
                        </div>
                        <div class="text-3xl font-bold text-white mb-2" id="total-views">{{ $totalViews }}</div>
                        <div class="text-gray-400 font-medium">Views</div>
                    </div>
                    
                    <div class="bg-white/5 backdrop-blur-md rounded-2xl p-6 border border-white/10 hover:bg-white/10 transition-all duration-300">
                        <div class="flex items-center justify-center w-16 h-16 bg-gradient-to-r from-purple-500 to-purple-600 rounded-2xl mb-4 mx-auto">
                            <i class="fas fa-download text-2xl text-white"></i>
                        </div>
                        <div class="text-3xl font-bold text-white mb-2" id="total-downloads">{{ $totalDownloads }}</div>
                        <div class="text-gray-400 font-medium">Downloads</div>
                    </div>
                </div>
                
                <!-- CTA Button -->
                <button class="group bg-gradient-to-r from-blue-600 to-purple-600 text-white px-12 py-4 rounded-2xl text-xl font-bold hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-2xl">
                    <i class="fas fa-play mr-3 group-hover:animate-pulse"></i>
                    Start Watching
                </button>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2">
            <div class="w-6 h-10 border-2 border-white/30 rounded-full flex justify-center">
                <div class="w-1 h-3 bg-white rounded-full mt-2 animate-bounce"></div>
            </div>
        </div>
    </div>

    <!-- Video Gallery Section -->
    <div class="relative py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-blue-600 to-purple-600 rounded-3xl mb-8 shadow-xl">
                    <i class="fas fa-film text-3xl text-white"></i>
                </div>
                <h2 class="text-6xl md:text-7xl font-black text-gray-900 mb-8">
                    Featured
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">Videos</span>
                </h2>
                <p class="text-xl md:text-2xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Discover the latest music videos and campaign content from DPP
                </p>
            </div>
            
            <!-- Video Grid -->
            <div class="grid gap-8">
                @php
                    $videoFiles = [
                        'Sendera Sisters - Tikwasaka.mp4',
                        'Sendera Sisters - Akufuna Ndani.mp4',
                        'Sendera Sisters - Abetcha Lowa.mp4',
                    ];
                @endphp
                @foreach ($videoFiles as $index => $video)
                    <div class="group bg-gradient-to-br from-gray-50 to-white rounded-3xl shadow-2xl border border-gray-200 overflow-hidden hover:shadow-3xl transition-all duration-700 hover:-translate-y-4">
                        <div class="flex flex-col lg:flex-row">
                            <!-- Video Player Container -->
                            <div class="lg:w-2/3 relative">
                                <div class="relative overflow-hidden rounded-t-3xl lg:rounded-l-3xl lg:rounded-t-none">
                                    <video controls class="w-full h-80 lg:h-96 object-cover bg-gray-900 group-hover:scale-110 transition-transform duration-700" 
                                           poster="{{ asset('assets/images/videos/thumbnail.png') }}"
                                           preload="metadata">
                                        <source src="{{ asset('assets/images/videos/' . $video) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    
                                    <!-- Modern Badges -->
                                    <div class="absolute top-6 right-6 flex flex-col gap-2">
                                        <div class="bg-gradient-to-r from-blue-600 to-purple-600 text-white text-sm font-bold px-4 py-2 rounded-full shadow-xl backdrop-blur-sm">
                                            <i class="fas fa-hd-video mr-2"></i>HD
                                        </div>
                                        <div class="bg-black/80 text-white text-sm font-medium px-4 py-2 rounded-full backdrop-blur-sm border border-white/20">
                                            <i class="fas fa-music mr-2"></i>Music
                                        </div>
                                    </div>
                                    
                                    <!-- Enhanced Play Overlay -->
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-center justify-center">
                                        <div class="w-20 h-20 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center border border-white/30 group-hover:scale-110 transition-transform duration-300">
                                            <i class="fas fa-play text-3xl text-white ml-2"></i>
                                        </div>
                                    </div>
                                    
                                    <!-- Progress Indicator -->
                                    <div class="absolute bottom-0 left-0 right-0 h-1 bg-gray-800/50">
                                        <div class="h-full bg-gradient-to-r from-blue-600 to-purple-600 w-0 group-hover:w-full transition-all duration-1000"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Content Section -->
                            <div class="lg:w-1/3 p-8 lg:p-10 flex flex-col justify-between">
                                <div>
                                    <!-- Category Badge -->
                                    <div class="flex items-center gap-3 mb-6">
                                        <div class="w-10 h-10 bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl flex items-center justify-center shadow-lg">
                                            <i class="fas fa-video text-white text-lg"></i>
                                        </div>
                                        <span class="text-sm font-bold text-gray-600 uppercase tracking-wider">Music Video</span>
                                    </div>
                                    
                                    <!-- Title -->
                                    <h3 class="text-4xl font-black text-gray-900 mb-4 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-blue-600 group-hover:to-purple-600 transition-all duration-500">
                                        {{ pathinfo($video, PATHINFO_FILENAME) }}
                                    </h3>
                                    
                                    <!-- Artist -->
                                    <p class="text-xl text-gray-600 mb-8">
                                        By <span class="font-bold text-blue-600">Sendera Sisters</span>
                                    </p>
                                    
                                    <!-- Enhanced Stats -->
                                    <div class="grid grid-cols-2 gap-4 mb-8">
                                        <div class="text-center p-5 bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl border-2 border-blue-200 group-hover:border-blue-300 transition-colors duration-300">
                                            <div class="text-3xl font-black text-blue-600 video-views mb-2" data-filename="{{ $video }}">
                                                {{ $videoStats[$video]['views'] ?? 0 }}
                                            </div>
                                            <div class="text-sm font-bold text-blue-700 uppercase tracking-wide">Views</div>
                                        </div>
                                        <div class="text-center p-5 bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl border-2 border-purple-200 group-hover:border-purple-300 transition-colors duration-300">
                                            <div class="text-3xl font-black text-purple-600 video-downloads mb-2" data-filename="{{ $video }}">
                                                {{ $videoStats[$video]['downloads'] ?? 0 }}
                                            </div>
                                            <div class="text-sm font-bold text-purple-700 uppercase tracking-wide">Downloads</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Action Buttons -->
                                <div class="flex flex-col gap-4">
                                    <a href="{{ route('videos.download', ['filename' => $video]) }}" 
                                       class="download-btn group/btn inline-flex items-center justify-center px-8 py-5 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-bold rounded-2xl hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-xl hover:shadow-2xl" 
                                       data-filename="{{ $video }}">
                                        <i class="fas fa-download mr-3 text-xl group-hover/btn:animate-bounce"></i>
                                        Download Video
                                    </a>
                                    <button class="share-btn group/btn inline-flex items-center justify-center px-8 py-5 bg-gradient-to-r from-gray-100 to-gray-200 text-gray-700 font-bold rounded-2xl hover:from-gray-200 hover:to-gray-300 transition-all duration-300 transform hover:scale-105 shadow-xl hover:shadow-2xl" 
                                            data-video-title="{{ pathinfo($video, PATHINFO_FILENAME) }}" 
                                            data-video-artist="Sendera Sisters">
                                        <i class="fas fa-share mr-3 text-xl group-hover/btn:animate-pulse"></i>
                                        Share Video
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Call to Action Section -->
    <div class="relative py-24 bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900 overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25% 25%, rgba(59, 130, 246, 0.3) 0%, transparent 50%), radial-gradient(circle at 75% 75%, rgba(147, 51, 234, 0.3) 0%, transparent 50%);"></div>
        </div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-4 text-center">
            <div class="inline-flex items-center justify-center w-24 h-24 bg-gradient-to-r from-blue-600 to-purple-600 rounded-3xl mb-12 shadow-2xl">
                <i class="fas fa-heart text-4xl text-white"></i>
            </div>
            
            <h3 class="text-5xl md:text-6xl font-black text-white mb-8">
                Join the DPP
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-400">Community</span>
            </h3>
            
            <p class="text-xl md:text-2xl text-gray-300 mb-12 max-w-4xl mx-auto leading-relaxed">
                Stay connected with the latest videos, music, and campaign updates. Be part of the movement that's shaping Malawi's future.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <button class="group bg-gradient-to-r from-blue-600 to-purple-600 text-white px-12 py-6 rounded-3xl text-xl font-bold hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-2xl">
                    <i class="fas fa-bell mr-4 group-hover:animate-pulse"></i>
                    Subscribe Now
                </button>
                <button class="group bg-white/10 backdrop-blur-md text-white px-12 py-6 rounded-3xl text-xl font-bold hover:bg-white/20 transition-all duration-300 transform hover:scale-105 shadow-2xl border border-white/20">
                    <i class="fas fa-share mr-4 group-hover:animate-bounce"></i>
                    Share Channel
                </button>
            </div>
        </div>
    </div>

    <style>
        /* Modern Animations */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        @keyframes fade-in-up {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0px); }
        }
        
        @keyframes pulse-glow {
            0%, 100% { box-shadow: 0 0 20px rgba(59, 130, 246, 0.3); }
            50% { box-shadow: 0 0 30px rgba(59, 130, 246, 0.6); }
        }
        
        @keyframes shimmer {
            0% { background-position: -200px 0; }
            100% { background-position: calc(200px + 100%) 0; }
        }
        
        /* Animation Classes */
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        
        .animate-fade-in-up {
            animation: fade-in-up 1s ease-out forwards;
            opacity: 0;
        }
        
        .animate-pulse-glow {
            animation: pulse-glow 2s ease-in-out infinite;
        }
        
        /* Ultra Modern Video Player */
        video {
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        video:hover {
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.3);
            transform: scale(1.02);
        }
        
        /* Enhanced Video Controls */
        video::-webkit-media-controls {
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.95), rgba(0, 0, 0, 0.9));
            border-radius: 16px;
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        video::-webkit-media-controls-panel {
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.98), rgba(0, 0, 0, 0.95));
            border-radius: 16px;
            backdrop-filter: blur(20px);
        }
        
        video::-webkit-media-controls-play-button {
            background: linear-gradient(135deg, #3b82f6, #8b5cf6);
            border-radius: 50%;
            box-shadow: 0 8px 25px rgba(59, 130, 246, 0.5);
            border: 2px solid rgba(255, 255, 255, 0.2);
        }
        
        video::-webkit-media-controls-timeline {
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.3));
            border-radius: 8px;
            height: 8px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        video::-webkit-media-controls-current-time-display,
        video::-webkit-media-controls-time-remaining-display {
            color: white;
            font-weight: bold;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
            font-size: 14px;
        }
        
        video::-webkit-media-controls-volume-slider {
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.3));
            border-radius: 6px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        /* Ultra Modern Hover Effects */
        .group:hover {
            transform: translateY(-8px);
        }
        
        /* Enhanced Button Animations */
        .download-btn, .share-btn {
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .download-btn::before, .share-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .download-btn:hover::before, .share-btn:hover::before {
            left: 100%;
        }
        
        .download-btn:hover {
            transform: translateY(-4px) scale(1.05);
            box-shadow: 0 20px 40px rgba(59, 130, 246, 0.4);
        }
        
        .share-btn:hover {
            transform: translateY(-4px) scale(1.05);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }
        
        /* Stats Cards Enhancement */
        .group:hover .bg-gradient-to-br {
            transform: scale(1.08);
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        /* Play Overlay Enhancement */
        .group:hover .absolute.inset-0.bg-gradient-to-t {
            backdrop-filter: blur(4px);
        }
        
        /* Badge Enhancement */
        .bg-gradient-to-r.from-blue-600.to-purple-600 {
            box-shadow: 0 8px 25px rgba(59, 130, 246, 0.4);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        /* Modern Scrollbar */
        ::-webkit-scrollbar {
            width: 12px;
        }
        
        ::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.05);
            border-radius: 6px;
        }
        
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #3b82f6, #8b5cf6);
            border-radius: 6px;
            border: 2px solid rgba(255, 255, 255, 0.1);
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #2563eb, #7c3aed);
        }
        
        /* Loading Animation */
        .shimmer {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200px 100%;
            animation: shimmer 1.5s infinite;
        }
        
        /* Text Gradient Animation */
        .text-gradient-animate {
            background: linear-gradient(45deg, #3b82f6, #8b5cf6, #ec4899, #3b82f6);
            background-size: 300% 300%;
            animation: gradient-shift 3s ease infinite;
        }
        
        @keyframes gradient-shift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        
        /* Card Glow Effect */
        .card-glow {
            box-shadow: 0 0 20px rgba(59, 130, 246, 0.1);
            transition: box-shadow 0.3s ease;
        }
        
        .card-glow:hover {
            box-shadow: 0 0 40px rgba(59, 130, 246, 0.2);
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