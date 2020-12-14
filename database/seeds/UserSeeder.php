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
         for($i=1; $i<=10; $i++)
	        {
	            DB::table('user_models')->insert([
	                'Name'=>'User '.$i,
	                'Password'=>"CC",
	                'Status'=>rand(0,1),
	              
	            ]);
	        }

    }
}
