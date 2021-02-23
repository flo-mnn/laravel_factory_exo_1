<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BuildingSeeder::class,
            FormationSeeder::class,
            FormationTypeSeeder::class
        ]);
        Student::factory(50)->create();
        // \App\Models\User::factory(10)->create();
    }
}
