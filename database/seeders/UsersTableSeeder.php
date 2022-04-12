<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "admin";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt('12345678'); 
        $user->role="admin";
        $user->save();
        $user1 = new User();
        $user1->name = "tama";
        $user1->email = "tama@gmail.com";
        $user1->password = bcrypt('12345678'); 
        $user1->role="staf";
        $user1->save();
        $user1 = new User();
        $user1->name = "alfian";
        $user1->email = "alfian@gmail.com";
        $user1->password = bcrypt('12345678'); 
        $user1->role="staf";
        $user1->save();
    }
}
