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

        $ankets = 10;  $users = 3;  $devices = ['заказ пылесоса','заказ микроволновки','заказ холодильнека'];
        
        for($i = 0; $i < $ankets; $i++){
            $userid = rand(1,$users);
            $name = 'Aнкета '.$i.$userid.' '.$devices[$userid-1];  

            DB::table('anketas')->insert([
                'name' => $name,                
                'content' => '<data>commig soon...</data>',
                'results_ref' => '#',
                'count_results' => '0',                
                'send_email' => true,
                'guestname' => '',
                'guestemail' => '',
                'guestphone' => '',
                'user_id' => $userid,
                'created_at' => $ts, 
                'updated_at' => $ts       
            ]);

        }

        for($i = 0; $i < 200; $i++){
            $id = rand(1,$ankets);

            $guestname = 'Иванов '.$id.$i;
            $email = 'ivanoff'.($id*50).'@example.com';
            $phone = '+38050'.$id.$i.$id.$i;

            DB::table('orders')->insert([
                'name' => $guestname,
                'email' => $email,
                'phone' => $phone,
                'content' => 'ORDER '.$i.':  orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ',

                'anketa_id' => $id,
                'created_at' => $ts, 
                'updated_at' => $ts       
            ]);
        }


    }
}
