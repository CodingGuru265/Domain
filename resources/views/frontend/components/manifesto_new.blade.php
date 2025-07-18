@extends('layouts.front',['pageTitle' => 'Dpp | HomePage'])

@section('content')

<!-- LANDING PAGE -->


    {{-- HE WILL BE BACK --}}
        <div class="w-full" style="background: linear-gradient(135deg, #0574F7 0%, #E61E2B 100%);">
        <div class="flex flex-col md:flex-row items-stretch w-full">
            
            <!-- First Image (APM 1) - On desktop: Left | On mobile: Bottom -->
            <div class="w-full order-2 md:order-1 md:w-1/2 overflow-hidden rounded-r-xl md:rounded-xl">
            <img src="{{ asset('/assets/images/leaders/APM  1.png') }}"
                alt="DPP Mission Image"
                class="w-full h-full min-h-[200px] md:min-h-[300px] object-cover transition-transform hover:scale-105 duration-500">
            </div>

            <!-- Second Image (APM Vote) - On desktop: Right | On mobile: Top (shadow removed on mobile) -->
            <div class="w-full order-1 md:order-2 md:w-2/5 md:ml-6 mt-6 md:mt-0 overflow-hidden rounded-xl md:shadow-2xl flex items-center justify-center">
            <img src="{{ asset('/assets/images/APM_vote.png') }}" 
                alt="Malawi Development Image"
                class="max-w-[500px] w-full h-auto object-contain mx-auto transition-transform hover:scale-105 duration-500  !h-[350px] md:!h-auto">
            </div>

        </div>
    </div>

    </div>
    </div>


@endsection


@push('scripts')

{{-- Landing page script --}}
<script>
// Same JavaScript as before
document.addEventListener('DOMContentLoaded', function() {
  const items = document.querySelectorAll('[data-carousel-item]');
  const dots = document.querySelectorAll('[data-carousel-dot]');
  const prevButton = document.querySelector('[data-carousel-prev]');
  const nextButton = document.querySelector('[data-carousel-next]');
  
  let currentIndex = 0;
  let intervalId;

  function showSlide(index) {
    items.forEach((item, i) => {
      item.classList.toggle('opacity-0', i !== index);
      item.classList.toggle('z-10', i === index);
    });
    
    dots.forEach((dot, i) => {
      dot.classList.toggle('bg-white/50', i !== index);
      dot.classList.toggle('bg-white', i === index);
    });
    
    currentIndex = index;
  }

  function nextSlide() {
    showSlide((currentIndex + 1) % items.length);
  }

  function prevSlide() {
    showSlide((currentIndex - 1 + items.length) % items.length);
  }

  function startAutoSlide() {
    intervalId = setInterval(nextSlide, 10000);
  }

  function stopAutoSlide() {
    clearInterval(intervalId);
  }

  // Event Listeners
  nextButton.addEventListener('click', () => {
    stopAutoSlide();
    nextSlide();
    startAutoSlide();
  });

  prevButton.addEventListener('click', () => {
    stopAutoSlide();
    prevSlide();
    startAutoSlide();
  });

  dots.forEach(dot => {
    dot.addEventListener('click', () => {
      stopAutoSlide();
      showSlide(parseInt(dot.getAttribute('data-slide-to')));
      startAutoSlide();
    });
  });

  // Initialize
  showSlide(0);
  startAutoSlide();

  // Pause on hover
  const carousel = document.querySelector('[data-carousel]');
  carousel.addEventListener('mouseenter', stopAutoSlide);
  carousel.addEventListener('mouseleave', startAutoSlide);
});
</script>
{{-- end of landing page --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Register GSAP plugins
            gsap.registerPlugin(ScrollTrigger);

            // Music Title Animation
            const musicTitle = document.getElementById('music-title');
            if (musicTitle) {
                gsap.from(musicTitle, {
                    y: 30,
                    opacity: 0,
                    duration: 1,
                    scrollTrigger: {
                        trigger: musicTitle,
                        start: "top 80%",
                        toggleActions: "play none none none"
                    }
                });
            }

            // Music Subtitle Animation
            const musicSubtitle = document.getElementById('music-subtitle');
            if (musicSubtitle) {
                gsap.from(musicSubtitle, {
                    y: 30,
                    opacity: 0,
                    duration: 1,
                    delay: 0.3, 
                    scrollTrigger: {
                        trigger: musicSubtitle,
                        start: "top 80%",
                        toggleActions: "play none none none"
                    }
                });
            }

            // Music Image Animation
            const musicImage = document.getElementById('music-image');
            if (musicImage) {
                gsap.from(musicImage, {
                    x: -100,
                    opacity: 0,
                    duration: 1.5,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: musicImage,
                        start: "top 80%",
                        toggleActions: "play none none none"
                    }
                });
            }

            // Music Player Animation
            const musicPlayer = document.getElementById('music-player');
            if (musicPlayer) {
                gsap.from(musicPlayer, {
                    x: 100, // Slide in from the right
                    opacity: 0,
                    duration: 1.5,
                    delay: 0.3, // Slight delay after the image animation
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: musicPlayer,
                        start: "top 80%",
                        toggleActions: "play none none none"
                    }
                });
            }
        });

        const imageOverlayText = document.querySelector('#music-image h2');
        if (imageOverlayText) {
            gsap.from(imageOverlayText, {
                y: 20,
                opacity: 0,
                duration: 1,
                delay: 0.5, // Delay after the image animation
                scrollTrigger: {
                    trigger: imageOverlayText,
                    start: "top 80%",
                    toggleActions: "play none none none"
                }
            });
        }
    </script>

@endpush