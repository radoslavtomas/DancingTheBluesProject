<?php

use App\User;
use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;

class CustomUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$role = Role::where('name', 'admin')->firstOrFail();

		$rado = User::firstOrNew([
			'name' => 'Radoslav Tomas',
		]);
		if (!$rado->exists) {
			$rado->fill([
				'email'          => 'radoslav.tomas@gmail.com',
				'about'          => 'This is about Radoslav',
				'password'       => bcrypt('password'),
				'remember_token' => str_random(60),
				'role_id'        => $role->id,
			])->save();
		}

		$jessica = User::firstOrNew([
			'name' => 'Jessica Hobson',
		]);
		if (!$jessica->exists) {
			$jessica->fill([
				'email'          => 'Hobsonj@edgehill.ac.uk',
				'about'          => 'This is about Jessica',
				'password'       => bcrypt('password'),
				'remember_token' => str_random(60),
				'role_id'        => $role->id,
			])->save();
		}

		$supritha = User::firstOrNew([
			'name' => 'Supritha Aithal',
		]);
		if (!$supritha->exists) {
			$supritha->fill([
				'email'          => 'Aithals@edgehill.ac.uk',
				'about'          => 'This is about Supritha',
				'password'       => bcrypt('password'),
				'remember_token' => str_random(60),
				'role_id'        => $role->id,
			])->save();
		}

		$vicky = User::firstOrNew([
			'name' => 'Vicky Karkou',
		]);
		if (!$vicky->exists) {
			$vicky->fill([
				'email'          => 'Karkouv@edgehill.ac.uk',
				'about'          => 'This is about Vicky',
				'password'       => bcrypt('password'),
				'remember_token' => str_random(60),
				'role_id'        => $role->id,
			])->save();
		}
    }
}
