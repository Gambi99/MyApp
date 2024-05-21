<div class="
m-4
bg-orange-400
container mx-auto
">
    <x-button href2="{{ route('home') }}">
        back
    </x-button>

    <form action="{{ route('check') }}" method="POST">
        @csrf

        <div class="
        flex flex-col
        ">
            <input type="text" name="login" placeholder="login" class="
            m-4
            w-80
            rounded
            border-2 
            border-solid 
            border-sky-500
            container mx-auto
            ">
            @error('login')
                {{ $message }}
            @enderror
                
            <input type="password" name="password" placeholder="password" class="
            m-4
            w-80
            rounded
            border-2 
            border-solid 
            border-sky-500
            container mx-auto
            ">
        
            <x-button>
                enter
            </x-button>
            
        </div>
    </form>
</div>
