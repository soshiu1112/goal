<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class RateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rates')->insert([
            'number' => '1000',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
        DB::table('rates')->insert([
            'number' => '2000',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
        DB::table('rates')->insert([
            'number' => '3000',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
    }
}
