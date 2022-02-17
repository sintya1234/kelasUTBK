<?php

namespace Database\Seeders;

use App\Models\bab_materi;
use App\Models\bank_soal;
use App\Models\materi;
use App\Models\sub_materi;
use App\Models\tryout;
use App\Models\User;
use App\Models\vidio_materi;
use Database\Factories\TryoutFactory;
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
            'slug' => 'saintek',

        ]);

        materi::create([
            'nama_materi' => 'SOSHUM',
            'slug' => 'soshum',
        ]);

        materi::create([
            'nama_materi' => 'TPS',
            'slug' => 'tps',
        ]);

        materi::create([
            'nama_materi' => 'TPA',
            'slug' => 'tpa',
        ]);

        //untuk materi  SAINTEK
        sub_materi::create([
            'nama_sub_materi' => 'Matematika Saintek',
            'slug' => 'matematika-saintek',
            'materi_id' => '1',
        ]);

        sub_materi::create([
            'nama_sub_materi' => 'Fisika',
            'slug' => 'fisika',
            'materi_id' => '1',
        ]);

        sub_materi::create([
            'nama_sub_materi' => 'Kimia',
            'slug' => 'kimia',
            'materi_id' => '1',
        ]);

        sub_materi::create([
            'nama_sub_materi' => 'Biologi',
            'slug' => 'biologi',
            'materi_id' => '1',
        ]);

        //untuk materi  SOSHUM
        sub_materi::create([
            'nama_sub_materi' => 'Matematika',
            'slug' => 'matematika',
            'materi_id' => '2',
        ]);

        sub_materi::create([
            'nama_sub_materi' => 'Geografi',
            'slug' => 'geografi',
            'materi_id' => '2',
        ]);

        sub_materi::create([
            'nama_sub_materi' => 'Sosiologi',
            'slug' => 'sosiologi',
            'materi_id' => '2',
        ]);

        sub_materi::create([
            'nama_sub_materi' => 'Ekonomi',
            'slug' => 'ekonomi',
            'materi_id' => '2',
        ]);

        sub_materi::create([
            'nama_sub_materi' => 'Sejarah',
            'slug' => 'sejarah',
            'materi_id' => '2',
        ]);


        //ini vidio

        vidio_materi::create([
            'judul_vidio_materi' => 'pembelajaran vidio spongebob',
            'file_vidio_materi' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/DTtvqQRYWf4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'bab_materi_id' => '1',
        ]);

        vidio_materi::create([
            'judul_vidio_materi' => 'pembelajaran dora',
            'file_vidio_materi' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/jzEdPx3CyAw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'bab_materi_id' => '1',
        ]);

        vidio_materi::create([
            'judul_vidio_materi' => 'pembelajaran lala lili',
            'file_vidio_materi' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/MYLxENuMk5w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',

            'bab_materi_id' => '1',
        ]);

        vidio_materi::create([
            'judul_vidio_materi' => 'pembelajaran lulu',
            'file_vidio_materi' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/bUxd3jqCr94" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'bab_materi_id' => '1',
        ]);

        bank_soal::factory(20)->create();
        User::factory(10)->create();
        bab_materi::factory(20)->create();
        vidio_materi::factory(10)->create();
        tryout::factory(9)->create();
    }
}
