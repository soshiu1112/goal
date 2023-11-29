<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class RecruitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recruits')->insert([
            'regulation_id' =>'1',
            'user_id' => '1',
            'remarks' => '飽きたらやめる',
            'matches' => '20',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
        DB::table('recruits')->insert([
            'regulation_id' =>'2',
            'user_id' => '2',
            'remarks' => '一回きり',
            'matches' => '30',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
        DB::table('recruits')->insert([
            'regulation_id' =>'3',
            'user_id' => '3',
            'remarks' => '13',
            'matches' => '10',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
        DB::table('recruits')->insert([
            'regulation_id' =>'4',
            'user_id' => '4',
            'remarks' => '５戦',
            'matches' => '10',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
        DB::table('recruits')->insert([
            'regulation_id' =>'5',
            'user_id' => '5',
            'remarks' => '５戦',
            'matches' => '10',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);DB::table('recruits')->insert([
            'regulation_id' =>'6',
            'user_id' => '6',
            'remarks' => '５戦',
            'matches' => '10',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
    }
}
