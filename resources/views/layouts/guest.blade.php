<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
        

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    </head>
    <body class="font-sans antialiased color-base-300" >
        <x-header />
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            
                @yield('content')
            
        </div>
        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
        <script>
            
            document.addEventListener('DOMContentLoaded', () => {
                const themeController = document.querySelector('.theme-controller');
                
                const savedTheme = localStorage.getItem('theme') || 'light';
                document.documentElement.setAttribute('data-theme', savedTheme);
                themeController.checked = savedTheme === 'dark';

                themeController.addEventListener('change', (e) => {
                    const theme = e.target.checked ? 'dark' : 'light';
                    document.documentElement.setAttribute('data-theme', theme);
                    localStorage.setItem('theme', theme);
                });
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const htmlElement = document.documentElement;
                const footerBannerImg = document.getElementById('footer-banner-img');
                const themeLogoImages = document.querySelectorAll('.theme-logo');

                function updateThemeImages() {
                const currentTheme = htmlElement.getAttribute('data-theme');
                const isDarkTheme = currentTheme === 'dark';

                if (footerBannerImg) {
                    if (isDarkTheme) {
                    footerBannerImg.src = 'images/footer-banner-light.png';
                    footerBannerImg.alt = 'Footer banner light';
                    } else {
                    footerBannerImg.src = 'images/footer-banner.png';
                    footerBannerImg.alt = 'Footer banner';
                    }
                } else {
                    console.warn('Footer banner image element not found.');
                }

                if (themeLogoImages.length > 0) {
                    themeLogoImages.forEach(imgElement => {
                        if (isDarkTheme) {
                            if (imgElement.src.includes('logo.png')) {
                                imgElement.src = '{{ asset("images/logo-light.png") }}';
                                imgElement.alt = 'Logo Light';
                            } else if (imgElement.src.includes('another-logo.png')) {
                                imgElement.src = '{{ asset("images/another-logo-light.png") }}';
                                imgElement.alt = 'Another Logo Light';
                            }
                        } else {
                            if (imgElement.src.includes('logo-light.png')) {
                                imgElement.src = '{{ asset("images/logo.png") }}';
                                imgElement.alt = 'Logo';
                            } else if (imgElement.src.includes('another-logo-light.png')) {
                                imgElement.src = '{{ asset("images/another-logo.png") }}';
                                imgElement.alt = 'Another Logo';
                            }
                        }
                    });
                } else {
                    console.warn('No images with class "theme-logo" found.'); // Can uncomment for debugging
                }
                }
                

                updateThemeImages();

                const observer = new MutationObserver((mutationsList) => {
                for (const mutation of mutationsList) {
                    if (
                    mutation.type === 'attributes' &&
                    mutation.attributeName === 'data-theme'
                    ) {
                    updateThemeImages();
                    }
                }
                });

                observer.observe(htmlElement, { attributes: true });
            });
            </script>
        <x-footer />
    </body>
</html>
