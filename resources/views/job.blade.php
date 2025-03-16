{{-- <x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
        <h2 class="text-xl font-bold "> {{ $job['title'] }} </h2>
        <p class="text-lg">This job pays {{ $job['Salary'] }} per year </p>
    </ul>
 </x-layout> --}}

 <x-layout>
    <x-slot:heading>
        Job Details
    </x-slot:heading>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white rounded-2xl shadow-lg p-8 sm:p-12">
            <!-- Back to Jobs link -->
            <div class="mb-8">
                <a href="/jobs" class="inline-flex items-center text-blue-600 hover:text-blue-800 transition-colors">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Back to All Jobs
                </a>
            </div>

            <!-- Main Job Header -->
            <header class="mb-8">
                <div class="flex items-center justify-between mb-6">
                    <h1 class="text-4xl font-bold text-gray-900">{{ $job['title'] }}</h1>
                    <span class="inline-flex items-center px-4 py-2 bg-green-100 text-green-800 rounded-full text-sm font-semibold">
                        ${{ $job['Salary'] }}/year
                    </span>
                </div>

                <div class="flex flex-wrap gap-4 text-gray-600">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                        {{ $job['department'] ?? 'Engineering' }}
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        {{ $job['location'] ?? 'Remote' }}
                    </div>
                   
                </div>
            </header>

            <!-- Main Content Grid -->
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Job Details -->
                <div class="md:col-span-2 space-y-8">
                    <section>
                        <h2 class="text-2xl font-semibold text-gray-900 mb-4">Job Description</h2>
                        <div class="prose max-w-none text-gray-600">
                            {!! $job['description'] !!}
                        </div>
                    </section>

                </div>

                <!-- Sidebar -->
               
        
        </div>
    </div>
</x-layout>