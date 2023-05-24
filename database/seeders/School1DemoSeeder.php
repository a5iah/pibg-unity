<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\School;
use Illuminate\Database\Seeder;

class School1DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orkhigh = School::firstOrCreate([
            'id' => 'XXX00000',
            'name' => 'ORK High School of Excellence',
            'phone' => '0123456789',
            'fax' => '0123456789',
            'email' => 'orkhigh@email.faux',
            'address1' => 'No 1, Persiaran Saujana 1',
            'address2' => 'Bandar Saujana Utama',
            'city' => 'Sungai Buloh',
            'postcode' => '47000',
            'state_iso_code' => 'MY-12',
            'country_alpha3' => 'MYS',
        ]);

        Classroom::firstOrCreate([
            'school_code' => $orkhigh->id,
            'class_level' => 'M01',
            'name' => '1 Mawar',
        ]);

        Classroom::firstOrCreate([
            'school_code' => $orkhigh->id,
            'class_level' => 'M01',
            'name' => '1 Cempaka',
        ]);

        Classroom::firstOrCreate([
            'school_code' => $orkhigh->id,
            'class_level' => 'M02',
            'name' => '2 Mawar',
        ]);

        Classroom::firstOrCreate([
            'school_code' => $orkhigh->id,
            'class_level' => 'M02',
            'name' => '2 Cempaka',
        ]);

        Classroom::firstOrCreate([
            'school_code' => $orkhigh->id,
            'class_level' => 'M03',
            'name' => '3 Mawar',
        ]);

        Classroom::firstOrCreate([
            'school_code' => $orkhigh->id,
            'class_level' => 'M03',
            'name' => '3 Cempaka',
        ]);

        Classroom::firstOrCreate([
            'school_code' => $orkhigh->id,
            'class_level' => 'M04',
            'name' => '4 Mawar',
        ]);

        Classroom::firstOrCreate([
            'school_code' => $orkhigh->id,
            'class_level' => 'M04',
            'name' => '4 Cempaka',
        ]);

        Classroom::firstOrCreate([
            'school_code' => $orkhigh->id,
            'class_level' => 'M05',
            'name' => '5 Mawar',
        ]);

        Classroom::firstOrCreate([
            'school_code' => $orkhigh->id,
            'class_level' => 'M05',
            'name' => '5 Cempaka',
        ]);
    }
}
