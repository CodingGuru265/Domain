@extends('layouts.front', ['pageTitle' => 'DPP | Manifesto2025'])

@section('content')
<div>
      <!-- Hero Section -->
      <section class="py-16 md:py-24 text-white relative" style="background: url('/assets/images/leaders/APM  1.png')">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="container mx-auto px-4 max-w-6xl relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2">
                    <div class="text-center lg:text-left">
                        <span class="inline-block px-4 py-2 bg-red-600 text-white text-sm font-bold rounded-full mb-4">
                            Party Leader
                        </span>
                        <h1 class="text-4xl md:text-6xl font-bold mb-6">
                            Professor Arthur Peter
                            <span class="text-red-600">Mutharika</span>
                        </h1>
                        <p class="text-xl md:text-2xl text-blue-100 mb-8">
                            President of the Democratic Progressive Party (DPP)
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                            <span class="bg-white/20 text-white px-6 py-3 rounded-lg font-semibold">
                                5th President of Malawi
                            </span>
                            <span class="bg-yellow-500 text-blue-900 px-6 py-3 rounded-lg font-semibold">
                            <a href="{{route('apm')}}">Read More</a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <div class="relative">
                        <div class="absolute inset-0 bg-yellow-500 rounded-full transform rotate-6"></div>
                        <div class="relative bg-white p-2 rounded-full shadow-2xl">
                            <img src="{{ asset('assets/images/apm_21.png')}}" alt="Professor Arthur Peter Mutharika" 
                                 class="w-90 h-80 rounded-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <img
        src="https://res.cloudinary.com/djcxl7oim/image/upload/v1753789396/cornfield_geoufx.png"
        class="w-full h-[650px] object-cover"
      >
      <div class="h-[650px] opacity-70 absolute w-full hidden">
        <div class="grid lg:grid-cols-2 place-items-center mt-[-420px] bg-red-500">
          <div class="hidden lg:flex"></div>
          <p class="grid">
            <span class="text-4xl lg:text-7xl font-bold text-white capitalize">
              urbanization
            </span>
            <span class="font-normal text-xl text-white">
              Home/ 2025 Manifesto
            </span>
          </p>
        </div>
      </div>

      <style>
        .padding_lg{
          padding-left: 9rem;
          padding-right: 9rem;
        }
      </style>

      <!-- Manifestos Content Starts Here -->
      <div class="grid place-items-center mt-[-120px] pb-30">
        <div class="lg:w-4xl lg:mx-auto lg:p-4 xl:padding_lg font-sans">
          <!-- Tab Triggers -->
          <!--div class="grid grid-cols-2 lg:gap-10 lg:grid-cols-5 border-gray-300 mb-2"-->
          <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-4 gap-8 my-4  border-gray-300 mb-2">
            <div class="tab active px-5 py-2 text-base transition-all duration-300">
              <div class="space-y-2 bg-gray-200 p-4 shadow grid place-items-center">
                <div class=" flex items-center justify-center ">
                <img
                  src="https://res.cloudinary.com/djcxl7oim/image/upload/v1753789388/tourism_n2n1lg.png"
                  class="size-8 py-12"
                >
                </div>
                <p class="text-xs lg:text-sm font-medium capitalize tracking-wide text-center">
                  tourism
                </p>
                <div class='flex items-center justify-center'>
                  <button
                    onclick="openTab(event, 'tab1')"
                    class="text-sm font-semibold bg-blue-500 px-4 py-2 w-1/2 rounded-sm text-white capitalize hover:cursor-pointer"
                  >
                    read more
                  </button>
                </div>
              </div>
            </div>

            <div class="tab active px-5 py-2 text-base transition-all duration-300">
              <div class="space-y-2 bg-gray-200 p-4 rounded-md shadow grid place-items-center">
                <div class=" flex items-center justify-center ">
                <img
                  src="https://res.cloudinary.com/djcxl7oim/image/upload/v1753789387/cities_oidsyf.png"
                  class="size-8"
                >
                </div>
                <p class="text-xs lg:text-sm font-medium capitalize tracking-wide text-center">
                  creation of <br> secondary cities
                </p>
                <button
                  onclick="openTab(event, 'tab2')"
                  class="text-sm  bg-blue-500 px-4 py-2 font-semibold rounded-sm text-white capitalize hover:cursor-pointer"
                >
                  read more
                </button>
              </div>
            </div>

            <div class="tab px-5 py-1 text-base transition-all duration-300">
              <div class="space-y-2 bg-gray-200 p-4 rounded-md shadow grid place-items-center">
                <div class=" flex items-center justify-center ">
                  <img
                    src="https://res.cloudinary.com/djcxl7oim/image/upload/v1753789387/housing_psdtmq.png"
                    class="size-7"
                  >
                </div>
                <p class="text-xs lg:text-sm font-medium capitalize tracking-wide text-center">
                  land, housing & <br> water services
                </p>
                <button
                  onclick="openTab(event, 'tab3')"
                  class="text-sm font-semibold bg-blue-500 px-4 py-2 rounded-sm text-white capitalize hover:cursor-pointer"
                >
                  read more
                </button>
              </div>
            </div>
          </div>
          <!-- End Tab Triggers -->

          <!-- Tab 1 -->
          <div id="tab1" class="tab-content active p-5 border-gray-300 rounded">
            <h2 class="text-xl font-bold text-gray-800">Tourism</h2>
            <p class="text-gray-600">
              This is the content for Tab 1. You can add any HTML content here.
            </p>
          </div>
          <!-- Tab 2 -->
          <div id="tab2" class="tab-content hidden p-5 border-gray-300 rounded">
            <h2 class="text-xl font-bold text-gray-800">Smart Cities</h2>
            <p class="text-gray-600">
              This is the content for Tab 2. Customize it as needed!
            </p>
          </div>
          <!-- Tab 3 -->
          <div id="tab3" class="tab-content hidden p-5 border-gray-300 rounded">
            <h2 class="text-xl font-bold text-gray-800">Housing</h2>
            <p class="text-gray-600">
              This is the content for Tab 3. Add your own text or elements.
            </p>
          </div>
        </div>
        <h1 class="text-center text-xl lg:text-4xl text-blue-600 font-bold mb-[-30px] pt-4">
          Democratic Progressive Party Manifesto
        </h1>
      </div>
      <!-- Manifestos Content Ends Here -->
    </div>

<script>
  const openTab = (evt, tabName) => {
    const tabContents = document.getElementsByClassName("tab-content");
    for (let i = 0; i < tabContents.length; i++) {
      tabContents[i].classList.remove("active");
      tabContents[i].classList.add("hidden");
    }

    const tabs = document.getElementsByClassName("tab");
    for (let i = 0; i < tabs.length; i++) {
      tabs[i].classList.remove("active");
      tabs[i].classList.remove("font-bold", "border-b-2", "border-blue-500");
    }

    document.getElementById(tabName).classList.add("active");
    document.getElementById(tabName).classList.remove("hidden");
    evt.currentTarget.classList.add("active", "font-bold");
  }
</script>
@endsection
