<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $branches = [
            [
                'branch_name' => 'KFC Times Square',
                'branch_phone' => '123-456-7890',
                'branch_address' => '1528 Broadway',
                'branch_city' => 'New York',
                'branch_country' => 'USA',
                'branch_state' => 'New York',
                'company_id' => 1, // Make sure this matches an existing company ID
                'brand_id' => 1,   // Matches KFC's brand ID
            ],
            [
                'branch_name' => 'Pizza Hut Hollywood',
                'branch_phone' => '987-654-3210',
                'branch_address' => '7000 Hollywood Blvd',
                'branch_city' => 'Los Angeles',
                'branch_country' => 'USA',
                'branch_state' => 'California',
                'company_id' => 1, // Make sure this matches an existing company ID
                'brand_id' => 2,   // Matches Pizza Hut's brand ID
            ],
            [
                'branch_name' => 'Arby’s Midtown',
                'branch_phone' => '555-666-7777',
                'branch_address' => '1200 Peachtree St NE',
                'branch_city' => 'Atlanta',
                'branch_country' => 'USA',
                'branch_state' => 'Georgia',
                'company_id' => 2, // Matches the company ID for Inspire Brands
                'brand_id' => 3,   // Matches Arby's brand ID
            ],
        ];

        // Insert branches into the database
        Branch::insert($branches);
    }
}
