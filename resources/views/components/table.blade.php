<div class="
container
mx-auto
m-2
">
<table class="border border-spacing-2 border-slate-500 w-full">
    <caption class="caption-top bg-green-700 w-20">
        <a href="{{ route('create') }}">
            <button class="w-full">create</button>
        </a>
    </caption>
    <caption class="caption-bottom">
        text test
    </caption>
    <thead>
        <tr>
            <th>name</th>
            <th>discription</th>
            <th>
                <span class="sr-only">Edit</span>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($missions as $mission)
        <tr class="border border-slate-500">
            <td>{{ $mission->icon }}</td>
            <td>{{ $mission->name }}</td>
            <td>
                <div class="flex justify-end items-center space-x-2 bg-yellow-200">
                    <x-ui.button href="{{ route('read', $mission->id) }}">
                        read
                    </x-ui.button>
                    <x-ui.button href="{{ route('edit', $mission->id) }}">
                        edit
                    </x-ui.button>
                    <form action="{{ route('destroy', $mission->id) }}" method="post">
                        @method('delete')
                        @csrf
                        <x-ui.button href="#">
                            delete
                        </x-ui.button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>


{{-- 
    table-auto - резинка таблиц
    table-fixed - фикс
    border-collapse - общ граница
    border-separate - своя граница
    --}}