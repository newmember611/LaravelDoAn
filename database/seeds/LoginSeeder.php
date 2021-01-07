<?php

use Illuminate\Database\Seeder;

class LoginSeeder extends Seeder
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
                'name' => 'admin1',
                'email' => 'lxc150896@gmail.com',
                'password' => bcrypt('12345'),
                'status' => 1
            ],
            [
                'name' => 'admin2',
                'email' => 'lxc@gmail.com',
                'password' => bcrypt('12345'),
                'status' => 1
            ],
            [
                'name' => 'admin3',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345'),
                'status' => 1
            ],
        ];
        DB::table('users')->insert($data);
    }
}
