<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room')->insert([
            'user_id' => '1',
            'message' =>'1111',
            'roompass' =>Int::random(4),
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
         DB::table('room')->insert([
            'user_id' => '2',
            'message' =>'1111',
            'roompass' =>'1111',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
         DB::table('room')->insert([
            'user_id' => '3',
            'message' =>'1111',
            'roompass' =>'1111',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
    }
}
