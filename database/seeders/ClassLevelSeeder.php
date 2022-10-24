<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ClassLevel;

class ClassLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClassLevel::firstOrCreate([
            'id' => 'P04',
            'name' => 'Pra-Sekolah 4 Tahun',
        ]);

        ClassLevel::firstOrCreate([
            'id' => 'P05',
            'name' => 'Pra-Sekolah 5 Tahun',
        ]);

        ClassLevel::firstOrCreate([
            'id' => 'P06',
            'name' => 'Pra-Sekolah 6 Tahun',
        ]);

        ClassLevel::firstOrCreate([
            'id' => 'R01',
            'name' => 'Tahun 1',
        ]);

        ClassLevel::firstOrCreate([
            'id' => 'R02',
            'name' => 'Tahun 2',
        ]);

        ClassLevel::firstOrCreate([
            'id' => 'R03',
            'name' => 'Tahun 3',
        ]);

        ClassLevel::firstOrCreate([
            'id' => 'R04',
            'name' => 'Tahun 4',
        ]);

        ClassLevel::firstOrCreate([
            'id' => 'R05',
            'name' => 'Tahun 5',
        ]);

        ClassLevel::firstOrCreate([
            'id' => 'R06',
            'name' => 'Tahun 6',
        ]);

        ClassLevel::firstOrCreate([
            'id' => 'M01',
            'name' => 'Tingkatan 1',
        ]);

        ClassLevel::firstOrCreate([
            'id' => 'M02',
            'name' => 'Tingkatan 2',
        ]);

        ClassLevel::firstOrCreate([
            'id' => 'M03',
            'name' => 'Tingkatan 3',
        ]);

        ClassLevel::firstOrCreate([
            'id' => 'M04',
            'name' => 'Tingkatan 4',
        ]);

        ClassLevel::firstOrCreate([
            'id' => 'M05',
            'name' => 'Tingkatan 5',
        ]);

        ClassLevel::firstOrCreate([
            'id' => 'M06',
            'name' => 'Tingkatan 6 Bawah',
        ]);


        ClassLevel::firstOrCreate([
            'id' => 'M07',
            'name' => 'Tingkatan 6 Atas',
        ]);
    }
}
