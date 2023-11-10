<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            'body' => 'uooooo',
            'room_id' =>'1',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
        DB::table('messages')->insert([
            'body' => 'uooooo',
            'room_id' =>'2',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
        DB::table('messages')->insert([
            'body' => 'uooooo',
            'room_id' =>'3',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
        
    }
}
