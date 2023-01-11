<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\GroupDetails;
use App\Models\Booking;
use App\Models\Accommodation;
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
        Group::factory()->count(6)
            ->create()->each(function($group) {
                $acc =Accommodation::inRandomOrder()->first();
                $numPeople = random_int(1, $acc->numRooms/4);

                $booking = Booking::factory()->make([
                    'group_id' => $group->id,
                    'accommodation_id' => $acc->id,
                ]);
                $group->isBooked = true;
                $group->booking()->save($booking);

                $members=[];

                for($i=0; $i<$numPeople; $i++){
                    array_push($members, ['name'=> fake()->firstName()]);
                }

                $info=[];
                if(fake()->boolean()){
                    array_push($info, ['type'=>'Email', 'info'=>fake()->email()]);
                }
                if(fake()->boolean()){
                    array_push($info, ['type' => 'Phone Number', 'info' =>fake()->phoneNumber()]);
                }

                $details = GroupDetails::factory()->make([
                    'group_members' => json_encode($members),
                    'has_pets'      =>fake()->boolean(),
                    'alternative_contact_information' => json_encode($info) ?? null,
                ]);
                $group->details()->save($details);
                $group->group_size = 1+count($members);
                $group->save();

            });

            Group::factory()->count(1)
            ->create()->each(function($group) {
                $acc =Accommodation::inRandomOrder()->first();

                $booking = Booking::factory()->make([
                    'group_id' => $group->id,
                    'accommodation_id' => $acc->id,
                ]);
                $group->isBooked = true;
                $group->booking()->save($booking);

                $members=[];

                $info=[];
                if(fake()->boolean()){
                    array_push($info, ['type'=>'Email', 'info'=>fake()->email()]);
                }
                if(fake()->boolean()){
                    array_push($info, ['type' => 'Phone Number', 'info' =>fake()->phoneNumber()]);
                }

                $details = GroupDetails::factory()->make([
                    'group_members' => json_encode($members),
                    'has_pets'      =>fake()->boolean(),
                    'alternative_contact_information' => json_encode($info) ?? null,
                ]);
                $group->details()->save($details);
                $group->save();

            });

            Group::factory()->count(8)
            ->create()->each(function($group) {
                $acc =Accommodation::inRandomOrder()->first();
                $numPeople = random_int(1, $acc->numRooms/4);

                $booking = Booking::factory()->make([
                    'group_id' => $group->id,
                    'accommodation_id' => $acc->id,
                ]);
                $group->isBooked = true;
                $group->booking()->save($booking);

                $members=[];

                for($i=0; $i<$numPeople; $i++){
                    array_push($members, ['name'=> fake()->firstName()]);
                }

                $info=[];
                if(fake()->boolean()){
                    array_push($info, ['type'=>'Email', 'info'=>fake()->email()]);
                }
                if(fake()->boolean()){
                    array_push($info, ['type' => 'Phone Number', 'info' =>fake()->phoneNumber()]);
                }

                $details = GroupDetails::factory()->make([
                    'group_members' => json_encode($members),
                    'has_pets'      =>fake()->boolean(),
                    'alternative_contact_information' => json_encode($info) ?? null,
                ]);
                $group->details()->save($details);
                $group->group_size = 1+count($members);
                $group->save();

            });
    }
}
