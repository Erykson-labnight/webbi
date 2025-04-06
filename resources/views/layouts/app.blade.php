<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superheroes App</title>
</head>
<body>

    <header>
        <nav>
            <ul>
                <li><a href="{{ route('genders.index') }}">Genders</a></li>
                <li><a href="{{ route('universes.index') }}">Universes</a></li>
                <li><a href="{{ route('superheroes.index') }}">Superheroes</a></li>

                @auth
                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('profile.edit') }}">Profile</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </li>
                @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @endauth
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2025 Superheroes App</p>
    </footer>

</body>
</html>
