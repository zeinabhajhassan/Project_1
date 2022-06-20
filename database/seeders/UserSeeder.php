<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert info to database

        DB::table('users')->insert(
            [
                'name'=> 'hsein al mawla',
                'email'=>'info@gmail.com',
                'password'=>Hash::make('123456')
            ]
        );
    }
}
