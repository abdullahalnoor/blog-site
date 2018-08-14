<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user =  App\User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'admin' =>1 
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avaters/noor.jpg',
            'about' => 'lorem ispum is text ',
            'youtube' => 'www.youtube.com',
            'facebook' => 'www.facebook.com',
        ]);
        
    }
}
