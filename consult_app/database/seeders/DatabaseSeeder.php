<?php

namespace Database\Seeders;

// use App\Models\User;
use App\Models\Doctors;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //seed random users
        // User::factory(10)->create();

        Doctors::factory()->create([
            'doctorName' => 'Test',
            'doctorEmail' => 'test@gmail.com',
            'doctorPassword' => 'rayman2004'
        ]);
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
