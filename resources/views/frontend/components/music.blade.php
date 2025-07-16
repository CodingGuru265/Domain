@extends('layouts.front', ['pageTitle' => 'Dpp | music'])

@section('content')
    <!-- Particle Background -->
    <div id="particles-js" class="fixed inset-0 z-0"></div>
    
    <!-- Bottom Audio Player with Visualizer -->
    <div id="bottom-audio-player" class="fixed bottom-0 left-0 right-0 z-50 hidden bg-gradient-to-r from-blue-900/95 via-blue-800/95 to-blue-700/95 backdrop-blur-md border-t border-blue-400/30 shadow-2xl">
        <div class="container mx-auto px-4 py-3">
            <div class="flex items-center justify-between">
                <!-- Song Info -->
                <div class="flex items-center space-x-4 flex-1 min-w-0">
                    <div class="w-12 h-12 rounded-lg overflow-hidden bg-gradient-to-br from-blue-400 to-blue-600 flex-shrink-0">
                        <img src="{{ asset('assets/images/music/portrait-happy-young-woman.jpg') }}" 
                             alt="Album Art" 
                             class="w-full h-full object-cover">
                    </div>
                    <div class="min-w-0 flex-1">
                        <h3 id="current-song-title" class="text-white font-semibold text-sm truncate">No song playing</h3>
                        <p id="current-song-artist" class="text-blue-200 text-xs truncate">Select a track to play</p>
                    </div>
                </div>
                
                <!-- Audio Visualizer -->
                <div class="flex items-center space-x-4 mx-4">
                    <canvas id="visualizer-canvas" width="200" height="40" class="rounded-lg bg-black/20 border border-blue-400/30"></canvas>
                </div>
                
                <!-- Controls -->
                <div class="flex items-center space-x-3 flex-shrink-0">
                    <!-- Previous Button -->
                    <button id="prev-btn" class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition-colors">
                        <i class="fas fa-step-backward text-white text-sm"></i>
                    </button>
                    
                    <!-- Play/Pause Button -->
                    <button id="main-play-btn" class="w-10 h-10 bg-gradient-to-r from-blue-500 to-blue-600 rounded-full flex items-center justify-center hover:from-blue-600 hover:to-blue-700 transition-all duration-300 transform hover:scale-105 shadow-lg">
                        <i class="fas fa-play text-white ml-0.5"></i>
                    </button>
                    
                    <!-- Next Button -->
                    <button id="next-btn" class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition-colors">
                        <i class="fas fa-step-forward text-white text-sm"></i>
                    </button>
                    
                    <!-- Volume Control -->
                    <div class="flex items-center space-x-2">
                        <button id="volume-btn" class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition-colors">
                            <i class="fas fa-volume-up text-white text-sm"></i>
                        </button>
                        <input type="range" id="volume-slider" min="0" max="100" value="100" 
                               class="w-16 h-1 bg-white/30 rounded-full cursor-pointer">
                    </div>
                    
                    <!-- Progress Bar -->
                    <div class="flex items-center space-x-2 min-w-0 flex-1 max-w-xs">
                        <span id="current-time" class="text-white text-xs">0:00</span>
                        <div class="flex-1 relative">
                            <div class="bg-white/30 rounded-full h-1 overflow-hidden">
                                <div id="progress-bar" class="bg-gradient-to-r from-blue-400 to-blue-500 h-1 rounded-full transition-all duration-300" style="width: 0%"></div>
                            </div>
                            <input type="range" id="progress-slider" min="0" max="100" value="0" 
                                   class="absolute inset-0 w-full h-1 opacity-0 cursor-pointer">
                        </div>
                        <span id="total-time" class="text-white text-xs">0:00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Hero Section with Background Image -->
    <div class="relative min-h-[80vh] flex items-center justify-center overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0">
            <img src="{{ asset('assets/images/music/charismatic-modern-young-attractive-africanamerican-girl-with-afro-haircut-listening-music-headph.jpg') }}" 
                 alt="Music Vibes" 
                 class="w-full h-full object-cover animate-pulse-slow">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/80 via-blue-800/70 to-blue-700/80 animate-gradient"></div>
        </div>
        
        <!-- Floating Music Notes -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="floating-note" style="--delay: 0s; --left: 10%">♪</div>
            <div class="floating-note" style="--delay: 2s; --left: 20%">♫</div>
            <div class="floating-note" style="--delay: 4s; --left: 30%">♬</div>
            <div class="floating-note" style="--delay: 1s; --left: 70%">♪</div>
            <div class="floating-note" style="--delay: 3s; --left: 80%">♫</div>
            <div class="floating-note" style="--delay: 5s; --left: 90%">♬</div>
        </div>
        
        <!-- Hero Content -->
        <div class="relative z-10 text-center text-white px-4">
            <div class="mb-8">
                <h1 class="text-6xl md:text-8xl font-bold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-blue-200 via-blue-300 to-blue-400 animate-text-glow">
                    DPP Music
                </h1>
                <div class="w-64 h-1 bg-gradient-to-r from-blue-400 via-blue-500 to-blue-600 mx-auto mt-6 animate-pulse"></div>
            </div>
            
            <div class="space-y-4 animate-fade-in-up">
                <p class="text-2xl md:text-3xl mb-2 text-white font-light">DPP Party Music</p>
                <p class="text-lg md:text-xl text-gray-200 max-w-3xl mx-auto leading-relaxed">
                    Vibes Feel the rhythm, enjoy the beats, and celebrate with the 
                    <span class="text-yellow-300 font-bold animate-bounce">best </span> tunes!
                </p>
            </div>
            
            <!-- Animated Stats -->
            <div class="flex justify-center items-center space-x-8 mt-12 animate-fade-in-up" style="animation-delay: 0.5s;">
                <div class="text-center">
                    <div class="text-3xl font-bold text-blue-300 counter" data-target="{{ $music->count() }}">0</div>
                    <div class="text-sm text-gray-300">Tracks</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-blue-400 counter" data-target="24">0</div>
                    <div class="text-sm text-gray-300">Hours</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-blue-500 counter" data-target="1000">0</div>
                    <div class="text-sm text-gray-300">Fans</div>
                </div>
            </div>
            
            <!-- Music Controls -->
            <div class="mt-8 flex justify-center space-x-4 animate-fade-in-up" style="animation-delay: 1s;">
                <button id="play-all-btn" class="px-8 py-3 bg-gradient-to-r from-blue-500 to-blue-700 rounded-full text-white font-semibold hover:from-blue-600 hover:to-blue-800 transition-all duration-300 transform hover:scale-105 shadow-lg">
                    <i class="fas fa-play mr-2"></i>Play All
                </button>
                <button id="shuffle-btn" class="px-6 py-3 bg-white/20 backdrop-blur-sm rounded-full text-white font-semibold hover:bg-white/30 transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-random mr-2"></i>Shuffle
                </button>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <div class="w-6 h-10 border-2 border-white rounded-full flex justify-center">
                <div class="w-1 h-3 bg-white rounded-full mt-2 animate-scroll"></div>
            </div>
        </div>
    </div>

    <!-- Music List Section with Enhanced Gradient Background -->
    <div class="relative min-h-screen bg-gradient-to-b from-blue-600 via-blue-700 to-blue-800 py-20 px-4 overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-20 left-10 w-32 h-32 bg-white/5 rounded-full blur-xl animate-float"></div>
            <div class="absolute top-40 right-20 w-24 h-24 bg-blue-400/10 rounded-full blur-lg animate-float" style="animation-delay: 2s;"></div>
            <div class="absolute bottom-40 left-20 w-40 h-40 bg-blue-500/10 rounded-full blur-xl animate-float" style="animation-delay: 4s;"></div>
        </div>
        
        <div class="max-w-7xl mx-auto relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16 animate-fade-in-up">
                <h2 class="text-4xl md:text-5xl font-bold text-red-500 mb-4">🎵 Latest Tracks</h2>
                <p class="text-xl text-black max-w-2xl mx-auto font-medium">Discover the rhythm and feel the energy of DPP's music collection</p>
            </div>
            
            @if ($music->isEmpty())
                <div class="text-center text-white animate-fade-in-up">
                    <div class="text-8xl mb-6 animate-bounce">🎵</div>
                    <p class="text-2xl mb-4">No music found yet</p>
                    <p class="text-lg text-blue-200">We're working on some amazing tracks for you!</p>
                </div>
            @else
                <div class="grid gap-8">
                    @foreach ($music as $index => $track)
                        <div class="music-card bg-white/10 backdrop-blur-md rounded-3xl p-8 shadow-2xl border border-white/20 hover:bg-white/20 transition-all duration-500 transform hover:scale-[1.02] hover:shadow-3xl animate-fade-in-up group" 
                             style="animation-delay: {{ $index * 0.1 }}s;"
                             data-track-title="{{ $track->title }}"
                             data-track-artist="{{ $track->artist }}">
                            
                            <!-- Glow Effect -->
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-500/20 via-blue-600/20 to-blue-700/20 rounded-3xl blur-xl opacity-0 transition-opacity duration-500 group-hover:opacity-100"></div>
                            
                            <!-- 3D Card Effect -->
                            <div class="card-3d-effect"></div>
                            
                            <div class="flex flex-col lg:flex-row items-center gap-8 relative z-10">
                                <!-- Enhanced Thumbnail -->
                                <div class="flex-shrink-0 group">
                                    <div class="relative">
                                        <div class="w-24 h-24 rounded-2xl overflow-hidden bg-gradient-to-br from-blue-400 via-blue-500 to-blue-600 p-1 transform hover:scale-110 transition-transform duration-300">
                                            <img src="{{ asset('assets/images/music/portrait-happy-young-woman.jpg') }}" 
                                                 alt="Music Thumbnail" 
                                                 class="w-full h-full object-cover rounded-xl">
                                        </div>
                                        <div class="absolute -top-2 -right-2 w-8 h-8 bg-gradient-to-r from-blue-400 to-blue-600 rounded-full flex items-center justify-center animate-pulse">
                                            <i class="fas fa-music text-white text-sm"></i>
                                        </div>
                                        <!-- Equalizer Bars -->
                                        <div class="absolute -bottom-2 -left-2 flex space-x-1">
                                            <div class="w-1 bg-white/60 rounded-full equalizer-bar" style="height: 20%"></div>
                                            <div class="w-1 bg-white/60 rounded-full equalizer-bar" style="height: 40%"></div>
                                            <div class="w-1 bg-white/60 rounded-full equalizer-bar" style="height: 60%"></div>
                                            <div class="w-1 bg-white/60 rounded-full equalizer-bar" style="height: 30%"></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Enhanced Track Info -->
                                <div class="flex-1 text-center lg:text-left">
                                    <h3 class="text-2xl font-bold text-white mb-2 hover:text-blue-200 transition-colors">{{ $track->title }}</h3>
                                    <p class="text-lg text-blue-200 mb-1">By <span class="font-semibold text-yellow-300">{{ $track->artist }}</span></p>
                                    <p class="text-sm text-black bg-white/80 rounded-full px-4 py-1 inline-block font-medium">{{ $track->category }}</p>
                                    
                                    <!-- Download Button -->
                                    <div class="flex items-center justify-center lg:justify-start mt-3">
                                        <a href="{{ route('music.file', basename($track->file)) }}" 
                                           download="{{ $track->title }} - {{ $track->artist }}.mp3"
                                           class="inline-flex items-center px-3 py-1.5 bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white text-sm font-medium rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg">
                                            <i class="fas fa-download mr-1.5 text-xs"></i>
                                            Download
                                        </a>
                                    </div>
                                </div>
                                
                                <!-- Enhanced Custom Audio Player -->
                                <div class="flex-1 max-w-lg">
                                    <div class="bg-white/20 rounded-2xl p-6 backdrop-blur-sm border border-white/30">
                                        <div class="flex items-center justify-between mb-4">
                                            <button class="play-btn w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-700 rounded-full flex items-center justify-center hover:from-blue-600 hover:to-blue-800 transition-all duration-300 transform hover:scale-110 shadow-lg">
                                                <i class="fas fa-play text-white ml-1"></i>
                                            </button>
                                            <div class="text-white text-sm font-medium">
                                                <span class="current-time">0:00</span> / <span class="duration">0:00</span>
                                            </div>
                                            <button class="volume-btn text-white hover:text-blue-200 transition-colors transform hover:scale-110">
                                                <i class="fas fa-volume-up text-lg"></i>
                                            </button>
                                        </div>
                                        
                                        <!-- Enhanced Progress Bar -->
                                        <div class="relative mb-2">
                                            <div class="bg-white/30 rounded-full h-3 overflow-hidden">
                                                <div class="progress-bar bg-gradient-to-r from-blue-400 via-blue-500 to-blue-600 h-3 rounded-full transition-all duration-300 relative" style="width: 0%">
                                                    <div class="absolute inset-0 bg-white/30 animate-pulse"></div>
                                                </div>
                                            </div>
                                            <input type="range" 
                                                   class="absolute inset-0 w-full h-3 opacity-0 cursor-pointer" 
                                                   min="0" 
                                                   max="100" 
                                                   value="0">
                                        </div>
                                        
                                        <!-- Waveform Visualization -->
                                        <div class="flex items-center justify-center space-x-1 h-8">
                                            @for ($i = 0; $i < 20; $i++)
                                                <div class="w-1 bg-white/30 rounded-full waveform-bar" style="height: {{ rand(20, 80) }}%"></div>
                                            @endfor
                                        </div>
                                        
                                        <!-- Hidden Audio Element -->
                                        <audio class="hidden" preload="metadata">
                                            <source src="{{ route('music.file', basename($track->file)) }}" type="audio/mpeg">
                                        </audio>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>

    <style>
        /* Custom Animations */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        @keyframes text-glow {
            0%, 100% { text-shadow: 0 0 20px rgba(59, 130, 246, 0.5); }
            50% { text-shadow: 0 0 30px rgba(37, 99, 235, 0.8), 0 0 40px rgba(29, 78, 216, 0.6); }
        }
        
        @keyframes gradient {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        
        @keyframes scroll {
            0% { transform: translateY(0); opacity: 1; }
            100% { transform: translateY(20px); opacity: 0; }
        }
        
        @keyframes pulse-slow {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.8; }
        }
        
        @keyframes fade-in-up {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes equalizer {
            0%, 100% { height: 20%; }
            25% { height: 60%; }
            50% { height: 40%; }
            75% { height: 80%; }
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
            animation: gradient 15s ease infinite;
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
        
        .animate-equalizer {
            animation: equalizer 1s ease-in-out infinite;
        }
        
        /* Floating Notes */
        .floating-note {
            position: absolute;
            font-size: 2rem;
            color: rgba(255, 255, 255, 0.3);
            animation: float 8s ease-in-out infinite;
            animation-delay: var(--delay);
            left: var(--left);
            top: 20%;
        }
        
        /* Enhanced Player Styles */
        .play-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 10px 25px rgba(59, 130, 246, 0.4);
        }
        
        .progress-bar {
            transition: width 0.1s ease;
            box-shadow: 0 0 10px rgba(59, 130, 246, 0.5);
        }
        
        .waveform-bar {
            transition: height 0.3s ease;
        }
        
        .equalizer-bar {
            transition: height 0.2s ease;
        }
        
        .music-card {
            position: relative;
            overflow: hidden;
            perspective: 1000px;
        }
        
        .music-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.5s;
        }
        
        .music-card:hover::before {
            left: 100%;
        }
        
        .card-3d-effect {
            position: absolute;
            inset: 0;
            background: linear-gradient(45deg, transparent 30%, rgba(255, 255, 255, 0.1) 50%, transparent 70%);
            opacity: 0;
            transition: opacity 0.3s;
            pointer-events: none;
        }
        
        .music-card:hover .card-3d-effect {
            opacity: 1;
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
            background: linear-gradient(to bottom, #3b82f6, #1d4ed8, #1e40af);
            border-radius: 5px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(to bottom, #2563eb, #1e3a8a, #1e3a8a);
        }
        
        /* Shadow effects */
        .shadow-3xl {
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }
        
        /* Audio Visualizer */
        #audio-visualizer {
            border: 1px solid rgba(255, 255, 255, 0.2);
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

        // Audio Visualizer
        let audioContext, analyser, dataArray, canvas, ctx;
        
        function initAudioVisualizer() {
            try {
                canvas = document.getElementById('visualizer-canvas');
                if (!canvas) return;
                
                ctx = canvas.getContext('2d');
                if (!ctx) return;
                
                // Initialize audio context
                audioContext = new (window.AudioContext || window.webkitAudioContext)();
                analyser = audioContext.createAnalyser();
                analyser.fftSize = 256;
                analyser.smoothingTimeConstant = 0.8;
                
                const bufferLength = analyser.frequencyBinCount;
                dataArray = new Uint8Array(bufferLength);
                
                // Start fallback animation immediately
                drawFallbackAnimation();
            } catch (error) {
                console.log('Audio visualizer initialization failed:', error);
                // Start fallback animation even if audio context fails
                canvas = document.getElementById('visualizer-canvas');
                if (canvas) {
                    ctx = canvas.getContext('2d');
                    drawFallbackAnimation();
                }
            }
        }
        
        function drawVisualizer() {
            if (!analyser || !ctx) return;
            
            requestAnimationFrame(drawVisualizer);
            
            // Clear canvas
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            
            try {
                analyser.getByteFrequencyData(dataArray);
                
                const barWidth = (canvas.width / dataArray.length) * 2.5;
                let barHeight;
                let x = 0;
                
                for (let i = 0; i < dataArray.length; i++) {
                    barHeight = dataArray[i] / 2;
                    
                    // Create animated gradient for each bar
                    const barGradient = ctx.createLinearGradient(0, canvas.height - barHeight, 0, canvas.height);
                    barGradient.addColorStop(0, '#60a5fa'); // Light blue
                    barGradient.addColorStop(0.5, '#3b82f6'); // Blue
                    barGradient.addColorStop(1, '#1d4ed8'); // Dark blue
                    
                    ctx.fillStyle = barGradient;
                    ctx.fillRect(x, canvas.height - barHeight, barWidth, barHeight);
                    
                    // Add glow effect
                    ctx.shadowColor = '#3b82f6';
                    ctx.shadowBlur = 3;
                    ctx.fillRect(x, canvas.height - barHeight, barWidth, barHeight);
                    ctx.shadowBlur = 0;
                    
                    x += barWidth + 1;
                }
            } catch (error) {
                // Fallback animation if audio analysis fails
                drawFallbackAnimation();
            }
        }
        
        function drawFallbackAnimation() {
            if (!ctx) return;
            
            const time = Date.now() * 0.001;
            const barWidth = canvas.width / 20;
            
            for (let i = 0; i < 20; i++) {
                const height = Math.sin(time + i * 0.3) * 30 + 40;
                const x = i * barWidth;
                
                const gradient = ctx.createLinearGradient(0, canvas.height - height, 0, canvas.height);
                gradient.addColorStop(0, '#60a5fa');
                gradient.addColorStop(1, '#1d4ed8');
                
                ctx.fillStyle = gradient;
                ctx.fillRect(x, canvas.height - height, barWidth - 1, height);
            }
        }

        // Enhanced Audio Player
        document.addEventListener('DOMContentLoaded', function() {
            const audioPlayers = document.querySelectorAll('.music-card');
            let currentPlayingAudio = null;
            let currentPlayingCard = null;
            let playlist = Array.from(audioPlayers);
            let currentPlaylistIndex = 0;
            
            // Initialize audio visualizer
            initAudioVisualizer();
            
            // Bottom player elements
            const bottomPlayer = document.getElementById('bottom-audio-player');
            const mainPlayBtn = document.getElementById('main-play-btn');
            const prevBtn = document.getElementById('prev-btn');
            const nextBtn = document.getElementById('next-btn');
            const volumeBtn = document.getElementById('volume-btn');
            const volumeSlider = document.getElementById('volume-slider');
            const progressSlider = document.getElementById('progress-slider');
            const currentTimeSpan = document.getElementById('current-time');
            const totalTimeSpan = document.getElementById('total-time');
            const progressBar = document.getElementById('progress-bar');
            const songTitle = document.getElementById('current-song-title');
            const songArtist = document.getElementById('current-song-artist');
            
            audioPlayers.forEach(player => {
                const audio = player.querySelector('audio');
                const playBtn = player.querySelector('.play-btn');
                const cardProgressBar = player.querySelector('.progress-bar');
                const cardProgressInput = player.querySelector('input[type="range"]');
                const cardCurrentTimeSpan = player.querySelector('.current-time');
                const cardDurationSpan = player.querySelector('.duration');
                const cardVolumeBtn = player.querySelector('.volume-btn');
                const waveformBars = player.querySelectorAll('.waveform-bar');
                const equalizerBars = player.querySelectorAll('.equalizer-bar');
                
                let isPlaying = false;
                let animationId;
                
                // Format time
                function formatTime(seconds) {
                    const mins = Math.floor(seconds / 60);
                    const secs = Math.floor(seconds % 60);
                    return `${mins}:${secs.toString().padStart(2, '0')}`;
                }
                
                // Animate waveform
                function animateWaveform() {
                    waveformBars.forEach((bar, index) => {
                        if (isPlaying) {
                            const height = Math.random() * 80 + 20;
                            bar.style.height = height + '%';
                        } else {
                            bar.style.height = '20%';
                        }
                    });
                    animationId = requestAnimationFrame(animateWaveform);
                }
                
                // Animate equalizer
                function animateEqualizer() {
                    equalizerBars.forEach((bar, index) => {
                        if (isPlaying) {
                            bar.classList.add('animate-equalizer');
                            bar.style.animationDelay = `${index * 0.1}s`;
                        } else {
                            bar.classList.remove('animate-equalizer');
                        }
                    });
                }
                
                // Update progress bar
                function updateProgress() {
                    const progress = (audio.currentTime / audio.duration) * 100;
                    cardProgressBar.style.width = progress + '%';
                    cardProgressInput.value = progress;
                    cardCurrentTimeSpan.textContent = formatTime(audio.currentTime);
                }
                
                // Play/Pause functionality
                playBtn.addEventListener('click', function() {
                    if (isPlaying) {
                        audio.pause();
                        playBtn.innerHTML = '<i class="fas fa-play text-white ml-1"></i>';
                        mainPlayBtn.innerHTML = '<i class="fas fa-play text-white ml-0.5"></i>';
                        cancelAnimationFrame(animationId);
                        animateEqualizer();
                        bottomPlayer.classList.add('hidden');
                    } else {
                        // Pause all other audio players
                        if (currentPlayingAudio && currentPlayingAudio !== audio) {
                            currentPlayingAudio.pause();
                            const otherPlayBtn = currentPlayingAudio.parentElement.parentElement.parentElement.parentElement.querySelector('.play-btn');
                            otherPlayBtn.innerHTML = '<i class="fas fa-play text-white ml-1"></i>';
                        }
                        
                        // Update current playing card and index
                        currentPlayingCard = player;
                        currentPlaylistIndex = playlist.indexOf(player);
                        
                        // Update bottom player info
                        const trackTitle = player.getAttribute('data-track-title');
                        const trackArtist = player.getAttribute('data-track-artist');
                        songTitle.textContent = trackTitle;
                        songArtist.textContent = trackArtist;
                        
                        // Connect to audio visualizer
                        if (audioContext && analyser) {
                            const source = audioContext.createMediaElementSource(audio);
                            source.connect(analyser);
                            analyser.connect(audioContext.destination);
                            drawVisualizer();
                            bottomPlayer.classList.remove('hidden');
                        }
                        
                        audio.play();
                        playBtn.innerHTML = '<i class="fas fa-pause text-white"></i>';
                        mainPlayBtn.innerHTML = '<i class="fas fa-pause text-white"></i>';
                        currentPlayingAudio = audio;
                        animateWaveform();
                        animateEqualizer();
                    }
                    isPlaying = !isPlaying;
                });
                
                // Progress bar interaction
                cardProgressInput.addEventListener('input', function() {
                    const time = (this.value / 100) * audio.duration;
                    audio.currentTime = time;
                });
                
                // Volume control
                cardVolumeBtn.addEventListener('click', function() {
                    if (audio.volume > 0) {
                        audio.volume = 0;
                        this.innerHTML = '<i class="fas fa-volume-mute text-lg"></i>';
                    } else {
                        audio.volume = 1;
                        this.innerHTML = '<i class="fas fa-volume-up text-lg"></i>';
                    }
                });
                
                // Audio event listeners
                audio.addEventListener('loadedmetadata', function() {
                    cardDurationSpan.textContent = formatTime(audio.duration);
                });
                
                audio.addEventListener('timeupdate', updateProgress);
                
                audio.addEventListener('ended', function() {
                    isPlaying = false;
                    playBtn.innerHTML = '<i class="fas fa-play text-white ml-1"></i>';
                    mainPlayBtn.innerHTML = '<i class="fas fa-play text-white ml-0.5"></i>';
                    cardProgressBar.style.width = '0%';
                    cardProgressInput.value = 0;
                    cardCurrentTimeSpan.textContent = '0:00';
                    cancelAnimationFrame(animationId);
                    animateEqualizer();
                    bottomPlayer.classList.add('hidden');
                    
                    // Auto-play next track
                    playNextTrack();
                });
                
                // Update bottom player progress
                audio.addEventListener('timeupdate', function() {
                    if (currentPlayingAudio === audio) {
                        const progress = (audio.currentTime / audio.duration) * 100;
                        progressBar.style.width = progress + '%';
                        progressSlider.value = progress;
                        currentTimeSpan.textContent = formatTime(audio.currentTime);
                        totalTimeSpan.textContent = formatTime(audio.duration);
                    }
                });
            });
            
            // Bottom player controls
            mainPlayBtn.addEventListener('click', function() {
                if (currentPlayingAudio) {
                    if (currentPlayingAudio.paused) {
                        currentPlayingAudio.play();
                        this.innerHTML = '<i class="fas fa-pause text-white"></i>';
                        bottomPlayer.classList.remove('hidden');
                    } else {
                        currentPlayingAudio.pause();
                        this.innerHTML = '<i class="fas fa-play text-white ml-0.5"></i>';
                        bottomPlayer.classList.add('hidden');
                    }
                }
            });
            
            prevBtn.addEventListener('click', function() {
                playPreviousTrack();
            });
            
            nextBtn.addEventListener('click', function() {
                playNextTrack();
            });
            
            volumeBtn.addEventListener('click', function() {
                if (currentPlayingAudio) {
                    if (currentPlayingAudio.volume > 0) {
                        currentPlayingAudio.volume = 0;
                        volumeSlider.value = 0;
                        this.innerHTML = '<i class="fas fa-volume-mute text-white text-sm"></i>';
                    } else {
                        currentPlayingAudio.volume = 1;
                        volumeSlider.value = 100;
                        this.innerHTML = '<i class="fas fa-volume-up text-white text-sm"></i>';
                    }
                }
            });
            
            volumeSlider.addEventListener('input', function() {
                if (currentPlayingAudio) {
                    currentPlayingAudio.volume = this.value / 100;
                    if (this.value > 0) {
                        volumeBtn.innerHTML = '<i class="fas fa-volume-up text-white text-sm"></i>';
                    } else {
                        volumeBtn.innerHTML = '<i class="fas fa-volume-mute text-white text-sm"></i>';
                    }
                }
            });
            
            progressSlider.addEventListener('input', function() {
                if (currentPlayingAudio) {
                    const time = (this.value / 100) * currentPlayingAudio.duration;
                    currentPlayingAudio.currentTime = time;
                }
            });
            
            function playNextTrack() {
                if (currentPlaylistIndex < playlist.length - 1) {
                    currentPlaylistIndex++;
                    const nextCard = playlist[currentPlaylistIndex];
                    const nextPlayBtn = nextCard.querySelector('.play-btn');
                    nextPlayBtn.click();
                }
            }
            
            function playPreviousTrack() {
                if (currentPlaylistIndex > 0) {
                    currentPlaylistIndex--;
                    const prevCard = playlist[currentPlaylistIndex];
                    const prevPlayBtn = prevCard.querySelector('.play-btn');
                    prevPlayBtn.click();
                }
            }
            });
            
            // Play All functionality
            document.getElementById('play-all-btn').addEventListener('click', function() {
                const musicCards = document.querySelectorAll('.music-card');
                let currentIndex = 0;
                
                // Function to play next track in playlist
                function playNextInPlaylist() {
                    if (currentIndex < musicCards.length) {
                        const currentCard = musicCards[currentIndex];
                        const audio = currentCard.querySelector('audio');
                        const playBtn = currentCard.querySelector('.play-btn');
                        
                        // Play the current track
                        if (audio && playBtn) {
                            // Pause any currently playing audio
                            if (currentPlayingAudio && currentPlayingAudio !== audio) {
                                currentPlayingAudio.pause();
                                const otherPlayBtn = currentPlayingAudio.parentElement.parentElement.parentElement.parentElement.querySelector('.play-btn');
                                if (otherPlayBtn) {
                                    otherPlayBtn.innerHTML = '<i class="fas fa-play text-white ml-1"></i>';
                                }
                            }
                            
                            // Update current playing card and index
                            currentPlayingCard = currentCard;
                            currentPlaylistIndex = currentIndex;
                            
                            // Update bottom player info
                            const trackTitle = currentCard.getAttribute('data-track-title');
                            const trackArtist = currentCard.getAttribute('data-track-artist');
                            songTitle.textContent = trackTitle;
                            songArtist.textContent = trackArtist;
                            
                            // Connect to audio visualizer
                            if (audioContext && analyser) {
                                const source = audioContext.createMediaElementSource(audio);
                                source.connect(analyser);
                                analyser.connect(audioContext.destination);
                                drawVisualizer();
                                bottomPlayer.classList.remove('hidden');
                            }
                            
                            // Play current track
                            audio.play();
                            playBtn.innerHTML = '<i class="fas fa-pause text-white"></i>';
                            mainPlayBtn.innerHTML = '<i class="fas fa-pause text-white"></i>';
                            currentPlayingAudio = audio;
                            
                            // Listen for track end to play next
                            audio.addEventListener('ended', function playNext() {
                                currentIndex++;
                                audio.removeEventListener('ended', playNext);
                                playNextInPlaylist();
                            }, { once: true });
                        }
                    } else {
                        // All tracks played, reset
                        currentIndex = 0;
                        bottomPlayer.classList.add('hidden');
                    }
                }
                
                // Start playing from the beginning
                currentIndex = 0;
                playNextInPlaylist();
            });
            
            // Shuffle functionality
            document.getElementById('shuffle-btn').addEventListener('click', function() {
                const musicCards = Array.from(document.querySelectorAll('.music-card'));
                const container = document.querySelector('.grid');
                
                // Shuffle the array
                for (let i = musicCards.length - 1; i > 0; i--) {
                    const j = Math.floor(Math.random() * (i + 1));
                    [musicCards[i], musicCards[j]] = [musicCards[j], musicCards[i]];
                }
                
                // Reorder in DOM
                musicCards.forEach(card => {
                    container.appendChild(card);
                });
                
                // Add visual feedback
                this.innerHTML = '<i class="fas fa-check mr-2"></i>Shuffled!';
                setTimeout(() => {
                    this.innerHTML = '<i class="fas fa-random mr-2"></i>Shuffle';
                }, 2000);
            });
            
            // 3D Card Effect
            document.querySelectorAll('.music-card').forEach(card => {
                card.addEventListener('mousemove', function(e) {
                    const rect = this.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;
                    
                    const rotateX = (y - centerY) / 10;
                    const rotateY = (centerX - x) / 10;
                    
                    this.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.02)`;
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) scale(1)';
                });
            });
        });
    </script>
@endsection