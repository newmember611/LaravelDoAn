<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(LoginSeeder::class);
        $this->call(MessageSeeder::class);
        $this->call(UserHaveConvationSeeder::class);
        $this->call(ConversationsSeeder::class);
	}
}
