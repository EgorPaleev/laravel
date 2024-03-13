<?php

use Illuminate\Database\Seeder;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Egor',
                'email' => 'admin@mail.com',
                'password' => Hash::make('123'),
                'role' => 'admin',
            ],
            [
                'name' => 'Alena',
                'email' => 'alena@mail.com',
                'password' => Hash::make('123'),
                'role' => 'user',
            ],
            [
                'name' => 'Gleb',
                'email' => 'gleb@mail.com',
                'password' => Hash::make('123'),
                'role' => 'user',
            ],
            [
                'name' => 'Andrey',
                'email' => 'andrey@mail.com',
                'password' => Hash::make('123'),
                'role' => 'user',
            ],
            [
                'name' => 'Darya',
                'email' => 'darya@mail.com',
                'password' => Hash::make('123'),
                'role' => 'user',
            ],
            [
                'name' => 'Petr',
                'email' => 'petr@mail.com',
                'password' => Hash::make('123'),
                'role' => 'user',
            ],
            [
                'name' => 'Masha',
                'email' => 'masha@mail.com',
                'password' => Hash::make('123'),
                'role' => 'user',
            ],
        ]);
    }
}
