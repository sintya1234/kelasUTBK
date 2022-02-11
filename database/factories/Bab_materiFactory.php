<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class Bab_materiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul_bab' => $this->faker->sentence(mt_rand(2, 8)),
            'slug' => $this->faker->slug(),
            'file_materi' => null,
            'sub_materi_id' => mt_rand(1, 2)
        ];
    }
}
