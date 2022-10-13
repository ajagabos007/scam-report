<?php

namespace Database\Seeders;
use App\Models\Platform;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Platform::factory()->count(3)
        ->state( new sequence (
            [
                'name' => "Facebook", 
                'description' => 'Were you scammed on Facebook?'
            ],
            ['name' => "WhatsApp",
             'description' => 'Was the scamm pulled thou'
            ],
            ['name' => " Telegram",
             'description' => 'The best messagin platform with hackers.'
            ],
            )
        )
        ->create();
    }
}
