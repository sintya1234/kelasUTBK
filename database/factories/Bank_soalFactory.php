<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class Bank_soalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul_bank_soal' => $this->faker->sentence(mt_rand(2, 8)),
            'slug' => $this->faker->slug(),
            'file_bank_soal' => 'kelas_UTBK.pdf',
            'materi_id' => mt_rand(1, 2), 
        ];
    }
}
