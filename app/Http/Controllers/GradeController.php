<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Subject;

class GradeController extends Controller
{
    public function index(): View
    {
        $grades = [
            [
                'subject' => 'Matematyka',
                'grade' => 5,
                'description' => 'Sprawdzian'
            ],
            [
                'subject' => 'Język polski',
                'grade' => 4,
                'description' => 'Kartkówka'
            ],
            [
                'subject' => 'Informatyka',
                'grade' => 6,
                'description' => 'Projekt'
            ],
        ];
        return view('grades.index', [
            'grades' => $grades
        ]);
    }
    
    public function create(): View
    {
        $subjects = Subject::orderBy('name')->get();

        return view('grades.create',[
            'subjects' => $subjects,
        ]);
    }

    public function store(Request $request)
    {
        //Walidacja danych przesłanych z formularza
        $validated = $request->validate([
            'subject' => ['required', 'in:Matematyka,Język polski,Informatyka'],
            'grade' => ['required', 'integer', 'between:1,6'],
            'grade_type' => [
                'required',
                'in:sprawdzian,kartkowka,odpowiedz,praca_domowa,aktywnosc,projekt'
            ],
        ]);

        //Wagi przypisane do poszczególnych rodzajów ocen
        $weights = [
            'sprawdzian' => 3,
            'kartkowka' => 2,
            'odpowiedz' => 2,
            'praca_domowa' => 1,
            'aktywnosc' => 1,
            'projekt' => 3,
        ];

        $weight = $weights[$validated['grade_type']];

        return response()->json([
            'subject' => $validated['subject'],
            'grade' => $validated['grade'],
            'grade_type' => $validated['grade_type'],
            'weight' => $weight,
        ]);
    }
}
