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
        Platform::factory()->count(4)
        ->state( new sequence (
            ['name' => "SMS",
             'description' => 'Scammer phone number',
             'input_tag_title' => 'phone number'
            ],

            ['name' => "E-mail",
             'description' => 'Scammer email address',
             'input_tag_title' => 'email address'
            ],

            ['name' => " Website",
             'description' => 'Scammer website',
             'input_tag_title' => 'website url/name'
            ],
            [
                'name' => "Facebook", 
                'description' => 'Were you scammed on Facebook?',
                'input_tag_title' => 'facebook page handle'
            ],
            ['name' => "WhatsApp",
             'description' => 'Was the scamm pulled through whasapt',
             'input_tag_title' => 'whatsapp phone number'

            ],

            ['name' => " Telegram",
             'description' => 'The best messaging platform with hackers.',
             'input_tag_title' => 'telegram phone number/username'
            ],
            )
        )
        ->create();
    }
}
