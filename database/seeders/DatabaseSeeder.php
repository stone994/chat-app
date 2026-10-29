<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'User',
            'email' => 'user@user.com',
             'password' => \Illuminate\Support\Facades\Hash::make('User @12345'),
        ]);
        User::factory()->create([
            'name' => 'Admin',

            'email' => 'admin@admin.com',

            'password' => \Illuminate\Support\Facades\Hash::make('Admin@12345'),
            ]);
        User::factory()->create([
            'name' => 'Test',
            'email' => 'test@test.com',
            'password' => \Illuminate\Support\Facades\Hash::make('Test@12345'),
        ]);
    }
}
