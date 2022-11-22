<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Region;
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
        // Seed the default Registration Agents
        $this->call(UserSeeder::class);

        // Seeds the information that will be used to register groups
        $this->call(RegionSeeder::class);
        $this->call(AccommodationSeeder::class);

        $this->call(GroupSeeder::class);
        $this->call(BookingSeeder::class);




        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
