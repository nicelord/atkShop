<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Model::unguard();

        DB::table('users')->delete();

        $users = array(
            ['name' => 'Ryan Chenkie', 'email' => 'admin@gmail.com', 'password' => Hash::make('123456')],
            ['name' => 'Chris Sevilleja', 'email' => 'user@gmail.com', 'password' => Hash::make('123456')],
            ['name' => 'Holly Lloyd', 'email' => 'holly@scotch.io', 'password' => Hash::make('secret')],
            ['name' => 'Adnan Kukic', 'email' => 'adnan@scotch.io', 'password' => Hash::make('secret')],
        );

        // Loop through each user above and create the record for them in the database
        foreach ($users as $user) {
            User::create($user);
        }

        Model::reguard();
    }

}
