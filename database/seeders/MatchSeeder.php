<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class MatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matches')->insert([
            'name' => '10',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
        DB::table('matches')->insert([
            'name' => '20',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
        DB::table('matches')->insert([
            'name' => '30',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
        
    }
}
