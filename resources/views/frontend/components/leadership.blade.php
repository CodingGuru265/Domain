

@extends('layouts.front', ['pageTitle' => ' DPP | Leadership'])

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


    <!-- Key Achievements Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-blue-900 mb-4">Vice Presidents</h2>
                <div class="w-24 h-1 bg-yellow-500 mx-auto"></div>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="w-32 h-32 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img class="p-2 max-w-full h-auto" src="{{ asset('assets/images/mhango.png') }}"  />
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2 text-center">Hon Jappie Mhango</h3>
                    <p class="text-gray-700 text-center">Northern Region</p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="w-32 h-32 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img class="p-2 max-w-full h-auto" src="{{ asset('assets/images/gagata.png') }}"  />
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2 text-center">Hon Alfred Gagata</h3>
                    <p class="text-gray-700 text-center">Central Region</p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="w-32 h-32 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img class="p-2 max-w-full h-auto" src="{{ asset('assets/images/msaka.png') }}"  />
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2 text-center">Hon Bright Msaka</h3>
                    <p class="text-gray-700 text-center">Eastern Region</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="w-32 h-32 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img class="p-2 max-w-full h-auto" src="{{ asset('assets/images/mwanamveka.png') }}"  />
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2 text-center">Hon Joseph Mathyola Mwanamveka</h3>
                    <p class="text-gray-700 text-center">Southern Region</p>
                </div>
                
            </div>

            
            <div class="text-center mb-12 mt-12">
                <h2 class="text-4xl font-bold text-blue-900 mb-4">Central Executive Committee</h2>
                <div class="w-24 h-1 bg-yellow-500 mx-auto"></div>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="w-32 h-32 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img class="p-2 max-w-full h-auto" src="{{ asset('assets/images/peter.png') }}"  />
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2 text-center">Hon Peter Mukhito</h3>
                    <p class="text-gray-700 text-center">Secretary General</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="w-32 h-32 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img class="p-2 max-w-full h-auto" src="{{ asset('assets/images/edgar.png') }}"  />
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2 text-center">Hon Edgar Tembo</h3>
                    <p class="text-gray-700 text-center">Treasurer General </p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="w-32 h-32 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img class="p-2 max-w-full h-auto" src="{{ asset('assets/images/norman.png') }}"  />
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2 text-center">Hon Norman Chisale </h3>
                    <p class="text-gray-700 text-center">Director of Youth</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="w-32 h-32 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img class="p-2 max-w-full h-auto" src="{{ asset('assets/images/mry.png') }}"  />
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2 text-center">Hon Mary Thom Navicha</h3>
                    <p class="text-gray-700 text-center">Director of Women</p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="w-32 h-32 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img class="p-2 max-w-full h-auto" src="{{ asset('assets/images/sameer.png') }}"  />
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2 text-center">Hon Sameer Suleman</h3>
                    <p class="text-gray-700 text-center">National Organizing Sec. </p>
                </div>
                

                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="w-32 h-32 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img class="p-2 max-w-full h-auto" src="{{ asset('assets/images/jean.png') }}"  />
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2 text-center">Hon Jean Mathanga</h3>
                    <p class="text-gray-700 text-center">Director of Elections</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="w-32 h-32 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img class="p-2 max-w-full h-auto" src="{{ asset('assets/images/ben.png') }}"  />
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2 text-center">Hon Ben Malunga Phiri</h3>
                    <p class="text-gray-700 text-center">Director of Political Affairs</p>
                </div>
                        
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="w-32 h-32 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img class="p-2 max-w-full h-auto" src="{{ asset('assets/images/chipi.png') }}"  />
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2 text-center">Hon Chipiliro Mpinganjira</h3>
                    <p class="text-gray-700 text-center">Director of Legal Affairs</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="w-32 h-32 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img class="p-2 max-w-full h-auto" src="{{ asset('assets/images/shadrek.png') }}"  />
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2 text-center">Hon Shadric Namalomba</h3>
                    <p class="text-gray-700 text-center">National Publicity Secretary</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="w-32 h-32 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img class="p-2 max-w-full h-auto" src="{{ asset('assets/images/francis.png') }}"  />
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2 text-center">Hon Francis Mphepo</h3>
                    <p class="text-gray-700 text-center">Administrative Secretary</p>
                </div>     
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="w-32 h-32 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img class="p-2 max-w-full h-auto" src="{{ asset('assets/images/ishmail.png') }}"  />
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2 text-center">Hon Ishmail Jones Milanzi</h3>
                    <p class="text-gray-700 text-center">Deputy Administrative Secretary</p>
                </div>   
            </div>

        </div>
    </section>


@endsection

