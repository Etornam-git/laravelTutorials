<!-- calling html tags as layouts -->
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
 </x-layout>