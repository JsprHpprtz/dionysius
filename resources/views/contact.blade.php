@extends('layouts.guest')

@section('title', 'Contact opnemen | dionysius')

@section('content')
<div class="my-12 flex items-center justify-center py-16">
    <div class="w-full max-w-3xl bg-base-300 p-8 md:p-12 rounded-lg shadow-lg border border-base-200 mx-4">
        <h2 class="text-2xl md:text-3xl font-bold text-center mb-8 text-base-content">Contacteer ons</h2>

        <form action="{{ route('contact.store') }}" method="POST" id="contact-form">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Left column for desktop -->
                <div class="space-y-6">
                    <div>
                        <label for="first_name" class="block text-sm font-medium text-base-content">Voornaam</label>
                        <input type="text" id="first_name" name="first_name" class="input input-bordered w-full mt-2 bg-base-200 text-base-content" value="{{ old('first_name') }}" required>
                        @error('first_name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="last_name" class="block text-sm font-medium text-base-content">Achternaam</label>
                        <input type="text" id="last_name" name="last_name" class="input input-bordered w-full mt-2 bg-base-200 text-base-content" value="{{ old('last_name') }}" required>
                        @error('last_name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <!-- Right column for desktop -->
                <div class="space-y-6">
                    <div>
                        <label for="company" class="block text-sm font-medium text-base-content">Bedrijfsnaam</label>
                        <input type="text" id="company" name="company" class="input input-bordered w-full mt-2 bg-base-200 text-base-content" value="{{ old('company') }}" required>
                        @error('company')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="phone_number" class="block text-sm font-medium text-base-content">Telefoonnummer</label>
                        <input type="text" id="phone_number" name="phone_number" class="input input-bordered w-full mt-2 bg-base-200 text-base-content" value="{{ old('phone_number') }}" required>
                        @error('phone_number')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <!-- Full width email field -->
                <div class="md:col-span-2 space-y-2">
                    <label for="email" class="block text-sm font-medium text-base-content">Emailadress</label>
                    <input type="email" id="email" name="email" class="input input-bordered w-full mt-2 bg-base-200 text-base-content" value="{{ old('email') }}" required>
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Full width message area -->
                <div class="md:col-span-2 space-y-2">
                    <label for="message" class="block text-sm font-medium text-base-content">Bericht</label>
                    <textarea id="message" name="message" rows="6" class="textarea textarea-bordered w-full mt-2 bg-base-200 text-base-content resize-y" required>{{ old('message') }}</textarea>
                    @error('message')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Full width button area -->
                <div class="md:col-span-2 mt-4">
                    <button type="submit" class="color-dionysius btn btn-primary w-full md:w-auto md:px-12 md:mx-auto md:flex md:items-center md:justify-center" id="submit-button">
                        <span id="button-text">Submit</span>
                        <span id="loading-icon" class="loading loading-dots loading-xl hidden"></span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@vite(['resources/css/app.css', 'resources/js/app.js'])
@filamentScripts
@endsection
