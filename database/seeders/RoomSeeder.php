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
        DB::table('rooms')->insert([
            'regulation_id' => 1,
            'creater_id' =>  1,
            'opponent_id' => null,
            'remarks' => '飽きたらやめる',
            'matches' =>  20,
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
        DB::table('rooms')->insert([
            'regulation_id' => 2,
            'creater_id' =>  2,
            'opponent_id' => null,
            'remarks' => '一回きり',
            'matches' =>  30,
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
        DB::table('rooms')->insert([
            'regulation_id' => 3,
            'creater_id' =>  3,
            'opponent_id' => null,
            'remarks' => '13',
            'matches' =>  10,
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
        DB::table('rooms')->insert([
            'regulation_id' => 4,
            'creater_id' =>  4,
            'opponent_id' => null,
            'remarks' => '５戦',
            'matches' =>  10,
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
        DB::table('rooms')->insert([
            'regulation_id' => 5,
            'creater_id' =>  5,
            'opponent_id' => null,
            'remarks' => '５戦',
            'matches' =>  10,
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
        DB::table('rooms')->insert([
            'regulation_id' => 6,
            'creater_id' =>  6,
            'opponent_id' => null,
            'remarks' => '５戦',
            'matches' =>  10,
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
    }
}
