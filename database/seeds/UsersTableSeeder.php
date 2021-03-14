<?php

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
        //
     DB::table('users')->insert([
            'name' => 'dmitry',
            'email' => 'dmitry'.'@example.com',
            'password' => bcrypt('secret'),
			'email_verified_at' => now(),
        	'remember_token' => Str::random(10),            
        ]);

       DB::table('users')->insert([
            'name' => 'alex',
            'email' => 'alex'.'@example.com',
            'password' => bcrypt('secret'),
			'email_verified_at' => now(),
        	'remember_token' => Str::random(10),            
        ]);
        
    }
}
