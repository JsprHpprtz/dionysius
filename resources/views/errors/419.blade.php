<x-guest-layout>
    <div class="min-h-screen flex flex-col items-center justify-center px-4 sm:px-6 lg:px-8">
        <div class="mb-6 sm:mb-8" id="logo">
            <x-application-logo class="theme-logo w-16 h-16 sm:w-20 sm:h-20" />
        </div>
        
        <h1 class="text-3xl sm:text-4xl font-bold mb-3 sm:mb-4 text-center" id="title">
            419 | Sessie Verlopen
        </h1>
        
        <p class="mb-6 sm:mb-8 text-center text-sm sm:text-base" id="message">
            Sorry, je sessie is verlopen. Vernieuw de pagina en probeer het opnieuw.
        </p>
        
        <a href="{{ route('home') }}" 
           class="bg-primary text-white px-4 py-2 rounded hover:bg-primary-light transition-colors text-sm sm:text-base" 
           id="homeButton">
            Terug naar Home
        </a>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Set initial states
            gsap.set("#logo", { opacity: 0, y: -50 });
            gsap.set("#title", { opacity: 0, y: 30 });
            gsap.set("#message", { opacity: 0, y: 20 });
            gsap.set("#homeButton", { opacity: 0, y: 20, scale: 0.9 });

            // Create timeline for smooth sequence
            const tl = gsap.timeline({
                defaults: {
                    duration: 0.7,
                    ease: "power3.out"
                }
            });

            // Animate elements in sequence
            tl.to("#logo", {
                y: 0,
                opacity: 1
            })
            .to("#title", {
                y: 0,
                opacity: 1
            })
            .to("#message", {
                y: 0,
                opacity: 1
            }, "-=0.4")
            .to("#homeButton", {
                y: 0,
                opacity: 1,
                scale: 1
            }, "-=0.3");

            // Handle button hover
            const button = document.querySelector("#homeButton");
            button.addEventListener("mouseenter", () => {
                gsap.to("#homeButton", {
                    scale: 1.05,
                    duration: 0.2
                });
            });
            
            button.addEventListener("mouseleave", () => {
                gsap.to("#homeButton", {
                    scale: 1,
                    duration: 0.2
                });
            });
        });
    </script>
</x-guest-layout>