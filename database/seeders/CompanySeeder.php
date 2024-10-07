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
                'company_name' => 'Inspire Brands',
                'legal_name' => 'Inspire Brands, Inc.',
                'tax_id' => '123-456-789 (EXAMPLE)', // Replace with the actual tax ID if available
                'phone' => '18006252345', // Example phone number
                'address' => 'Three Glenlake Parkway NE, Atlanta, GA 30328, USA',
                'email' => 'contact@inspirebrands.com',
                'website' => 'www.inspirebrands.com',
                'city' => 'ATLANTA',
                'state' => 'GEORGIA',
                'country' => 'US',
                'status' => 'active',
                'logo' => 'inspire-brands-logo.png',
            ]

            // Add more companies here if needed
        ];

        Company::insert($companies);
    }
}
