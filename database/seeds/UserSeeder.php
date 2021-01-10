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
         for($i=1; $i<=5; $i++)
	        {
	            DB::table('user_model')->insert([
                    'Email'=>"abc@gmail.com",
	                'Name'=>'User '.$i,
                    'Password'=>"12345",
                    'PhoneNumber'=>"321452121",
                    'Status'=>1,	                
	                'Img'=>"1.png",
	            ]);
	        }

    }
}
