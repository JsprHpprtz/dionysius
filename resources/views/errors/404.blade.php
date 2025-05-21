<x-guest-layout>
    <div class="min-h-screen flex flex-col items-center justify-center">
        <div class="mb-8">
            <x-application-logo class="w-20 h-20" />
        </div>
        
        <h1 class="text-4xl font-bold text-gray-800 mb-4">
            404 | Pagina Niet Gevonden
        </h1>
        
        <p class="text-gray-600 mb-8">
            Sorry, de pagina die je zoekt bestaat niet.
        </p>
        
        <a href="{{ route('home') }}" class="bg-primary text-white px-4 py-2 rounded hover:bg-primary-light transition-colors">
            Terug naar Home
        </a>

        <div class="breadcrumbs text-sm">
            <ul>
                <li><a>Home</a></li>
                <li><a>Documents</a></li>
                <li>Add Document</li>
            </ul>
        </div>
    </div>
</x-guest-layout>