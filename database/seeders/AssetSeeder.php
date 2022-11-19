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
        Asset::factory()->count(4)
        ->state( new sequence (
            [
                'name' => "Banking Details", 
                'description' => 'This include your personal bank detaIls',
                'input_tag_title' => 'bvn, atm card, hard token etc'

            ],
            [
                'name' => "Commercial information",
                'description' => 'This involves a person profile',
                'input_tag_title' => 'CAC cert, license etc',

            ],
            [
                'name' => " Financial",
                'description' => 'This is physical or electronic money ',
                'input_tag_title' => '(#) amount lost',

            ],
            ['name' => "Personal Information",
             'description' => 'These are informations such as credit card number, National ID Card, etc.',
             'input_tag_title' => 'phone number, date of birth ect.'

            ]
        ))
        ->create();
    
    }
}
