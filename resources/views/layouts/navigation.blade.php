<nav x-data="{ open: false }" class="fixed top-0 left-0 w-full bg-slate-800 dark:bg-gray-800 border-b border-gray-400 dark:border-gray-700 text-white z-50 md:px-24">
    <!-- Primary Navigation Menu -->
    <div class=" max-w-120rem mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 w-full">
                <!-- Navigation Links --> 
                <div class="hidden sm:flex sm:justify-center sm:items-center text-center">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Bienvenido') }}
                    </x-nav-link>
                </div>

                <div class="hidden md:flex gap-6">
                    <x-nav-link href="#sobre-mi">
                        Sobre mi
                    </x-nav-link>

                    <x-nav-link href="#Tecnologias">
                        {{ __('Tecnologias') }}
                    </x-nav-link>

                    <x-nav-link href="#proyectos">
                        {{ __('Proyectos') }}
                    </x-nav-link>

                    <x-nav-link href="#contactos">
                        {{ __('Contacto') }}
                    </x-nav-link>
            </div>

            <!-- Responsive Bienvenidos -->
            <div class="flex justify-between sm:hidden">
                <x-responsive-nav-link :href="route('dashboard')" >
                    {{ __('Bienvenido') }}
                </x-responsive-nav-link>
            </div>

            <!-- Hamburger -->
            <div class="mr-2 flex items-center sm:hidden">
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
                     <div :class="{'block': open, 'hidden': !open}" class="sm:hidden hidden mt-48 bg-slate-800 border border-gray-200 rounded-md shadow-lg dark:bg-gray-800 dark:border-gray-600">
                        <div class="mt-3 space-y-1">
                            <x-responsive-nav-link href="#sobre-mi">
                                {{ __('Sobre mi') }}
                            </x-responsive-nav-link>
                            <x-responsive-nav-link href="#Tecnologias">
                                {{ __('Tecnologias') }}
                            </x-responsive-nav-link>
                            <x-responsive-nav-link href="#proyectos">
                                {{ __('Proyectos') }}
                            </x-responsive-nav-link>
                            <x-responsive-nav-link href="#contactos">
                                {{ __('Contactos') }}
                            </x-responsive-nav-link>
                            <x-responsive-nav-link class="text-sm text-center" :href="route('dashboard')">
                                {{ __('Salir') }}
                            </x-responsive-nav-link>
                        </div>
                    </div>
            </div>
            </div>
    </div>
    
</nav>