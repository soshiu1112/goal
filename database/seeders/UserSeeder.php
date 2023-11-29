<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DateTime;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'soshiu1112',
            'password' => Hash::make('pokarisu12'),
            'email' =>'soshiu1112@gmail.com',
            'image_path' =>'aaa.png',
            'rate' =>'11',
            'introdution' =>'',
            'ingameName' =>'soshiu',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'password' => Hash::make('password'),
            'email' =>Str::random(10).'@gmail.com',
            'image_path' =>'aaa.png',
            'rate' =>'11',
            'introdution' =>'',
            'ingameName' =>'soshiu2',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'password' => Hash::make('password'),
            'email' =>Str::random(10).'@gmail.com',
            'image_path' =>'aaa.png',
            'rate' =>'11',
            'introdution' =>'',
            'ingameName' =>'soshiu3',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'password' => Hash::make('password'),
            'email' =>Str::random(10).'@gmail.com',
            'image_path' =>'aaa.png',
            'rate' =>'11',
            'introdution' =>'',
            'ingameName' =>'soshiu4',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
            DB::table('users')->insert([
            'name' => Str::random(10),
            'password' => Hash::make('password'),
            'email' =>Str::random(10).'@gmail.com',
            'image_path' =>'aaa.png',
            'rate' =>'11',
            'introdution' =>'',
            'ingameName' =>'soshiu5',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
            DB::table('users')->insert([
            'name' => Str::random(10),
            'password' => Hash::make('password'),
            'email' =>Str::random(10).'@gmail.com',
            'image_path' =>'aaa.png',
            'rate' =>'11',
            'introdution' =>'',
            'ingameName' =>'soshiu6',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
    }
}
