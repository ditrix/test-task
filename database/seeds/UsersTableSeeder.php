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

    $ts = DB::raw('CURRENT_TIMESTAMP');

     DB::table('users')->insert([
            'name' => 'dmitry',
            'email' => 'dmitry'.'@example.com',
            'password' => bcrypt('secret'),
			'email_verified_at' => now(),
        	'remember_token' => Str::random(10),
            'created_at' => $ts, 
            'updated_at' => $ts                               
        ]);

       DB::table('users')->insert([
            'name' => 'alex',
            'email' => 'alex'.'@example.com',
            'password' => bcrypt('secret'),
			'email_verified_at' => now(),
        	'remember_token' => Str::random(10),
            'created_at' => $ts, 
            'updated_at' => $ts       
        ]);
        
    }
}
