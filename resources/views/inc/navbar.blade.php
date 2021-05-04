<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <i class="fas fa-sticky-note"></i>
            Posty
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain"
            aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('posts') }}">Posts</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth()
                <li class="nav-item">
                    <span class="nav-link">{{ auth()->user()->username }}</span>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger mx-0 mx-lg-1">Logout</button>
                    </form>
                </li>
                @endauth
                @guest()
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary mx-0 mx-lg-1 mb-2 mb-lg-0" href="{{ route('login') }}">Login</a>
                </li>
                @endguest

            </ul>
        </div>
    </div>
</nav>