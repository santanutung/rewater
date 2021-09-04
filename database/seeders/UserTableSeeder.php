<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Customer',
            'username' => 'customer',
            'email' => 'author@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'test',
            'username' => 'test',
            'email' => 'test@gmail.com',
            'password' => Hash::make('test'),
        ]);
    }

}
