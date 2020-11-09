<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class createUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'is_admin'=> '1',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'is_admin'=> '0',
                'password' => bcrypt('123456'),
            ]
            ];

        foreach($user as $key => $value){
            User::create($value);
        }
    }
}
