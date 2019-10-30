<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Tauan Almeida',
            'email' =>'Tauan@hot.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
