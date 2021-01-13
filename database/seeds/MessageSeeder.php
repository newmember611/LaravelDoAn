<?php

use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
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
                'Sender_id' => 1,
                'Receiver_id' => 1,
                'Messenges' => 'Hello',
                'Conversations_id' => 1,
                'Status' => 1,
            ],
            [
                'Sender_id' => 2,
                'Receiver_id' => 1,
                'Messenges' => 'Hi',
                'Conversations_id' => 1,
                'Status' => 1,
            ],
            [
                'Sender_id' => 1,
                'Receiver_id' => 1,
                'Messenges' => 'How r u?',
                'Conversations_id' => 1,
                'Status' => 0,
            ],
            [
                'Sender_id' => 1,
                'Receiver_id' => 2,
                'Messenges' => 'Hello',
                'Conversations_id' => 1,
                'Status' => 1,
            ],
            [
                'Sender_id' => 3,
                'Receiver_id' => 2,
                'Messenges' => 'Hello',
                'Conversations_id' => 1,
                'Status' => 0,
            ],
        ];
        DB::table('message_models')->insert($data);
    }
}
