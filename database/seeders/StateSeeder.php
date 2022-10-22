<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\State;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::firstOrCreate([
            'iso_code' => 'MY-01',
            'country_alpha3' => 'MYS',
            'subdivision' => 'state',
            'name' => 'Johor',
        ]);

        State::firstOrCreate([
            'iso_code' => 'MY-02',
            'country_alpha3' => 'MYS',
            'subdivision' => 'state',
            'name' => 'Kedah',
        ]);

        State::firstOrCreate([
            'iso_code' => 'MY-03',
            'country_alpha3' => 'MYS',
            'subdivision' => 'state',
            'name' => 'Kelantan',
        ]);

        State::firstOrCreate([
            'iso_code' => 'MY-04',
            'country_alpha3' => 'MYS',
            'subdivision' => 'state',
            'name' => 'Melaka',
        ]);

        State::firstOrCreate([
            'iso_code' => 'MY-05',
            'country_alpha3' => 'MYS',
            'subdivision' => 'state',
            'name' => 'Negeri Sembilan',
        ]);

        State::firstOrCreate([
            'iso_code' => 'MY-06',
            'country_alpha3' => 'MYS',
            'subdivision' => 'state',
            'name' => 'Pahang',
        ]);

        State::firstOrCreate([
            'iso_code' => 'MY-07',
            'country_alpha3' => 'MYS',
            'subdivision' => 'state',
            'name' => 'Perak',
        ]);

        State::firstOrCreate([
            'iso_code' => 'MY-08',
            'country_alpha3' => 'MYS',
            'subdivision' => 'state',
            'name' => 'Perlis',
        ]);

        State::firstOrCreate([
            'iso_code' => 'MY-09',
            'country_alpha3' => 'MYS',
            'subdivision' => 'state',
            'name' => 'Pulau Pinang',
        ]);

        State::firstOrCreate([
            'iso_code' => 'MY-10',
            'country_alpha3' => 'MYS',
            'subdivision' => 'state',
            'name' => 'Sabah',
        ]);

        State::firstOrCreate([
            'iso_code' => 'MY-11',
            'country_alpha3' => 'MYS',
            'subdivision' => 'state',
            'name' => 'Sarawak',
        ]);

        State::firstOrCreate([
            'iso_code' => 'MY-12',
            'country_alpha3' => 'MYS',
            'subdivision' => 'state',
            'name' => 'Selangor',
        ]);

        State::firstOrCreate([
            'iso_code' => 'MY-13',
            'country_alpha3' => 'MYS',
            'subdivision' => 'state',
            'name' => 'Terengganu',
        ]);

        State::firstOrCreate([
            'iso_code' => 'MY-14',
            'country_alpha3' => 'MYS',
            'subdivision' => 'federal territory',
            'name' => 'Wilayah Persekutuan Kuala Lumpur',
        ]);

        State::firstOrCreate([
            'iso_code' => 'MY-15',
            'country_alpha3' => 'MYS',
            'subdivision' => 'federal territory',
            'name' => 'Wilayah Persekutuan Labuan',
        ]);

        State::firstOrCreate([
            'iso_code' => 'MY-16',
            'country_alpha3' => 'MYS',
            'subdivision' => 'federal territory',
            'name' => 'Wilayah Persekutuan Putrajaya',
        ]);
    }
}
