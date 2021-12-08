<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        User::insert([
           [
            'name' => 'user',
            'email' => 'user@gmail.com',
            'phone' => '01700000000',
            'password' => Hash::make('password'),
           ],

           [
            'name' => 'user1',
            'email' => 'user1@gmail.com',
            'phone' => '01700000000',
            'password' => Hash::make('password'),
           ]
        ]);
    }
}
