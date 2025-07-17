{{-- @extends('layouts.front', ['pageTitle' => 'Dpp | music'])

@section('content')
    <!-- Background Image Section with Overlay -->
    <div class="background-container-music">
        <div class="overlay"></div> <!-- Gradient Overlay -->
        <div class="text-container">
            <div class="home-link playfair text-5xl md:text-7xl font-bold mb-6 animate-float">DPP Music</div>
            <a href="{{  route('welcome') }}" class="contact-text">home / Music</a>
        </div>
    </div>


    <div id="musicLis" class="bg-gray-100 rounded-lg p-10 shadow-lg w-full md:w-[80%] mx-auto">
        @if ($music->isEmpty())
            <p class="text-center text-gray-600">No music found. Please check back later!</p>
        @else
            <ul class="space-y-6">
                @foreach ($music as $track)
                    <li
                        class="flex flex-col md:flex-row items-center justify-between bg-white p-4 rounded shadow-sm hover:bg-gray-50 transition">
                        <div class="flex items-center space-x-4">
                            <div class="text-purple-600 text-xl">
                                <i class="fas fa-music"></i>
                            </div>
                            <div>
                                <p class="text-lg font-semibold text-gray-800">{{ $track->title }}</p>
                                <p class="text-sm text-gray-500">{{ $track->artist }} &bull; {{ $track->category }}</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4 mt-4 md:mt-0">
                            <audio controls class="w-64">
                                <source src="{{ asset('storage/' . $track->file) }}" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                            {{-- <a href="{{ asset('storage/' . $track->file) }}" download
                                class="text-green-600 hover:text-green-800" title="Download">
                                <i class="fas fa-download text-xl"></i>
                            </a> --}}
                        {{-- </div>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>

@endsection --}} 





@extends('layouts.front', ['pageTitle' => 'Dpp | music'])

@section('content')
    <!-- Particle Background -->
    <div id="particles-js" class="fixed inset-0 z-0"></div>
    
    <!-- 3D Audio Visualizer -->
    <div id="audio-visualizer" class="fixed top-4 right-4 z-20 hidden">
        <canvas id="visualizer-canvas" width="200" height="100" class="rounded-lg bg-black/20 backdrop-blur-sm"></canvas>
    </div>
    
    <!-- Hero Section with Background Image -->
    <div class="relative min-h-[80vh] flex items-center justify-center overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0">
            <img src="{{ asset('assets/images/music/playerbg.png') }}" 
                 alt="Music Vibes" 
                 class="w-full h-full object-cover animate-pulse-slow">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/80 via-purple-900/70 to-red-900/80 animate-gradient"></div>
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
                <h1 class="text-6xl md:text-8xl font-bold mb-4 text-transparent bg-clip-text animate-text-glow" style="background: linear-gradient(to right, #0574F7, #E61E2B); -webkit-background-clip: text; -webkit-text-fill-color: transparent; -webkit-text-stroke: 2px white; text-stroke: 2px white;">
                    MUSIC PLAYLIST
                </h1>
                <div class="w-64 h-1 mx-auto mt-6 animate-pulse" style="background: linear-gradient(to right, #0574F7, #E61E2B);"></div>
            </div>
            
            <!-- <div class="space-y-4 animate-fade-in-up">
                <p class="text-2xl md:text-3xl mb-2 text-white font-light">DPP Party Playlist</p>
                <p class="text-lg md:text-xl text-gray-200 max-w-3xl mx-auto leading-relaxed">
                    Vibes Feel the rhythm, enjoy the beats, and celebrate with the 
                    <span class="text-yellow-300 font-bold animate-bounce">best </span> tunes!
                </p>
            </div> -->
            
            <!-- Animated Stats -->
            <div class="flex justify-center items-center space-x-8 mt-12 animate-fade-in-up" style="animation-delay: 0.5s;">
                <div class="text-center">
                    <div class="text-3xl font-bold text-white counter" data-target="{{ $totalTracks }}">0</div>
                    <div class="text-sm text-gray-300">Tracks</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-white counter" data-target="{{ $totalPlays }}">0</div>
                    <div class="text-sm text-gray-300">Hours</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-white counter" data-target="{{ $totalDownloads }}">0</div>
                    <div class="text-sm text-gray-300">Fans</div>
                </div>
            </div>
            
            <!-- Music Controls -->
            <div class="mt-8 flex justify-center space-x-16 animate-fade-in-up" style="animation-delay: 1s;">
                <button id="play-all-btn" class="px-8 py-3 rounded-full text-white font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg" style="background: linear-gradient(to right, #0574F7, #E61E2B);">
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
    <div class="relative min-h-screen py-20 px-4 overflow-hidden" style="background: linear-gradient(to bottom, #0574F7, #E61E2B);">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-20 left-10 w-32 h-32 bg-white/5 rounded-full blur-xl animate-float"></div>
            <div class="absolute top-40 right-20 w-24 h-24 bg-purple-400/10 rounded-full blur-lg animate-float" style="animation-delay: 2s;"></div>
            <div class="absolute bottom-40 left-20 w-40 h-40 bg-red-400/10 rounded-full blur-xl animate-float" style="animation-delay: 4s;"></div>
        </div>
        
        <div class="max-w-7xl mx-auto relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16 animate-fade-in-up">
                <!-- <h2 class="text-4xl md:text-5xl font-bold text-white mb-4 drop-shadow-2xl">🎵 All Songs</h2> -->
                <p class="text-xl text-blue-100 max-w-2xl mx-auto drop-shadow-lg">Listen, Share & Download DPP's Music Collection & More</p>
            </div>
            
            @if ($music->isEmpty())
                <div class="text-center text-white animate-fade-in-up">
                    <div class="text-8xl mb-6 animate-bounce drop-shadow-2xl">🎵</div>
                    <p class="text-2xl mb-4 drop-shadow-lg">No music found yet</p>
                    <p class="text-lg text-blue-100 drop-shadow-md">We're working on some amazing tracks for you!</p>
                </div>
            @else
                <div class="grid gap-8">
                    @foreach ($music as $index => $track)
                        <div class="music-card bg-black/30 backdrop-blur-md rounded-3xl p-8 shadow-2xl border border-white/30 hover:bg-black/40 transition-all duration-500 transform hover:scale-[1.02] hover:shadow-3xl animate-fade-in-up group" 
                             style="animation-delay: {{ $index * 0.1 }}s;"
                             data-track-title="{{ $track->title }}"
                             data-track-artist="{{ $track->artist }}"
                             data-track-id="{{ $track->id }}">
                            
                            <!-- Glow Effect -->
                            <div class="absolute inset-0 rounded-3xl blur-xl opacity-0 transition-opacity duration-500 group-hover:opacity-100" style="background: linear-gradient(to right, rgba(5, 116, 247, 0.2), rgba(230, 30, 43, 0.2));"></div>
                            
                            <!-- 3D Card Effect -->
                            <div class="card-3d-effect"></div>
                            
                            <div class="flex flex-col lg:flex-row items-center gap-8 relative z-10">
                                <!-- Enhanced Thumbnail -->
                                <div class="flex-shrink-0 group">
                                    <div class="relative">
                                        <div class="w-24 h-24 rounded-2xl overflow-hidden p-1 transform hover:scale-110 transition-transform duration-300" style="background: linear-gradient(to bottom right, #0574F7, #E61E2B);">
                                            <img src="{{ asset('assets/images/music/dpp.jpg') }}" 
                                                 alt="Music Thumbnail" 
                                                 class="w-full h-full object-cover rounded-xl">
                                        </div>
                                        <div class="absolute -top-2 -right-2 w-8 h-8 rounded-full flex items-center justify-center animate-pulse" style="background: linear-gradient(to right, #0574F7, #E61E2B);">
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
                                    <h3 class="text-2xl font-bold text-white mb-2 hover:text-blue-200 transition-colors drop-shadow-lg">{{ $track->title }}</h3>
                                    <p class="text-lg text-blue-100 mb-1 drop-shadow-md">By <span class="font-semibold text-yellow-300 drop-shadow-lg">{{ $track->artist }}</span></p>
                                    <p class="text-sm text-white bg-blue-500/30 rounded-full px-4 py-1 inline-block border border-blue-400/50 mb-4">{{ $track->category }}</p>
                                    <!-- Track Statistics -->
                                    <div class="flex items-center justify-center lg:justify-start space-x-6 mb-4">
                                        <div class="text-center">
                                            <div class="text-lg font-bold text-white track-plays" data-track-id="{{ $track->id }}">{{ $musicStats[$track->id]['plays'] ?? 0 }}</div>
                                            <div class="text-xs text-gray-300">Plays</div>
                                        </div>
                                        <div class="text-center">
                                            <div class="text-lg font-bold text-white track-downloads" data-track-id="{{ $track->id }}">{{ $musicStats[$track->id]['downloads'] ?? 0 }}</div>
                                            <div class="text-xs text-gray-300">Downloads</div>
                                        </div>
                                    </div>
                                    <!-- Action Buttons -->
                                    <div class="flex items-center justify-center lg:justify-start space-x-3">
                                        <a href="{{ route('music.download', $track->id) }}" class="download-btn inline-flex items-center px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-white font-medium hover:bg-white/30 transition-all duration-300 transform hover:scale-105 border border-white/30" data-track-id="{{ $track->id }}">
                                            <i class="fas fa-download mr-2"></i>
                                            Download
                                        </a>
                                        <button class="share-btn inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-white font-medium hover:bg-white/20 transition-all duration-300 transform hover:scale-105 border border-white/20" data-track-title="{{ $track->title }}" data-track-artist="{{ $track->artist }}">
                                            <i class="fas fa-share mr-2"></i>
                                            Share
                                        </button>
                                    </div>
                                </div>
                                
                                <!-- Enhanced Custom Audio Player -->
                                <div class="flex-1 max-w-lg">
                                    <div class="bg-black/40 rounded-2xl p-6 backdrop-blur-sm border border-white/40 shadow-xl">
                                        <div class="flex items-center justify-between mb-4">
                                            <button class="play-btn w-12 h-12 rounded-full flex items-center justify-center transition-all duration-300 transform hover:scale-110 shadow-lg" style="background: linear-gradient(to right, #0574F7, #E61E2B);">
                                                <i class="fas fa-play text-white ml-1"></i>
                                            </button>
                                            <div class="text-white text-sm font-medium">
                                                <span class="current-time">0:00</span> / <span class="duration">0:00</span>
                                            </div>
                                            <button class="volume-btn text-white hover:text-white/80 transition-colors transform hover:scale-110">
                                                <i class="fas fa-volume-up text-lg"></i>
                                            </button>
                                        </div>
                                        
                                        <!-- Enhanced Progress Bar -->
                                        <div class="relative mb-2 cursor-pointer" title="Click to seek">
                                            <div class="bg-white/50 rounded-full h-3 overflow-hidden shadow-inner">
                                                <div class="progress-bar h-3 rounded-full transition-all duration-300 relative" style="width: 0%; background: linear-gradient(to right, #0574F7, #E61E2B);">
                                                    <div class="absolute inset-0 bg-white/30 animate-pulse"></div>
                                                </div>
                                            </div>
                                            <input type="range" 
                                                   class="absolute inset-0 w-full h-3 opacity-0 cursor-pointer z-10" 
                                                   min="0" 
                                                   max="100" 
                                                   value="0"
                                                   step="0.1">
                                            <!-- Progress bar hover indicator -->
                                            <div class="absolute inset-0 rounded-full h-3 bg-transparent hover:bg-white/10 transition-colors duration-200"></div>
                                        </div>
                                        
                                        <!-- Waveform Visualization -->
                                        <div class="flex items-center justify-center space-x-1 h-8">
                                            @for ($i = 0; $i < 20; $i++)
                                                <div class="w-1 bg-white/60 rounded-full waveform-bar shadow-sm" style="height: {{ rand(20, 80) }}%"></div>
                                            @endfor
                                        </div>
                                        
                                        <!-- Hidden Audio Element -->
                                        <audio class="hidden" preload="metadata">
                                            <source src="{{ asset('storage/' . $track->file) }}" type="audio/mpeg">
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
            0%, 100% { text-shadow: 0 0 20px rgba(5, 116, 247, 0.5); }
            50% { text-shadow: 0 0 30px rgba(230, 30, 43, 0.8), 0 0 40px rgba(5, 116, 247, 0.6); }
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
            box-shadow: 0 10px 25px rgba(5, 116, 247, 0.6);
        }
        
        .progress-bar {
            transition: width 0.1s ease;
            box-shadow: 0 0 10px rgba(5, 116, 247, 0.5);
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
            backdrop-filter: blur(10px);
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
            background: linear-gradient(to bottom, #0574F7, #E61E2B);
            border-radius: 5px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(to bottom, #0461d4, #cc1a26);
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
            canvas = document.getElementById('visualizer-canvas');
            ctx = canvas.getContext('2d');
            
            audioContext = new (window.AudioContext || window.webkitAudioContext)();
            analyser = audioContext.createAnalyser();
            analyser.fftSize = 256;
            
            const bufferLength = analyser.frequencyBinCount;
            dataArray = new Uint8Array(bufferLength);
        }
        
        function drawVisualizer() {
            if (!analyser) return;
            
            requestAnimationFrame(drawVisualizer);
            
            analyser.getByteFrequencyData(dataArray);
            
            ctx.fillStyle = 'rgba(0, 0, 0, 0.2)';
            ctx.fillRect(0, 0, canvas.width, canvas.height);
            
            const barWidth = (canvas.width / dataArray.length) * 2.5;
            let barHeight;
            let x = 0;
            
            for (let i = 0; i < dataArray.length; i++) {
                barHeight = dataArray[i] / 2;
                
                const gradient = ctx.createLinearGradient(0, 0, 0, canvas.height);
                gradient.addColorStop(0, '#0574F7');
                gradient.addColorStop(0.5, '#0574F7');
                gradient.addColorStop(1, '#E61E2B');
                
                ctx.fillStyle = gradient;
                ctx.fillRect(x, canvas.height - barHeight, barWidth, barHeight);
                
                x += barWidth + 1;
            }
        }

        // Enhanced Audio Player
        document.addEventListener('DOMContentLoaded', function() {
            console.log('DOM loaded, initializing music player...');
            const audioPlayers = document.querySelectorAll('.music-card');
            console.log('Found', audioPlayers.length, 'music cards');
            let currentPlayingAudio = null;
            
            // Initialize audio visualizer
            initAudioVisualizer();
            
            audioPlayers.forEach((player, index) => {
                console.log('Initializing player', index + 1);
                const audio = player.querySelector('audio');
                const playBtn = player.querySelector('.play-btn');
                const progressBar = player.querySelector('.progress-bar');
                const progressInput = player.querySelector('input[type="range"]');
                const currentTimeSpan = player.querySelector('.current-time');
                const durationSpan = player.querySelector('.duration');
                const volumeBtn = player.querySelector('.volume-btn');
                const waveformBars = player.querySelectorAll('.waveform-bar');
                const equalizerBars = player.querySelectorAll('.equalizer-bar');
                
                console.log('Player', index + 1, 'elements found:', {
                    audio: !!audio,
                    playBtn: !!playBtn,
                    progressBar: !!progressBar,
                    progressInput: !!progressInput,
                    currentTimeSpan: !!currentTimeSpan,
                    durationSpan: !!durationSpan,
                    volumeBtn: !!volumeBtn,
                    waveformBars: waveformBars.length,
                    equalizerBars: equalizerBars.length
                });
                
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
                    if (audio.duration && !isNaN(audio.duration)) {
                        const progress = (audio.currentTime / audio.duration) * 100;
                        progressBar.style.width = progress + '%';
                        progressInput.value = progress;
                        currentTimeSpan.textContent = formatTime(audio.currentTime);
                    }
                }
                
                // Play/Pause functionality
                playBtn.addEventListener('click', function() {
                    console.log('Play button clicked, isPlaying:', isPlaying);
                    
                    if (isPlaying) {
                        // Pause functionality
                        audio.pause();
                        playBtn.innerHTML = '<i class="fas fa-play text-white ml-1"></i>';
                        cancelAnimationFrame(animationId);
                        animateEqualizer();
                        document.getElementById('audio-visualizer').classList.add('hidden');
                        isPlaying = false;
                    } else {
                        // Play functionality
                        // Pause all other audio players
                        if (currentPlayingAudio && currentPlayingAudio !== audio) {
                            currentPlayingAudio.pause();
                            const otherPlayBtn = currentPlayingAudio.parentElement.parentElement.parentElement.parentElement.querySelector('.play-btn');
                            if (otherPlayBtn) {
                                otherPlayBtn.innerHTML = '<i class="fas fa-play text-white ml-1"></i>';
                            }
                        }
                        
                        // Connect to audio visualizer
                        if (audioContext && analyser) {
                            try {
                                const source = audioContext.createMediaElementSource(audio);
                                source.connect(analyser);
                                analyser.connect(audioContext.destination);
                                drawVisualizer();
                                document.getElementById('audio-visualizer').classList.remove('hidden');
                            } catch (error) {
                                console.log('Audio visualizer already connected or not supported');
                            }
                        }
                        
                        // Play the audio
                        audio.play().then(() => {
                            console.log('Audio started playing successfully');
                            playBtn.innerHTML = '<i class="fas fa-pause text-white"></i>';
                            currentPlayingAudio = audio;
                            animateWaveform();
                            animateEqualizer();
                            isPlaying = true;
                        }).catch(error => {
                            console.error('Error playing audio:', error);
                            // Reset button state on error
                            playBtn.innerHTML = '<i class="fas fa-play text-white ml-1"></i>';
                            isPlaying = false;
                        });
                    }
                });
                
                // Progress bar interaction
                progressInput.addEventListener('input', function() {
                    if (audio.duration && !isNaN(audio.duration)) {
                        const time = (this.value / 100) * audio.duration;
                        audio.currentTime = time;
                        console.log('Seeking to:', formatTime(time));
                    }
                });
                
                // Also handle change event for better compatibility
                progressInput.addEventListener('change', function() {
                    if (audio.duration && !isNaN(audio.duration)) {
                        const time = (this.value / 100) * audio.duration;
                        audio.currentTime = time;
                        console.log('Seeking to (change):', formatTime(time));
                    }
                });
                
                // Handle click on progress bar background
                const progressContainer = progressInput.parentElement;
                progressContainer.addEventListener('click', function(e) {
                    if (audio.duration && !isNaN(audio.duration)) {
                        const rect = this.getBoundingClientRect();
                        const clickX = e.clientX - rect.left;
                        const percentage = (clickX / rect.width) * 100;
                        const time = (percentage / 100) * audio.duration;
                        audio.currentTime = time;
                        progressInput.value = percentage;
                        progressBar.style.width = percentage + '%';
                        console.log('Clicked seeking to:', formatTime(time));
                    }
                });
                
                // Volume control
                volumeBtn.addEventListener('click', function() {
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
                    console.log('Audio metadata loaded, duration:', audio.duration);
                    durationSpan.textContent = formatTime(audio.duration);
                });
                
                audio.addEventListener('timeupdate', updateProgress);
                
                audio.addEventListener('play', function() {
                    console.log('Audio play event triggered');
                });
                
                audio.addEventListener('pause', function() {
                    console.log('Audio pause event triggered');
                });
                
                audio.addEventListener('ended', function() {
                    console.log('Audio ended event triggered');
                    isPlaying = false;
                    playBtn.innerHTML = '<i class="fas fa-play text-white ml-1"></i>';
                    progressBar.style.width = '0%';
                    progressInput.value = 0;
                    currentTimeSpan.textContent = '0:00';
                    cancelAnimationFrame(animationId);
                    animateEqualizer();
                    document.getElementById('audio-visualizer').classList.add('hidden');
                });
                
                audio.addEventListener('error', function(e) {
                    console.error('Audio error:', e);
                });
            });
            
            // Play All functionality
            document.getElementById('play-all-btn').addEventListener('click', function() {
                const firstAudio = document.querySelector('.music-card audio');
                const firstPlayBtn = document.querySelector('.music-card .play-btn');
                if (firstAudio && firstPlayBtn) {
                    firstPlayBtn.click();
                }
            });
            
            // Shuffle functionality
            document.getElementById('shuffle-btn').addEventListener('click', function() {
                const musicCards = Array.from(document.querySelectorAll('.music-card'));
                const shuffled = musicCards.sort(() => Math.random() - 0.5);
                const container = document.querySelector('.grid');
                shuffled.forEach(card => container.appendChild(card));
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

            // Play tracking
            document.querySelectorAll('.music-card').forEach(card => {
                const audio = card.querySelector('audio');
                const playBtn = card.querySelector('.play-btn');
                const trackId = card.getAttribute('data-track-id');
                if (audio && playBtn && trackId) {
                    audio.addEventListener('play', function() {
                        fetch("{{ route('music.trackPlay') }}", {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({ music_id: trackId })
                        })
                        .then(res => res.json())
                        .then(data => {
                            if (data.success) {
                                const playsElement = card.querySelector('.track-plays[data-track-id="' + trackId + '"]');
                                if (playsElement) {
                                    playsElement.textContent = data.plays;
                                }
                                const totalPlaysElement = document.querySelector('.counter[data-target]');
                                if (totalPlaysElement) {
                                    totalPlaysElement.textContent = data.total_plays;
                                }
                            }
                        })
                        .catch(error => {
                            console.error('Error tracking play:', error);
                        });
                    });
                }
            });
            // Download tracking
            document.querySelectorAll('.download-btn').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    const trackId = this.getAttribute('data-track-id');
                    fetch("{{ route('music.trackDownload') }}", {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({ music_id: trackId })
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.success) {
                            const downloadsElement = document.querySelector('.track-downloads[data-track-id="' + trackId + '"]');
                            if (downloadsElement) {
                                downloadsElement.textContent = data.downloads;
                            }
                            const totalDownloadsElement = document.querySelector('.counter[data-target]');
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
            // Share button
            document.querySelectorAll('.share-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const title = this.getAttribute('data-track-title');
                    const artist = this.getAttribute('data-track-artist');
                    const url = window.location.href;
                    if (navigator.share) {
                        navigator.share({
                            title: title,
                            text: `Listen to ${title} by ${artist} on DPP Music!`,
                            url: url
                        });
                    } else {
                        navigator.clipboard.writeText(url).then(() => {
                            alert('Link copied to clipboard!');
                        });
                    }
                });
            });
        });
    </script>
@endsection