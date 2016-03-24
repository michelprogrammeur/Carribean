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
        	[
                'name'       =>'Christina',
                'email'      =>'caribbean@gmail.com',
                'password'   => Hash::make('planner'),
                'status'     =>'admin',
        	]
        ]);
    }
}
