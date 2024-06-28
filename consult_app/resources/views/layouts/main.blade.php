<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @yield('link')

</head>
<body class="font-sans antialiased">
    <div class="bg-gray-50 text-black/50 min-h-screen flex flex-col justify-center">
        <div class="w-full">
            <header>
                @if (Route::has('login'))
                <nav class="bg-body-tertiary w-full shadow-2xl">
                    <div class="container mx-auto flex justify-between items-center px-4 lg:px-0">
                
                        <div class="flex items-center space-x-2">
                            <img src="{{ asset('build/assets/images/TeleDoc.png') }}" alt="#" class="max-w-20 max-h-20">
                            <a href="{{ route('welcome') }}" class="text-lg font-semibold text-black ml-2 no-underline">TeleDoc</a>
                        </div>
                    
                        <div class="hidden lg:flex lg:items-center lg:justify-center flex-grow" id="navbarNavDropdown">
                            <ul class="flex items-center space-x-8 list-none">
                                <li>
                                    <a href="{{ route('welcome') }}" class="text-black hover:text-black/70 no-underline">Home</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}" class="text-black hover:text-black/70 no-underline">About Us</a>
                                </li>
                                <li class="relative group">
                                    <a href="#" class="text-black hover:text-black/70 no-underline">Services</a>
                                    <ul class="absolute left-0 w-48 bg-white shadow-lg rounded-lg z-10 hidden group-hover:block">
                                        <li><a href="{{ route('book-an-appointment') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-100 no-underline">Book An Appointment</a></li>
                                        <li><a href="{{ route('form-diagnosis') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-100 no-underline">Form Diagnosis</a></li>
                                        <li><a href="{{ route('contact-us') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-100 no-underline">Contact Us</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                
                        <div class="hidden lg:flex lg:items-center space-x-4 list-none">
                            @auth
                            <li>
                                <a href="{{ url('/dashboard') }}" class="px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] no-underline">Dashboard</a>
                            </li>
                            @else
                            <li>
                                <a href="{{ route('login') }}" class="px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] no-underline">Log in</a>
                            </li>
                            @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}" class="px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] no-underline">Register</a>
                            </li>
                            @endif
                            @endauth
                        </div>
        
                        <button class="navbar-toggler lg:hidden focus:outline-none focus-visible:ring-[#FF2D20]">
                            <svg class="w-6 h-6 text-black" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 6H20M4 12H20M4 18H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </button>
                    </div>
                </nav>
                @endif
            </header>

            <main class="mt-6">
                @yield('content')
            </main>

            <footer class="py-16 text-center text-sm text-black">
            </footer>
        </div>
    </div>
</body>
</html>
