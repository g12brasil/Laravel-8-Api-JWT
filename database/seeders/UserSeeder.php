<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      =>  'Admin',
            'email'     =>  'admin@admin.com',
            'password'  =>  bcrypt('J0rge.2017&'),
        ]);

        User::create([
         'name'      =>  'Jorge',
         'email'     =>  'jorge@galpha.co',
         'password'  =>  bcrypt('J0rge.2017&'),
         ]);

         User::create([
            'name'      =>  'Galpha',
            'email'     =>  'galpha@galpha.co',
            'password'  =>  bcrypt('J0rge.2017&'),
            ]);
    }
}
