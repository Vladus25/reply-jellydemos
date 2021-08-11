<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'email' => 'vladus25@gmail.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10)
            ]
        ];

        foreach($users as $user) {
            $query = DB::table('users') -> insert([
                'email' => $user['email'],
                'password' => $user['password'], // password
                'remember_token' => $user['remember_token']
            ]);
        }
    }
}
