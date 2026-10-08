<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dziennik lekcyjny - oceny</title>
</head>
<body>
    <h1>Dziennik lekcyjny - oceny</h1>
    <p>Przykładowe oceny ucznia:</p>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Przedmiot</th>
                <th>Ocena</th>
                <th>Opis</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($grades as $grade)
                <tr>
                    <td>{{ $grade['subject'] }}</td>
                    <td>{{ $grade['grade'] }}</td>
                    <td>{{ $grade['description'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p>
        <a href="/">Powrót do strony głównej</a>
    </p>
</body>
</html>