<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dziennik Lekcyjny')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Dziennik lekcyjny</h1>

        <nav>
            <a href="/">Strona główna</a>
            <a href="/grades">Oceny</a>
            @auth
                @if (in_array(Auth::user()->role, ['teacher', 'admin']))
                    <a href="{{ route('grades.create') }}">Dodaj ocenę</a>
                @endif
            @endauth
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="nav-link">Wyloguj się</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="nav-link">Zaloguj się</a>
            @endauth
        </nav>
    </header>

    <hr>

    <main>
        @yield('content')
    </main>
    
</body>
</html>