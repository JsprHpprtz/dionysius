<x-guest-layout>
    <div class="min-h-screen flex flex-col items-center justify-center px-4 sm:px-6 lg:px-8">
        <div class="mb-6 sm:mb-8">
            <x-application-logo class="w-16 h-16 sm:w-20 sm:h-20" />
        </div>
        
        <h1 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-3 sm:mb-4 text-center">
            404 | Pagina Niet Gevonden
        </h1>
        
        <p class="text-gray-600 mb-6 sm:mb-8 text-center text-sm sm:text-base">
            Sorry, de pagina die je zoekt bestaat niet.
        </p>
        
        <a href="{{ route('home') }}" class="bg-primary text-white px-4 py-2 rounded hover:bg-primary-light transition-colors text-sm sm:text-base">
            Terug naar Home
        </a>
    </div>
</x-guest-layout>