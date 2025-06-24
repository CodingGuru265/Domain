{{-- @extends('layouts.front', ['pageTitle' => 'Dpp | Donation'])
@section('content')
    <!-- Background Image Section with Overlay -->
    <div class="background-container-donate">
        <div class="overlay"></div> <!-- Gradient Overlay -->
        <div class="text-container">
            <div class="home-link">Donate</div>
            <a href="{{ route('welcome') }}" class="contact-text">home / Donate</a>
        </div>
    </div>

    <!-- Donate Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-8">Make a Donation</h2>
            <p class="text-center text-gray-600 max-w-2xl mx-auto mb-12">Your generous contribution helps us continue
                our mission. Every donation, no matter the size, makes a difference in our community.</p>



            <!-- Donation Container with Form and Image -->
            <div class="flex flex-col lg:flex-row rounded-xl overflow-hidden shadow-xl">
                <!-- Donation Form (70%) -->
                <div class="w-full lg:w-[70%] bg-gray-50 p-6 md:p-10">
                    <h3 class="text-2xl font-semibold mb-6">Donation Details</h3>

                    <!-- Donation Form -->
                    <form id="donationForm" class="space-y-6">
                        <!-- Donation Amount -->
                        <div class="space-y-2">
                            <label for="donationAmount" class="block text-sm font-medium text-gray-700">
                                Donation Amount <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <input type="text" id="donationAmount" name="donationAmount"
                                    placeholder="Enter donation amount"
                                    class="w-full rounded-md border-gray-300 shadow-sm focus:ring-[var(--theme-color)] focus:border-[var(--theme-color)]">
                            </div>
                        </div>


                        <!-- Donation Frequency -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Donation Frequency</label>
                            <div class="flex flex-wrap gap-4">
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio text-[var(--theme-color)]" name="frequency"
                                        value="once" checked>
                                    <span class="ml-2">One Time</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio text-[var(--theme-color)]" name="frequency"
                                        value="monthly">
                                    <span class="ml-2">Monthly</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio text-[var(--theme-color)]" name="frequency"
                                        value="quarterly">
                                    <span class="ml-2">Quarterly</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio text-[var(--theme-color)]" name="frequency"
                                        value="yearly">
                                    <span class="ml-2">Yearly</span>
                                </label>
                            </div>
                        </div>

                        <!-- Personal Information -->
                        <div class="space-y-4">
                            <h4 class="text-lg font-medium">Personal Information</h4>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <!-- Full Name -->
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-user text-gray-500"></i>
                                    </div>
                                    <input type="text" name="fullName" id="fullName" placeholder="Full Name" required
                                        class="pl-10 block w-full rounded-md border-gray-300 shadow-sm focus:ring-[var(--theme-color)] focus:border-[var(--theme-color)]">
                                </div>

                                <!-- Email -->
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-envelope text-gray-500"></i>
                                    </div>
                                    <input type="email" name="email" id="email" placeholder="Email Address" required
                                        class="pl-10 block w-full rounded-md border-gray-300 shadow-sm focus:ring-[var(--theme-color)] focus:border-[var(--theme-color)]">
                                </div>

                                <!-- Phone -->
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-phone text-gray-500"></i>
                                    </div>
                                    <input type="tel" name="phone" id="phone" placeholder="Phone Number"
                                        class="pl-10 block w-full rounded-md border-gray-300 shadow-sm focus:ring-[var(--theme-color)] focus:border-[var(--theme-color)]">
                                </div>

                                <!-- Country -->
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-globe text-gray-500"></i>
                                    </div>
                                    <select name="country" id="country"
                                        class="pl-10 block w-full rounded-md border-gray-300 shadow-sm focus:ring-[var(--theme-color)] focus:border-[var(--theme-color)]">
                                        <option value="" selected disabled>Select Country</option>
                                        <option value="usa">United States</option>
                                        <option value="canada">South Africa</option>
                                        <option value="uk">United Kingdom</option>
                                        <option value="malawi">Malawi</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Payment Information -->
                        <div class="space-y-4">
                            <h4 class="text-lg font-medium">Payment Information</h4>

                            <!-- Payment Methods Toggle -->
                            <div class="flex flex-wrap gap-4 mb-4">
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio text-[var(--theme-color)]" name="paymentMethod"
                                        value="card" checked>
                                    <span class="ml-2">Credit Card</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio text-[var(--theme-color)]" name="paymentMethod"
                                        value="paypal">
                                    <span class="ml-2">PayPal</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio text-[var(--theme-color)]" name="paymentMethod"
                                        value="bank">
                                    <span class="ml-2">Bank Transfer</span>
                                </label>
                            </div>

                            <!-- Credit Card Information (Default) -->
                            <div id="cardPaymentMethod" class="payment-method-section space-y-4">
                                <!-- Card Number -->
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-credit-card text-gray-500"></i>
                                    </div>
                                    <input type="text" name="cardNumber" id="cardNumber" placeholder="Card Number"
                                        class="pl-10 block w-full rounded-md border-gray-300 shadow-sm focus:ring-[var(--theme-color)] focus:border-[var(--theme-color)]">
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    <!-- Expiry Month -->
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fas fa-calendar text-gray-500"></i>
                                        </div>
                                        <select name="expiryMonth" id="expiryMonth"
                                            class="pl-10 block w-full rounded-md border-gray-300 shadow-sm focus:ring-[var(--theme-color)] focus:border-[var(--theme-color)]">
                                            <option value="" selected disabled>Month</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>

                                    <!-- Expiry Year -->
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fas fa-calendar text-gray-500"></i>
                                        </div>
                                        <select name="expiryYear" id="expiryYear"
                                            class="pl-10 block w-full rounded-md border-gray-300 shadow-sm focus:ring-[var(--theme-color)] focus:border-[var(--theme-color)]">
                                            <option value="" selected disabled>Year</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            <option value="2027">2027</option>
                                            <option value="2028">2028</option>
                                            <option value="2029">2029</option>
                                            <option value="2030">2030</option>
                                        </select>
                                    </div>

                                    <!-- CVV -->
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fas fa-lock text-gray-500"></i>
                                        </div>
                                        <input type="text" name="cvv" id="cvv" placeholder="CVV" maxlength="4"
                                            class="pl-10 block w-full rounded-md border-gray-300 shadow-sm focus:ring-[var(--theme-color)] focus:border-[var(--theme-color)]">
                                    </div>
                                </div>
                            </div>

                            <!-- PayPal Method (Hidden by default) -->
                            <div id="paypalPaymentMethod"
                                class="payment-method-section hidden text-center p-6 border border-gray-200 rounded-md">
                                <i class="fab fa-paypal text-blue-600 text-4xl mb-3"></i>
                                <p>You will be redirected to PayPal to complete your donation after submission.</p>
                            </div>

                            <!-- Bank Transfer Method (Hidden by default) -->
                            <div id="bankPaymentMethod"
                                class="payment-method-section hidden p-6 border border-gray-200 rounded-md">
                                <p class="mb-4">Please use the following bank details to make your donation:</p>

                                <!-- Bank Details Grid -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                    <!-- National Bank Details -->
                                    <div class="pb-4 border-b border-gray-300 md:border-b-0">
                                        <p class="font-semibold">Bank Name:</p>
                                        <p>National Bank</p>
                                        <p class="font-semibold mt-2">Account Name:</p>
                                        <p>Organization Name</p>
                                        <p class="font-semibold mt-2">Account Number:</p>
                                        <p>1234-5678-9012-3456</p>

                                    </div>

                                    <!-- Standard Bank Details -->
                                    <div class="pt-4 md:pt-0">
                                        <p class="font-semibold">Bank Name:</p>
                                        <p>Standard Bank</p>
                                        <p class="font-semibold mt-2">Account Name:</p>
                                        <p>Organization Name</p>
                                        <p class="font-semibold mt-2">Account Number:</p>
                                        <p>9876-5432-1098-7654</p>

                                    </div>
                                </div>

                                <!-- Screenshot Upload -->
                                <div class="mt-6">
                                    <label for="transactionScreenshot"
                                        class="block text-sm font-medium text-gray-700">Upload Transaction
                                        Screenshot:</label>
                                    <input type="file" id="transactionScreenshot" name="transactionScreenshot"
                                        accept="image/*"
                                        class="mt-1 block w-full text-sm text-gray-500 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
                                        onchange="handleImageUpload(event)">
                                    <!-- Image Preview -->
                                    <div id="imagePreview" class="mt-4">
                                        <p class="text-sm text-gray-500">No image selected.</p>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!-- Comment -->
                        <div class="relative">
                            <div class="absolute top-3 left-3 flex items-start pointer-events-none">
                                <i class="fas fa-comment text-gray-500"></i>
                            </div>
                            <textarea name="comment" id="comment" rows="3" placeholder="Leave a comment (optional)"
                                class="pl-10 block w-full rounded-md border-gray-300 shadow-sm focus:ring-[var(--theme-color)] focus:border-[var(--theme-color)]"></textarea>
                        </div>

                        <!-- Privacy Policy and Terms -->
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" name="terms" type="checkbox" required
                                    class="focus:ring-[var(--theme-color)] h-4 w-4 text-[var(--theme-color)] border-gray-300 rounded">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terms" class="font-medium text-gray-700">
                                    <label for="terms" class="font-medium text-gray-700">I agree to the <a href="#"
                                            class="text-[var(--theme-color)] hover:underline">Terms of
                                            Service</a> and <a href="#"
                                            class="text-[var(--theme-color)] hover:underline">Privacy
                                            Policy</a></label>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-2">
                            <button type="submit"
                                class="w-full bg-[var(--theme-color)] hover:bg-[var(--custom-orange)] text-white font-bold py-3 px-6 rounded-md transition-colors duration-300 flex items-center justify-center">
                                <i class="fas fa-heart mr-2"></i> Donate Now
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Image Section (30%) -->
                <div class="w-full lg:w-[30%] bg-gray-800 relative overflow-hidden">
                    <img src="/assets/images/donate/20944629.jpg" alt="Donation Impact"
                        class="absolute inset-0 w-full h-400px object-cover">

                    <div class="absolute inset-0 bg-black bg-opacity-70"></div>
                    <div class="relative z-10 p-6 md:p-10 flex flex-col justify-center h-full text-white">
                        <h3 class="text-2xl font-bold mb-4">Your Support Makes a Difference</h3>
                        <p class="mb-6">Every donation helps us continue our mission and create positive change in
                            our communities.</p>

                        <div class="space-y-4">
                            <div class="flex items-center">
                                <div class="bg-[var(--theme-color)] p-2 rounded-full mr-3">
                                    <i class="fas fa-hand-holding-heart"></i>
                                </div>
                                <span>Support community projects</span>
                            </div>
                            <div class="flex items-center">
                                <div class="bg-[var(--theme-color)] p-2 rounded-full mr-3">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <span>Fund educational initiatives</span>
                            </div>
                            <div class="flex items-center">
                                <div class="bg-[var(--theme-color)] p-2 rounded-full mr-3">
                                    <i class="fas fa-hospital"></i>
                                </div>
                                <span>Improve healthcare access</span>
                            </div>
                            <div class="flex items-center">
                                <div class="bg-[var(--theme-color)] p-2 rounded-full mr-3">
                                    <i class="fas fa-seedling"></i>
                                </div>
                                <span>Promote sustainable development</span>
                            </div>
                        </div>
                        <div class="mt-8">
                            <p class="font-bold mb-2">Contact Us</p>
                            <div class="flex items-center mb-2">
                                <i class="fas fa-envelope mr-2"></i>
                                <a href="mailto:donations@example.org" class="hover:underline">donations@example.org</a>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-phone mr-2"></i>
                                <a href="tel:+12345678901" class="hover:underline">+1 (234) 567-8901</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Donation Methods Icons -->
            <div class="mt-12 text-center">
                <p class="text-gray-600 mb-4">Secure Payment Methods</p>
                <div class="flex justify-center space-x-6">
                    <i class="fab fa-cc-visa text-3xl text-gray-600"></i>
                    <i class="fab fa-cc-mastercard text-3xl text-gray-600"></i>
                    <i class="fab fa-cc-amex text-3xl text-gray-600"></i>
                    <i class="fab fa-cc-discover text-3xl text-gray-600"></i>
                    <i class="fab fa-paypal text-3xl text-gray-600"></i>
                </div>
            </div>


        </div>


    </section>


    <!-- Styles for the Donation Page -->
    <style>
        /* Background Image for Donation Header */

        .background-container-donate {
            background-image: url('/assets/images/donate/piggy-bank-finance-savings-concept.jpg');
            background-size: cover;
            background-position: center;
            height: 300px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .background-container-donate .overlay {

            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.8));
        }

        .background-container-donate .text-container {
            position: relative;
            z-index: 10;
            text-align: center;
            color: white;
        }

        .background-container-donate .home-link {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .background-container-donate .contact-text {
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.8);
        }

        /* Form Styling */
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="number"],
        select,
        textarea {
            width: 100%;
            padding: 2rem;
            border: 1px solid #e2e8f0;
            border-radius: 0.375rem;
        }

        /* Responsive adjustments */
        @media (max-width: 1023px) {
            .background-container-donate .home-link {
                font-size: 2rem;
            }

            /* On mobile, stack the form and image */
            #donationForm {
                border-bottom: 1px solid #e2e8f0;
                padding-bottom: 2rem;
                margin-bottom: 2rem;
            }
        }
    </style>

@endsection


@push('scripts')

    <!-- JavaScript for the Donation Form -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const paymentMethods = document.getElementsByName('paymentMethod');
            const sections = {
                card: document.getElementById('cardPaymentMethod'),
                paypal: document.getElementById('paypalPaymentMethod'),
                bank: document.getElementById('bankPaymentMethod')
            };

            function togglePaymentSections() {
                const selectedMethod = document.querySelector('input[name="paymentMethod"]:checked').value;
                for (const [method, section] of Object.entries(sections)) {
                    if (method === selectedMethod) {
                        section.classList.remove('hidden');
                    } else {
                        section.classList.add('hidden');
                    }
                }
            }

            paymentMethods.forEach(radio => {
                radio.addEventListener('change', togglePaymentSections);
            });

            // Initialize the display based on the default selected radio button
            togglePaymentSections();
        });

        // /////////////////////////////////////////////    
        document.addEventListener('DOMContentLoaded', function () {
            const donationInput = document.getElementById('donationAmount');

            donationInput.addEventListener('input', function (e) {
                // Remove all non-digit characters
                const value = e.target.value.replace(/\D/g, '');
                // Format the number with commas
                const formattedValue = Number(value).toLocaleString();
                // Update the input field with the formatted value
                e.target.value = formattedValue;
            });
        });
        LL


        document.addEventListener('DOMContentLoaded', function () {
            // Donation Amount Buttons
            const donationBtns = document.querySelectorAll('.donation-btn');
            const customAmountInput = document.getElementById('customAmount');

            donationBtns.forEach(btn => {
                btn.addEventListener('click', function () {
                    // Remove active class from all buttons
                    donationBtns.forEach(b => b.classList.remove('bg-[var(--theme-color)]',
                        'text-white'));

                    // Add active class to clicked button
                    this.classList.add('bg-[var(--theme-color)]', 'text-white');

                    // Set custom amount input to the button value
                    customAmountInput.value = this.textContent.trim().substring(1);
                });
            });
            // Clear active button when custom amount is entered
            customAmountInput.addEventListener('focus', function () {
                donationBtns.forEach(btn => btn.classList.remove('bg-[var(--theme-color)]', 'text-white'));
            });

            // Payment Method Toggles
            const paymentMethods = document.querySelectorAll('input[name="paymentMethod"]');
            const paymentSections = document.querySelectorAll('.payment-method-section');

            paymentMethods.forEach(method => {
                method.addEventListener('change', function () {
                    // Hide all payment sections
                    paymentSections.forEach(section => section.classList.add('hidden'));

                    // Show selected payment section
                    document.getElementById(`${this.value}PaymentMethod`).classList.remove(
                        'hidden');
                });
            });

            // Form Submission
            document.getElementById('donationForm').addEventListener('submit', function (e) {
                e.preventDefault();

                // Basic form validation
                const requiredFields = this.querySelectorAll('[required]');
                let isValid = true;

                requiredFields.forEach(field => {
                    if (!field.value) {
                        isValid = false;
                        field.classList.add('border-red-500');
                    } else {
                        field.classList.remove('border-red-500');
                    }
                });

                if (isValid) {
                    // Show success message (in production, this would submit to your payment processor)
                    alert(
                        'Thank you for your donation! You would now be redirected to complete the payment.');
                    // this.reset(); // Reset form after submission
                } else {
                    alert('Please fill in all required fields');
                }
            });
        });

        // UPLOADING IMAGE SCRIPT
        document.getElementById('transactionScreenshot').addEventListener('change', function (event) {
            const imagePreview = document.getElementById('imagePreview');
            imagePreview.innerHTML = ''; // Clear previous content

            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function handleImageUpload(event) {
                    const file = event.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function (e) {
                            // Remove any existing images in the preview container
                            const imagePreview = document.getElementById('imagePreview');
                            imagePreview.innerHTML = '';

                            // Create a new image element
                            const img = document.createElement('img');
                            img.src = e.target.result;
                            img.alt = 'Transaction Screenshot';
                            img.classList.add('mt-2', 'w-40', 'h-40', 'border', 'border-gray-300',
                                'rounded-md');

                            // Append the image to the preview container
                            imagePreview.appendChild(img);
                        };
                        reader.readAsDataURL(file);
                    }
                }

                reader.readAsDataURL(file);
            } else {
                imagePreview.innerHTML = '<p class="text-sm text-gray-500">No image selected.</p>';
            }
        });
    </script>

@endpush --}}



@extends('layouts.front', ['pageTitle' => 'Dpp | Donation'])
@section('content')

<!-- Hero Section with Animated Background -->
<div class="hero-donation">
    <div class="hero-overlay"></div>
    <div class="hero-particles"></div>
    <div class="hero-content">
        <div class="hero-text">
            <h1 class="hero-title">Empower Change</h1>
            <p class="hero-subtitle">Together, we build a stronger Democratic Progressive Party</p>
            <div class="hero-breadcrumb">
                <a href="{{ route('welcome') }}">Home</a>
                <span>/</span>
                <span>Donate</span>
            </div>
        </div>
    </div>
    <div class="hero-scroll-indicator">
        <div class="scroll-arrow"></div>
    </div>
</div>

<!-- Main Content -->
<div class="donation-wrapper">
    <!-- Introduction Section -->
    <section class="intro-section">
        <div class="container">
            <div class="intro-content">
                <div class="section-badge">Support DPP</div>
                <h2 class="section-title">Channel Your Support Through Our Secretariat</h2>
                <p class="section-description">
                    Every contribution strengthens our democratic mission. Whether through monetary donations, 
                    party regalia, materials, machinery, or any beneficial items - your support powers our 
                    day-to-day operations and campaign programs across Malawi.
                </p>
            </div>
        </div>
    </section>

    <!-- Donation Types Section -->
    <section class="donation-types-section">
        <div class="container">
            <div class="types-grid">
                <div class="type-card monetary">
                    <div class="card-glow"></div>
                    <div class="card-icon">
                        <i class="fas fa-coins"></i>
                    </div>
                    <h3>Monetary Donations</h3>
                    <p>Direct financial contributions to support our operations and initiatives</p>
                </div>
                
                <div class="type-card regalia">
                    <div class="card-glow"></div>
                    <div class="card-icon">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <h3>Party Regalia</h3>
                    <p>T-shirts, caps, banners, and promotional materials for campaigns</p>
                </div>
                
                <div class="type-card materials">
                    <div class="card-glow"></div>
                    <div class="card-icon">
                        <i class="fas fa-boxes"></i>
                    </div>
                    <h3>Materials & Supplies</h3>
                    <p>Office equipment, stationery, and operational materials</p>
                </div>
                
                <div class="type-card machinery">
                    <div class="card-glow"></div>
                    <div class="card-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3>Machinery & Vehicles</h3>
                    <p>Transportation, generators, and heavy equipment for campaigns</p>
                </div>
                
                <div class="type-card other">
                    <div class="card-glow"></div>
                    <div class="card-icon">
                        <i class="fas fa-gift"></i>
                    </div>
                    <h3>Other Contributions</h3>
                    <p>Any items beneficial for running party affairs and programs</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Payment Methods Section -->
    <section class="payment-section">
        <div class="container">
            <div class="payment-header">
                <div class="section-badge">Secure Payments</div>
                <h2 class="section-title">Choose Your Payment Method</h2>
                <p class="section-description">Multiple secure options available for your convenience</p>
            </div>

            <div class="payment-grid">
                <!-- National Bank -->
                <div class="payment-card bank-card">
                    <div class="card-header">
                        <div class="payment-logo">
                            <i class="fas fa-university"></i>
                        </div>
                        <div class="payment-name">
                            <h3>National Bank</h3>
                            <span>Malawi</span>
                        </div>
                    </div>
                    <div class="payment-details">
                        <div class="detail-item">
                            <span class="detail-label">Account Name</span>
                            <span class="detail-value">Democratic Progressive Party</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Account Number</span>
                            <span class="detail-value">1234-5678-9012-3456</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Branch</span>
                            <span class="detail-value">Main Branch, Lilongwe</span>
                        </div>
                    </div>
                </div>

                <!-- Standard Bank -->
                <div class="payment-card bank-card">
                    <div class="card-header">
                        <div class="payment-logo standard">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="payment-name">
                            <h3>Standard Bank</h3>
                            <span>Malawi</span>
                        </div>
                    </div>
                    <div class="payment-details">
                        <div class="detail-item">
                            <span class="detail-label">Account Name</span>
                            <span class="detail-value">Democratic Progressive Party</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Account Number</span>
                            <span class="detail-value">9876-5432-1098-7654</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Branch</span>
                            <span class="detail-value">City Centre, Blantyre</span>
                        </div>
                    </div>
                </div>

                <!-- Mobile Money -->
                <div class="payment-card mobile-card">
                    <div class="card-header">
                        <div class="payment-logo mobile">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="payment-name">
                            <h3>Mobile Money</h3>
                            <span>TNM & Airtel</span>
                        </div>
                    </div>
                    <div class="payment-details">
                        <div class="detail-item">
                            <span class="detail-label">TNM Mpamba</span>
                            <span class="detail-value">0888-123-456</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Airtel Money</span>
                            <span class="detail-value">0999-654-321</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Reference</span>
                            <span class="detail-value">DPP Support</span>
                        </div>
                    </div>
                </div>

                <!-- PayPal -->
                <div class="payment-card paypal-card">
                    <div class="card-header">
                        <div class="payment-logo paypal">
                            <i class="fab fa-paypal"></i>
                        </div>
                        <div class="payment-name">
                            <h3>PayPal</h3>
                            <span>International</span>
                        </div>
                    </div>
                    <div class="payment-details">
                        <div class="detail-item">
                            <span class="detail-label">PayPal Email</span>
                            <span class="detail-value">donations@dpp.mw</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Reference</span>
                            <span class="detail-value">DPP Donation</span>
                        </div>
                        <div class="security-note">
                            <i class="fas fa-shield-alt"></i>
                            <span>Secure international payments</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Section -->
    <section class="impact-section">
        <div class="container">
            <div class="impact-header">
                <div class="section-badge">Your Impact</div>
                <h2 class="section-title">Where Your Donation Goes</h2>
                <p class="section-description">Every contribution directly supports our democratic mission</p>
            </div>

            <div class="impact-grid">
                <div class="impact-card">
                    <div class="impact-icon democratic">
                        <i class="fas fa-vote-yea"></i>
                    </div>
                    <h3>Democratic Processes</h3>
                    <p>Supporting free and fair elections, voter education, and democratic participation</p>
                </div>

                <div class="impact-card">
                    <div class="impact-icon community">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Community Outreach</h3>
                    <p>Grassroots programs, town halls, and community engagement initiatives</p>
                </div>

                <div class="impact-card">
                    <div class="impact-icon campaign">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <h3>Campaign Activities</h3>
                    <p>Campaign materials, events, and communication efforts nationwide</p>
                </div>

                <div class="impact-card">
                    <div class="impact-icon operations">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>Party Operations</h3>
                    <p>Office maintenance, staff support, and efficient party administration</p>
                </div>
            </div>
        </div>
    </section>


</div>

<!-- Styles -->
<style>
    :root {
        --primary-color: #2563eb;
        --secondary-color: #f59e0b;
        --accent-color: #10b981;
        --dark-color: #1e293b;
        --light-color: #f8fafc;
        --gradient-1: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        --gradient-2: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        --gradient-3: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        line-height: 1.6;
        color: var(--dark-color);
        overflow-x: hidden;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
    }

    /* Hero Section */
    .hero-donation {
        height: 60vh;
        background: linear-gradient(135deg, #667eea 0%, #f093fb 100%);
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.4);
        z-index: 1;
    }

    .hero-particles {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: 
            radial-gradient(circle at 20% 50%, rgba(255, 255, 255, 0.1) 2px, transparent 2px),
            radial-gradient(circle at 80% 20%, rgba(255, 255, 255, 0.1) 2px, transparent 2px),
            radial-gradient(circle at 40% 80%, rgba(255, 255, 255, 0.1) 2px, transparent 2px);
        animation: float 6s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }

    .hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
        color: white;
    }

    .hero-title {
        font-size: 4rem;
        font-weight: 800;
        margin-bottom: 1rem;
        background: linear-gradient(45deg, #fff, #f0f0f0);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: fadeInUp 1s ease-out;
    }

    .hero-subtitle {
        font-size: 1.5rem;
        margin-bottom: 2rem;
        opacity: 0.9;
        animation: fadeInUp 1s ease-out 0.2s both;
    }

    .hero-breadcrumb {
        font-size: 1.1rem;
        animation: fadeInUp 1s ease-out 0.4s both;
    }

    .hero-breadcrumb a {
        color: white;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .hero-breadcrumb a:hover {
        color: var(--secondary-color);
    }

    .hero-scroll-indicator {
        position: absolute;
        bottom: 2rem;
        left: 50%;
        transform: translateX(-50%);
        z-index: 2;
    }

    .scroll-arrow {
        width: 30px;
        height: 30px;
        border-right: 2px solid white;
        border-bottom: 2px solid white;
        transform: rotate(45deg);
        animation: bounce 2s infinite;
    }

    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% { transform: translateY(0) rotate(45deg); }
        40% { transform: translateY(-10px) rotate(45deg); }
        60% { transform: translateY(-5px) rotate(45deg); }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Main Content */
    .donation-wrapper {
        background: linear-gradient(180deg, #f8fafc 0%, #e2e8f0 100%);
        min-height: 100vh;
    }

    /* Section Styles */
    .section-badge {
        display: inline-block;
        background: var(--gradient-1);
        color: white;
        padding: 0.5rem 1.5rem;
        border-radius: 50px;
        font-size: 0.9rem;
        font-weight: 600;
        margin-bottom: 1rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        background: var(--gradient-1);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .section-description {
        font-size: 1.1rem;
        color: #64748b;
        max-width: 600px;
        margin: 0 auto;
        line-height: 1.8;
    }

    /* Introduction Section */
    .intro-section {
        padding: 6rem 0;
        text-align: center;
    }

    /* Donation Types Section */
    .donation-types-section {
        padding: 4rem 0;
        background: white;
    }

    .types-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
    }

    .type-card {
        background: white;
        border-radius: 20px;
        padding: 2.5rem;
        text-align: center;
        position: relative;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: 1px solid #e2e8f0;
    }

    .type-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
    }

    .card-glow {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: var(--gradient-1);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .type-card:hover .card-glow {
        opacity: 0.1;
    }

    .card-icon {
        width: 80px;
        height: 80px;
        margin: 0 auto 1.5rem;
        background: var(--gradient-1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        z-index: 2;
    }

    .card-icon i {
        font-size: 2rem;
        color: white;
    }

    .type-card h3 {
        font-size: 1.3rem;
        font-weight: 600;
        margin-bottom: 1rem;
        position: relative;
        z-index: 2;
    }

    .type-card p {
        color: #64748b;
        position: relative;
        z-index: 2;
    }

    /* Different colors for different cards */
    .type-card.regalia .card-icon { background: var(--gradient-2); }
    .type-card.materials .card-icon { background: var(--gradient-3); }
    .type-card.machinery .card-icon { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }
    .type-card.other .card-icon { background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%); }

    /* Payment Section */
    .payment-section {
        padding: 6rem 0;
        background: #f8fafc;
    }

    .payment-header {
        text-align: center;
        margin-bottom: 4rem;
    }

    .payment-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 2rem;
    }

    .payment-card {
        background: white;
        border-radius: 20px;
        padding: 2rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: 1px solid #e2e8f0;
        position: relative;
        overflow: hidden;
    }

    .payment-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
    }

    .card-header {
        display: flex;
        align-items: center;
        margin-bottom: 2rem;
        padding-bottom: 1rem;
        border-bottom: 2px solid #f1f5f9;
    }

    .payment-logo {
        width: 60px;
        height: 60px;
        background: var(--gradient-1);
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 1rem;
    }

    .payment-logo i {
        font-size: 1.5rem;
        color: white;
    }

    .payment-logo.standard { background: var(--gradient-2); }
    .payment-logo.mobile { background: var(--gradient-3); }
    .payment-logo.paypal { background: linear-gradient(135deg, #0070ba 0%, #003087 100%); }

    .payment-name h3 {
        font-size: 1.3rem;
        font-weight: 600;
        margin-bottom: 0.25rem;
    }

    .payment-name span {
        color: #64748b;
        font-size: 0.9rem;
    }

    .payment-details {
        space-y: 1rem;
    }

    .detail-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.75rem 0;
        border-bottom: 1px solid #f1f5f9;
    }

    .detail-item:last-child {
        border-bottom: none;
    }

    .detail-label {
        font-weight: 500;
        color: #475569;
    }

    .detail-value {
        font-family: 'JetBrains Mono', monospace;
        background: #f1f5f9;
        padding: 0.25rem 0.75rem;
        border-radius: 8px;
        font-size: 0.9rem;
        font-weight: 500;
    }

    .security-note {
        margin-top: 1rem;
        padding: 0.75rem;
        background: #ecfdf5;
        border-radius: 8px;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #065f46;
        font-size: 0.9rem;
    }

    /* Impact Section */
    .impact-section {
        padding: 6rem 0;
        background: white;
    }

    .impact-header {
        text-align: center;
        margin-bottom: 4rem;
    }

    .impact-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
    }

    .impact-card {
        background: white;
        border-radius: 20px;
        padding: 2.5rem;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        border: 1px solid #e2e8f0;
    }

    .impact-card:hover {
        transform: translateY(-5px);
    }

    .impact-icon {
        width: 80px;
        height: 80px;
        margin: 0 auto 1.5rem;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .impact-icon i {
        font-size: 2rem;
        color: white;
    }

    .impact-icon.democratic { background: var(--gradient-1); }
    .impact-icon.community { background: var(--gradient-2); }
    .impact-icon.campaign { background: var(--gradient-3); }
    .impact-icon.operations { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }

    .impact-card h3 {
        font-size: 1.3rem;
        font-weight: 600;
        margin-bottom: 1rem;
        color: var(--dark-color);
    }

    .impact-card p {
        color: #64748b;
        line-height: 1.6;
    }

    /* Contact Section */
    .contact-section {
        padding: 6rem 0;
        background: var(--gradient-1);
        color: white;
    }

    .contact-content {
        text-align: center;
    }

    .contact-content h2 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
    }

    .contact-content p {
        font-size: 1.1rem;
        opacity: 0.9;
        margin-bottom: 3rem;
    }

    .contact-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
    }

    .contact-item {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-radius: 15px;
        padding: 2rem;
        display: flex;
        align-items: center;
        gap: 1rem;
        transition: transform 0.3s ease, background 0.3s ease;
        text-decoration: none;
        color: white;
    }

    .contact-item:hover {
        transform: translateY(-3px);
        background: rgba(255, 255, 255, 0.2);
    }

    .contact-icon {
        width: 50px;
        height: 50px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .contact-icon i {
        font-size: 1.2rem;
    }

    .contact-info {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .contact-label {
        font-size: 0.9rem;
        opacity: 0.8;
        margin-bottom: 0.25rem;
    }

    .contact-value {
        font-size: 1.1rem;
        font-weight: 500;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.5rem;
        }

        .hero-subtitle {
            font-size: 1.2rem;
        }

        .section-title {
            font-size: 2rem;
        }

        .container {
            padding: 0 1rem;
        }

        .types-grid,
        .payment-grid,
        .impact-grid {
            grid-template-columns: 1fr;
        }

        .type-card,
        .payment-card,
        .impact-card {
            padding: 2rem;
        }

        .contact-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 480px) {
        .hero-title {
            font-size: 2rem;
        }

        .type-card,
        .payment-card,
        .impact-card {
            padding: 1.5rem;
        }

        .card-header {
            flex-direction: column;
            text-align: center;
            gap: 1rem;
        }

        .payment-logo {
            margin-right: 0;
        }
    }
</style>

@endsection