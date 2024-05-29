<div>

    <x-navbar>

        <x-ui.button href="{{ route('logout') }}">
            log out
        </x-ui.button>

        <x-ui.button href="#">
            mission
        </x-ui.button>
    </x-navbar>
    <x-table :missions="$missions" />

</div>