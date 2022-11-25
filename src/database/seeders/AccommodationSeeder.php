<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Accommodation;
use App\Models\Region;

class AccommodationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Accommodation::factory()
            ->count(15)
            ->create()
            ->each(function($accommodation) {
                $region = Region::inRandomOrder()->first();
                $region->accommodations()->save($accommodation);
            });
    }
}
