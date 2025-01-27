<x-layout>
    <x-slot:heading>
        Job page
    </x-slot:heading>
    
    <h2 class="font-bold texg-lg"> {{$job['title']}}</h2>

    <p>This job pays {{ $job['salary']}} per year.</p>
</x-layout>