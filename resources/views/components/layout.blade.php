
<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    @vite(['resources/css/app.css'])
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class=" h-screen font-[Poppins-regular] bg-gradient-to-t from-[#8ab2c8] to-[#fcb9ec]">

    <header class=" bg-gray-100 h-22">
        <nav class="flex justify-between items-center w-[92%] mx-auto">
            <div>
                <img class=" w-auto h-16 mb-2" src="{{ asset('images/TaskFlow-v2.png') }}" alt="TaskFlow Logo">
            </div>
            <div
                class="nav-links bg-gray-100 md:static absolute  md:min-h-fit min-w-[60vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8 ">
                    <li>
                        <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'md:bg-[#4f7a91] md:hover:bg-[#3e6373] md:text-white md:shadow-lg  md:hover:shadow:lg' : 'text-black md:hover:drop-shadow-md md:hover:bg-gray-200' }}  rounded-full py-2 px-5">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('notes') }}" class="{{ Request::is('notes') ? 'md:bg-[#4f7a91] md:hover:bg-[#3e6373] md:text-white md:shadow-lg md:hover:shadow:lg' : 'text-black md:hover:drop-shadow-md md:hover:bg-gray-200' }}  rounded-full py-2 px-5">
                            Notes
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('about') }}" class="{{ Request::is('about') ? 'md:bg-[#4f7a91] md:hover:bg-[#3e6373] md:text-white md:shadow-lg md:hover:shadow:lg' : 'text-black md:hover:drop-shadow-md md:hover:bg-gray-200' }}  rounded-full py-2 px-5">
                            About
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('contact') }}" class="{{ Request::is('contact') ? 'md:bg-[#4f7a91] md:hover:bg-[#3e6373] md:text-white md:shadow-lg md:hover:shadow:lg' : 'text-black md:hover:drop-shadow-md md:hover:bg-gray-200' }}  rounded-full py-2 px-5">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center gap-6">
                <button class=" bg-[#4f7a91] text-white px-5 py-2 rounded-full hover:bg-[#3e6373]">Sign In</button>
                <ion-icon onclick="onToggleMenu(this)" name="menu"
                    class="text-3xl cursor-pointer md:hidden "></ion-icon>
            </div>
        </nav>


    </header>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

        </div>
    </main>
    <script>
        const navLinks = document.querySelector('.nav-links')

        function onToggleMenu(e) {
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[9%]')
            navLinks.classList.toggle('top-[-100%]')
        }
    </script>

</body>

</html>
