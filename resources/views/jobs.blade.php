{{-- <!-- calling html tags as layouts -->
<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
        <li>
            <a href="/job/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                <strong>{{ $job['title'] }}</strong>:  pay {{ $job['Salary'] }} per month
            </a>
         </li>
        @endforeach
    </ul>
 </x-layout> --}}


 <x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="mb-12 text-center">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Career Opportunities</h1>
            <p class="text-lg text-gray-600">Find your next professional challenge</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach ($jobs as $job)
            <div class="relative bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 border border-gray-100">
                <div class="p-6">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <h2 class="text-xl font-semibold text-gray-900 mb-2">
                                <a href="/job/{{ $job->id}}" class="hover:text-blue-600 transition-colors">
                                    {{ $job->title }}
                                </a>
                                <p>Employer: <span class="inline-block bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">
                                    {{ $job->employer->name }}
                                </span></p>
                            </h2>
                            <div class="flex items-center gap-2 mb-4">
                                <span class="inline-block bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">
                                    {{ $job->Salary }}/month
                                </span>
                                <span class="text-gray-500 text-sm">• {{ $job->location ?? 'Remote' }}</span>
                            </div>
                            <div class="flex items-center gap-2 text-sm text-gray-500">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                </svg>
                                <span>{{ $job->schedule ?? 'Full-time' }}</span>
                            </div>
                        </div>
                       
                    </div>
                    
                    <div class="mt-4 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            @foreach($tag->name ?? [] as $tag)
                            <span class="inline-flex items-center px-3 py-1 rounded-full bg-gray-100 text-gray-600 text-sm">
                                {{ $tag }}
                            </span>
                            @endforeach
                        </div>
                        <a href="/job/{{ $job['id'] }}" class="flex items-center text-blue-600 hover:text-blue-800 transition-colors">
                            View Details
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                @if($job['new'])
                <span class="absolute top-4 right-4 inline-flex items-center px-3 py-1 rounded-full bg-green-100 text-green-800 text-sm font-medium">
                    New
                </span>
                @endif
            </div>
            @endforeach
        </div>

        @if(count($jobs) === 0)
        <div class="text-center py-12">
            <div class="mb-4 text-gray-400">
                <svg class="mx-auto h-12 w-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
            </div>
            <h3 class="text-gray-500 text-lg">No current openings</h3>
        </div>
        @endif
        <div> {{ $jobs->links() }} </div>
    </div>
</x-layout>