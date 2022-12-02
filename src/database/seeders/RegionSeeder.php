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
        Region::factory()->create(['country' => 'British Columbia', 'locale' => 'BC']);
        Region::factory()->create(['country' => 'Alberta', 'locale' => 'AB']);
        Region::factory()->create(['country' => 'Saskatchewan', 'locale' => 'SK']);
        Region::factory()->create(['country' => 'Manitoba', 'locale' => 'MB']);
        Region::factory()->create(['country' => 'Yukon Territory', 'locale' => 'YT']);
        Region::factory()->create(['country' => 'Northwest Territories', 'locale' => 'NT']);
    }
}
