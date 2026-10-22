@extends('layouts.app')

@section('content')

    <h2>Dodawanie oceny</h2>

    <p>Formularz demonstrujący do wystawiania ocen</p>

    <form action="{{ route('grades.store') }}" method="POST">
        @csrf

        <div>
            <label for="subject">Przedmiot:</label>
            <select id="subject" name="subject">
                <option value="">-- Wybierz przedmiot --</option>
                <option value="Matematyka"
                    @selected(old('subject') == 'Matematyka')>
                    Matematyka
                </option>
                <option value="Język polski"
                    @selected(old('subject') == 'Język polski')>
                    Język polski
                </option>
                <option value="Informatyka"
                    @selected(old('subject') == 'Informatyka')>
                    Informatyka
                </option>
            </select>

            @error('subject')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="grade">Ocena:</label>

            <select id="grade" name="grade" required>
                <option value="">-- Wybierz ocenę --</option>
                <option value="1" 
                    @selected(old('grade') == '1')>
                    1
                </option>
                @for ($i=4; $i <=12; $i++)
                    @php
                        $gradeValue = $i / 2;
                    @endphp

                    <option value="{{ $gradeValue }}"
                        @selected(old('grade') == $gradeValue)>
                        {{ $gradeValue }}
                    </option>
                @endfor
            </select>
            @error('grade')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="description">Opis oceny</label>

            <select id="grade_type" name="grade_type" required>
                <option value="">-- Wybierz rodzaj oceny --</option>

                <option value="sprawdzian"
                    @selected(old('grade_type') == 'sprawdzian')>
                    Sprawdzian
                </option>

                <option value="kartkowka"
                    @selected(old('grade_type') == 'kartkowka')>
                    Kartkówka
                </option>

                <option value="odpowiedz"
                    @selected(old('grade_type') == 'odpowiedz')>
                    Odpowiedź ustna
                </option>

                <option value="praca_domowa"
                    @selected(old('grade_type') == 'praca_domowa')>
                    Praca domowa
                </option>

                <option value="aktywnosc"
                    @selected(old('grade_type') == 'aktywnosc')>
                    Aktywność
                </option>

                <option value="projekt"
                    @selected(old('grade_type') == 'projekt')>
                    Projekt
                </option>
            </select>
            @error('grade_type')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <button type="submit">Dodaj ocenę</button>
        </div>
    </form>

    <p>
        <a href="/grades">Powrót do listy ocen</a>
    </p>

@endsection