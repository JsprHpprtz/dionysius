<nav class="fixed top-4 left-4 right-4 z-50 rounded-2xl backdrop-blur-sm bg-base-300/80 border-b border-gray-200/50 dark:border-gray-700/50 shadow-xl mx-4"
>
    <div class="max-w-screen-xl flex items-center justify-between mx-auto px-4 py-3">
        <!-- Logo and hamburger button ... -->
        <div class="">
            <a href="/" class="flex items-center space-x-3 hover:opacity-80 transition-opacity">
                <x-application-logo-small class="theme-logo h-16 w-16"/>
            </a>
        </div>
        <div class="flex items-center">
            <button data-collapse-toggle="navbar-solid-bg" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-full md:hidden hover:bg-gray-100/50 focus:outline-none focus:ring-2 focus:ring-primary/20 dark:text-gray-400 dark:hover:bg-gray-700/50"
                aria-controls="navbar-solid-bg" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <!-- Desktop nav only -->
            <div class="hidden w-full md:block md:w-auto">
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
                               class="group flex items-center justify-center gap-3 w-full py-2.5 px-4 md:px-3 text-gray-700 rounded-lg md:rounded-full dark:text-gray-600 transition-all duration-200 ease-in-out hover:text-red-800 hover:scale-105">
                                @php $icon = 'icons.' . $link['icon']; @endphp
                                <x-dynamic-component 
                                    :component="$icon" 
                                    class="w-4 h-4 opacity-75 group-hover:opacity-100 transition-all duration-200 ease-in-out group-hover:scale-110 group-hover:text-red-800"
                                />
                                <span class="text-sm font-medium transition-all duration-200 ease-in-out group-hover:scale-110 group-hover:text-red-800">{{ $link['label'] }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <!-- Theme toggle ... -->
            <div class="ms-4 flex items-center">
                <label class="swap swap-rotate">
                    <input type="checkbox" class="theme-controller" value="dark" />
                    <!-- sun icon -->
                    <svg class="swap-off h-10 w-10 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
                    </svg>
                    <!-- moon icon -->
                    <svg class="swap-on h-10 w-10 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
                    </svg>
                </label>
            </div>
        </div>
    </div>
</nav>

<!-- Mobile menu: moved outside nav, appears below header -->
<div id="navbar-solid-bg"
    class="hidden fixed top-[72px] left-0 w-full z-40 bg-white/95 dark:bg-[#ebebeb]/95 shadow-lg md:hidden transition-all">
    <ul class="flex flex-col items-center text-center font-medium py-4">
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
            <li class="w-full">
                <a href="{{ $link['href'] }}"
                   class="group flex items-center justify-center gap-3 w-full py-3 px-4 text-gray-700 hover:text-gray-900 rounded-lg hover:bg-gray-100/70 dark:text-gray-600 dark:hover:text-gray-800 dark:hover:bg-gray-200/70 transition-all duration-200">
                    @php $icon = 'icons.' . $link['icon']; @endphp
                    <x-dynamic-component :component="$icon" class="w-4 h-4 opacity-75 group-hover:opacity-100"/>
                    <span class="text-base font-medium">{{ $link['label'] }}</span>
                </a>
            </li>
        @endforeach
    </ul>
</div>

<script src="https://cdn.jsdelivr.net/npm/gsap@3/dist/gsap.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Hamburger menu functionality
        const hamburgerBtn = document.querySelector('[data-collapse-toggle="navbar-solid-bg"]');
        const mobileMenu = document.getElementById('navbar-solid-bg');
        
        if (hamburgerBtn && mobileMenu) {
            hamburgerBtn.addEventListener('click', function() {
                const isHidden = mobileMenu.classList.contains('hidden');
                
                if (isHidden) {
                    // Show menu first, then animate
                    mobileMenu.classList.remove('hidden');
                    
                    // Animate menu opening with GSAP
                    gsap.fromTo(mobileMenu, 
                        { opacity: 0, height: 0 },
                        { opacity: 1, height: 'auto', duration: 0.3, ease: 'power3.out' }
                    );
                    
                    // Animate menu items with stagger
                    const menuItems = mobileMenu.querySelectorAll('li');
                    gsap.fromTo(menuItems, 
                        { y: 15, opacity: 0 },
                        { y: 0, opacity: 1, stagger: 0.05, duration: 0.2, delay: 0.1 }
                    );
                } else {
                    // Animate menu closing
                    gsap.to(mobileMenu, { 
                        opacity: 0, 
                        height: 0, 
                        duration: 0.3, 
                        ease: 'power3.in',
                        onComplete: () => mobileMenu.classList.add('hidden')
                    });
                }
                
                // Update aria-expanded attribute for accessibility
                const isExpanded = !isHidden;
                hamburgerBtn.setAttribute('aria-expanded', isExpanded ? 'true' : 'false');
            });
        }

        // Theme toggle animation for background transition
        const themeToggle = document.querySelector('.theme-controller');
        if (themeToggle) {
            // Add transition CSS to html element
            document.documentElement.style.transition = 'background-color 0.5s ease, color 0.5s ease';
            
            // Add transition to all elements that change with theme
            const transitionElements = `
                nav, .bg-white, [class*="bg-gray"], [class*="text-gray"], 
                [class*="border-gray"], [class*="shadow"], [class*="dark:bg"], 
                [class*="dark:text"], [class*="dark:border"], [class*="hover:bg"], 
                [class*="dark:hover:bg"]
            `;
            
            document.querySelectorAll(transitionElements).forEach(el => {
                el.style.transition = 'background-color 0.5s ease, color 0.5s ease, border-color 0.5s ease, box-shadow 0.5s ease';
            });
            
            themeToggle.addEventListener('change', function() {
                const isDark = this.checked;
                document.documentElement.setAttribute('data-theme', isDark ? 'dark' : 'light');
            });
        }

        // --- Auto-hide navbar background after 1s of no interaction ---
        const navbar = document.querySelector('nav');
        let hideTimeout;

        function fadeNavbarBgOut() {
            if (navbar) {
                gsap.to(navbar, { 
                    backgroundColor: "rgba(255,255,255,0)", // fallback for light mode
                    "--tw-bg-opacity": 0, // for Tailwind bg-base-300/80
                    backdropFilter: "blur(0px)",
                    webkitBackdropFilter: "blur(0px)",
                    boxShadow: "0 0 0 0 rgba(0,0,0,0)", // remove shadow
                    borderColor: "rgba(0,0,0,0)", // remove border
                    duration: 0.5,
                    ease: "power2.out"
                });
            }
        }

        function fadeNavbarBgIn() {
            if (navbar) {
                gsap.to(navbar, { 
                    backgroundColor: "", // restore Tailwind class
                    "--tw-bg-opacity": 0.8, // for Tailwind bg-base-300/80
                    backdropFilter: "blur(12px)",
                    webkitBackdropFilter: "blur(12px)",
                    boxShadow: "", // restore shadow via class
                    borderColor: "", // restore border via class
                    duration: 0.5,
                    ease: "power2.out"
                });
            }
        }

        function resetNavbarBgTimer() {
            fadeNavbarBgIn();
            clearTimeout(hideTimeout);
            hideTimeout = setTimeout(() => {
                fadeNavbarBgOut();
            }, 2000); // <-- changed from 1000 to 2000 (2 seconds)
        }

        // Listen for user interaction
        ['mousemove', 'keydown', 'scroll', 'touchstart', 'click'].forEach(evt =>
            window.addEventListener(evt, resetNavbarBgTimer, { passive: true })
        );

        // Start timer on load
        resetNavbarBgTimer();
    });
</script>