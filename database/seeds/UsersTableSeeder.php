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
            'name' => 'admin',
            'email' => 'admin'.'@mail.com',
            'password' => bcrypt('qwerty123'),
			'email_verified_at' => now(),
        	'remember_token' => Str::random(10),
            'created_at' => $ts, 
            'updated_at' => $ts                               
        ]);

       DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user'.'@example.com',
            'password' => bcrypt('qwerty123'),
			'email_verified_at' => now(),
        	'remember_token' => Str::random(10),
            'created_at' => $ts, 
            'updated_at' => $ts       
        ]);
        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'test'.'@example.com',
            'password' => bcrypt('qwerty123'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'created_at' => $ts, 
            'updated_at' => $ts       
        ]);
    }
}
