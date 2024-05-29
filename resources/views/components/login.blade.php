<div class="
m-4
bg-orange-400
container mx-auto
">
    <x-ui.button href="{{ route('home') }}">
        back
    </x-ui.button>

    <form action="{{ route('check') }}" method="POST">
        @csrf

        <div class="flex flex-col">

            <x-ui.input type="text" name="login" placeholder="login" />
            @error('login')
                {{ $message }}
            @enderror
                
            <x-ui.input type="password" name="password" placeholder="password" />
        
            <x-ui.button>
                welcome
            </x-ui.button>
            
        </div>
    </form>
</div>
