<?php

use App\Models\User;

class UserTableSeeder extends Seeder {
	public function run() {
		Sentry::createUser(array(
			'id'		=> 1,
			'email' 	=> 'admin@email.com',
			'password'	=> '123456',
			'activated'	=> true
			));
	}
}