<x-layout>
    <x-ui.button href="{{ route('dashboard') }}">
        back
    </x-ui.button>
    <br>
    <x-show :mission="$mission" />
</x-layout>