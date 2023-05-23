<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            SchoolDemoSeeder::class,
            ClassroomDemoSeeder::class,
            // PersonDemoSeeder::class,
            // UserDemoSeeder::class,
            // StudentDemoSeeder::class,
            // SubjectDemoSeeder::class,
            // ExamDemoSeeder::class,
            // ExamResultDemoSeeder::class,
        ]);
    }
}
