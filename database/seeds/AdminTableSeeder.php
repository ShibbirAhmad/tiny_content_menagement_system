<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            'name' => 'Mr. Admin',
            'email' => 'adminblog@gmail.com',
            'password' => bcrypt('rootadmin'),
             

        ]);
    }
}
