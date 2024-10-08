<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'name' => 'KFC',
                'location' => 'New York, USA',
                'category' => 'Food & Beverage',
                'logo' => 'logo_brand_a.png', // Example logo file
                'company_id' => 1, // Make sure this matches an existing company ID
            ],
            [
                'name' => 'Pizza hut',
                'location' => 'Los Angeles, USA',
                'category' => 'Retail',
                'logo' => 'logo_brand_b.png', // Example logo file
                'company_id' => 1, // Make sure this matches an existing company ID
            ],
            [
                'name' => 'Arby’s',
                'location' => 'Atlanta, GA, USA', // Updated to reflect Arby's main location
                'category' => 'Fast Food',
                'logo' => 'arbys-logo.png', // Example logo file
                'company_id' => 2, // Ensure this matches the existing company ID for Inspire Brands
            ]

        ];

        // Insert brands into the database
        Brand::insert($brands);
    }
}
