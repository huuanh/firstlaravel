<?php

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'first_name'     => 'Sevilleja',
            'last_name'     => 'Chris',
//            'username' => 'sevilayha',
            'email'    => 'chris@scotch.io',
            'password' => Hash::make('awesome'),
        ));
    }

}