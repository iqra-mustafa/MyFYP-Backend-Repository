<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'iqra',
            'email' => 'iqra@mustafa.com',
            'password' => Hash::make('1234')
         ]);
        DB::table('users')->insert([
           'name' => 'sundus',
           'email' => 'sundushafeez12@gmail.com',
           'password' => Hash::make('5678')
        ]);
    }
}
