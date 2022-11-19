<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ScamType;
use App\Models\Country;
use App\Models\State;
use App\Models\Gender;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ReportScam>
 */
class ReportScamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'scam_type_id' => ScamType::all()->random(1)->first()->id,
            'is_in_progress' => fake()->boolean(),
            'scam_message' =>fake()->realTextBetween($minNbChars = 160, $maxNbChars = 300, $indexSize = 2),
             //fake()->paragraphs(fake()->randomDigit(), true),
            'date_of_first_contact' => fake()->dateTimeBetween('-1 year','+1 year'),
            'scammer_name' => fake()->name(),
            'scammer_phone_number' => fake()->e164PhoneNumber(),
            'scammer_email' => fake()->freeEmail(),
            'scammer_gender_id' => fake()->numberBetween(1,2),
            'scammer_address' => fake()->address(),
            'scammer_country_id' => $scammer_country_id = Country::firstOrCreate(['name'=>fake()->country()])->id,
            'scammer_state_id' => State::firstOrCreate([ 
                'country_id'=>$scammer_country_id,
                'name' => fake()->state()
            ])->id,

            'reporter_name' => fake()->name(),
            'reporter_phone_number' => fake()->e164PhoneNumber(),
            'reporter_email' => fake()->email(),
            'reporter_gender_id' => Gender::all()->random(1)->first()->id,
            'reporter_age' => fake()->date('Y-m'),
            'reporter_address' => fake()->address(),
            'reporter_country_id' => $reporter_country_id = Country::firstOrCreate(['name'=>fake()->country()])->id,
            'reporter_state_id' => State::firstOrCreate([ 
                'country_id'=>$reporter_country_id,
                'name' => fake()->state()
            ])->id,
            'reporter_user_agent' =>fake()->userAgent(),
            'reporter_device' => fake()->macAddress(),
            'reporter_ip_address' => fake()->ipv4(),
            // 'reporter_geo_position' => fake()
        ];
    }
}
