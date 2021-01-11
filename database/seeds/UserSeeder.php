<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         for($i=1; $i<=6; $i++)
	        {
	            DB::table('user_model')->insert([
	                'Name'=>'User '.$i,
                    'Password'=>"CC",
                    'Email' =>"abc@gmail.com",
                    'PhoneNumber' =>"0123456789",
                    'Img' => "1.png",
	                'Status'=>rand(0,1),
	              
	            ]);
	        }

    }
}
