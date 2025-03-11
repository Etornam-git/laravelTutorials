<!-- calling html tags as layouts -->
<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
        <li>
            <a href="">
                <strong>{{ $job['title'] }}</strong>:  pay {{ $job['Salary'] }} per month
            </a>
         </li>
        
        @endforeach
    </ul>
 </x-layout>