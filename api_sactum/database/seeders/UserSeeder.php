<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //add user
       $user = new User();
       $user->name='veloso';
       $user->email='veloso.rr31@hotmail.com';
       $user->password= bcrypt("123456");
       $user->save();
       
       
    }
}
