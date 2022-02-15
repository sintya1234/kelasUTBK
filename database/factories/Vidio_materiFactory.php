<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class Vidio_materiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul_vidio_materi' => $this->faker->sentence(mt_rand(2, 8)),
            'file_vidio_materi' => "lY2yjAdbvdQ",
            'bab_materi_id' => mt_rand(1, 10)

            
        ];
    }
}
