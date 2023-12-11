<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_users')->insert([
            'room_id' = 1,
            'user_id' = 1,
            ]);
        DB::table('room_users')->insert([
            'room_id' = 2,
            'user_id' = 2,
            ]);
        DB::table('room_users')->insert([
            'room_id' = 3,
            'user_id' = 3,
            ]);
        DB::table('room_users')->insert([
            'room_id' = 4,
            'user_id' = 1,
            ]);
        DB::table('room_users')->insert([
            'room_id' = 5,
            'user_id' = 2,
            ]);
        DB::table('room_users')->insert([
            'room_id' = 6,
            'user_id' = 3,
            ]);
    }
}
