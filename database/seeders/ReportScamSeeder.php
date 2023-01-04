<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ReportScam;
use App\Models\Asset;
use App\Models\Platform;

use Faker\Generator;
use Illuminate\Container\Container;

class ReportScamSeeder extends Seeder
{

    /**
     * The current Faker instance.
     *
     * @var \Faker\Generator
     */
    protected $faker;

    /**
     * Create a new seeder instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->faker = $this->withFaker();
    }

    /**
     * Get a new Faker instance.
     *
     * @return \Faker\Generator
     */
    protected function withFaker()
    {
        return Container::getInstance()->make(Generator::class);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 1000; $i++) { 
            # code...
            $report_scams= ReportScam::factory()->count(1)->create();
            foreach($report_scams as $report_scam){

                // loop through number of platforms used 
                for ($i=0; $i < fake()->numberBetween(0, Platform::all()->count()) ; $i++) { 
                    # code...
                    $platform = Platform::all()->random(1)->first();
                    $report_scam->platforms()->attach(
                        $platform->id,
                        ['link'=> 
                            $platform->slug=="sms"? fake()->e164PhoneNumber():(
                            $platform->slug=="e-mail"? fake()->safeEmail():(
                            $platform->slug=="website"? fake()->url():(
                            $platform->slug=="facebook"? "https://web.facebook.com/".fake()->userName():  "undisclosable platform"
                            )
                            )
                            )
                        ],
                    );
                }

                // loop through number of asset lost  
                for ($i=0; $i < fake()->numberBetween(0 , Asset::all()->count()) ; $i++) { 
                    # code...
                    $asset = Asset::all()->random(1)->first();
                    $report_scam->assets()->attach(
                        $asset->id, 
                        ['data'=> 
                            $asset->slug=="banking-details"? fake()->bankAccountNumber():(
                            $asset->slug=="commercial-information"? fake()->bankAccountNumber():(
                            $asset->slug=="personal-information"? fake()->name() .", ". fake()->e164PhoneNumber():(
                            $asset->slug=="financial"? fake()->randomNumber():  "undisclosable asset lost"
                            )
                            )
                            )
                        ]
                    );
                }

            }
        }
    }
}