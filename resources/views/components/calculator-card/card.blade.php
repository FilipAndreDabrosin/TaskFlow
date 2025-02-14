<x-calculator-card.a>
<div class="dark:bg-slate-800 bg-indigo-300 text-white 2xl:text-3xl p-4 shadow-lg rounded-xl grid 2xl:grid-cols-4 2xl:grid-rows-1 grid-cols-3 grid-row-1 mb-7 hover:ring-2 dark:hover:ring-gray-950 hover:-translate-y-1 duration-300">
    <x-calculator-card.icon ></x-calculator-card.icon>  
    <x-card.header>Do your calculations here with TaskFlow Calculator!
    </x-card.header>
    <x-card.body>{{ $slot }}</x-card.body> 
</div>
</x-card.a>