<?php

namespace Database\Seeders;

use App\Models\Doctors;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Seed random users if needed
        // User::factory(10)->create();

        Doctors::factory()->create([
            'doctorName' => 'Test',
            'doctorEmail' => 'test@gmail.com',
            'doctorPassword' => Hash::make('rayman2004') // Hash the password
        ]);

        // Seed other data if necessary
    }
}
