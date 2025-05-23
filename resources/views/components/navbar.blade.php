<nav class="bg-white sticky w-full z-20 top-0 left-0 border-b border-gray-200">
    <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
        <!-- Logo di kiri -->
        <a href="{{ url('/') }}" class="flex items-center">
            <img src="{{ asset('/img/devcom-logo.png') }}" class="w-12" alt="Devcom Logo">
        </a>

        <!-- Menu Utama (Desktop) -->
        <div class="hidden md:flex flex-1 justify-center">
            <ul class="flex space-x-6 text-center">
                <li><a href="{{ url('/') }}" class="text-gray-900 p-2 rounded-md hover:bg-gray-200 focus:ring">Home</a></li>
                <li><a href="#" class="text-gray-900 p-2 rounded-md hover:bg-gray-200 focus:ring">About</a></li>
                <li><a href="{{ url('/projects') }}" class="text-gray-900 p-2 rounded-md hover:bg-gray-200 focus:ring">Project</a></li>
                <li><a href="#" class="text-gray-900 p-2 rounded-md hover:bg-gray-200 focus:ring">Activity</a></li>
                <li><a href="#" class="text-gray-900 p-2 rounded-md hover:bg-gray-200 focus:ring">Team</a></li>
                <li><a href="#" class="text-gray-900 p-2 rounded-md hover:bg-gray-200 focus:ring">Contact</a></li>
            </ul>
        </div>

        <!-- Tombol hamburger (Mobile) -->
        <div x-data="{ open: false }" class="md:hidden">
            <button 
                @click="open = !open"
                class="p-2 w-10 h-10 text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            >
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>

            <!-- Menu Mobile -->
            <div 
                x-show="open"
                @click.away="open = false"
                class="absolute left-0 top-full w-full bg-white shadow-md md:hidden"
            >
                <ul class="flex flex-col text-center space-y-2 p-4">
                    <li><a href="{{ url('/') }}" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-200 focus:ring">Home</a></li>
                    <li><a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-200 focus:ring">About</a></li>
                    <li><a href="{{ url('/projects') }}" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-200 focus:ring">Project</a></li>
                    <li><a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-200 focus:ring">Activity</a></li>
                    <li><a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-200 focus:ring">Team</a></li>
                    <li><a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-200 focus:ring">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
