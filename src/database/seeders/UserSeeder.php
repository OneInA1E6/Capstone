<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) {
            User::factory()->create([
                    'email' => 'agent'.$i.'@gems.com',
                    'recently_changed' => [[
                        'Type' => 'Accommodation',
                        'Name' => 'Hotel 1',
                        'URL' => 'google.com',
                    ],[
                        'Type' => 'Group',
                        'Name' => 'Group 1',
                        'URL' => 'google.com',
                    ],[
                        'Type' => 'Booking',
                        'Name' => 'Booking 1',
                        'URL' => 'google.com',
                    ]]
            ]);
        }
        
        User::factory() -> create([ 
            'email' => 'test@test.com',
            'password' => bcrypt('password'),
            'recently_changed' => [[
                'Type' => 'Accommodation',
                'Name' => 'Hotel 1',
                'URL' => 'google.com',
            ],[
                'Type' => 'Group',
                'Name' => 'Group 1',
                'URL' => 'google.com',
            ],[
                'Type' => 'Booking',
                'Name' => 'Booking 1',
                'URL' => 'google.com',
            ]]
        ]);
    }
}
