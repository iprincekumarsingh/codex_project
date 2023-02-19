
<header>
    <style>
        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
    <nav class="container flex flex-1  justify-center items-center py-5 mt:2 sm:mt-4">
        <div class="logo text-3xl">
            Help desk (1.0)
        </div>
        <ul class="hidden sm:flex justify-end items-center flex-1 gap-12">

            <li class="text-2xl"><a href="">Home</a></li>

            @if(Auth::check())
                @if(route('home'))

                @else
                    <li  class="text-2xl"><a href="{{route('home')}}">Dashboard</a></li>
                @endif

                <li class="text-2xl"><a href="{{route('home')}}">Tickets</a></li>
                <li class="text-2xl"><a href="{{url('auth/logout')}}">Logout</a></li>



            @else
                <li class="text-2xl"><a href="">Support</a></li>
                <a href="{{route('login')}}" class="py-3 px-5 border rounded-md text-2xl bg-[#FF6666] text-white">Login</a>
            @endif

        </ul>
    </nav>
</header>

