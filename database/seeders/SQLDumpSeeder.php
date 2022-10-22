<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SQLDumpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Using sql file based migration
         */
        $path = 'database/seeders/db-dump.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('SQL file ' . $path . ' processed!');
    }
}
