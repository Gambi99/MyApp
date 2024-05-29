<div class="
container
mx-auto
">
    <form action="{{ route('store') }}" method="post">
        @csrf
        
        <div class="
        flex
        flex-col
        ">
            <x-ui.input type="text" name="icon" value="test" />
        
            <x-ui.input type="text" name="name" value="test" />
            
            <x-ui.button>
                Save
            </x-ui.button>
        </div>

    </form>
</div>