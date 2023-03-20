<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $model = collect(["320D,Z8,X5,X1"]);       
        $numer_of_doors = collect([3,5]);

        return [
            //
            "brand" => "BMW",
            "model" => $model->random(),
            "year" => rand(1999,2015),
            "max_speed" => rand(220,320),
            "is_automatic" => rand(0,1),
            "engine" => "v8",
            "number_of_doors" => $numer_of_doors->random()
        ];
    }
}