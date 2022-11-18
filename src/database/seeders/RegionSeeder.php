<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Region;
use App\Models\Accommodation;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Region::factory()
            ->count(5)
            ->create()->each(function($region) {
                $accommodation = Accommodation::factory()->make([
                    'region_id' => $region->id
                ]);
                $region->accommodations()->save($accommodation);
            });;
    }
}
