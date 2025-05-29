<x-guest-layout>
        <div class="w-full min-h-screen flex items-center justify-center rounded-none shadow-none m-0 z-0"
             style="background-image: url('{{ asset('images/slider_1_1920.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div id="hero-content" class="backdrop-blur-md bg-black/50 p-8 rounded text-white text-center w-full">
                <h1 class="text-4xl font-bold mb-2">Welkom bij GTV Dionysius Tilburg</h1>
                <p class="text-lg">Samen sporten, samen groeien.</p>
            </div>
        </div>

        <div class="p-6 lg:p-8 flex flex-col items-center gap-x-4">
            <div class="flex justify-center items-center py-16 px-4">
                <div class="max-w-2xl w-full bg-white/80 dark:bg-[#f7f7f7]/80 rounded-2xl shadow-lg p-8 flex flex-col items-center text-center backdrop-blur-sm border border-gray-200/60">
                    <h2 class="text-4xl font-extrabold mb-6 text-gray-900 dark:text-gray-800 tracking-tight">Wat is GTV Dionysius?</h2>
                    <p class="mb-4 text-lg text-gray-700 dark:text-gray-600">Welkom op de site van GTV Dionysius, een actieve en gezellige turnvereniging in Tilburg, opgericht in 1924.</p>
                    <p class="mb-4 text-lg text-gray-700 dark:text-gray-600">Je kunt bij Dionysius terecht voor een rijk aanbod aan trainingen voor jong en oud. Zo hebben wij kleuterlessen voor de allerkleinsten, Gym en turnlessen voor alle leeftijden maar ook sportfit lessen waar leden van ruim zeventig jaar nog actief elke week sporten. Al deze trainingen worden geleid door goed opgeleide trainers.</p>
                    <p class="mb-4 text-lg text-gray-700 dark:text-gray-600">Mocht je een keer de sfeer op een training willen proeven dan kan dat. Ga langs op één van de trainingen en doe twee trainingen gratis en vrijblijvend mee. We hopen je snel op een van de trainingen te zien.</p>
                    <p class="mb-2 text-lg text-gray-700 dark:text-gray-600">Mocht je nog verdere vragen hebben over onze vereniging of reacties hebben m.b.t. deze site dan kun je ons mailen op</p>
                    <a href="mailto:info@gtvdionysius.nl" class="text-red-800 font-semibold underline hover:text-red-600 transition-colors duration-200">info@gtvdionysius.nl</a>
                </div>
            </div>
        </div>

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif

        <script src="https://cdn.jsdelivr.net/npm/gsap@3/dist/gsap.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                gsap.from("#hero-content", {
                    opacity: 0,
                    y: 500,
                    duration: 1,
                    delay: .5,
                    ease: "back.out(1.7)"
                });
            });
        </script>
</x-guest-layout>