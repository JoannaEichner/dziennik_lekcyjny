<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = [
            'Matematyka',
            'Język polski',
            'Informatyka',
        ];

        foreach ($subjects as $name) {
            Subject::firstOrCreate([
                'name' => $name,
            ]);
        }
    }
}
