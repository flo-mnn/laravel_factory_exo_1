<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buildings')->insert([
            "name" => 'MolenGeek',
            "description" => "MOLENGEEK, C’EST QUOI?
            MolenGeek est un écosystème tech situé au cœur de Molenbeek à Bruxelles. Notre mission est de rendre le secteur des technologies accessible à toute personne désirant surfer sur la vague du digital, peu importe les origines ou le niveau de formation.
            MolenGeek est composé de trois piliers principaux : un espace de coworking; des programmes de formation à long et court terme; et des évènements dynamiques, tels que des Hackathons, des Geektalks, etc."
        ]);
    }
}
