<x-layout>
    <x-navbar>
        @php
            $link = (Auth::check()) ? 'logout' : 'login'
        @endphp
        
        <x-button href2="{{ route($link) }}">
            {{ $link }}
        </x-button>

        @auth
            <x-button href2="{{ route('dashboard') }}">
                dashboard
            </x-button>
        @endauth

    </x-navbar>
</x-layout>