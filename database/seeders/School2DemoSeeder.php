<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\School;
use Illuminate\Database\Seeder;

class School2DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orkelem = School::firstOrCreate([
            'id' => 'XXX00001',
            'name' => 'ORK Elementary School of Excellence',
            'phone' => '0123456789',
            'fax' => '0123456789',
            'email' => 'orkelementary@email.faux',
            'address1' => 'No 2, Persiaran Saujana 1',
            'address2' => 'Bandar Saujana Utama',
            'city' => 'Sungai Buloh',
            'postcode' => '47000',
            'state_iso_code' => 'MY-12',
            'country_alpha3' => 'MYS',
        ]);

        Classroom::firstOrCreate([
            'school_code' => $orkelem->id,
            'class_level' => 'R01',
            'name' => '1 Budi',
        ]);

        Classroom::firstOrCreate([
            'school_code' => $orkelem->id,
            'class_level' => 'R01',
            'name' => '1 Jasa',
        ]);

        Classroom::firstOrCreate([
            'school_code' => $orkelem->id,
            'class_level' => 'R01',
            'name' => '1 Bakti',
        ]);

        Classroom::firstOrCreate([
            'school_code' => $orkelem->id,
            'class_level' => 'R02',
            'name' => '2 Budi',
        ]);

        Classroom::firstOrCreate([
            'school_code' => $orkelem->id,
            'class_level' => 'R02',
            'name' => '2 Jasa',
        ]);

        Classroom::firstOrCreate([
            'school_code' => $orkelem->id,
            'class_level' => 'R02',
            'name' => '2 Bakti',
        ]);

        Classroom::firstOrCreate([
            'school_code' => $orkelem->id,
            'class_level' => 'R03',
            'name' => '3 Budi',
        ]);

        Classroom::firstOrCreate([
            'school_code' => $orkelem->id,
            'class_level' => 'R03',
            'name' => '3 Jasa',
        ]);

        Classroom::firstOrCreate([
            'school_code' => $orkelem->id,
            'class_level' => 'R03',
            'name' => '3 Bakti',
        ]);

        Classroom::firstOrCreate([
            'school_code' => $orkelem->id,
            'class_level' => 'R04',
            'name' => '4 Budi',
        ]);

        Classroom::firstOrCreate([
            'school_code' => $orkelem->id,
            'class_level' => 'R04',
            'name' => '4 Jasa',
        ]);

        Classroom::firstOrCreate([
            'school_code' => $orkelem->id,
            'class_level' => 'R04',
            'name' => '4 Bakti',
        ]);

        Classroom::firstOrCreate([
            'school_code' => $orkelem->id,
            'class_level' => 'R05',
            'name' => '5 Budi',
        ]);

        Classroom::firstOrCreate([
            'school_code' => $orkelem->id,
            'class_level' => 'R05',
            'name' => '5 Jasa',
        ]);

        Classroom::firstOrCreate([
            'school_code' => $orkelem->id,
            'class_level' => 'R05',
            'name' => '5 Bakti',
        ]);

        Classroom::firstOrCreate([
            'school_code' => $orkelem->id,
            'class_level' => 'R06',
            'name' => '6 Budi',
        ]);

        Classroom::firstOrCreate([
            'school_code' => $orkelem->id,
            'class_level' => 'R06',
            'name' => '6 Jasa',
        ]);

        Classroom::firstOrCreate([
            'school_code' => $orkelem->id,
            'class_level' => 'R06',
            'name' => '6 Bakti',
        ]);
    }
}
