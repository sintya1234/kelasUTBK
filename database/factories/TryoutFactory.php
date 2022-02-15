<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TryoutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    private static $order = 1;
    private static $materi = 1;

    public function definition()
    {
        if (self::$order > 10) {
            self::$order = 1;
            self::$materi = 2;
        }
        return [
            //
            'nomor_tryout' => self::$order++,
            'materi_id' => self::$materi
        ];
    }
}
