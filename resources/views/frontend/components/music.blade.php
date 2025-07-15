@extends('layouts.front', ['pageTitle' => 'Dpp | music'])

@section('content')
    <!-- Hero Section with Background Image -->
    <div class="relative min-h-[60vh] flex items-center justify-center overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="{{ asset('assets/images/music/charismatic-modern-young-attractive-africanamerican-girl-with-afro-haircut-listening-music-headph.jpg') }}" 
                 alt="Music Vibes" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/70 to-red-900/70"></div>
        </div>
        
        <!-- Hero Content -->
        <div class="relative z-10 text-center text-white px-4">
            <h1 class="text-5xl md:text-7xl font-bold mb-4 text-blue-200">DPP Music</h1>
            <p class="text-xl md:text-2xl mb-2 text-white">DPP Party Music</p>
            <p class="text-lg md:text-xl text-gray-200 max-w-2xl mx-auto">
                Vibes Feel the rhythm, enjoy the beats, and celebrate with the 
                <span class="text-yellow-300 font-semibold">best</span> tunes!
            </p>
            <div class="w-32 h-1 bg-white mx-auto mt-6"></div>
        </div>
        
        <!-- Breadcrumb -->
        <!-- <div class="absolute bottom-4 left-4">
            <a href="{{ route('welcome') }}" class="text-white/80 hover:text-white transition-colors">
                home / Music
            </a>
        </div> -->
    </div>

    <!-- Music List Section with Gradient Background -->
    <div class="min-h-screen bg-gradient-to-b from-blue-600 via-purple-600 to-red-600 py-16 px-4">
        <div class="max-w-6xl mx-auto">
            @if ($music->isEmpty())
                <div class="text-center text-white">
                    <div class="text-6xl mb-4">🎵</div>
                    <p class="text-xl">No music found. Please check back later!</p>
                </div>
            @else
                <div class="space-y-6">
                    @foreach ($music as $track)
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 shadow-xl border border-white/20 hover:bg-white/20 transition-all duration-300 transform hover:scale-[1.02]">
                            <div class="flex flex-col md:flex-row items-center gap-6">
                                <!-- Thumbnail -->
                                <div class="flex-shrink-0">
                                    <div class="w-20 h-20 rounded-xl overflow-hidden bg-gradient-to-br from-blue-400 to-purple-500 flex items-center justify-center">
                                        <img src="{{ asset('assets/images/music/portrait-happy-young-woman.jpg') }}" 
                                             alt="Music Thumbnail" 
                                             class="w-full h-full object-cover">
                                    </div>
                                </div>
                                
                                <!-- Track Info -->
                                <div class="flex-1 text-center md:text-left">
                                    <h3 class="text-xl font-bold text-white mb-1">{{ $track->title }}</h3>
                                    <p class="text-blue-200">By <span class="font-semibold">{{ $track->artist }}</span></p>
                                    <p class="text-sm text-gray-300">{{ $track->category }}</p>
                                </div>
                                
                                <!-- Custom Audio Player -->
                                <div class="flex-1 max-w-md">
                                    <div class="bg-white/20 rounded-xl p-4 backdrop-blur-sm">
                                        <div class="flex items-center justify-between mb-3">
                                            <button class="play-btn w-10 h-10 bg-white rounded-full flex items-center justify-center hover:bg-gray-100 transition-colors">
                                                <i class="fas fa-play text-blue-600 ml-1"></i>
                                            </button>
                                            <div class="text-white text-sm">
                                                <span class="current-time">0:00</span> / <span class="duration">0:00</span>
                                            </div>
                                            <button class="volume-btn text-white hover:text-blue-200 transition-colors">
                                                <i class="fas fa-volume-up"></i>
                                            </button>
                                        </div>
                                        
                                        <!-- Progress Bar -->
                                        <div class="relative">
                                            <div class="bg-white/30 rounded-full h-2">
                                                <div class="progress-bar bg-gradient-to-r from-blue-400 to-purple-500 h-2 rounded-full transition-all duration-300" style="width: 0%"></div>
                                            </div>
                                            <input type="range" 
                                                   class="absolute inset-0 w-full h-2 opacity-0 cursor-pointer" 
                                                   min="0" 
                                                   max="100" 
                                                   value="0">
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
        .play-btn:hover {
            transform: scale(1.1);
        }
        
        .progress-bar {
            transition: width 0.1s ease;
        }
        
        /* Custom scrollbar for the page */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
        }
        
        ::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.3);
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 255, 255, 0.5);
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const audioPlayers = document.querySelectorAll('.bg-white\\/10');
            
            audioPlayers.forEach(player => {
                const audio = player.querySelector('audio');
                const playBtn = player.querySelector('.play-btn');
                const progressBar = player.querySelector('.progress-bar');
                const progressInput = player.querySelector('input[type="range"]');
                const currentTimeSpan = player.querySelector('.current-time');
                const durationSpan = player.querySelector('.duration');
                const volumeBtn = player.querySelector('.volume-btn');
                
                let isPlaying = false;
                
                // Format time
                function formatTime(seconds) {
                    const mins = Math.floor(seconds / 60);
                    const secs = Math.floor(seconds % 60);
                    return `${mins}:${secs.toString().padStart(2, '0')}`;
                }
                
                // Update progress bar
                function updateProgress() {
                    const progress = (audio.currentTime / audio.duration) * 100;
                    progressBar.style.width = progress + '%';
                    progressInput.value = progress;
                    currentTimeSpan.textContent = formatTime(audio.currentTime);
                }
                
                // Play/Pause functionality
                playBtn.addEventListener('click', function() {
                    if (isPlaying) {
                        audio.pause();
                        playBtn.innerHTML = '<i class="fas fa-play text-blue-600 ml-1"></i>';
                    } else {
                        // Pause all other audio players
                        document.querySelectorAll('audio').forEach(otherAudio => {
                            if (otherAudio !== audio) {
                                otherAudio.pause();
                            }
                        });
                        document.querySelectorAll('.play-btn').forEach(otherBtn => {
                            if (otherBtn !== playBtn) {
                                otherBtn.innerHTML = '<i class="fas fa-play text-blue-600 ml-1"></i>';
                            }
                        });
                        
                        audio.play();
                        playBtn.innerHTML = '<i class="fas fa-pause text-blue-600"></i>';
                    }
                    isPlaying = !isPlaying;
                });
                
                // Progress bar interaction
                progressInput.addEventListener('input', function() {
                    const time = (this.value / 100) * audio.duration;
                    audio.currentTime = time;
                });
                
                // Volume control
                volumeBtn.addEventListener('click', function() {
                    if (audio.volume > 0) {
                        audio.volume = 0;
                        this.innerHTML = '<i class="fas fa-volume-mute"></i>';
                    } else {
                        audio.volume = 1;
                        this.innerHTML = '<i class="fas fa-volume-up"></i>';
                    }
                });
                
                // Audio event listeners
                audio.addEventListener('loadedmetadata', function() {
                    durationSpan.textContent = formatTime(audio.duration);
                });
                
                audio.addEventListener('timeupdate', updateProgress);
                
                audio.addEventListener('ended', function() {
                    isPlaying = false;
                    playBtn.innerHTML = '<i class="fas fa-play text-blue-600 ml-1"></i>';
                    progressBar.style.width = '0%';
                    progressInput.value = 0;
                    currentTimeSpan.textContent = '0:00';
                });
            });
        });
    </script>
@endsection