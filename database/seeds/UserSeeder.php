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
	                'Name'=>'User '.$i,
<<<<<<< HEAD
                    'Password'=>"CC",
                    'Email'=>"abc@gmail.com",
                    'Status'=>1,
=======
	                'Password'=>"CC",
	                'Status'=>rand(0,1),
>>>>>>> a205ed9309f740b999fb0c0406787a42c9ebdb82
	            ]);
	        }

    }
}
