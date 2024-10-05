<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $companies = [
            [
                'company_name' => 'YUM BRANDS!',
                'legal_name' => 'YUM! BRANDS, INC.',
                'tax_id' => '123-456-789 (EXAMPLE)',
                'phone' => '15028748300',
                'address' => '1441 GARDINER LANE, LOUISVILLE, KY 40213, USA',
                'email' => 'contact@yum.com',
                'website' => 'www.yum.com',
                'city' => 'LOUISVILLE',
                'state' => 'ALABAMA', // Assuming this is the "Estado"
                'country' => 'US',
                'status' => 'active',
                'logo' => 'yum-logo.png',
            ],
            [
                'company_name' => 'McDonald\'s',
                'legal_name' => 'McDonald\'s Corporation',
                'tax_id' => '987-654-321 (EXAMPLE)',
                'phone' => '18006253678',
                'address' => '110 N Carpenter St, Chicago, IL 60607, USA',
                'email' => 'contact@mcdonalds.com',
                'website' => 'www.mcdonalds.com',
                'city' => 'CHICAGO',
                'state' => 'ILLINOIS',
                'country' => 'US',
                'status' => 'active',
                'logo' => 'mcdonalds-logo.png',
            ]
            // Add more companies here if needed
        ];

        Company::insert($companies);
    }
}
