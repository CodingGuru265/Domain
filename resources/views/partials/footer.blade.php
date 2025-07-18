<!-- FOOTER -->
<footer class="bg-[var(--nav-bg-color)] text-white pt-8" id="footer-container">
    
    <div class="max-w-8xl mx-auto px-6 lg:px-6">

        <!-- Top Footer Area with Logo and Content -->
        <!-- <div
            class="flex flex-col md:flex-row justify-between items-center mb-12 border-b border-opacity-20 border-white pb-8  border-b-2">
            <div class="mb-8 md:mb-0">
                <div class="flex items-center space-x-4">
                   
                    <h2 class="text-3xl font-bold text-white ">Democratic Progressive Party</h2>
                </div>
                <p class="text-gray-300 mt-4 max-w-md">
                    Committed to transforming Malawi through progressive governance, economic empowerment, and
                    social welfare.
                </p>
            </div>
           
        </div> -->

        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">
            <!-- Quick Links Section -->
       <div class="footer-section">
            <h3
                class="text-xl font-bold mb-6 text-white relative after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-1 after:bg-[var(--custom-orange)] after:-mb-2 hover:after:w-12 after:transition-all after:duration-500">
                Quick Links
            </h3>
            <ul class="space-y-4">
              <li>
                    <a href="https://www.facebook.com/share/1GBQjtjcai/?mibextid=wwXIfr" target="_blank"
                        class="text-white hover:text-[#E61E2B] transition-colors duration-200 flex items-center group">
                        <span
                            class="w-1.5 h-1.5 rounded-full bg-white mr-2 group-hover:w-2 group-hover:h-2 transition-all duration-200"></span>
                        Follow APM on Facebook
                    </a>
                </li>

                <li>
                    <a href="https://x.com/apmutharika?s=11&t=mKnaaGmJjy-sr-HCaBH0hQ" target="_blank"
                        class="text-white hover:text-[#E61E2B] transition-colors duration-200 flex items-center group">
                        <span
                            class="w-1.5 h-1.5 rounded-full bg-white mr-2 group-hover:w-2 group-hover:h-2 transition-all duration-200"></span>
                        Follow APM on Instagram
                    </a>
                </li>

                <li>
                    <a href="{{ url('donate') }}"
                        class="text-white hover:text-[#E61E2B] transition-colors duration-200 flex items-center group">
                        <span
                            class="w-1.5 h-1.5 rounded-full bg-white mr-2 group-hover:w-2 group-hover:h-2 transition-all duration-200"></span>
                        Make a Donation
                    </a>
                </li>
            </ul>
        </div>


            <!-- Contact Information Section -->
            <div class="footer-section">
                <h3
                    class="text-xl font-bold mb-6 text-white relative after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-1 after:bg-[var(--custom-orange)] after:-mb-2 hover:after:w-12 after:transition-all after:duration-500">
                    Contact Us</h3>
                <ul class="space-y-4">
                    <li class="flex items-start space-x-3">
                        <div
                            class="mt-1 w-6 h-6 flex items-center justify-center rounded-full bg-[#E61E2B]  hover:bg-opacity-100 transition-all duration-300">
                            <i class="fas fa-envelope text-white text-sm"></i>
                        </div>
                        <span class="text-white">admin@dpp.mw</span>
                    </li>
                    <!-- <li class="flex items-start space-x-3">
                        <div
                            class="mt-1 w-6 h-6 flex items-center justify-center rounded-full bg-[#E61E2B]  hover:bg-opacity-100 transition-all duration-300">
                            <i class="fas fa-phone-alt text-[var(--custom-white)] text-sm"></i>
                        </div>
                        <span class="text-white">+265-999-7890</span>
                    </li> -->
                    <li class="flex items-start space-x-3">
                        <div
                            class="mt-1 w-6 h-6 flex items-center justify-center rounded-full bg-[#E61E2B]  hover:bg-opacity-100 transition-all duration-300">
                            <i class="fas fa-map-marker-alt text-[var(--custom-white)] text-sm"></i>
                        </div>
                        <span class="text-white">Mandala Road, Blantyre, Malawi</span>
                    </li>
                </ul>
            </div>

            <!-- Social Media Links Section -->
            <div class="footer-section">
                <h3
                    class="text-xl font-bold mb-6 text-white relative after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-1 after:bg-[var(--custom-orange)] after:-mb-2 hover:after:w-12 after:transition-all after:duration-500">
                    Connect With Us</h3>
                <div class="flex flex-wrap gap-4">
                    <a href="https://facebook.com"
                        class="w-10 h-10 rounded-full bg-[#E61E2B] hover:bg-opacity-80 flex items-center justify-center transition-all duration-300 hover:scale-110 transform"
                        target="_blank">
                        <i class="fab fa-facebook-f text-white"></i>
                    </a>
                    <a href="https://twitter.com"
                        class="w-10 h-10 rounded-full bg-[#E61E2B] hover:bg-opacity-80 flex items-center justify-center transition-all duration-300 hover:scale-110 transform"
                        target="_blank">
                        <i class="fab fa-twitter text-white"></i>
                    </a>
                    <a href="https://instagram.com"
                        class="w-10 h-10 rounded-full bg-[#E61E2B] hover:bg-opacity-80 flex items-center justify-center transition-all duration-300 hover:scale-110 transform"
                        target="_blank">
                        <i class="fab fa-instagram text-white"></i>
                    </a>
                   
                </div>
                <p class="mt-6 text-white">Follow us on social media for updates on party activities, events, and
                    announcements.</p>
            </div>

            <!-- About Section -->

        </div>


        <!-- Footer Divider -->
        <div class="border-t border-white my-1"></div>

        <!-- Footer Bottom -->
        <div class="w-full flex justify-center">
            <div class="footer-copyright py-1 text-center">
                <p class="text-white">© 2025 Democratic Progressive Party. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

<style>
    /* Pulse animation for logo */
    @keyframes pulse {

        0%,
        100% {
            opacity: 1;
            transform: scale(1);
        }

        50% {
            opacity: 0.8;
            transform: scale(1.05);
        }
    }

    .logo-pulse {
        animation: pulse 2s ease-in-out infinite;
    }
</style>
