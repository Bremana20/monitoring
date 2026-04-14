<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Kepala Bagian',
            'email' => 'kabag@kek-batam.go.id',
            'password' => bcrypt('password'),
            'role' => 'kabag',
        ]);

        User::create([
            'name' => 'Staf Administrasi',
            'email' => 'staf@kek-batam.go.id',
            'password' => bcrypt('password'),
            'role' => 'staf',
        ]);
    }
}
