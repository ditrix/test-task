<?php

use Illuminate\Database\Seeder;

class AnketasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       //

        $ts = DB::raw('CURRENT_TIMESTAMP');

       DB::table('anketas')->insert([
            'name' => 'Aнкета 1: холодильники',
            'content' => '<data>commig soon...</data>',
            'results_ref' => '#',
            'count_results' => '0',
        	'user_id' => '1',
            'created_at' => $ts, 
            'updated_at' => $ts       
        ]);

       DB::table('anketas')->insert([
            'name' => 'Aнкета 2: микроволновки',
            'content' => '<data>commig soon...</data>',
            'results_ref' => '#',
            'count_results' => '0',
        	'user_id' => '2',
            'created_at' => $ts, 
            'updated_at' => $ts       
        ]);

       DB::table('anketas')->insert([
            'name' => 'Aнкета 3: пылесосы',
            'content' => '<data>commig soon...</data>',
            'results_ref' => '#',
            'count_results' => '0',
        	'user_id' => '1',
            'created_at' => $ts, 
            'updated_at' => $ts       
        ]);

        
    }
}
