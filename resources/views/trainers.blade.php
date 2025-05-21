<x-guest-layout>
    <div class="mx-40 my-16">
        <h2 class="text-3xl font-bold mb-8 text-center my-40">Onze trainers</h2>
    </div>
    @php
        $trainers = [
            'Annie', 'Bram', 'Charlotte', 'Daan', 'Emma', 'Fleur',
            'Gijs', 'Hanna', 'Ivo', 'Joris', 'Kim', 'Lars'
        ];
        $assistants = [
            'Sanne', 'Tom'
        ];
    @endphp
    <div class="flex flex-col sm:grid sm:grid-cols-2 md:grid md:grid-cols-3 gap-3 mx-40">
        @foreach($trainers as $trainer)
        <div class="relative rounded overflow-hidden">
            <img src="https://placehold.co/600x600?font=Poppins&&text={{ urlencode($trainer) }}" alt="Trainer {{ $trainer }}">
            <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/70 to-transparent px-4 py-2">
                <span class="text-white font-semibold text-lg drop-shadow">{{ $trainer }}</span>
            </div>
        </div>
        @endforeach
    </div>
    <div class="mx-40 my-16">
        <h2 class="text-3xl font-bold mb-8 text-center my-16">Onze assistenten</h2>
    </div>
    <div class="flex flex-col sm:grid sm:grid-cols-2 md:grid md:grid-cols-2 gap-3 mx-40 my-16">
        @foreach($assistants as $assistant)
        <div class="relative rounded overflow-hidden">
            <img src="https://placehold.co/600x600?font=Poppins&&text={{ urlencode($assistant) }}" alt="Assistent {{ $assistant }}">
            <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/70 to-transparent px-4 py-2">
                <span class="text-white font-semibold text-lg drop-shadow">{{ $assistant }}</span>
            </div>
        </div>
        @endforeach
    </div>
</x-guest-layout>