<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [

            [
                'name' => 'admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('123123123'),
                'role' => 'admin'
            ],

            [
                'name' => 'user',
                'email' => 'user@example.com',
                'password' => Hash::make('user123'),
                'role' => 'user'
            ]
            ];

            foreach ($userData as $key => $val) {
                User::create($val);
            }
    }
}
