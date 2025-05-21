<nav class="fixed top-0 left-0 right-0 z-50 border-b border-gray-200 bg-white dark:bg-[#ebebeb] dark:border-gray-700">
    <div class="max-w-screen-xl flex items-center justify-between mx-4 py-2">
        <!-- Logo always left -->
        <div class="flex-shrink-0">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <x-application-logo-small class="h-8 w-8"/>
            </a>
        </div>
        <!-- Hamburger and nav -->
        <div class="flex items-center">
            <button data-collapse-toggle="navbar-solid-bg" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-solid-bg" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
                <ul class="flex flex-col items-center text-center font-medium mt-4 rounded-lg bg-white md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-[#ebebeb] md:dark:bg-transparent dark:border-gray-700">
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
                               class="group flex items-center justify-center gap-2 w-full py-2 px-3 md:p-0 text-gray-900 rounded-sm md:hover:bg-transparent md:border-0 md:hover:text-blue-700 dark:text-black md:dark:hover:text-blue-500 md:dark:hover:bg-transparent transition-colors relative">
                                @php $icon = 'icons.' . $link['icon']; @endphp
                                <x-dynamic-component :component="$icon" class="w-5 h-5"/>
                                {{ $link['label'] }}
                                <span class="pointer-events-none absolute left-1/2 bottom-0 w-0 h-[2px] bg-[#83191A] transition-all duration-300 group-hover:left-0 group-hover:w-full"></span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</nav>