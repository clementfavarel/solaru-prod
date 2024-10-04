<nav class="hidden lg:block fixed top-0 left-0 w-full h-20 bg-white shadow-lg z-10 text-dark">
    <div class="max-w-7xl mx-auto h-full flex items-center justify-between">
        <a href="{{ route('home') }}" class="flex gap-4 items-center">
            <img src="/img/logo.webp" alt="Solaru Form logo" class="w-40">
        </a>
        <ul class="flex items-center gap-2">
            <li>
                <a href="{{ route('home') }}"
                    class="p-2 text-lg {{ request()->routeIs('home') ? 'text-[#825A7E]' : 'text-black/50 hover:text-[#825A7E]' }}">Accueil</a>
            </li>
            <li>
                <a href="{{ route('formations') }}"
                    class="p-2 text-lg {{ request()->routeIs('formations.*') ? 'text-[#825A7E]' : 'text-black/50 hover:text-[#825A7E]' }}">Formations</a>
            </li>
            <li>
                <a href="{{ route('localisation') }}"
                    class="p-2 text-lg {{ request()->routeIs('localisation') ? 'text-[#825A7E]' : 'text-black/50 hover:text-[#825A7E]' }}">Localisation</a>
            </li>
            <li>
                <a href="{{ route('contact.show') }}"
                    class="p-2 text-lg text-white font-semibold bg-[#825A7E] px-4 py-3 rounded-lg hover:hover:bg-[#9E7594] transition ease-in-out">Contact</a>
            </li>
        </ul>
    </div>
</nav>

<nav class="block lg:hidden fixed bottom-0 left-0 w-full h-20 bg-white z-10 text-dark rounded-t-lg">
    <div class="h-full px-4 py-2 flex items-center justify-around">
        <a href="{{ route('home') }}"
            class="flex flex-col gap-1 items-center {{ request()->routeIs('home') ? 'text-[#825A7E]' : 'text-gray-400' }}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home w-6">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                <polyline points="9 22 9 12 15 12 15 22"></polyline>
            </svg>
            <p class="text-xs">Accueil</p>
        </a>
        <a href="{{ route('formations') }}"
            class="flex flex-col gap-1 items-center {{ request()->routeIs('formations.*') ? 'text-[#825A7E]' : 'text-gray-400' }}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book w-6">
                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
            </svg>
            <p class="text-xs">Formations</p>
        </a>
        <a href="{{ route('localisation') }}"
            class="flex flex-col gap-1 items-center {{ request()->routeIs('localisation') ? 'text-[#825A7E]' : 'text-gray-400' }}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin w-6">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                <circle cx="12" cy="10" r="3"></circle>
            </svg>
            <p class="text-xs">Localisation</p>
        </a>
        <a href="{{ route('contact.show') }}"
            class="flex flex-col gap-1 items-center {{ request()->routeIs('contact.show') ? 'text-[#825A7E]' : 'text-gray-400' }}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info w-6">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="12" y1="16" x2="12" y2="12"></line>
                <line x1="12" y1="8" x2="12.01" y2="8"></line>
            </svg>
            <p class="text-xs">Contact</p>
        </a>
    </div>
</nav>
