@extends('layouts.guest')

@section('title', 'Home | Quantora Solutions')

@section('content')
        <div class="w-full min-h-screen flex items-center justify-center rounded-none shadow-none m-0 z-0"
             style="background-image: url('{{ asset('images/slider_1_1920.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div id="hero-content" class="backdrop-blur-md bg-black/50 p-8 rounded text-white text-center w-full">
                <h1 class="text-4xl font-bold mb-2">Welkom bij GTV Dionysius Tilburg</h1>
                <p class="text-lg">Samen sporten, samen groeien.</p>
            </div>
        </div>

        <div class="p-6 lg:p-8 flex flex-col items-center">
            <div>
                <h2 class="text-3xl font-bold mt-8">Wat is GTV Dionysius?</h2>
                <p class="mt-4 text-lg">GTV Dionysius is een tafeltennisvereniging in Tilburg. Wij bieden trainingen en competities voor spelers van alle niveaus.</p>
                <p class="mt-4 text-lg">Onze trainers zijn ervaren en gepassioneerd, en helpen je graag om je tafeltennisvaardigheden te verbeteren.</p>
                <p class="mt-4 text-lg">Neem een kijkje op onze website voor meer informatie over onze trainingen, evenementen en lidmaatschapsopties.</p>
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
@vite(['resources/css/app.css', 'resources/js/app.js'])
@filamentScripts
@endsection
