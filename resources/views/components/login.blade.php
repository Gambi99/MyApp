<div class="
m-4
{{-- flex flex-col --}}
bg-orange-400
container mx-auto
">
    <a href="{{ route('home') }}" class="
    bg-green-400
    ">
    <button class="container mx-auto w-24">Back</button>
    </a>

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
        
            <button class="
            container mx-auto
            bg-green-200 
            w-24
            m-2
            ">
            {{ $slot }}
            </button>
        </div>
    </form>
</div>
