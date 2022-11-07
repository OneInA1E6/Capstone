<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\GroupDetails;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::factory()->count(50)
            ->create()->each(function($group) {
                $details = GroupDetails::factory()->make();
                $group->details()->save($details);
            });
    }
}
