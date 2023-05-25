<?php

namespace Database\Seeders;

use App\Models\Person;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Family1DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //user parentf1a
        $parentf1a = User::firstOrCreate([
            'name' => 'parentf1a',
            'email' => 'parentf1a@email.faux',
            'password' => Hash::make('demouser123'),
            'email_verified_at' => now(),
        ]);

        //parentf1a
        Person::firstOrCreate([
            'forename' => 'Ramli',
            'surname' => 'Sarip',
            'title_id' => 1,
            'ic_no' => '700101-01-0101',
            'ic_type_id' => 'MY01',
            'phone' => '0123456789',
            'email' => 'parentf1a@email.faux',
            'address1' => 'No 1, Jalan Dedap 1',
            'address2' => 'Saujana Utama 2',
            'address3' => 'Bandar Saujana Utama',
            'city' => 'Sungai Buloh',
            'postcode' => '47000',
            'state_iso_code' => 'MY-12',
            'country_alpha3' => 'MYS',
            'user_id' => $parentf1a->id,
        ]);

        //user parentf1i
        $parentf1i = User::firstOrCreate([
            'name' => 'parentf1i',
            'email' => 'parentf1i@email.faux',
            'password' => Hash::make('demouser123'),
            'email_verified_at' => now(),
        ]);

        //parentf1i
        Person::firstOrCreate([
            'forename' => 'Aminah',
            'surname' => 'Abu',
            'title_id' => 2,
            'ic_no' => '700101-01-0102',
            'ic_type_id' => 'MY01',
            'phone' => '0123456789',
            'email' => 'parentf1i@email.faux',
            'address1' => 'No 1, Jalan Dedap 1',
            'address2' => 'Saujana Utama 2',
            'address3' => 'Bandar Saujana Utama',
            'city' => 'Sungai Buloh',
            'postcode' => '47000',
            'state_iso_code' => 'MY-12',
            'country_alpha3' => 'MYS',
            'user_id' => $parentf1i->id,
        ]);

        //anakf1c1 -school1
        $anakf1c1 = Person::firstOrCreate([
            'forename' => 'Fatihah',
            'surname' => 'Ramli',
            'title_id' => 3,
            'ic_no' => '080818-01-1818',
            'ic_type_id' => 'MY01',
            'phone' => '0112345678',
            'email' => 'anakf1c1@email.faux',
            'address1' => 'No 1, Jalan Dedap 1',
            'address2' => 'Saujana Utama 2',
            'address3' => 'Bandar Saujana Utama',
            'city' => 'Sungai Buloh',
            'postcode' => '47000',
            'state_iso_code' => 'MY-12',
            'country_alpha3' => 'MYS',
        ]);

        //anakf1c2 -school2
         $anakf1c2 = Person::firstOrCreate([
            'forename' => 'Sarah',
            'surname' => 'Ramli',
            'title_id' => 3,
            'ic_no' => '130303-01-0130',
            'ic_type_id' => 'MY01',
            'phone' => '0112345678',
            'email' => 'anakf1c2@email.faux',
            'address1' => 'No 1, Jalan Dedap 1',
            'address2' => 'Saujana Utama 2',
            'address3' => 'Bandar Saujana Utama',
            'city' => 'Sungai Buloh',
            'postcode' => '47000',
            'state_iso_code' => 'MY-12',
            'country_alpha3' => 'MYS',
        ]);
    }
}
