<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    {{-- Login verification --}}
    @if (Route::has('login'))
        <livewire:welcome.navigation />
    @endif
    {{-- Main content --}}
    <main class="dark:bg-gray-800">
        <section class="text-tbn-dark body-font">
            <div class="container py-4 mx-auto">
                <div class="text-center w-full mb-4">
                    <h1 class="sm:text-3xl text-2xl font-bold title-font text-center text-gray-900 mb-2">Encuentra tu
                        próximo trabajo ahora mismo</h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Inicia la busqueda y prepárate para despegar
                        en el mundo laboral desde cualquier lugar de Bolivia.</p>
                </div>
                {{-- Recent announcements --}}
                <div class="grid grid-cols-2 gap-4">
                    <div
                        class="w-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left
                                bg-gray-200 p-4 rounded-lg">
                        <img alt="team"
                            class="flex-shrink-0 rounded-lg w-20 h-20 object-cover object-center sm:mb-0 mb-4"
                            src="https://dummyimage.com/200x200">
                        <div class="flex-grow sm:pl-8 text-sm">
                            <h2 class="title-font font-bold text-lg text-gray-900">Lorem ipsum dolor sans</h2>
                            <h3 class="text-gray-500 mb-1">Empresa.SRL</h3>
                            <p class="mb-1">Publicado hace 5 dias</p>
                        </div>
                    </div>
                    <div
                        class="w-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left
                                bg-gray-200 p-4 rounded-lg">
                        <img alt="team"
                            class="flex-shrink-0 rounded-lg w-20 h-20 object-cover object-center sm:mb-0 mb-4"
                            src="https://dummyimage.com/200x200">
                        <div class="flex-grow sm:pl-8 text-sm">
                            <h2 class="title-font font-bold text-lg text-gray-900">Lorem ipsum dolor sans</h2>
                            <h3 class="text-gray-500 mb-1">Empresa.SRL</h3>
                            <p class="mb-1">Publicado hace 5 dias</p>
                        </div>
                    </div>
                    <div
                        class="w-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left
                                bg-gray-200 p-4 rounded-lg">
                        <img alt="team"
                            class="flex-shrink-0 rounded-lg w-20 h-20 object-cover object-center sm:mb-0 mb-4"
                            src="https://dummyimage.com/200x200">
                        <div class="flex-grow sm:pl-8 text-sm">
                            <h2 class="title-font font-bold text-lg text-gray-900">Lorem ipsum dolor sans</h2>
                            <h3 class="text-gray-500 mb-1">Empresa.SRL</h3>
                            <p class="mb-1">Publicado hace 5 dias</p>
                        </div>
                    </div>
                    <div
                        class="w-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left
                                bg-gray-200 p-4 rounded-lg">
                        <img alt="team"
                            class="flex-shrink-0 rounded-lg w-20 h-20 object-cover object-center sm:mb-0 mb-4"
                            src="https://dummyimage.com/200x200">
                        <div class="flex-grow sm:pl-8 text-sm">
                            <h2 class="title-font font-bold text-lg text-gray-900">Lorem ipsum dolor sans</h2>
                            <h3 class="text-gray-500 mb-1">Empresa.SRL</h3>
                            <p class="mb-1">Publicado hace 5 dias</p>
                        </div>
                    </div>
                    <div
                        class="w-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left
                                bg-gray-200 p-4 rounded-lg">
                        <img alt="team"
                            class="flex-shrink-0 rounded-lg w-20 h-20 object-cover object-center sm:mb-0 mb-4"
                            src="https://dummyimage.com/200x200">
                        <div class="flex-grow sm:pl-8 text-sm">
                            <h2 class="title-font font-bold text-lg text-gray-900">Lorem ipsum dolor sans</h2>
                            <h3 class="text-gray-500 mb-1">Empresa.SRL</h3>
                            <p class="mb-1">Publicado hace 5 dias</p>
                        </div>
                    </div>
                    <div
                        class="w-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left
                                bg-gray-200 p-4 rounded-lg">
                        <img alt="team"
                            class="flex-shrink-0 rounded-lg w-20 h-20 object-cover object-center sm:mb-0 mb-4"
                            src="https://dummyimage.com/200x200">
                        <div class="flex-grow sm:pl-8 text-sm">
                            <h2 class="title-font font-bold text-lg text-gray-900">Lorem ipsum dolor sans</h2>
                            <h3 class="text-gray-500 mb-1">Empresa.SRL</h3>
                            <p class="mb-1">Publicado hace 5 dias</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 w-full text-center">
                    <a
                        class="inline-block mx-auto mt-16 bg-tbn-blue text-tbn-light border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Ver
                        más</a>
                </div>
            </div>
        </section>
        {{-- Companies --}}
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <h4 class="sm:text-3xl text-2xl font-bold title-font text-center text-gray-900 mb-2">Más de 1000
                    empresas trabajando con nosotros</h4>
                <p class="text-center mb-10">Las empresas de todo el país son parte de nosotros.</p>
                <div class="flex flex-wrap -m-4 text-center">
                    <div class="p-4 sm:w-1/4 w-1/2">
                        <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">2.7K</h2>
                        <p class="leading-relaxed">Users</p>
                    </div>
                    <div class="p-4 sm:w-1/4 w-1/2">
                        <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">1.8K</h2>
                        <p class="leading-relaxed">Subscribes</p>
                    </div>
                    <div class="p-4 sm:w-1/4 w-1/2">
                        <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">35</h2>
                        <p class="leading-relaxed">Downloads</p>
                    </div>
                    <div class="p-4 sm:w-1/4 w-1/2">
                        <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">4</h2>
                        <p class="leading-relaxed">Products</p>
                    </div>
                </div>
            </div>
        </section>
        {{-- Instructions --}}
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-center text-gray-900 mb-5">
                    Tu nuevo trabajo te esta esta esperando</h1>
                <p class="text-center mb-10">Sigue las instrucciones para registrarte en nuestra plataforma online de
                    busqueda
                    de empleo.</p>

                <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
                    <div class="p-4 md:w-1/3 flex">
                        <div
                            class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4 flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                        <div class="flex-grow pl-6">
                            <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Shooting Stars</h2>
                            <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar
                                toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS
                                try-hard ugh iceland kickstarter tumblr live-edge tilde.</p>
                            <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/3 flex">
                        <div
                            class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4 flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <circle cx="6" cy="6" r="3"></circle>
                                <circle cx="6" cy="18" r="3"></circle>
                                <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                            </svg>
                        </div>
                        <div class="flex-grow pl-6">
                            <h2 class="text-gray-900 text-lg title-font font-medium mb-2">The Catalyzer</h2>
                            <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar
                                toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS
                                try-hard ugh iceland kickstarter tumblr live-edge tilde.</p>
                            <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2"
                                    viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/3 flex">
                        <div
                            class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4 flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <div class="flex-grow pl-6">
                            <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Neptune</h2>
                            <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar
                                toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS
                                try-hard ugh iceland kickstarter tumblr live-edge tilde.</p>
                            <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2"
                                    viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Testimonials --}}
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        class="inline-block w-8 h-8 text-gray-400 mb-8" viewBox="0 0 975.036 975.036">
                        <path
                            d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                        </path>
                    </svg>
                    <p class="leading-relaxed text-lg">Edison bulb retro cloud bread echo park, helvetica stumptown
                        taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY
                        tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
                    <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-8 mb-6"></span>
                    <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">HOLDEN CAULFIELD</h2>
                    <p class="text-gray-500">Senior Product Designer</p>
                </div>
            </div>
        </section>
    </main>
    {{-- Footer --}}
    <livewire:layout.footer />
</body>

</html>
