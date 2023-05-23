<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Seeder;

class SchoolDemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        School::firstOrCreate([
            'id' => 'XXX00000',
            'name' => 'ORK School of Excellence',
            'phone' => '0123456789',
            'fax' => '0123456789',
            'email' => 'ork.demo@sekolah.io',
            'address1' => 'No 2, Jalan Dedap 7',
            'address2' => 'Saujana Utama 2',
            'address3' => 'Bandar Saujana Utama',
            'city' => 'Sungai Buloh',
            'postcode' => '47000',
            'state_iso_code' => 'MY-12',
            'country_alpha3' => 'MYS',
        ]);
    }
}
