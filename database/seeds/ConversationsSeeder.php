<?php

use Illuminate\Database\Seeder;

class ConversationsSeeder extends Seeder
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
                    'User_one' => '1',
                    'User_two' => '2',
                ],
                [
                    'User_one' => '3',
                    'User_two' => '4',
                ],
                [
                    'User_one' => '5',
                    'User_two' => '6',
                ],
            ];
        DB::table('conversation')->insert($data);
    }
}
