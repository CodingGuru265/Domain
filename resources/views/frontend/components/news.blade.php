@push('styles')


    <style>
        :root {
            --custom-white: #f8f9fa;
            --custom-blue: #0056b3;
            --custom-gray: #6c757d;
        }

        .ubuntu-light {
            font-family: 'Ubuntu', sans-serif;
            font-weight: 300;
        }

        .playfair {
            font-family: 'Playfair Display', serif;
        }

        .background-container-music {
            position: relative;
            background-image: url('/api/placeholder/1920/600');
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 3rem;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5));
        }

        .text-container {
            position: relative;
            z-index: 10;
            text-align: center;
            color: white;
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .news-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        .category-pill {
            transition: all 0.3s ease;
        }

        .category-pill:hover {
            transform: scale(1.05);
        }

        .newsletter-section {
            background-color: #f0f4f8;
        }
    </style>

@endpush
@extends('layouts.front', ['pageTitle' => 'Dpp | News'])

@section('content')


    <!-- Background Image Section with Overlay -->
    <div class="background-container-news">
        <div class="overlay"></div> <!-- Gradient Overlay -->
        <div class="text-container">
            <div class="home-link playfair text-5xl md:text-7xl font-bold mb-6 animate-float">DPP News</div>
            <a href="{{ url('/')}}" class="contact-text">Home / </a>
            <span class="text-blue-400 font-medium font-bold">News</span>
        </div>
    </div>

    <!-- Main Content -->
    <main class="flex-grow container mx-auto px-4 py-8">
        <!-- Search and Categories Section -->
        <div class="mb-12">
            <div class="flex flex-col md:flex-row justify-between items-center mb-8">

              
            </div>
        </div>

    
        <!-- Latest News -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($newsList as $news)
                <div class="news-card bg-white rounded-xl shadow-sm overflow-hidden">
                    <img src="{{ asset('storage/' . $news->featured_image) ?? '/api/placeholder/400/300' }}" alt="News Image"
                        class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span
                                class="bg-blue-600 text-white text-xs px-3 py-1 rounded-full mr-3">{{ $news->category }}</span>
                            <span
                                class="text-gray-500 text-sm">{{ \Carbon\Carbon::parse($news->created_at)->format('M d, Y') }}</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 playfair">{{ $news->title }}</h3>
                        <p class="text-gray-700 mb-4">{{ Str::limit($news->content, 120, '...') }}</p>
                        <a href="{{ route('news_detail', ['id' => $news->id]) }}"
                            class="text-blue-600 font-medium hover:underline flex items-center">
                            Read More <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>




    </main>

@endsection
@push('scripts')

    <script>
        // Animate news cards on scroll
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize GSAP ScrollTrigger
            gsap.registerPlugin(ScrollTrigger);

            // Animate the news cards
            gsap.utils.toArray('.news-card').forEach(card => {
                gsap.from(card, {
                    y: 50,
                    opacity: 0,
                    duration: 0.8,
                    scrollTrigger: {
                        trigger: card,
                        start: "top bottom-=100",
                        toggleActions: "play none none none"
                    }
                });
            });

            // Animate the category pills
            gsap.from('.category-pill', {
                opacity: 0,
                x: -20,
                stagger: 0.1,
                duration: 0.5,
                scrollTrigger: {
                    trigger: '.category-pill',
                    start: "top bottom-=50",
                    toggleActions: "play none none none"
                }
            });
        });
    </script>

@endpush