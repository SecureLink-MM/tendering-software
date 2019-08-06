<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Profile;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('Admin123!@#'),
            'is_admin' => '1'
        ]);

        Profile::create([
            'user_id' => '1',
            'profile_image' => 'default.png',
            'about' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus amet animi cupiditate dignissimos dolores eaque eius, ex facilis hic illum iusto libero minima nam numquam optio quaerat quas tempora voluptates?',
            'facebook_link' => 'www.facebook.com'
        ]);
    }
}

