@props(['active' => false])


<a class="{{ $active ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium"
   aria-current="{{ $active ? 'page': 'false' }}"
{{ $attributes }}>{{ $slot }}</a>
<!--
<x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
<x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
<x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
-->
