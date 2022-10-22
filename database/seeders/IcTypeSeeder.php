<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\IcType;

class IcTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        IcType::firstOrCreate([
            'id' => 'MY01',
            'name' => 'MYKAD',
            'country_alpha3' => 'MYS',
        ]);

        IcType::firstOrCreate([
            'id' => 'MY02',
            'name' => 'MYKID',
            'country_alpha3' => 'MYS',
        ]);

        IcType::firstOrCreate([
            'id' => 'MY03',
            'name' => 'MYTENTERA',
            'country_alpha3' => 'MYS',
        ]);

        IcType::firstOrCreate([
            'id' => 'MY04',
            'name' => 'POLIS',
            'country_alpha3' => 'MYS',
        ]);

        IcType::firstOrCreate([
            'id' => 'MY05',
            'name' => 'MYPR',
            'country_alpha3' => 'MYS',
        ]);

        IcType::firstOrCreate([
            'id' => 'MY06',
            'name' => 'MYKAS',
            'country_alpha3' => 'MYS',
        ]);

        IcType::firstOrCreate([
            'id' => 'MY20',
            'name' => 'BIRTH CERTIFICATE',
            'country_alpha3' => 'MYS',
        ]);

        IcType::firstOrCreate([
            'id' => 'MY30',
            'name' => 'PASSPORT',
            'country_alpha3' => 'MYS',
        ]);

        IcType::firstOrCreate([
            'id' => 'XX99',
            'name' => 'SIO UNITY INTERNAL ID',
            'country_alpha3' => 'MYS',
        ]);
    }
}
