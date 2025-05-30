<x-guest-layout>
    <!-- Fixed hero background image -->
    <div class="fixed inset-0 w-full h-full -z-10 bg-cover bg-center bg-no-repeat" 
         style="background-image: url('{{ asset('images/slider_1_1920.jpg') }}');"></div>

    <!-- Hero content, full viewport height -->
    <section id="hero-section" class="min-h-screen flex items-center justify-center">
        <div id="hero-content" class="backdrop-blur-md bg-black/50 p-8 rounded text-white text-center w-full max-w-2xl mx-auto">
            <h1 class="text-4xl font-bold mb-2">Welkom bij GTV Dionysius Tilburg</h1>
            <p class="text-lg">Samen sporten, samen groeien.</p>
        </div>
    </section>

    <!-- Slide content with solid background -->
    <section class="slide w-full p-6 lg:p-8 flex flex-col items-center gap-x-4 bg-base-200 dark:bg-base-200 transition-colors duration-300">
        <div class="flex justify-center items-center py-60 px-4 w-full">
            <div class="max-w-2xl w-full bg-base-200/80 dark:bg-base-200/90 rounded-2xl shadow-lg p-8 flex flex-col items-center text-center backdrop-blur-sm border border-gray-200/60 dark:border-gray-700/40">
                <h2 class="text-4xl font-extrabold mb-6 tracking-tight">Wat is GTV Dionysius?</h2>
                <p class="mb-4 text-lg">Welkom op de site van GTV Dionysius, een actieve en gezellige turnvereniging in Tilburg, opgericht in 1924.</p>
                <p class="mb-4 text-lg">Je kunt bij Dionysius terecht voor een rijk aanbod aan trainingen voor jong en oud. Zo hebben wij kleuterlessen voor de allerkleinsten, Gym en turnlessen voor alle leeftijden maar ook sportfit lessen waar leden van ruim zeventig jaar nog actief elke week sporten. Al deze trainingen worden geleid door goed opgeleide trainers.</p>
                <p class="mb-4 text-lg">Mocht je een keer de sfeer op een training willen proeven dan kan dat. Ga langs op één van de trainingen en doe twee trainingen gratis en vrijblijvend mee. We hopen je snel op een van de trainingen te zien.</p>
                <p class="mb-2 text-lg">Mocht je nog verdere vragen hebben over onze vereniging of reacties hebben m.b.t. deze site dan kun je ons mailen op</p>
                <a href="mailto:info@gtvdionysius.nl" class="text-red-800 font-semibold underline hover:text-red-600 transition-colors duration-200 dark:text-red-400 dark:hover:text-red-300">info@gtvdionysius.nl</a>
            </div>
        </div>
    </section>

    @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block"></div>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/gsap@3/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>
    <script>
document.addEventListener('DOMContentLoaded', function () {
    gsap.registerPlugin(ScrollTrigger);
    
    // Slide and fade out hero content as you scroll past the hero section
    gsap.fromTo("#hero-content",
        { y: 0, opacity: 1 },
        {
            y: -100,
            opacity: 0,
            ease: "power1.out",
            scrollTrigger: {
                trigger: "#hero-section",
                start: "top top",
                end: "bottom top",
                scrub: true,
                pin: true,
                pinSpacing: false,
            }
        }
    );

    // Fade in and slide up the .slide section as you scroll
    gsap.fromTo(".slide",
        { opacity: 0.5, y: 100 },
        {
            opacity: 1,
            y: 0,
            ease: "power1.out",
            scrollTrigger: {
                trigger: ".slide",
                start: "top bottom", // when .slide enters viewport
                end: "top top",      // until it reaches the top
                scrub: true
            }
        }
    );
});
</script>
</x-guest-layout>