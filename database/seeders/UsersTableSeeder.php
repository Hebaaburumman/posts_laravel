<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
namespace Database\Seeders;


class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Create a regular user
        DB::table('users')->insert([
            'name' => 'Roz',
            'email' => 'roz@gmail.com',
            'password' => Hash::make('1111'),
            'type' => 'user',
        ]);

        // Create an admin user
        DB::table('users')->insert([
            'name' => 'mira',
            'email' => 'mira@gmail.com',
            'password' => Hash::make('1111'),
            'type' => 'admin',
        ]);
    }
}
