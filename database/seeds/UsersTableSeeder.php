<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
	        	'role_id' => '1',
	        	'name' => 'Admin',
	        	'username' => 'admin',
	        	'email' => 'admin@gmail.com',
	        	'password' => bcrypt('rootadmin')
        	],

        	[
		        'role_id' => '2',
	        	'name' => 'Distributor',
	        	'username' => 'distributor',
	        	'email' => 'distributor@gmail.com',
	        	'password' => bcrypt('rootdistributor')
        	],
        	
        	[
	        	'role_id' => '3',
	            'name' => 'Manager',
	            'username' => 'manager',
	            'email' => 'manager@gmail.com',
	            'password' => bcrypt('rootmanager')
        	],
        	
        	[
	        	'role_id' => '4', 
	            'name' => 'User',
	            'username' => 'user',
	            'email' => 'user@gmail.com',
	            'password' => bcrypt('rootuser')
        	]

        ]);
    }
}
