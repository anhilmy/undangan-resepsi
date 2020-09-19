<?php

namespace Database\Factories;

use App\Models\Hidangan;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class HidanganFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = hidangan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nama" => $this->faker->name,
            "deskripsi" => $this->faker->text,
            "harga_per_porsi" => rand(10000, 50000),
        ];
    }
}
