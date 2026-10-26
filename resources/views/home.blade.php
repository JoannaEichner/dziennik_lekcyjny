@extends('layouts.app')

@section('title', 'Strona główna - Dziennik Lekcyjny')

@section('content')

    <h2>Witaj w dzienniku lekcyjnym!</h2>

    @auth
        <p>
            Zalogowany użytkownik: {{ Auth::user()->name }}
        </p>

        <p>
            Twoja rola: {{ Auth::user()->role }}
        </p>
    @endauth
@endsection