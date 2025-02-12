
<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    @vite(['resources/css/app.css'])
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class=" h-screen font-[Poppins-regular] bg-indigo-200 dark:bg-gray-900">

   <!-- This is my nav bar -->
    <header class="dark:bg-gray-800  bg-white h-22 shadow-sm  z-1 w-full fixed">
        <nav class="flex justify-between items-center w-[92%] mx-auto">
            <div>
                <a href="/">
                    <picture>
                    <source class=" w-auto md:h-14 h-8 2xl:h-16 my-2" srcset="{{ asset('images/TaskFlow-v4-black-text.png') }}" alt="TaskFlow Logo" media="(prefers-color-scheme:light)" />
                    <source class=" w-auto md:h-14 h-8 2xl:h-16 my-2" srcset="{{ asset('images/TaskFlow-v4-white-text.png') }}" alt="TaskFlow Logo" media="(prefers-color-scheme:dark)" />

                    <img class="w-auto md:h-14 h-8 2xl:h-16 my-2" src="{{ asset('images/TaskFlow-v4-black-text.png') }}" alt="TaskflowLogo">
                </picture>
             </a>
                
            </div>
            <div
                class="nav-links bg-white dark:bg-gray-800 md:static absolute  md:min-h-fit min-w-[60vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8 ">
                    <li>
                        <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'md:bg-blue-500 md:hover:bg-blue-600 md:text-white md:shadow-lg  md:hover:shadow:lg' : 'text-black md:hover:drop-shadow-md md:hover:bg-[#BFCEDA] dark:md:hover:bg-gray-600' }}  dark:text-white rounded-full py-2 px-5 2xl:text-2xl">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('notes') }}" class="{{ Request::is('notes') ? 'md:bg-blue-500 md:hover:bg-blue-600 md:text-white md:shadow-lg md:hover:shadow:lg' : 'text-black md:hover:drop-shadow-md md:hover:bg-[#BFCEDA] dark:md:hover:bg-gray-600' }}  dark:text-white rounded-full py-2 px-5 2xl:text-2xl">
                            Notes
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('about') }}" class="{{ Request::is('about') ? 'md:bg-blue-500 md:hover:bg-blue-600 md:text-white md:shadow-lg md:hover:shadow:lg' : 'text-black md:hover:drop-shadow-md md:hover:bg-[#BFCEDA] dark:md:hover:bg-gray-600' }}  dark:text-white rounded-full py-2 px-5 2xl:text-2xl">
                            About
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('contact') }}" class="{{ Request::is('contact') ? 'md:bg-blue-500 md:hover:bg-blue-600 md:text-white md:shadow-lg md:hover:shadow:lg' : 'text-black md:hover:drop-shadow-md md:hover:bg-[#BFCEDA] dark:md:hover:bg-gray-600' }}  dark:text-white rounded-full py-2 px-5 2xl:text-2xl">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center gap-6">
                @guest
                <a href="{{ url('register')}}" class="{{ Request::is('register') ? 'md:bg-blue-500 md:hover:bg-blue-600 text-white md:shadow-md md:hover:shadow:lg' : 'text-black md:hover:drop-shadow-md md:hover:bg-[#BFCEDA] dark:md:hover:bg-gray-600' }} px-5 py-2 rounded-full 2xl:text-2xl dark:text-white">Register</a>
                <a href="{{ url('login')}}" class="{{ Request::is('login') ? 'md:bg-blue-500 md:hover:bg-blue-600 text-white md:shadow-md  md:hover:shadow:lg' : 'text-black md:hover:drop-shadow-md md:hover:bg-[#BFCEDA] dark:md:hover:bg-gray-600' }} px-5 py-2 rounded-full 2xl:text-2xl dark:text-white" >Login</a> 
                @endguest

                @auth
                    <h2 class="2xl:text-xl dark:text-white">Hi, {{ auth()->user()->first_name}}</h2>
                    <form method="POST" action="/logout">
                        @csrf
                        <button class='bg-blue-500 hover:bg-blue-600 text-white md:shadow-lg hover:shadow:lg px-5 py-2 rounded-full 2xl:text-2xl dark:text-white' type='submit'>Log Out</button>
                    </form>
                @endauth
                
                <ion-icon onclick="onToggleMenu(this)" name="menu"
                    class="text-3xl cursor-pointer md:hidden "></ion-icon>
            </div>
        </nav>
    </header>


    <main class="pt-24 md:pt-32">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{ $slot}}
        </div>
    </main>
    <script>
        const navLinks = document.querySelector('.nav-links')

        function onToggleMenu(e) {
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[16%]')
            navLinks.classList.toggle('top-[-100%]')
        }
    </script>

</body>

</html>
