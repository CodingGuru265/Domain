

@extends('layouts.front', ['pageTitle' => 'About | APM'])

@section('content')
<div class="min-h-screen bg-gray-50">

    <!-- Hero Section -->
    <section class="py-16 md:py-24 bg-blue-700 text-white relative">
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
                                2014 - 2020
                            </span>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <div class="relative">
                        <div class="absolute inset-0 bg-yellow-500 rounded-full transform rotate-6"></div>
                        <div class="relative bg-white p-2 rounded-full shadow-2xl">
                            <img src="/assets/images/peter-1.jpeg" alt="Professor Arthur Peter Mutharika" 
                                 class="w-90 h-80 rounded-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Key Achievements Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-blue-900 mb-4">Key Achievements</h2>
                <div class="w-24 h-1 bg-yellow-500 mx-auto"></div>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2 text-center">Infrastructure Development</h3>
                    <p class="text-gray-700 text-center">Major infrastructure projects including roads, bridges, and public facilities across Malawi</p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-900" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2 text-center">Agricultural Programs</h3>
                    <p class="text-gray-700 text-center">Implementation of farm input subsidy programs and agricultural productivity initiatives</p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2 text-center">Education Advancement</h3>
                    <p class="text-gray-700 text-center">Expansion of educational opportunities and infrastructure development in schools and universities</p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-900" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2 text-center">Healthcare Improvements</h3>
                    <p class="text-gray-700 text-center">Enhanced healthcare services and infrastructure development in hospitals and clinics</p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12 1.586l-4 4v12.828l4-4V1.586zM3.707 3.293A1 1 0 002 4v10a1 1 0 00.293.707L6 18.414V5.586L3.707 3.293zM17.707 5.293L14 1.586v12.828l2.293 2.293A1 1 0 0018 16V6a1 1 0 00-.293-.707z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2 text-center">Economic Policies</h3>
                    <p class="text-gray-700 text-center">Implementation of economic policies aimed at poverty reduction and wealth creation</p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-900" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2 text-center">International Relations</h3>
                    <p class="text-gray-700 text-center">Strengthened diplomatic ties and international partnerships for national development</p>
                </div>
            </div>
        </div>
    </section>


@endsection

