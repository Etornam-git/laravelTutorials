<!-- calling html tags as layouts -->
<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>
    <h1>{{ $greeting }}, {{ $name }} This is the home page here</h1>     

 </x-layout>