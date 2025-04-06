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
