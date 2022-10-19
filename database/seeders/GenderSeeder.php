<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Gender;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gender::factory()->count(2)
        ->state( new sequence (
            [
             'name' => "Male", 
            ],
            [
            'name' => "Female",
            ],
           
            )
        )
        ->create();
    }
}
