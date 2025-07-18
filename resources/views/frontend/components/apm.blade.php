

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

    <!-- Quick Facts Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="grid md:grid-cols-4 gap-6">
                <div class="text-center p-6 bg-blue-50 rounded-xl">
                    <div class="w-16 h-16 bg-blue-900 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-blue-900 mb-2">Education</h3>
                    <p class="text-gray-600">PhD in International Law</p>
                </div>
                
                <div class="text-center p-6 bg-yellow-50 rounded-xl">
                    <div class="w-16 h-16 bg-yellow-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-900" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-blue-900 mb-2">Profession</h3>
                    <p class="text-gray-600">International Lawyer & Academic</p>
                </div>
                
                <div class="text-center p-6 bg-blue-50 rounded-xl">
                    <div class="w-16 h-16 bg-blue-900 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-blue-900 mb-2">Experience</h3>
                    <p class="text-gray-600">40+ Years in Law & Academia</p>
                </div>
                
                <div class="text-center p-6 bg-yellow-50 rounded-xl">
                    <div class="w-16 h-16 bg-yellow-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-900" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-blue-900 mb-2">Leadership</h3>
                    <p class="text-gray-600">DPP President Since 2014</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Biography Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-blue-900 mb-4">Biography</h2>
                <div class="w-24 h-1 bg-yellow-500 mx-auto"></div>
            </div>
            
            <div class="grid lg:grid-cols-3 gap-8">
                <div class="lg:col-span-2">
                    <div class="bg-white p-8 rounded-xl shadow-lg">
                        <h3 class="text-2xl font-bold text-blue-900 mb-6">Early Life & Education</h3>
                        <p class="text-gray-700 mb-6 leading-relaxed">
                            Professor Arthur Peter Mutharika was born on July 18, 1940, in Thyolo, Malawi. He is the younger brother of the late President Bingu wa Mutharika, founder of the Democratic Progressive Party. His early education laid the foundation for what would become a distinguished career in international law and academia.
                        </p>
                        <p class="text-gray-700 mb-6 leading-relaxed">
                            He pursued higher education abroad, earning his Bachelor of Laws (LLB) degree from the University of London in 1965. He then went on to obtain his Master of Laws (LLM) from Yale Law School in 1966, and later completed his Doctor of Philosophy (PhD) in International Law from Yale University in 1969.
                        </p>
                        
                        <h3 class="text-2xl font-bold text-blue-900 mb-6 mt-8">Academic Career</h3>
                        <p class="text-gray-700 mb-6 leading-relaxed">
                            Professor Mutharika spent over four decades in academia, primarily in the United States. He served as a professor at various prestigious institutions, including Rutgers University, where he taught international law and constitutional law. His academic work focused on international law, constitutional law, and human rights.
                        </p>
                        <p class="text-gray-700 mb-6 leading-relaxed">
                            He authored numerous scholarly articles and books on international law, making significant contributions to legal scholarship. His expertise in international law would later prove invaluable in his role as a political leader and statesman.
                        </p>
                    </div>
                </div>
                
                <div class="lg:col-span-1">
                    <div class="bg-blue-900 p-8 rounded-xl text-white shadow-lg mb-8">
                        <h3 class="text-xl font-bold text-yellow-500 mb-4">Quick Biography</h3>
                        <div class="space-y-4">
                            <div class="flex justify-between">
                                <span class="text-blue-200">Born:</span>
                                <span>July 18, 1940</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-blue-200">Birthplace:</span>
                                <span>Thyolo, Malawi</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-blue-200">Education:</span>
                                <span>PhD Yale University</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-blue-200">Profession:</span>
                                <span>International Lawyer</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-blue-200">Political Party:</span>
                                <span>DPP</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-yellow-50 p-6 rounded-xl border-l-4 border-yellow-500">
                        <h4 class="font-bold text-blue-900 mb-2">Notable Quote</h4>
                        <p class="text-gray-700 italic">
                            "We must work together to build a Malawi that is prosperous, united, and peaceful for all our people."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Presidential Journey Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-blue-900 mb-4">Presidential Journey</h2>
                <div class="w-24 h-1 bg-yellow-500 mx-auto"></div>
            </div>
            
            <div class="space-y-8">
                <!-- 2014 Election -->
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="md:w-1/2">
                        <div class="bg-blue-50 p-8 rounded-xl">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center mr-4">
                                    <span class="text-blue-900 font-bold">2014</span>
                                </div>
                                <h3 class="text-2xl font-bold text-blue-900">Presidential Victory</h3>
                            </div>
                            <p class="text-gray-700">
                                Professor Mutharika won the 2014 presidential election as the DPP candidate, defeating incumbent President Joyce Banda. He garnered 36.4% of the vote in a highly contested tripartite election, marking the beginning of his presidency.
                            </p>
                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <img src="/assets/images/peter-1.jpeg" alt="2014 Election Victory" class="w-full rounded-lg shadow-lg">
                    </div>
                </div>
                
                <!-- First Term Achievements -->
                <div class="flex flex-col md:flex-row-reverse items-center gap-8">
                    <div class="md:w-1/2">
                        <div class="bg-yellow-50 p-8 rounded-xl">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-blue-900 rounded-full flex items-center justify-center mr-4">
                                    <span class="text-yellow-500 font-bold">2019</span>
                                </div>
                                <h3 class="text-2xl font-bold text-blue-900">Re-election</h3>
                            </div>
                            <p class="text-gray-700">
                                In 2019, Professor Mutharika was re-elected for a second term, though the election results were later nullified by the Constitutional Court. He continued to serve as DPP President, leading the party through challenging times.
                            </p>
                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <img src="/assets/images/leaders/Peter-Mutharika.jpg" alt="2019 Campaign" class="w-full rounded-lg shadow-lg">
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

    <!-- Leadership Philosophy Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-blue-900 mb-4">Leadership Philosophy</h2>
                <div class="w-24 h-1 bg-yellow-500 mx-auto"></div>
            </div>
            
            <div class="flex flex-col lg:flex-row gap-8 items-center">
                <div class="lg:w-1/2">
                    <img src="/assets/images/leaders/Peter-Mutharika.jpg" alt="APM Leadership" class="w-full rounded-lg shadow-lg">
                </div>
                <div class="lg:w-1/2">
                    <div class="bg-blue-50 p-8 rounded-xl">
                        <h3 class="text-2xl font-bold text-blue-900 mb-6">Visionary Leadership</h3>
                        <p class="text-gray-700 mb-6 leading-relaxed">
                            Professor Mutharika's leadership philosophy is rooted in the principles of democratic governance, national unity, and sustainable development. He believes in inclusive leadership that brings together all Malawians regardless of their background.
                        </p>
                        <p class="text-gray-700 mb-6 leading-relaxed">
                            His approach to leadership emphasizes the importance of education, rule of law, and economic development as pillars for national progress. He advocates for policies that prioritize the welfare of all citizens and promote equitable distribution of resources.
                        </p>
                        <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4">
                            <p class="text-blue-900 font-semibold italic">
                                "Leadership is about serving the people and creating opportunities for everyone to prosper and contribute to national development."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  


@endsection

