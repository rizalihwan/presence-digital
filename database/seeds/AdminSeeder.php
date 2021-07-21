<?php

use App\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Guru Waguy',
            'email' => 'guru@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'guru'
        ]);
    }
}
