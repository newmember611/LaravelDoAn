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
                    'Password'=>"123",
                    'Email'=>$i."@gmail.com",
                    'PhoneNumber'=>'123400000',
                    'Status'=>1,
                    'Img'=>'1',
	            ]);
	        }

    }
}
