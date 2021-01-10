<?php

use Illuminate\Database\Seeder;

class UserHaveConvationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'User_id' => '1',
                'Conversations_id' => '1',               
            ],
            [
                'User_id' => '2',
                'Conversations_id' => '2',
            ],
            [
                'User_id' => '3',
                'Conversations_id' => '3',
            ],
        ];
        DB::table('user_has_conversations')->insert($data);
    }
}
