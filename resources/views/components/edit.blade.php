

<x-layout>

    <form action="{{ route('update', $mission->id) }}" method="post">
        @csrf
        @method('put')

        <x-ui.input type="text" name="icon" value="{{ $mission->icon }}" />
        <x-ui.input type="text" name="name" value="{{ $mission->name }}" />
        <x-ui.button>
            save
        </x-ui.button>
    </form>

</x-layout>