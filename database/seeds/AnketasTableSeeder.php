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
       DB::table('anketas')->insert([
            'name' => 'Aнкета 1: холодильники',
            'content' => '<data>commig soon...</data>',
            'results_ref' => '#',
            'count_results' => '0',
        	'user_id' => '1'        
        ]);

       DB::table('anketas')->insert([
            'name' => 'Aнкета 2: микроволновки',
            'content' => '<data>commig soon...</data>',
            'results_ref' => '#',
            'count_results' => '0',
        	'user_id' => '2'        
        ]);

       DB::table('anketas')->insert([
            'name' => 'Aнкета 3: пылесосы',
            'content' => '<data>commig soon...</data>',
            'results_ref' => '#',
            'count_results' => '0',
        	'user_id' => '1'        
        ]);

        
    }
}
