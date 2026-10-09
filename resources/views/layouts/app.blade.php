<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dziennik lekcyjny</title>
</head>
<body>
    <header>
        <h1>Dziennik lekcyjny</h1>

        <nav>
            <a href="/">Strona główna</a>
            <a href="/grades">Oceny</a>
        </nav>
    </header>

    <hr>

    <main>
        @yield('content')
    </main>
    
</body>
</html>