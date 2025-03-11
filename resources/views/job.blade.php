<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
        <h2 class="text-xl font-bold "> {{ $job['title'] }} </h2>
        <p class="text-lg">This job pays {{ $job['Salary'] }} per year </p>
    </ul>
 </x-layout>