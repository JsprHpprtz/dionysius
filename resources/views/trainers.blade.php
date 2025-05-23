<x-guest-layout>
    <div class="mx-40 my-16">
        <h2 class="text-5xl font-bold mb-8 text-center my-40 opacity-0 translate-y-10" id="trainersTitle">Onze trainers
        </h2>
    </div>
    @php
        $trainers = [
            [
                'name' => 'Annie',
                'description' => 'Specialiseert in conditietraining en krachttraining. Al 5 jaar trainer bij Dionysius.',
                'image' => 'annie-300x300.jpg',
            ],
            [
                'name' => 'Ashley',
                'description' => 'Expert in technische oefeningen. Geeft training sinds 2020.',
                'image' => 'ashley-2-300x300.jpg',
            ],
            [
                'name' => 'Dian',
                'description' => 'Gespecialiseerd in voeding en training. Helpt atleten hun doelen te bereiken.',
                'image' => 'afsprong-154x300.png',
            ],
            [
                'name' => 'Eef',
                'description' => 'Focus op blessurepreventie en revalidatie. Ervaren fysiotherapeut.',
                'image' => 'balk-238x300.png',
            ],
            [
                'name' => 'Eileen',
                'description' => 'Zet zich in voor inclusiviteit in de sport. Geeft trainingen voor alle niveaus.',
                'image' => 'eileen-300x300.jpg',
            ],
            [
                'name' => 'Elena',
                'description' => 'Expert in ademhalingstechnieken en mindfulness voor sporters.',
                'image' => 'elena-300x300.jpg',
            ],
            [
                'name' => 'Judith',
                'description' => 'Geeft trainingen met een focus op snelheid en wendbaarheid.',
                'image' => 'judith-300x300.jpg',
            ],
            [
                'name' => 'Laura',
                'description' => 'Specialist in krachttraining voor vrouwen. Creëert een veilige trainingsomgeving.',
                'image' => 'laura-300x300.jpg',
            ],
            [
                'name' => 'Marco',
                'description' => 'Geeft jeugdtrainingen met veel aandacht voor techniek en plezier.',
                'image' => 'marco-300x300.jpg',
            ],
            [
                'name' => 'Nicole V. D.',
                'description' => 'Ervaren trainer in duursporten. Helpt atleten hun uithoudingsvermogen te verbeteren.',
                'image' => 'nicole-d-300x300.jpg',
            ],
            [
                'name' => 'Norah',
                'description' => 'Focus op functionele training en mobiliteit. Voorkomt blessures en verbetert prestaties.',
                'image' => 'norah-300x300.jpg',
            ],
            [
                'name' => 'Nicole V. O.',
                'description' => 'Focus op functionele training en mobiliteit. Voorkomt blessures en verbetert prestaties.',
                'image' => 'dsc_0172-300x300.jpg',
            ],
        ];

        $assistants = [
            [
                'name' => 'Cecile',
                'description' => 'Assisteert bij jeugdtrainingen en beginnersgroepen.',
                'image' => 'ccile-300x300.jpg',
            ],
            [
                'name' => 'Sofie',
                'description' => 'Ondersteunt bij gevorderde trainingen en specialistische oefeningen.',
                'image' => 'balk-238x300.png',
            ],
        ];
    @endphp
    <!-- Trainer Cards -->
    <div class="flex flex-col sm:grid sm:grid-cols-2 md:grid md:grid-cols-3 gap-3 mx-40 trainers-grid">
        @foreach ($trainers as $trainer)
            <div class="relative rounded overflow-hidden opacity-0 translate-y-10 trainer-card group w-[300px] h-[300px] mx-auto">
                <img src="{{ asset('images/profile/' . $trainer['image']) }}" alt="Trainer {{ $trainer['name'] }}"
                    class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div
                        class="absolute bottom-0 left-0 w-full p-4 transform translate-y-full 
                            group-hover:translate-y-0 transition-transform duration-300">
                        <span class="text-white font-semibold text-lg drop-shadow block mb-2">
                            {{ $trainer['name'] }}
                        </span>
                        <p class="text-white/90 text-sm">
                            {{ $trainer['description'] }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mx-40 my-16">
        <h2 class="text-5xl font-bold mb-8 text-center my-16 opacity-0 translate-y-10" id="assistantsTitle">Onze
            assistenten</h2>
    </div>
    <!-- Assistant Cards (similar updates) -->
    <div class="flex flex-col sm:grid sm:grid-cols-2 md:grid md:grid-cols-2 gap-3 mx-40 my-16 assistants-grid">
        @foreach ($assistants as $assistant)
            <div class="relative rounded overflow-hidden opacity-0 translate-y-10 assistant-card group w-[300px] h-[300px] mx-auto">
                <img src="{{ asset('images/profile/' . $assistant['image']) }}"
                    alt="Assistent {{ $assistant['name'] }}"
                    class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div
                        class="absolute bottom-0 left-0 w-full p-4 transform translate-y-full 
                            group-hover:translate-y-0 transition-transform duration-300">
                        <span class="text-white font-semibold text-lg drop-shadow block mb-2">
                            {{ $assistant['name'] }}
                        </span>
                        <p class="text-white/90 text-sm">
                            {{ $assistant['description'] }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            gsap.registerPlugin(ScrollTrigger);

            // Animate main title
            gsap.to("#trainersTitle", {
                opacity: 1,
                y: 0,
                duration: 1,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: "#trainersTitle",
                    start: "top 80%",
                    toggleActions: "play none none reverse"
                }
            });

            // Animate trainer cards with stagger
            gsap.to(".trainer-card", {
                opacity: 1,
                y: 0,
                duration: 0.8,
                stagger: {
                    amount: 0.6,
                    grid: "auto",
                    from: "start"
                },
                ease: "power3.out",
                scrollTrigger: {
                    trigger: ".trainers-grid",
                    start: "top 80%",
                    toggleActions: "play none none reverse"
                }
            });

            // Animate assistants title
            gsap.to("#assistantsTitle", {
                opacity: 1,
                y: 0,
                duration: 1,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: "#assistantsTitle",
                    start: "top 80%",
                    toggleActions: "play none none reverse"
                }
            });

            // Animate assistant cards with stagger
            gsap.to(".assistant-card", {
                opacity: 1,
                y: 0,
                duration: 0.8,
                stagger: {
                    amount: 0.4,
                    grid: "auto",
                    from: "start"
                },
                ease: "power3.out",
                scrollTrigger: {
                    trigger: ".assistants-grid",
                    start: "top 80%",
                    toggleActions: "play none none reverse"
                }
            });
        });
    </script>
</x-guest-layout>