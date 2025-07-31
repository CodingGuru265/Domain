<div>
      <div class="
        bg-[url(https://res.cloudinary.com/djcxl7oim/image/upload/v1753789394/urbanization_bglyk2.png)] h-[650px] bg-cover"
      >
        <div class="h-[650px] opacity-70 absolute w-full">
          <div class="grid lg:grid-cols-2 place-items-center mt-72">
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
      </div>

      <!-- Manifestos Content Starts Here -->
      <div class="grid place-items-center mt-[-120px] pb-30">
        <div class="lg:w-4xl lg:mx-auto p-5 font-sans">
          <!-- Tab Triggers -->
          <div class="lg:flex lg:gap-10 grid grid-cols-2 border-gray-300 mb-2">
            <div class="tab active px-5 py-2 text-base transition-all duration-300">
              <div class="space-y-2 bg-gray-200 p-4 rounded-md shadow grid place-items-center">
                <img
                  src="https://res.cloudinary.com/djcxl7oim/image/upload/v1753789388/tourism_n2n1lg.png"
                  class="size-8"
                >
                <p class="text-sm font-medium capitalize tracking-wide">
                  tourism
                </p>
                <button
                  onclick="openTab(event, 'tab1')"
                  class="text-sm font-normal bg-blue-500 px-4 py-1 rounded-sm text-white capitalize hover:cursor-pointer"
                >
                  read more
                </button>
              </div>
            </div>

            <div class="tab active px-5 py-2 text-base transition-all duration-300">
              <div class="space-y-2 bg-gray-200 p-4 rounded-md shadow grid place-items-center">
                <img
                  src="https://res.cloudinary.com/djcxl7oim/image/upload/v1753789387/cities_oidsyf.png"
                  class="size-8"
                >
                <p class="text-xs lg:text-sm font-medium capitalize tracking-wide text-center">
                  creation of <br> secondary cities
                </p>
                <button
                  onclick="openTab(event, 'tab2')"
                  class="text-sm font-normal bg-blue-500 px-4 py-1 rounded-sm text-white capitalize hover:cursor-pointer"
                >
                  read more
                </button>
              </div>
            </div>

            <div class="tab px-5 py-2 text-base transition-all duration-300">
              <div class="space-y-2 bg-gray-200 p-4 rounded-md shadow grid place-items-center">
                <img
                  src="https://res.cloudinary.com/djcxl7oim/image/upload/v1753789387/housing_psdtmq.png"
                  class="size-8"
                >
                <p class="text-xs lg:text-sm font-medium capitalize tracking-wide text-center">
                  land, housing & <br> water services
                </p>
                <button
                  onclick="openTab(event, 'tab3')"
                  class="text-sm font-normal bg-blue-500 px-4 py-1 rounded-sm text-white capitalize hover:cursor-pointer"
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
