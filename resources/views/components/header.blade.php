<nav class="fixed top-0 left-0 right-0 z-50 backdrop-blur-sm bg-white/80 dark:bg-[#ebebeb]/80 border-b border-gray-200/50 dark:border-gray-700/50 shadow-sm">
    <div class="max-w-screen-xl flex items-center justify-between mx-auto px-4 py-3">
        <!-- Logo always left -->
        <div class="flex-shrink-0">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse hover:opacity-80 transition-opacity">
                <x-application-logo-small class="h-9 w-9"/>
            </a>
        </div>
        <!-- Hamburger and nav -->
        <div class="flex items-center">
            <button data-collapse-toggle="navbar-solid-bg" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-full md:hidden hover:bg-gray-100/50 focus:outline-none focus:ring-2 focus:ring-primary/20 dark:text-gray-400 dark:hover:bg-gray-700/50"
                aria-controls="navbar-solid-bg" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
                <ul class="flex flex-col items-center text-center font-medium mt-4 rounded-2xl bg-white/50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-[#ebebeb]/50 md:dark:bg-transparent">
                    @php
                        $navLinks = [
                            ['icon' => 'agenda', 'label' => 'Agenda / Trainingsrooster', 'href' => '/agenda'],
                            ['icon' => 'user-group', 'label' => 'Trainers', 'href' => '/trainers'],
                            ['icon' => 'trainingen', 'label' => 'Trainingen', 'href' => '/trainingen'],
                            ['icon' => 'money', 'label' => 'Contribute', 'href' => '/contribute'],
                            ['icon' => 'agenda', 'label' => 'Clubinformatie', 'href' => '/clubinformatie'],
                        ];
                    @endphp
                    @foreach($navLinks as $link)
                        <li class="w-full md:w-auto">
                            <a href="{{ $link['href'] }}"
                               class="group flex items-center justify-center gap-3 w-full py-2.5 px-4 md:px-3 text-gray-700 hover:text-gray-900 rounded-lg md:rounded-full md:hover:bg-gray-100/50 dark:text-gray-600 dark:hover:text-gray-800 md:dark:hover:bg-gray-200/50 transition-all duration-200">
                                @php $icon = 'icons.' . $link['icon']; @endphp
                                <x-dynamic-component :component="$icon" class="w-4 h-4 opacity-75 group-hover:opacity-100"/>
                                <span class="text-sm font-medium">{{ $link['label'] }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</nav>