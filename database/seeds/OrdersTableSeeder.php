<?php

use Illuminate\Database\Seeder;



class OrdersTableSeeder extends Seeder
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

        for($i = 0; $i < 160; $i++){
            $id = rand(1,3);
            DB::table('orders')->insert([
                'content' => 'ORDER '.$i.':  orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ',

                'anketa_id' => $id,
                'created_at' => $ts, 
                'updated_at' => $ts       
            ]);
        }

        
    }
}
