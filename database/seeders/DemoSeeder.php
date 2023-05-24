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
            School1DemoSeeder::class,
            School2DemoSeeder::class,
            Family1DemoSeeder::class,
            Family2DemoSeeder::class,
            Family3DemoSeeder::class,
            // UserDemoSeeder::class,
            // StudentDemoSeeder::class,
            // SubjectDemoSeeder::class,
            // ExamDemoSeeder::class,
            // ExamResultDemoSeeder::class,
        ]);
    }
}
