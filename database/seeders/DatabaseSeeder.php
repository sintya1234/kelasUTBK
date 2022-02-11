<?php

namespace Database\Seeders;

use App\Models\materi;
use App\Models\sub_materi;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        materi::create([
            'nama_materi' => 'SAINTEK',
        ]);

        materi::create([
            'nama_materi' => 'SOSHUM',
        ]);

        materi::create([
            'nama_materi' => 'TPS',
        ]);

        materi::create([
            'nama_materi' => 'TPA',
        ]);

        //untuk materi  SAINTEK
        sub_materi::create([
            'nama_sub_materi' => 'Matematika Saintek',
            'materi_id' => '1',
        ]);

        sub_materi::create([
            'nama_sub_materi' => 'Fisika',
            'materi_id' => '1',
        ]);

        sub_materi::create([
            'nama_sub_materi' => 'Kimia',
            'materi_id' => '1',
        ]);

        sub_materi::create([
            'nama_sub_materi' => 'Biologi',
            'materi_id' => '1',
        ]);

        //untuk materi  SOSHUM
        sub_materi::create([
            'nama_sub_materi' => 'Matematika',
            'materi_id' => '2',
        ]);

        sub_materi::create([
            'nama_sub_materi' => 'Geografi',
            'materi_id' => '2',
        ]);

        sub_materi::create([
            'nama_sub_materi' => 'Sosiologi',
            'materi_id' => '2',
        ]);

        sub_materi::create([
            'nama_sub_materi' => 'Ekonomi',
            'materi_id' => '2',
        ]);

        sub_materi::create([
            'nama_sub_materi' => 'Sejarah',
            'materi_id' => '2',
        ]);

     User::factory(10)->create();
    }
}
