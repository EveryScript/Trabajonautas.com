<header class="text-gray-600 body-font dark:bg-tbn-dark dark:text-tbn-light">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a href="{{ route('welcome') }}"
            class="flex title-font font-medium items-center text-tbn-dark dark:text-tbn-light mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="2"
                class="w-10 h-10 text-white p-2 bg-tbn-cyan dark:bg-tbn-blue rounded-full" viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">Trabajonautas</span>
        </a>
        @auth
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center text-tbn-blue dark:text-tbn-light">
                <a href="{{ url('/dashboard') }}" class="mr-5 hover:text-tbn-cyan">{{ auth()->user()->name }}</a>
            </nav>
        @else
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center text-tbn-blue dark:text-tbn-light">
                <a href="{{ route('login') }}" class="mr-5 hover:text-tbn-cyan">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="bg-tbn-cyan border-0 py-1 px-3 focus:outline-none hover:bg-tbn-blue rounded text-base md:mt-0">Sign
                        in</a>
                @endif
            </nav>
        @endauth
    </div>
</header>
