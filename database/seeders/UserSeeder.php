<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(10)->create();

        // User::factory()->create([
        //     'name' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'isadmin' => true,
        //     'password' => 'admin'
        // ]);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'awda@co.id',
        //     'password' => bcrypt('password'),
        //     'isadmin' => true,
        // ]);
    }
}
