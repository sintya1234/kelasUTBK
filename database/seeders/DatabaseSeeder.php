<?php

namespace Database\Seeders;

use App\Models\bab_materi;
use App\Models\materi;
use App\Models\sub_materi;
use App\Models\tryout;
use App\Models\User;
use App\Models\vidio_materi;
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

        
    
     User::factory(10)->create();
     bab_materi::factory(20)->create();
<<<<<<< HEAD
     vidio_materi::factory(10)->create();
=======
     tryout::factory(20)->create();
>>>>>>> d5a717251667fe222666e80c047773c2d12848d0
    }
}
