@extends('layouts.front')

@section('content')
<div class="max-w-6xl mx-auto p-6 lg:p-8">
    <div class="text-center mb-12">
        <h1 class="text-5xl lg:text-3xl font-extrabold mb-4 text-[var(--theme-color)] tracking-tight">
            Full History of the Democratic Progressive Party (DPP)
        </h1>
        <div class="w-24 h-1 bg-[var(--theme-color)] mx-auto"></div>
    </div>

    <div class="space-y-8 text-gray-800 leading-relaxed">
        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-8 border-l-4 border-[var(--theme-color)]">
            <p class="text-lg leading-8 text-gray-700">
                From the time of independence, Malawi has been beset by various structural challenges. These have made it vulnerable to various shocks resulting in a low quality of life for many of its citizens. The Democratic Progressive Party (DPP), however, was set up to end this cycle, mostly by building a self-reliant nation propelled by economic growth and rural development.
            </p>
        </div>

        <div class="bg-white rounded-xl p-8 shadow-lg border border-gray-100">
            <div class="flex flex-col lg:flex-row items-center lg:items-start gap-8">
                <div class="flex-shrink-0">
                    <div class="w-48 h-56 bg-gradient-to-br from-gray-200 to-gray-300 rounded-lg shadow-md flex items-center justify-center overflow-hidden">
                        <img src="/assets/images/Bingu.png" 
                             alt="Prof. Bingu wa Mutharika - Founder of DPP" 
                             class="w-full h-full object-cover rounded-lg">
                    </div>
                    <p class="text-center text-sm text-gray-600 mt-2 font-medium">Prof. Bingu wa Mutharika<br>Founder & 1st President</p>
                </div>
                <div class="flex-1">
                    <p class="text-lg leading-8 text-gray-700 mb-6">
                        Established in <span class="font-semibold text-[var(--theme-color)]">2005</span> as a challenge to the rooted culture of corruption and impunity that had stifled the growth of Malawi, the DPP has been tried, tested and well-proven. 
                        The core beliefs and values of the DPP are in people-centered development approaches, long-term infrastructure developments, people-driven economic stewardship, household food security, and a culture of respect for human rights and human dignity for all.
                    </p>
                    <p class="text-lg leading-8 text-gray-700">
                        This is our legacy as envisioned by our founder, <span class="font-bold text-[var(--theme-color)]">His Excellency Late Professor Bingu wa Mutharika</span>.
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-[var(--theme-color)] bg-opacity-10 rounded-xl p-8 border border-[var(--theme-color)] border-opacity-20">
            <p class="text-2xl font-bold italic text-[var(--custom-white)] text-center leading-relaxed">
                "We are the DPP. We deliver what we promise, and we promise only that we can deliver."
            </p>
        </div>

        <div class="mt-16">
            <div class="flex items-center mb-8">
                <div class="flex-shrink-0 w-12 h-12 bg-[var(--theme-color)] rounded-full flex items-center justify-center mr-4">
                    <span class="text-white font-bold text-lg">1</span>
                </div>
                <h2 class="text-4xl font-bold text-[var(--theme-color)]">2005 - 2012</h2>
            </div>
            
            <div class="bg-white rounded-xl p-8 shadow-lg border border-gray-100 space-y-6">
                <p class="text-lg leading-8 text-gray-700">
                    The Democratic Progressive Party (DPP) was formed in <span class="font-semibold text-[var(--theme-color)]">February 2005</span> by the then Malawian President, Late His Excellency Prof. Bingu wa Mutharika after his resignation from the United Democratic Front, a party under which he was elected state president due to policy differences. 
                </p>

                <div class="bg-gray-50 rounded-lg p-6 border-l-4 border-[var(--theme-color)]">
                    <blockquote class="text-lg italic text-gray-600 leading-relaxed">
                        "I have decided to resign from the UDF with immediate effect because firstly I no longer have support within the party... my sin as far as the UDF is concerned is because of my anti-corruption stand."
                    </blockquote>
                </div>

                <p class="text-lg leading-8 text-gray-700">
                    It was, therefore, established to restore the confidence of the people of Malawi in their government. Malawians wanted a government they could trust, a government that could deliver on its promises. Thus, the DPP was a response to this desire.
                </p>

                <div class="bg-green-50 rounded-lg p-6 border-l-4 border-green-500">
                    <p class="text-lg leading-8 text-gray-700">
                        In his first term as President, the late Prof. Bingu wa Mutharika delivered on his campaign promises and beyond. Courtesy of the <span class="font-semibold text-green-600">Farm Input Subsidy Programme (FISP)</span> that he initiated, Malawi was able to turn a corner when, for the first time since independence, it was able to produce a surplus <span class="font-bold text-green-600">1 million tons of maize</span>.
                    </p>
                </div>

                <p class="text-lg leading-8 text-gray-700">
                    A trained economist, Mutharika further focused on rebuilding Malawi's battered economy, helping Malawi attain the status of <span class="font-bold text-[var(--theme-color)]">Malawi's second fastest growing economy in 2009</span>. The trickle down of that economic growth were the various infrastructural works that Mutharika delivered including roads, hospitals, schools, a world standard conference centre and a university campus.
                </p>

                <div class="bg-blue-50 rounded-lg p-6 border-l-4 border-blue-500">
                    <p class="text-lg leading-8 text-gray-700">
                        As per his trademark, <span class="text-xl font-bold italic text-blue-600">"let the work of my hands speak for me"</span>, the achievements of Late Bingu wa Mutharika within his first term won the DPP the hearts and trust of majority Malawians. The party quickly emerged as a favourite among Malawians across regional and tribal divides.
                    </p>
                </div>

                <div class="bg-yellow-50 rounded-lg p-6 border-l-4 border-yellow-500">
                    <p class="text-lg leading-8 text-gray-700">
                        In the <span class="font-semibold text-yellow-600">2009 Presidential and Parliamentary Elections</span>, the DPP won with a landslide both the presidential and parliamentary ballots. In the presidential race, Late Prof. Bingu wa Mutharika won by <span class="font-bold text-yellow-600 text-xl">69%</span> of the total votes against the coalition of the Malawi Congress Party and the United Democratic Front that he had broken away from. The party also won an overwhelming <span class="font-bold text-yellow-600">146 seats out of the 193 seats</span> in the parliamentary election.
                    </p>
                </div>

                <div class="bg-red-50 rounded-lg p-6 border-l-4 border-red-500">
                    <p class="text-lg leading-8 text-gray-700">
                        Sadly, on <span class="font-bold text-red-600">April 5, 2012</span> a dark cloud fell on the Malawi nation and indeed the Democratic Progressive Party. President Prof. Bingu wa Mutharika died of a cardiac arrest while in office. The DPP lost power and went into opposition.
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-16">
            <div class="flex items-center mb-8">
                <div class="flex-shrink-0 w-12 h-12 bg-[var(--theme-color)] rounded-full flex items-center justify-center mr-4">
                    <span class="text-white font-bold text-lg">2</span>
                </div>
                <h2 class="text-4xl font-bold text-[var(--theme-color)]">2012–2014: DPP's Rebuilding and the Rise of Peter Mutharika</h2>
            </div>

            <div class="bg-white rounded-xl p-8 shadow-lg border border-gray-100 space-y-6">
                <div class="flex flex-col lg:flex-row items-start gap-8 mb-6">
                    <div class="flex-1">
                        <p class="text-lg leading-8 text-gray-700">
                            Following the sudden death of President Bingu wa Mutharika in April 2012, the Democratic Progressive Party (DPP) was thrown into a state of shock and uncertainty. 
                            Amid this turbulence, the National Governing Council of the DPP convened and unanimously appointed 
                            <span class="font-bold text-[var(--theme-color)]">HE Prof. Arthur Peter Mutharika (APM)</span>—a distinguished constitutional law expert, former Cabinet Minister, and younger brother to the late president—as interim Party President. 
                            At the time, the DPP had lost power and found itself in opposition for the first time since its formation. 
                            From July 2012, APM took on the enormous responsibility of rebuilding the party from the ground up. He began by reactivating the party’s grassroots networks, reviving district and regional structures, and restoring public confidence in the party’s mission. 
                        </p>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="w-48 h-56 bg-gradient-to-br from-gray-200 to-gray-300 rounded-lg shadow-md flex items-center justify-center overflow-hidden">
                            <img src="/assets/images/leaders/Peter-Mutharika.jpg" 
                                 alt="Prof. Arthur Peter Mutharika (APM)" 
                                 class="w-full h-full object-cover rounded-lg">
                        </div>
                        <p class="text-center text-sm text-gray-600 mt-2 font-medium">Prof. Arthur Peter Mutharika<br>Current President (APM)</p>
                    </div>
                </div>

                <div class="bg-purple-50 rounded-lg p-6 border-l-4 border-purple-500">
                    <p class="text-lg leading-8 text-gray-700">
                        He crisscrossed Malawi, reviving hope in the millions of DPP supporters and Malawians in general. In <span class="font-semibold text-purple-600">April, 2013</span>, the DPP held its National Elective Conference at which APM was elected President and Presidential candidate for the Party. He led the party into victory in the election in <span class="font-bold text-purple-600">2014</span>.
                    </p>
                </div>

                <p class="text-lg leading-8 text-gray-700">
                    The Party also secured a plurality in Parliament and many local council positions marking its political comeback and restoration of the party's dominance nationally.
                </p>

                <div class="bg-indigo-50 rounded-lg p-6 border-l-4 border-indigo-500">
                    <p class="text-lg leading-8 text-gray-700">
                        <span class="font-bold text-indigo-600">APM</span>, as Prof. Arthur Peter Mutharika is fondly called, remains the Party's President having been re-elected at the Party's convention in <span class="font-semibold text-indigo-600">July 2018</span> and <span class="font-semibold text-indigo-600">August 2024</span>. He is the torchbearer of the party in the election on <span class="font-bold text-indigo-600 text-xl">16 September 2025</span>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection