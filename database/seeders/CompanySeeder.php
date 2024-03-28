<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    public function run(): void
    {

        $new = Company::create([
                'name' => 'Super Company',
                'vatID' => '123456789',
                'address' => 'Company Address',
                'state' => 'State',
                'zipCode' => '12345',
                'country' => 'USA'

            ]
        );

    }
}
