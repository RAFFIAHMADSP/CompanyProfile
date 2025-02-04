<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'username' => 'admin1',
                'email' => 'admin1@example.com',
                'password' => bcrypt('123456'),
                'name' => 'admin1',
                'role' => 'admin',
            ],

            [
                'username' => 'admin2',
                'email' => 'admin2@example.com',
                'password' => bcrypt('123456'),
                'name' => 'admin2',
                'role' => 'admin',
            ],

            [
                'username' => 'joko',
                'email' => 'joko1@example.com',
                'password' => bcrypt('joko123'),
                'name' => 'joko',
                'role' => 'user',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
