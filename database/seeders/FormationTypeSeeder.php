<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formation_types')->insert([
            [
                "name" => "Coding School 15"
            ],
            [
                "name" => "Coding School 16"
            ],
            [
                "name" => "Coding School 17"
            ],
            [
                "name" => "Coding School 18"
            ],
            [
                "name" => "AWS Certification"
            ],
            [
                "name" => "Google Suite for Teachers"
            ],
            [
                "name" => "Marketing Lab 6"
            ],
            [
                "name" => "Coding School 7"
            ],
            [
                "name" => "WordPress in 3 days"
            ],
            [
                "name" => "Adobe Suite for Beginners"
            ]
        ]);
    }
}
