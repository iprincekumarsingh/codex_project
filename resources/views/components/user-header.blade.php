<nav class="navbar navbar-light navbar-expand-md py-3">
    <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><span
                style="font-family: 'Mochiy Pop P One', sans-serif;">Help Desk @if (Auth::user()->role == '1')
                (Admin)
                @else
                (User)

                @endif</span></a><button data-bs-toggle="collapse" class="navbar-toggler"
            data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span
                class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse" id="navcol-2">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="{{route('home')}}">Home</a></li>

                @if (!Auth::user()->role == '1')

                <li style="border:1px none solid; border-radius:5px;background:#4b0ee4;" class="nav-item"><a
                        class="nav-link active" href="{{route('createTicket')}}" style="color: white
                ">Create ticekt</a></li>
                @else
                <li class="nav-item"><a class="nav-link active" href="{{route('tickets')}}">Tickets</a></li>
                @endif
                <li class="nav-item"><a class="nav-link" href="#">Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('logout')}}">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>