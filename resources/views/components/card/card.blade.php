<x-card.a>
<div class="dark:bg-gradient-to-b dark:from-[#6a0dad] dark:to-[#1e40af] bg-gradient-to-r from-violet-400 to-purple-300 text-white 2xl:text-3xl p-4 shadow-lg rounded-xl grid 2xl:grid-cols-4 2xl:grid-rows-2 grid-cols-3 grid-row-1 mb-5 hover:ring-2 hover:ring-violet-950 hover:-translate-y-1 duration-300">
    <x-card.img ></x-card.img>
    <x-card.header>Seamlessly Manage Your Notes with TaskFlow</x-card.header>
    <x-card.body>{{ $slot }}</x-card.body> 
</div>
</x-card.a>