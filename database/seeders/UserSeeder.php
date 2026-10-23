<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Administrator Testowy',
                'email' => 'admin@example.com',
                'role' => 'admin',
            ],
            [
                'name' => 'Anna Kowalska',
                'email' => 'nauczyciel@example.com',
                'role' => 'teacher',
            ],
            [
                'name' => 'Jan Nowak',
                'email' => 'uczen@example.com',
                'role' => 'student',
            ],
        ];

        foreach ($users as $data) {
            $user = User::firstOrNew([
                'email' => $data['email'],
            ]);

            if (!$user->exists) {
                $user->password = Hash::make('Test1234');
            }

            $user->name = $data['name'];
            $user->role = $data['role'];
            $user->save();
        }
    }
}
