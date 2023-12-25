<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class RegulationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regulations')->insert([
            'rate' => "1500~1000",
           
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
        DB::table('regulations')->insert([
            
            'rate' => "2000~1500",
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
        DB::table('regulations')->insert([
            'rate' => "2500~2000",
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
        DB::table('regulations')->insert([
            'rate' => "3000~2500",
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
        DB::table('regulations')->insert([
            'rate' => "3500~3000",
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
        DB::table('regulations')->insert([,
            'rate' => "4000~3000",
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
        
        
    }
}
