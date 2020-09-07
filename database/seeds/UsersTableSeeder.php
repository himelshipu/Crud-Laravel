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

    	\DB::table('users')->insert([
    		[
        		'name' => 'jaka',
        		'email' => 'jaka@gmail.com',	
        		'password' => bcrypt('jaka1234')
        	],
        	[
        		'name' => 'jaka1',
        		'email' => 'jaka1@gmail.com',	
        		'password' => bcrypt('jaka1234')
        	]
    	]);
        
    }
}
