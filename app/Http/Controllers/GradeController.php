<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

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
}
