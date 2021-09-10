<nav class="navbar navbar-expand-md navbar-dark bg-dark">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link {{ Request::route()->getName() === 'home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::route()->getName() === 'about' ? 'active' : '' }}" href="{{ route('about') }}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::route()->getName() === 'contact' ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::route()->getName() === 'get-messages' ? 'active' : '' }}" href="{{ route('get-messages') }}">Messages</a>
            </li>
            {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li> --}}
        </ul>

    </div>
</nav>
