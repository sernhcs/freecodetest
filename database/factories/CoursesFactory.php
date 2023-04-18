<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CoursesFactory extends Factory
{

    public function definition()
    {
        return [
            "name"=>$this->faker->sentence(),
            "descripcion"=>$this->faker->paragraph(),
            "categoria"=>$this->faker->randomElement(['dessa','laravel']),
        ];
    }
}
