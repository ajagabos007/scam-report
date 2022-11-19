<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ScamTypeSeeder::class,
            AssetSeeder::class,
            EcommerceVendorSeeder::class,
            PlatformSeeder::class,
            TacticSeeder::class,
            GenderSeeder::class,
            CountrySeeder::class,
            StateSeeder::class,
            ReportScamSeeder::class,
        ]);
    }
}
