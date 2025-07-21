{{-- @extends('layouts.front', ['pageTitle' => 'DPP | Contacts'])

@section('content')



    <!-- Contact Information Section -->
    <div class="flex justify-center items-center mt-6 bg-[var(--custom-white)]  rounded-2xl w-full max-w-2xl mx-auto">

    </div>


    <!-- Google Map Embed -->
    <!-- Map Section with Information Cards -->
    <div class="w-full px-4 py-10 max-w-7xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-8">
            <p class="text-md text-[var(--theme-color)] font-medium">Our Location</p>
            <h2 class="text-3xl font-bold mt-2 text-gray-600">Visit the <span class="text-[var(--theme-color)]">DPP
                    Headquarters</span></h2>
            <p class="text-gray-600 mt-3 max-w-2xl mx-auto">
                Our headquarters is conveniently located in New Naperi, Blantyre, serving as the central hub for all party
                activities and member engagement.
            </p>
        </div>

        <!-- Map and Information Cards Section -->
        <div class="flex flex-col lg:flex-row gap-6">
            <!-- Map Container -->
            <div class="w-full lg:w-2/3 rounded-xl overflow-hidden map-container">
             

                <iframe 
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7138.838845996219!2d35.014456651067505!3d-15.809720601358386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smw!4v1750773124423!5m2!1sen!2smw" 
                width="100%" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <!-- Information Cards -->
            <div class="w-full lg:w-1/3 flex flex-col gap-4">
                <!-- Address Card -->
                <div class="bg-white p-6 rounded-xl shadow-md location-card">
                    <div class="flex items-start">
                        <div class="bg-[var(--theme-color)] rounded-full p-3 mr-4">
                            <i class="fas fa-map-marker-alt text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg text-gray-700">Physical Address</h3>
                            <p class="text-gray-600 mt-1">DPP Secretariat</p>
                            <p class="text-gray-600">New Naperi</p>
                            <p class="text-gray-600">Blantyre, Malawi</p>
                            <p class="text-gray-600">P.O.BOX 1618, Blantyre</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Card -->
                <div class="bg-white p-6 rounded-xl shadow-md location-card">
                    <div class="flex items-start">
                        <div class="bg-[var(--theme-color)] rounded-full p-3 mr-4">
                            <i class="fas fa-phone-alt text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg text-gray-700">Contact Information</h3>
                            <p class="text-gray-600 mt-1">Phone: +265 992 759 667 / 999 492 653</p>
                            <p class="text-gray-600">Email: dppsecretariate@gmail.com</p>


                            <div class="flex justify-center space-x-7 mt-2">
                                <a href="https://www.facebook.com" target="_blank"
                                    class="text-2xl sm:text-xl md:text-2xl lg:text-2xl text-[var(--theme-color)] hover:text-[var(--hover-theme-color)] transition duration-300">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://www.twitter.com" target="_blank"
                                    class="text-2xl sm:text-xl md:text-2xl lg:text-2xl text-[var(--theme-color)] hover:text-[var(--hover-theme-color)] transition duration-300">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://www.instagram.com" target="_blank"
                                    class="text-2xl sm:text-xl md:text-2xl lg:text-2xl text-[var(--theme-color)] hover:text-[var(--hover-theme-color)] transition duration-300">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Hours Card -->
                <div class="bg-white p-6 rounded-xl shadow-md location-card">
                    <div class="flex items-start">
                        <div class="bg-[var(--theme-color)] rounded-full p-3 mr-4">
                            <i class="fas fa-clock text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg text-gray-700">Opening Hours</h3>
                            <p class="text-gray-600 mt-1">Monday - Friday: 8:00 AM - 5:00 PM</p>
                            <p class="text-gray-600">Saturday: 9:00 AM - 12:00 PM</p>
                            <p class="text-gray-600">Sunday: Closed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Directions Section -->
        <div class="mt-8 bg-white p-6 rounded-xl shadow-md">
            <h3 class="font-bold text-xl text-gray-700 mb-3">How to Reach Us</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="flex items-start">
                    <div class="text-[var(--theme-color)] mr-3">
                        <i class="fas fa-car text-2xl"></i>
                    </div>
                    <div>
                        <h4 class="font-medium text-gray-700">By Car</h4>
                        <p class="text-gray-600 text-sm">Located just off Presidential Way. Visitor parking available on
                            premises.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="text-[var(--theme-color)] mr-3">
                        <i class="fas fa-bus text-2xl"></i>
                    </div>
                    <div>
                        <h4 class="font-medium text-gray-700">By Public Transport</h4>
                        <p class="text-gray-600 text-sm">Take bus routes 15 or 22 to Area 4 central stop, then a
                            5-minute walk.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="text-[var(--theme-color)] mr-3">
                        <i class="fas fa-walking text-2xl"></i>
                    </div>
                    <div>
                        <h4 class="font-medium text-gray-700">Walking Distance</h4>
                        <p class="text-gray-600 text-sm">15-minute walk from Lilongwe Central Market and main city
                            center.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


 @endsection

 --}}


@extends('layouts.front', ['pageTitle' => 'Dpp | Contacts'])

@section('content')

    <!-- Contact Information Section -->
    <div class="flex justify-center items-center mt-6 bg-[var(--custom-white)]  rounded-2xl w-full max-w-2xl mx-auto">

    </div>


    <!-- Google Map Embed -->
    <!-- Map Section with Information Cards -->
    <div class="w-full px-4 py-10 max-w-7xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-8">
            <p class="text-md text-[var(--theme-color)] font-medium">Our Location</p>
            <h2 class="text-3xl font-bold mt-2 text-gray-600">Visit the <span class="text-[var(--theme-color)]">DPP
                    Headquarters</span></h2>
            <p class="text-gray-600 mt-3 max-w-2xl mx-auto">
                Our headquarters is conveniently located in New Naperi, Blantyre, serving as the central hub for all party
                activities and member engagement.
            </p>
        </div>

        <!-- Map and Information Cards Section -->
        <div class="flex flex-col lg:flex-row gap-6">
            <!-- Map Container -->
            <div class="w-full lg:w-2/3 rounded-xl overflow-hidden map-container">
             

                <iframe 
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7138.838845996219!2d35.014456651067505!3d-15.809720601358386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smw!4v1750773124423!5m2!1sen!2smw" 
                width="100%" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <!-- Information Cards -->
            <div class="w-full lg:w-1/3 flex flex-col gap-4">
                <!-- Address Card -->
                <div class="bg-white p-6 rounded-xl shadow-md location-card">
                    <div class="flex items-start">
                        <div class="bg-[var(--theme-color)] rounded-full p-3 mr-4">
                            <i class="fas fa-map-marker-alt text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg text-gray-700">Physical Address</h3>
                            <p class="text-gray-600 mt-1">DPP Secretariat</p>
                            <p class="text-gray-600">New Naperi</p>
                            <p class="text-gray-600">Blantyre, Malawi</p>
                            <p class="text-gray-600">P.O.BOX 1618, Blantyre</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Card -->
                <div class="bg-white p-6 rounded-xl shadow-md location-card">
                    <div class="flex items-start">
                        <div class="bg-[var(--theme-color)] rounded-full p-3 mr-4">
                            <i class="fas fa-phone-alt text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg text-gray-700">Contact Information</h3>
                            <p class="text-gray-600 mt-1">Phone: +265 992 759 667 / 999 492 653</p>
                            <p class="text-gray-600">Email: dppsecretariate@gmail.com</p>


                            <div class="flex justify-center space-x-7 mt-2">
                                <a href="https://www.facebook.com" target="_blank"+
                                    class="text-2xl sm:text-xl md:text-2xl lg:text-2xl text-[var(--theme-color)] hover:text-[var(--hover-theme-color)] transition duration-300">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://www.twitter.com" target="_blank"
                                    class="text-2xl sm:text-xl md:text-2xl lg:text-2xl text-[var(--theme-color)] hover:text-[var(--hover-theme-color)] transition duration-300">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://www.instagram.com" target="_blank"
                                    class="text-2xl sm:text-xl md:text-2xl lg:text-2xl text-[var(--theme-color)] hover:text-[var(--hover-theme-color)] transition duration-300">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Hours Card -->
                <div class="bg-white p-6 rounded-xl shadow-md location-card">
                    <div class="flex items-start">
                        <div class="bg-[var(--theme-color)] rounded-full p-3 mr-4">
                            <i class="fas fa-clock text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg text-gray-700">Opening Hours</h3>
                            <p class="text-gray-600 mt-1">Monday - Friday: 8:00 AM - 5:00 PM</p>
                            <p class="text-gray-600">Saturday: 9:00 AM - 12:00 PM</p>
                            <p class="text-gray-600">Sunday: Closed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Directions Section -->
        <div class="mt-8 bg-white p-6 rounded-xl shadow-md">
            <h3 class="font-bold text-xl text-gray-700 mb-3">How to Reach Us</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="flex items-start">
                    <div class="text-[var(--theme-color)] mr-3">
                        <i class="fas fa-car text-2xl"></i>
                    </div>
                    <div>
                        <h4 class="font-medium text-gray-700">By Car</h4>
                        <p class="text-gray-600 text-sm">Located just off Presidential Way. Visitor parking available on
                            premises.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="text-[var(--theme-color)] mr-3">
                        <i class="fas fa-bus text-2xl"></i>
                    </div>
                    <div>
                        <h4 class="font-medium text-gray-700">By Public Transport</h4>
                        <p class="text-gray-600 text-sm">Take bus routes 15 or 22 to Area 4 central stop, then a
                            5-minute walk.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="text-[var(--theme-color)] mr-3">
                        <i class="fas fa-walking text-2xl"></i>
                    </div>
                    <div>
                        <h4 class="font-medium text-gray-700">Walking Distance</h4>
                        <p class="text-gray-600 text-sm">15-minute walk from Lilongwe Central Market and main city
                            center.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- 
    <!-- Contact Form Section - UI Only -->
    <div class="w-full px-4 py-16 max-w-7xl mx-auto bg-gray-50">
        <div class="text-center mb-12">
            <p class="text-md text-[var(--theme-color)] font-medium">Have Questions?</p>
            <h2 class="text-3xl font-bold mt-2 text-gray-600">Contact <span class="text-[var(--theme-color)]">Us</span></h2>
            <p class="text-gray-600 mt-3 max-w-2xl mx-auto">
                Fill out the form below and we'll get back to you as soon as possible.
            </p>
        </div>

        <div class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow-md">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="name" class="block text-gray-700 font-medium mb-2">Full Name</label>
                    <input type="text" id="name" name="name"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[var(--theme-color)] focus:border-transparent"
                        placeholder="Your name">
                </div>
                <div>
                    <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
                    <input type="email" id="email" name="email"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[var(--theme-color)] focus:border-transparent"
                        placeholder="Your email">
                </div>
            </div>
            <div class="mt-6">
                <label for="subject" class="block text-gray-700 font-medium mb-2">Subject</label>
                <input type="text" id="subject" name="subject"
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[var(--theme-color)] focus:border-transparent"
                    placeholder="Subject of your message">
            </div>
            <div class="mt-6">
                <label for="message" class="block text-gray-700 font-medium mb-2">Your Message</label>
                <textarea id="message" name="message" rows="5"
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[var(--theme-color)] focus:border-transparent"
                    placeholder="Type your message here"></textarea>
            </div>
            <div class="mt-8">
                <button type="button"
                    class="w-full bg-[var(--theme-color)] hover:bg-[var(--hover-theme-color)] text-white font-bold py-3 px-4 rounded-lg transition duration-300">
                    Send Message
                </button>
            </div>
        </div>
    </div> --}}




<form id="contactForm" action="https://formsubmit.co/priscakaliati74@gmail.com" method="POST" class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow-md">
    <!-- Remove _next since we'll handle submission manually -->
    <input type="hidden" name="_captcha" value="false">
    <input type="hidden" name="_subject" value="New Contact Form Submission">
    <input type="hidden" name="_template" value="table">

    <!-- Your existing form fields -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- ... (keep all your fields) ... -->
    </div>

    <div class="mt-8">
        <button type="submit" class="w-full bg-[var(--theme-color)] hover:bg-[var(--hover-theme-color)] text-white font-bold py-3 px-4 rounded-lg transition duration-300">
            Send Message
        </button>
    </div>
</form>

<!-- Popup Modal (hidden by default) -->
<div id="successPopup" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-sm mx-auto">
        <h3 class="text-xl font-bold text-green-600">Success!</h3>
        <p class="mt-2">Your message has been sent. We'll contact you soon.</p>
        <button onclick="closePopup()" class="mt-4 bg-[var(--theme-color)] text-white px-4 py-2 rounded-lg">
            Close
        </button>
    </div>
</div>

<script>
    const form = document.getElementById("contactForm");
    const popup = document.getElementById("successPopup");

    form.addEventListener("submit", async (e) => {
        e.preventDefault(); // Prevent default redirect
        
        try {
            const response = await fetch(form.action, {
                method: "POST",
                body: new FormData(form),
                headers: {
                    "Accept": "application/json"
                }
            });

            if (response.ok) {
                popup.classList.remove("hidden"); // Show popup
                form.reset(); // Clear form
            } else {
                alert("Error: Please try again.");
            }
        } catch (error) {
            alert("Error: " + error.message);
        }
    });

    function closePopup() {
        popup.classList.add("hidden");
    }
</script>

@endsection