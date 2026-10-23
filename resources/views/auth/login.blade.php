@extends('layouts.app')

@section('title', 'Logowanie')

@section('content')
    <h2>Logowanie do dziennika</h2>

    <form method="POST" action="{{ route('login.store')}}">
        @csrf

        <div>
            <label for="email">Adres e-mail</label>
            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                required
            >

            @error('email')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password">Hasło:</label>
            <input
                type="password"
                id="password"
                name="password"
                required
            >

            @error( 'password')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Zaloguj się</button>
    </form>

@endsection