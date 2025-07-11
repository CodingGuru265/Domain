@extends('layouts.front')

@section('title', 'About DPP - Democratic Progressive Party')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Hero Section with Parallax Effect -->
    <div class="relative h-96 overflow-hidden bg-blue-900">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1519817650390-64a93db51149?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80')] bg-cover bg-center opacity-30"></div>
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-4">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-4">Democratic Progressive Party</h1>
            <p class="text-xl md:text-2xl text-blue-100 mb-8">Building a Better Malawi Together</p>
            <div class="animate-bounce">
                <span class="inline-block bg-yellow-500 text-blue-900 px-8 py-3 rounded-full text-lg font-bold uppercase tracking-wide shadow-lg">
                    DPP Woyeee! Malawi Woyeee!!!
                </span>
            </div>
        </div>
    </div>

    <!-- Main Content Container -->
    <div class="container mx-auto px-4 py-16 max-w-6xl">
        <!-- Introduction Section -->
        <section class="mb-20">
            <div class="flex flex-col lg:flex-row items-center gap-8">
                <div class="lg:w-1/2">
                    <div class="bg-white p-8 rounded-xl shadow-xl border-l-8 border-yellow-500">
                        <h2 class="text-3xl font-bold text-blue-900 mb-6">Our Foundation</h2>
                        <p class="text-gray-700 leading-relaxed mb-6">
                            At the heart of DPP's formation and existence are beliefs and values grounded on people-centered development approaches, long term infrastructure developments, people-driven economic stewardship, household food security, and a culture of respect for human rights and human dignity for all.
                        </p>
                        <p class="text-gray-700 leading-relaxed">
                            The political philosophy of the DPP is social democracy or developmental democracy, with elements of Ubuntu and progressive liberalism. The DPP leans toward progressive values while embracing some moderate and pragmatic approaches to governance.
                        </p>
                    </div>
                </div>
                <div class="lg:w-1/2 bg-blue-50 p-8 rounded-xl">
                    <h3 class="text-2xl font-bold text-blue-900 mb-4">Our Origin</h3>
                    <p class="text-gray-700 mb-6">
                        Founded in February 2005 by the then Malawian President, His Excellency Late Prof. Bingu wa Mutharika, the Democratic Progressive Party (DPP) was formed to restore the confidence of the people of Malawi in their government.
                    </p>
                    <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4">
                        <p class="text-gray-800 italic">
                            "The people wanted a government they can trust, a government that can deliver. They wanted the government that will ensure that the people of Malawi believe in themselves and take full control of their destiny."
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Three Pillars Section -->
        <section class="mb-20">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-blue-900 mb-4">Our Guiding Pillars</h2>
                <div class="w-24 h-1 bg-yellow-500 mx-auto"></div>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Prosperity -->
                <div class="bg-white p-8 rounded-xl shadow-lg transform transition-all hover:scale-105 hover:shadow-xl">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"/>
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-center text-blue-900 mb-4">Prosperity</h3>
                    <p class="text-gray-700 text-center">
                        Economic growth and development for all Malawians through sound financial management and wealth creation.
                    </p>
                </div>
                
                <!-- Justice -->
                <div class="bg-white p-8 rounded-xl shadow-lg transform transition-all hover:scale-105 hover:shadow-xl">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7 2a1 1 0 011 1v1h3a1 1 0 110 2H9.578a18.87 18.87 0 01-1.724 4.78c.29.354.596.696.914 1.026a1 1 0 11-1.44 1.389c-.188-.196-.373-.396-.554-.6a19.098 19.098 0 01-3.107 3.567 1 1 0 01-1.334-1.49 17.087 17.087 0 003.13-3.733 18.992 18.992 0 01-1.487-2.494 1 1 0 111.79-.89c.234.47.489.928.764 1.372.417-.934.752-1.913.997-2.927H3a1 1 0 110-2h3V3a1 1 0 011-1zm6 6a1 1 0 01.894.553l2.991 5.982a.869.869 0 01.02.037l.99 1.98a1 1 0 11-1.79.895L15.383 16h-4.764l-.724 1.447a1 1 0 11-1.788-.894l.99-1.98.019-.038 2.99-5.982A1 1 0 0113 8zm-1.382 6h2.764L13 11.236 11.618 14z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-center text-blue-900 mb-4">Justice</h3>
                    <p class="text-gray-700 text-center">
                        Fair treatment and equality for all citizens through upholding human rights, civil liberties and the rule of law.
                    </p>
                </div>
                
                <!-- Security -->
                <div class="bg-white p-8 rounded-xl shadow-lg transform transition-all hover:scale-105 hover:shadow-xl">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-center text-blue-900 mb-4">Security</h3>
                    <p class="text-gray-700 text-center">
                        Peace, stability and safety for our nation through unity, tolerance and reconciliation.
                    </p>
                </div>
            </div>
            
            <div class="mt-12 text-center">
                <h4 class="text-xl font-semibold text-blue-900 mb-6">To achieve these pillars, we uphold:</h4>
                <div class="flex flex-wrap justify-center gap-4">
                    <span class="bg-blue-900 text-white px-6 py-2 rounded-full font-semibold shadow-md">Patriotism</span>
                    <span class="bg-yellow-500 text-blue-900 px-6 py-2 rounded-full font-semibold shadow-md">Integrity</span>
                    <span class="bg-blue-900 text-white px-6 py-2 rounded-full font-semibold shadow-md">Hard Work</span>
                </div>
            </div>
        </section>

        {{-- <!-- Vision & Mission Section -->
        <section class="mb-20">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Vision -->
                <div class="bg-gradient-to-br from-blue-900 to-blue-700 p-8 rounded-xl text-white shadow-xl">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-blue-900" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold">Our Vision</h3>
                    </div>
                    <p class="leading-relaxed">
                        To see our country resume economic growth fast enough to bring about prosperity, to reduce poverty significantly, and to make life better for everyone; to produce enough food for all; to see that our country transforms from being a predominantly importing and consuming country to being a predominantly producing and exporting country; and to gradually emerge as an industrial nation capable of transforming our agricultural commodities, other raw materials and minerals, so as to create new wealth for our people.
                    </p>
                </div>
                
                <!-- Mission -->
                <div class="bg-white p-8 rounded-xl border-2 border-yellow-500 shadow-xl">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-blue-900 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"/>
                                <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-blue-900">Our Mission</h3>
                    </div>
                    <p class="text-gray-700 leading-relaxed">
                        To instill confidence in the economy and to persuade Malawians to believe in ourselves that we can achieve macroeconomic growth and reduce poverty through sound financial management and fiscal prudence; to create more jobs; to redistribute incomes by promoting significant domestic savings; foreign financing and investment in our agricultural processing, industrial production and manufacturing; and to thereby increase the supply of quality goods and services for the domestic and international markets.
                    </p>
                </div>
            </div>
        </section> --}}




        <!-- Vision & Mission Section -->
<section class="mb-16">
    <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-blue-900 mb-2">Vision & Mission</h2>
        <div class="w-20 h-1 bg-yellow-500 mx-auto"></div>
    </div>

    <div class="space-y-12">
        <!-- Vision -->
        <div class="relative bg-white p-8 rounded-xl shadow-sm border-t-8 border-blue-900">
            <div class="absolute -top-6 left-6 w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center shadow-md">
                <svg class="w-6 h-6 text-blue-900" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                </svg>
            </div>
            <h3 class="text-2xl font-bold text-blue-900 mb-4 pl-4">Our Vision</h3>
            <p class="text-gray-700 pl-4">
                To see our country resume economic growth fast enough to bring about prosperity, to reduce poverty significantly, and to make life better for everyone; to produce enough food for all; to see that our country transforms from being a predominantly importing and consuming country to being a predominantly producing and exporting country; and to gradually emerge as an industrial nation capable of transforming our agricultural commodities, other raw materials and minerals, so as to create new wealth for our people.
            </p>
        </div>

        <!-- Mission -->
        <div class="relative bg-blue-50 p-8 rounded-xl shadow-sm border-t-8 border-yellow-500">
            <div class="absolute -top-6 left-6 w-12 h-12 bg-blue-900 rounded-full flex items-center justify-center shadow-md">
                <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"/>
                    <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"/>
                </svg>
            </div>
            <h3 class="text-2xl font-bold text-blue-900 mb-4 pl-4">Our Mission</h3>
            <p class="text-gray-700 pl-4">
                To instill confidence in the economy and to persuade Malawians to believe in ourselves that we can achieve macroeconomic growth and reduce poverty through sound financial management and fiscal prudence; to create more jobs; to redistribute incomes by promoting significant domestic savings; foreign financing and investment in our agricultural processing, industrial production and manufacturing; and to thereby increase the supply of quality goods and services for the domestic and international markets.
            </p>
        </div>
    </div>
</section>

   <!-- Aims Section -->
<section class="mb-20">
    <div class="text-center mb-12">
        <h2 class="text-4xl font-bold text-blue-900 mb-4">Our Aims</h2>
        <div class="w-24 h-1 bg-yellow-500 mx-auto mb-6"></div>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">We are committed to building a prosperous Malawi through these fundamental objectives</p>
    </div>
    
    <div class="grid md:grid-cols-2 gap-8">
        <!-- Column 1 -->
        <div class="space-y-6">
            <!-- Aim 1 -->
            <div class="flex items-start group">
                <div class="relative mr-5">
                    <div class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center transform group-hover:scale-110 transition-all">
                        <svg class="w-6 h-6 text-blue-900" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="absolute -inset-2 border-2 border-yellow-500 rounded-full opacity-0 group-hover:opacity-100 transition-all pointer-events-none"></div>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2">Economic Empowerment</h3>
                    <p class="text-gray-700">Fighting poverty through sustainable economic programs and opportunities</p>
                </div>
            </div>
            
            <!-- Aim 2 -->
            <div class="flex items-start group">
                <div class="relative mr-5">
                    <div class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center transform group-hover:scale-110 transition-all">
                        <svg class="w-6 h-6 text-blue-900" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                    </div>
                    <div class="absolute -inset-2 border-2 border-yellow-500 rounded-full opacity-0 group-hover:opacity-100 transition-all pointer-events-none"></div>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2">Agricultural Development</h3>
                    <p class="text-gray-700">Developing agriculture and attaining national food security</p>
                </div>
            </div>
            
            <!-- Aim 3 -->
            <div class="flex items-start group">
                <div class="relative mr-5">
                    <div class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center transform group-hover:scale-110 transition-all">
                        <svg class="w-6 h-6 text-blue-900" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="absolute -inset-2 border-2 border-yellow-500 rounded-full opacity-0 group-hover:opacity-100 transition-all pointer-events-none"></div>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2">Wealth Creation</h3>
                    <p class="text-gray-700">Creating new wealth for all people of Malawi</p>
                </div>
            </div>
        </div>
        
        <!-- Column 2 -->
        <div class="space-y-6">
            <!-- Aim 4 -->
            <div class="flex items-start group">
                <div class="relative mr-5">
                    <div class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center transform group-hover:scale-110 transition-all">
                        <svg class="w-6 h-6 text-blue-900" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="absolute -inset-2 border-2 border-yellow-500 rounded-full opacity-0 group-hover:opacity-100 transition-all pointer-events-none"></div>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2">National Unity</h3>
                    <p class="text-gray-700">Uniting the people of Malawi across all regions and backgrounds</p>
                </div>
            </div>
            
            <!-- Aim 5 -->
            <div class="flex items-start group">
                <div class="relative mr-5">
                    <div class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center transform group-hover:scale-110 transition-all">
                        <svg class="w-6 h-6 text-blue-900" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7 2a1 1 0 011 1v1h3a1 1 0 110 2H9.578a18.87 18.87 0 01-1.724 4.78c.29.354.596.696.914 1.026a1 1 0 11-1.44 1.389c-.188-.196-.373-.396-.554-.6a19.098 19.098 0 01-3.107 3.567 1 1 0 01-1.334-1.49 17.087 17.087 0 003.13-3.733 18.992 18.992 0 01-1.487-2.494 1 1 0 111.79-.89c.234.47.489.928.764 1.372.417-.934.752-1.913.997-2.927H3a1 1 0 110-2h3V3a1 1 0 011-1zm6 6a1 1 0 01.894.553l2.991 5.982a.869.869 0 01.02.037l.99 1.98a1 1 0 11-1.79.895L15.383 16h-4.764l-.724 1.447a1 1 0 11-1.788-.894l.99-1.98.019-.038 2.99-5.982A1 1 0 0113 8zm-1.382 6h2.764L13 11.236 11.618 14z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="absolute -inset-2 border-2 border-yellow-500 rounded-full opacity-0 group-hover:opacity-100 transition-all pointer-events-none"></div>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2">Human Rights</h3>
                    <p class="text-gray-700">Guaranteeing human rights and civil liberties for all citizens</p>
                </div>
            </div>
            
            <!-- Aim 6 -->
            <div class="flex items-start group">
                <div class="relative mr-5">
                    <div class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center transform group-hover:scale-110 transition-all">
                        <svg class="w-6 h-6 text-blue-900" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="absolute -inset-2 border-2 border-yellow-500 rounded-full opacity-0 group-hover:opacity-100 transition-all pointer-events-none"></div>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2">National Security</h3>
                    <p class="text-gray-700">Ensuring security, peace and stability across the nation</p>
                </div>
            </div>
        </div>
    </div>
</section>

        <!-- Symbolism Section -->
        <section class="mb-20">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-blue-900 mb-4">Our Symbolism</h2>
                <div class="w-24 h-1 bg-yellow-500 mx-auto"></div>
            </div>
            
            <div class="flex flex-col lg:flex-row gap-8 items-center">
                <div class="lg:w-1/2">
                    <div class="bg-white p-8 rounded-xl shadow-lg">
                        <div class="flex items-center mb-6">
                            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-10 h-10 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-blue-900">Four Maize Cobs</h3>
                        </div>
                        <p class="text-gray-700">
                            The emblem of the DPP is four (4) maize cobs arranged in a flower pattern. The cobs represent food sufficiency for the people of all four political regions of Malawi: North, Centre, East and South. We prioritize food security as a fundamental aspect of economic development.
                        </p>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <div class="bg-blue-900 p-8 rounded-xl text-white shadow-lg">
                        <div class="flex items-center mb-6">
                            <div class="w-16 h-16 bg-blue-700 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-10 h-10 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-yellow-500">Blue Color</h3>
                        </div>
                        <p class="text-blue-100">
                            The color Blue represents the Party's pillars, values, identity and vision. It symbolizes our commitment to national unity, peaceful coexistence and tolerance, trust and integrity, visionary leadership and patriotism.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pledge Section -->
        <section class="bg-gradient-to-r from-blue-900 to-blue-700 rounded-xl p-12 text-center text-white shadow-2xl">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold mb-8">Our Pledge to Malawi</h2>
                <div class="text-xl leading-relaxed mb-8">
                    Our pledge is to unite the people of Malawi, regardless of tribe, race, colour, religion or creed, political belief or affiliation, so that together we can build the kind of Malawi we want for ourselves, our children and our grandchildren.
                </div>
                <div class="w-32 h-1 bg-yellow-500 mx-auto mb-8"></div>
                <p class="text-lg italic">
                    To provide sound economic and political leadership and to work with all Malawians, including those from other political parties, in the spirit of tolerance, understanding and reconciliation, thereby consolidating peace, harmony, security and stability as the basis for prosperity in our country.
                </p>
            </div>
        </section>
    </div>
</div>
@endsection