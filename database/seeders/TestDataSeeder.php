<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\WorkProgram;

class TestDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create test admin user
        $user = User::firstOrCreate(
            ['email' => 'admin@kekbatam.com'],
            [
                'name' => 'Admin KEK Batam',
                'password' => bcrypt('password'),
                'role' => 'kabag'
            ]
        );

        // Create test work program
        $program = WorkProgram::create([
            'name' => 'Program KEK Kesehatan 2025 Q1',
            'description' => null,
            'status' => 'sedang_proses',
            'created_by' => $user->id
        ]);

        // Create progress history
        $program->progressHistories()->create([
            'status' => 'sedang_proses',
            'description' => 'Program monitoring KEK dalam development',
            'user_id' => $user->id
        ]);

        $this->command->info('Test data created successfully!');
        $this->command->info('Login with: admin@kekbatam.com / password');
        $this->command->info('Program URL: /program-kerja/' . $program->id);
    }
}
