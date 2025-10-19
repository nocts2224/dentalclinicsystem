<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a default admin if it doesn’t exist
        User::firstOrCreate(
            ['email' => 'admin@clinic.com'], // unique constraint
            [
                'name' => 'Default Admin',
                'password' => Hash::make('admin123'), // default password
                'role' => 'admin',
            ]
        );
    }
}
