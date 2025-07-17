@extends('layouts.front',['pageTitle' => 'Dpp | HomePage'])

@section('content')

<!-- LANDING PAGE -->

<!-- Landing Section -->
<section id="home"
    class="relative flex flex-col-reverse md:flex-row items-center md:items-stretch text-left"
    style="background-image: url('{{ asset('/assets/images/landimage.jpg') }}');
           background-size: cover;
           background-position: center;
           background-repeat: no-repeat;
           min-height: 100vh;">

    <!-- Gradient Overlay -->
    <div class="absolute inset-0 z-10" style="background: linear-gradient(to right, rgba(5, 116, 247, 0.7), rgba(230, 30, 43, 0.7));"></div>


    <!-- APM Image: Bottom on mobile, left on desktop -->
    <div class="w-full md:w-5/12 relative z-20 overflow-hidden flex-shrink-0">
        <img src="{{ asset('/assets/images/leaders/APM  1.png') }}" alt="Candidate"
            class="w-full h-full object-cover hover:scale-105 transform transition-transform duration-300 origin-right">
    </div>

    <!-- Carousel Section -->
    <div class="relative md:w-7/12 w-full overflow-hidden z-20 md:mr-20">
        <!-- Full-width relative wrapper for positioning buttons -->
        <div class="relative min-h-[80vh] md:h-[600px]">
            <!-- Slide 1 -->
            <div class="absolute inset-0 flex duration-700 ease-in-out" data-carousel-item>
                <div class="w-full flex items-center justify-center px-6 relative z-20 text-white">
                    <div class="max-w-2xl mx-auto text-center">
                        <h1 class="text-4xl md:text-6xl font-bold leading-tight">
                            Together, We Can Make a Change we want to see in the World
                        </h1>
                        <p class="mt-4 text-lg md:px-12">
                            At the heart of democracy lies the power of the people.
                            By contributing to our mission, you become an essential
                            part of driving positive change in Malawi.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="absolute inset-0 flex duration-700 ease-in-out opacity-0" data-carousel-item>
                <div class="w-full flex items-center justify-center px-6 relative z-20 text-white">
                    <div class="max-w-2xl mx-auto text-center h-full flex items-center">
                        <img src="{{ asset('/assets/images/image 2.png') }}" 
                             alt="Join Us Visual"
                             class="max-h-full max-w-full object-contain">
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="absolute inset-0 flex duration-700 ease-in-out opacity-0" data-carousel-item>
                <div class="w-full flex items-center justify-center px-6 relative z-20 text-white">
                    <div class="max-w-2xl mx-auto text-center">
                        <h1 class="text-4xl md:text-6xl font-bold leading-tight">
                            The Return to proven Leadership
                        </h1>
                        <p class="mt-4 text-lg md:px-12">
                            From grassroots initiatives to national campaigns, your contribution fuels
                            real change.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons: pushed away from text -->
            <button type="button" class="absolute top-1/2 -translate-y-1/2 left-6 md:left-10 z-30 flex items-center justify-center w-14 h-10 bg-white/30 rounded-full hover:bg-white/50 transition-all" data-carousel-prev>
                ❮
            </button>
            <button type="button" class="absolute top-1/2 -translate-y-1/2 right-6 md:right-10 z-30 flex items-center justify-center w-14 h-10 bg-white/30 rounded-full hover:bg-white/50 transition-all" data-carousel-next>
                ❯
            </button>

            <!-- Dots Navigation -->
            <div class="absolute bottom-8 left-1/2 z-30 flex -translate-x-1/2 space-x-2">
                <button type="button" class="w-3 h-3 rounded-full bg-white" data-carousel-dot data-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-white/50" data-carousel-dot data-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-white/50" data-carousel-dot data-slide-to="2"></button>
            </div>
        </div>
    </div>

    <!-- Custom Styles -->
    <style>
        [data-carousel-item] {
            transition: opacity 0.7s ease-in-out;
        }

        .max-w-2xl {
            margin-left: auto;
            margin-right: auto;
            padding: 0 1rem;
        }
    </style>
</section>


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



    <!-- END LANDING PAGE -->

    <!-- ABOUT SECTION -->

    <div class="main-content">
        <section id="about-section" class="w-full flex items-start py-5 px-10 bg-[var(--custom-white)]">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 w-auto h-auto">
              <!-- Image Section -->
                <div class="relative flex justify-center overflow-hidden max-w-[700px] w-full mx-auto">
                    <img src="{{ asset('assets/images/peter-1.jpeg') }}" alt="Candidate"
                        class="max-w-full w-auto h-auto object-contain rounded-lg transition-transform duration-1000 ease-out">

                    <!-- Overlay -->
                    <div class="absolute bottom-0 w-full h-1/4 bg-[var(--custom-orange)] rounded-b-lg flex items-center justify-center px-4">
                        <p class="text-[var(--custom-white)] text-lg font-semibold text-center">
                            "Change begins with <span class="font-bold">YOU</span>. Together, we rise!"
                        </p>
                    </div>
                </div>


                            <!-- Goals Section -->
                <div class="text-left">
                  <h3 class="text-xl font-semibold text-[var(--theme-color)] mt-6 py-4">
                        Key Agenda:
                    </h3>
                    <div style="
                        display: inline-block;
                        padding: 0.3rem 1rem;
                        background: linear-gradient(to right, #0574F7, #E61E2B);
                        border-radius: 30px;
                        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
                    ">
                        <h3 style="
                            font-size: 1.0rem;
                            font-weight: 600;
                            color: white;
                            margin: 0;
                        ">
                            Our Pillars for Developement
                        </h3>
                    </div>
                    
                  
                    <ul class="mt-6 space-y-4 text-sm text-[var(--custom-black)]">
                        <li class="flex items-center" id="agenda-goal-1">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-[#0574F7] font-bold mr-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Agricultural Productivity and Commercialization
                        </li>
                        <li class="flex items-center" id="agenda-goal-2">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-[#0574F7] font-bold mr-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            industrialization
                        </li>
                        <li class="flex items-center" id="agenda-goal-3">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-[#0574F7] font-bold mr-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Uburnisation
                        </li>
                        <li class="flex items-center" id="agenda-goal-4">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-[#0574F7] font-bold mr-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Decentralisation
                        </li>
                     
                    </ul>

                    <hr class="my-6 border-t border-gray-300">

                    {{-- ENABLERS --}}

                        <div style="
                        display: inline-block;
                        padding: 0.3rem 1rem;
                        background: linear-gradient(to right, #0574F7, #E61E2B);
                        border-radius: 30px;
                        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
                    ">
                        <h3 style="
                            font-size: 1.0rem;
                            font-weight: 600;
                            color: white;
                            margin: 0;
                        ">
                            Enablers
                        </h3>
                    </div>
                    
                  
                    <ul class="mt-6 space-y-4 text-sm text-[var(--custom-black)]">
                        <li class="flex items-center" id="agenda-goal-1">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-[#0574F7] font-bold mr-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Mindset Change
                        </li>
                        <li class="flex items-center" id="agenda-goal-2">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-[#0574F7] font-bold mr-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Rule of Law, Governance and Corruption
                        </li>
                        <li class="flex items-center" id="agenda-goal-3">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-[#0574F7] font-bold mr-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Public Service Perfomance
                        </li>
                        <li class="flex items-center" id="agenda-goal-4">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-[#0574F7] font-bold mr-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        Private Sectors, Industry and Trade
                        </li>

                          <li class="flex items-center" id="agenda-goal-4">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-[#0574F7] font-bold mr-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                       Human Capital Development
                        </li>

                          <li class="flex items-center" id="agenda-goal-4">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-[#0574F7] font-bold mr-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                       Disadvantaged Persons, Elderly and People with special needs
                        </li>

                        <li class="flex items-center" id="agenda-goal-4">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-[#0574F7] font-bold mr-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        Environmental Sustainability and Disaster Risk
                        </li>

                        <li class="flex items-center" id="agenda-goal-4">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-[#0574F7] font-bold mr-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Non-State Actors:Media, Civil Society & Religious Organisations
                        </li>

                      <li class="flex items-center" id="agenda-goal-4">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-[#0574F7] font-bold mr-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                       Creative Arts
                        </li>
                     
                    </ul>


                </div>
                
            </div>
        </section>
    </div>

    <style>
        .dpp_blue{
            color: #197EC2;
        }
        .dpp_background{
            background-color: #197EC2;
        }
        .button_styling {
        background: linear-gradient(to right, rgba(5, 116, 247, 1), rgba(230, 30, 43, 1));
        }
        .button_styling_reverse {
        background: linear-gradient(to left, rgba(5, 116, 247, 1), rgba(230, 30, 43, 1));
        }
    </style>

    <div 
        style="background: linear-gradient(to  right, rgba(5, 116, 247, 0.7), rgba(230, 30, 43, 0.7)), url(assets/images/become_a_member.png);"
        
    >
        <div class=" py-16 md:py-30">
            <h1 class="text-center font-extralight text-white text-3xl md:text-5xl mb-8">Become a member</h1>
            <h1 class="text-center font-bold text-white text-4xl md:text-3xl">Our party is powered by contributions from supporters</h1>
            <br/>
            <div class="flex my-14 items-center justify-center">
                <hr class="w-1/2"/>
            </div>
            <br/>
            <div class="grid grid-cols-1 md:grid-cols-4">
                <div class="flex items-center justify-center md:mb-0 mb-10"><img class="w-1/2 md:w-2/3" src="assets/images/bm_1.png" /></div>
                <div class="flex items-center justify-center  md:mb-0 mb-10"><img class="w-1/2 md:w-2/3" src="assets/images/bm_2.png" /></div>
                <div class="flex items-center justify-center  md:mb-0 mb-10"><img class="w-1/2 md:w-2/3" src="assets/images/bm_3.png" /></div>
                <div class="flex items-center justify-center  md:mb-0 mb-10"><img class="w-1/2 md:w-2/3" src="assets/images/bm_4.png" /></div>
            </div>
        </div>
    </div>


    <!-- BECOME A VOLUNTEER -->
    <!--section class="volunteer-section">
        <div class="overlay"></div>
        <div class="content">
            <h2 class="slide-in text-[var(--theme-color)] font-bold"> Become a Member</h2>
            <p class="slide-in highlighted-text">Our party is powered by contributions <span
                    class="text-[var(--theme-color)]">from supporters.</span></p>

            <div class="stats flex flex-col md:flex-row justify-center items-center gap-8 max-w-4xl mx-auto">
                
                <div class="stat-item relative border border-gray-300 rounded-md pt-6 pb-3 w-52 text-center mx-auto">

                    <div class="absolute -top-6 inset-x-0 mx-auto w-12 h-12 rounded-full bg-[#E61E2B] border border-[#E61E2B] shadow-md flex items-center justify-center">

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>

                    <div class="px-2">
                        <h3 class="text-lg font-bold mt-2"><span class="counter" data-target="222">0</span>+</h3>
                        <p class="text-white text-xs">Number of Shadow Mps</p>
                    </div>
                </div>

                         <div class="stat-item relative border border-gray-300 rounded-md pt-6 pb-3 w-52 text-center mx-auto">

                    <div class="absolute -top-6 inset-x-0 mx-auto w-12 h-12 rounded-full bg-[#E61E2B] border border-[#E61E2B] shadow-md flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>

                    <div class="px-2">
                        <h3 class="text-lg font-bold mt-2"><span class="counter" data-target="2500">0</span>+</h3>
                        <p class="text-white text-xs">Number of Women Candidate</p>
                    </div>
                </div>


                         <div class="stat-item relative border border-gray-300 rounded-md pt-6 pb-3 w-52 text-center mx-auto">

                    <div class="absolute -top-6 inset-x-0 mx-auto w-12 h-12 rounded-full bg-[#E61E2B] border border-[#E61E2B] shadow-md flex items-center justify-center">

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>

                    <div class="px-2">
                        <h3 class="text-lg font-bold mt-2"><span class="counter" data-target="2500">0</span>+</h3>
                        <p class="text-white text-xs">Number of Youths</p>
                    </div>
                </div>

                    <div class="stat-item relative border border-gray-300 rounded-md pt-6 pb-3 w-52 text-center mx-auto">

                        <div class="absolute -top-6 inset-x-0 mx-auto w-12 h-12 rounded-full bg-[#E61E2B] border border-[#E61E2B] shadow-md flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>

                        <div class="px-2">
                            <h3 class="text-lg font-bold mt-2"><span class="counter" data-target="2500">0</span>+</h3>
                            <p class="text-white text-xs">Number of Projects Done</p>
                        </div>
                    </div>


            </div>
        </div>
    </section-->


    <div class="dpp_background"  >
        <div class="pt-10 pb-20 ">
            <!--h1 class="text-center font-extralight text-white text-4xl md:text-3xl mb-8">Focus Areas</h1-->
            <h1 class="text-center font-bold text-white text-4xl md:text-4xl">How We Plan to Achieve a Better Country</h1>
            <div class="grid grid-cols-1 md:grid-cols-3 mt-8 gaps-4 gap-4 p-4">
                <div class="bg-white m-8 md:m-12 rounded-2xl">
                    <div class="grid grid-cols-5">
                        <div class="col-span-2">
                            <img class="p-2" src="assets/images/healthcare.png" />
                        </div>
                        <div class="col-span-3 pt-10 md:pt-10 px-7">
                            <h1 class="font-bold text-2xl dpp_blue">Healthcare</h1>
                            <h4>Ensuring accessible and quality healthcare for all.</h4>
                        </div>
                    </div>
                </div>
                <div class="bg-white m-8 md:m-12 rounded-2xl">
                    <div class="grid grid-cols-5">
                        <div class="col-span-2">
                            <img class="p-2" src="assets/images/education.png" />
                        </div>
                        <div class="col-span-3 pt-10 md:pt-10 px-7">
                            <h1 class="font-bold text-2xl dpp_blue">Education</h1>
                            <h4>Widening access to education for all, with special emphasis on girls and people with disabilities</h4>
                        </div>
                    </div>
                </div>
                <div class="bg-white m-8 md:m-12 rounded-2xl">
                    <div class="grid grid-cols-5">
                        <div class="col-span-2">
                            <img class="p-2" src="assets/images/agriculture.png" />
                        </div>
                        <div class="col-span-3 pt-10 md:pt-10 px-7">
                            <h1 class="font-bold text-2xl dpp_blue">Agriculture</h1>
                            <h4>Ensuring accessible and quality healthcare for all.</h4>
                        </div>
                    </div>
                </div>
                <div class="bg-white mx-8 mb-10 md:mb-0 md:mx-12 rounded-2xl">
                    <div class="grid grid-cols-5">
                        <div class="col-span-2">
                            <img class="p-2" src="assets/images/tourism.png" />
                        </div>
                        <div class="col-span-3 pt-8 md:pt-10 px-7">
                            <h1 class="font-bold text-2xl dpp_blue">Tourism</h1>
                            <h4>Making sure that Malawi produces enough food for her citizens and the region at large</h4>
                        </div>
                    </div>
                </div>
                <div class="bg-white mx-8 mb-10 md:mb-0 md:mx-12 rounded-2xl">
                    <div class="grid grid-cols-5">
                        <div class="col-span-2">
                            <img class="p-2" src="assets/images/economy.png" />
                        </div>
                        <div class="col-span-3 pt-10 md:pt-10 px-7">
                            <h1 class="font-bold text-2xl dpp_blue">Economy</h1>
                            <h4>Building a strong economy that supports robust social development and promote entrepreneurial activities</h4>
                        </div>
                    </div>
                </div>
                <div class="bg-white mx-8 mb-0 md:mb-0 md:mx-12 rounded-2xl">
                    <div class="grid grid-cols-5">
                        <div class="col-span-2">
                            <img class="p-2" src="assets/images/healthcare.png" />
                        </div>
                        <div class="col-span-3 pt-10 md:pt-10 px-7">
                            <h1 class="font-bold text-2xl dpp_blue">ICT and AI</h1>
                            <h4>Ensuring accessible and quality healthcare for all.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    
    {{-- FOCUS AREAS  --}}
<section class="focus-areas relative py-5 bg-white text-white text-center">
    <h2 class="text-4xl font-bold mt-2 " style='color: #197EC2' >Focus Area</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 mt-8 gaps-4 gap-4 p-4">
     
    
        <div class="dpp_background m-8 md:m-8 rounded-2xl">
            <div class="grid grid-cols-5">
                <div class="col-span-2 m-4 bg-white rounded-2xl">
                    <img class="p-6" src="assets/images/food_security_2.png" />
                </div>
                <div class="col-span-3 pt-8 pl-4 pr-6 md:pt-8 pr-8 px-7">
                    <h1 class="font-bold text-base md:text-xl text-white text-left">Food Security</h1>
                    <h4 class="text-left md:text-xs text-sm ">We prioritize local food production, aiming to end hunger through sustainable farming, maize support, and national food reserves.</h4>
                </div>
            </div>
        </div>

        <div class="dpp_background m-8 md:m-8 rounded-2xl">
            <div class="grid grid-cols-5">
                <div class="col-span-2 m-4 bg-white rounded-2xl">
                    <img class="p-6" src="assets/images/ecomonic.png" />
                </div>
                <div class="col-span-3 pt-8 pl-4 pr-6 md:pt-8 pr-8 px-7">
                    <h1 class="font-bold text-xl text-white text-left">Economic Growth</h1>
                    <h4 class="text-left md:text-xs text-sm ">Discussed under vision, mission, and aims. Focuses on job creation, macroeconomic growth, industrialization, export production, and reducing poverty</h4>
                </div>
            </div>
        </div>

        <div class="dpp_background m-8 md:m-8 rounded-2xl">
            <div class="grid grid-cols-5">
                <div class="col-span-2 m-4 bg-white rounded-2xl">
                    <img class="p-6" src="assets/images/infrastructure.png" />
                </div>
                <div class="col-span-3 pt-8 pl-4 pr-8 md:pt-8 px-7">
                    <h1 class="font-bold text-xl text-white text-left">Infrastructure Development</h1>
                    <h4 class="text-left md:text-xs text-sm">We prioritize local food production, aiming to end hunger through sustainable farming, maize support, and national food reserves.</h4>
                </div>
            </div>
        </div>
      
        
        <div class="dpp_background m-8 md:m-8 rounded-2xl">
            <div class="grid grid-cols-5">
                <div class="col-span-2 m-4 bg-white rounded-2xl">
                    <img class="p-6" src="assets/images/unity.png" />
                </div>
                <div class="col-span-3 pt-8 pl-4 pr-8 md:pt-8 px-7">
                    <h1 class="font-bold text-xl text-white text-left">Unity and Peace</h1>
                    <h4 class="text-left md:text-xs text-sm">We believe progress begins with unity. Across tribes, beliefs, and regions — we stand together in peace to shape a stable, inclusive, and forward-moving Malawi.</h4>
                </div>
            </div>
        </div>

        
        <div class="dpp_background m-8 md:m-8 rounded-2xl">
            <div class="grid grid-cols-5">
                <div class="col-span-2 m-4 bg-white rounded-2xl">
                    <img class="p-6" src="assets/images/law.png" />
                </div>
                <div class="col-span-3 pt-8 pl-4 pr-8 md:pt-8 px-7">
                    <h1 class="font-bold text-xl text-white text-left">Human Rights & Law</h1>
                    <h4 class="text-left md:text-xs text-sm">Justice and dignity for every citizen. We uphold freedoms, protect the vulnerable, and enforce the rule of law so that every Malawian lives with respect and fairness.</h4>
                </div>
            </div>
        </div>


      
    </div>
</section>


    {{-- <!-- DPP Leaders -->
    <section class="py-10 bg-gray text-center">
        <p class="text-lg text-[var(--theme-color)] mt-2">Meet Our Leaders</p>

        <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-6 md:px-10 max-w-7xl mx-auto">
            @foreach ($leaders as $leader)
                <div class="relative bg-white rounded-lg shadow-md hover:shadow-xl overflow-hidden">
                    <div class="w-full aspect-[3/4] overflow-hidden relative">
                        <img src="{{ asset('storage/' . $leader->path) }}" alt="{{ $leader->title }}"
                            class="absolute inset-0 w-full h-full object-cover">
                    </div>
                    <div class="absolute bottom-0 bg-[var(--custom-orange)] text-white w-full py-4 px-6">
                        <h3 class="text-xl font-semibold">{{ $leader->title }}</h3>
                        <p class="text-sm">{{ $leader->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section> --}}

    {{-- music section
    <section class="py-5 bg-white px-10">
        <div class="py-4 flex flex-col items-center justify-center text-center h-full">
            <h2 class="text-md text-[var(--theme-color)] font-bold" id="music-title">DPP Music Vibes</h2>
            <p class="text-lg text-[var(--custom-black)] mt-2" id="music-subtitle">
                Feel the rhythm, enjoy the beats, and celebrate with the
                <span class="text-[var(--theme-color)]">best</span> tunes!
            </p>
        </div>

        <div class="max-w-7xl mx-auto flex flex-col md:flex-row gap-6">
            <!-- Left: Background Image -->
            <div class="relative w-full md:w-1/2 h-[400px] rounded-lg overflow-hidden">
                <img src="{{ asset('assets/images/music/charming-amazing-afro-american-young-woman-sunglasses-dancing.jpg') }}"
                    alt="Person Listening to Music" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                    <h2 class="text-4xl font-bold text-white">Feel the Vibes</h2>
                </div>
            </div>

            <!-- Right: Music Player -->
            <div class="w-full md:w-1/2 h-[400px] overflow-y-auto bg-gray-100 rounded-lg p-6 shadow-lg">
                @forelse ($music as $track)
                    <div class="mb-6 border-b border-gray-300 pb-4">
                        <h3 class="text-lg font-semibold text-[var(--theme-color)]">{{ $track->title }}</h3>
                        <p class="text-sm  mb-2">
                            By <span class="font-medium text-[var(--theme-color)]">{{ $track->artist }}</span>
                            — <span class="italic">{{ $track->category }}</span>
                        </p>
                        <audio controls class="w-full rounded text-blue-600 accent-blue-600">
                            <source src="{{ asset('storage/' . $track->file) }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                @empty
                    <p class="text-blue-500">No music tracks available.</p>
                @endforelse
            </div>
        </div>
    </section>
    
    <!-- END MUSIC SECTION --> --}}



    {{-- PREVIOUS PROJECTS --}}
    <div class="w-full" id="history-container"></div>

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