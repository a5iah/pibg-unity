<?php

namespace Database\Seeders;

use App\Models\Person;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Family2DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //user parentf2a
        $parentf2a = User::firstOrCreate([
            'name' => 'parentf2a',
            'email' => 'parentf2a@email.faux',
            'password' => Hash::make('demouser123'),
            'email_verified_at' => now(),
        ]);

        //parentf2a
        Person::firstOrCreate([
            'forename' => 'Karim',
            'surname' => 'Jabar',
            'title_id' => 4,
            'ic_no' => '700101-01-0103',
            'ic_type_id' => 'MY01',
            'phone' => '0123456789',
            'email' => 'parentf2a@email.faux',
            'address1' => 'No 3, Jalan Dedap 3',
            'address2' => 'Saujana Utama 2',
            'address3' => 'Bandar Saujana Utama',
            'city' => 'Sungai Buloh',
            'postcode' => '47000',
            'state_iso_code' => 'MY-12',
            'country_alpha3' => 'MYS',
            'user_id' => $parentf2a->id,
        ]);

        //user parentf2i
        $parentf2i = User::firstOrCreate([
            'name' => 'parentf2i',
            'email' => 'parentf2i@email.faux',
            'password' => Hash::make('demouser123'),
            'email_verified_at' => now(),
        ]);

        //parentf2i
        Person::firstOrCreate([
            'forename' => 'Melati',
            'surname' => 'Atan',
            'title_id' => 5,
            'ic_no' => '700101-01-0104',
            'ic_type_id' => 'MY01',
            'phone' => '0123456789',
            'email' => 'parentf2i@email.faux',
            'address1' => 'No 4, Jalan Dedap 4',
            'address2' => 'Saujana Utama 2',
            'address3' => 'Bandar Saujana Utama',
            'city' => 'Sungai Buloh',
            'postcode' => '47000',
            'state_iso_code' => 'MY-12',
            'country_alpha3' => 'MYS',
            'user_id' => $parentf2i->id,
        ]);
    }
}
