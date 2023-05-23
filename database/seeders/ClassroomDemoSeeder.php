<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Seeder;

class ClassroomDemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Classroom::firstOrCreate([
            'school_code' => 'XXX00000',
            'class_level' => 'M01',
            'name' => '1 Mawar',
        ]);

        Classroom::firstOrCreate([
            'school_code' => 'XXX00000',
            'class_level' => 'M01',
            'name' => '1 Cempaka',
        ]);

        Classroom::firstOrCreate([
            'school_code' => 'XXX00000',
            'class_level' => 'M02',
            'name' => '2 Mawar',
        ]);

        Classroom::firstOrCreate([
            'school_code' => 'XXX00000',
            'class_level' => 'M02',
            'name' => '2 Cempaka',
        ]);

        Classroom::firstOrCreate([
            'school_code' => 'XXX00000',
            'class_level' => 'M03',
            'name' => '3 Mawar',
        ]);

        Classroom::firstOrCreate([
            'school_code' => 'XXX00000',
            'class_level' => 'M03',
            'name' => '3 Cempaka',
        ]);

        Classroom::firstOrCreate([
            'school_code' => 'XXX00000',
            'class_level' => 'M04',
            'name' => '4 Mawar',
        ]);

        Classroom::firstOrCreate([
            'school_code' => 'XXX00000',
            'class_level' => 'M04',
            'name' => '4 Cempaka',
        ]);

        Classroom::firstOrCreate([
            'school_code' => 'XXX00000',
            'class_level' => 'M05',
            'name' => '5 Mawar',
        ]);

        Classroom::firstOrCreate([
            'school_code' => 'XXX00000',
            'class_level' => 'M05',
            'name' => '5 Cempaka',
        ]);
    }
}
