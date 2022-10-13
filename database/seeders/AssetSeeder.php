<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Asset;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Banking details
        // Commercial information
        // Financial
        // Not Applicable
        // Personal Information

        Asset::factory()->count(4)
        ->state( new sequence (
            [
                'name' => "Banking Details", 
                'description' => 'This include your personal bank detaIls'
            ],
            ['name' => "Commercial information",
             'description' => 'This involves a person profile'
            ],
            ['name' => " Financial",
             'description' => 'This is physical or electronic money '
            ],
            ['name' => "Personal Information",
             'description' => 'These are informations such as credit card number, National ID Card, etc.'
            ]
            )
        )
        ->create();
    
    }
}
