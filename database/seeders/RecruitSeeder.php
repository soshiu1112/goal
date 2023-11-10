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
            'matches_id' =>'1',
            'user_id' => '1',
            'rates_max' =>'2',
            'rates_min' =>'1',
            'remarks' => 'aiueo',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
        DB::table('recruits')->insert([
            'matches_id' =>'2',
            'user_id' => '2',
            'rates_max' =>'2',
            'rates_min' =>'1',
            'remarks' => 'aiueo',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
        DB::table('recruits')->insert([
            'matches_id' =>'3',
            'user_id' => '3',
          
            'rates_max' =>'2',
            'rates_min' =>'1',
            'remarks' => 'aiueo',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
    }
}
