@extends('layouts.app')

@section('content')

    <h2>Oceny</h2>
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

@endsection