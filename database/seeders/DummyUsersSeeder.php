<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'username' =>  'superadmin',
                'email' => 'superadmin@gmail.com',
                'role' => 'superadmin',
                'password' =>bcrypt('123'),
                'status' => 'active'
            ],
            [
                'username' =>  'admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' =>bcrypt('123'),
                'status' => 'active'
            ],
            [
                'username' =>  'user',
                'email' => 'user@gmail.com',
                'role' => 'user',
                'password' =>bcrypt('123'),
                'status' => 'active'
            ],
        ];

        foreach($userData as $key => $val) {
            User::create($val);
        }
    }
}
