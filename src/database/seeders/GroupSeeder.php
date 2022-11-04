<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\GroupDetails;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        Group::factory()
            ->count(3)
            ->create();
=======
        Group::factory()->count(6)
            ->create()->each(function($group) {
                $details = GroupDetails::factory()->make();
                $group->details()->save($details);
            });
>>>>>>> origin
    }
}
