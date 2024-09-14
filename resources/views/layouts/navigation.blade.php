<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Bienvenidos') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- barra de navegacion principal -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <div class="p-2">
                    <x-nav-link href="https://primerproyecto-cristopherrivas.netlify.app">
                        {{ __('Primer Proyecto') }}
                    </x-nav-link>
                </div>

                <div class="p-2">
                    <x-nav-link href="https://segundoproyecto-cristpherrivas.netlify.app">
                        {{ __('Front End Store') }}
                    </x-nav-link>
                </div>

                <div class="p-2">
                    <x-nav-link href="https://blog-de-cafe-cristopher-rivas.netlify.app">
                        {{ __('Blog de Cafe') }}
                    </x-nav-link>
                </div>

                <div class="p-2">
                    <x-nav-link href="https://guyziti.nyc.dom.my.id/login">
                        {{ __('Devstagram') }}
                    </x-nav-link>
                </div>

                <div class="p-2">
                    <x-nav-link href="https://github.com/Cris-rv/Devjobs">
                        {{ __('DevJobs') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Responsive Bienvenidos -->
            <div class="flex items-center sm:hidden">
                <x-responsive-nav-link :href="route('dashboard')" >
                    {{ __('Bienvenido') }}
                </x-responsive-nav-link>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <!-- Responsive Navigation Menu -->
            <div x-data="{ open: false }" class="relative">
            <!-- Botón para abrir/cerrar el panel -->
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-7 w-7" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
        
                    <!-- Panel desplegable -->
                     <div :class="{'block': open, 'hidden': !open}" class="sm:hidden hidden mt-48 bg-white border border-gray-200 rounded-md shadow-lg dark:bg-gray-800 dark:border-gray-600">
                        <div class="mt-3 space-y-1">
                            <x-responsive-nav-link href="https://primerproyecto-cristopherrivas.netlify.app">
                                {{ __('Primer Proyecto') }}
                            </x-responsive-nav-link>
                            <x-responsive-nav-link href="https://segundoproyecto-cristpherrivas.netlify.app">
                                {{ __('Font End Store') }}
                            </x-responsive-nav-link>
                            <x-responsive-nav-link href="https://blog-de-cafe-cristopher-rivas.netlify.app">
                                {{ __('Blog de Cafe') }}
                            </x-responsive-nav-link>
                            <x-responsive-nav-link href="https://guyziti.nyc.dom.my.id/login">
                                {{ __('Devstagram') }}
                            </x-responsive-nav-link>
                            <x-responsive-nav-link href="https://github.com/Cris-rv/Devjobs">
                                {{ __('DevJobs') }}
                            </x-responsive-nav-link>
                            <x-responsive-nav-link class="text-sm text-center" :href="route('dashboard')">
                                {{ __('Salir') }}
                            </x-responsive-nav-link>
                        </div>
                    </div>
            </div>
            </div>
        </div>
    </div>
    
</nav>