{{-- class="{{ $attr1 }}" --}}

<div class="
flex flex-row-reverse
container mx-auto
px-4
bg-orange-400
">

<a href="{{ route('login') }}">
    <button class="
    px-4 m-2
    bg-green-200 
    hover:bg-green-800 
    hover:text-white
    ">
        {{ $slot }}
    </button>
</a>
</div>
