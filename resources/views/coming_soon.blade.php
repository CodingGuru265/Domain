@extends('layouts.app_coming_soon',['pageTitle' => 'DPP | Coming Soon'])

@section('content')

<!-- LANDING PAGE -->



<style>
[data-carousel-item] {
  transition: opacity 0.7s ease-in-out;
}

/* Perfect centering */
.max-w-2xl {
  margin-left: auto;
  margin-right: auto;
  padding: 0 1rem; /* Adjust as needed */
}

/* Adjusted button spacing */
.left-4 {
  left: 4rem; /* increased from 2rem */
}
.right-4 {
  right: 4rem; /* increased from 2rem */
}
</style>

<style>
    .dpp_blue{
        color: #197EC2;
    }
    .dpp_background{
        background-color: #0f1010;
    }
    .button_styling {
    background: linear-gradient(to right, rgba(5, 116, 247, 1), rgba(230, 30, 43, 1));
    }
    .button_styling_reverse {
    background: linear-gradient(to left, rgba(5, 116, 247, 1), rgba(230, 30, 43, 1));
    }
</style>

<div class="">
        <div class="dpp_background" style='height: 100vh;'  >
            <div class="pt-10 pb-10  ">
                <!--h1 class="text-center font-extralight text-white text-4xl md:text-3xl mb-8">Focus Areas</h1-->
                <div class='flex justify-center items-center'>
                    <img src="/assets/images/dpp_logo_2.png" />
                </div>
                <h1 class="text-center font-bold pt-2 text-white text-3xl md:text-4xl">Coming Soon</h1>
                <br/>
                <div class=" md:flex flex justify-center items-center">
                    {{-- COUNT DOWN  Desktop--}}
                    <!--li class="nav-link flex-shrink-0 border border-[var(--theme-color)] bg-[#E61E2B] rounded-lg px-4 py-2 text-white text-sm ml-4"-->
                    <div class="nav-link flex-shrink-0  rounded-lg px-4 py-2 text-white text-sm ml-4" style="background-color: #0574F7">
                        <div class="text-center mb-1">
                            <span class="text-xs font-bold uppercase tracking-wider">Count Down to 2025 Elections</span>
                        </div>
                        <div class="flex gap-4 items-center justify-center">
                            
                            <!-- Voting Icon  -->
                                <div>
                                <img src="{{ asset('/assets/images/image 2.png') }}" alt="check icon" class="w-16 h-16 inline-block" />
                                </div>

                            <!-- Days -->
                            <div class="flex flex-col items-center">
                                <span id="days" class="text-xl font-bold">00 :</span>
                                <div class="w-5 bg-white my-1" style="height: 0.5px;"></div>
                                <span  class="text-xs uppercase tracking-wide">Days</span>
                            </div>
                            <!-- Hours -->
                            <div class="flex flex-col items-center">
                                <span id="hours"  class="text-xl font-bold">00 :</span>
                                <div class="w-5 bg-white my-1" style="height: 0.5px;"></div>
                                <span class="text-xs uppercase tracking-wide">Hours</span>
                            </div>
                            <!-- Minutes -->
                            <div class="flex flex-col items-center">
                                <span  id="minutes" class="text-xl font-bold">00 :</span>
                            <div class="w-5 bg-white my-1" style="height: 0.5px;"></div>
                                <span class="text-xs uppercase tracking-wide">Min</span>
                            </div>
                            <!-- Seconds -->
                            <div class="flex flex-col items-center">
                                <span id="seconds" class="text-xl font-bold">00</span>
                            <div class="w-5 bg-white my-1" style="height: 0.5px;"></div>
                                <span  class="text-xs uppercase tracking-wide">Sec</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection


@push('scripts')

{{-- end of landing page --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
           
            // Set your countdown target date and time
            const countdownDate = new Date("2025-09-16T23:59:59").getTime();

            const countdownFunction = setInterval(() => {
                const now = new Date().getTime();
                const distance = countdownDate - now;

                if (distance < 0) {
                    clearInterval(countdownFunction);
                    
                    // Reset desktop countdown
                    const daysElement = document.getElementById("days");
                    const hoursElement = document.getElementById("hours");
                    const minutesElement = document.getElementById("minutes");
                    const secondsElement = document.getElementById("seconds");
                    
                    // Reset mobile countdown
                    const daysMobileElement = document.getElementById("days-mobile");
                    const hoursMobileElement = document.getElementById("hours-mobile");
                    const minutesMobileElement = document.getElementById("minutes-mobile");
                    const secondsMobileElement = document.getElementById("seconds-mobile");
                    

                    
                    if (daysElement) daysElement.innerHTML = "00 :";
                    if (hoursElement) hoursElement.innerHTML = "00 :";
                    if (minutesElement) minutesElement.innerHTML = "00 :";
                    if (secondsElement) secondsElement.innerHTML = "00";
                    
                    if (daysMobileElement) daysMobileElement.innerHTML = "00 :";
                    if (hoursMobileElement) hoursMobileElement.innerHTML = "00 :";
                    if (minutesMobileElement) minutesMobileElement.innerHTML = "00 :";
                    if (secondsMobileElement) secondsMobileElement.innerHTML = "00";
                    

                    return;
                }

                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Update desktop countdown
                const daysElement = document.getElementById("days");
                const hoursElement = document.getElementById("hours");
                const minutesElement = document.getElementById("minutes");
                const secondsElement = document.getElementById("seconds");
                
                // Update mobile countdown
                const daysMobileElement = document.getElementById("days-mobile");
                const hoursMobileElement = document.getElementById("hours-mobile");
                const minutesMobileElement = document.getElementById("minutes-mobile");
                const secondsMobileElement = document.getElementById("seconds-mobile");
                

                
                const timeString = (time) => (time < 10 ? "0" + time : time);
                
                if (daysElement) daysElement.innerHTML = timeString(days) + " :";
                if (hoursElement) hoursElement.innerHTML = timeString(hours) + " :";
                if (minutesElement) minutesElement.innerHTML = timeString(minutes) + " :";
                if (secondsElement) secondsElement.innerHTML = timeString(seconds);
                
                if (daysMobileElement) daysMobileElement.innerHTML = timeString(days) + " :";
                if (hoursMobileElement) hoursMobileElement.innerHTML = timeString(hours) + " :";
                if (minutesMobileElement) minutesMobileElement.innerHTML = timeString(minutes) + " :";
                if (secondsMobileElement) secondsMobileElement.innerHTML = timeString(seconds);
                

            }, 1000); 
        });
    </script>

@endpush