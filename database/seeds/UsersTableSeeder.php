<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => \Illuminate\Support\Facades\Hash::make('123456'),
                'remember_token' => null,
            ],
            [
                'id'             => 2,
                'name'           => 'Institution',
                'email'          => 'institution@institution.com',
                'password'       => \Illuminate\Support\Facades\Hash::make('123456'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
