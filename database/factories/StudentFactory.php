<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "surname"=> $this->faker->lastname,
            "first" => $this->faker->firstName(null),
            "age" => $this->faker->numberBetween(18,40),
            "state" => $this->faker->boolean(80)
        ];
    }
}
