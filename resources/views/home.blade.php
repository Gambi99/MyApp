<x-layout>
    <x-navbar>
        @php
            $link = (Auth::check()) ? 'logout' : 'login'
        @endphp
        
        <x-ui.button href="{{ route($link) }}">
            {{ $link }}
        </x-ui.button>

        @auth
            <x-ui.button href="{{ route('dashboard') }}">
                dashboard
            </x-ui.button>
        @endauth

    </x-navbar>
</x-layout>