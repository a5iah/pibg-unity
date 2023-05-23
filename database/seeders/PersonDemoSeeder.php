<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Person;
use Illuminate\Database\Seeder;

class PersonDemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Demo user 1
        $demoUser1 User::firstOrCreate(
            ['email' =>  request('email')],
            ['name' => request('name')]
        );

        //Parent 1
        Person::firstOrCreate([
            'forename' => 'Ramli',
            'surname' => 'Sarip',
            'title_id' => 1,
            'ic_no' => '700101-01-0101',
            'ic_type_id' => 'MY01',
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
            'user_id' => 2,
        ]);
    }
}
