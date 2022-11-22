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
            ->count(100)
            ->create()->each(function($accommodation) {
                $region = Region::inRandomOrder()->first();
                // dump($region->id);
                $accommodation->region($region);
                $accommodation->save();
            });
    }
}
