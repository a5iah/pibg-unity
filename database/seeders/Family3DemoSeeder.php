<?php

namespace Database\Seeders;

use App\Models\Person;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Family3DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //user parentf3a
        $parentf3a = User::firstOrCreate([
            'name' => 'parentf3a',
            'email' => 'parentf3a@email.faux',
            'password' => Hash::make('demouser123'),
            'email_verified_at' => now(),
        ]);

        //parentf3a
        Person::firstOrCreate([
            'forename' => 'Kasim',
            'surname' => 'Selamat',
            'title_id' => 26,
            'ic_no' => '700101-01-0105',
            'ic_type_id' => 'MY01',
            'phone' => '0123456789',
            'email' => 'parentf3a@email.faux',
            'address1' => 'No 3, Jalan Dedap 3',
            'address2' => 'Saujana Utama 2',
            'address3' => 'Bandar Saujana Utama',
            'city' => 'Sungai Buloh',
            'postcode' => '47000',
            'state_iso_code' => 'MY-12',
            'country_alpha3' => 'MYS',
            'user_id' => $parentf3a->id,
        ]);

        //user parentf3i
        $parentf3i = User::firstOrCreate([
            'name' => 'parentf3i',
            'email' => 'parentf3i@email.faux',
            'password' => Hash::make('demouser123'),
            'email_verified_at' => now(),
        ]);

        //parentf3i
        Person::firstOrCreate([
            'forename' => 'Kamariah',
            'surname' => 'Dahlan',
            'title_id' => 46,
            'ic_no' => '700101-01-0106',
            'ic_type_id' => 'MY01',
            'phone' => '0123456789',
            'email' => 'parentf3i@email.faux',
            'address1' => 'No 3, Jalan Dedap 3',
            'address2' => 'Saujana Utama 2',
            'address3' => 'Bandar Saujana Utama',
            'city' => 'Sungai Buloh',
            'postcode' => '47000',
            'state_iso_code' => 'MY-12',
            'country_alpha3' => 'MYS',
            'user_id' => $parentf3i->id,
        ]);

        //anakf3c1 -school2
        Person::firstOrCreate([
            'forename' => 'Ali',
            'surname' => 'Kasim',
            'title_id' => 1,
            'ic_no' => '110101-01-0101',
            'ic_type_id' => 'MY01',
            'phone' => '0112345678',
            'email' => 'anakf3c1@email.faux',
            'address1' => 'No 3, Jalan Dedap 3',
            'address2' => 'Saujana Utama 2',
            'address3' => 'Bandar Saujana Utama',
            'city' => 'Sungai Buloh',
            'postcode' => '47000',
            'state_iso_code' => 'MY-12',
            'country_alpha3' => 'MYS',
        ]);
    }
}
