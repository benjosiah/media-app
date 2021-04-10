<header class="w-full h-10 border-black border" >
    <nav class="flex w-full items-center justify-between px-4 py-1">
    <a href="/">
        <span class=" text-xl font-semibold"> 
            Media App
        </span>
    </a>
        @if(Auth::user())
        <a href="/profile" class="bg-black rounded-full w-8 h-8">
            <span class="bg-black rounded-full w-8 h-8"></span>
        </a>
       @else
       <a href="/register">
            <button class="border border-green-700 rounded-md focus:outline-none px-4" type="submit">
                Sign Up
            </button>
        </a>
        @endif
        
    </nav>
</header>