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
            'user_id' => 1,
            'room_id' => 1,
            'message' => 'あいうえお',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
        DB::table('messages')->insert([
            'user_id' => 2,
            'room_id' => 2,
            'message' => 'あいうえおa',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
        DB::table('messages')->insert([
            'user_id' => 1,
            'room_id' => 3,
            'message' => 'あいうえおaaa',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
    }
}
